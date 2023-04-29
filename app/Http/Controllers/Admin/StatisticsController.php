<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index()
    {
        Carbon::setLocale('it'); // set locale to Italian
        
        $orders = Auth::user()->restaurant
            ->foods()
            ->with('orders')
            ->get()
            ->pluck('orders')
            ->flatten()
            ->groupBy(function ($order) {
                return $order->order_date->format('Y-m');
            })
            ->map(function ($orders, $yearMonth) {
                return [
                    'year_month' => $yearMonth,
                    'count' => $orders->unique('id')->count(),
                ];
            })
            ->sortBy('year_month')
            ->values();

        $startYearMonth = Carbon::now()->subYears(1)->format('Y-m');
        $endYearMonth = Carbon::now()->format('Y-m');

        $labels = [];
        $counts = [];

        $currentYearMonth = $startYearMonth;
        while ($currentYearMonth <= $endYearMonth) {
            $labels[] = ucfirst(Carbon::createFromFormat('Y-m', $currentYearMonth)->translatedFormat('F Y'));
            $counts[] = $orders->where('year_month', $currentYearMonth)->sum('count');
            $currentYearMonth = Carbon::createFromFormat('Y-m', $currentYearMonth)->addMonth()->format('Y-m');
        }

        return view('admin.statistics', compact('labels', 'counts'));
    }
}
