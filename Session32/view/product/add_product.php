<?php require 'common/header.php';?>
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <h3 class="login-box-msg">Add Product</h3>

    <form action="admin.php?controller=products&action=add_product" method="post" enctype="multipart/form-data">
      <p>
		Category_id
		<input type="text" name="category_id">
	</p>
	<p>
		Title
		<input type="text" name="title">
	</p>
	<p>
		Description
		<input type="text" name="description">
	</p>
	<p>
		Image
		<input type="file" name="image">
	</p>
    <p>
    Price
    <input type="text" name="price">
  </p>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="add_product">Add product</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php include 'common/footer.php';?>