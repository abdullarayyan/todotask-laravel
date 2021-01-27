@extends('tasks.layout')

@section('content')

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/tasks') }}">
                   Go To Task List
                </a>
            </div>

        </div>
    </nav>

@endsection
