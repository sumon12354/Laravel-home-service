@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection

@section('content')
<div class="container p-5"><style>
    .totol{
 
    }
</style>
    <div class="row">
        <div class="col-lg-4">
            <div class="bg-warning p-3" style="box-shadow: -10px 10px 5px rgb(28, 168, 28);border-radius: 5px; height: 150px; ">
                <h2>{{$total}}Tk</h2>
                <h3>Total earning</h3>
                </div>                  
        </div>
        <div class="col-lg-4">

            <div class="p-3" style="box-shadow: 5px 5px 5px rgb(28, 168, 28);border-radius: 5px; height: 150px; background-color:rgb(237, 89, 16)">
                <h2>{{$customerinfo->count()}}</h2>
                <h3>Customers</h3>
                </div>
                
        </div>
        <div class="col-lg-4">
            <div class="p-3" style="box-shadow:10px 10px 5px rgb(28, 168, 28);border-radius: 5px; height: 150px; background-color:rgb(251, 186, 224)">
                <h2>{{$provider->count()}}</h2>
                <h3>Providers</h3>
                </div>
                
        </div>
    </div>
</div>
     
    
@endsection
