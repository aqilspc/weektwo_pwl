<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class ArticlesController extends Controller
{
	public function articles($id)
	{
		return "Halaman artikel dengan id ".$id;
	}
}