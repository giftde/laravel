<?php

namespace App\Http\Controllers\Links;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class LinksController extends Controller
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
        $ob = DB::table('links');
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
        return view('Admin.Links.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Links.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:8',
            'url'  => 'required',
        ],$this->messages());
        $data = $request->except('_token');
        $id = DB::table('links')->insertGetId($data);
        if($id>0){
            return redirect('/admin/links')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        return [
            'name.required' => '友情链接的名字必填项,不大于8位',
            'url.required' =>'友情链接url地址必填项',
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
        //
         $data = DB::table('links')->where('id',$id)->first();
        return view('Admin.Links.edit',['ob'=>$data]);
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
         $data = $request->only('name','url','switch');
        $row = DB::table('links')->where('id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('/admin/links')->with('msg','修改成功');
        }else{
            return redirect('/admin/links')->with('error','修改失败');
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
        //
        $row = DB::table('links')->where('id',$id)->delete();
        // dd($row);
        if($row>0){
            return redirect('/admin/links')->with('msg','删除成功');
        }else{
            return redirect('/admin/links')->with('error','删除失败');
        }
    }
}
