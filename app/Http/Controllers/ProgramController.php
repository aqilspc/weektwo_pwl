<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProgramController extends Controller
{
	public function index($slug)
	{
		 $slugs='<a href="https://www.educastudio.com/category/'.$slug.'"> Program '.$slug.'</a>';
		 return $slugs;

	}
}