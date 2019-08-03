<?php include 'common/header.php';?>
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <h3 class="login-box-msg">Edit User</h3>
		<form action="admin.php?controller=user&action=edit_user&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
			<p>
				Avatar
				<input type="file" name="avatar">
				<img src="webroot/uploads/<?php echo $user['avatar']?>">
			</p>
			<p>
				Name
				<input type="text" name="name" value="<?php echo $user['name']?>">
			</p>
			<p>
				Level
				<input type="text" name="level" value="<?php echo $user['level']?>">
			</p>
			<p>
				<input type="submit" name="edit_user" value="Edit user">
			</p>
		</form>
		  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<?php include 'common/footer.php';?>