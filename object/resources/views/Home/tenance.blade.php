<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('Home/main/css/xiaomi.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/info/css/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/info/css/product_buy.min.css') }}">
    <script src="{{ asset('Home/main/js/jquery.animate-colors-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/main/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/unjcV2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/mstr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/jquery.statData.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/xmst.js') }}"></script>
</head>
<body style="background:#F7FCF6;">
    <div id="zhe">
        <div class="head_box">
         <div id="head_wrap">
             <div id="head_nav">
                 <a class="head_nav_a">大米网</a>
                 <span>|</span>
                 <a class="head_nav_a">MIUI</a>
                 <span>|</span>
                 <a class="head_nav_a">米聊</a>
                 <span>|</span>
                 <a class="head_nav_a">游戏</a>
                 <span>|</span>
                 <a class="head_nav_a">多看阅读</a>
                 <span>|</span>
                 <a class="head_nav_a">云服务</a>
                 <span>|</span>
                 <a class="head_nav_a">大米移动版</a>
                 <span>|</span>
                 <a class="head_nav_a">问题反馈</a>
                 <span>|</span>
                 <a class="head_nav_a" id="Select_Region_but">Select Region</a>
             </div>
             <div id="head_right" style="display:none;">
                 <div id="head_landing">
                     <a class="head_nav_a">登陆</a>
                     <span>|</span>
                     <a class="head_nav_a">注册</a>
                 </div>
                 <div id="head_car">
                     <a class="head_car_text">购物车（0）</a>
                     <div id="car_content" style="height: 0px;width:0px ;background-color: #edffc6;z-index: 999">
                         <a class="car_text"></a>
                     </div>
                 </div>
             </div>
         </div>
        </div>
        <div id="main_head_box">
             <div id="menu_wrap">
                 <div id="menu_logo">
                     <a href="{{ url('/home/mi') }}" title="前台首页"><img src="{{ asset('Home/main/img/nlogo.png') }}"></a>
                 </div>
                 <div id="menu_nav">
                     <ul>
                         <li class="menu_li" control="xiaomiphone">大米手机</li>
                         <li class="menu_li" control="hongmiphone">红米</li>
                         <li class="menu_li" control="pingban">平板</li>
                         <li class="menu_li" control="tv">电视&nbsp;&nbsp;盒子</li>
                         <li class="menu_li" control="luyou">路由器</li>
                         <li class="menu_li" control="yingjian">智能硬件</li>
                         <li><a>服务</a></li>
                         <li><a>社区</a></li>
                     </ul>
                 </div>
                 <div id="find_wrap" style="display:none;">
                     <div id="find_bar">
                         <input type="text" id="find_input">
                     </div>
                     <div id="find_but">GO</div>
                 </div>
             </div>
        </div>
        <!-- 中间 -->
        <div>
            <table width="900" height="300" border="0" style="margin:0 auto;">
                    <tr>
                        <th rowspan="8"><img src="{{ asset('/Home/info/img/1.jpg') }}"></th>
                        <th>关于小米商城系统升级维护的通知</th>
                    </tr>
                    <tr>
                        <td>尊敬的用户：</td>
                    </tr>
                    <tr>
                        <td>特此公告。本商城将于{{ date('Y-m-d H:i:s',time()) }}起24小时内对商城系统进行升级维护。在此期间本商城将不受理任何交易业务。</td>
                    </tr>
                    <tr>
                        <td>由此给您带来的不便，本公司深表歉意！</td>
                    </tr>
                    <tr>
                        <td>如有疑问，敬请垂询我公司客服电话400-100-5678。</td>
                    </tr>
                    <tr>
                        <td>特此公告。</td>
                    </tr>
                    <tr>
                        <td align="right">小米公司</td>
                    </tr>
                    <tr>
                        <td align="right">二〇一七年</td>
                    </tr>
            </table>
        </div>
        <div id="foot_box">
             <div id="foot_wrap">
                 <div class="foot_top">
                     <ul>
                         <li>1小时快修服务</li>
                         <li class="font_top_i">|</li>
                         <li>7天无理由退货</li>
                         <li class="font_top_i">|</li>
                         <li>15天免费换货</li>
                         <li class="font_top_i">|</li>
                         <li>满150元包邮</li>
                         <li class="font_top_i">|</li>
                         <li>520余家售后网点</li>
                     </ul>
                 </div>
                 <div class="foot_bottom">
                     <div class="foot_bottom_l">
                         <dl>
                             <dt>帮助中心</dt>
                             <dd>购物指南</dd>
                             <dd>支付方式</dd>
                             <dd>配送方式</dd>
                         </dl>
                         <dl>
                             <dt>服务支持</dt>
                             <dd>售后政策</dd>
                             <dd>自助服务</dd>
                             <dd>相关下载</dd>
                         </dl>
                         <dl>
                             <dt>大米之家</dt>
                             <dd>大米之家</dd>
                             <dd>服务网点</dd>
                             <dd>预约亲临到店服务</dd>
                         </dl>
                         <dl>
                             <dt>关注我们</dt>
                             <dd>新浪微博</dd>
                             <dd>大米部落</dd>
                             <dd>官方微信</dd>
                         </dl>
                     </div>
                     <div class="foot_bottom_r">
                         <a>400-100-5678</a>
                         <a>周一至周日 8:00-18:00</a>
                         <a>（仅收市话费）</a>
                         <span> 24小时在线客服</span>
                     </div>
                 </div>
             </div>
             <div class="foot_note_box">
                 <div class="foot_note_wrap">
                     <div class="foot_note_con">
                         <span class="foot_logo"><img src="{{ asset('Home/main/img/mi-logo.png') }}" width="38px" height="38px"></span>
                            <span class="foot_note_txt">
                                <a>大米网</a><h>|</h><a>MIUI</a><h>|</h><a>米聊</a><h>|</h><a>多看书城</a><h>|</h><a>大米路由器</a><h>|</h><a>大米后院</a><h>|</h><a>大米天猫店</a><h>|</h><a>大米淘宝直营店</a><h>|</h><a>大米网盟</a><h>|</h><a>问题反馈</a><h>|</h><a>Select Region</a>
                                <span style="color:gray;">©mi.com 京ICP证110507号 京ICP备10046444号  
                                违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</span>
                            </span>
                     </div>
                 </div>
             </div>
             <div style="margin-left:530px;font-size:20px;color:gray;">探索黑科技，小米为发烧而生</div>
        </div>
        <script type="text/javascript" src="{{ asset('Home/main/js/xiaomi.js') }}"></script>
    </div>
</body>
</html>