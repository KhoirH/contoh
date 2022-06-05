<?php

namespace App\Controllers;


class Rak extends BaseController
{
    
    public function index()
    {
      $rak = model("Rak");

        return view('RakView', [
            'data' => $rak->getAll()
        ]);
    }
    
}