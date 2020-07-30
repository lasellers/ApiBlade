@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Current Weather') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-3">icon</div>
                            <div class="col-9">{{$icon}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">description</div>
                            <div class="col-9">{{$description}}</div>
                        </div>

                        <div class="row">
                            <div class="col-3">Temperature</div>
                            <div class="col-9">{{$temperature}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Feels like</div>
                            <div class="col-9">{{$feels_like}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Pressure</div>
                            <div class="col-9">{{$pressure}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Humidity like</div>
                            <div class="col-9">{{$humidity}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">min_temperature</div>
                            <div class="col-9">{{$min_temperature}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">max_temperature</div>
                            <div class="col-9">{{$max_temperature}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">visibility</div>
                            <div class="col-9">{{$visibility}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">wind_speed</div>
                            <div class="col-9">{{$wind_speed}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">wind_direction</div>
                            <div class="col-9">{{$wind_direction}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Cloud Coverage</div>
                            <div class="col-9">{{$cloud_coverage}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Sunrise</div>
                            <div class="col-9">{{$sunrise}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Sunset</div>
                            <div class="col-9">{{$sunset}}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
@endsection
