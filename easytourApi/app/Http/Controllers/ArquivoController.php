<?php

namespace App\Http\Controllers;

use App\Arquivo;
use Illuminate\Http\Request;

class ArquivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
  		$arquivo = $request->file('documento');
  		$idUsuario = $request->get('userId');

  		$caminhoDoarquivo = storage_path().'/documentos/parceiros/'.$idUsuario;
  		$nomeDoArquivo = $arquivo->getClientOriginalName();

  		$arquivoModel = new \App\Arquivo();
  		$arquivoModel->nome = $nomeDoArquivo;
  		$usuario = \App\User::find($idUsuario);
  		$usuario->arquivos()->save($arquivoModel);
  		$retorno = $arquivo->move($caminhoDoarquivo, $nomeDoArquivo);

      return $request->json($retorno, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arquivo  $arquivo
     * @return \Illuminate\Http\Response
     */
    public function baixar($idUsuario, $idArquivo)
   	{
   		$arquivo = \App\Arquivo::find($idArquivo);
   		$caminhoDoarquivo = storage_path().'/documentos/parceiros/'.$idUsuario;
   		return \Response::download($caminhoDoarquivo.'/'.$arquivo->nome);
   	}

    public function excluir($idUsuario, $idArquivo)
    {
      $arquivo = \App\Arquivo::find($idArquivo);
      $caminhoDoarquivo = storage_path().'/documentos/parceiros/'.$idUsuario;
      $arquivo->where('user_id', $idUsuario)->where('nome', $arquivo->nome)->delete();
      unlink($caminhoDoarquivo.'/'.$arquivo->nome);
      return redirect()->back()->with('success', 'Arquivo removido com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arquivo  $arquivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Arquivo $arquivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arquivo  $arquivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arquivo $arquivo)
    {
        //
    }


}
