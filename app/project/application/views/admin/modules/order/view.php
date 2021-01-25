
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

			<a href="#" class="white-text mx-3">View Order</a>
			
			<div>
				<a href="<?= site_url('admin/order') ?>" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="left" title="Back To Item List">
					<i class="fa fa-th-list mt-0"></i>
				</a>
			</div>
		</div>
		<!--/Card header-->

		<!--Card content-->
		<div class="card-body card-body-cascade">

			<!-- Form -->
			<form class="text-center" style="color: #757575;" action="<?= site_url('admin/order/edit/'.$id) ?>" method="POST">
				<input type="hidden" name="_method" value="PUT">
				
				<!-- Email -->
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" disabled class="form-control" placeholder="Item Name" value="<?= $row->order_id ?>">
					<label for="item_name">Order Id</label>
				</div>
				
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" disabled class="form-control" placeholder="Item Name" value="<?= $row->member_username ?>">
					<label for="item_name">Member</label>
				</div>
				
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" disabled class="form-control" placeholder="Item Name" value="<?= $row->order_amount ?>">
					<label for="item_name">Total Amount</label>
				</div>
				
				<div class="md-form">
					<input type="text" id="item_name" name="item_name" disabled class="form-control" placeholder="Item Name" value="<?= $row->order_payment_method ?>">
					<label for="item_name">Payment Method</label>
				</div>
				
				<div class="md-form">
					<? if($row->order_status == 1): ?>
					<span class="badge badge-info p-1">To Pay</span>
					<? endif; ?>
					
					<? if($row->order_status == 2): ?>
					<span class="badge badge-success p-1">Paid</span>
					<? endif; ?>
					<label for="item_name">Status</label>
				</div>
				
			</form>
			<!-- Form -->
			
			<br>
			
			<h6 class="bg-info p-1">Items</h6>
			
			<? if($row->order_details): ?>
			
			<table class="table table-sm table-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Item Name</td>
						<th scope="col">Price</td>
						<th scope="col">Quantity</td>
						<th scope="col">Total</td>
					</tr>
				</thead>
				<tbody>
				
				<? $total = 0; ?>
				<? foreach($row->order_details as $i => $detail): ?>
				
					<tr>
						<td><?= $i+1 ?></td>
						<td><?= $detail->order_detail_item_name ?></td>
						<td><?= $detail->order_detail_item_price ?></td>
						<td><?= $detail->order_detail_quantity ?></td>
						<td><?= $detail->order_detail_quantity * $detail->order_detail_item_price ?></td>
						<? $total += $detail->order_detail_quantity * $detail->order_detail_item_price; ?>
					</tr>
				
				<? endforeach; ?>
				
				</tbody>
				
				<tfoot>
					<tr>
						<td colspan=4>Total</td>
						<td><?= $total ?></td>
					</tr>
				</tfoot>
				
			</table>
			
			<? endif; ?>

		</div>
		<!--/.Card content-->

	</div>
	<!--/.Card-->

</section>
<!--Section: Table-->


