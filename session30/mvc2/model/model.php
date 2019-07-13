<?php 
	include 'config/connectdb.php';
	class Model extends ConnectDB {

		public function getNewsPage(){
			$sql = "SELECT * FROM news";
			$newsList = mysqli_query($this->connect(), $sql);
			return $newsList;
		}
		public function getNewsDetail($id) {
			$newsDetail = 'Chi tiet tin tức '.$id;
			return $newsDetail;
		}

		public function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		public function addNews($name, $description, $date, $image) {
			$sql = "INSERT INTO news (name, description, date, image) VALUES ('$name', '$description', '$date', '$image')";
			return mysqli_query($this->connect(), $sql);
		}
		public function getNews($id) {
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}

		public function editNews($id, $name, $description) {
			$sql = "UPDATE news SET name = '$name', description = '$description' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}


		public function getHomePage(){
			$a = 5;
			$b = 7;
			return $a * $b;
		}

		public function getProductPage() {
			$sql = "SELECT * FROM products";
			$productList = mysqli_query($this->connect(), $sql);
			return $productList;
		}

		public function getProductDetail($id) {
			$productDetail = 'Chi tiet san pham '.$id;
			return $productDetail;
		}

		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		public function addProduct($name, $description, $price, $image, $created) {
			$sql = "INSERT INTO products(name, description, price, image, created) VALUES ('$name', '$description', $price, '$image', '$created')";
			return mysqli_query($this->connect(), $sql);
		}
		public function getProduct($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}

		public function editProduct($id, $name, $description, $price) {
			$sql = "UPDATE products SET name = '$name', description = '$description', price = $price WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

	}
?>