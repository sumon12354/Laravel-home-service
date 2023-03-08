@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Collection</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Collection Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{route('collectamount')}}" class="btn btn-primary">Add Collection</a>
                    <a href="{{route('collectionreport')}}" class="btn btn-primary">Export PDF</a>
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
                            <th>Service Name</th>
                            <th>Customer Name</th>
                            <th>Collect Amount</th>
                            <th>Collect Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($collectioninfo as $item)
                        <tr> 
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->customer_name }}</td>
                            <td>{{ $item->service_name }}</td>
                            <td>{{ $item->collect_amount }}</td>
                            <td>{{ $item->collect_date }}</td>  
                            <td>                            
                                <a href="{{route('edticollection',$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href=""class="btn btn-warning">Delete</a>
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
