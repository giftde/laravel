<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use DB;

class RegisterController extends Controller
{
    //
    public function index()
    {

        // dd(222222222222);
        $links = DB::table('links')->get();
        return view('Home.register',['links'=>$links]);
    }

    public function doregister(Request $request)
    {

        $data = $request->except('_token');
        // dd($data);
        // dd();
        $ob = DB::table('user');
        $name = $data['uname'];

        $uname =DB::table('user')->where('uname',$name)->first(); 
        if (isset($uname)) {
            return back()->with('msg','注册失败：该用户已存在');
        }
        
        // dd($request);
        // 获取验证码中的内容
        $icode = session('mycode');
        // 获取用户输入的验证码内容
        $aa = $data['icode'];
        // 判断是用户输入的验证码和session中的内容是否一致
        if ($icode != $aa) {
            return back()->with('msg','注册失败：验证码不正确');
        }
        if ($request->input('password') != $request->input('repass')) {
            return back()->with('msg','注册失败：两次密码不一致');  
        } 
        $data = $request->only('uname','password');
        $data['addtime'] = time();
        $data['password'] = md5($data['password']);
        $id = DB::table('user')->insertGetId($data);
        if($id>0){
            return redirect('home/login')->with('msg','注册成功，请您登陆');
        }else{
            return back()->with('msg','注册失败：请您检查网络重新注册');
        }


    }

                                               


    public function captch($tmp)
    {
        // 生成验证码图片的builder对象，
        $builder = new CaptchaBuilder;
        // 设置验证码的宽高字体
        $builder->build(150,35,null);
        // 获取验证码中的内容
        $data = $builder->getPhrase();
        // 把验证码的内容闪存到session中
        session()->flash('mycode',$data);
        // 将内容输出到浏览器上 并告诉浏览器这里是一张图片
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}
