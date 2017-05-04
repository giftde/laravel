<?php

namespace App\Http\Controllers\Admin\Problem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ProController extends Controller
{
    public function index()
    {
        $list = DB::table('problems')->get();
        $data = DB::table('user')->get();
        // dd($data);
        return view('Admin.Problems.index',['list'=>$list,'data'=>$data]);
    }

    public function preplay($id, $name, $tel)
    {
        // dd($id,$name);
        $list = DB::table('problems')->where('id',$id)->first();
        return view('Admin.Problems.preplay',['list'=>$list,'name'=>$name,'tel'=>$tel]);
    }

    public function doreplay(Request $request, $id)
    {
        $data = $request->except('_token','_method');
        // dd($data);
        $row = DB::table('problems')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/problem')->with('msg','回复成功');
        }else{
            return redirect('admin/problem')->with('error','回复失败');
        }
    }
}
