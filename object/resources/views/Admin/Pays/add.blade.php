@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加支付</h3>
        
        <p>填空添加支付</p>
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
            <form action='/admin/pays' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                支付名称：
                    <input type="text" class="form-control m-b-10" placeholder="请输入支付名名" name='name'>
                </div>
                <div class="col-lg-10">
                支付说明：
                    <input type="text" class="form-control m-b-10" placeholder="请输入支付说明" name='content'>
                </div>
                <div class="col-lg-10">
                   是否开启支付状态 <select class="form-control m-b-10" name='switch'>
                        <option>--请选择--</option>
                        <option value='1'>开</option>
                        <option value='2'>关</option>
                    </select>
                </div>
                <div class="col-lg-10">
                   支付方式： <select class="form-control m-b-10" name='type'>
                        <option>--请选择--</option>
                        <option value='1'>微信</option>
                        <option value='2'>支付宝</option>
                        <option value='3'>网银支付</option>
                        <option value='4'>银联支付</option>
                    </select>
                </div>
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection