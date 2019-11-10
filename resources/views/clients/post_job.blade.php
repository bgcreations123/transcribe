@extends('layouts.client')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Post a Job</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/client"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post a Job</li>
        </ol>
        <hr>
    </section>
    <div class="container-fluid mt-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Post a Job
            </div>
            <div class="panel-body">
            {!! Form::open(['action' => 'JobController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="name" type="text" class="form-control" name="name" placeholder="Customer Name" value="{{old('name')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Project Type</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="project_type">
                            <option value="Select Job Type" selected disabled>Select Project Type</option>
                            <option value="transcription">Transcription</option>
                            <option value="captioning">Captioning</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="file" id="file" class="form-control" name="file_name">
                        <audio id="audio"></audio>
                    </div>
                </div>
            </div>

            {{-- Second Row --}}
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
                        <input id="name" type="text" class="form-control" name="title" placeholder="Project Title" value="{{old('title')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Job Type</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="job_type">
                            <option value="Select Job Type" selected disabled>Select Job Type</option>
                            <option value="verbatim">Verbatim</option>
                            <option value="non-verbatim">Non-Verbatim</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Job Subject</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="subject" value="{{old('subject')}}">
                            <option value="Select Job Type" selected disabled>Select Job Subject</option>
                            <option value="Religion">Religion</option>
                            <option value="Education">Education</option>
                            <option value="Business">Business</option>
                            <option value="Politics">Politics</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Technology">Technology</option>
                            <option value="Sports">Sports</option>
                            <option value="Law">Law</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
            </div>

             {{-- Third Row --}}
             <div class="row mt-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Project ID</span>
                        <input id="name" type="text" class="form-control" name="project_id" value="{{$newProjectID}}" placeholder="" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">No. of Speakers</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="no_of_speakers">
                            <option value="Select Job Type" selected disabled>Number of Speakers</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2+">2+</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Accent</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="accent">
                            <option value="Select Job Type" selected disabled>Choose an Accent</option>
                            <option value="American Accent">American Accent</option>
                            <option value="British Accent">British Accent</option>
                            <option value="Australian Accent">Australian Accent</option>
                            <option value="Indian Accent">Indian Accent</option>
                            <option value="Asian Accent">Asian Accent</option>
                            <option value="African Accent">African Accent</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Forth Row --}}
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Project Length</span>
                        <input id="duration" type="text" class="form-control num2" name="length" />
                        {{-- <span id="duration" class="num2"></span> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Amount per Minute (USD)</span>
                        <input class="num1" type="text" class="form-control" name="amount_per_minute" value="0.90" readonly>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Total Amount (USD)</span>
                        <input id="mult" type="text" class="form-control" name="total_amount" placeholder="" readonly>
                    </div>
                </div>
            </div>

             {{-- Fifth Row --}}
             <div class="row mt-3">
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="form-group-addon">Any Special Instructions</span>
                        <textarea id="article-ckeditor"  name="instructions" placeholder="Special Instructions">{{old('instructions')}}</textarea>
                    </div>
                </div>
            </div>
            </div>
            <div class="panel-footer">
                {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                <a class="btn btn-primary" href="/client">Back</a>
                <a class="btn btn-info" href="/paypal_checkout">Checkout</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    <script src="./js/multi.js"></script>
@endsection
