<?php

namespace App\Http\Controllers\Replay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ReplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //replay
       
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('replay')->join('comment', 'comment.id', '=', 'replay.cid')
                                 ->select('replay.*','comment.content');
        //       ;
        //判断是否有搜索条件
        if($request->has('rcontent')){
            //获取搜索的条件
            $rcontent = $request->input('rcontent');
            //添加到将要携带到分页中的数组中
            $where['rcontent'] = $rcontent;
            //给查询添加where条件
            $ob->where('rcontent','like',"%{$rcontent}%");
        }
        if($request->has('replayer')){
            //获取搜索的条件
            $replayer = $request->input('replayer');
            //添加到将要携带到分页中的数组中
            $where['replayer'] = $replayer;
            //给查询添加where条件
            $ob->where('replayer',$replayer);
        }
        //执行分页查询
        $list = $ob->paginate(5);
        //关联查表的th
        // $th = DB::table('replay')
        //     ->leftjoin('comment', 'comment.id', '=', 'replay.cid')
        //     ->select('replay.*','comment.content')
        //     ->get();
        //     // dd($th);
        // return view('Admin.Replay.index',['list'=>$list,'where'=>$where,'th'=>$th]);
        return view('Admin.Replay.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $li = DB::table('comment')->select('comment.*')->get();

        // dd($li);
         return view('Admin.Replay.add',['li'=>$li]);
        //return view('Admin.Replay.add');
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
        // dd(11111111);
        $this->validate($request, [
            'replayer' => 'required|',
            'rcontent' => 'required|max:100',
        ],$this->messages());
        $data = $request->except('_token');
        $data['rtime']=time();
        // dd($data);
        $row = DB::table('replay')->insertGetId($data);
        // dd($row);
        if($row > 0 ){
            return redirect('/admin/replay')->with('msg','添加成功');
        }        
    }

    public function messages()
    {
        return [
            'replayer.required' => '回复者必须填写,2-4位名字',
            'rcontent.required' => '回复内容必填 ,100字以内',
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
        // dd($id);
     
        // $data = DB::table('replay')
        //       ->leftjoin('comment', 'comment.id', '=', 'replay.cid')
        //       ->select('replay.*','comment.content')
        //       ->get();
        //       dd($data);
        // dd($data);
        // $com= DB::table('comment')->where('id',$id)->first();
        // dd($com);
        // 从回复表查出来的数据得到的是一个对象
        $data = DB::table('replay')->where('id',$id)->first();
        //将获得对象中的cid取出来赋给$cid
        $cid = $data->cid;
        // 在用已知的cid作为查询条件，查询评论表
        $d = DB::table('comment')->where('id',$cid)->first();
        // dd($d);
        return view('Admin.Replay.edit',['ob'=>$data,'d'=>$d]);
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
        // dd($request);
        $data = $request->only('cid','rcontent','replayer');
        // 
        $data['rtime']=time();
        // dd($data);
        $row = DB::table('replay')->where('id',$id)->update($data);
        // dd($row);
        if ($row > 0) {
            return redirect('/admin/replay')->with('msg','修改成功');
        } else {
           return redirect('/admin/replay')->with('error','修改失败');
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
        $row = DB::table('replay')->where('id',$id)->delete();
        // dd($row);
         
        if($row > 0){ 
            return redirect('/admin/replay')->with('msg','删除成功');
        }else{
            return redirect('/admin/replay')->with('error','删除失败');
        }

    }
}
