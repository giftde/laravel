@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加回复</h3>
        
        <p>填空添加回复</p>
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="row">
            <form action='/admin/replay' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                    请选择评论： <!--将从评论表里把评论的id和评论的内容拿到 循环遍历出来 -->
                   <select class="form-control m-b-10" name='cid'>
                        <option>--请选择--</option>
                        @foreach($li as $v)
                        <option value="{{ $v->id }}">  {{ $v->content }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-10">
                回复内容：
                    <input type="text" class="form-control m-b-10" name='rcontent'>
                </div>
                <div class="col-lg-10">
                回复者：
                    <input type="text" class="form-control m-b-10" name='replayer'>
                </div>
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection