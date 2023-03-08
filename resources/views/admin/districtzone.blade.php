@extends('admin.layout.template')
@section('page_title')
    District - Home-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All District</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available District Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{ route('adddistrictzone') }}" class="btn btn-primary">Add District</a>
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
                            <th>District Name</th>
                            <th>District Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($districtinfo as $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->district_name}}</td>
                            <td>{{$item->district_code}}</td>
                            <td>
                                <a href="{{route('editdistrict',$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deletedistrict',$item->id)}}"class="btn btn-warning">Delete</a>
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
