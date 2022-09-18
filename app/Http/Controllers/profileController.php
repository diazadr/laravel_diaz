<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bioModel;
use Auth;

class profileController extends Controller
{
    public function profile(){
        return view('pages.profil', [
            "biodata"=>bioModel::where('email', auth()->user()->email)->firstOrFail()
        ]);
    }
}