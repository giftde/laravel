@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改支付</h3>
        
        <p>填空修改支付</p>
        
        <div class="row">
            <form action='/admin/pays/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-10">
                    支付名称：<input type="text" class="form-control m-b-10" placeholder="请输入支付名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-10">
                    支付说明：<input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='content' value="{{ $ob->content }}">
                </div>
                <div class="col-lg-10">
                    是否关闭支付状态：<select class="form-control m-b-10" name='switch'>
                        <option value='1' @if($ob->switch ==1)selected @endif>开</option>
                        <option value='2' @if($ob->switch ==2)selected @endif>关</option>
                    </select>
                </div>
                 <div class="col-lg-10">
                    支付方式：<select class="form-control m-b-10" name='type'>
                        <option value='1' @if($ob->type ==1)selected @endif>微信</option>
                        <option value='2' @if($ob->type ==2)selected @endif>支付宝</option>
                        <option value='3' @if($ob->type ==3)selected @endif>网银支付</option>
                        <option value='4' @if($ob->type ==4)selected @endif>银联支付</option>
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