@extends('layouts.client')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Update User Profile</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/client"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update User Profile</li>
        </ol>
        <hr>
    </section>
    <div class="container-fluid mt-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update your Profile
            </div>
            <div class="panel-body">
            {!! Form::open(['action' => 'ClientController@profile_update', 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Full Names">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                        <input id="name" type="text" class="form-control" name="company" value="{{$user->company}}" placeholder="Company">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="name" type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="E-mail">
                    </div>
                </div>
            </div>

            {{-- Second Row --}}
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                        <input id="name" type="text" class="form-control" name="mobile" value="{{$user->mobile}}" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input id="name" type="text" class="form-control" name="location" value="{{$user->location}}" placeholder="Location">
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                        <input id="name" type="text" class="form-control" name="title" placeholder="Mobile Number">
                    </div>
                </div> --}}
            </div>
            </div>
            <div class="panel-footer">
                {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                <a class="btn btn-primary" href="/client">Back</a>
            </div>
            {{-- {!! Form::close() !!} --}}
        </div>
    </div>
@endsection
