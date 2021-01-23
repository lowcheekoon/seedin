<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<!-- jquery -->
<script src="<?=$this->config->item("base_url")?>js/jquery-1.12.3.min.js"></script>

<!-- bootstrap -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>js/bootstrap/css/bootstrap.min.css"  />
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>js/bootstrap/css/bootstrap-theme.min.css">
<script src="<?=$this->config->item("base_url")?>js/bootstrap/js/bootstrap.min.js" ></script>
<script src="<?=$this->config->item("base_url")?>js/bootstrap/js/bootstrap-toggle.min.js" ></script>

<!-- font awesome -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>css/font-awesome/css/font-awesome.min.css"  />

<!-- fancybox -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>js/fancybox/jquery.fancybox.css">
<script src="<?=$this->config->item("base_url")?>js/fancybox/jquery.fancybox.js"></script>

<!-- jqeury ui -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>js/jquery-ui/jquery-ui.min.css">
<script src="<?=$this->config->item("base_url")?>js/jquery-ui/jquery-ui.min.js"></script>

<!-- jqeury ui timepicker -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>js/jquery-ui-timepicker/jquery.ui.timepicker.css">
<script src="<?=$this->config->item("base_url")?>js/jquery-ui-timepicker/jquery.ui.timepicker.js"></script>

<!-- stylesheet css -->
<link type="text/css" rel="stylesheet" href="<?=$this->config->item("base_url")?>css/style.css?v=1.000000">
</head>

<body>
<? $this->load->view('fontend_web_pc/modules/'.$page); ?>
</body>
</html>