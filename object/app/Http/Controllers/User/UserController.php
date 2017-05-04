<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

use DB;

class UserController extends Controller
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
        $ob = DB::table('user');
        //判断是否有搜索条件
        if($request->has('sex')){
            //获取搜索的条件
            $sex = $request->input('sex');
            //添加到将要携带到分页中的数组中
            $where['sex'] = $sex;
            //给查询添加where条件
            $ob->where('sex',$sex);
        }
        if($request->has('uname')){
            //获取搜索的条件
            $uname = $request->input('uname');
            //添加到将要携带到分页中的数组中
            $where['uname'] = $uname;
            //给查询添加where条件
            $ob->where('uname','like',"%{$uname}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        return view('Admin.User.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.User.add');
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
        // var_dump(1111111)
        // dd($request->only('sex'));
        $this->validate($request, [
            'uname' => 'required|max:8',
            'age' => 'integer|max:150|min:18',
            'password' => 'required|max:8',
        ],$this->messages());
        $data = $request->except('_token','checkpass');
        // dd($data);
        $id = DB::table('user')->insertGetId($data);
        if($id>0){
            return redirect('admin/demo4')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        return [
            'uname.required' => '用户名必须填写',
            'age.min' => '未满18周岁禁止注册',
            'password' => '密码不能为空',
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
        $data = DB::table('user')->where('uid',$id)->first();
        return view('Admin.User.edit',['ob'=>$data]);
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
        $data = $request->only('uname','sex','age');
        $row = DB::table('user')->where('uid',$id)->update($data);
        if($row>0){
            return redirect('admin/demo4')->with('msg','修改成功');
        }else{
            return redirect('admin/demo4')->with('error','修改失败');
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
        $row = DB::table('user')->where('uid',$id)->delete();
        if($row>0){
            return redirect('/admin/demo4')->with('msg','删除成功');
        }else{
            return redirect('/admin/demo4')->with('error','删除失败');
        }
    }

    public function editPic($id)
    {
        // dd($id);
        $data = DB::table('user')->where('uid',$id)->first();
        return view('Admin.User.upic',['data' => $data]);
    }

    public function updatePic(Request $request, $id)
    {
        //上传图片
        // dd($request->hasFile('upic'));
        if($request->hasFile('upic')){
            if($request->file('upic')->isValid()){
                $data = $request->file('upic');
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
        }else{
            return redirect('admin/demo4')->with('error','您未修改头像');
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
        $row = DB::table('user')->where('uid',$id)->update(['upic' => 's_'.$picname]);
        if($row>0){
            return redirect('admin/demo4')->with('msg','修改成功');
        }else{
            return redirect('admin/demo4')->with('error','修改失败');
        }
    }
}
