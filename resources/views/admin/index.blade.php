@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Admin</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <hr>
</section>
<div class="container-fluid mt-4">
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="panel panel-default text-center bg-green">
                <div class="panel-body">
                    <h3>Posted Jobs</h3>
                    <h3>{{$jobs}}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default text-center bg-blue">
                <div class="panel-body">
                    <h3>Customers</h3>
                    <h3>{{$customers}}</h3>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="panel panel-default text-center bg-blue">
                <div class="panel-body">
                    <h3>Freelancers</h3>
                    <h3>{{$freelancers}}</h3>
                </div>
            </div>
        </div>        
    </div>
</div>  
@endsection