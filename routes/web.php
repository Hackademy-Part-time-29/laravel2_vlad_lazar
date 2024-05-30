<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;



Route::get('/', [PageController::class,'welcome']);
Route::get('chi-siamo',[PageController::class,'chiSiamo'])->name('chi-siamo');
Route::get('/contatti',[PageController::class,'contatti'])->name('contatti');


Route::get('/articoli',function(){
    $articles=[
        1=>['id'=>1,'title'=>'Articolo 1','body'=>'lorem ipsum'],
        2=>['id'=>2,'title'=>'Articolo 2','body'=>'lorem ipsum'],
        3=>['id'=>3,'title'=>'Articolo 3','body'=>'lorem ipsum'],
        4=>['id'=>4,'title'=>'Articolo 4','body'=>'lorem ipsum'],

    ];
    return view('pages.articoli',compact('articles'));
})->name('articles'); 



Route::get('/articolo/id={id}',[ArticleController::class,'show'])->name('articolo');

Route::get('/test',[TestController::class,'getTest']);