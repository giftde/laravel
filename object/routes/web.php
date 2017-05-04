<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Home\HomeController@index');
//=======================第一节基本路由（四种）
Route::get('/foo', function () {
    return 'get提交';
});

Route::post('/foo',function(){
    return 'post提交';
});

Route::put('/foo',function(){
    return 'put提交';
});

Route::delete('/foo',function(){
    return 'delete提交';
});

//多种请求路由
Route::match(['get','post'],'/hello',function(){
    return 'hello word';
});

// 参数路由
// 可选加个?,记得给函数参数，默认值
Route::get('test/{id?}/{name?}',function($id = 6,$name = '刘伟'){
    return 'test'.$id.$name;
});

//带可选参数的路由，并且限制参数必须为数字
Route::get('/test1/{id?}',function($id = null){
    return 'test1'.$id;
})->where('id','[0-9]+');




// ========================================第二节控制器路由
Route::get('/user/in','UserController@index');
Route::get('/user/sh','UserController@show');


Route::resource('/stu','Stu\StuController');



// =========================================第三节请求响应
// 请求
Route::get('/demo1','DemoController@request');
//响应
Route::get('/demo2','DemoController@response');


// =========================================第四节带模板继承的用户管理
// //后台首页
// Route::resource('/demo3','Admin\AdminController');
// // 用户管理
// Route::resource('/demo4','User\UserController');


// 文件上传
Route::get('/upload','upload\UploadController@index');
Route::post('/doupload','upload\UploadController@doupload');

// 后台路由群组
Route::group(['prefix' => 'admin','middleware' => 'login'],function(){
    //后台首页
    Route::resource('/demo3','Admin\AdminController');
    // 用户管理
    Route::resource('/demo4','User\UserController');
    Route::get('/demo4/upic/{uid?}','User\UserController@editPic');
    Route::post('/demo4/upic/{uid?}','User\UserController@updatePic');
    // 用户退出
    Route::get('/over','Admin\LoginController@over');
    // 管理员设置
    Route::resource('/users','Users\UsersController');
    // 商品管理
    Route::resource('/goods','Admin\Goods\GoodController');
    Route::get('/goods/gpic/{id?}','Admin\Goods\GoodController@editPic');
    Route::post('/goods/gpic/{id?}','Admin\Goods\GoodController@updatePic');
    //商品分类
    Route::resource('/category','Admin\Category\CateController');
    Route::get('/typeSon/{id}','Admin\Category\CateController@createSon');
    Route::post('/typeSon','Admin\Category\CateController@storeSon');
    //商品订单管理
    Route::get('/order','Admin\Goods\OrderController@index');
    //订单详情
    Route::get('/oinfo/{id?}/{gid?}','Admin\Goods\OrderController@info');
    //发货
    Route::get('/ship/{id?}/{gid?}','Admin\Goods\OrderController@ship');
    //退款
    Route::get('/back','Admin\Goods\OrderController@back');
    Route::get('/doback/{id?}','Admin\Goods\OrderController@doback');
    Route::get('/afback/{id?}','Admin\Goods\OrderController@afback');
    Route::get('/okback/{id?}','Admin\Goods\OrderController@okback');
    //问题反馈
    Route::get('/problem','Admin\Problem\ProController@index');
    Route::get('/preplay/{id?}/{name?}/{tel?}','Admin\Problem\ProController@preplay');
    Route::post('/doreplay/{id?}','Admin\Problem\ProController@doreplay');
    //收藏管理
    Route::resource('/cllect','Admin\Cllect\CllController');
    // 友情链接管理
    Route::resource('/links','Links\LinksController');

    // 网站配置管理
    Route::resource('/config','Config\ConfigController');
     // 支付管理
    Route::resource('/pays','Pays\PaysController');
    // 配送管理
    Route::resource('/dilivery','Dilivery\DiliveryController');
    //评论管理
    Route::resource('/comment','Comment\CommentController');
    //回复管理
    Route::resource('/replay','Replay\ReplayController');
    //购物车管理
    Route::resource('/temprory','Temprory\TemproryController');
});
// 登录
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/dologin','Admin\LoginController@dologin');
// 验证码
Route::get('Admin/captch/{tmp}','Admin\LoginController@captch');

//前台路由群组
Route::group(['prefix' => 'home'],function(){
    Route::resource('/mi','Home\HomeController');
    //前台个人中心
    Route::resource('/grzx','Home\GrzxController');
    Route::get('/ordinfo/{id?}','Home\GrzxController@ordinfo');
    //前台用户退出
    Route::get('/over','Home\LoginController@over');
    Route::post('/addr/{id?}',"Home\GrzxController@updateaddr");
    //商品收藏
    Route::post('/addcllect','Home\HomeController@cllect');
    Route::get('/stocll','Home\CartController@stocll');
    //前台评论
    Route::post('/comment','Home\RepcomController@comment');
    //取消收藏
    Route::get('/delcll/{uid?}/{gid?}','Home\HomeController@delcll');
    Route::get('/nocllect/{uid?}/{gid?}','Home\GrzxController@delcllect');
    //前台购物车
    Route::post('/cart','Home\CartController@add');
    //前台购物车列表页 
    Route::get('/cartshow','Home\CartController@show');
    // -
    Route::get('/cartupdate','Home\CartController@update');
    // +
    Route::get('/cartupdatea','Home\CartController@update_a');
    //前台购物车删除
    Route::get('/aa/{id}','Home\CartController@destory');
    // 前台去提交订单
    Route::post('/order','Home\CartController@order');
    Route::post('/order/addr','Home\CartController@insertaddr');
    Route::get('/order/deladdr/{id?}','Home\CartController@deladdr');
    Route::get('/ordok/{id?}','Home\GrzxController@ordok');
    Route::get('/ordpay/{id?}/{uid?}','Home\GrzxController@ordpay');
    // 支付结算：
    Route::resource('/pay','Home\PayController');
    //支付成功,
    Route::get('/payok','Home\PayController@payok');
});

Route::get('/home/login','Home\LoginController@index');//登录
//前台执行登陆
Route::post('home/dologin','Home\LoginController@dologin');
// 前台注册：
Route::get('home/register1','Home\registerController@index');
// 前台验证码
Route::get('home/captch1/{tmp}','Home\registerController@captch');
// 前台执行注册：
Route:: post('home/doregister1','Home\registerController@doregister');