@extends('sprovider.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
        <section class="h-100 h-custom" style="background-color: #8fc4b7;">
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">

                    <div class="card-body p-4 p-md-5">
                    <h3  align="center">REGISTRATION FORM</h3> <hr>

                    <form class="px-md-2" action="{{ route('SproviderRegstration') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control" />
                            <label class="form-label" for="form3Example1q">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="file" id="image"  name="image" class="form-control" />
                            <label class="form-label" for="form3Example1q">Image</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="email"  name="email" class="form-control" />
                            <label class="form-label" for="form3Example1q">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" id="phone" name="phone" class="form-control" />
                            <label class="form-label" for="form3Example1q">Phone</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="location" name="location" class="form-control" />
                            <label class="form-label" for="form3Example1q">Location</label>
                        </div>

                        <div class="form-outline mb-4">

                            <div class="col-sm-12">
                                <select class="form-select" id="service" name="service"
                                    aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach ($categoryinfo as $category)
                                        <option value="{{ $category->category_name }}">{{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-sm-4 col-form-label" for="basic-default-name">Select Category</label>
                        </div>

                        {{-- <div class="row">
                        <div class="col-md-6 mb-4">

                            <div class="form-outline datepicker">
                            <input type="text" class="form-control" id="exampleDatepicker1" />
                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                            </div>

                        </div> --}}
                        {{-- <div class="col-md-6 mb-4">

                            <select class="select">
                            <option value="1" disabled>Gender</option>
                            <option value="2">Female</option>
                            <option value="3">Male</option>
                            <option value="4">Other</option>
                            </select>

                        </div>
                        </div> --}}

                        {{-- <div class="mb-4">
                            <select class="select">
                                <option value="1" disabled>Class</option>
                                <option value="2">Class 1</option>
                                <option value="3">Class 2</option>
                                <option value="4">Class 3</option>
                            </select>
                        </div> --}}

                        {{-- <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                        <div class="col-md-6">

                            <div class="form-outline">
                            <input type="text" id="form3Example1w" class="form-control" />
                            <label class="form-label" for="form3Example1w">Registration code</label>
                            </div>

                        </div>
                        </div> --}}

                        <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
@endsection
