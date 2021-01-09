<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\Models\User;
use App\Models\Bill;
use DB;

class DeuController extends Controller
{


    public function January()
    {
        $bills = Bill::where('MonthName', '=', 'January')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function February()
    {
        $bills = Bill::where('MonthName', '=', 'February')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function March()
    {
        $bills = Bill::where('MonthName', '=', 'March')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function April()
    {
        $bills = Bill::where('MonthName', '=', 'April')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function May()
    {
        $bills = Bill::where('MonthName', '=', 'May')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function June()
    {
        $bills = Bill::where('MonthName', '=', 'June')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function July()
    {
        $bills = Bill::where('MonthName', '=', 'July')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }
    public function August()
    {
        $bills = Bill::where('MonthName', '=', 'August')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }


    public function September()
    {
        $bills = Bill::where('MonthName', '=', 'September')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function October()
    {
        $bills = Bill::where('MonthName', '=', 'October')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function November()
    {
        $bills = Bill::where('MonthName', '=', 'November')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }

    public function December()
    {
        $bills = Bill::where('MonthName', '=', 'December')->pluck('userID');
        $deuUsers = User::where('usertype', '=', 'user')->whereNotIn('id', $bills)->get();
        // dd($users);
        return view('adminPanel.page.deuBillList', compact('deuUsers',));
    }



    // public function deuBill()
    // {
    //     $bills = Bill::where('MonthName', '=', 'January')->pluck('userID');
    //     $users = User::whereNotIn('id', $bills)->get();
    //     dd($users);
    // }
}
