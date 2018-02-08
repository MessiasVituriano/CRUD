<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Funcionario;

class FuncionarioController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index',['todososfuncionarios' => $funcionarios]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'cargo' => 'required',
            'salario' => 'required'
        ]);
        
        $funcionario = new Funcionario;
        $funcionario->nome = $request->nome;
        $funcionario->cargo = $request->cargo;
        $funcionario->salario = $request->salario;
        $funcionario->save();

        return redirect('funcionarios');
        
    }

    public function show($id)
    {
        $funcionario = Funcionario::FindOrFail($id);
        return view('funcionarios.details')->with('detailpage', $funcionario);        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::FindOrFail($id);

        return view('funcionarios.edit',['funcionario' => $funcionario]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $funcionario = Funcionario::FindOrFail($id);
        $this->validate($request, [
            'nome' => 'required',
            'cargo' => 'required',
            'salario' => 'required'
        ]);

        $funcionario->nome = $request->nome;
        $funcionario->cargo = $request->cargo; 
        $funcionario->salario = $request->salario;
        $funcionario->save();
        return redirect('funcionarios');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::FindOrFail($id);
        $funcionario -> delete($id);
        return redirect('funcionarios')->with('message', 'Funcionario apagado com sucesso!');
    }
}
