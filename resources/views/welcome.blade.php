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
                                    <div class="col-sm-8 mx-auto">
                                        <h1>Navbar examples</h1>
                                        <p>This example is a quick exercise to illustrate how the navbar and its contents work. Some navbars extend the width of the viewport, others are confined within a <code>.container</code>. For positioning of navbars, checkout the <a href="../navbar-top/">top</a> and <a href="../navbar-top-fixed/">fixed top</a> examples.</p>
                                        <p>At the smallest breakpoint, the collapse plugin is used to hide the links and show a menu button to toggle the collapsed content.</p>
                                        <p>
                                            <a class="btn btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
                                        </p>
                                    </div>
                                </div>
                            </main>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

