
<?php include 'common/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List products</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th><a href="admin.php?controller=products&action=add_product">Add Product</a></th>
                </tr>
               <?php 
               if ($listProducts->num_rows > 0) {
               	while($row = $listProducts->fetch_assoc()) {
               		$id = $row['id'];
               ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <?php while ($row_ct = $listCategory->fetch_assoc()) {
                    	# code...
                    	if ( $row_ct['id'] === $row['category_id']) {
                    		?>
                    		<td><?php echo $row_ct['name']?></td>
                    	<?php 
                    	}
                    } ?>
                    <td><?php echo $row['title']?></td>
                    <td><img src="webroot/uploads/<?php echo $row['image']?>" alt="image"></td>
                    <td><?php echo $row['price']?></td>
                    <td><a href="admin.php?controller=products&action=edit_product&id=<?php echo $id?>">Edit</a> | <a href="admin.php?controller=user&action=delete_product&id=<?php echo $id?>">Delete</a></td>
                  </tr>
                <?php 
                	}
                } else {?>
                <tr>
                	<td colspan="4">Khong co product nao</td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'common/footer.php';?>