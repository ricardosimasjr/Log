@extends('layouts/base')

@section('title')
    Lista de Notas
@endsection

@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-6">
                <h3>Notas Fiscais</h3>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-success" href="{{ route('nota.create') }}">Nova Nota</a>
            </div>
        </div>
    </div>
    <hr>
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

                            <div class="col-md-2 col-sm-12">
                                <label class="form-label" for="dt_emissao_ini">Emissão Inicial</label>
                                <input class="form-control" type="date" name="dt_emissao_ini" id="ndt_emissao_ini"
                                    value="">
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <label class="form-label" for="dt_emissao_fin">Emissão Final</label>
                                <input class="form-control" type="date" name="dt_emissao_fin" id="ndt_emissao_fin"
                                    value="">
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <label class="form-label" for="nfe">NF-e</label>
                                <input class="form-control" type="text" name="nfe" id="nfe" value="">
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <label class="form-label" for="razaosocial">Cliente</label>
                                <input class="form-control" type="text" name="razaosocial" id="razaosocial"
                                    value="">
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <label class="form-label" for="ufcliente">UF</label>
                                <input class="form-control" type="text" name="ufcliente" id="ufcliente" value="">
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <label class="form-label" for="tpfrete">Tipo Frete</label>
                                <input class="form-control" type="text" name="tpfrete" id="tpfrete" value="">
                            </div>
                            <div class="col-md-2 col-sm-12 mt-2 pt-4">
                                <button class="btn btn-info btn-sm" type="submit">Pesquisar</button>
                                <a class="btn btn-warning btn-sm" href="{{ route('nota.index') }}">Limpar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion accordion-flush" id="pedidoList">
        <div class="row">
            <table class="table table-striped table-responsive table-hover table-sm">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Emissão</th>
                        <th scope="col">NF-e</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Volumes</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($notas)
                        @foreach ($notas as $nota)
                            <tr>
                                <td class="col text-center">
                                    {{ \Carbon\Carbon::parse($nota->emissao)->tz('America/Sao_Paulo')->format('d/m/Y') }}
                                </td>
                                <td class="col text-center">{{ $nota->nfe }}</td>
                                <td class="col">{{ $nota->razaosocial }}</td>
                                <td class="col">{{ $nota->municipio }}</td>
                                <td class="col text-center">{{ $nota->ufcliente }}</td>
                                <td class="col text-center">{{ $nota->tpfrete }}</td>
                                <td class="col text-end">{{ $nota->volumes }}</td>
                                <td class="col text-end">{{ number_format($nota->peso, 2, ',', '.') . 'Kg' }}</td>
                                <td class="col text-end">{{ 'R$' . number_format($nota->vnota, 2, ',', '.') }}</td>
                                <td><a href="{{ route('nota.show', ['nota' => $nota->id]) }}"><img
                                            src="{{ Vite::asset('resources/images/eye.svg') }}" width="20"></a></td>

                                @if ($nota->canhoto == '')
                                    <td><a href="{{ route('nota.createrecibo', ['nota' => $nota->id]) }}"><img
                                                src="{{ Vite::asset('resources/images/reciboOff.png') }}" width="20"></a>
                                    </td>
                                @else
                                    <td><a href="{{ route('nota.createrecibo', ['nota' => $nota->id]) }}"><img
                                                src="{{ Vite::asset('resources/images/reciboOn.png') }}" width="20"></a>
                                    </td>
                                @endif



                                <td><a href="{{ route('nota.destroy', ['nota' => $nota->id]) }}"><img
                                            src="{{ Vite::asset('resources/images/trash.svg') }}" width="20"></a></td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
            {{ $notas->links() }}
        </div>



    </div>
@endsection
