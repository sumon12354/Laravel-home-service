@extends('admin.layout.template')
@section('page_title')
    Dashboard -All-Services
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Services</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Services Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{ route('addservices') }}" class="btn btn-primary">Add Services</a>
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
                            <th>Id</th>
                            <th>Services Name</th>
                            <th>Slug</th>
                            <th>Tagline</th>
                            <th>Category Name</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Description</th>
                            <th>Inclusion</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->service_name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->tage_line }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->discount_price }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->inclusion }}</td>
                                <td>{{ $item->status }}</td>
                                <td> <img style="height: 50px" src="{{ asset($item->image) }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('editservices', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('deleteservices', $item->id) }}"class="btn btn-warning">Delete</a>
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
