<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Parceiro;
use Carbon\Carbon;

class DashboardAdmin extends Model
{

    protected $jsonDeRespostaComInformacoesDoBanco = [];

    public function buscarInformacoesDoBanco()
    {
        return $jsonDeRespostaComInformacoesDoBanco = ['quantidades' => [
                                                        'usuarios' => ['titulo'=>"Usuários",
                                                                      'quantidade'=>11,
                                                                      'variacaoPercentualUltimaSemana'=>10],
                                                        'turista' => ['titulo'=>"Turistas",
                                                                      'quantidade'=>11,
                                                                      'variacaoPercentualUltimaSemana'=>10],
                                                        'parceiros'=> ['titulo'=>"Parceiros",
                                                                      'quantidade'=>Parceiro::count(),
                                                                      'variacaoPercentualUltimaSemana'=>$this->calcularVariacaoPercentual()],
                                                        'roteiros' => ['titulo'=>"Roteiros",
                                                                        'quantidade'=>11,
                                                                        'variacaoPercentualUltimaSemana'=>10],
                                                        'pontos'=>['titulo'=>"Pontos",
                                                                    'quantidade'=>11,
                                                                    'variacaoPercentualUltimaSemana'=>10]
                                                        ]];
    }

    public function calcularVariacaoPercentual()
    {
      $dataAtual = Carbon::today("BRT");
      $qtdParceirosCadastradosAteSemanaAnterior = Parceiro::where('created_at', '<=', $dataAtual->subWeeks(1))->count();
      $qtdParceirosCadastradosAteHoje = Parceiro::all()->count();
      return ($qtdParceirosCadastradosAteHoje - $qtdParceirosCadastradosAteSemanaAnterior)/$qtdParceirosCadastradosAteSemanaAnterior*100;
    }

}
