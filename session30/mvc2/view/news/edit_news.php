<h1>Edit news page</h1>
<form action="index.php?action=edit_news&id=<?php echo $id?>" method="post">
	<p>News name
		<input type="text" name="name" value="<?php echo $editNews['name']?>">
	</p>
	<p>Description
		<textarea name="description" rows="8"><?php echo $editNews['description']?></textarea>
	</p>
	<!-- <p>Date
		<input type="text" name="date_news" value="<?php //echo $editNews['date']?>">
	</p> -->
	<p><input type="submit" name="edit_news_form" value="Edit news"></p>
</form>