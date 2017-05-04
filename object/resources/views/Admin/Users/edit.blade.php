@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改管理员信息</h3>
        
        <p>修改管理员设置</p>
        
        <div class="row">
            <form action='/admin/users/{{ $ob->uid }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='age' value="{{ $ob->age }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='sex'>
                        <option value='1' @if($ob->sex ==1)selected @endif>男</option>
                        <option value='2' @if($ob->sex ==2)selected @endif>女</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection