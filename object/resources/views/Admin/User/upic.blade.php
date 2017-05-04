@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="defaultStyle">
                    <h3 class="block-title">Default Style</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <table class="table tile">
                            <thead>
                                <tr>
                                    <th>用户名</th>
                                    <th>{{ $data->uname }}</th>
                                </tr>
                                <tr>
                                    <th>用户头像</th>
                                    <th>
                                        <img src="{{ url('/Admin/upload'.'/'.$data->upic) }}" style="height:200px;" class="img-rounded m-r-10 m-b-10" alt="">
                                    </th>
                                </tr>
                                <tr>
                                    <th>修改头像</th>
                                    <th><input type="file" name="upic" class="btn"></th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <input type='submit' class="btn btn-block btn-alt" value='上传'>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
@endsection