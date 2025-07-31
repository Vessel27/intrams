<?php
    require_once __DIR__ . '/../../config/config.php';
    $url = new url();
?>
<!-- FOR STYLES -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $url->base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/fontawesome/css/all.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/coreui/coreui.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/css/admin.css" rel="stylesheet">
<!-- Bootstrap JS and Popper.js -->
    <script src="<?php echo $url->base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>