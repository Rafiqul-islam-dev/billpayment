<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Bill;
use DB;

class MonthlyController extends Controller
{


    public function January()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'January')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function February()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'February')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function March()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'March')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function April()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'April')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function May()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'May')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function June()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'June')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function July()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'July')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }
    public function August()
    {
    }


    public function September()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'September')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function October()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'October')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function November()
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'November')
            ->get();
        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }

    public function December()
    {
        
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.MonthName', '=', 'December')
            ->get();

        return view('adminPanel.page.monthlyBill', compact('billColletd',));
    }
}
