<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<h4><?php echo $data['post']->title; ?></h4>

       <div class="bg-secondary text-white p-2 mb-3">
              Written By: <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
       </div>
       <p><?php echo $data['post']->body; ?></p>

       <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
              
              <hr>
              <div class="row">

                     <div class="col-md-6">
                            <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id ?>" class="btn btn-dark">Edit</a>
                     </div>
                     

                     <div class="col-md-6">
                            <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
                                   <input type="submit" value="Delete" class="btn btn-danger pull-right">
                            </form>
                     </div>
              </div>
       <?php endif; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>