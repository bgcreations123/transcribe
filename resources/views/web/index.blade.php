@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="big-title">Fast, Quality, <br> On-Demand Services</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card home-card">
                    <div class="card-header bg-darkgreen">
                        <h3 class="blue">Transcription</h3>
                        <p>$1 per minute</p>
                        <p>Convert audio or video to text</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Millions of Minutes Transcribed</h5>
                    </div>
                    <div class="card-footer">
                        <a href="/transcription">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card home-card">
                    <div class="card-header bg-darkpurple">
                        <h3 class="blue">Captions</h3>
                        <p>$1 per minute</p>
                        <p>Caption your videos</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Millions of Minutes Captioned</h5>
                    </div>
                    <div class="card-footer">
                        <a href="/captions">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card home-card">
                    <div class="card-header bg-darkyellow">
                        <h3 class="blue">Foreign Subtitles</h3>
                        <p>$3-7 per minute</p>
                        <p>Convert audio or video to text</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Foreign Subtitles for your videos</h5>
                    </div>
                    <div class="card-footer">
                        <a href="/subtitles">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="md-0 mt-4">
            <h3 class="big-title">Trusted by 100,000+ customers <br> across all industries</h3>
        </div>
    </div>
    <div class="container-fluid mt-4 bg-gray text-center white">
        <h3 class="title pt-5">Why {{ config('app.name') }}?</h3>
        <div class="row mt-5">
            <div class="col-md-4">
            <img src="{{asset('/storage/icons/cash.png')}}" class="my-icons mt-2 mb-4">
                <h5>Simple, Upfront Pricing</h5>
                <p>
                    Transparent pricing so you know the cost before purchasing.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('/storage/icons/security.png')}}" class="my-icons mt-2 mb-4">
                <h5>Secure Online Ordering</h5>
                <p>
                    Your content is protected. Our vetted workforce only uses secure tools.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('/storage/icons/delivery.png')}}" class="my-icons mt-2 mb-4">
                <h5>Speedy Delivery</h5>
                <p>
                    Round-the-clock service to serve you best.
                </p>
            </div>
        </div>

        {{-- Second Row --}}
        <div class="row mt-3">
            <div class="col-md-4">
                <img src="{{asset('/storage/icons/quality.jpg')}}" class="my-icons mt-2 mb-4">
                <h5>Guaranteed Top Quality</h5>
                <p>
                    Professional freelance transcriptionists, captioners, and translators who are vetted for quality.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('/storage/icons/technology.png')}}" class="my-icons mt-2 mb-4">
                <h5>Powerful Technology</h5>
                <p>
                    Our powerful software platform makes it easy to deliver high-quality results quickly.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('/storage/icons/support.png')}}" class="my-icons mt-2 mb-4">
                <h5>Support and Customer Service</h5>
                <p>
                    U.S.-based team available 24/7. Reach out to us at any time.
                </p>
            </div>
            <hr-break></hr-break>
            <p class="container mt-3">
                    With our straightforward pricing, there's no need to guess what your cost might be. We are completely transparent with our customers. There are no hidden costs when you work with us. To transcribe audio to text, we charge $1 per minute and just $0.25 more for a verbatim or time-stamped transcript. If there is ever a time where you are unhappy with the accuracy or quality of your transcript, just let us know. We will fix it immediately. Your satisfaction is our number one priority.
            </p>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-center">
            To make sure we can give you exactly what you need, we expanded <br> our services beyond audio to text transcription.
        </h4>
        <div class="jumbotron mt-4">
            <h5><a href="/transcription">Transcription</a> $1 per minute</h5>
            <p>Professionally transcribe all English audio to text. Rev's transcription service is perfect for interviews, content marketing, video production, and academic research. Whatever audio you have, our professionals will transcribe it for you.</p>
            <button class="btn btn-primary">LEARN MORE</button>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-4">
                    <h4>Accurate for All Audio</h4>
                    <p>
                        Rev makes transcribing your audio easy with its 99% accuracy guarantee. We can handle English audio with multiple speakers, diverse accents, and background noise.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Professional</h4>
                    <p>
                            Our 30,000+ native English-speaking professionals transcribe files 24/7 so you can capture all the details from your audio.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Transcripts in Hours</h4>
                    <p>
                            Receive accurate transcripts in 12 hours for most files < 30 min.
                    </p>
                </div>
            </div>
        </div>

        <div class="jumbotron mt-4">
            <h5><a href="/captions">English Captions and Subtitles</a> $1 per minute</h5>
            <p>Give your audience a full experience by adding English captions. Rev adds captions to videos that include the dialogue of your video and important non-verbal elements that set the scene. Captions are more than converting audio to text.</p>
            <button class="btn btn-success">LEARN MORE</button>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-4">
                    <h4>Fast & Affordable</h4>
                    <p>
                        Rev captions videos at an unbeatable price and turnaround.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>High Quality</h4>
                    <p>
                        Our video professionals manually transcribe the verbal and important non-verbal aspects of your video and align the phrases to screen times.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Compliant</h4>
                    <p>
                        All our caption files are FCC and ADA compliant and meet Section 508 requirements.
                    </p>
                </div>
            </div>
        </div>

        <div class="jumbotron mt-4">
            <h5><a href="/subtitles">Foreign Subtitles</a> $3-7 per minute</h5>
            <p>Reach audiences all over the world by adding subtitles to your videos in multiple languages. We work with trained language experts to add accurate subtitles with correct context so your message will be clearly understood.</p>
            <button class="btn btn-danger">LEARN MORE</button>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-4">
                    <h4>Quick & Accurate</h4>
                    <p>
                        Our professional translators can quickly and accurately subtitle your video files into 8+ languages.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>High Quality</h4>
                    <p>
                        We only allow the best translators and linguists to join our team, so you are assured high quality subtitles. Our translators have years of professional experience.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Compliant</h4>
                    <p>
                        Our subtitle professionals manually translate video audio into your desired language as well as segment and align the translations to the screen times.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4 bg-gray white">
            <div class="row pt-5">
                <div class="col-md-6">
                    <img src="{{asset('/storage/icons/record.png')}}" class="container-icon">
                </div>
                <div class="col-md-6">
                    <h2><b>{{ config('app.name') }} Voice Recorder</b></h2>
                    <p class="mt-3">
                        Recording on the go? Our Voice Recorder app was built for you. After transcribing millions of audio and video files, we understand that our customers need more than a static transcript. First, we learned that customers need a convenient audio recorder that they could use without worrying about quality or reliability. We also learned that people want a quick way to transcribe their audio notes into shareable transcripts. With that in mind, we created an app for iPhone and Android that does it all in one place. Keep your audio files organized and one tap away from full transcription.
                    </p>
                </div>
            </div>
        </div>

        <div class="jumbotron mt-4 text-center">
            <h2 class="mt-3"> <b> The Best Solution for Enterprises </b></h2>
            <p>Win back hours of time without sacrificing price or accuracy</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <button type="button" class="btn btn-outline btn-danger">CONTACT SALES</button>
                </div>
                <div class="col-md-4">
                    <h4><a href="">LEARN ABOUT ENTERPRISE</a> </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
