@extends('Home.base.parent')
@section('content')
<div id="menu_content_bg" style="height: 0px;">
    <div id="menu_content_wrap">
         <ul style="top: 0px;">
             <li id="xiaomiphone">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mi4!160x110.jpg') }}">
                     <p class="menu_content_tit">大米手机4</p>
                     <p class="menu_content_price">1499元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/minote!160x110.jpg') }}">
                     <p class="menu_content_tit">大米NOTE标准版</p>
                     <p class="menu_content_price">1999元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/minotepro!160x110.jpg') }}">
                     <p class="menu_content_tit">大米NOTE顶配版</p>
                     <p class="menu_content_price">2999元起</p>
                 </div>
             </li>
             <li id="hongmiphone">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hongmi2a!160x110.jpg') }}">
                     <p class="menu_content_tit">红米手机2A</p>
                     <p class="menu_content_price">499元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hongmi2!160x110.jpg') }}">
                     <p class="menu_content_tit">红米手机2</p>
                     <p class="menu_content_price">599元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/note!160x110.jpg') }}">
                     <p class="menu_content_tit">红米NOTE</p>
                     <p class="menu_content_price">699元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/note2!160x110.jpg') }}">
                     <p class="menu_content_tit">红米NOTE2</p>
                     <p class="menu_content_price">799元</p>
                 </div>
             </li>
             <li id="pingban">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mipad16!160x110.jpg') }}">
                     <p class="menu_content_tit">大米平板16G</p>
                     <p class="menu_content_price">1299元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mipad64!160x110.jpg') }}">
                     <p class="menu_content_tit">大米平板64G</p>
                     <p class="menu_content_price">1499元起</p>
                 </div>
             </li>
             <li id="tv">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv40!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;40英寸</p>
                     <p class="menu_content_price">1999元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv48!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2S&nbsp;48英寸</p>
                     <p class="menu_content_price">2999元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv49!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;49英寸</p>
                     <p class="menu_content_price">3399元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv55!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;55英寸</p>
                     <p class="menu_content_price">4499元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hezimini!160x110.jpg') }}">
                     <p class="menu_content_tit">大米盒子MINI版</p>
                     <p class="menu_content_price">199元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hezis!160x110.jpg') }}">
                     <p class="menu_content_tit">大米盒子增强版</p>
                     <p class="menu_content_price">299元</p>
                 </div>
             </li>
             <li id="luyou">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifi!160x110.jpg') }}">
                     <p class="menu_content_tit">全新大米路由器</p>
                     <p class="menu_content_price">699元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifimini!160x110.jpg') }}">
                     <p class="menu_content_tit">大米路由器&nbsp;MINI</p>
                     <p class="menu_content_price">129元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifilite!160x110.jpg') }}">
                     <p class="menu_content_tit">大米路由器&nbsp;青春版</p>
                     <p class="menu_content_price">79元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/wifiExtension!160x110.jpg') }}">
                     <p class="menu_content_tit">大米WIFI放大器</p>
                     <p class="menu_content_price">39元</p>
                 </div>
             </li>
             <li id="yingjian">
                 <div class="menu_content">
                     <img src="http://c1.mifile.cn/f/i/15/goods/nav/scale!160x110.jpg') }}">
                     <p class="menu_content_tit">体重称</p>
                     <p class="menu_content_price">99元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/xiaoyi!160x110.jpg') }}">
                     <p class="menu_content_tit">摄像头</p>
                     <p class="menu_content_price">129元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/yicamera!160x110.jpg') }}">
                     <p class="menu_content_tit">运动相机</p>
                     <p class="menu_content_price">399元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/ihealth!160x110.jpg') }}">
                     <p class="menu_content_tit">血压计</p>
                     <p class="menu_content_price">199元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/chazuo!160x110.jpg') }}">
                     <p class="menu_content_tit">智能插座</p>
                     <p class="menu_content_price">59元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/smart!160x110.jpg') }}">
                     <p class="menu_content_tit">查看全部
                         <br>智能硬件</p>
                 </div>
             </li>
         </ul>
    </div>
</div>
    <div class="nav-bar" id="J_headNav">
        <div class="container J_navSwitch">
            <h2 style="font-size:20px;">{{ $data->name }}</h2>
            <div class="con" style="float:right;font-size:16px;">
                <div class="right">
                    @if(isset(session('user')->uname))
                        <form action="{{ url('/home/addcllect') }}" method="post" style="float:left;">
                            {{ csrf_field() }}
                            <input type="hidden" name="gid" value="{{ $data->id }}">
                            <input type="hidden" name="uid" value="{{ session('user')->uid }}">
                            <input type="hidden" name="ctime" value="{{ date('Y-m-d H:i:s',time()) }}">
                            @if(empty($msg))
                                <img src="{{ asset('/Home/info/img/cllect.png') }}">
                                <input type="submit" id="ginfo" value="关注商品" style="background:white;border:0px;cursor:pointer;color:black;text-decoration:none;">
                            @elseif(!empty($msg))
                                <img src="{{ asset('/Home/info/img/cllect.png') }}">
                                <a href="{{ url('/home/delcll/'.$data->id.'/'.session('user')->uid) }}" style="text-decoration: none;">取消关注</a>
                            @endif
                        </form>
                    @elseif(!isset(session('user')->uname))
                        <img src="{{ asset('/Home/info/img/cllect.png') }}"><a href="{{ url('/home/login') }}" style="background:white;border:0px;color:black;text-decoration:none;">关注商品</a>
                    @endif
                    <!-- 做到Ajax请求添加数据 -->
                    <span class="separator">|</span>
                    <button id="ginfo" style="background:white;border:0px;">商品</button>
                    <span class="separator">|</span>
                    <button id="arg" style="background:white;border:0px;">参数</button>
                    <span class="separator">|</span>
                    <button id="eva" style="background:white;border:0px;">用户评价</button>
                </div>
            </div>
        </div>
    </div>
    <div class="xm-buyBox" id="J_buyBox">
        <div class="box clearfix">
            <div id="good" class="pro-choose-main container clearfix">
                <div class="pro-view span10">
                    <div class="J_imgload imgload hide"></div>
                    <div id="J_img" class="img-con" style="left: 62.5px; margin-top: 0px;">
                        <div class="ui-wrapper" style="max-width: 100%;">
                            <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 560px;">
                                <div id="J_sliderView" class="sliderWrap" style="width: auto; position: relative;">
                                    <img class="slider done" src="{{ asset('Admin/upload/'.$data->bigpic) }}" height="560" style="float: none; list-style: none; position: absolute; width: 560px; z-index: 50; display: block;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-info span10">
                    <h1 class="pro-title J_proName">{{ $data->name }}</h1>
                    <!-- 提示 -->
                    <p class="sale-desc" id="J_desc">{{ $data->body }}</p>
                    <!-- 选择第一级别 -->
                    @if($data->sale == 1)
                        <span class="pro-price J_proPrice" style="border-bottom:0px;">
                            {{ $data->price.'.00元' }}
                        </span>
                    @elseif($data->sale == 2)
                        <span class="pro-price J_proPrice" style="border-bottom:0px;text-decoration:line-through;">
                            {{ $data->price.'.00元' }}
                        </span>
                        <span style="font-weight:700;color:red;font-size:30px;">特价：{{ $data->te_price.'.00' }}元</span>
                    @endif
                    
                    <div class="loading J_load hide">
                        <div class="loader"></div>
                    </div>
                    <div class="J_main">
                        <div class="J_addressWrap address-wrap hide" style="border-top:0px;"></div>
                        <div class="list-wrap" id="J_list">
                            <div class="pro-choose pro-choose-col2 J_step" data-index="0">
                                <div class="step-title">
                                    选择版本
                                    <span>骁龙821处理器 最高主频 2.15GHz，Adreno 530 图形处理器，全网通3.0</span>
                                </div>
                                <ul class="step-list step-one clearfix">
                                    <li class="btn btn-biglarge active">
                                        <a href="">
                                            <span class="name">3GB内存+64GB容量 </span><span class="price"> {{ $data->price }}元 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-choose pro-choose-col2 J_step" data-index="1">
                                <div class="step-title">小米意外险</div>
                                <ul class="step-list clearfix">
                                    <li class="btn btn-biglarge active" data-id="2163700014">
                                        <a href=""><img src="{{ asset('Home/info/img/55ab040e-6f98-8b08-27c5-9209f0e349c8.png') }}." class="done">玫瑰金</a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        <!-- 已选择的产品 -->
                        <div>
                            <div style="float:left;font-size:18px;">购买数量：<button id="del_gnum" style="width:30px;height:30px;">-</button></div>
                            <div style="float:left;">
                                <input type="text" name="gnum" id="gnum" style="width:50px;height:26px;text-align:center;" value="1" disabled>
                            </div>
                            <div style="float:left;font-size:18px"><button id="add_gnum" style="width:30px;height:30px;">+</button></div>
                        </div>
                        <div style="clear:both;">
                            <ul>
                                <li style="color:#ff6700;font-size:18px;height:20px;"><span style="float:left;">总价：</span><span id="total" style="float:left;">{{ $data->price }}</span><span>元</span>
                                </li><br>
                                <li style="color:#ff6700;font-size:18px;height:20px;">
                                   <span style="float:left">剩余库存：</span><span>{{ $data->stock.'件' }}</span>
                                </li>
                            </ul>
                        </div>
                        <ul class="btn-wrap clearfix" id="J_buyBtnBox">
                            <li>
                                <form action="{{ url('home/cart') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="gid" value="{{ $data->id }}">
                                    @if(isset(session('user')->uname))
                                    <input type="hidden" name="uid" value="{{ session('user')->uid }}">
                                    @endif
                                    <input type="hidden" name="gnum" id="sgnum" value="1">
                                    <input type="hidden" name="gpic" value="{{ $data->pic }}">
                                    <input type="hidden" name="gprice" id="sgprice" value="{{ $data->price }}">
                                    <input type="hidden" name="gname" value="{{ $data->name }}">
                                    <input type="submit" id="aa" value="加入购物车" style="width:240px;height:50px;border:0px;background:#ff6733;">
                                </form>
                            </li>
                        </ul>

                        <div class="pro-policy" id="J_policy">
                            <i class="iconfont support"></i>
                            <i class="iconfont nosupport hide"></i>
                            <span class="J_tips ">支持7天无理由退货</span>
                        </div>
                    </div>
                    <div class="error hide J_error">
                        <h3>有点小问题，请点击按钮刷新重试</h3>
                        <a href="javascript:void(0)" class="btn btn-primary J_reload" data-stat-id="4cd574c9694dd9c9" onclick="_msq.push([&#39;trackEvent&#39;, &#39;00fc3e9cb8ec9aaa-4cd574c9694dd9c9&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">刷新</a>
                    </div>
                </div>
            </div>
            <div id="data" style="width:100%;font-size:16px;display:none;margin-left:50px;">
                <table width="100%">
                    <tr>
                        <td><img src="{{ asset('Admin/upload/'.$data->bigpic) }}" width="400"></td>
                        <td align="center">
                            <b style="font-size:20px;">{{ $data->name }}</b><br><br>
                            {{ $data->explain }}
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>配置</td>
                        <td>
                            <br>3GB内存+32GB闪存<br>
                            MTK Helio X20 10核 最高主频 2.1GHz<br>
                            Mali T880 MP4 700MHz<br><br>
                            支持扩展存储 最高扩容 128GB(Vfat格式)<br><br>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>重量与尺寸</td>
                        <td>
                            <br>高度：151mm<br>
                            宽度：76mm<br>
                            厚度：8.35mm<br>
                            重量：175g<br>
                            <img src="{{ asset('/Home/info/img/2017-04-18_091629.png') }}"><br><br>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>续航与快充</td>
                        <td>
                            <br>4100mAh(typ)/4000mAh(min)大电量<br>
                            内置电池,免更换<br>
                            5V/2A充电<br><br>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>拍照与摄像</td>
                        <td>
                            <br><b>1300 万像素后置相机</b><br>
                            5片式镜头，f 2.0光圈<br>
                            双色温闪光灯<br>
                            支持 PDAF 相位对焦<br>
                            暗光画质增强技术<br>
                            HDR高动态范围调节技术<br>
                            全景模式<br>
                            连拍模式<br>
                            面部识别功能<br>
                            实时滤镜拍照<br><br>
                            <b>录像</b><br>
                            1080p / 720p 视频拍摄，30 fps<br>
                            720p 慢动作视频，120 fps<br><br>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>全高清屏幕</td>
                        <td>
                            <br>5.5 英寸(对角线)<br>
                            450nit 全高清屏幕<br>
                            1920x1080分辨率,401PPI,1000:1 对比度<br>
                            72% NTSC色域<br>
                            支持阳光屏基础版<br>
                            支持夜光屏<br>
                            支持护眼模式<br>
                            支持色温调节<br><br>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid gray;">
                        <td>指纹识别 与 按键</td>
                        <td>
                            <img src="{{ asset('Home/info/img/2017-04-18_083903.png') }}">
                        </td>
                    </tr>
                </table>
            </div>
            <div id="comment1" style="width:100%;display:none;background:#f5f5f5;">
                <div style="width:1186px;height:87px;border:0px;margin:20px auto;padding:40px;background:white;">
                    <h2 style="font-size:18px;color:#757575;">大家认为</h2>
                    <div style="border:0px;">
                        <button id="whole" style="background:#ff6700;border:0px;width:170px;height:46px;margin-right:13px;">全部评论</button>
                        <button id="yes" style="background:#f5f5f5;border:0px;width:170px;height:46px;margin-right:13px;">好评</button>
                        <button id="no" style="background:#f5f5f5;border:0px;width:170px;height:46px;">差评</button>
                    </div>
                </div>
                <h2 style="margin-left:61px;font-size:20px;">商品评论</h2>
                <ul id="whole_list" style="width:90%;margin:auto auto;">
                    <!-- 全部评论 -->
                    @foreach($list as $v)
                    <li style="width:100%;height:100%;position: relative;padding: 40px 40px 46px 103px;border-bottom:10px solid white;">
                        @foreach($info as $u)
                            @if($u->uid == $v->uid)
                        <span style="position:absolute;left:40px;top:40px;display:block;width:47px;height:47px;color:black;"><img src="{{ asset('/Admin/upload/'.$u->upic) }}" width="47"></span>
                        <div style="height:44px;width:500px;">
                            <span>{{ $u->uname }}</span> 
                            <p>{{ $v->pubtime }}</p>
                        </div>
                            @endif
                        @endforeach
                        <div style="margin-top:12px;">
                            <p>{{ $v->content }}</p><br><br>
                            
                                @if(isset(session('user')->uname))
                                <form action="{{ url('/home/mi/') }}" method="post" style="margin-bottom:20px">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="replayer" value="{{ session('user')->uname }}">
                                @else
                                <form action="{{ url('/home/login') }}" method="get">
                                @endif
                                    <input type="hidden" name="cid" value="{{ $v->id }}">
                                    <input type="hidden" name="gid" value="{{ $v->gid }}">
                                    <input type="hidden" name="rtime" value="{{ time() }}">
                                    <input type="text" class="replz" name="rcontent" placeholder="回复楼主" style="width:542px;height:42px;"><input type="submit" value="回复" style="height:45px;width:70px;">
                                </form>
                            @foreach($replay as $d)
                            @if($d->cid == $v->id)
                            @foreach($info as $q)
                            @if($q->uname == $d->replayer)
                            <div style="width:100%;margin-bottom:8px;padding-left:47px;">
                                <img src="{{ asset('/Admin/upload/'.$q->upic) }}" style="margin-right:8px;width:32px;height:32px;color:#8D665A;">{{ $q->uname }}
                                <p style="margin-top:6px;margin-left:40px;color:#926192;">
                                    <span style="color:gray;">回复:</span>{{ $d->rcontent }}
                                </p>
                            </div>
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </li>
                    @endforeach
                    @if(empty($v))
                    <p style="font-size:30px;color:gray;float:left;margin-top:150px;margin-left:400px;">此商品还没有评论</p>
                    <img src="{{ asset('/Home/info/img/nocomment.jpg') }}">
                    @endif
                </ul>
                <ul id="yes_list" style="width:90%;margin:auto auto;display:none;">
                    <!-- 好评 -->
                    @foreach($yescomment as $v)
                    <li style="width:100%;height:100%;position: relative;padding: 40px 40px 46px 103px;margin-bottom: 15px;">
                        @foreach($info as $u)
                            @if($u->uid == $v->uid)
                        <span style="position:absolute;left:40px;top:40px;display:block;width:47px;height:47px;color:black;"><img src="{{ asset('/Admin/upload/'.$u->upic) }}" width="47"></span>
                        <div style="height:44px;width:500px;">
                            <span>{{ $u->uname }}</span> 
                            <p>{{ $v->pubtime }}</p>
                        </div>
                            @endif
                        @endforeach
                        <div style="margin-top:12px;">
                           <p>{{ $v->content }}</p><br><br>
                           <form>
                               <input type="text" placeholder="回复楼主" style="width:542px;height:42px;"><input type="submit" value="回复" style="height:45px;width:70px;">
                            </form>
                            @foreach($replay as $d)
                            @if($d->cid == $v->id)
                            @foreach($info as $q)
                            @if($q->uname == $d->replayer)
                            <div style="width:612px;margin-top:50px;padding-left:47px;">
                                <img src="{{ asset('/Admin/upload/'.$q->upic) }}" style="margin-right:8px;width:32px;height:32px;color:#8D665A;">{{ $q->uname }}
                                <p style="margin-top:6px;margin-left:40px;color:#926192;">{{ $d->rcontent }}</p>
                            </div>
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </li>
                    @endforeach
                    @if(empty($v))
                    <p style="font-size:30px;color:gray;float:left;margin-top:150px;margin-left:400px;">此商品还没有评论</p>
                    <img src="{{ asset('/Home/info/img/nocomment.jpg') }}">
                    @endif
                </ul>
                <ul id="no_list" style="width:90%;margin:auto auto;display:none;">
                    <!-- 差评 -->
                    @foreach($nocomment as $v)
                    <li style="width:100%;height:100%;position: relative;padding: 40px 40px 46px 103px;margin-bottom: 15px;">
                        @foreach($info as $u)
                            @if($u->uid == $v->uid)
                        <span style="position:absolute;left:40px;top:40px;display:block;width:47px;height:47px;color:black;"><img src="{{ asset('/Admin/upload/'.$u->upic) }}" width="47"></span>
                        <div style="height:44px;width:500px;">
                            <span>{{ $u->uname }}</span> 
                            <p>{{ $v->pubtime }}</p>
                        </div>
                            @endif
                        @endforeach
                        <div style="margin-top:12px;">
                           <p>{{ $v->content }}</p><br><br>
                           <form>
                               <input type="text" placeholder="回复楼主" style="width:542px;height:42px;"><input type="submit" value="回复" style="height:45px;width:70px;">
                            </form>
                            @foreach($replay as $d)
                            @if($d->cid == $v->id)
                            @foreach($info as $q)
                            @if($q->uname == $d->replayer)
                            <div style="width:612px;margin-top:50px;padding-left:47px;">
                                <img src="{{ asset('/Admin/upload/'.$q->upic) }}" style="margin-right:8px;width:32px;height:32px;color:#8D665A;">{{ $q->uname }}
                                <p style="margin-top:6px;margin-left:40px;color:#926192;">{{ $d->rcontent }}</p>
                            </div>
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </li>
                    @endforeach
                    @if(empty($v))
                    <p style="font-size:30px;color:gray;float:left;margin-top:150px;margin-left:400px;">此商品还没有评论</p>
                    <img src="{{ asset('/Home/info/img/nocomment.jpg') }}">
                    @endif
                </ul>
            </div>
            <div class="pro-infomation" id="J_proInfo">
                <div class="section  is-visible preload">
                    <img class="slider done" src="{{ asset('Home/info/img/326be699df9a4ff55c191331d4af8f15.jpg') }}">
                </div>
                <div class="section  preload is-visible">
                    <img class="slider done" src="{{ asset('Home/info/img/dc1b76ea7388c7cb4dc47840125f7ec1.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#whole").click(function(){
            $(this).css("background","#FF6700");
            $("#yes").css("background","#f5f5f5");
            $("#no").css("background","#f5f5f5");
            $("#whole_list").css("display","block");
            $("#yes_list").css("display","none");
            $("#no_list").css("display","none");
        });
        $("#yes").click(function(){
            $(this).css("background","#FF6700");
            $("#whole").css("background","#f5f5f5");
            $("#no").css("background","#f5f5f5");
            $("#yes_list").css("display","block");
            $("#whole_list").css("display","none");
            $("#no_list").css("display","none");
        });
        $("#no").click(function(){
            $(this).css("background","#FF6700");
            $("#yes").css("background","#f5f5f5");
            $("#whole").css("background","#f5f5f5");
            $("#no_list").css("display","block");
            $("#yes_list").css("display","none");
            $("#whole_list").css("display","none");
        });
        $("#ginfo").click(function(){
            $("#good").css("display","block");
            $("#comment1").css("display","none");
            $("#data").css("display","none");
        });
        $("#arg").click(function(){
            $("#data").css("display","block");
            $("#comment1").css("display","none");
            $("#good").css("display","none");
        });
        $("#eva").click(function(){
            $("#good").css("display","none");
            $("#data").css("display","none");
            $("#comment1").css("display","block");
        });
    </script>
    <script src="{{ asset('Home/info/js/xmsg_ti.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/info.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/product_buy.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript">
    $("#newadd").hover(function(){
        $(this).css('background','#ff6700');
        $(this).css('cursor','pointer');
    },function(){
        $(this).css('background','#eee');
    }).click(function(){
        $("#hidaddr").css('display','block');
        $('select').css('display','block');
    });
        $.ajax({
            url:'/city.php',
            type:'post',
            async:true,
            data:{upid:0},
            dataType:'json',
            success:function(data)
            {
                // console.log(data);
                //遍历从数据库查出来的数据，生成option选项追加到select里
                for (var i = 0; i < data.length; i++) {
                    $('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
                };
            },
            error:function()
            {
                alert('ajax请求失败');
            }
        });

        //给所有的select标签绑定change事件
        $('select').live("change",function(){
            //干掉当前你选择的select标签后面的select标签
            $(this).nextAll('select').remove();
            //判断你选择是不是--请选择--
            if($(this).val() != '--请选择--'){
                //因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
                var ob = $(this);
                $.ajax({
                    url:'/city.php',
                    type:'post',
                    async:true,
                    data:{upid:$(this).val()},
                    dataType:'json',
                    success:function(data)
                    {
                        // console.log(data);
                        //判断是不是最后一级城市，最后一级城市查数据库length==0
                        if(data.length>0){
                            //生成一个新的select标签
                            var select = $("<select name='city1[]' style='height:20px;width:130px;'><option>--请选择--</option></select>");
                            //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
                            };
                            //外部插入到前一个select后面
                            ob.after(select);
                        }else if(data.length == 0){
                            $("#temadd").html('');
                            $("#myform option:selected").each(function(){
                                if($(this).html() == '--请选择--'){
                                    $(this).html().remove();
                                }
                                var cc = $(this).html();
                                $("#temadd").append('<span>'+cc+'&nbsp;</span>');
                            });
                            var c = $("#temadd").text();
                            $("#cityadd").val(c);
                            $("#hidaddr").css('display','none');
                            // $("#ok").css("display","block");
                        }
                    },
                    error:function()
                    {
                        alert('ajax请求失败');
                    }
                });
            }else{
                $("#ok").css("display","none");
            }
        });
        $("#addr").css("background","white");
        $("#addr").css("display","block");
    </script>
@endsection
