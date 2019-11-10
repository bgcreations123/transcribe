@extends('layouts.grader')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/grader"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <hr>
</section>
<div class="container-fluid mt-4">
    <h4 class="">Today is on: <?= date('D-M-Y');?></h4>
    <hr>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="panel panel-default text-center bg-green">
                <div class="panel-body">
                    <h3>Submitted Jobs</h3>
                    <h3>{{$submitted}}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default text-center bg-blue">
                <div class="panel-body">
                    <h3>Total Posted Jobs</h3>
                    <h3>{{$jobs}}</h3>
                </div>
            </div>
        </div>
    </div>



@endsection
