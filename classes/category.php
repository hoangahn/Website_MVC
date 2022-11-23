<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php
/**
 * 
 */
class category
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function insert_category($catName)
	{

		$catName = $this->fm->validation($catName);
		$catName = mysqli_real_escape_string($this->db->link, $catName);

		if (empty($catName)) {
			$alert = "<span class='error'>THƯ MỤC KHÔNG THỂ TRỐNG</span>";
			return $alert;
		} else {
			$query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
			$result = $this->db->insert($query);
			if ($result) {
				$alert = "<span class='success'>THÊM THƯ MỤC THÀNH CÔNG</span>";
				return $alert;
			} else {
				$alert = "<span class='error'>THÊM THƯ MỤC KHÔNG THÀNH CÔNG</span>";
				return $alert;
			}
		}
	}

	public function show_category()
	{
		$query = "SELECT * FROM tbl_category order by catId desc";
		$result = $this->db->select($query);
		return $result;
	}
	public function update_category($catName, $id)
	{

		$catName = $this->fm->validation($catName);
		$catName = mysqli_real_escape_string($this->db->link, $catName);
		$id = mysqli_real_escape_string($this->db->link, $id);

		if (empty($catName)) {
			$alert = "<span class='error'>THƯ MỤC KHÔNG THỂ TRỐNG</span>";
			return $alert;
		} else {
			$query = "UPDATE tbl_category SET catName = '$catName' WHERE catId = '$id'";
			$result = $this->db->update($query);
			if ($result) {
				$alert = "<span class='success'>SỬA THƯ MỤC THÀNH CÔNG</span>";
				return $alert;
			} else {
				$alert = "<span class='error'>SỬA THƯ MỤC KHÔNG THÀNH CÔNG</span>";
				return $alert;
			}
		}
	}
	public function del_category($id)
	{
		$query = "DELETE FROM tbl_category where catId = '$id'";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<span class='success'>ĐÃ XÓA THƯ  MỤC THÀNH CÔNG</span>";
			return $alert;
		} else {
			$alert = "<span class='error'>XÓA THƯ  MỤC KHÔNG THÀNH CÔNG</span>";
			return $alert;
		}
	}
	public function getcatbyId($id)
	{
		$query = "SELECT * FROM tbl_category where catId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}
	public function show_category_fontend()
	{
		$query = "SELECT * FROM tbl_category order by catId desc";
		$result = $this->db->select($query);
		return $result;
	}
	public function get_product_by_cat($id)
	{
		$query = "SELECT * FROM tbl_product WHERE catId='$id' order by catId desc LIMIT 8";
		$result = $this->db->select($query);
		return $result;
	}
	public function get_name_by_cat($id)
	{
		$query = "SELECT tbl_product.*,tbl_category.catName,tbl_category.catId FROM tbl_product,tbl_category WHERE tbl_product.catId=tbl_category.catId AND tbl_product.catId ='$id' LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}
}
?>