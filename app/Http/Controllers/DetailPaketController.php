<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPaketController extends Controller
{
    public function viewdetailpaket(){
        return view('detailpaket',[
            'title'=>'Detail Paket',
            'active' => 'detailpaket'
        ]);
    }

}

