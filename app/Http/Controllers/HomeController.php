<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['allData'] = User::where('usertype', '=', "user")->get();
        return view('home', $data);
    }

    public function customerProfile($id)
    {
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.userId', '=', $id)
            ->get();
        $userName = User::find($id);
        $total = DB::Table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->where('bills.userId', '=', $id)
            ->sum('amount');
        return view('adminPanel.page.coustomerProfile', compact('billColletd', 'userName', 'total'));
    }
}
