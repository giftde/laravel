<?php

namespace App\Http\Controllers\Temprory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class TemproryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('temprory');
        //判断是否有搜索条件
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
        return view('Admin.Temprory.index',['list'=>$list,'where'=>$where]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //temprory
        return view('Admin.Temprory.add');
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
        $this->validate($request,[
            'gid'=>'required|numeric',
            'uid'=>'required|numeric',
            'num'=>'required|numeric',
            'price'=>'required|numeric',
            'name'=>'required|max:4',


            ],$this->messages());
        $data = $request->except('_token');
       // dd($data);
       $d = $request->file('pic');
       $ext = $d->getClientOriginalExtension();
        // 拼装出你需要使用的文件名
        $picname = time().rand(1000,9999).'.'.$ext;
        // 移动临时文件，生成新文件到指定目录下
        $d->move('./uploads',$picname);
        $data['pic'] = $picname; 

       // dd($d);
       // dd($data);
        $id = DB::table('temprory')->insertGetId($data);
        // dd($id);
        if($id>0){
            return redirect('/admin/temprory')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        return [
            'gid.required' => '商品id必填',
            'uid.required' => '用户id必填',
            'num.required' => '商品数量必填',
            'price.required' => '商品价格必填',
            'name.required' => '商品名称必填',
            'gid.numeric' => '商品id数值类型',
            'uid.numeric' => '商用户id数值类型',
            'num.numeric' => '商品数量数值类型',
            'price.numeric' => '商品价格数值类型',

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
        $data = DB::table('temprory')->where('id',$id)->first();
        return view('Admin.Temprory.edit',['ob'=>$data]);
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
        
        $data = $request->only('gid','uid','num','price','name');
       // dd($data);
        if($request->hasFile('pic')){
            $d = $request->file('pic');
           $d = $request->file('pic');
           // dd($d);
           $ext = $d->getClientOriginalExtension();
            // 拼装出你需要使用的文件名
            $picname = time().rand(1000,9999).'.'.$ext;
            // 移动临时文件，生成新文件到指定目录下
            $d->move('./uploads',$picname);
            $data['pic'] = $picname; 
              // dd($data);
            }else{
             $data['pic'] = $request->input('opic');
            }
             $row = DB::table('temprory')->where('id',$id)->update($data);
             if($row>0){
                return redirect('/admin/temprory')->with('msg','修改成功');
            }else{
                return redirect('/admin/temprory')->with('error','修改失败');
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
         $row = DB::table('temprory')->where('id',$id)->delete();
        // dd($row);
        if($row>0){
            return redirect('/admin/temprory')->with('msg','删除成功');
        }else{
            return redirect('/admin/temprory')->with('error','删除失败');
        }
    }



}
