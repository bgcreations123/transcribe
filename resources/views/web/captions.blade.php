@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-3">
        <h1 class="text-center title purple">Closed Captions Made Simple</h1>
    </div>
    <div class="container">
           <div class="row text-center">
               <div class="col-md-4">
                    <h3 class="mt-3 mb-3 green">$1</h3>
                    <p class="blue">PER AUDIO MINUTE</p>
               </div>
               <div class="col-md-4">
                    <h3 class="mt-3 mb-3 green">24 hour</h3>
                    <p class="blue">TURNAROUND TIME</p>
                </div>
                <div class="col-md-4">
                    <h3 class="mt-3 mb-3 green">99%</h3>
                    <p class="blue">ACCURACY</p>
                </div>
           </div>
           <div class="container mt-4">
                <h2 class="title text-center purple">How It Works</h2>
                <div class="row text-center">
                    <div class="col-md-4">
                        <i class="fas fa-sync fa-spin fa-3x green mt-3 mb-3"></i>
                        <h3 class="blue">Upload English Audio/Video Files</h3>
                        <p>
                            Upload files from your computer or simply paste a URL from the web. Secure and confidential.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-walking mt-3 mb-3 fa-3x blue"></i>
                        <h3 class="blue">{{ config('app.name') }} Professionals Go to Work</h3>
                        <p>
                            Our 20,000+ professionals transcribe your files 24/7 with 99%+ accuracy, 100% guaranteed.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-file-word mt-3 mb-3 purple fa-3x"></i>
                        <h3 class="blue">Receive Your Transcript</h3>
                        <p>
                            Transcripts are delivered as an editable document. View and edit with our tools, then share with anyone.
                        </p>
                    </div>
                </div>
           </div>
    </div>
    <div class="jumbotron text-center">
        <h1 class="display-6 blue">We offer quick turnaround on transcripts any day of the week.</h1>
        <p class="lead">Our team of professional transcriptionists is ready to get to work as soon as you submit your order. Our transcription experts are available 24/7 to accurately convert your audio to text. If you interview someone for a case study at night, submit it before bed to have the transcription in your inbox before you get to work the next day.</p>
        <hr class="my-2">
        <p class="lead">

        </p>
    </div>
@endsection
