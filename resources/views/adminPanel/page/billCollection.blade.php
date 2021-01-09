@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default headerTextcabl">
                    মাসিক বিল আদায়
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
                                <th>মাস</th>
                                <th>বিলের মাধ্যাম</th>
                                <th>বিলের পরিমাণ</th>
                                <th>বিল আদায়ের তারিখ</th>
                                <th>বছর</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($billColletd as $key => $row)



                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->MonthName}}</td>
                                    <td>{{$row->PaymentType}}</td>
                                    <td>{{$row->Amount}}</td>
                                    <td>{{$row->Date}}</td>
                                    <td>{{$row->year}}</td>

                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="{{ url('Bill', $row->id) }}"
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

                    <div class="modal fade" id="loginModal">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true" class="fa fa-times"></span></button>
                                    <h2 class="modal-title" id="exampleModalLabel">বিল</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form id="signupForm" method="POST" class="form-horizontal"
                                            action="{{ url('Bill') }}">
                                            @csrf

                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="1" name="billStatus" />
                                            </div>

                                            <div class="form-group ">
                                                <label for="inputState">গ্রাহকের নাম</label> <br>
                                                <!-- Dropdown -->
                                                <select id='selUser'  class="form-control" name="userId" style="width: 300px; height: 100px !important;" required>
                                                <option >Select User</option>

                                                @foreach ($allData as $row)
                                                <option value='{{$row->id}}'>{{$row->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">মাস</label>
                                                <select id="inputState" class="form-control col-lg-5" name="MonthName" required>
                                                    <option selected>Choose...</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">June</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="username">টাকার পরিমান</label>
                                                <input type="text" class="form-control" id="username" name="Amount" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="email">তারিখ</label>
                                                <input type="date" class="form-control" id="email" name="Date" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="password">মাধ্যাম</label>
                                                <select id="inputState" class="form-control" name="PaymentType" required>
                                                    <option selected>Choose...</option>
                                                    <option value="নগদ">নগদ </option>
                                                    <option value="বিকাশ">বিকাশ</option>
                                                    <option value="ব্যাংক">ব্যাংক</option>
                                                    <option value="রকেট">রকেট</option>
                                                </select>

                                            </div>

                                            <div class="form-group ">
                                                <label for="inputState">বছর</label>
                                                <select id="inputState" class="form-control" name="year" required>
                                                    <option >Choose...</option>
                                                    <option value="2020">২০২০</option>
                                                    <option value="2021">২০২১</option>
                                                    <option value="2022">২০২২</option>
                                                    <option value="2023">২০২৩</option>
                                                    <option value="2024">২০২৪</option>
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
