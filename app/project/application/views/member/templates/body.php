<?
$isOnline = $this->online_member->isOnline;
?>

<? if($isOnline): ?>
	
<!--Main Navigation-->
<header>
	<?  $this->load->view('member/templates/top'); ?>
	<?  $this->load->view('member/templates/menu'); ?>
</header>
<!--Main Navigation-->
<? endif; ?>

<main>
	<div class="container-fluid mt-2">
		<div class="row">
			<div class="col-md-9">
				<? $this->load->view('member/modules/'.$page); ?>
			</div>
			
			<? if($isOnline): ?>
			
			<div class="col-md-3">
				<? $this->load->view('member/templates/cart'); ?>
			</div>
			
			<? endif; ?>
			
		</div>
	
	</div>
</main>
