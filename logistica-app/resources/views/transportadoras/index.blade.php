@extends('layouts/base')
@section('title')
    Cadastro de Transportadoras
@endsection
@section('content')
    <div class="mb-4">
        <div class="card mb-3 card mt-2 pb-2 ps-2 pe-2">
            <div class="row mt-2">
                <div class="col-6">
                    <h3>Cadastro de Transportadoras</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-success" href="{{ route('transportadora.create')}}">Nova Transportadora</a>
                </div>
            </div>
        </div>
        <div class="accordion collapsed mt-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Pesquisar
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="">

                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="form-label" for="nome">Transportadora</label>
                                    <input class="form-control" type="text" name="nome" id="nome" value="">
                                </div>
                                <div class="col-md-4 col-sm-12 mt-2 pt-4">
                                    <button class="btn btn-info btn-sm" type="submit">Pesquisar</button>
                                    <a class="btn btn-warning btn-sm" href="{{ route('transportadora.index')}}">Limpar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @session('erro')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> Cliente já cadastrado.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
    @session('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Feito!</strong> Cliente cadastrado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
    @session('exclusion')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Feito!</strong> Cliente excluído com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
    <div class="row">
        <div class="container">
            <div class="card p-2">
                <table class="table table-striped table-responsive table-hover table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome / Razão Social</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider border-top-color">
                        @foreach ($transportadoras as $transportadora)
                            <tr>
                                <td class="col-1">{{ $transportadora->id}}</td>
                                <td class="col-12">{{ $transportadora->nome}}</td>


                                <td><a href="{{ route('transportadora.show', ['transportadora' => $transportadora->id])}}"><img src="{{ Vite::asset('resources/images/eye.svg') }}"
                                            width="20"></a></td>
                                <td><a href="{{route('transportadora.edit', ['transportadora' => $transportadora->id])}}"><img src="{{ Vite::asset('resources/images/edit.svg') }}"
                                            width="20"></a></td>
                                <td><a onclick="return confirm('Tem certeza que deseja apagar o registro?')"
                                        href="{{route('transportadora.destroy', ['transportadora' => $transportadora->id])}}"><img src="{{ Vite::asset('resources/images/trash.svg') }}"
                                            width="20"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $transportadoras->links() }}
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="row">

        </div>
    </div>
@endsection
