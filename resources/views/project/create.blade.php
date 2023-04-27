@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="customer" class="form-label">customer</label>
            <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" name="customer" value="{{ old('customer')}}">
            @error('customer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">url</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror " id="url" name="url" value="{{ old('url') }}">
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
    @if ($errors->any()) {{--controlla se ci sono errori--}}
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
