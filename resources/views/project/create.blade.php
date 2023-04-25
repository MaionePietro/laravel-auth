@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="customer" class="form-label">customer</label>
            <input type="text" class="form-control" id="customer" name="customer" value="{{ old('customer')}}">
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>

    @if ($error->any())
        <div class="allert allert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

@endsection
