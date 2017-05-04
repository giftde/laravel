@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改支付</h3>
        
        <p>填空修改支付</p>
        
        <div class="row">
            <form action='/admin/temprory/{{ $ob->id }}' method='post' enctype='multipart/form-data'>
            
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-10">
                    gid：<input type="text" class="form-control m-b-10" name='gid' value="{{ $ob->gid }}">
                </div>
                <div class="col-lg-10">
                    uid：<input type="text" class="form-control m-b-10"  name='uid' value="{{ $ob->uid }}">
                </div>
                <div class="col-lg-10">
                    商品数量：<input type="text" class="form-control m-b-10"  name='num' value="{{ $ob->gnum }}">
                </div>
                <div class="col-lg-10">
                    商品价格：<input type="text" class="form-control m-b-10"  name='price' value="{{ $ob->gprice }}">
                </div>
                <div class="col-lg-10">
                    商品名称：<input type="text" class="form-control m-b-10"  name='name' value="{{ $ob->gname }}">
                </div>
                <div class="col-lg-10">
                    商品图片：<input type="file" class="form-control m-b-10"  name='pic' >
                    <img src="/uploads/{{ $ob->gpic }}" alt="123" width="150" height="130">
                </div> 
                <input type="hidden" name="opic" value="{{ $ob->gpic }}">            
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
    </div>
@endsection