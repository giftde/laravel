<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     

    public function index()
    {
        // dd(11111111)
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $addre = $request->only('uid','detail','consignee','consignee_phone','default','site');
        // dd($addre);
        // DB::table('address')->insertGetId($addre);
        $data = $request->only('gid','state','username','total','goodsnum','goodspic','msg','goodsname','price');
        // $data = $request->only('total');
        $site = $request->input('site');
        $shdz = $request->input('detail');
        $name = $request->input('consignee');
        $tel = $request->input('consignee_phone');
        $data['detail'] = $site.$shdz;
        $data['name'] = $name;
        $data['tel'] = $tel;
        $data['time'] = time();
        $data['number'] = time().mt_rand(1000000,9999999);
        $id = DB::table('order')->insertGetId($data);
        $data['id'] = $id;
        session(['data'=>$data]);
        $links = DB::table('links')->get();
        if($id>0){
            // return view('/home/pay',['ob'=>$data])->with('msg','订单提交成功！去付款咯～');
            return view('/home/pay',['ob'=>$data,'links'=>$links]);
        }
        
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

    public function payok()
    {   
        // dd(666);
        // // dd($ddh);
         $number=  session('data')['number'];
         $id = session('user')->uid;
         DB::table('temprory')->where('uid',$id)->delete();
         $list['state'] = session('data')['state'];
        $row = DB::table('order')->where('number',$number)->update(['state'=>2,'paytime'=>time()]);
        $links = DB::table('links')->get();
        // dd($row);
        if($row > 0){
            unset(session('data')['gid']);
            $msg = '付款成功，我们将尽快为你发货,也请你注意查收快递信息！';
        }else{
            $msg = "付款失败，重新付款";
        }
        return view('Home.payok',['msg'=>$msg,'links'=>$links]);
    }
}
