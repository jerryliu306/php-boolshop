<?php
/* Smarty version 3.1.30, created on 2017-04-06 15:20:52
  from "D:\wamp\www\zwj\view\html\front\shopping_cart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5ec54117727_58733894',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7cb195f0b2139e54f2ddeaec1657e3d190752b57' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\shopping_cart.html',
      1 => 1491463238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5ec54117727_58733894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1015858e5ec5407f173_62653333';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城首页</title>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<!--<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/TweenMax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/plugins/ScrollToPlugin.min.js"><?php echo '</script'; ?>
> -->
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/TweenMax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/header.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/zwj/view/css/front/index.css"> 
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/footer.css">
	<link rel="stylesheet" href="/zwj/view/css/front/shopping_cart.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	
	<div class="content">
		<table border="1" cellspacing="0" style="width:100%;border:1px solid #808080;">
			<tr>
				<th align="center" style="width:20%;">商品名称</th>
				<th align="center" style="width:20%;">属性</th>
				<th align="center" style="width:15%;">价格</th>
				<th align="center" style="width:15%;">购买数量</th>
				<th align="center" style="width:15%;">小计</th>
				<th align="center" style="width:15%;">操作</th>
			</tr>
			<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'gouwuche\']->value, \'g\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'g\']->value) {
?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>

			<tr>
				<td align="center"><input type="hidden" value="<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
" class="goods_id"><input type="checkbox" style="position:relative;right:4px;top:-33px;" class="checkbox"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_img\']) {?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
<img src="/zwj/<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_img\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
" alt="" style="width:80px;height:80px;"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php } else { ?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
<img src="/zwj/view/images/front/no_picture.gif" alt="" style="width:80px;height:80px;"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php }?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
<div><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</div></td>
				<td align="center"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_desc\']) {?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
<div>颜色：<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_desc\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</div><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php }?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>

					<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'attr_name\']) {?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
<div><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_name\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
:<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_value\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</div><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php }?>/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</td>
				<td align="center" >&yen;<span class="price_one"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</span>元</td>
				<td align="center"><input type="text" value="<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'number\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
" style="width:60px;text-align:center;"  class="num_all" onkeydown="onlyNum();"><input type="hidden" value="<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'gouwuche_id\'];?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
" class="gouwuche_id1"></td>
				<td align="center">&yen;<span class="price_mul"><?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars[\'g\']->value[\'number\']*$_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\']));?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>
</span>元</td>
				<td align="center"><a href="javasript:void()" class="remove_one">移入收藏夹</a><br><a href="#" onclick="return confirm('确定删除该商品吗?')" class="del1">删除</a></td>
			</tr>
			<?php echo '/*%%SmartyNocache:1015858e5ec5407f173_62653333%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:1015858e5ec5407f173_62653333%%*/';?>

		</table>
		<a href="/index.php" class="continue" style="width:95px;height:25px;float:left;background:#6d7580;border-radius:3px;color:white;font-size:13px;font-weight:bold;text-align:center;line-height:25px;margin-top:7px;">继续购物</a><a href="" style="width:95px;height:25px;float:right;background:#6d7580;border-radius:3px;color:white;font-size:13px;font-weight:bold;text-align:center;line-height:25px;margin-top:7px;" class="qingkong">清空购物车</a><a href="javascript:void(0)" style="width:95px;height:25px;float:right;background:#6d7580;border-radius:3px;color:white;font-size:13px;font-weight:bold;text-align:center;line-height:25px;margin-right:4px;margin-top:7px;" class="genxin">更新购物车</a>
		<div class="clear"></div>
		<div class="jiesuan1">
			<div style="float:left;">&nbsp;<input type="checkbox" class="quanxuan">&nbsp;全选</div>
			<a href="javascript:void(0)" class="all_del" style="margin-left:13px;padding:0 13px;float:left;">删除</a>
			<a href="javascript:void(0)" class="remove_all" style="padding:0 13px;float:left;">移入收藏夹</a>
			<a href="" class="fenxiang" style="padding:0 13px;float:left;">分享</a>
			<div style="float:left;margin-left:390px;margin-right:20px;">已选商品&nbsp;<span class="yixuan" style="color:#ff4400;">0</span>&nbsp;件</div>
			<div style="float:left;">总金额：<span class="zongjine" style="color:#ff4400;">0.00</span></div>
			<div style="float:right;color:white;height:50px;text-align:center;background:#b0b0b0;line-height:50px;font-family;padding:0 33px;" class="jiesuan_goods">结算</div>
		</div>
	</div>
	
	<?php echo '<script'; ?>
 language=javascript>
	
function onlyNum() {
    if(!(event.keyCode==46)&&!(event.keyCode==8)&&!(event.keyCode==37)&&!(event.keyCode==39))
    if(!((event.keyCode>=48&&event.keyCode<=57)||(event.keyCode>=96&&event.keyCode<=105)))
    event.returnValue=false;
}
$(function(){
	var session_username=$('.session_username').html();
	
	$('.num_all').change(function(){
		var _this=$(this);
		var num_all1=$(this).val();
		var gouwuche_id=$(this).next().val();
		     $.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'json',
					async:false,
					data:{'session_username':session_username,'act':'select','gouwuche_id':gouwuche_id},
					success:function(data){
						
								if(num_all1>parseInt(data['sum'])){
									_this.val(1);
									var price_one=parseFloat(_this.parent().parent().find('.price_one').html());
									_this.parent().parent().find('.price_mul').html((parseInt(1)*price_one).toFixed(2));
								}else if(isNaN(num_all1)||num_all1=='0'){
									_this.val(1);
									var price_one=parseFloat(_this.parent().parent().find('.price_one').html());
									_this.parent().parent().find('.price_mul').html((parseInt(1)*price_one).toFixed(2));
								}else{
									_this.val(num_all1);
									var price_one=parseFloat(_this.parent().parent().find('.price_one').html());
									_this.parent().parent().find('.price_mul').html((parseInt(num_all1)*price_one).toFixed(2));

								}
							}
					});	
	});
	
	$('.del1').click(function(){
		var gouwuche_id=$(this).parent().parent().find('.gouwuche_id1').val();
				$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'act':'del','gouwuche_id':gouwuche_id},
						success:function(data){
									window.location.reload();
							}
						});
	});
	// 清空购物车
	$('.qingkong').click(function(){
				$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'act':'clear','session_username':session_username},
						success:function(data){
									window.location.reload();
							}
						});
	});
	//判断checkboxed是否选中
	$('.checkbox').click(function(){
		var num=0;
		var price_all=0.00;
		//判断所有行的checkbox是否都选中都选中的话下面全选打钩,1表示有没选中
		var quanxuan_status=0;
		$('tr>td>input.checkbox').each(function(){
			if(!$(this).is(':checked')){
				quanxuan_status=1;
			}
		});
		if(quanxuan_status==0){
			$('.quanxuan').get(0).checked=true;
		}
		if($(this).is(":checked")){
			
			var num1=parseInt($('.yixuan').html())+1;
			$('.yixuan').html(num1);
			var price1=parseFloat($(this).parent().parent().find('.price_mul').html());
			$('.zongjine').html((parseFloat($('.zongjine').html())+price1).toFixed(2));
		}else{
			//全选的钩去掉
			$('.quanxuan').get(0).checked=false;
			var num1=parseInt($('.yixuan').html())-1;
			$('.yixuan').html(num1);
			var price1=parseFloat($(this).parent().parent().find('.price_mul').html());
			$('.zongjine').html((parseFloat($('.zongjine').html())-price1).toFixed(2));
		}
	});

	$('.quanxuan').click(function(){
		if($(this).is(":checked")){
			var num2=0;
			var price2=0.00;
			$('tr>td>input.checkbox').each(function(){
				this.checked=true;
				num2=num2+1;
				price2=price2+parseFloat($(this).parent().parent().find('.price_mul').html());
				

			});
			price2=(price2).toFixed(2);
			$(this).parent().parent().find('.yixuan').html(num2);
			$(this).parent().parent().find('.zongjine').html(price2);
		}else{
			$('tr>td>input.checkbox').each(function(){
				this.checked=false;
			});
			$(this).parent().parent().find('.yixuan').html(0);
			$(this).parent().parent().find('.zongjine').html('0.00');
		}
	});
	//更新购物车
	$('.genxin').click(function(){
		var genxin_status=0;
		$('tr>td>input.checkbox').each(function(){
			if($(this).is(':checked')){
				genxin_status=1;
				var gouwuche_id1=$(this).parent().parent().find('.gouwuche_id1').val();
				var num=$(this).parent().parent().find('.num_all').val();
					$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'act':'update','customer_name':session_username,'gouwuche_id':gouwuche_id1,'number':num},
						success:function(data){
									
							}
						});
			}
		});
		if(genxin_status==0){
			alert('请勾选要更新的商品');
		}else{
			alert('购物车更新成功');
			window.location.reload();
		}
	});
	//删除选中的checkbox
	$('.all_del').click(function(){
		var del_status=0;
		$('tr>td>input.checkbox').each(function(){

			if($(this).is(':checked')){
				del_status=1;
				var gouwuche_id1=$(this).parent().parent().find('.gouwuche_id1').val();
				
					$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'act':'del_condition','gouwuche_id':gouwuche_id1},
						success:function(data){
									
							}
						});
			}
		});
		if(del_status==0){
			alert('请选择要删除的商品');
		}else{
			alert('删除成功');
			window.location.reload();
		}
		
	});
	//单个移入收藏夹
	$('.remove_one').click(function(){
		var goods_id=$(this).parent().parent().find('.goods_id').val();
		var gouwuche_id=$(this).parent().parent().find('.gouwuche_id1').val();
				if($(this).parent().parent().find('.checkbox').is(':checked')){
					$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:true,
						data:{'act':'remove_one','goods_id':goods_id,'session_username':session_username,'gouwuche_id':gouwuche_id},
						success:function(data){

								alert('成功移入收藏夹');
								window.location.reload();

							}
						});
					}else{
						alert('你没有选择要移入收藏夹的商品');
					}
	});
	//选择相应的商品移入收藏夹
	$('.remove_all').click(function(){
		
		//var _this=$(this);
		var status=0;//0表示失败1表示成功
		$('tr>td>input.checkbox').each(function(){
			var goods_id=$(this).parent().parent().find('.goods_id').val();
		var gouwuche_id=$(this).parent().parent().find('.gouwuche_id1').val();
			if($(this).is(':checked')){
				status=1;
					$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:true,
						data:{'act':'remove_all','goods_id':goods_id,'session_username':session_username,'gouwuche_id':gouwuche_id},
						success:function(data){
							
								
								
							
							}
						});
					}
		});
		if(status==0){
			alert('你没有选择要移入收藏夹的商品');
			window.location.reload();
		}else{
			window.location.reload();
		}
	});
	//结算的点击事件
	$('.jiesuan_goods').click(function(){

		var check_status=0;
		/*0表示所有checkbox都没选中，1表示至少有一个checkbox选中*/
		var gouwuche_id_arr=new Array();
		$('tr>td>input.checkbox').each(function(){
			if($(this).is(':checked')){
				var gouwuche_id=$(this).parent().parent().find('.gouwuche_id1').val();
				check_status=1;
				gouwuche_id_arr.push(gouwuche_id);
			}
		});
		if(check_status==1){
		window.location.href='/zwj/controller/front/order.php?act=jiesuan&gouwuche_id='+gouwuche_id_arr;
		}else{
			alert('请选择您要结算的商品');
		}
	});
	//后退监听事件
	/*var counter = 0;
	if (window.history && window.history.pushState) {
		$(window).on('popstate', function () {
			window.history.pushState('forward', null, '#');
			window.history.forward(1);
			alert("不可回退");
		});
	}

	window.history.pushState('forward', null, '#'); //在IE中必须得有这两行
	window.history.forward(1);*/
	/*history.pushState('','','');
	window.onpopstate = function(event) {
		location.reload();
		event.preventDefault();

	};*/

});



<?php echo '</script'; ?>
>

	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
