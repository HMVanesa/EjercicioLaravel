<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  public function index() {
$movies = Movie::all();
// usamos all() para traer todas las películas de la base de datos
return view('movies', compact('movies'));
// Retornamos la vista con la variable
}

}
