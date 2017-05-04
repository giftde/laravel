<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use DB;

class GoodController extends Controller
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
        $ob = DB::table('good');
        //判断是否有搜索条件
        if($request->has('stype')){
            //获取搜索的条件
            $stype = $request->input('stype');
            //添加到将要携带到分页中的数组中
            $where['stype'] = $stype;
            //给查询添加where条件
            $ob->where('stype',$stype);
        }
        if($request->has('under')){
            //获取搜索的条件
            $under = $request->input('under');
            //添加到将要携带到分页中的数组中
            $where['under'] = $under;
            //给查询添加where条件
            $ob->where('under','like',"%{$under}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        $data = DB::table('category')->where('ord','!=','0')->get();
        // dd($data);
        return view('Admin.Goods.index',['list'=>$list,'where'=>$where,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // var_dump(11111);
        $data = DB::table('category')->where('ord','!=','0')->get();
        return view('Admin.Goods.add',['data'=>$data]);
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
         $this->validate($request, [
            'name' => 'required|max:50',
            'stype' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'explain' => 'required',
            'body' => 'required',
        ],$this->messages());
        $data = $request->except('_token');
        // dd($data);
        $id = DB::table('good')->insertGetId($data);
        if($id>0){
            return redirect('admin/goods')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        return [
            'name.required' => '商品名称必须填写',
            'stype.required' => '请选择商品类型',
            'price.required' => '请标明商品价格',
            'stock.required' => '请确认库存量',
            'explain.required' => '请填写小标题',
            'body.required' => '请标明商品参数',
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
        $list = DB::table('category')->where('ord','!=','0')->get();
        $data = DB::table('good')->where('id',$id)->first();
        // dd($data);
        return view('Admin.Goods.edit',['ob'=>$data,'list'=>$list]);
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
        $data = $request->except('_token','_method');
        // dd($data);
        $row = DB::table('good')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/goods')->with('msg','修改成功');
        }else{
            return redirect('admin/goods')->with('error','修改失败');
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
        $row = DB::table('good')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/goods')->with('msg','删除成功');
        }else{
            return redirect('/admin/goods')->with('error','删除失败');
        }
    }

    /**
    *  修改商品图片
    */
    public function editPic($id)
    {
        // dd($id);
        $data = DB::table('good')->where('id',$id)->first();
        return view('Admin.Goods.gpic',['data' => $data]);
    }

    public function updatePic(Request $request, $id)
    {
        //上传图片
        // dd($request->only('gpic'));
        if($request->hasFile('gpic')){
            if($request->file('gpic')->isValid()){
                $data = $request->file('gpic');
                $ext = $data->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $data->move('./admin/upload',$picname);
                if($data->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                    echo "<img src='/Admin/upload/{$picname}' width='200' height='200'>";
                }
            }
        }
        //缩放图片 后台展示
        $aimg = Image::make('./admin/upload/'.$picname);
        $aimg->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $aimg->save('./admin/upload/s_'.$picname);

        //前台展示
        $simg = Image::make('./admin/upload/'.$picname);
        $simg->resize(40, 40, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $simg->save('./home/upload/ss_'.$picname);

        //修改图片信息
        // $data = $request->except('_token','_method');
        $row = DB::table('good')->where('id',$id)->update(['pic' => 's_'.$picname,'bigpic' => $picname]);
        if($row>0){
            return redirect('admin/goods')->with('msg','修改成功');
        }else{
            return redirect('admin/goods')->with('error','修改失败');
        }
    }
}
