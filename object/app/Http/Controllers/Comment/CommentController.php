<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
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
        $ob = DB::table('comment');
        //判断是否有搜索条件
        if($request->has('content')){
            //获取搜索的条件
            $content= $request->input('content');
            //添加到将要携带到分页中的数组中
            $where['content'] = $content;
            //给查询添加where条件
            $ob->where('content','like',"%{$content}%");
        }
        if($request->has('classify')){
            //获取搜索的条件
            $classify = $request->input('classify');
            //添加到将要携带到分页中的数组中
            $where['classify'] = $classify;
            //给查询添加where条件
            $ob->where('classify','like',"%{$classify}%");
        }
        //执行分页查询
        $list = $ob->paginate(3);
        return view('Admin.Comment.index',['list'=>$list,'where'=>$where]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //comment
        return view('Admin.Comment.add');
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
            'content' => 'required|max:100',
            'gid' => 'required|numeric',
            'uid' => 'required|numeric',
        ],$this->messages());
        
        $data = $request->except('_token');
        $data['pubtime'] = time();
        // dd($data);
        $id = DB::table('comment')->insertGetId($data);
        // dd($id);
        if($id>0){
            return redirect('/admin/comment')->with('msg','添加成功');
        }
    }

     public function messages()
    {
        return [
            'content.required' => '评论描述必须填写,长度100字以内',
            'gid.required' =>'商品id必填项',
            'uid.required' =>'用户id必填项',
            'gid.numeric'=>'类型必须是数值型',
            'uid.numeric'=>'类型必须是数值型',
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
         $data = DB::table('comment')->where('id',$id)->first();
        return view('Admin.Comment.edit',['ob'=>$data]);
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
        
         $data = $request->only('content','gid','uid','classify');
         $data['pubtime'] = time();
         // dd($data);
        $row = DB::table('comment')->where('id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('/admin/comment')->with('msg','修改成功');
        }else{
            return redirect('/admin/comment')->with('error','修改失败');
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
        // dd(1111);
        //  查回复标中的cid的字段里有无 评论表中的id，若有就（说明两个表是关联的）不允许删除，若没有不影响
        $aa = DB::table('replay')->where('cid',$id)->get();
        // dd($aa);
        // ->leftjoin('replay', 'replay.cid', '=', 'comment.id')
        if(count($aa)>0){
            return redirect('admin/comment')->with('error','本条评论下有 回复不允许删除');
        } 

    
        $row = DB::table('comment')->where('id',$id)->delete();
        // dd($row);
        if($row>0){
            return redirect('/admin/comment')->with('msg','删除成功');
        }else{
            return redirect('/admin/comment')->with('error','删除失败');
        }
    }
}
