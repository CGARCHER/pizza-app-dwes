<?php

namespace App\Services;

use App\Models\Pizza;

class PizzaService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllPizza(){
        return Pizza::orderBy('price','ASC')->get();
    }
}
