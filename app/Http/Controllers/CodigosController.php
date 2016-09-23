<?php
/**
 * Created by PhpStorm.
 * User: Vitor José da Silva Lima
 * Date: 22/09/2016
 * Time: 15:46
 */

namespace VitorCIn\Http\Controllers;

use VitorCIn\Http\Requests;
use VitorCIn\Http\Requests\CodigoRequest;
use VitorCIn\Codigo;

class CodigosController extends Controller{
    public function index(){
        $codigos = Codigo::all();
        return view('codigos.index', ['codigos'=>$codigos]);
    }
    public function create(){
        return view('codigos.create');
    }
    public function store(CodigoRequest $request){
        $input = $request->all();
        Codigo::create($input);
        return redirect()->route('codigos');
    }
    public function viewquestion($id){
        $codigo = Codigo::find($id);
        return view('codigos.viewquestion', compact('codigo'));
    }
    public function edit($id){
        $codigo = Codigo::find($id);
        return view('codigos.edit', compact('codigo'));
    }
    public function update(CodigoRequest $request, $id){
        $codigo = Codigo::find($id)->update($request->all());
        return redirect()->route('codigos');
    }
    public function destroy($id){
        Codigo::find($id)->delete();
        return redirect('codigos');
    }
}