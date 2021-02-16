<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class NewsController extends Controller
{
	public function index($slug)
	{
		 $slugs='<a href="https://www.educastudio.com/category/'.$slug.'"> NEWS '.$slug.'</a>';
		 return $slugs;

	}
}