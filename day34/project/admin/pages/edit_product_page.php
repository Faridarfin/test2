<?php 
if(isset($_GET['product_id'])){
	$productId = $_GET['product_id'];
	$product = $admin->getProductInfoById($productId);
}
$categoryList = $admin->viewAllCategory();
$manufacturerList = $admin->viewAllManufacturer();

if(isset($_POST['update_product'])){
	$message = $admin->updateProduct($_POST);
}
?>

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Eshopper</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Product</a></li>
</ul>

<h3 style="color: green;"><?php if(isset($message)){ echo $message; } ?></h3>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Add</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
			<input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Product Name </label>
				  <div class="controls">
					<input type="text" value="<?php echo $product['product_name'];?>" name="product_name" class="span6 typeahead" id="typeahead">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="typeahead">Select Category </label>
				  <div class="controls">
				  	<select name="category_id">
				  		<option>Select One</option>
				  		<?php foreach($categoryList as $category){

				  			?>
				  			<option <?php echo ($category['category_id'] == $product['category_id'])?'selected="true"':''; ?> value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
				  			<?php
				  			} ?>
				  	</select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Select Manufacturer </label>
				  <div class="controls">
					<select name="manufacturer_id">
				  		<option>Select One</option>
				  		<?php foreach($manufacturerList as $manufacturer){
				  			?>
				  			<option <?php echo ($manufacturer['manufacturer_id'] == $product['manufacturer_id'])?'selected="true"':''; ?> value="<?php echo $manufacturer['manufacturer_id']; ?>"><?php echo $manufacturer['manufacturer_name']; ?></option>
				  			<?php
				  			} ?>
				  	</select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Product Price </label>
				  <div class="controls">
					<input type="number" value="<?php echo $product['product_price'];?>" name="product_price" class="span6 typeahead" id="typeahead">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Stock Quantity </label>
				  <div class="controls">
					<input type="number" value="<?php echo $product['stock_quantity'];?>" name="stock_quantity" class="span6 typeahead" id="typeahead">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Product SKU</label>
				  <div class="controls">
					<input type="text" value="<?php echo $product['product_sku'];?>" name="product_sku" class="span6 typeahead" id="typeahead">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Product Short Description </label>
				  <div class="controls">
					<textarea rows="5" cols="8" class="span6 typeahead" name="product_short_description"><?php echo $product['product_short_description'];?>
					</textarea>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Product Long Description </label>
				  <div class="controls">
					<textarea rows="5" cols="8" class="span6 typeahead" name="product_long_description"><?php echo $product['product_long_description'];?></textarea>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Product Image </label>
				  <div class="controls">
				  	<img width="100" src="<?php echo $product['product_image']; ?>"><br/>
					<input type="file" name="product_image" class="span6 typeahead" id="typeahead">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Status </label>
				  <div class="controls">
					<select name="product_status" class="span6 typeahead">
						<option>Select one</option>
						<option <?php echo ($product['product_status'] == 1)?'selected="true"':''; ?> value="1">Publish</option>
						<option <?php echo ($product['product_status'] == 0)?'selected="true"':''; ?> value="0">Unpublish</option>
					</select>
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" name="update_product" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div>

