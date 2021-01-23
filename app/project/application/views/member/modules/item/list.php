
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

			<a href="#" class="white-text mx-3">Item List</a>
			
			
		</div>
		<!--/Card header-->

		<!--Card content-->
		<div class="card-body card-body-cascade">

			<div class="table-responsive">

				<table class="table">
					<thead>
						<tr>
							<th class="th-lg">#</th>
							<th class="th-lg">Name</th>
							<th class="th-lg">Price</th>
							<th class="th-lg">Action</th>
						</tr>
					</thead>
					<tbody>
						<? if($rows): ?>
							<? foreach($rows as $i => $row): ?>
							
						<tr>	
							<td scope="row"><?= $i + 1 ?></td>
							<td><?= $row->item_name ?></td>
							<td><?= $row->item_price ?></td>
							<td>
								<a  data-item-id="<?= $row->item_id ?>" class="addToCart btn btn-info btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="left" title="Add To Cart">
									<i class="fa fa-plus mt-0"></i>
								</a>
							</td>
						</tr>	
							
							<? endforeach; ?>
						<? endif; ?>
					</tbody>
				</table>

			</div>

			<hr class="my-0">
			
			<!--Bottom Table UI-->
			<div class="d-flex justify-content-between">
				<? /*
				<!--Name-->
				<select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down">
					<option value="" disabled>Rows number</option>
					<option value="1" selected>10 rows</option>
					<option value="2">25 rows</option>
					<option value="3">50 rows</option>
					<option value="4">100 rows</option>
				</select>
				*/ ?>
				
				<!--Pagination -->
				<nav class="my-4">
					
				</nav>
				<!--/Pagination -->
			</div>
			<!--Bottom Table UI-->

		</div>
		<!--/.Card content-->

	</div>
	<!--/.Card-->

</section>
<!--Section: Table-->


