<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public $title='';
    public $subtitle='Sottotitolo';
    
    public $auth=[
        'username'=>'Giovanni',
        'email'=>'email@mail.it'
    ];

    public function welcome(){
        return view('welcome');
    }

    public function chiSiamo(){
        $this->title='Chi siamo';
        return view ('pages.layout',[
            'title'=>$this->title,
            'subtitle'=>$this->subtitle
        ]);
    }
    public function contatti(){
        $this->$title='Contatti';
        return view('pages.layout',[
            'title'=>$this->title,
            'subtitle'=>$this->subtitle
        ]);
    }
}
