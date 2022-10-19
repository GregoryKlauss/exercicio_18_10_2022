<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPet extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        use App\Models\Pet;
 
        Route::resource(Pet::class);
        $this->$Pet = $id();
        $this->$Pet = $name();
        $this->$Pet = $descricao();
        $this->$Pet = $datanascimento();
    }
}
