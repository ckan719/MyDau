<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class out extends Controller {
	public function index(Request $rq){
        $rq->session()->flush();
        return view("/public/login");
        
    }
}