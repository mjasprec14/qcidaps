<?php require_once APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<h4><?php echo $data['profile']->last_name; ?></h4>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>