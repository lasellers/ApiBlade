@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Astronomy Photograph of the Day') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2>{{$title}}</h2>
                        <p><b>Copyright</b>: {{$copyright}}</p>

                        <figure class="figure">
                            <img src="{{ $hd_url}}" alt="{{ $title}}" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption">{{ $explanation }}</figcaption>
                        </figure>

                        <div class="row">
                            <div class="col-3">Url</div>
                            <div class="col-9">{{ $url}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">HD Url</div>
                            <div class="col-9">{{ $hd_url}}</div>
                        </div>

                        <div class="row">
                            <div class="col-3">Date</div>
                            <div class="col-9">{{ $date}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Media Type</div>
                            <div class="col-9">{{ $media_type}}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Service Version</div>
                            <div class="col-9">{{ $service_version}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
