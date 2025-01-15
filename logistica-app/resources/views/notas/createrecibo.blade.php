@extends('layouts/base')

@section('title')
    Registro de Canhoto
@endsection

@section('content')
    <form action="{{ route('nota.storerecibo', ['nota' => $nota_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Foto do Recibo</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="nota_id" name="nota_id" value="{{$nota_id}}" hidden>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
@endsection
