@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Graders</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
    </ol>
    <hr>
</section>
<div class="container-fluid mt-4">
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-user-plus"></i> Add Graders</div>
        <div class="panel-body">
        {!! Form::open(['action' => 'AdminController@store_graders', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Freelancers E-mail Address" value="{{old('email')}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Temporary Password">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Temporary Password">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
            <a class="btn btn-primary" href="/admin">Back</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
