<!DOCTYPE html><html><head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>商品详情</title><meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
<link href="<?php echo env('APP_URL'); ?>/css/weixin/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/weixin/mobile.js"></script>
<meta name="keywords" content="关键词"><meta name="description" content="描述"></head><body style="background-color:#f1f1f1;">
<div class="classreturn loginsignup">
    <div class="ds-in-bl return"><a href="javascript:history.back(-1);"><img src="<?php echo env('APP_URL'); ?>/images/weixin/return.png" alt="返回"></a></div>
    <div class="ds-in-bl tit center"><span>商品详情</span></div>
    <div class="ds-in-bl nav_menu"><a href="javascript:void(0);"><img src="<?php echo env('APP_URL'); ?>/images/weixin/class1.png" alt="菜单"></a></div>
</div>
<div class="flool tpnavf cl">
    <div class="nav_list">
        <ul>
        <a href="<?php echo route('weixin'); ?>"><li><img src="<?php echo env('APP_URL'); ?>/images/weixin/home_icon.png"><p>首页</p></li></a>
        <a href="/Weixin/index.php?m=Store&amp;a=index"><li><img src="<?php echo env('APP_URL'); ?>/images/weixin/brand_icon.png"><p>分类</p></li></a>	
        <a href="/Weixin/index.php?m=Cart&amp;a=index"><li><img src="<?php echo env('APP_URL'); ?>/images/weixin/car_icon.png"><p>购物车</p></li></a>	
        <a href="/Weixin/index.php?m=User&amp;a=index"><li><img src="<?php echo env('APP_URL'); ?>/images/weixin/center_icon.png"><p>个人中心</p></li></a></ul>
        <div class="cl"></div>
    </div>
</div>

<!--商品详情-start-->
<div class="goods_detail">
<!--顶部滚动广告栏-start-->
<div class="tbanner">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo $post['goods_img']; ?>" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo env('APP_URL'); ?>/css/swiper.min.css">
<style>
.swiper-container{width:100%;height:90vw;}
.swiper-slide{text-align:center;font-size:18px;background:#fff;}
.swiper-slide img{width:100%;height:100vw;}
</style>
<script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/swiper.min.js"></script>
<script>
//Swiper轮播
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    autoHeight: true, //enable auto height
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true,
    centeredSlides: true,
    autoplay: 3000,
    autoplayDisableOnInteraction: false
});
</script>
<!--顶部滚动广告栏-end-->

<div class="goods-header">
    <span class="wish-add fr wish-add-activate">收藏</span><h1 class="title"><?php echo $post['title']; ?></h1>
    
    <div class="goods-price">
        <div class="current-price">
            <span>¥</span><i class="price"><?php echo $post['price']; ?></i>
        </div>
        <span class="btn-retail">门店有售</span>
        
    </div>
    
    <div class="stock-detail table-cell">
        <dl>
            <dt>运费:</dt>
            <dd>免运费</dd>
        </dl>
        <dl>
            <dt>库存:</dt>
            <dd><?php echo $post['goods_number']; ?></dd>
        </dl>
        <dl>
            <dt>销量:</dt>
            <dd><?php echo $post['sale']; ?></dd>
        </dl>
    </div>
    
    <div class="goods-comment">用户评价<span>共0条评价 ></span></div>
</div>

<div class="goods-content">
    <div class="module-title">宝贝详情</div>
    <div class="module-content"><?php echo $post['body']; ?></div>
</div>
</div>
<!--商品详情-end-->

<!-- 底部弹出层 -->
<div class="pop_box" style="display:none;" id="master">
  <div class="goods_info_pop" style="padding-bottom:0px;">
     <div class="cart_list" >                
        <div class="cart_list_info goods_list_item">
          <div class="cart_list_img">
            <img src="http://www.yst.com/yst/Public/kindeditor/attached/image/20160227/20160227031317_35279.png"  style=" width:100%; height:100%;">
          </div>
          <div class="cart_goods_info">
            <div class="cart_list_name">
              <div class="cart_detail_gray" style=""><span style="" class="cart_detail_gray_name">1232</span></div>
              <div class="cart_detail_gray" style="">                        
                <p class="cart_sum" id="total_price1_296">￥<span class="attr_price">1.00</span></p>
                <p class="goods_type">库存<span class="attr_storage">10</span>件</p>
              </div>
            </div>
          </div>  <!--cart_info-->
        </div>   
      </div><!--item-->  
            
      <div class="pop_num">
        <span>数量</span>
        <div class="pop_sum">
          <div class="cart_num_control pop_sum">
            <input type="button" value="-" class="cart_num_button" onclick="cart_num_sub()"> 
            <input type="text" value="1" class="cart_num_text" id="num"> 
            <input type="button" value="+" class="cart_num_button" onclick="cart_num_add()"> 
          </div>
        </div>
      </div>
      <input type="hidden" id="resultid" value="">
      <input type="hidden" id="storage" value="10">
      <div class="registered_btn pop_btn confirmBtn" style="display:none;" onclick="dosubmit()">
      	<input type="hidden" name="cartType" id="cartType" value="">
        <span>确定</span>
      </div>
   </div>
   <div class="mask" onclick="masterunshow()"></div>
</div>
<script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/layer/mobile/layer.js"></script>
<script>
function mastershow(confirm)
{
    /*如果已经选择属性，则弹出确定按钮，否则弹出加入购物车和立即购买按钮  */
    var selectname = $("#selectname").html();
    if(selectname||confirm==1||confirm==2){
        $("#cartType").val(confirm);
        $(".btnBox").hide();
        $(".confirmBtn").show();
    }else{
        $(".btnBox").show();
        $(".confirmBtn").hide();
    }
    $("#master").show();
}
function masterunshow()
{
    $("#master").hide();
}
function cart_num_sub()
{
    var num = $('#num').val();
    if(num>1){
        num = parseInt(num)-1;
        $('#num').val(num);
    }
}
function cart_num_add()
{
    var storage = $('#storage').val();
    var num = $('#num').val();
    num = parseInt(num)+1;
    if(storage<num){
        /* jAlert("库存量不足！", alert_title); */
        messageNotice("库存量不足！");
        return false;
    }
    $('#num').val(num);
}
</script>

<!-- 底部按钮开始 -->
<div class="foohi">
<div class="bottom_tool_black">
 <div class="bottom_tool_white">
  <ul>
    <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=386092124&amp;site=qq&amp;menu=yes"><li>
    <img src="<?php echo env('APP_URL'); ?>/images/weixin/goods_ic_kefu.png">
    <p>客服</p>
    </li></a>
    <a href="<?php echo route('weixin_cart'); ?>"><li>
        <img src="<?php echo env('APP_URL'); ?>/images/weixin/goods_ic_cart.png">
        <p>购物车</p>
    </li></a>
  </ul>
 </div>
 <div class="bottom_tool_btn">
  <ul>
   <a href="javascript:mastershow(1);"><li class="bg_c_yellow">加入购物车</li></a>
   <a href="javascript:mastershow(2);"><li class="bg_c_orange">立即购买</li></a>
  </ul>
 </div>
</div>
</div>
<!-- 底部按钮结束 -->
</body></html>