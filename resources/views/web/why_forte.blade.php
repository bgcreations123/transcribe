@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
              Why {{ config('app.name') }}
            </div>
            <div class="card-body">
                <h5 class="card-title text-center blue">

                </h5>
                <p>

                </p>
            </div>
            <div class="card-footer">
                <p class="text-center">&copy; <?= date('Y'); ?> {{ config('app.name') }} Ltd.</p>
            </div>
        </div>
    </div>
@endsection
