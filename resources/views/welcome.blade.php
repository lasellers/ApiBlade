@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <main role="main">
                            <div class="jumbotron">
                                <p class="col-sm-8 mx-auto">
                                <h1>API Blade</h1>
                                <p>Various experiments with APIs in Laravel 7, using stock Blade templates.</p>
                                <p>
                                    <a class="btn btn-primary" href="https://github.com/lasellers/ApiBlade" role="button">View README.md &raquo;</a>
                                </p>
                            </div>
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

