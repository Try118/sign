<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>后台登录-会场管理-添加会场-添加</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<!--<link rel="stylesheet" href="css/font.css" />-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/font.css" />
		<!--<link rel="stylesheet" href="css/xadmin.css" />-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/xadmin.css" />
		<!--<link rel="stylesheet" href="css/swiper.css">-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/swiper.css" />
		<!--<script type="text/javascript" src="js/jquery.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/jquery.js"></script>
		<!--<script type="text/javascript" src="js/swiper.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/swiper.js"></script>
		<!--<script src="./lib/layui/layui.js" charset="utf-8"></script>-->
		<!--<script src="lib/layui/layui.js" charset="utf-8"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/lib/layui/layui.js"></script>
		<!--<script type="text/javascript" src="js/xadmin.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/xadmin.js"></script>
		<!--   <script type="text/javascript" src="./js/xadmin.js"></script>-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/seat.css" />
		<script type="text/javascript" src="../../../../../Public/sign/js/jquery.seat-charts.min.js"></script>
	</head>

	<body>
		<div class="layui-form-item" style="display: none;">
			<label for="level-kiss" class="layui-form-label">
                <span class="x-red">*</span>座位数
            </label>
			<div class="layui-input-inline">
				<input type="text" name="seat_number" id="find" required="" value="<?php echo ($res); ?>" lay-verify="required" autocomplete="off" class="layui-input">
			</div>
		</div>
		<div id="main">
			<div class="demo">
				<div id="seat-map">
					<div class="front" style="margin-left: auto;margin-right: auto;">屏幕</div>
				</div>

				<!--<div style="clear:both"></div>-->
			</div>

			<br/>
		</div>

		<script>
			/*用户-添加*/
			function member_add(title, url, w, h) {
				x_admin_show(title, url, w, h);
			}
			/*用户-查看*/
			function member_show(title, url, id, w, h) {
				x_admin_show(title, url, w, h);
			}
		</script>
		<script>
			var myarray = new Array();
			$(document).ready(function() {
				//				$("#level-name").click(function() {
				var room_id = $("#find").val(); //获取  

				//					alert(room_id);
				//					myarray = aaaasb;
				//					aaaasb[0] = room_id;
				//				alert(myarray);
				//var k=12312;
				//				alert(1111);

				$.ajax({
					url: "<?php echo U('Roommain/find_location');?>",
					//data: { "selectedIDs": _list },  
					data: {
						data: JSON.stringify(room_id)
					},
					dataType: "json",
					// 				  processData: false,  // 不处理数据
					type: "GET",
					//traditional: true,  
					success: function(responseJSON) {
						// your logic 
						//							alert(responseJSON);
						myarray = responseJSON;
						//							alert(myarray);
						var $cart = $('#selected-seats'), //座位区
							$counter = $('#counter'), //票数
							$total = $('#total'); //总计金额
						//__________

						var map = new Array();
						map = myarray;
						var sc = $('#seat-map').seatCharts({
							map,

							naming: {
														left:false,
								top: false,
								getLabel: function(character, row, column) {
//									return column;
								}

							},
							legend: { //定义图例
								node: $('#legend'),
								items: [
									['a', 'available', '可选座'],
									['a', 'unavailable', '已选座']
								]
							},
							click: function() { //点击事件
								if(this.status() == 'available') { //可选座
									//$('<li>' + (this.settings.row + 1) + '排' + this.settings.label + '座</li>')
									$('<li>' + (this.settings.row + 1) + '排' + this.settings.label + '座</li>')
										.attr('id', 'cart-item-' + this.settings.id)
										.data('seatId', this.settings.id)
										.appendTo($cart);

									$counter.text(sc.find('selected').length + 1);
									$total.text(recalculateTotal(sc) + price);

									return 'selected';
								} else if(this.status() == 'selected') { //已选中
									//减去被删去的座位号
									//							index--;

									//更新数量
									$counter.text(sc.find('selected').length - 1);
									//更新总计
									$total.text(recalculateTotal(sc) - price);

									//删除已预订座位
									$('#cart-item-' + this.settings.id).remove();
									//可选座
									return 'available';
								} else if(this.status() == 'unavailable') { //已售出
									return 'unavailable';
								} else {
									return this.style();
								}
							}
						});
						//已售出的座位'1_2', '4_4', '4_5', '6_6', '6_7', '8_5', '8_6', '8_7', '8_8', '10_1', '10_2'
						sc.get([]).status('unavailable');
						//								var sc = $('#seat-map').seatCharts({
						//										myarray,
					}
				});
				//				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				//存储被选的座位号

			});
			//计算总金额
			function recalculateTotal(sc) {
				var total = 0;
				sc.find('selected').each(function() {
					total += price;
				});

				return total;
			}
		</script>

	</body>

</html>