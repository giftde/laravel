<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $where = '';
        $ob = DB::table('order')->where('back','2');
        if($request->has('state')){
            $state = $request->input('state');
            $where['state'] = $state;
            $ob->where("state",'like',"%{$state}%");
        }
        $list = $ob->paginate(5);
        return view('Admin.Order.index',['list'=>$list,'where'=>$where]);
    }

    public function info($id,$gid)
    {
        // var_dump($gid);
        $data = DB::table('order')->where('id',$id)->first();
        $list = DB::table('good')->where('id',$gid)->first();
        // dd($list);
        return view('Admin.Order.oinfo',['data'=>$data,'list'=>$list]);
    }

    public function ship($id,$gid)
    {
        // dd($id);
        $row = DB::table('order')->where('id',$id)->update(['state'=>3,'ftime'=>time()]);
        // dd($row);
        if($row>0){
            return redirect('/admin/oinfo'.'/'.$id.'/'.$gid)->with('msg','发货成功');
        }
    }

    public function back()
    {
        // var_dump(111111111);
        $list = DB::table('order')->where('back','=','1')->get();
        // dd($data);
        return view('Admin.Order.back',['list'=>$list]);
    }

    public function doback($id)
    {
        // var_dump($id);
        $row = DB::table('order')->where('id',$id)->update(['tstatus'=>2]);
        // dd($row);
        if($row>0){
            return redirect('/admin/back');
        }
    }

    public function afback($id)
    {
        $row = DB::table('order')->where('id',$id)->update(['tstatus'=>3]);
        // dd($row);
        if($row>0){
            return redirect('/admin/back');
        }
    }

    public function okback($id)
    {
        $row = DB::table('order')->where('id',$id)->update(['tstatus'=>0]);
        // dd($row);
        if($row>0){
            return redirect('/admin/back');
        }
    }
}
