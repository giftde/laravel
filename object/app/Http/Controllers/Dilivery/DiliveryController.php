<?php

namespace App\Http\Controllers\Dilivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class DiliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('dilivery');
        //判断是否有搜索条件
        if($request->has('switch')){
            //获取搜索的条件
            $switch = $request->input('switch');
            //添加到将要携带到分页中的数组中
            $where['switch'] = $switch;
            //给查询添加where条件
            $ob->where('switch',$switch);
        }
        if($request->has('name')){
            //获取搜索的条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(3);
        return view('Admin.Dilivery.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Admin.Dilivery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dilivery
         $this->validate($request, [
            'name' => 'required|max:8',
            'content' => 'required',          
        ],$this->messages());
        $data = $request->except('_token');
        $id = DB::table('dilivery')->insertGetId($data);
        if($id>0){
            return redirect('/admin/dilivery')->with('msg','添加成功');
        }

    }

    public function messages()
    {
        return [
            'name.required' => '配送方式名称必须填写',
            'content.required' => '配送内容必须填写',
        ];
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
        //dilivery
        $data = DB::table('dilivery')->where('id',$id)->first();
        // dd($data);
        return view('Admin.Dilivery.edit',['ob'=>$data]);
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
        //dilivery
        $data = $request->only('name','content','switch');
        $row = DB::table('dilivery')->where('id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('/admin/dilivery')->with('msg','修改成功');
        }else{
            return redirect('/admin/dilivery')->with('error','修改失败');
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
        //dilivery
        $row = DB::table('dilivery')->where('id',$id)->delete();
        // dd($row);
        if($row>0){
            return redirect('/admin/dilivery')->with('msg','删除成功');
        }else{
            return redirect('/admin/dilivery')->with('error','删除失败');
        }
    }
}
