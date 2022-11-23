<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>


<?php
$login_check = Session::get('customer_login');
if ($login_check == false) {
	header('Location:login.php');
}


?>
<?php
if (isset($_GET['confirmid'])) {
	$id = $_GET['confirmid'];
	$time = $_GET['time'];
	$price = $_GET['price'];
	$shifted_confirm = $ct->shifted_confirm($id, $time, $price);
}
?>
<div class="main">
	<div class="content">
		<div class="cartoption">
			<div class="cartpage">
				<h2>Đơn hàng của bạn</h2>

				<table class="tblone">
					<tr>
						<th width="10%">ID</th>
						<th width="20%">Tên sản phẩm</th>
						<th width="10%">Hình ảnh</th>
						<th width="15%">Giá</th>
						<th width="15%">Số Lượng</th>
						<th width="10%">Thời gian</th>
						<th width="10%">Trạng thái</th>
					</tr>
					<?php
					$customer_id = Session::get('customer_id');
					$get_cart_ordered = $ct->get_cart_ordered($customer_id);
					if ($get_cart_ordered) {
						$i = 0;
						$qty = 0;
						$total = 0;
						while ($result = $get_cart_ordered->fetch_assoc()) {
							$i++;
							$total = $result['price'] * $result['quantity'];
					?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></td>
								<td><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></td>
								<td>


									<?php echo $result['quantity'] ?>


								</td>
								<td><?php echo $fm->formatDate($result['date_order']) ?></td>
								<td>
									<?php
									if ($result['status'] == '0') {
										echo 'Đang chờ';
									} elseif ($result['status'] == 1) {
									?>
										<span>Đã chuyển hàng</span>

									<?php
									} elseif ($result['status'] == 2) {
										echo 'Đã Nhận';
									}

									?>


								</td>
							</tr>
					<?php

						}
					}
					?>

				</table>





			</div>
			<div class="shopping">
				<div class="shopleft">
					<a href="index.php"> <img src="images/shop.png" alt="" /></a>
				</div>

			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php
include 'inc/footer.php';

?>