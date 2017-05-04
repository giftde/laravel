<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('Home.login');
    }



public function dologin(Request $request){
        
         // dd(111111111);
        
        $ob = DB::table('user');
        $data = $request->except('_token');
        // dd($request);
        $name = $data['uname'];
        // dd($name);
        $uname =DB::table('user')->where('uname',$name)->first();
        // dd($uname);
        // dd($data);
        if($uname){
            if(md5($request->input('password'))== $uname->password){
                session(['user' => $uname]);
                return redirect('/home/mi');
            }else{
                return back()->with('msg','登录失败：密码不正确');
            }
        }else{
        return back()->with('msg','登录失败：用户名不正确');
        }
     }
     

    // // 注销登录的操作
    public function over(){
     // 将session中的adminuser内容给删除了
     session()->forget('user');
     $list = DB::table('category')->where('ord','!=','0')->get();
        $data = DB::table('good')->where('under','2')->get();
        $config = DB::table('config')->where('state','1')->first();
        $links = DB::table('links')->get();
        if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
        }
        return redirect('home/mi/');
    }


}





