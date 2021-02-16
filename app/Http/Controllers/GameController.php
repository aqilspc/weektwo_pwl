<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class GameController extends Controller
{
	public function index($game)
	{
		 $games='<a href="https://www.educastudio.com/category/'.$game.'">'.$game.'</a>';
		 return $games;

	}
}