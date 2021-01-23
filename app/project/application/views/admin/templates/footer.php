	
	<!--Footer-->
    <footer class="page-footer mt-4">

        <!--Copyright-->
        <div class="footer-copyright text-center py-3">
            <div class="container-fluid">
                © <?= date('Y') ?> Copyright:
                <a href="#"> SeedIn Project - Admin Panel </a>

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
        });
    </script>
	
	<?
	$isOnline = $this->online_admin->isOnline;
	if($isOnline): 
		//$this->load->view('templates/javascript'); 
	endif; 
	?>
</body>

</html>