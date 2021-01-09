@extends('layouts.app')

@section('content')

<div class="row mt-4">
                <div class="col-md-3 mailbox-sidenav">

                    <div class="card">
                        <div class="card-body">
							<div class="clearfix margin-b-10">
								<a href="#" class="btn btn-danger compose btn-block box-shadow btn-rounded">
									<em class="fa fa-pencil"></em>
                                <span>{{$userName->name}}</span>
								</a>
							</div>
                            <ul class="nav nav-pills nav-stacked flex-column">

                                <li class="nav-item active">
                                    <a class="nav-link" href="#">

                                        <em class="fa fa-inbox"></em>
                                        <span>Personal Information</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="fa fa-star"></em>
                                        <span>Starred</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="fa fa-paper-plane-o"></em>
                                        <span>Sent</span>
                                    </a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-success float-right mt-1">8</span>
                                        <em class="fa fa-edit"></em>
                                        <span>Draft</span>
                                    </a>
                                </li>

                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="card">

						<div class="card-header card-default">
                            <div class="row">
                                <div class="col-md-6">
                                    Inbox
                                </div>
                                <div class="col-md-6">
                                    <div class="card-search">
                                        <form action="#">
                                            <input type="text" class="form-control" placeholder="Search inbox..." name="s">
                                            <span class="fa fa-search"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="card-body">



                            <div class="table-responsive">
                                <table class="table table-hover table-maillist">
                                    <thead>
                                    <tr>
                                        <th>ক্রমিক নং</th>
                                        <th>নাম</th>
                                        <th>মাস</th>
                                        <th>তারিখ</th>
                                        <th >টাকা</th>
                                    </tr>
                                   </thead>
                                    @foreach ( $billColletd as $key => $row)


                                    <tr>
                                        <td>
                                        <a class="float-left" href="#"><img class="media-object rounded-circle" src="assets/img/avtar-1.png" width="40" alt="">{{$key+1}}</a>
                                        </td>
                                    <td><strong><a href="mail-view.html" class="color-info">{{$row->name}}</a></strong></td>
                                        <td>
                                            <a href="mail-view.html">{{$row->MonthName}}</a>
                                        </td>
                                         <td>
                                            <a href="mail-view.html">{{$row->Date}}</a>
                                        </td>
                                        <td class="mail-date">{{$row->Amount}}</td>
                                    </tr>
                                 @endforeach
                                </table>
                                <h2 align="right" style="font-weight: bold">Total Paid: {{ $total }} Taka</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection('content')
