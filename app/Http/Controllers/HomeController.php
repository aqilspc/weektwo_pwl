<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class HomeController extends Controller
{
	public function index()
	{
		return 'selamat datang';
	}
}