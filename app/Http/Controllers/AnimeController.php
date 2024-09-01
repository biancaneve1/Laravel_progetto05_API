<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class AnimeController extends Controller
{
   
const JIKAN='https://api.jikan.moe/v4/anime';

   public function index(){

// $animes = Http::get('https://api.jikan.moe/v4/anime')->json()['data'];//primo metodo 
$animes = Http::get(self::JIKAN)->json('data');

// dd($animes);

return view('anime.index',['animes'=>$animes]);

}
public function show($id){

// dd($id);

$anime=Http::get(self::JIKAN .'/' . $id)->json('data');

// dd($anime);
return view('anime.show',['animes' => $anime]);

}


 
}
