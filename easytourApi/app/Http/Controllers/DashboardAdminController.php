<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\DashboardAdmin;

class DashboardAdminController extends Controller
{
  protected $dashAdmin;

  public function __construct(DashboardAdmin $dash){
    $this->dashAdmin = $dash;
  }

    public function index()
    {
        return $this->dashAdmin->buscarInformacoesDoBanco();
    }
}
