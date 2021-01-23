
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

			<a href="#" class="white-text mx-3">View Member</a>
			
			<div>
				<a href="<?= site_url('admin/member') ?>" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="left" title="Back To Item List">
					<i class="fa fa-th-list mt-0"></i>
				</a>
			</div>
		</div>
		<!--/Card header-->

		<!--Card content-->
		<div class="card-body card-body-cascade">

			<!-- Form -->
			<form class="text-center" style="color: #757575;" action="<?= site_url('admin/item/edit/'.$id) ?>" method="POST">
				<input type="hidden" name="_method" value="PUT">
				
				<!-- Email -->
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" disabled class="form-control" placeholder="Item Name" value="<?= $row->member_username ?>">
					<label for="item_name">User Name</label>
				</div>
				
			</form>
			<!-- Form -->

		</div>
		<!--/.Card content-->

	</div>
	<!--/.Card-->

</section>
<!--Section: Table-->


