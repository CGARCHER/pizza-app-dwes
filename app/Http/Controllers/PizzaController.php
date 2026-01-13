<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Services\PizzaService;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    protected $pizzaService;

    public function __construct(PizzaService $pizzaService)
    {
        $this->pizzaService =  $pizzaService;
    }

    public function getAllPizza(){
      return ApiResponse::success($this->pizzaService->getAllPizza(),"Operación finalizada");
    }
}
