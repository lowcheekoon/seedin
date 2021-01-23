
<!--Section: Table-->
<section class="mb-12">

	<!--Card-->
	<div class="card card-cascade narrower">

		<!--Card header-->
		<div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">
			<? /*
			<div>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fa fa-th-large mt-0"></i>
				</button>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fa fa-columns mt-0"></i>
				</button>
			</div>
			*/ ?>

			<a href="#" class="white-text mx-3">Add Item</a>
			
			<div>
				<a href="<?= site_url('admin/item/') ?>" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="left" title="Back To Item List">
					<i class="fa fa-th-list mt-0"></i>
				</a>
			</div>
		</div>
		<!--/Card header-->

		<!--Card content-->
		<div class="card-body card-body-cascade">

			<!-- Form -->
			<form class="text-center" style="color: #757575;" action="<?= site_url('admin/item/add') ?>" method="POST">
				<input type="hidden" name="_method" value="POST">
				
				<!-- Email -->
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" class="form-control" placeholder="Item Name" value="">
					<label for="item_name">Item Name</label>
					<?= form_error("item_name", "<p class='ErrorMsg'>","</p>") ?>
				</div>

				<!-- Password -->
				<div class="md-form">
					<input type="number" id="item_price" name="item_price" class="form-control" placeholder="Item Price">
					<label for="item_price">Item Price</label>
					<?= form_error("item_price", "<p class='ErrorMsg'>","</p>") ?>
				</div>
				
				<!-- Sign in button -->
				<button class="btn btn-info btn-block my-4 waves-effect waves-light" type="submit">Submit</button>
				<input type="hidden" name="PostRequest" value="1">
			</form>
			<!-- Form -->

		</div>
		<!--/.Card content-->

	</div>
	<!--/.Card-->

</section>
<!--Section: Table-->


