<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Order; // Assuming you have an Order model for income
use Illuminate\Http\Request;

class FinanceReportController extends Controller
{
    public function index()
    {
        $totalIncome = Order::sum('total_amount'); // Assuming total_amount field in Orders
        $totalExpenses = Expense::sum('amount');
        $netProfit = $totalIncome - $totalExpenses;

        return view('dashboard.financial_report.index', compact('totalIncome', 'totalExpenses', 'netProfit'));
    }
}

