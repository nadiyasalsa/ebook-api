<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120156,
            'Name' => 'Nadiya Salsabila Nur Adhani',
            'Phone' => '082327289111',
            'Class' => 'XII RPL 5'
        ];
    }
}