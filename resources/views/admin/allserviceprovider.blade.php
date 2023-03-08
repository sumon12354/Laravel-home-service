@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Service Provider</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Service Provider Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    {{-- <a href="{{ route('addsprovider') }}" class="btn btn-primary">Add Service Provider</a> --}}
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
                            <th>Name</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th>Loaction</th>
                            {{-- <th>category</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sproviders as $provider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->phone }}</td>
                                <td>{{ $provider->email  }}</td>
                                <td>{{ $provider->area }}</td>
                                {{-- <td>{{ $provider->Servicescategory }}</td> --}}
                                <td>
                                    <a href="{{ route('sproviderEdit', $provider->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('sproviderdelete', $provider->id) }}"class="btn btn-danger">Delete</a>
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
