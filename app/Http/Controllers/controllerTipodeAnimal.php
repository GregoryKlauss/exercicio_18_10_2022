<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerTipodeAnimal extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        use App\Models\TipodeAnimais;
 
        Route::resource(TipodeAnimais::class);

        $this->TipodeAnimais = $id();
        $this->TipodeAnimais = $descricao();
        
    }
}
