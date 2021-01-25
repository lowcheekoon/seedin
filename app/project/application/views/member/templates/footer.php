	
	<!--Footer-->
    <footer class="page-footer mt-4">

        <!--Copyright-->
        <div class="footer-copyright text-center py-3">
            <div class="container-fluid">
                © <?= date('Y') ?> Copyright:
                <a href="#"> SeedIn Project - Member Panel </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
	
	<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?=$this->config->item("ui_url")?>js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?=$this->config->item("ui_url")?>js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=$this->config->item("ui_url")?>js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=$this->config->item("ui_url")?>js/mdb.min.js?1.000000"></script>
	
	 <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
		$('[data-toggle="tooltip"]').tooltip();
		
    </script>
	
	<script>
        $(function () {
			<? if($this->session->flashdata('success')): ?>
			toastr.success("<?= $this->session->flashdata('success') ?>", "Success", );
			<? endif; ?>
			
			<? if($this->session->flashdata('error')): ?>
			toastr.error("<?= $this->session->flashdata('error') ?>", "Error", );
			<? endif; ?>
			
			$('.addToCart').click(function(){
				var id = $(this).data('item-id');
				alert(id)
				$.ajax({
					type: "POST",
					url: "<?= site_url('member/item/addToCart') ?>",
					data: {
						id: id,
						_method: 'POST'
					},
					success: function(data) {
						if(data.ok=='1') {
							mini_cart()
						}
					},
					dataType: 'json'
				});
			})
			
			function mini_cart() {
				$.ajax({
					type: "POST",
					url: "<?= site_url('member/item/mini_cart') ?>",
					data: {
					},
					success: function(data) {
						if(data.ok=='1') {
							cart(data.result.items, data.result.total);
						}
					},
					dataType: 'json'
				});
			}
			
			function cart(items, total) {
				$('#mini_cart_total').html(total);	
				$("#mini_cart").find('tbody').html('');
				for(var i in items) {
					
					$("#mini_cart").find('tbody').append('<tr>');
					$("#mini_cart").find('tbody').append('<td>'+ items[i].name +'</td>');
					$("#mini_cart").find('tbody').append('<td>'+ items[i].qty +'</td>');
					$("#mini_cart").find('tbody').append('<td>'+ items[i].price +'</td>');
					$("#mini_cart").find('tbody').append('<td>'+ items[i].total +'</td>');
					$("#mini_cart").find('tbody').append('</tr>');
				}
			}
			
			mini_cart();
        });
    </script>
	
	<?
	$isOnline = $this->online_member->isOnline;
	if($isOnline): 
		//$this->load->view('templates/javascript'); 
	endif; 
	?>
</body>

</html>