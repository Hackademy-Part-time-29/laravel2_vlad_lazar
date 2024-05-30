<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public $test='Ambiente di test';

    public function __construct(){
        $this->test='Ambiente di test 2';
    }
    public function getTest(){
        return $this->test;
    }

    public function getRequest(Request $request){
        
    }
}
