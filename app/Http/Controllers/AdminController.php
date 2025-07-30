<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorLog;
use Carbon\Carbon;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth'); // restricts access to logged-in users
    }

    
   
    public function index()
    {
        return view('admin.index', [
            'todayCount'     => VisitorLog::whereDate('created_at', today())->count(),
            'thisWeekCount'  => VisitorLog::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'thisMonthCount' => VisitorLog::whereMonth('created_at', now()->month)->count(),
            'totalCount'     => VisitorLog::count(),
            'dailyVisitors'  => VisitorLog::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                                    ->groupBy('date')
                                    ->orderBy('date')
                                    ->pluck('count', 'date')
                                    ->toArray(),
        ]);
    }
}
