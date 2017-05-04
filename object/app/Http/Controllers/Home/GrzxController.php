<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GrzxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session('user')->uid;
       // dd(1111111);
         $list = DB::table('user')->where('uid',$id)->get();
         $config = DB::table('config')->where('state','1')->first();
         $good = DB::table('good')->get();
         // 全部订单
         $order = DB::table('order')->get();
        // 待付款订单
        $order1 = DB::table('order')->where('state','1')->get();
        //代发货订单
        $order2 = DB::table('order')->where('state','2')->get();
        // 待收货订单
        $order3 = DB::table('order')->where('state','3')->get();
        //交易完成订单
        $order4 = DB::table('order')->where('state','4')->get();
        //支付方式
        $pays = DB::table('pays')->get();
        //评论列表
        $comment = DB::table('comment')->get();
        $address = DB::table('address')->where('uid',$id)->get();
        $district = DB::table('district')->where('level','1')->get();
        $cllect = DB::table("cllect")->where('uid',$id)->get();
        $links = DB::table('links')->get();
        // dd($cllect);
         if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
         }
         // dd($list);
        // return view('Home/index',['list'=>$list,'data'=>$data]);
        return view('Home.grzx',['list'=>$list,'config'=>$config,'config'=>$config,'order'=>$order,'order1'=>$order1,'order2'=>$order2,'order3'=>$order3,'order4'=>$order4,'pays'=>$pays,'good'=>$good,'comment'=>$comment,'address'=>$address,'district'=>$district,'cllect'=>$cllect,'links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token","site1");
        // dd($data); 
        $id = DB::table('address')->insertGetId($data);
        // dd($id);
        return redirect('/home/grzx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //显示页面的方法
        // echo "aaaaa";
        // echo $id;  
        
        $ob = DB::table('user')->where('uid',$id)->first();
        $config = DB::table('config')->where('state','1')->first();
        $links = DB::table('links')->get();
         if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
         }
         // dd($ob->upic);
        return view('Home.edit',['ob'=>$ob,'config'=>$config,'links'=>$links]);

       //  $id = session('user')->uid;
       // dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd(request());
         $data = request()->only('uname','age','tel','sex');
         // dd($data);
         if($request->hasFile('upic')){
            // dd($request);
            $d = $request->file('upic');
            // dd($d);
            $ext = $d->getClientOriginalExtension();
    
            // 拼装出你需要使用的文件名
            $upicname = time().rand(1000,9999).'.'.$ext;
             // dd($upicname);
            // 移动临时文件，生成新文件到指定目录下
            $d->move('./Admin/upload',$upicname);
            $data['upic'] = $upicname;
           
        }else{
             $data['upic'] = $request->input('oldpic');
        }
      // dd($data);
        $row = DB::table('user')->where('uid',$id)->update($data);
        $list =DB::table('user')->where('uid',$id)->first();
        $config = DB::table('config')->where('state','1')->first();
        $links = DB::table('links')->get();
         if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
         }
        if($row>0){
            return redirect('/home/grzx');
        }else{
            return redirect('/home/grzx');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $row = DB::table('address')->where('id',$id)->delete();
        if($row>0){
            return redirect('/home/grzx');
        }else{
            return redirect('/home/grzx');
        }
    }

    public function updateaddr(Request $request, $id)
    {
        if($request->only('site')['site']){
            $data = $request->except('_token','gsite','site1');
            $row = DB::table('address')->where('id', $id)->update($data);
            if($row > 0){
                return redirect('/home/grzx');
            }else{
                echo "<script>alert('你没有进行修改操作')</script>";
                return redirect('/home/grzx');
            }
        }else{
            $site = $request->only('site1');
            // dd($site);
            $data = $request->except('_token','gsite','site','site1');
            $data['site'] = $site['site1'];
            // dd($list);
            $row = DB::table('address')->where('id',$id)->update($data);
            if($row > 0){
                return redirect('/home/grzx');
            }else{
                $str = "你没有进行修改操作";
                return redirect('/home/grzx')->with('error',$str);
            }
        }

    }

    public function delcllect($gid,$uid)
    {
        $row = DB::table('cllect')->where('gid',$gid)->where('uid',$uid)->delete();
        // dd($gid);
        if($row>0){
            $str = '已取消关注';
            return redirect('/home/grzx')->with('msg',$str);
        }
    }

    public function ordpay($id, $uid)
    {
        // dd($id);
        $row = DB::table('order')->where('id',$id)->update(['state'=>2]);
        DB::table('temprory')->where('uid',$uid)->delete();
        if($row > 0){
            return redirect('/home/ordinfo/'.$id);
        }
    }

    public function ordinfo($id)
    {
        // dd($id);
        $data = DB::table('order')->where('id',$id)->first();
        $gid = explode(',',$data->gid);
        $good = DB::table('good')->get();
        $config = DB::table('config')->where('state','1')->first();
        $category = DB::table('category')->get();
        $links = DB::table('links')->get();
         if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
         }
        return view('Home/ordinfo',['data'=>$data,'good'=>$good,'gid'=>$gid,'config'=>$config,'category'=>$category,'links'=>$links]);
    }

    public function ordok($id)
    {
        // dd($id);
        $row = DB::table('order')->where('id',$id)->update(['state'=>4]);
        if($row > 0){
            return redirect('/home/ordinfo/'.$id);
        }
    }
}
