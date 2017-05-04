<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
//use Session; 

class CartController extends Controller
{
    //
    public function __construct(){

    session_start();

    }
 
    public function add(Request $request)
    {
       
      // dd($request);
      if(!session()->has('user')){
        return redirect('home/login')->with('msg','请您先登录，再购买');
      }
      $data = $request->except('_token','x','y');
      // dd($data);
      $id = DB::table('temprory')->insertGetId($data);
      $links = DB::table('links')->get();
      if($id > 0){
        return view('Home.caradd',['tem_id'=>$id,'links'=>$links]);
      }
    }

    public function show()
    {
      if(!session()->has('user')){
        return redirect('home/login')->with('msg','请您先登录，再查看购物车');
      }
      $data = DB::table('temprory')->get();
      $links = DB::table('links')->get();
      // $data = session('cart');
       // dd($_SESSION['cart'][session('user')->uname]);
          // dd($data);
      return view('Home.carshow',['data'=>$data,'links'=>$links]);
    }


    public function destory($id)
    {
         
        // dd($_SESSION['cart'][session('user')->uname][$id])
        ;
        
        // if(!($_SESSION['cart'][session('user')->uname])){
        //     return redirect('home/cartshow')->with('msg','购物车是空的');
        // }
        DB::table('temprory')->where('id',$id)->delete();
         return redirect('home/cartshow');
        
         // dd($id);
       // $a = session()->push('48');
       // dd(session('cart'));
    }
  
  
  public function update(Request $request)
    {
       
    //用户名
    $uname  = session('user')->uname;
    //$array[$uname][]
     $parductid =  $request->productid;
     $num =  $request->val;
     // $array[$uname][$parductid]['num'] = $num;
     $_SESSION['cart'][session('user')->uname][$parductid]->num = $num;
     echo json_encode($_SESSION['cart'][session('user')->uname]);
    
    
  }
  
  public function update_a()
    {
     
    
      dd($_SESSION['cart']);

  }

    public function order(Request $request)
    {
      // dd($request);
        $data = $request->only('total','goodsnum','goodspic');
        $data['username'] = session('user')->uname;
        $data['goodspic'] = rtrim($request->input('goodspic'),',');
        $data['gid'] = rtrim($request->input('tjgid'),',');
        $data['price'] = rtrim($request->input('gprice'),',');
        $data['goodsname'] = rtrim($request->input('goodsname'),',');
        $gid = explode(',',$data['gid']);
        // $price = explode(',',$data['price']);
        // $goodspic = explode(',',$data['price']);
        // $goodsname = explode(',',$data['goodsname']);
        // dd($data);
        $data['tel'] = session('user')->tel;
        $data['state']  = 1;
        $list = DB::table('address')->get();
        $good = DB::table('good')->get();
        $links = DB::table('links')->get();
       return view('home.order',['list'=>$list,'good'=>$good,'ob'=>$data,'gid'=>$gid,'$links'=>$links]);
        // // dd($data['gid']);  
        // return view('home.order',['ob'=>$data]);
    }

        // return view('home.pay');
    public function insertaddr(Request $request)
    {
      $data = $request->except("_token","site1");
      // dd($data); 
      $id = DB::table('address')->insertGetId($data);
      $row = DB::table('address')->where('id',$id)->first();
    }

    public function deladdr($id)
    {
      // dd($id);
      $row = DB::table('address')->where('id',$id)->delete();
      if($row>0){
        return redirect('/home/order');
      }
    }
  
    public function stocll(Request $request)
    {
      // dd($request);
      $data = $request->except("_token",'x','y');
      $uid = $request->input('uid');
      $gid = $request->input('gid');
      $row = DB::table('cllect')->where('uid',$uid)->where('gid',$gid)->first();
      if(empty($row)){
        $id = DB::table('cllect')->insertGetId($data);
        if($id > 0){
          return back();
        }
      }else{
          $msg = '您已关注过该商品';
          return back()->with('msg',$msg);
      }
      exit;
      // dd($data);
      
      
    }
  
}
