</div>
<div class="footer">
	<div class="wrapper">
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<h4>Thông tin SV</h4>
				<ul>
					<li><a href="#">Cao Hoàng Anh</a></li>
					<li><a href="#">Lê Tuấn Cảnh</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>MSSV</h4>
				<ul>
					<li><a href="about.php">B1910029</a></li>
					<li><a href="faq.php">B1910345</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Học Phần</h4>
				<ul>
					<li><a href="#">CT275 - 04</a></li>
					<li><a href="#">Công nghệ Web</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Tech Store</h4>
				<ul>
					<?php
					$login_check = Session::get('customer_login');
					if ($login_check) {
						echo '<li><a href="cart.php">Giỏ hàng</a></li>';
					}
					?>
					</li>

					<li><a href="contact.php">Hổ trợ khách hàng</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function() {
		SyntaxHighlighter.all();
	});
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
</body>

</html>