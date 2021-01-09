@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default headerTextcabl">
                    মাসিক বিল আদায়
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
