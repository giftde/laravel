@extends('Admin.base.parent')
@section('content')
    <!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改分类</h3>
        
        <p>修改分类信息</p>
        
        <div class="row">
            <form action='/admin/category/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入子类名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection