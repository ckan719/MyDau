<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class checkLogin extends Controller {
	public function index(Request $rq){
        $rq->session()->flush();
		$ms = $rq->input('username');
		$pw = $rq->input('pass');
		
		$users = DB::select("select * from account where user = '". $ms ."' and pass = '".$pw. "'");
        
		if($users != null){
			session()->put('user', $ms);
			foreach ($users as $key) {
                session()->put('username', $key->name);
                if($key->level == "1"){
                    return view('/public/admin',['users'=>$users]);
                }else if($key->level == "0"){
                    return view('/public/dauportal',['users'=>$users]);
                }
            }
            
			
		}
		else{
			return view('/public/login');
		}

	}
}