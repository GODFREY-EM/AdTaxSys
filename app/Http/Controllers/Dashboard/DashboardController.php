<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Promotion;
use App\Models\Advertiser;
use App\Models\Billboard;

class DashboardController extends Controller
{
    public function index()
    {
        $total_collected = Order::where('order_status', 'complete')->sum('pay');
        $total_due = Order::where('order_status', 'pending')->sum('due');

        return view('dashboard.index', [
            // Financial Metrics
            'total_collected_taxes' => $total_collected,
            'total_outstanding_taxes' => $total_due,
            'net_tax_revenue' => $total_collected - $total_due,
            'enforcement_costs' => 0, // Optional: can be dynamically calculated later

            // Ad Space & Clients
            'total_approved_ads' => Promotion::where('status', 'approved')->count(),
            'total_pending_ads' => Promotion::where('status', 'pending')->count(),
            'total_promotions' => Promotion::count(),
            'total_billboards' => Billboard::count(),
            'total_advertisers' => Advertiser::count(),
            'total_clients' => Customer::count(),
            'complete_orders_count' => Order::where('order_status', 'complete')->count(),
            'total_ad_spaces' => Billboard::count(),
            'pending_applications' => Promotion::where('status', 'pending')->count(),

            // For UI/Insight Cards
            'products' => Product::latest()->take(4)->get(),
            'new_products' => Product::latest()->take(3)->get(),

            // NEW: For Top Assets & Recent Registrations Section
            'top_assets' => Billboard::orderByDesc('tax_amount')->take(4)->get(),
            'new_ads' => Promotion::latest()->take(4)->get(),

            // Approved Billboards
            'approved_billboards' => Billboard::where('status', 'approved')->get(),

            // Approved Advertisements (for your Blade view)
            'approved_advertisements' => Promotion::where('status', 'approved')->get(),
        ]);
    }
}
