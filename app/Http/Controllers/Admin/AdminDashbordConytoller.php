<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use App\Helpers\Helper;

class AdminDashbordConytoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();

        $data->name = $request->name;
        $data->address = $request->address;
        $data->customerId = Helper::IDGenerator(new User, 'customerId', 5, 'GCN');
        $data->number = $request->number;
        $data->nudNo = $request->nudNo;
        $data->area = $request->area;
        $data->connectiondate = $request->connectiondate;
        $data->connectiontype = $request->connectiontype;
        $data->connectiontype = $request->connectiontype;
        $data->billamount = $request->billamount;
        $data->usertype = $request->usertype;
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
        $editData = User::find($id);
        return view('adminPanel.page.editCustomer', compact('editData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $data = User::find($id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->number = $request->number;
        $data->nudNo = $request->nudNo;
        $data->area = $request->area;
        $data->connectiondate = $request->connectiondate;
        $data->connectiontype = $request->connectiontype;
        $data->billamount = $request->billamount;

        $data->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("ok");
        $delet = User::find($id);
        $delet->delete();
        return redirect()->route('home');
    }
}
