@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <h1 class="col-md-8">Submit a link</h1>
            <form action="/submit" method="post">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul id="errors">
                            @forelse($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                    </div>
                @endif

                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="https://www.example.com" value="{{ old('url') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
