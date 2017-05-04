@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加商品</h3>
        
        <p>录入商品信息</p>
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
            <form action='/admin/goods' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="商品名称" name='name'>
                </div>
                <div class="col-lg-10">
                    <select class="form-control m-b-10" name='stype'>
                        <option>--商品类型--</option>
                        @foreach($data as $v)
                            <option value='{{ $v->id }}'>--{{ $v->name }}--</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="商品价格" name='price'>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="库存量" name='stock'>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control m-b-10" placeholder="特别说明" name='explain'>
                </div>
                <div class="col-lg-10">
                    <select class="form-control m-b-10" name='under'>
                        <option>--商品状态--</option>
                        <option value='1'>--下架--</option>
                        <option value='2'>--在售中--</option>
                    </select>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control auto-size m-b-7" placeholder="This is an auto sizing Textarea..." name="body" style="overflow: hidden; word-wrap: break-word; resize: none; height: 54px;"></textarea>
                </div>
                
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection