@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加购物车</h3>
        
        <p>填空添加购物车</p>
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
            <form action='/admin/temprory' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                gid：
                    <input type="text" class="form-control m-b-10"  name='gid'>
                </div>
                <div class="col-lg-10">
                uid：
                    <input type="text" class="form-control m-b-10"  name='uid'>
                </div>
                <div class="col-lg-10">
                商品数量：
                    <input type="text" class="form-control m-b-10"  name='gnum'>
                </div>
                <div class="col-lg-10">
                商品价格：
                    <input type="text" class="form-control m-b-10"  name='gprice'>
                </div>
                <div class="col-lg-10">
                商品名称：
                    <input type="text" class="form-control m-b-10"  name='gname'>
                </div>
                
                <div class="col-lg-10">
                商品图片：
                    <input type="file" class="form-control m-b-10"  name='gpic'>
                </div>
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
    </div>
@endsection