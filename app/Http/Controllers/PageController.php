<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class PageController extends Controller
{
	public function index()
	{
		return 'selamat datang';
	}

	public function about()
	{
		$nama = ' Abdulloh Aqil';
		$nim = '1941720064';
		return $nama.' '. $nim;
	}

	public function articles($id)
	{
		return "Halaman artikel dengan id ".$id;
	}
}