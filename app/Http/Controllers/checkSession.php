<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class checkSession extends Controller {
	public function index(Request $rq){
        
        if($rq->session()->exists('user')==false){
            return view('/public/login');
        }else {
            return view('/public/admin');
        }
        return "loi";
    }
}