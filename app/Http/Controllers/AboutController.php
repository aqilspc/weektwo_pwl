<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class AboutController extends Controller
{
	// public function about()
	// {
	// 	$nama = ' Abdulloh Aqil';
	// 	$nim = '1941720064';
	// 	return $nama.' '. $nim;
	// }
		public function index()
	{
		 $slugs='<a href="https://www.educastudio.com/about-us/">About-us</a>';
		 return $slugs;

	}
}