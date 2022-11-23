<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<style type="text/css">
	.text_error {
		font-size: 30px;
		color: blueviolet;
		text-align: center;
	}
</style>

<div class="main">
	<div class="content">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$tukhoa = $_POST['tukhoa'];
			$search_product = $product->search_product($tukhoa);
		}
		?>
		<div class="content_top">

			<div class="heading">
				<h3>Từ khóa tìm kiếm : <?php echo $tukhoa ?></h3>
			</div>

			<div class="clear"></div>

		</div><br>

		<div class="section group">
			<?php

			if ($search_product) {
				while ($result = $search_product->fetch_assoc()) {
			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="preview-3.php"><img src="admin/uploads/<?php echo $result['image'] ?>" width="200px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50); ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Details</a></span></div>
					</div>
			<?php
				}
			} else {
				echo '<p class="text_error">Oh no! Hãy Nhập Lại Từ Khóa Khác Xem Nào !!</div><p>';
			}
			?>
		</div>



	</div>
</div>
<?php
include 'inc/footer.php';

?>