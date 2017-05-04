<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ob = DB::table('good')->where('under','2');
        $links = DB::table('links')->get();
        $where = '';
        //判断是否有搜索条件
        if($request->has('name')){
            //获取搜索的条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
            //搜索页面
            $good = $ob->paginate(12);
            $list = DB::table('category')->where('ord','!=','0')->get();
            $config = DB::table('config')->where('state','1')->first();
            $cllect = DB::table('cllect')->get();
            if(empty($config)){
                return view('Home/tenance',['config'=>$config]);
            }
            return view('Home/search',['list'=>$list,'config'=>$config,'where'=>$where,'good'=>$good,'search'=>$name,'cllect'=>$cllect,'links'=>$links]);
        }
        //执行分页查询
        $good = $ob->get();
        // dd($good);
        $list = DB::table('category')->where('ord','!=','0')->get();
        $config = DB::table('config')->where('state','1')->first();
        if(empty($config)){
            return view('Home/tenance',['config'=>$config,'links'=>$links]);
        }
        return view('Home/index',['list'=>$list,'config'=>$config,'where'=>$where,'good'=>$good,'links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // var_dump(11111);
        $links = DB::table('links')->get();
        return view('Home.add',['links'=>$links]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if(!session()->has('user')){
            return redirect('home/login');
        }
        $data = $request->except('_token','gid');
        // dd($data);
        $id = DB::table('replay')->insertGetId($data);
        $links = DB::table('links')->get();
        if($id>0){
            return redirect('/home/mi/'.$request->input('gid').'/edit');
        }
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
        $data = DB::table('good')->where('id',$id)->first();
        $list = DB::table('comment')->where("gid",$id)->get();
        $config = DB::table('config')->first();
        $info = DB::table('user')->get();
        //全部评论
        $replay = DB::table('replay')->get();
        //好评
        $yescomment = DB::table('comment')->where("gid",$id)->where("classify","1")->get();
        //差评
        $nocomment = DB::table("comment")->where("gid",$id)->where("classify","2")->get();
        $links = DB::table('links')->get();
        //关注
        if(empty(session('user')->uid)){

        }else{
            $cllect = DB::table('cllect')->where('gid',$id)->where('uid',session('user')->uid)->first();
        }
        // dd($cllect);
        if(empty($cllect)){
            $msg = "";
        }else{
            $msg = '已关注';
        }
        return view('Home.info',['data'=>$data,'list'=>$list,'info'=>$info,'replay'=>$replay,'yescomment'=>$yescomment,'nocomment'=>$nocomment,'config'=>$config,'msg'=>$msg,'links'=>$links]);
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
        // dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cllect(Request $request)
    {
        $data = $request->except('_token');
        $id = DB::table('cllect')->insertGetId($data);
        if($id>0){
            return redirect('/home/mi/'.$request->input('gid').'/edit');
        }
    }

    public function delcll($gid, $uid)
    {
        $row = DB::table('cllect')->where('gid',$gid)->where('uid',$uid)->delete();
        // dd($gid);
        if($row>0){
            return redirect('/home/mi/'.$gid.'/edit');
        }
    }
}
