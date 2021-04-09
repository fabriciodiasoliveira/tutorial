<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomes;

class NomesController extends Controller {

    private $model;

    function __construct() {
        $this->model = new Nomes();
    }

    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'telefone' => $request['telefone']
        ];
        return $data;
    }

    public function index() {
        $nomes = $this->model->getAllNomes();
        return view('nomes.index', compact('nomes'));
    }

    public function create() {
        return view('nomes.create');
    }

    public function store(Request $request) {
        $this->model->store($this->setData($request));
        return redirect()->route('nomes.index')->with('success', 'Um nome inserido.');
    }

    public function show($id) {
        $nome = $this->model->getNome($id);
        return view('nomes.show', compact('nome'));
    }

    public function edit($id) {
        $nome = $this->model->getNome($id);
        return view('nomes.edit', compact('nome'));
    }

    public function update(Request $request, $id) {
        $this->model->updateSemModel($id, $this->setData($request));
        return redirect()->route('nomes.index')->with('success', 'Nome alterado');
    }

    public function destroy($id) {
        $this->model->remove($id);
        return redirect()->route('nomes.index')->with('success', 'Nome deletado');;
    }
}
