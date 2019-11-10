@extends('layouts.project')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Complete your Profile {{ Auth::user()->name}}</div>
                    <div class="card-body">
                            {{ Form::open(['route' => ['freelancer.profile.update'], 'files' => true, 'method' => 'PATCH']) }}

                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::label('name', 'Full Names')}}
                                    {{Form::text('name', $user->name, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Full Names'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('username', 'Username')}}
                                    {{Form::text('username', $user->username, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Username'])}}
                                </div>
                            </div>

                            {{--second row--}}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::label('id', 'ID Number')}}
                                    {{Form::text('id_number', $user->id_number, ['id' => '', 'class' => 'form-control', 'placeholder' => 'ID Number'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('email', 'E-mail')}}
                                    {{Form::email('email', $user->email, ['id' => '', 'class' => 'form-control', 'placeholder' => 'E-mail'])}}
                                </div>
                            </div>

                            {{--Third row--}}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::label('mobile', 'Mobile')}}
                                    {{Form::text('mobile', $user->mobile, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Mobile'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('location', 'Location')}}
                                    {{Form::text('location', $user->location, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Location'])}}
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                            {{ Form::submit('Update', ['name' => 'submit', 'class' => 'btn btn-info']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

            {{-- Second Card --}}
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Update your Password {{ Auth::user()->name}}</div>
                        <div class="card-body">
                                {!! Form::open(['action' => 'ProjectController@update_password', 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {{Form::label('password', 'Password')}}
                                        {{Form::password('password', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Password'])}}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{Form::label('password', 'Confirm Password')}}
                                        {{Form::password('password_confirmation', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Confirm Password'])}}
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                                {{ Form::submit('Update Password', ['name' => 'submit', 'class' => 'btn btn-warning']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
        </div>
    </div>
@endsection
