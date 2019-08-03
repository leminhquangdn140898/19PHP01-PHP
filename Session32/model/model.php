<?php 
	include 'config/database.php';

	class Model extends DatabaseConnect {

		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}

		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser->fetch_assoc();
		}

		function register($username, $password, $avatar, $name, $level) {
			$sql = "INSERT INTO users(username, password, avatar, name, level) VALUES ('$username', '$password', '$avatar', '$name', '$level')";
			return mysqli_query($this->connect(), $sql);
		}

		function get_edit_user($id){
			$sql = "SELECT * FROM users WHERE id = $id";
			$user = mysqli_query($this->connect(), $sql);
			return $user->fetch_assoc();
		}
		function post_edit_user($id, $avatar, $name, $level){
			$sql = "UPDATE users SET avatar = '$avatar', name = '$name', level = '$level' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function delete_user($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function add_product($category_id, $title, $description, $image, $price) {
			$sql = "INSERT INTO products(category_id, title, description, image, price) VALUES ('$category_id', '$title', '$description', '$image', '$price')";
			return mysqli_query($this->connect(), $sql);
		}

		public function listProducts() {
			$sql = "SELECT * FROM products";
			$listProducts = mysqli_query($this->connect(), $sql);
			return $listProducts;
		}

		public function listCategory() {
			$sql = "SELECT * FROM product_categories";
			$listCategory = mysqli_query($this->connect(), $sql);
			return $listCategory;
		}

	}
?>