@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <h1 class="col-md-8">LINKS SUBMITTED</h1>

            <ul style="list-style: none" class="list-group-item">
                @foreach ($links as $link)
                    <li>{{ $link->title}}</li>
                    <li>{{ $link->description }}</li>
                    <hr>
                @endforeach
            </ul>
            <a href="/submit" class="btn btn-lg btn-info">Submit New Link<span class="glyphicon glyphicon-hand-left"></span></a>
        </div>
    </div>
@endsection
