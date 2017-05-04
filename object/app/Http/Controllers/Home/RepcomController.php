<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RepcomController extends Controller
{
    public function comment(Request $request)
    {
        // dd($request);
        $data = $request->except('_token');
        $id = DB::table('comment')->insertGetId($data);
        if($id > 0){
            return redirect('/home/mi/'.$request->input('gid').'/edit');
        }
    }
}
