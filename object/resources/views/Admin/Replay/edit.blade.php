@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改回复</h3>
        
        <p>填空修改回复</p>
        
        <div class="row">
            <form action='/admin/replay/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-10">
                    评论：<input type="text" class="form-control m-b-10" disabled="" value="{{ $d->content }}">
                    <input type="hidden"  name="cid"    value="{{ $d->id }}" >

                </div>
                <div class="col-lg-10">
                    回复内容：<input type="text" class="form-control m-b-10" name='rcontent' value="{{ $ob->rcontent }}">
                </div>
                <div class="col-lg-10">
                    回复者：<input type="text" class="form-control m-b-10" name='replayer' value="{{ $ob->replayer }}">
                </div>               
                <div class="col-lg-10">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection