@extends('layouts.project')

@section('content')
    <div class="container-fluid mt-3">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Welcome to Forte Network!</strong> There are currently <span class="green"> <strong>{{$project}}</strong></span> Jobs available.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="table-responsive">
            <table class="table table-light table-striped">
                <thead class="thead-light">
                    <tr class="small-font text-center">
                        <th>#</th>
                        <th style="width:100px">Project ID</th>
                        <th>Customer Name</th>
                        <th>Subject</th>
                        <th>Length</th>
                        <th>Pay/Min</th>
                        <th>Total Amount</th>
                        <th>Due In</th>
                        <th>No. of Speakers</th>
                        <th>Job Type</th>
                        <th>Project Type</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    <tr class="small-font text-center">
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$job->project_id}}</td>
                        <td>{{$job->name}}</td>
                        <td>{{$job->subject}}</td>
                        <td>{{$job->length}}</td>
                        <td>{{$job->amount_per_minute}}</td>
                        <td>{{$job->total_amount}}</td>
                        <td>{{$job->due_in}}</td>
                        <td>{{$job->no_of_speakers}}</td>
                        <td> <span class="badge badge-success"> {{$job->job_type}} </span></td>
                        <td>{{$job->project_type}}</td>
                        <td>
                            <form  method="post" action="" class="delete_form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <a href="{{ route('project.show',$job->id) }}" class="btn btn-sm btn-primary">Claim</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
