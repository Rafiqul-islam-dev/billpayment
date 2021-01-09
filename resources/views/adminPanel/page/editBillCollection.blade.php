@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card-body customeCardBody">
               <form id="signupForm" method="POST" class="form-horizontal"
                                            action="{{ url('Bill', $editData->id) }}">
                                            @csrf

                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="1" name="billStatus" />
                                            </div>

                                            <div class="form-group ">
                                                <label for="inputState">গ্রাহকের নাম</label> <br>
                                                <!-- Dropdown -->
                                                <select id='selUser'  class="form-control" name="userId" style="width: 300px; height: 100px !important;" required>

                                                @foreach ($allData as $row)
                                                <option value='{{$row->id}}'>{{$row->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">মাস</label>
                                                <select id="inputState" class="form-control col-lg-5" name="MonthName" required>
                                                    {{-- <option selected>Choose...</option> --}}
                                                    <option value="January" {{($editData->MonthName=="January")?"selected":""}}>January</option>
                                                    <option value="February" {{($editData->MonthName=="February")?"selected":""}}>February</option>
                                                    <option value="March" {{($editData->MonthName=="March")?"selected":""}}>March</option>
                                                    <option value="April" {{($editData->MonthName=="April")?"selected":""}}>April</option>
                                                    <option value="May" {{($editData->MonthName=="May")?"selected":""}}>May</option>
                                                    <option value="June" {{($editData->MonthName=="June")?"selected":""}}>June</option>
                                                    <option value="July" {{($editData->MonthName=="July")?"selected":""}}>June</option>
                                                    <option value="August" {{($editData->MonthName=="August")?"selected":""}}>August</option>
                                                    <option value="September" {{($editData->MonthName=="September")?"selected":""}}>September</option>
                                                    <option value="October" {{($editData->MonthName=="October")?"selected":""}}>October</option>
                                                    <option value="November" {{($editData->MonthName=="November")?"selected":""}}>November</option>
                                                    <option value="December" {{($editData->MonthName=="December")?"selected":""}}>December</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="username">টাকার পরিমান</label>
                                                <input type="text" class="form-control" value="{{$editData->Amount}}" name="Amount" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="email">তারিখ</label>
                                                <input type="date" class="form-control" value="{{$editData->Date}}" name="Date" required />
                                            </div>

                                            <div class="form-group">
                                                <label for="password">মাধ্যাম</label>
                                                <select id="inputState" class="form-control" name="PaymentType" required>
                                                    {{-- <option selected>Choose...</option> --}}
                                                    <option value="নগদ" {{($editData->PaymentType=="নগদ")?"selected":""}}>নগদ </option>
                                                    <option value="বিকাশ" {{($editData->PaymentType=="বিকাশ")?"selected":""}}>বিকাশ</option>
                                                    <option value="ব্যাংক" {{($editData->PaymentType=="ব্যাংক")?"selected":""}}>ব্যাংক</option>
                                                    <option value="রকেট" {{($editData->PaymentType=="রকেট")?"selected":""}}>রকেট</option>
                                                </select>

                                            </div>

                                            <div class="form-group ">
                                                <label for="inputState">বছর</label>
                                                <select id="inputState" class="form-control" name="year" required>
                                                    {{-- <option >Choose...</option> --}}
                                                    <option value="2020" {{($editData->year=="2020")?"selected":""}}>২০২০</option>
                                                    <option value="2021" {{($editData->year=="2021")?"selected":""}}>২০২১</option>
                                                    <option value="2022" {{($editData->year=="2022")?"selected":""}}>২০২২</option>
                                                    <option value="2023" {{($editData->year=="2023")?"selected":""}}>২০২৩</option>
                                                    <option value="2024" {{($editData->year=="2024")?"selected":""}}>২০২৪</option>
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

@endsection
