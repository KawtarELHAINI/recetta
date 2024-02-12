<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = [
            ['id' => '1', 'nom' => 'yassine', 'content' => 'content N*1'],
            ['id' => '2', 'nom' => 'walid', 'content' => 'content N*2'],
            ['id' => '3', 'nom' => 'safa', 'content' => 'content N*3'],
        ];
        return view('index', compact('users'));
    }
}
