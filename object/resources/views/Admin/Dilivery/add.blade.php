@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加配送</h3>
        
        <p>填空配送信息/p>
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
            <form action='/admin/dilivery' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-10">
                   名称： <input type="text" class="form-control m-b-10" placeholder="请输入名称" name='name'>
                </div>
                <div class="col-lg-10">
                    配送描述：<input type="text" class="form-control m-b-10" placeholder="请输入配送描述" name='content'>
                </div>
                <div class="col-lg-10">
                    配送开关：<select class="form-control m-b-10" name='switch'>
                        <option>--请选择--</option>
                        <option value='1'>开</option>
                        <option value='2'>关</option>
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