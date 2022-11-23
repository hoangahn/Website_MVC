<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	/**
	 * 
	 */
	class brand
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_brand($brandName){

			$brandName = $this->fm->validation($brandName);
			$brandName = mysqli_real_escape_string($this->db->link, $brandName);
			
			if(empty($brandName)){
				$alert = "<span class='error'>TÊN THƯƠNG HIỆU KHÔNG THỂ TRỐNG</span>";
				return $alert;
			}else{
				$query = "INSERT INTO tbl_brand(brandName) VALUES('$brandName')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>THÊM TÊN THƯƠNG HIỆU THÀNH CÔNG</span>";
					return $alert;
				}else{
					$alert = "<span class='error'>THÊM TÊN THƯƠNG HIỆU KHÔNG THÀNH CÔNG</span>";
					return $alert;
				}
			}
		}
		public function show_brand(){
			$query = "SELECT * FROM tbl_brand order by brandId desc";
			$result = $this->db->select($query);
			return $result;
		}
		public function getbrandbyId($id){
			$query = "SELECT * FROM tbl_brand where brandId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}

		public function update_brand($brandName,$id){

			$brandName = $this->fm->validation($brandName);
			$brandName = mysqli_real_escape_string($this->db->link, $brandName);
			$id = mysqli_real_escape_string($this->db->link, $id);

			if(empty($brandName)){
				$alert = "<span class='error'>Brand must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_brand SET brandName = '$brandName' WHERE brandId = '$id'";
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>SỬA TÊN THƯƠNG HIỆU THÀNH CÔNG</span>";
					return $alert;
				}else{
					$alert = "<span class='error'>SỬA TÊN THƯƠNG HIỆU KHÔNG THÀNH CÔNG</span>";
					return $alert;
				}
			}

		}
		public function del_brand($id){
			$query = "DELETE FROM tbl_brand where brandId = '$id'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>XÓA TÊN THƯƠNG HIỆU THÀNH CÔNG</span>";
				return $alert;
			}else{
				$alert = "<span class='error'>XÓA TÊN THƯƠNG HIỆU KHÔNG THÀNH CÔNG</span>";
				return $alert;
			}
			
		}
		


	}
?>