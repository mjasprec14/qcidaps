<?php require_once APPROOT . '/views/inc/header.php'; ?>

<div class="row mb-3">
       <div class="col-md-6">
              <h3>News and Announcements</h3>
       </div>

       <div class="col-md-6">
              <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
                     <i class="fa fa-pencil"></i> Add Post
              </a>
       </div>
</div>

       <?php foreach($data['post'] as $posts) : ?>

              <div class="card card-body mb-3">
                     <h5 class="card-title"><?php echo $posts->title; ?></h5>

                     <p class="card-text p-2 mb-4"><?php echo $posts->body ?></p>

                     <div class="row">
                            <div class="col-md-2">
                                   <a href="<?php echo URLROOT; ?>/posts/show<?php echo $posts->postsId; ?>" class="btn btn-dark">Read More</a>
                            </div>
                            <div class="col-md-10">
                                   <p class="p-2 mb-3 text-right">Written by <?php echo $posts->name; ?> on <?php echo $posts->postCreated; ?></p>
                            </div>
                     </div>
              </div>

       <?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>