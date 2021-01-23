<?
$isOnline = $this->online_admin->isOnline;
?>

<? if($isOnline): ?>
	
<!--Main Navigation-->
<header>
	<? $this->load->view('admin/templates/top'); ?>
	<? $this->load->view('admin/templates/menu'); ?>
</header>
<!--Main Navigation-->
<? endif; ?>

<main>
	<div class="container-fluid mt-2">
	<? $this->load->view('admin/modules/'.$page); ?>
	</div>
</main>
