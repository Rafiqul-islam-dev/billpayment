@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default headerTextcabl">
                    বকেয়া বিল
                    <a href="" class="btn btn-info" style="float: right" data-toggle="modal" data-target="#loginModal">Add
                        New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                         <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ক্রমিক নং</th>
                                <th>নাম</th>
                                <th>গ্রাহক আইডি</th>
                                {{-- <th>মাস</th> --}}
                                <th>ঠিকানা</th>
                                <th>এরিয়া</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($deuUsers as $key => $row)



                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    {{-- <td>{{$row->Date}}</td> --}}
                                    <td>{{$row->customerId}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->area}}</td>

                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href=""
                                                class="btn btn-warning">Edit</a>
                                            <a id="delete" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="" class="btn btn-danger">Delete<i class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>

                                </tr>

                                @endforeach



                        </tbody>
                    </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
