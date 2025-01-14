@extends('layouts/base')

@section('title')
    Edição de Transportadora
@endsection

@section('content')
    <form action="{{ route('transportadora.update' , ['transportadora' => $transportadora->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Transportadora</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $transportadora->nome)}}">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
    </form>
@endsection
