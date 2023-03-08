@extends('admin.layout.template')
@section('page_title')
    Area - Home-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Area</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Area Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{ route('addareazone') }}" class="btn btn-primary">Add Area</a>
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
                            <th>Area Name</th>
                            <th>Area Code</th>
                            <th>District Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($areainfo as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->area_name }}</td>
                                <td>{{ $item->area_code }}</td>
                                <td>{{ $item->district_name }}</td>
                                <td>
                                    <a href="{{ route('editarea', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('deletearea', $item->id) }}"class="btn btn-warning">Delete</a>
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
