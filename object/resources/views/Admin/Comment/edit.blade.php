@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改评论</h3>
        
        <p>填空修改评论</p>
        
        <div class="row">
            <form action='/admin/comment/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              
                <div class="col-lg-10">
                    内容：<input type="text" class="form-control m-b-10" placeholder="请输入评论内容" name='content' value="{{ $ob->content }}">
                </div>
                <div class="col-lg-10">
                    商品id：<input type="text" class="form-control m-b-10" name='gid' value="{{ $ob->gid }}">
                </div>
                <div class="col-lg-10">
                    用户id：<input type="text" class="form-control m-b-10"  name='uid' value="{{ $ob->uid }}">
                </div>
                <div class="col-lg-10">
                    好评或差评：<select class="form-control m-b-10" name='classify'>
                        <option value='1' @if($ob->classify ==1)selected @endif>好评</option>
                        <option value='2' @if($ob->classify ==2)selected @endif>差评</option>
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