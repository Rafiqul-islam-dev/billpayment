@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card-body customeCardBody">
                <form id="signupForm" method="POST" class="form-horizontal" action="{{ url('customer', $editData->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="firstname">নাম</label>
                        <input type="text" class="form-control" value="{{ $editData->name }}" name="name" />
                    </div>

                    <div class="form-group">
                        <label for="lastname">ঠিকানা</label>
                        <input type="text" class="form-control" value="{{ $editData->address }}" name="address" />
                    </div>

                    <div class="form-group">
                        <label for="username">মোবাইল নাম্বার</label>
                        <input type="text" class="form-control" value="{{ $editData->number }}" name="number" />
                    </div>

                    <div class="form-group">
                        <label for="email">নুড নাম্বার</label>
                        <input type="text" class="form-control" value="{{ $editData->nudNo }}" name="nudNo" />
                    </div>

                    <div class="form-group">
                        <label for="password">এরিয়া</label>
                        <input type="text" class="form-control" value="{{ $editData->area }}" name="area" />
                    </div>
                    <div class="form-group">
                        <label for="password">বিলের পরিমাণ</label>
                        <input type="text" class="form-control" value="{{ $editData->billamount }}" name="billamount" />
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">সংযোগের তারিখ</label>
                        <input type="date" class="form-control" value="{{ $editData->connectiondate }}"
                            name="connectiondate" />
                    </div>
                    <div class="form-group ">
                        <label for="inputState">সংযোগের ধরন</label>
                        <select id="inputState" class="form-control" name="connectiontype">
                            <option value="Admin" {{ $editData->connectiontype == '1' ? 'selected' : '' }}>ডিস</option>
                            <option value="User" {{ $editData->connectiontype == '2' ? 'selected' : '' }}>ইন্টারনেট</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
