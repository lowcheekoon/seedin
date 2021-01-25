<div class="shadow border-1 rounded border-info p-2">
	<h6><b>Mini Cart</b></h6>
	<table id="mini_cart" class="table">
		<thead>
			<tr>
				<th>Item</th>
				<th>qty</th>
				<th>Price</th>
				<th>total</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
		<tfoot>
			<tr>
				<th colspan=3>Total</th>
				<th id="mini_cart_total">0.00</th>
			</tr>
			<tr>
				<th colspan=4>
					<a href="<?= site_url('member/checkout') ?>" class="btn btn-success rounded border-1 w-100">Checkout</a>
				</th>
			</tr>
		</tfoot>
	</table>
</div>