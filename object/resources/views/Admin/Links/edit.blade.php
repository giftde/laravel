@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改友情链接</h3>
        
        <p>填空修改友情链接</p>
        
        <div class="row">
            <form action='/admin/links/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-8">
                    名称：<input type="text" class="form-control m-b-10" placeholder="请输入友情链接" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-8">
                    URL地址：<input type="text" class="form-control m-b-10" placeholder="请输入url地址" name='url' value="{{ $ob->url }}">
                </div>
                <div class="col-lg-8">
                    链接开关：<select class="form-control m-b-10" name='switch'>
                        <option value='1' @if($ob->switch ==1)selected @endif>开</option>
                        <option value='2' @if($ob->switch ==2)selected @endif>关</option>
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