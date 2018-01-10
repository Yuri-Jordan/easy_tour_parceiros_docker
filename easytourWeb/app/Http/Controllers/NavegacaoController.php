<?php

namespace App\Http\Controllers;

class NavegacaoController extends Controller{

  public function getPaginasCadastrar($paginaCadastro){
    return view('cadastrar/' . $paginaCadastro);
  }

  public function getPaginasListar($paginaListagem){
    return view('listar/' . $paginaListagem);
  }
}
