<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\RequestModel;
use App\Models\RequestProduct;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        // 1. Criar a requisição (cabeçalho)
        $req = RequestModel::create([
            'user_id' => auth()->id(),
            'sector_id' => auth()->user()->sector_id,
            'status' => 'pendente',
            'observacao' => $request->observacao
        ]);

        // 2. Verificar se tem itens
        if ($request->has('itens')) {

            foreach ($request->itens as $item) {

                // Ignorar item vazio
                if (empty($item['codigo']) || empty($item['quantidade'])) {
                    continue;
                }

                // 3. Buscar material pelo código
                $material = Product::where('code', $item['codigo'])->first();

                // Se não encontrar, ignora (ou depois você trata erro)
                if (!$material) {
                    continue;
                }

                // 4. Salvar item da requisição
                RequestProduct::create([
                    'request_id' => $req->id,
                    'material_id' => $material->id,
                    'quantity_requested' => $item['quantidade'],
                ]);
            }
        }

        return redirect()->route('requests.show', $req->id)
            ->with('success', 'Requisição criada com sucesso!');
    }
    public function show($id)
    {
        $request = RequestModel::with('items.material')->findOrFail($id);

        return view('request.show', compact('request'));
    }
}
