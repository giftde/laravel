@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改商品信息</h3>
        
        <p>请仔细核对在修改</p>
        
        <div class="row">
            <form action='/admin/goods/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-6">
                   商品类别:<select class="form-control m-b-10" name='stype'>
                        @foreach($list as $v)
                            <option value='{{ $v->id }}'@if($ob->stype == $v->id)selected @endif>{{ $v->name }}</option>
                        @endforeach
                        
                        <!-- <option value='2'@if($ob->stype ==2)selected @endif>电脑</option> -->
                    </select>
                </div>
                <div class="col-lg-6">
                    商品名称:<input type="text" class="form-control m-b-10" placeholder="商品名称" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-6">
                    商品价格:<input type="text" class="form-control m-b-10" placeholder="商品价格" name='price' value="{{ $ob->price }}">
                </div>
                <div class="col-lg-6">
                    当季特价:<input type="text" class="form-control m-b-10" placeholder="当季特价" name='price' value="{{ $ob->te_price }}">
                </div>
                <div class="col-lg-6">
                    库存:<input type="text" class="form-control m-b-10" placeholder="库存量" name='stock' value="{{ $ob->stock }}">
                </div>
                <div class="col-lg-6">
                    销售量:<input type="text" class="form-control m-b-10" placeholder="销售量" name='stock' value="{{ $ob->hot_level }}">
                </div>
                <div class="col-lg-6">
                    特别说明:<input type="text" class="form-control m-b-10" placeholder="特别说明" name='explain' value="{{ $ob->explain }}">
                </div>
                <div class="col-lg-6">
                    商品状态:<select class="form-control m-b-10" name='under'>
                        <option value='1'@if($ob->under ==1)selected @endif>下架</option>
                        <option value='2'@if($ob->under ==2)selected @endif>在售中</option>
                    </select>
                </div>
                <div class="col-lg-10">
                    商品介绍:<br>
                    <textarea class="form-control auto-size m-b-7" placeholder="This is an auto sizing Textarea..." name="body" style="overflow: hidden; word-wrap: break-word; resize: none; height: 54px;">{{ $ob->body }}</textarea>
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection