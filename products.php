<?php
include 'inc/header.php';
include 'inc/slider.php';
?>
<style type="text/css">
	div.content_menuu ul li {
		display: inline-block;
		font-size: 20px;
		text-align: center;
		background-color: #00bff0;
		padding: 10px 34px;
		border-radius: 10px;
	}
</style>

<div class="main">
	<div class="content">
		<div class="content_menuu">
			<ul>
				<?php
				$getall_category = $cat->show_category_fontend();
				if ($getall_category) {
					while ($result_allcat = $getall_category->fetch_assoc()) {
				?>
						<li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo $result_allcat['catName'] ?></a></li>
				<?php
					}
				}
				?>
			</ul>
		</div>
		<div class="content_top">
			<div class="heading">
				<h3>SẢN PHẨM ASUS</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$product_laptop_asus = $product->getproduct_laptop_Asus();
			if ($product_laptop_asus) {
				while ($result = $product_laptop_asus->fetch_assoc()) {

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" height="180" width="150px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
				}
			}
			?>
		</div>

		<div class="content_bottom">
			<div class="heading">
				<h3>SẢN PHẨM MSI</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$product_laptop_msi = $product->getproduct_laptop_Msi();
			if ($product_laptop_msi) {
				while ($result = $product_laptop_msi->fetch_assoc()) {

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" height="180" width="150px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
				}
			}
			?>
		</div>

		<div class="content_bottom">
			<div class="heading">
				<h3>SẢN PHẨM LENOVO</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$product_laptop_lenovo = $product->getproduct_laptop_Lenovo();
			if ($product_laptop_lenovo) {
				while ($result = $product_laptop_lenovo->fetch_assoc()) {

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" height="180" width="150px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
				}
			}
			?>
		</div>

		<div class="content_bottom">
			<div class="heading">
				<h3>SẢN PHẨM APPLE</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$product_laptop_apple = $product->getproduct_laptop_Apple();
			if ($product_laptop_apple) {
				while ($result = $product_laptop_apple->fetch_assoc()) {

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" height="180" width="150px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
				}
			}
			?>
		</div>




	</div>
</div>

<?php
include 'inc/footer.php';

?>