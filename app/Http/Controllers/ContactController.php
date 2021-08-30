<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {

        $this->data['id'] = '202481';
        $this->data['name'] = 'Rejuan Ahamed';
        
        return view('home.index', $this->data );
    }
}
