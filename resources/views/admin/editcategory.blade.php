@extends('admin.layout.template')
@section('page_title')
    Edit-Category - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Category</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Edit Category</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('updatecategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$categoryinfo->id}}" name="id">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                  value="{{$categoryinfo->category_name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="categroy_image" name="categroy_image"/>
                                <img style="height: 50px" src="{{ asset($categoryinfo->categroy_image) }}" width="70px" height="70px" alt="Image">
                            </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Categoy</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
