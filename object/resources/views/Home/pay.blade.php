<!DOCTYPE html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>选择在线支付方式</title>
    <meta name="viewport" content="width=1226">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Home/pays/css/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/pays/css/pay-confirm.min.css') }}">
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/mstr.js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/unjcV2.js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/mstr(1).js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/jquery.statData.min.js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/xmst.js') }}"></script>
    <script type="text/javascript" async="" src="{{ asset('Home/pays/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('Home/pays/js/base.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/pays/js/payConfirm.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Home/pays/js/zepto.1.1.6.js') }}"></script>
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo " href="/home/mi" title="小米官网" ></a>
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>支付订单</h2></div>
    <div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" >
    <span class="name">{{ session('user')->uname }}</span><i class="iconfont"></i></a>
        <ul class="user-menu" style="display: none;">
            <li><a rel="nofollow" href="/home/grzx">个人中心</a></li>
            <li><a rel="nofollow" href=>评价晒单</a></li>
            <li><a rel="nofollow" href="" target="_blank" data-stat-id="8660c1b13ab1c56b">我的喜欢</a></li>
            <li><a rel="nofollow" href="/home/grzx">小米账户</a></li>
            <li><a rel="nofollow" href="/home/over"  >退出登录</a></li>
        </ul></span>
    <span class="sep">|</span><a rel="nofollow" class="link link-order" href="" target="_blank" data-stat-id="a9e9205e73f0742c">我的订单</a></div>
    </div>
</div>


<div class="page-main">
    <div class="container confirm-box">
        <form target="_blank" action="" id="J_payForm" method="post">
            <div class="section section-order">
                <div class="order-info clearfix">
                    <div class="fl">
                         <h2 class="title">订单提交成功！去付款咯～</h2>
                        <p class="order-time" id="J_deliverDesc">预计5天内发货</p>
                        <p class="order-time">请在<span class="pay-time-tip">0小时30分</span>内完成支付, 超时后将取消订单</p>
                        <p class="post-info" id="J_postInfo">
                            收货信息：{{ $ob['username'] }} {{ $ob['tel'] }} &nbsp;&nbsp;
                            {{ $ob['detail'] }}  </p>                                                  
                    </div>
                    <div class="fr">
                    
                        <p class="total">
                            应付总额：<span class="money"><em>{{ $ob['total'] }}</em>元</span>
                        </p>
                    
                        <a href="javascript:void(0);" class="show-detail" id="J_showDetail" data-stat-id="f6ce11cebe4cd0c7" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-f6ce11cebe4cd0c7&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">订单详情<i class="iconfont"></i></a>
                    </div>
                </div>
                <i class="iconfont icon-right">√</i>
                <div class="order-detail">
                    <ul>
                        <li class="clearfix">
                            <div class="label">订单号：</div>
                            <div class="content">
                                <span class="order-num" id="dingdanh"> {{ session('data')['number'] }} </span>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="label">收货信息：</div>
                            <div class="content">
                            {{ $ob['name'] }} {{ $ob['tel'] }}&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $ob['detail'] }}
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="label">商品名称：</div>
                            <div class="content">{{ $ob['goodsname'] }}</div>                           
                        </li>
                         <li class="clearfix">
                            <div class="label">配送时间：</div>
                            <div class="content">24小时全天服务</div>                             
                        </li>
                        <li class="clearfix">
                            <div class="label">订单备注：</div>
                            <div class="content">{{ $ob['msg'] }}</div>                              
                        </li>
                    </ul>
                </div>
            </div>            
            <div class="section section-payment">
                <div class="cash-title" id="J_cashTitle">
                    选择以下支付方式付款
                </div>
                <!-- 支付平台开始 -->
                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">支付平台</h3>
                        <span class="desc"></span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                            <li id="J_weixin" data-stat-id="ecb19ebff89bfe8d" onclick="Pay(this)"><img src="{{ asset('Home/pays/images/wechat0715.jpg') }}" alt="微信支付" style="margin-left: 0;"></li>
                            <li class="J_weixin"  onclick="Pay(this)" ><img src="{{ asset('Home/pays/images/alipay-0718-1.png')}}" alt="支付宝" style="margin-left: 0;"></li>
                            <li class="J_weixin" data-stat-id="f8ac83d702a1fcfd" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="unionpay" value="unionpay"> <img src="{{ asset('Home/pays/images/unionpay.png') }}" alt="银联" style="margin-left: 0;"></li>
                            <li class="J_weixin" data-stat-id="c6597ab9a9e0bd00" onclick="Pay(this)" ><input type="radio" name="payOnlineBank" id="cft" value="cft"> <img src="{{ asset('Home/pays/images/cft.png') }}" alt="财付通" style="margin-left: 0;"></li>
                            <li class="J_weixink" data-stat-id="a87f620c78db2b2b" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="micash" value="micash"> <img src="{{ asset('Home/pays/images/micash.png') }}" alt="小米钱包" style="margin-left: 0;"></li>
                         </ul>
                        <div class="event-desc">
                            <p>微信支付：关注小米手机微信公众号，支付成功后可领取3-10元电影票红包。</p>
                            <p>支 付 宝：支付宝扫码支付满38元，参与赢取1999元红包</p>
                            <a href="" class="more" target="_blank" data-stat-id="e77b22cecb60b77e" >了解更多&gt;</a>
                        </div>
                    </div>
                </div>
                <!-- 支付平台结束-->

                <!-- 银行卡以及信用卡开始 -->
                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">银行借记卡及信用卡</h3>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                            <li class="" data-stat-id="ab154aed085947cf" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="CMB" value="CMB"> <img src="{{ asset('Home/pays/images/payOnline_zsyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="7998330cbb62eecb" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="ICBCB2C" value="ICBCB2C"> <img src="{{ asset('Home/pays/images/payOnline_gsyh.png') }}" alt=""></li>



                            <li class="" data-stat-id="0ca03e76abb984c8" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_jsyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="06de530039da8b38" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_jtyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="8656db966e93f938" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_nyyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="248651d06000e2a7"onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="BOCB2C" value="BOCB2C"> <img src="{{ asset('Home/pays/images/payOnline_zgyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="8fa40e5ac268b29e" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT"> <img src="{{ asset('Home/pays/images/payOnline_youzheng.png') }}" alt=""></li>
                            <li class="" data-stat-id="ab2fd7c15b466ad2" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_gfyh.png') }}" alt=""></li>

                            <li class="" data-stat-id="a3c47799e97d470d" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_pufa.png') }}" alt=""></li>
                            <li class="" data-stat-id="56565ba582001f90" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_gdyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="4768ae2336413eb6" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_xyyh.png') }}" alt=""></li>

                            <li class=" hide" data-stat-id="6eef43a83d87cc0b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6eef43a83d87cc0b&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CMBC" value="CMBC"> <img src="{{ asset('Home/pays/images/payOnline_msyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="c7a05519141a406a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-c7a05519141a406a&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CITIC" value="CITIC"> <img src="{{ asset('Home/pays/images/payOnline_zxyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="cf61ac1722da02b2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-cf61ac1722da02b2&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SHBANK" value="SHBANK"> <img src="{{ asset('Home/pays/images/payOnline_shyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="97f3869e8b59e807" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-97f3869e8b59e807&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="BJRCB" value="BJRCB"> <img src="{{ asset('Home/pays/images/payOnline_bjnsyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="182a6540a166f721" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-182a6540a166f721&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="NBBANK" value="NBBANK"> <img src="{{ asset('Home/pays/images/payOnline_nbyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="0c1fd9edbb2ffdf3" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-0c1fd9edbb2ffdf3&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="HZCBB2C" value="HZCBB2C"> <img src="{{ asset('Home/pays/images/payOnline_hzyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="e2164be795d58002" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-e2164be795d58002&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SHRCB" value="SHRCB"> <img src="{{ asset('Home/pays/images/payOnline_shnsyh.png') }}" alt=""></li>
                            <li class="J_bank hide" data-stat-id="ce440019c46271da" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ce440019c46271da&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="FDB" value="FDB"> <img src="{{ asset('Home/pays/images/payOnline_fcyh.png') }}" alt=""></li>
                            <li class="J_showMore" data-stat-id="8b70221d47a030ba" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-8b70221d47a030ba&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);">
                                <span class="text">查看更多</span>
                                <span class="text  hide">收起更多</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 银行卡以及信用卡结束 -->

                <!-- 快捷支付开始 -->
                <div class="payment-box payment-box-last ">
                    <div class="payment-header clearfix">
                        <h3 class="title">快捷支付</h3>
                        <span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                            <li class="" onclick="Pay(this)"><input type="radio" name="payOnlineBank" id="CMB-KQ" value="CMB-KQ"> <img src="{{ asset('Home/pays/images/payOnline_zsyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="7659e125813c697e" onclick="Pay(this)";pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="COMM-KQ" value="COMM-KQ"> <img src="{{ asset('Home/pays/images/payOnline_jtyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="ac8d246311892220" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_jsyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="ee06952bbd4f4d0a" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_gsyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="74411e695cd6624e" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_zxyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="6a609f8ffa09ec9d" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_gdyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="3f5bfe4137171a90" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_zgyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="b64f8a9b6dd3b75c" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_shncsyyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="729ad1d14eee2a2f" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_jiangsshuyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="9aa4813e4a7fd47c" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_xyyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="3420e08efd3d3e67" onclick="Pay(this)""> <img src="{{ asset('Home/pays/images/payOnline_nyyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="61c6b46df23af369" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_payh.png') }}" alt=""></li>
                            <li class="" data-stat-id="b4dc808a450a09da" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_hyyh.png') }}" alt=""></li>
                            <li class="J_bank" data-stat-id="5c39e922eb18bc68" oonclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_gfyh.png') }}" alt=""></li>
                            <li class="" data-stat-id="adc2b0678ca52fb2" onclick="Pay(this)"> <img src="{{ asset('Home/pays/images/payOnline_bjyh.png') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <!-- 快捷支付开始 -->
            </div>
           
            <!-- 分期付款开始 -->
            <div class="section section-installment" id="J_paymentFenqi">
                <div class="payment-box">
                    <div class="payment-header clearfix">
                        <h3 class="title">分期付款</h3>
                        <span class="desc"></span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize J_tabSwitch">
                            <li class="J_bank fenqi" id="J_huabeifenqi" data-isinstalment="true" data-stat-id="51d1f1c2f3929a84" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-51d1f1c2f3929a84&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="antinstal" value="antinstal"> <img src="{{ asset('Home/pays/images/payOnline_ant_huabei.png') }}" alt="蚂蚁花呗分期付款	"></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="632ea04d66eb9712" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-632ea04d66eb9712&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="mifinanceinstal" value="mifinanceinstal"> <img src="{{ asset('Home/pays/images/mifinanceinstal.png') }}" alt="分期-小米金融	"></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="7b800eee8de964e2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-7b800eee8de964e2&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="cmbinstal" value="cmbinstal"> <img src="{{ asset('Home/pays/images/payOnline_zsyh(1).png') }}" alt="分期-招商银行	"></li>                        </ul>
                        <div class="tab-container clearfix isinstalment-box">
                            <div class="tab-content  clearfix">
                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>477.05元 × 3期</h3>
                                        <p>手续费 10.72元/期，费率2.3%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="alert(123)">选择该分期方式</a>
                                    </div>
                                </div>
                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>243.65元 × 6期</h3>
                                        <p>手续费 10.49元/期，费率4.5%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>             
                                    </div>
                                </div>
                                 <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>125.90元 × 12期</h3>
                                        <p>手续费 9.32元/期，费率8.0%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                    </div>
                                </div>
                                
                                <div class="isinstalment-desc">
                                    分期付款说明：<br>1、选择蚂蚁花呗分期后，如更改分期数或切换其他支付方式遇到问题，推荐您使用小米钱包进行支付。<br>
                                    2、每期还款金额是根据你的订单估算得出的金额，实际支付数额请以支付宝账单为准，支付宝有权决定是否接受您的分期付款申请。
                                </div>
                            </div>
                            <div class="tab-content  clearfix">
                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>476.68元 × 3期</h3>
                                        <p>手续费 10.35元/期，费率2.22%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                    </div>
                                </div>
                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>242.26元 × 6期</h3>
                                        <p>手续费 9.09元/期，费率3.9%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                     </div>
                                </div>
                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>124.97元 × 12期</h3>
                                        <p>手续费 8.39元/期，费率7.2%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                    </div>
                                </div>
                                
                                <div class="isinstalment-desc">
                                    分期付款说明：<br>每期还款金额是根据你的订单估算得出的金额，实际支付数额请以小米分期账单为准，小米分期有权决定是否接受您的分期付款申请。</div>
                            </div>
                                <div class="tab-content  clearfix">
                                    <div class="isinstalment-item  clearfix" style="height:150px;">
                                        <div class="item-header">
                                            <h3>483.12元 × 3期</h3>
                                            <p>手续费 16.79元/期，费率3.6%</p>
                                        </div>
                                        <br>
                                        <div class="item-footer">
                                            <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                            <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                        </div>
                                    </div>
                                    <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>244.36元 × 6期</h3>
                                        <p>手续费 11.19元/期，费率4.8%</p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a></div>
                                    </div>
                                    <div class="isinstalment-item  clearfix" style="height:150px;">
                                        <div class="item-header">
                                            <h3>124.98元 × 12期</h3>
                                            <p>手续费 8.39元/期，费率7.2%</p>
                                        </div>
                                        <br>
                                        <div class="item-footer">
                                            <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                            <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a></div>
                                    </div>
                                    <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                    </div>
                                 </div>
                            </div>
                    </div>
                </div>
            </div>
                <!-- 分期付款开始 -->
        </form>
    </div>
</div>
<div id="pay" style="display:none;border:3px solid orange;width:450px;height:450px;position:fixed;left:300px;top:100px;background:white;
" >  
 <h2 align="center"> 请扫码付款  </h2>
 <a href="{{ url('/home/payok') }}"><img class="goimg" src="{{ asset('Home/pays/images/pay.png') }}" alt="" style="margin-left:100px;"></a>
</div>
<!-- 付款时的js开始 -->
<script type="text/javascript">
    function Pay(obj){
        // alert(123);
        // die();
        var pay = $('#pay').css('display','block');
        // alert(12313131313);
    }
</script>
<!-- 付款时的js结束 -->
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                             <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/weixiu.png') }}" width="25" height="20" style="padding-top: 2px"> 预约维修服务</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/7.png') }}" width="25" height="20">7天无理由退货</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/15.png') }}" width="25" height="20">15天免费换货</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/gift.png') }}" width="25" height="20">满150元包邮</a></li>
                            <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/dizhi.png') }}" width="25" height="20">520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="e5dad0738a41014f" >账户管理</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e128f473e680197" >购物指南</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="fd9e3532f60a2f8d" >订单操作</a></dd>
                
            </dl>     
            <dl class="col-links ">
                <dt>服务支持</dt>
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e282b6f669ba990" o>售后政策</a></dd>
                <dd><a rel="nofollow" >自助服务</a></dd>
                <dd><a rel="nofollow" >相关下载</a></dd>
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow">小米之家</a></dd>
                
                <dd><a rel="nofollow" >服务网点</a></dd>
                
                <dd><a rel="nofollow">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" >了解小米</a></dd>
                
                <dd><a rel="nofollow" >加入小米</a></dd>
                
                <dd><a rel="nofollow" >联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" >新浪微博</a></dd>
                
                <dd><a rel="nofollow" >小米部落</a></dd>
                
                <dd><a rel="nofollow" >官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" >F 码通道</a></dd>
                
                <dd><a rel="nofollow" >礼物码</a></dd>
                
                <dd><a rel="nofollow" >防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
                <p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                    <span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
                    <a rel="nofollow" class="btn btn-line-primary btn-small" ><i class="iconfont"></i> 24小时在线客服</a>            
            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <span class="logo ir">小米官网</span>
        <div class="info-text">
            <p>小米旗下网站：
                <a >小米商城</a><span class="sep">|</span>
                <a >MIUI</a><span class="sep">|</span>
                <a >米聊</a><span class="sep">|</span>
                <a >多看书城</a><span class="sep">|</span>
                <a >小米路由器</a><span class="sep">|</span>
                <a>视频电话</a><span class="sep">|</span>
                <a >小米天猫店</a><span class="sep">|</span>
                <a >小米淘宝直营店</a><span class="sep">|</span>
                <a >小米网盟</a><span class="sep">|</span>
                <a href="" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-f7ea7880c49b687e&#39;, &#39;//www.mi.com/mimobile/&#39;, &#39;pcpid&#39;, &#39;&#39;]);">小米移动</a><span class="sep">|</span>
                <a >隐私政策</a><span class="sep">|</span>
                <a >Select Region</a>
            </p>
            <p>©
                <a>mi.com</a> 京ICP证110507号
                <a>京ICP备10046444号</a>
                <a rel="nofollow" >京公网安备11010802020134号 </a>
                <a rel="nofollow" >京网文[2014]0059-0009号</a>

                <br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
            </p>
        </div>
        <div class="info-links">
            <a ><img src="{{ asset('Home/car/images/truste.png') }}" alt="TRUSTe Privacy Certification"></a>
            <a "><img src="{{ asset('Home/pays/images/v-logo-2.png') }}" alt="诚信网站11111111111"></a>
            <a ><img src="{{ asset('Home/pays/images/v-logo-1.png') }}" alt="可信网站"></a>
            <a ><img src="{{ asset('Home/pays/images/v-logo-3.png') }}" alt="网上交易保障中心"></a>
        </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>

<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" ><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="{{ asset('Home/pays/images/site-weixin.png') }}" width="680" height="340">
        </div>
    </div>
<div></div></body></html>