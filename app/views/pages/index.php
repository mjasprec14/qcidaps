<?php require_once APPROOT . '/views/inc/header.php'; ?>

       <?php if(isset($_SESSION['user_id'])) : ?>

       <div class="jumbotron jumbotron-fluid text-center">
              <div class="container">
                     <h2 class="display-5"><?php echo $data['title']; ?></h2>
                     <p class="lead"><?php echo $data['description']; ?></p>
              </div>
       </div>

       <?php endif; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>