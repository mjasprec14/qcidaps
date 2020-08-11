<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

                     <div class="card card-body bg-light mt-3">
                     <?php flash('register_success'); ?>
                     
                            <h2>Edit Post</h2>

                            <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">

                                   <div class="form-group">
                                          <label for="title">Title: <sup>*</sup></label>

                                          <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['title']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                                   </div>
                                  
                                   <div class="form-group">
                                          <label for="body">Body: <sup>*</sup></label>

                                          <textarea type="text" name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '' ?>"><?php echo $data['body']; ?></textarea>

                                          <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                                   </div>
                     
                                   <input type="submit" value="Submit" class="btn btn-success pull-right">
                                          
                            </form>
                     </div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>