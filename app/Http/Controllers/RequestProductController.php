<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestProductController extends Controller{

    public function store(){
        Request::create((string)[
            'user_id' => auth()->id(),
            'sector_id' => auth()->user()->sector_id,
            'status' => 'pendente'
        ]);

        return redirect()->route('requests.index')
            ->with('success', 'Requisição criada com sucesso!');
    }
}
