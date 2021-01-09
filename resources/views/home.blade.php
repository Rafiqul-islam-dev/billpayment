@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default headerTextcabl">
                    গ্রাহকের নামের তালিকা
                    <a href="" class="btn btn-info" style="float: right" data-toggle="modal" data-target="#loginModal">Add
                        New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                         <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>গ্রাহক আইডি</th>
                                <th>নাম</th>
                                <th>ঠিকানা</th>
                                <th>মোবাইল নাম্বার</th>
                                <th>বিলের পরিমাণ</th>
                                <th>নুড নাম্বার</th>
                                <th>এরিয়া</th>
                                <th>সংযোগের তারিখ</th>
                                <th>সংযোগের ধরন</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($allData as $kye => $row)
                                <tr>
                                    <td>{{ $kye + 1 }}</td>
                                    <td>{{ $row->customerId }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->number }}</td>
                                    <td>{{ $row->billamount }}</td>
                                    <td>{{ $row->nudNo }}</td>
                                    <td>{{ $row->area }}</td>
                                    <td>{{ $row->connectiondate }}</td>
                                    <td> {{ $row->connectiontype == '1' ? 'ডিস' : 'ইন্টারনেট' }}</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="{{ url('customer', $row->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a  data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="{{ url('customerProfile', $row->id) }}" class="btn btn-success">View<i class="ri-delete-bin-line"></i></a>

                                             {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['customer.destroy', $row->id],]) !!}
                                                <a href="#" class="btn btn-danger" id="delete" onclick="$(this).closest('form').submit();" >Delete</a>
                                            {!! Form::close() !!} --}}
                                            {{-- {{ Form::open(['route' => ['customer.destroy', $row->id], 'method' => 'delete']) }} {{ Form::close() }}
                                            <a href="#" class="dropdown-item submit-previous-form" title="Delete user"><i class="icon-trash"></i> Delete him</a> --}}
                                                 @if(Auth::user()->usertype=='Admin')
                                            <a id="delete" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="delete" href="{{ url('customer.destroy', $row->id) }} "
                                                class="btn btn-danger" >Delete</a>
                                                 @endif
                                                 {{-- <a class="trashButton" href="{{ URL::route('customer.destroy',$row['id']) }}" style="cursor: pointer;"><i class="fa fa-trash-o"></i></a> --}}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach




                        </tbody>
                    </table>
                    </div>

                    <div class="modal fade" id="loginModal">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true" class="fa fa-times"></span></button>
                                    <h2 class="modal-title" id="exampleModalLabel">গ্রাহক তথ্য</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form id="signupForm" method="POST" class="form-horizontal"
                                            action="{{ url('customer') }}">
                                            @csrf
                                            <div class="form-group">

                                                <input type="hidden" class="form-control" value="user" name="usertype" />
                                            </div>
                                            <div class="form-group">
                                                <label for="firstname">নাম</label>
                                                <input type="text" class="form-control" id="firstname" name="name" />
                                            </div>

                                            <div class="form-group">
                                                <label for="lastname">ঠিকানা</label>
                                                <input type="text" class="form-control" id="lastname" name="address" />
                                            </div>

                                            <div class="form-group">
                                                <label for="username">মোবাইল নাম্বার</label>
                                                <input type="text" class="form-control" id="username" name="number" />
                                            </div>

                                            <div class="form-group">
                                                <label for="email">নুড নাম্বার</label>
                                                <input type="text" class="form-control" id="email" name="nudNo" />
                                            </div>

                                            <div class="form-group">
                                                <label for="password">এরিয়া</label>
                                                <input type="text" class="form-control" id="password" name="area" />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">বিলের পরিমাণ</label>
                                                <input type="text" class="form-control" id="password" name="billamount" />
                                            </div>

                                            <div class="form-group">
                                                <label for="confirm_password">সংযোগের তারিখ</label>
                                                <input type="date" class="form-control" id="connectionDate"
                                                    name="connectiondate" />
                                            </div>
                                            <div class="form-group ">
                                                <label for="inputState">সংযোগের ধরন</label>
                                                <select id="inputState" class="form-control" name="connectiontype">
                                                    <option selected>Choose...</option>
                                                    <option value="1">ডিস</option>
                                                    <option value="2">ইন্টারনেট</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup"
                                                    value="Sign up">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
