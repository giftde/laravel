<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // var_dump(111111);
        $where = '';
        $ob = DB::table('category');
        if($request->has('ord')){
            $ord = $request->input('ord');
            $where['ord'] = $name;
            $ob->where('ord','like',"%{$ord}%");
        }
        $list = $ob->paginate(5);
        return view('Admin.Category.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // var_dump(111111);
        return view('Admin.Category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:8',
        ],$this->messages());
        $data = $request->except('_token');
        $id = DB::table('category')->insertGetId($data);
        if($id>0){
            return redirect('admin/category')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        return [
            'name.required' => '分类名必须填写',
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
        $data = DB::table('category')->where('id',$id)->first();
        return view('Admin.Category.edit',['ob'=>$data]);
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
        $data = $request->only('name');
        $row = DB::table('category')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/category')->with('msg','修改成功');
        }else{
            return redirect('admin/category')->with('error','修改失败');
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
        $list = DB::table('category')->where('ord',$id)->get();
        if(count($list)>0){
            return redirect('admin/category')->with('error','要删除此类必须先删除此类下的子类');
        }

        $row = DB::table('category')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/category')->with('msg','删除成功');
        }else{
            return redirect('admin/category')->with('error','删除失败');
        }
    }

    public function createSon($id)
    {
        $list = DB::table('category')->where('id',$id)->first();
        return view('Admin.Category.addSon',['list' => $list]);
    }

    public function storeSon(Request $request)
    {
        $data = $request->except('_token');
        $par = DB::table('category')->where('id',$request->input('ord'))->first();

        $data['tid'] = $par->tid.','.$data['ord'];
        // dd($data);
        $id = DB::table('category')->insertGetId($data);
        if($id>0){
            return redirect('admin/category')->with('msg','添加子类成功');
        }

    }
}
