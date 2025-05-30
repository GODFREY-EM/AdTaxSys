<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_type',
        'report_date',
        'report_details',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class); // If applicable
    }
}
