@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <form action="{{ route('cars.update', $car) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nome" class="form-label">NomeNome</label>
            <input type="text" class="form-control" id="Nome" name="Nome" value="{{ old('Nome', $car->Nome) }}">
        </div>

        <div class="mb-3">
            <label for="porte" class="form-label">Numero porte</label>
            <input type="text" class="form-control" id="porte" name="porte"
                value="{{ old('porte', $car->porte)}}">
        </div>

        <div class="mb-3">
            <label for="cilindrata" class="form-label">cilindrata</label>
            <input type="text" class="form-control" id="cilindrata" name="cilindrata"
                value="{{ old('cilindrata', $car->cilindrata) }}">
        </div>

        <div class="mb-3">
            <label for="prezzo" class="form-label">prezzo</label>
            <input type="text" class="form-control" id="prezzo" name="prezzo"
                value="{{ old('prezzo', $car->prezzo) }}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>

</div> --}}
@endsection
