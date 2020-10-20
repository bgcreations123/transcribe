@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-3">
        <h1 class="text-center title purple">Subtitles</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ config('app.name') }} Subtitle</div>
            <div class="card-body">
                <p>
                    {{ config('app.name') }}'s subtitle translator service helps your video content reach a global audience.
                    When you add foreign subtitles to videos, more viewers can enjoy your content—regardless of the language they speak.
                    Foreign subtitles are displayed as text on the screen and represent a translation of the dialogue between characters. When you add foreign subtitles to a video, you immediately broaden its potential reach. Foreign subtitles not only expand the audience of a production, but they also boost search rankings, discoverability, and viewer engagement.
                    To help video producers maximize the potential of their content, we can add foreign subtitles to any video. Our easy-to-use subtitling service guarantees quality translations done by expert translators and fast turnaround at an affordable rate.
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-3 text-center">
        <h2 class="blue title">How It Works</h2>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-sync fa-spin fa-3x green mt-3 mb-3"></i>
                <h3 class="blue">Upload English Videos</h3>
                <p>Upload files, paste URLs, or pull from YouTube or Vimeo. Secure and Confidential.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-walking mt-3 mb-3 fa-3x blue"></i>
                <h3 class="blue">{{ config('app.name') }} Professionals Go to Work</h3>
                <p>Our 1,000+ professional translators subtitle all speech and atmospherics.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-file-word mt-3 mb-3 purple fa-3x"></i>
                <h3 class="blue">Receive And Publish Subtitles</h3>
                <p>Receive your foreign-language subtitles within 24 hours.</p>
            </div>
        </div>
        <hr>
        <h4>Adding foreign subtitles to your video doesn’t have to be a complicated process.</h4>
        <p>Our team of professional subtitlers is ready to get to work as soon as you submit your order. We can help you add subtitles in multiple languages and file types. Use {{ config('app.name') }}’s services to add foreign subtitles to your video. Our translation and subtitling experts are available 24/7 to accurately translate your audio into the language that you need.</p>
    </div>
    <hr>
    <div class="container mt-3">
        <h3 class="text-center">Wondering how to add foreign subtitles to a video?</h3>
        <p>
                To add foreign subtitles to a video, upload your video file or paste a URL to the video you need foreign subtitles for. Once we receive your video file, our team of highly skilled translators creates and delivers everything you need to add foreign subtitles to a video. We don’t rely on computer-generated translations. We appreciate that only skilled subtitle translators are capable of conveying your message across languages and cultures. That’s why we count on a network of trained professionals who can be trusted to add foreign subtitles to your videos with confidence.
        </p>
    </div>
@endsection
