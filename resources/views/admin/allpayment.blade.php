@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Payment</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Payment Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{route('addpayment')}}" class="btn btn-primary">Add Payment</a>
                    <a href="{{route('paymentreport')}}" class="btn btn-primary">Export PDF</a>
                </div>

            </div>
            <!--       message       -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <!--       message       -->
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>SN</th>
                            <th>SProvider Name</th>
                            <th>Amount</th>
                            <th>Payment Date</th>
                            <th>Payment Note</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($paymentinfo as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->provider_name}}</td>
                                <td>{{ $item->payment_amount}}</td>
                                <td>{{ $item->payment_date}}</td>
                                <td>{{ $item->payment_note}}</td>
                                <td>
                                    <a href="{{route('editpayment',$item->id )}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('deletepayment',$item->id )}}"class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap Table with Header - Light -->
    </div>
@endsection
