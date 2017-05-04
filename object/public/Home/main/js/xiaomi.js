/**
 * Created by Administrator on 2015/11/5.
 */
//¹ºÎï³µ¿ØÖÆÏÔÊ¾
$("#head_car").hover(function(){
    $(this).css("background", "#FBFEE9");
    $(".head_car_text").css("color", "#ff6700");
    $("#car_content").css({"width":"300px"}).animate({
        height:"100px"
    },400).finish();
},function(){
    $(this).css("background", "#424242");
    $(".head_car_text").css("color", "#b0b0b0");
    $("#car_content").css({"width":"300px"}).animate({
        height:"0px"
    },400);
})
//µ¼º½À¸¿ØÖÆÏÔÊ¾
$(".menu_li").hover(function(){
    $("#menu_content_bg").css("border","1px solid #D0D0D0");
    $(this).css("color","#ff6700");
    $("#"+$(this).attr("control")).show();
    $("#menu_content_bg").height(230);
},function(){
    $("#"+$(this).attr("control")).hide();
   $(this).css("color"," #424242");
    $("#menu_content_bg").height(0);
    $("#menu_content_bg").css("border","0px solid #D0D0D0");
})
//ËÑË÷¿òÊ§È¥ºÍ»ñÈ¡½¹µãborderÑÕÉ«¸Ä±ä
$("#find_input").focus(function(){
    $("#find_wrap").css("border","1px solid #ff6700");
    $("#find_but").css("border-left","1px solid #ff6700");
})
$("#find_input").blur(function(){
    $("#find_wrap").css("border","1px solid #F0F0F0");
    $("#find_but").css("border-left","1px solid #F0F0F0");
})
//ËÑË÷°´Å¥µÄ±³¾°ÑÕÉ«¸Ä±ä
$("#find_but").hover(function(){
    $(this).css({"background":"#ff6700",color:"#fff"});
},function(){
    $(this).css({"background":"#fff",color:"#424242"});
})
//²Ëµ¥À¸µÄÏÔÊ¾
$("#banner_menu_wrap").children().hover(function(){
    $(this).css("background","#ff6700");
    $(this).children(".banner_menu_content").css("border","1px solid #F0F0F0").show();
},function(){
    $(this).css("background","none");
    $(this).children(".banner_menu_content").css("border","0px solid #F0F0F0").hide();
})
//ÂÖ²¥
$(function(){
    var i=0;
    var big_banner_pic = $("#big_banner_pic");
    var allimg=$("#big_banner_pic li").length;
    function img_change(){
        var img_i=i*-1226+"px";
        big_banner_pic.animate({opacity:".2"},100,function(){
            big_banner_pic.css("left",img_i );
            big_banner_pic.animate({
                opacity: "1"
            }, 100);
        })
    }
    function automatic(){
        i+=1;
        if(i>=allimg){
            i=0;
        }
        img_change();
    }
    change_self_time = setInterval(automatic, 3000);
    //ÂÖ²¥ÉÏÒ»ÕÅÏÂÒ»ÕÅÍ¼±ê¿ØÖÆ
    $("#big_banner_change_wrap").hover(function(){
        clearInterval(change_self_time);
        $("#big_banner_change_wrap").children().show();
    },function(){
        change_self_time = setInterval(automatic, 3000);
        $("#big_banner_change_wrap").children().hide();
    })
    $("#big_banner_change_prev").click(function(){
        i += 1;
        if (i >= allimg) {
            i = 0;
        }
        img_change();
    })
    $("#big_banner_change_next").click(function(){
        i -= 1;
        if (i <= 0) {
            i = allimg - 1;
        }
        img_change();
    })
})
//Ð¡Ã×Ã÷ÐÇborder-top colorÉèÖÃ
$(function(){
    $("#head_hot_goods_content").children().children().eq(0).css("border-color","#ff7600");
    $("#head_hot_goods_content").children().children().eq(1).css("border-color","red");
    $("#head_hot_goods_content").children().children().eq(2).css("border-color","#adff2f");
    $("#head_hot_goods_content").children().children().eq(3).css("border-color","#6495ed");
    $("#head_hot_goods_content").children().children().eq(4).css("border-color","#6a5acd");
    $("#head_hot_goods_content").children().children().eq(5).css("border-color","#ff7600");
    $("#head_hot_goods_content").children().children().eq(6).css("border-color","red");
    $("#head_hot_goods_content").children().children().eq(7).css("border-color","#adff2f");
    $("#head_hot_goods_content").children().children().eq(8).css("border-color","#6495ed");
    $("#head_hot_goods_content").children().children().eq(9).css("border-color","#6a5acd");
})
//¿ØÖÆÐ¡Ã×Ã÷ÐÇleft
$("#head_hot_goods_prave").click(function(){
     $("#head_hot_goods_content").children("ul").animate({
         left:"-1226px"
     },300)
})
$("#head_hot_goods_next").click(function(){
    $("#head_hot_goods_content").children("ul").animate({
        left:"0"
    },300)
})
$("#head_hot_goods_prave").hover(function(){
    $(this).css("color","#ff6700");
},function(){
    $(this).css("color","#BEBEBE");
})
$("#head_hot_goods_next").hover(function(){
    $(this).css("color","#ff6700");
},function(){
    $(this).css("color","#BEBEBE");
})

$(".floor_goods_wrap_li").hover(function () {
       $(this).css({"top":"-5px",
           "box-shadow":"0px 15px 30px rgba(0,0,0,0.2)"
       });
},function(){
    $(this).css({"top":"0px",
        "box-shadow":"none"
    });
})

$(".foot_bottom_r").children("span").hover(function(){
    $(this).css({"background":"#ff6700",color:"#fff"});
},function(){
    $(this).css({"background":"none",color:"#ff6700"});
})
$("#myorder").click(function(){
    $("#order").siblings().css("display","none");
    $("#order").css("display","block");
});
$("#udata").click(function(){
    $("#uinfo").siblings().css("display","none");
    $("#uinfo").css("display","block");
});
$("#commorder").click(function(){
    $("#ucomm").siblings().css("display","none");
    $("#ucomm").css("display","block");
});
$("#addr").click(function(){
    $("#uaddr").siblings().css("display","none");
    $("#uaddr").css("display","block");
});
// 全部订单列表
$("#zorder").click(function(){
    $("#morder_list").css("display","none");
    $("#forder_list").css("display","none");
    $("#sorder_list").css("display","none");
    $("#corder_list").css("display","none");
    $("#zorder_list").css("display","block");
});
//待支付订单列表
$("#morder").click(function(){
    $("#zorder_list").css("display","none");
    $("#forder_list").css("display","none");
    $("#sorder_list").css("display","none");
    $("#corder_list").css("display","none");
    $("#morder_list").css("display","block");
});
//待收货订单列表
$("#sorder").click(function(){
    $("#zorder_list").css("display","none");
    $("#morder_list").css("display","none");
    $("#corder_list").css("display","none");
    $("#forder_list").css("display","block");
    $("#sorder_list").css("display","block");
});
//交易完成订单列表
$("#corder").click(function(){
    $("#zorder_list").css("display","none");
    $("#morder_list").css("display","none");
    $("#sorder_list").css("display","none");
    $("#forder_list").css("display","none");
    $("#corder_list").css("display","block");
});
//商品评价
// 待评价商品按钮
$("#ncomment").hover(function(){
    $(this).css('background',"#FF6700");
},function(){
    $(this).css('background','white');
}).click(function(){
    $(".ycomment_list").css('display','none');
    $(".ncomment_list").css('display','');
});
//已评价商品按钮
$("#ycomment").hover(function(){
    $(this).css('background',"#FF6700");
},function(){
    $(this).css('background','white');
}).click(function(){
    $(".ycomment_list").css('display','');
    $(".ncomment_list").css('display','none');
});
$("#comment").hover(function(){
    $(this).css("background","#FF6700");
},function(){
    $(this).css("background","white");
});
// 添加收货地址
$("#J_newAddress").click(function(){
    $("#newaddr").css("display","block");
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
                    $('#cid').append("<option value="+data[i].id+" label="+data[i].name+">"+data[i].name+"</option>");
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
                            $("#from").html('');
                            //生成一个新的select标签
                            var select = $("<select name='site1[]' style='height:30px;width:75px;margin-bottom:8px;'><option>--请选择--</option></select>");
                            //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].id+"label="+data[i].name+">"+data[i].name+"</option>");
                            };
                            //外部插入到前一个select后面
                            ob.after(select);
                        }else if(data.length == 0){
                            $("#from").html('');
                            $('#loca option:selected').each(function(){
                                if($(this).html() == '--请选择--'){
                                    $(this).html().remove();
                                }
                                var aa = $(this).html();
                                $('#from').append("<span> "+aa+"</span>");
                            });
                            var a = $("#from").text();
                            $("#site").val(a);
                        }
                    },
                    error:function()
                    {
                        alert('ajax请求失败');
                    }
                });
            }
        });
});
$("#consignee").blur(function(){
    if($(this).val() == ''){
        alert('请输入收货人姓名');
        $("#saddr").attr('disabled',true);
    }else{
        $("#saddr").removeAttr('disabled');
        $("#saddr").blur(function(){
            if($(this).val() == ''){
                alert('请填写具体收货地址.\n例如:清华苑4#1203');
            }else{
                $("#consignee_phone").blur(function(){
                    if($(this).val() == ''){
                        alert('收货人手机号不能为空');
                    }else{
                        if (!$(this).val().match(/(1[3-9]\d{9}$)/)){ 
                            alert("手机号码格式不正确！"); 
                        }else{
                            $("#submit").removeAttr('disabled');
                        }
                    }
                });
            }
        });
    }
});
$("#gaddr").hover(function(){
    $(this).css("background","#ff6700");
    $(this).css("cursor","pointer");
},function(){
    $(this).css("background","#e5e5e5");
}).click(function(){
    $("#newaddr").css("display","none");
});
//修改收货地址
$(".editaddr").click(function(){
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
                    $('#edid').append("<option value="+data[i].id+" label="+data[i].name+">"+data[i].name+"</option>");
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
                            $("#xgaddr").html('');
                            //生成一个新的select标签
                            var select = $("<select name='site1[]' style='height:30px;width:75px;margin-bottom:8px;'><option>--请选择--</option></select>");
                            //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].id+"label="+data[i].name+">"+data[i].name+"</option>");
                            };
                            //外部插入到前一个select后面
                            ob.after(select);
                        }else if(data.length == 0){
                            $("#xgaddr").html('');
                            $('#goal option:selected').each(function(){
                                if($(this).html() == '--请选择--'){
                                    $(this).html().remove();
                                }
                                var bb = $(this).html();
                                $('#xgaddr').append("<span> "+bb+"</span>");
                            });
                            var b = $("#xgaddr").text();
                            $("#xgsite").val(b);
                        }
                    },
                    error:function()
                    {
                        alert('ajax请求失败');
                    }
                });
            }
        });


    var ss = $(this).parent().prev();
    var name = ss.find('dt');
    $("#editconsignee").val('');
    $("#editconsignee").val(name.find('em').text());
    var phone = name.next();
    $("#editconsignee_phone").val('');
    $("#editconsignee_phone").val(phone.text());
    var site = phone.next();
    $("#yaddr").html('');
    $("#yaddr").html(site.text());
    $("#site1").val(site.text());
    var detail = site.next();
    // alert(detail.text());
    var aid = detail.next();
    // alert(aid.text());
    $("#editsite").val('');
    $("#editsite").val(detail.text());
    $("#updaddr").css("display","block");
    $("#goal").attr("action",'/home/addr'+'/'+aid.text());
});
$("#close").hover(function(){
    $(this).css('background',"#ff6700");
    $(this).css("cursor","pointer");
},function(){
    $(this).css("background","#e5e5e5");
}).click(function(){
    $("#updaddr").css("display","none");
});