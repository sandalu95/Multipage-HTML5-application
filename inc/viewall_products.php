

<div class="scroll" id="bodyright">
	<h3>Add New Products From Here</h3>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Sr No.</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Product Name</th>
				<th>Product Images</th>
				<th>Feature 1</th>
				<th>Feature 2</th>
				<th>Feature 3</th>
				<th>Feature 4</th>
				<th>Feature 5</th>
				<th>Price</th>
				<th>Model No</th>
				<th>Warranty</th>
				<th>Keyword</th>
				<th>Added Date</th>
			</tr>
			<?php include("inc/function.php"); echo viewall_products(); ?>
		</table>
		
	</form>
</div>
<?php //echo add_pro(); ?>

