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
    <div class="table-responsive small-font">
        <table class="table table-light table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Project ID</th>
                    <th>Project Type</th>
                    <th>Subject</th>
                    <th>Customer</th>
                    <th>Freelancer</th>
                    <th>Amount / Minute</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$job->project_id}}</td>
                        <td>{{$job->project_type}}</td>
                        <td>{{$job->subject}}</td>
                        <td>{{$job->name}}</td>
                        <td>{{$job->freelancer_name}}</td>
                        <td>{{$job->amount_per_minute}}</td>
                        <td>{{$job->total_amount}}</td>
                        <td>
                            <form  method="post" action="" class="delete_form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <a href="{{ route('grader.show',$job->id) }}" class="btn btn-sm btn-primary">Grade</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
