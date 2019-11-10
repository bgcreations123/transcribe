@extends('layouts.client')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/client"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Posted Jobs</li>
    </ol>
    <hr>
</section>
<div class="container-fluid mt-4">
    <div class="table-responsive">
        <table class="table table-dark table-striped table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Project #</th>
                    <th>Customer Name</th>
                    <th>Project Title</th>
                    <th>Project Subject</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                <tr>
                     <td>{{$loop->index + 1}}</td>
                    <td>{{$job->project_id}}</td>
                    <td>{{$job['name']}}</td>
                    <td>{{$job['title']}}</td>
                    <td>{{$job['subject']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>  
@endsection