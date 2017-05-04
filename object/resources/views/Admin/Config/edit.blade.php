@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改网站配置</h3>
        
        <p>填空修改用网站配置</p>
        
        <div class="row">
            <form action='/admin/config/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-12">
                    标题：<input type="text" class="form-control m-b-10" placeholder="请输入标题" name='title' value="{{ $ob->title }}">
                </div>
                <div class="col-lg-12">
                    关键字：<input type="text" class="form-control m-b-10" placeholder="请输入关键字" name='keys' value="{{ $ob->keys }}">
                </div>
                <div class="col-lg-12">
                   状态： <select class="form-control m-b-12" name='state'>
                        <option value='1' @if($ob->state ==1)selected @endif>开</option>
                        <option value='2' @if($ob->state ==2)selected @endif>关</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    网站描述<input type="text" class="form-control m-b-10" placeholder="请输网站描述" name='desn' value="{{ $ob->desn }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection