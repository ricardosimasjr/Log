@extends('layouts/base')

@section('title')
    Detalhe Transportadora
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Transportadora</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Transportadora" value="{{ old('nome', $transportadora->nome)}}" readonly>
          </div>
          <div class="mb-3">
            <a class="btn btn-success" href="{{ route('transportadora.index')}}">Voltar</a>
          </div>
    </form>
@endsection
