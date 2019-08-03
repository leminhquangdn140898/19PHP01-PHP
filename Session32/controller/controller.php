<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'index';

			switch ($controller) {
				case 'home':
					# code...
					include 'view/home/home.php';
					break;
				case 'user':
					# code...
					$this->handleUser($action, $model);
					break;
				case 'news':
					# code...
					$this->handleNews();
					break;
				case 'products':
					$this->handleProducts($action, $model);
					# code...
					break;
				
				default:
					# code...
					break;
			}
		}

		function handleUser($action, $model) {
			switch ($action) {
				case 'list_user':
					$this->checkLoginSession();
					# code...
					$listUser = $model->listUser();
					include 'view/user/list_user.php';
					break;
				case 'login':
					# code...
					if (isset($_POST['login'])) {

						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$checkLogin = $model->checkLogin($username, $password);

						if($checkLogin['id'] != ''){
							$_SESSION['login'] = $username;
							$_SESSION['name'] = $checkLogin['name'];

							// var_dump($_SESSION['login']);
							// exit();
							header("Location: admin.php?controller=user&action=list_user");
						} else {
							header("Location: admin.php?controller=user&action=login");
						}
						# code...
					}
					include 'view/user/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					unset($_SESSION['name']);
					header("Location: admin.php?controller=user&action=login");
					break;
				case 'register':
					# code...
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$avatar = 'default.jpg';
						if ($_FILES['avatar']['error'] == 0) {
				            $avatar = uniqid().'_'.$_FILES['avatar']['name'];
				            move_uploaded_file($_FILES['avatar']['tmp_name'], 'webroot/uploads/'.$avatar);
				          }
				        $name = $_POST['name'];
				        $level = '0';
						if($model->register($username, $password, $avatar, $name, $level) === TRUE){
							header("Location: admin.php?controller=user&action=login");
						}
						# code...
					}
					include 'view/user/register.php';
					break;
				case 'edit_user':
					# code...
					$id = $_GET['id'];
					$user = $model->get_edit_user($id);
					include 'view/user/edit_user.php';

					if (isset($_POST['edit_user'])) {
						$avatar = $user['avatar'];
						if ($_FILES['avatar']['error'] == 0) {
				            $avatar = uniqid().'_'.$_FILES['avatar']['name'];
				            move_uploaded_file($_FILES['avatar']['tmp_name'], 'webroot/uploads/'.$avatar);
				          }
				        $name = $_POST['name'];
				        $level = $_POST['level'];
						if($model->post_edit_user($id, $avatar, $name, $level) === TRUE){
							header("Location: admin.php?controller=user&action=list_user");
						}
						# code...
					}
					break;
				case 'delete_user':
					$id = $_GET['id'];
					if ($model->delete_user($id) === TRUE) {
						header("Location: admin.php?controller=user&action=list_user");
					}
					break;
				default:
					header("Location: admin.php?controller=user&action=login");
					# code...
					break;
			}
		}

		function handleNews() {

		}

		function handleProducts($action, $model){
			switch ($action) {
				case 'add_product':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_product'])) {
						$category_id = $_POST['category_id'];
						$title = $_POST['title'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						if ($_FILES['image']['error'] == 0) {
				            $avatar = uniqid().'_'.$_FILES['image']['name'];
				            move_uploaded_file($_FILES['image']['tmp_name'], 'webroot/uploads/'.$image);
				          }
				        $price = $_POST['price'];
						if($model->add_product($username, $password, $avatar, $name, $level) === TRUE){
							header("Location: admin.php?controller=products&action=list_products");
						}
					}
					include 'view/user/add_user.php';
					break;
				case 'list_products':
					$this->checkLoginSession();
					# code...
					$listProducts = $model->listProducts();
					$listCategory = $model->listCategory();
					include 'view/product/list_product.php';
					break;

				case 'edit_product':
					# code...
					$id = $_GET['id'];
					$user = $model->get_edit_user($id);
					include 'view/user/edit_user.php';

					if (isset($_POST['edit_user'])) {
						$avatar = $user['avatar'];
						if ($_FILES['avatar']['error'] == 0) {
				            $avatar = uniqid().'_'.$_FILES['avatar']['name'];
				            move_uploaded_file($_FILES['avatar']['tmp_name'], 'webroot/uploads/'.$avatar);
				          }
				        $name = $_POST['name'];
				        $level = $_POST['level'];
						if($model->post_edit_user($id, $avatar, $name, $level) === TRUE){
							header("Location: admin.php?controller=user&action=list_user");
						}
						# code...
					}
					break;
				case 'delete_user':
					$id = $_GET['id'];
					if ($model->delete_user($id) === TRUE) {
						header("Location: admin.php?controller=user&action=list_user");
					}
					break;
				default:
					header("Location: admin.php?controller=user&action=login");
					# code...
					break;
			}
		}

		function checkLoginSession() {
			if (!isset($_SESSION['login'])) {
				header("Location: admin.php?controller=user&action=login");
			}
		}
	}
?>