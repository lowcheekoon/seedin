
<div class="row">
	<div class="col-12">
		<!-- Material form login -->
		<div class="card">

			<h5 class="card-header info-color white-text text-center py-4">
				<strong>Payment</strong>
			</h5>
			
			<form action="<?= site_url('member/order/pay/'.$row->order_id) ?>" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<!--Card content-->
				<div class="card-body px-lg-5 py-1">

					<table class="table table-sm table-dark">
						<tbody>
							<tr>
								<th scope="col">Order ID</th>
								<td scope="col"><?= $row->order_id ?></td>
							</tr>
							<tr>
								<th scope="col">Total Total</th>
								<td scope="col"><?= $row->order_amount ?></td>
							</tr>
						</tbody>
					</table>
					<br>
					
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment_method" id="payment_method1" value="Credit Card" checked>
						<label class="form-check-label" for="payment_method1">
							Credit Card
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment_method" id="payment_method2" value="Online Banking">
						<label class="form-check-label" for="payment_method2">
							Online Banking
						</label>
					</div>
					
				</div>
				
				<div class="card-footer">
					<button type="submit" class="w-100 btn btn-info rounded border-1">Pay</button>
					<a href="<?= site_url('member/order') ?>" class="w-100 btn btn-dark rounded border-1">Back To List</a>
				</div>
			
			</form>
			
		</div>
		<!-- Material form login -->
	</div>
</div>
