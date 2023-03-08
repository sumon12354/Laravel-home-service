@extends('admin.layout.template')
@section('page_title')
    Dashboard -All-Booking
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Booking</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Booking Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{route('bookingreport')}}" class="btn btn-primary">Export PDF</a>
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
                            <th>Booking Id</th>
                            <th>Customer Name</th>
                            <th>Total Amount</th>
                            <th>Booking Status</th>
                            <th>Payment Status</th>
                            <th>Booking Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($order_details as $item)
                            <tr>
                                <td>{{ $item->booking_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->booking_status }}</td>
                                <td>{{ $item->payment_status }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('invoicede', $item->id) }}" class="btn btn-primary">invoice</a>
                                    <a href="{{ route('bookingedit', $item->id) }}" class="btn btn-primary">Status</a>
                                    {{-- <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">edit</a> --}}
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
