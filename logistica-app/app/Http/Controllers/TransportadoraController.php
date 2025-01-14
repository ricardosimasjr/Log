<?php

namespace App\Http\Controllers;

use App\Models\Transportadora;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TransportadoraController extends Controller
{
    public function index(Request $request)
    {
        $transportadoras = Transportadora::when($request->has('nome'), function($WhenQuery) use ($request){
            $WhenQuery->where('nome', 'like', '%' . $request->nome . '%');
        })
        ->paginate(5)
        ->withQueryString();

        return view('transportadoras.index', [
            'transportadoras' => $transportadoras,
        ]);
    }

    public function create()
    {
        return view('transportadoras.create');
    }

    public function store(Request $request)
    {
        $transportadora = Transportadora::create($request->all());
        return redirect(route('transportadora.index'));
    }

    public function show(Transportadora $transportadora)
    {
        return view('transportadoras.show', ['transportadora' => $transportadora]);
    }

    public function edit(Transportadora $transportadora)
    {
        return view('transportadoras.edit', ['transportadora' => $transportadora]);
    }

    public function update(Request $request, Transportadora $transportadora)
    {

        $transportadora->updateOrFail([
            'nome' => $request->nome,
        ]);

        return redirect(route('transportadora.index'));
    }

    public function destroy(Transportadora $transportadora)
    {
        $transportadora->destroy($transportadora->id);
        return redirect(route('transportadora.index'));
    }
}
