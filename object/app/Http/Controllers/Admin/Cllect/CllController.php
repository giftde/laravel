<?php

namespace App\Http\Controllers\Admin\Cllect;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('user')->paginate(8);
        $list = DB::table('user')
                    ->join('cllect','user.uid','=','cllect.uid')
                    ->get();
        // dd($list);
        return view('Admin.Cllect.index',['data'=>$data,'list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(11111);
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
        // dd($id);
        $data = DB::table('cllect')
            ->join('user','cllect.uid','=','user.uid')
            ->where('cllect.uid','=',$id)
            ->get();
        if(empty($data)){
            return view('Admin.Cllect.cinfo')->with('msg','此用户没有收藏商品');
        }
        $list = DB::table('good')->get();
        // dd($list);
        return view('Admin.Cllect.cinfo',['data'=>$data,'list'=>$list]);
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
    }
}
