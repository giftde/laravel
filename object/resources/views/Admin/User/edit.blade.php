@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/admin/demo4/{{ $ob->uid }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='uname' value="{{ $ob->uname }}">
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='age' value="{{ $ob->age }}">
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='sex'>
                        <option value='1' @if($ob->sex ==1)selected @endif>男</option>
                        <option value='2' @if($ob->sex ==2)selected @endif>女</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection