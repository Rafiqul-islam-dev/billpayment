<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bill;
use DB;



class BillCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allData = User::where('usertype', '=', "user")->get();
        $billColletd = DB::table('bills')
            ->join('users', 'bills.userId', '=', 'users.id')
            ->select('bills.*', 'users.name')
            ->get();
        // dd("$billColletd");
        return view('adminPanel.page.billCollection', compact('allData', 'billColletd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Bill();



        $data->userId = $request->userId;
        $data->billStatus = $request->billStatus;
        $data->MonthName = $request->MonthName;
        $data->Amount = $request->Amount;
        $data->Date = $request->Date;
        $data->PaymentType = $request->PaymentType;
        $data->year = $request->year;
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editData = Bill::find($id);
        return view('adminPanel.page.editBillCollection', compact('editData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
