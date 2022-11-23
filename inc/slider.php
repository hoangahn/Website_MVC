<div class="header_bottom">
	<div class="header_bottom_left">
		<div class="section group">
			<?php
			$getLastestAsus = $product->getLastestAsus();
			if ($getLastestAsus) {
				while ($resultasus = $getLastestAsus->fetch_assoc()) {
			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"> <img src="admin/uploads/<?php echo $resultasus['image'] ?>" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>ASUS</h2>
							<p><?php echo $resultasus['productName'] ?></p>
							<div class="button"><span><a href="details.php?proid=<?php echo $resultasus['productId']  ?>">Mua ngay</a></span></div>
						</div>
					</div>
			<?php
				}
			}
			?>
			<?php
			$getLastestMsi = $product->getLastestMsi();
			if ($getLastestMsi) {
				while ($resultmsi = $getLastestMsi->fetch_assoc()) {
			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"><img src="admin/uploads/<?php echo $resultmsi['image'] ?>" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>MSI</h2>
							<p><?php echo $resultmsi['productName'] ?></p>
							<div class="button"><span><a href="details.php?proid=<?php echo $resultmsi['productId']  ?>">Mua ngay</a></span></div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
		<div class="section group">
			<?php
			$getLastestOp = $product->getLastestApple();
			if ($getLastestOp) {
				while ($resultap = $getLastestOp->fetch_assoc()) {
			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"> <img src="admin/uploads/<?php echo $resultap['image'] ?>" alt="" /> </a>
						</div>
						<div class="text list_2_of_1">
							<h2>APPLE</h2>
							<p><?php echo $resultap['productName'] ?></p>
							<div class="button"><span><a href="details.php?proid=<?php echo $resultap['productId']  ?>">Mua ngay</a></span></div>
						</div>
					</div>
			<?php
				}
			}
			?>
			<?php
			$getLastestLenovo = $product->getLastestLenovo();
			if ($getLastestLenovo) {
				while ($resultlenovo = $getLastestLenovo->fetch_assoc()) {
			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"><img src="admin/uploads/<?php echo $resultlenovo['image'] ?>" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>LENOVO</h2>
							<p><?php echo $resultlenovo['productName'] ?></p>
							<div class="button"><span><a href="details.php?proid=<?php echo $resultlenovo['productId']  ?>">Mua ngay</a></span></div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_bottom_right_images">
		<!-- FlexSlider -->

		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<?php
					$get_slider = $product->show_slider();
					if ($get_slider) {
						while ($result_slider = $get_slider->fetch_assoc()) {

					?>
							<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt="<?php echo $result_slider['sliderName'] ?>" /></li>
					<?php
						}
					}

					?>
				</ul>
			</div>
		</section>
		<!-- FlexSlider -->
	</div>
	<div class="clear"></div>
</div>