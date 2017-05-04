<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>成功加入购物车 - 小米商城</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" 

type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-

icon" />
<link rel="search" title="mi.com" href="//s1.mi.com/search.xml?

v1.0" type="application/opensearchdescription+xml" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="{{ asset('Home/car/css/base.min.css') 

}}" />
<script type="text/javascript">var _head_over_time = (new Date

()).getTime();</script>

</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">金融</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">小米商城移动版</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="" data-toggle="modal">Select Region</a>
        </div>
<!--===================================================================

======================== -->
         @if(session('user'))
                <div id="head_right" style="float:right;line-
height: 40px;width:280px;font-family: Microsoft Yahei;font-size:15px">
                 <div id="head_landing">
                     <span style="color:#B0B0B0;font-size:15px" class="head_nav_a" href="/home/login">欢迎：{{session('user')->uname }}</span>
                     <span>|</span>
                     <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/grzx') }}">个人中心</a>
                      <span>|</span>
                    <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/over') }}">退出</a>

                    <a class="head_car_text" href="/home/cartshow"> &nbsp;&nbsp;&nbsp;购物车</a>
                 </div>
                 
                </div>
             @else
                   <div id="head_right" style="float:right;line-height: 40px;width:280px;font-family: Microsoft Yahei;font-size:15px" >
                     <div id="head_landing">
                         <a style="color:#B0B0B0" class="head_nav_a" href="/home/login">登录</a>
                         <span>|</span>
                         <a href="{{ url('/home/register1') }}" class="head_nav_a">注册</a>&nbsp;&nbsp;&nbsp;
                         <a class="head_car_text">购物车（0）</a>
                     </div>
                </div>
             @endif


<!-- 

===================================================================

============== -->


           
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="//www.mi.com/index.html"title="小米官网">小米官网</a></div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="//list.mi.com"><span class="text">全部商品分类</span></a>
                </li>
                            <li class="nav-item"><a class="link" href="javascript: void(0);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                              <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href=""><img src="images/placeholder-220!110x110.png" data-src="images/xm6_320.png" srcset="images/xm6_320.png 2x" alt="小米6" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="">小米6</a></div>
                                    <p class="price">2499元起</p>  <div class="flags"><div class="flag">新品</div></div> </li>
                                    <li>
                                    <div class="figure figure-thumb">  <a href=""><img src="images/placeholder-220!110x110.png" data-src="images/mi5c_320x220.png" srcset="images/mi5c_320x220.png 2x" alt="小米手机5c" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="">小米手机5c</a></div>
                                    <p class="price">1499元</p> </li>
                                       <li>
                                    <div class="figure figure-thumb"><a href=""><img src="images/placeholder-220!110x110.png" data-src="images/miNOTE2-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!320x220.jpg 2x" alt="小米Note 2" width="160" height="110" /></a> </div>
                                    <div class="title"><a href="">小米Note 2</a></div>
                                    <p class="price">2799元起</p> </li>
                                     <li>
                                    <div class="figure figure-thumb"> <a href=""><img src="images/placeholder-220!110x110.png" alt="小米MIX" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="">小米MIX</a></div>
                                    <p class="price">3499元起</p>  </li>
                                     <li>
                                    <div class="figure figure-thumb"> <a href=""><img src="images/placeholder-220!110x110.png" alt="小米5s" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="">小米5s</a></div>
                                    <p class="price">1999元</p>  </li>
                                 <li>
                                    <div class="figure figure-thumb"> <a href=""><img src="images/placeholder-220!110x110.png" alt="小米5s Plus" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="">小米5s Plus</a></div>
                                    <p class="price">2299元起</p>  </li>
                              </ul>
                        </div>
                    </div>
                </li>
                  <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                    <li class="first">
                                       <div class="figure figure-thumb">   <a href="//www.mi.com/redminote4x/"><img src="images/placeholder-220!110x110.png" data-src="images/hmn4xtb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!320x220.jpg 2x"alt="红米Note 4X" width="160" height="110" /></a>  </div>
                                    <div class="title"><a href="//www.mi.com/redminote4x/">红米Note 4X</a></div>
                                    <p class="price">999元起</p>   

                                <div class="flags"><div class="flag">新品</div></div>      </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/redminote4/"><img src="images/placeholder-220!110x110.png" data-src="images/hongminote4!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/hongminote4!320x220.jpg 2x" alt="红米Note 4" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/redminote4/">红米Note 4</a></div>
                                    <p class="price">999元起</p> </li>
                                    <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/redmi4x/"><img src="images/placeholder-220!110x110.png" data-src="images/hm4x320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!320x220.jpg 2x" alt="红米4X" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/redmi4x/">红米4X</a></div>
                                    <p class="price">699元起</p>         </li>
                                     <li>
                                    <div class="figure figure-thumb"> <a href="//www.mi.com/redmi4a/"><img src="images/placeholder-220!110x110.png" data-src="images/hm4a320.png" srcset="images/hm4a320.png 2x" alt="红米4A" width="160" height="110" /></a>  </div>
                                    <div class="title"><a href="//www.mi.com/redmi4a/">红米4A</a></div>
                                    <p class="price">599元</p>   </li>
                                     <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/redmi4"><img src="images/placeholder-220!110x110.png" data-src="images/320-2202!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320-2202!320x220.jpg 2x" alt="红米4" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/redmi4">红米4</a></div>
                                    <p class="price">799元起</p></li>
                                        </ul>       
                                    </div>
                    </div>
                </li>
                        <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">平板 · 笔记本</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                <li class="first">
                                    <div class="figure figure-thumb">  <a href="//www.mi.com/mipad3/"><img src="images/placeholder-220!110x110.png" data-src="images/mipad3_320.png" srcset="images/mipad3_320.png 2x" alt="小米平板3 64GB" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad3/">小米平板3 64GB</a></div>
                                    <p class="price">1499元</p>     
                               <div class="flags"><div class="flag">新品</div></div>                 </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibookair/"><img src="images/placeholder-220!110x110.png" data-src="images/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg2x" alt="小米笔记本Air 12.5"" width="160" height="110" /></a>                               </div>
                                    <div class="title"><a href="//www.mi.com/mibookair/">小米笔记本Air 12.5"</a></div>
                                    <p class="price">3599元</p>    <div class="flags"><div class="flag">新品</div>
                                    </div>        </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibookair/"><img src="images/placeholder-220!110x110.png" data-src="images/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3"" width="160" height="110" /></a>     </div>
                                    <div class="title"><a href="//www.mi.com/mibookair/">小米笔记本Air 13.3"</a></div>
                                    <p class="price">4899元</p></li>
                                    <li>        <div class="figure figure-thumb"> <a href="//www.mi.com/mibookair/"><img src="images/placeholder-220!110x110.png" data-src="images/ijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg2x" alt="小米笔记本Air 13.3" 尊享版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mibookair/">小米笔记本Air 13.3" 尊享版</a></div>
                                    <p class="price">5999元</p>     

                               <div class="flags"><div class="flag">新品</div></div>    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                           <li class="first">
                                    <div class="figure figure-thumb">   <a href="//www.mi.com/mitv4A/43/"><img src="images/placeholder-220!110x110.png" data-src="images/320_43.png" srcset="images/320_43.png 2x" alt="小米电视4A 43英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv4A/43/">小米电视4A 43英寸</a></div>
                                    <p class="price">2099元</p>    

                               <div class="flags"><div class="flag">新品</div></div>         </li>
                                                            <li>
                                    <div class="figure figure-thumb">  <a href="//www.mi.com/mitv4A/49/"><img src="images/placeholder-220!110x110.png" data-src="images/320_49.png" srcset="images/320_49.png 2x" alt="小米电视4A 49英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv4A/49/">小米电视4A 49英寸</a></div>
                                    <p class="price">2599元起</p>

                                 <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv4A/55/"><img src="images/placeholder-220!110x110.png" data-src="images/320_55.png" srcset="images/320_55.png 2x" alt="小米电视4A 55英寸" width="160" height="110" /></a>  </div>
                                    <div class="title"><a href="//www.mi.com/mitv4A/55/">小米电视4A 55英寸</a></div>
                                    <p class="price">3199元起</p>       <div class="flags"><div class="flag">新品</div></div>                 </li>
                                    <li>
                                    <div class="figure figure-thumb">   <a href="//www.mi.com/mitv4A/65/"><img src="images/placeholder-220!110x110.png" data-src="images/320_65.png" srcset="images/320_65.png 2x" alt="小米电视4A 65英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv4A/65/">小米电视4A 65英寸</a></div>
                                    <p class="price">5699元起</p> 
                                 <div class="flags"><div class="flag">新品</div></div>                                </li>
                                        <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/60/"><img src="images/placeholder-220!110x110.png" data-src="images/101860xin.png" srcset="images/101860xin.png 2x" alt="小米电视3s 60英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/60/">小米电视3s 60英寸</a></div>
                                    <p class="price">4799元</p>  </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/buytv/"><img src="images/placeholder-220!110x110.png" data-src="images/70dianshi.png" srcset="images/70dianshi.png 2x" alt="查看全部<br/>小米电视" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/buytv/">查看全部<br/>小米电视</a></div>
                                        </li>
                                  </ul>
                        </div>
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                    <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibox3s/"><img src="images/placeholder-220!110x110.png" data-src="images/mihezi.png" srcset="images/mihezi.png 2x" alt="小米盒子3s" width="160" height="110" /></a>      </div>
                                    <div class="title"><a href="//www.mi.com/mibox3s/">小米盒子3s</a></div>
                                    <p class="price">299元</p>  
                                                   </li>
                                                    <li>          
                                                     <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibox3c/"><img src="images/placeholder-220!110x110.png" data-src="images/mihezi.png" srcset="images/mihezi.png 2x" alt="小米盒子3c" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mibox3c/">小米盒子3c</a></div>
                                    <p class="price">199元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezi3s/"><img src="images/placeholder-220!110x110.png" data-src="images/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezi3s/">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                                         <a   href="//www.mi.com/misurround/"><img src="images/placeholder-220!110x110.png" data-src="images/320x220.png" srcset="images/320x220.png 2x" alt="小米家庭影院" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/misurround/">小米家庭影院</a></div>
                                    <p class="price">1999元</p>     
                </li>
                                                               


                 <li>
                    <div class="figure figure-thumb">
                        <a  href="//item.mi.com/1160800074.html"><img src="images/placeholder-220!110x110.png" data-src="images/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110" /></a>
                    </div>
                    <div class="title"><a href="//item.mi.com/1160800074.html">小米家庭音响 标准版</a></div>
                    <p class="price">699元</p>      

                 </li>
             </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifihd/"><img src="images/placeholder-220!110x110.png" data-src="images/lyqhd.png" srcset="images/lyqhd.png 2x" alt="小米路由器 HD" width="160" height="110" /></a>     </div>
                                    <div class="title"><a href="//www.mi.com/miwifihd/">小米路由器 HD</a></div>
                                    <p class="price">1299元</p>     

                                                               

</li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifihd/"><img src="images/placeholder-220!110x110.png" data-src="images/pro320x220.png" srcset="images/pro320x220.png 2x" alt="小米路由器 Pro" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifihd/">小米路由器 Pro</a></div>
                                    <p class="price">499元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi3/"><img src="images/placeholder-220!110x110.png" data-src="images/lyq31.png" srcset="images/lyq31.png 2x" alt="小米路由器 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi3/">小米路由器 3</a></div>
                                    <p class="price">149元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">          <a href="//www.mi.com/miwifi3c/"><img src="images/placeholder-220!110x110.png" data-src="images/lyq3c1.png" srcset="images/lyq3c1.png2x" alt="小米路由器 3C" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi3c/">小米路由器 3C</a></div>
                                    <p class="price">99元</p>       

                                                             </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/plc/"><img src="images/placeholder-220!110x110.png" data-src="images/dlm01.png" srcset="images/dlm01.png 2x" alt="小米WiFi电力猫" width="160" height="110" /></a>
                                    </div>                                    <div class="title"><a href="//www.mi.com/plc/">小米WiFi电力猫</a></div>
                                    <p class="price">249元</p>      

                              <div class="flags"><div class="flag">新品</div></div>              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1164700010.html"><img src="images/placeholder-220!110x110.png" data-src="images/fdq2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!320x220.jpg 2x" alt="小米WiFi放大器 2" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1164700010.html">小米WiFi放大器 2</a></div>
                                    <p class="price">49元</p>       

                                                             </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/scale2/"><img src="images/placeholder-220!110x110.png" data-src="images/tzc320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!320x220.jpg 2x" alt="小米体脂秤" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/scale2/">小米体脂秤</a></div>
                                    <p class="price">199元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mj-carcorder/"><img src="images/placeholder-220!110x110.png" data-src="images/jjy320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!320x220.jpg 2x" alt="米家行车记录仪" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mj-carcorder/">米家行车记录仪</a></div>
                                    <p class="price">349元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miuav/"><img src="images/placeholder-220!110x110.png" data-src="images/wrj4k320.png" srcset="images/wrj4k320.png 2x" alt="小米无人机 4k 版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miuav/">小米无人机 4k 版</a></div>
                                    <p class="price">2999元</p>     

                                                               

</li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mj-interphone/"><img src="images/placeholder-220!110x110.png" data-src="images/djj320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!320x220.jpg 2x" alt="小米米家对讲机" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mj-interphone/">小米米家对讲机</a></div>
                                    <p class="price">249元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/dianfanbao2/"><img src="images/placeholder-220!110x110.png" data-src="images/dfb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!320x220.jpg2x" alt="米家IH电饭煲" width="160" height="110" /></a>                                 </div>
                                    <div class="title"><a href="//www.mi.com/dianfanbao2/">米家IH电饭煲</a></div>
                                    <p class="price">399元</p>      

                                                              </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/smart/"><img src="images/placeholder-220!110x110.png" data-src="images/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="查看全部<br/>智能硬件" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/smart/">查看全部<br/>智能硬件</a></div>                                                                   

                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                                        <a  class="link"href="//www.mi.com/service/" target="_blank"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                                        <a rel="nofollow" class="link" href="http://www.xiaomi.cn" target="_blank"><spanclass="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米5s&nbsp;Plus','Rst':5},{'Key':'小米MIX','Rst':1},{'Key':'手环','Rst':6},{'Key':'红米Note&nbsp;4x','Rst':4},{'Key':'小米路由器','Rst':10},{'Key':'移动电源','Rst':16},{'Key':'米家摄像机','Rst':5},{'Key':'小米体重秤','Rst':2},{'Key':'LED灯','Rst':6},{'Key':'优惠套装','Rst':64}]}" 

/>
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//www.mi.com/mi6/">小米6</a><a href="//item.mi.com/product/10000021.html">小米Note2</a>            

    </div>
            </form>
        </div>
    </div>
</div>
<div class="page-main">
    <div class="container">
        <div class="buy-succ-box clearfix">
            <div class="goods-content" id="J_goodsBox"><br><br><br>
             <p class="step-list step-one clearfix" style="font-size: 20px;color:#b0b0b0;padding-left:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('home/car/images/success.png') }}" alt=""> 商品成功加入购物车，可以在购物车中查看 </p> 
            <!--  @if(session('msg'))
               <h2>{{ session('msg') }}6666666</h2> 
             @endif -->


            </div>
<!-- 433333333333333333333333333333链接 3455555555555555555555555555555555555555555555555555555a -->
            <div class="actions J_actBox" style="width: 500px;float: right;">
                
                <a href="/home/mi" class="btn btn-line-grayJ_goBack" >继续浏览商品</a> 
                <a href="/home/cartshow" class="btn btn-primary">去购物车结算</a>
            </div>
        </div>
 <!-- 433333333333333333333333333333链接 3455555555555555555555555555555555555555555555555555555a -->
        <div class="buy-succ-recommend" id="J_buyRecommend"></div>        <div class="buy-succ-recommend" id="J_historyRecommend"></div>
        <div class="buy-succ-recommend" id="J_userHistory"></div>    </div>
</div>
<script  id="J_goodsTemplate" type="text/x-dot-template">    <div class="goods-img">
        <img src="images/success.png" width="64" height="64">    </div>
    <div class="goods-info">        <h3>已成功加入购物车！</h3>
        <span class="name">  等多件商品和服务    </span>     </div>
</script>
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/weixiu.png') }}" width="25" height="20" style="padding-top: 2px"> 预约维修服务</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/7.png') }}" width="25" height="20">7天无理由退货</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/15.png') }}" width="25" height="20">15天免费换货</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/gift.png') }}" width="25" height="20">满150元包邮</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/dizhi.png') }}" width="25" height="20">520余家售后网点</a></li>            </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">        <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/account/register/"   target="_blank">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/buy/buytime/"   target="_blank">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/order/sendprogress/"   target="_blank">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/exchange"   target="_blank">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/"   target="_blank">自助服务</a></dd>
                                <dd><a rel="nofollow" href="http://xiazai.mi.com/"   target="_blank">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/c/xiaomizhijia/"   target="_blank">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/static/maintainlocation/"   target="_blank">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/static/familyLocation/"   target="_blank">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">     <dt>关于小米</dt>                
                <dd><a rel="nofollow" href="//www.mi.com/about" target="_blank">了解小米</a></dd>               
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/"   target="_blank">加入小米</a></dd>                
                <dd><a rel="nofollow" href="//www.mi.com/about/contact"   target="_blank">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng"   target="_blank">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F

%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D

%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid

%3D128%26%23bid%3D10525%26from%3Dwechat"   target="_blank">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="//order.mi.com/queue/f2code"   target="_blank">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/giftcode/" 

  target="_blank">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="//order.mi.com/misc/checkitem"   target="_blank">防伪查询</a></dd>           
            </dl>
                            <div class="col-contact">
                <p class="phone">400-100-5678</p><p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                    <span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
            <a rel="nofollow" class="btn btn-line-primary btn-small" href="//www.mi.com/service/contact" target="_blank"><i class="iconfont">&#xe600;</i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites"><a rel="nofollow" href="//www.mi.com/index.html"   target="_blank">小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/"   target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/"  target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/"   target="_blank">多看书城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miwifi.com/"   target="_blank">小米路由器</a><span class="sep">|</span><a rel="nofollow" href="http://call.mi.com/"   target="_blank">视频电话</a><span class="sep">|</span><a rel="nofollow" href="http://xiaomi.tmall.com/"   target="_blank">小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="http://shop115048570.taobao.com"   target="_blank">小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="http://union.mi.com/"   target="_blank">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/mimobile/"   target="_blank">小米移动</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/res/doc/privacy/cn.html"  target="_blank">隐私政策</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" >Select Region</a>            </p>
            <p>&copy;<a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/"  target="_blank" rel="nofollow">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a><br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank"><img rel="nofollow" src="images/truste.png" alt="TRUSTe Privacy Certification" /></a>
                    <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img  rel="nofollow" src="images/v-logo-2.png" alt="诚信网站" /></a>
                    <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank"><img  rel="nofollow" src="images/v-logo-1.png" alt="可信网站" /></a>
                    <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img  rel="nofollow" src="images/v-logo-3.png" alt="网上交易保障中心" /></a>
                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="images/site-weixin.png" width="680" height="340" />
        </div>
    </div>
<!-- .modal-weixin END -->
<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
    <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span>
        <div class="con">
            <div class="title">正在排队，请稍候喔！</div>
            <div class="queue-tip-box">
                <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
                <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
                <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
                <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
                <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p>
            </div>
        </div>
        <div class="queue-posters">
            <div class="poster poster-3"></div>
            <div class="poster poster-2"></div>
            <div class="poster poster-1"></div>
            <div class="poster poster-4"></div>
            <div class="poster poster-5"></div>
        </div>
    </div>
</div>
<!-- .xm-dm-queue END -->
<div id="J_bigtapError" class="modal modal-hide modal-bigtap-

error">
    <span class="close" data-dismiss="modal" aria-hidden="true"><i 

class="iconfont">&#xe602;</i></span>
    <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p  class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p >
            <a class="btn btn-primary" id="J_bigtapRetry">重试</a>
        </p>
    </div>
</div>
<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
        <span class="close" data-dismiss="modal" ><i class="iconfont">&#xe602;</i></span>
        <div class="modal-body">
            <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
             <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br>
    所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
            <div class="mode-loading" id="J_bigtapModeLoading">
                <img src="images/loading.gif" alt="" width="32" height="32">
                <a  id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input type="text" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a>
            </div>
        </div>
    </div>
<div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
        <span class="close" data-dismiss="modal" ><i class="iconfont">&#xe602;</i></span>
        <div class="modal-body ">
            <div class="content clearfix">
                <span class="mitu"></span>
                <p class="title">很抱歉，人真是太多了<br>您晚了一步...</p>
            </div>
            <div class="bigtap-recomment-goods" >
                <div class="hd"><span>这些产品也不错，而且有现货哦！</span></div>
                <ul class="clearfix" id="J_bigtapRecommentList"></ul>
            </div>
        </div>
    </div>
<!-- .xm-dm-error END -->
<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
   <div class="modal-hd">
        <a class="close" data-dismiss="modal"><i 

class="iconfont">&#xe602;</i></a>
        <span class="title">Select Region</span>
    </div>
    <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select you country or region</p>
        <p class="modal-globalSites-links clearfix">
            <a href="//www.mi.com/index.html">Mainland China</a>
            <a href="http://www.mi.com/hk/">Hong Kong</a>
            <a href="http://www.mi.com/tw/">Taiwan</a>
            <a href="http://www.mi.com/sg/">Singapore</a>
            <a href="http://www.mi.com/my/">Malaysia</a>
            <a href="http://www.mi.com/ph/">Philippines</a>
            <a href="http://www.mi.com/in/">India</a>
            <a href="http://www.mi.com/id/">Indonesia</a>
            <a href="http://br.mi.com/">Brasil</a>
            <a href="http://www.mi.com/en/">Global Home</a>
            <a href="http://www.mi.com/mena/">MENA</a>
            <a href="http://www.mi.com/pl/">Poland</a>
            <a href="http://www.mi.com/ua/">Ukraine</a>
            <a href="http://www.mi.com/ru/">Russia</a>
            <a href="http://www.mi.com/vn/">Vietnam</a>
        </p>
    </div>
</div>
<!-- .modal-globalSites END -->
<script src="js/base.min.js?v2017a15"></script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '//order.mi.com',
        orderSSLSite: 'https://order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: '//tp.hd.mi.com/',
        damiaoGoodsId:

["2160400006","2160400007","2162100004","2162800010","2155300001","2155300002","2163500025","2163500026","2163500027","2164200021","2142400036","2163900015","2170800008","2171000055","2171300002"],
        logoutUrl: '//order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 

'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + 

'/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>
<script type="text/javascript" src="js/buySuccess.min.js?

3aa5f0"></script>
<link rel="stylesheet" type="text/css" href="css/buy-

success.min.css?3d3ae7" />
<script src="js/xmsg_ti.js"></script>
<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = '//c1.mifile.cn/f/i/15/stat/js/xmst.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>
<!--mae_monitor--></body>
</html>
