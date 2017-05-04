@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加评论</h3>
        
        <p>填空评论</p>
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
            <form action='/admin/comment' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="请输入评论内容" name='content'>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="商品id" name='gid'>
                </div>
                <div class="col-lg-10">
                   <input type="text" class="form-control m-b-10" placeholder="用户id" name='uid'>
                </div>
                <div class="col-lg-10">
                   <select class="form-control m-b-10" name='classify'>
                        <option>--请选择--</option>
                        <option value='1'>好评</option>
                        <option value='2'>差评</option>
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