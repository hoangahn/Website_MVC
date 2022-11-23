<?php 
	include 'inc/header.php';
?>
<?php
		$login_check = Session::get('customer_login'); 
		if($login_check){
			header('Location:index.php');
		}
?>
<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập</h3>
        	<?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Email....">
                    <input  type="password" name="password" class="field"  placeholder="Mật khẩu...." >
                 
                 <p class="note">Nếu bạn quên mật khẩu, chỉ cần nhập email của bạn và nhấp vào <a href="#">đây.</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
             </form>
          </div>
         <?php

         ?> 
    	<div class="register_account">
    		<h3>Đăng ký tài khoản</h3>
    		<?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Tên..." >
							</div>
							<div>
								<input type="text" name="email"  placeholder="Email..."  >
							</div>
							<div>
								<input type="text" name="address"  placeholder="Địa chỉ..."  >
							</div>
		    			 </td>
		    			<td>						
							<div>
								<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Chọn Thành phố</option>   

									<option value="hcm">TPHCM</option>
									<option value="na">Nghệ An</option>
									<option value="hn">Hà Nội</option>
									<option value="dn">Đà Nẳng</option>
									<option value="dn">Cần Thơ</option>
									<option value="dn">Đồng Tháp</option>
									<option value="dn">An Giang</option>
								</select>
							</div>		        
				
							<div>
							<input type="text" name="phone"  placeholder="Điện Thoại..." >
							</div>
							
							<div>
								<input type="text" name="password"  placeholder="Mật khẩu..." >
							</div>
						</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Đăng ký"></div></div>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
