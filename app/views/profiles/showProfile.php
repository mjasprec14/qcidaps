<?php require_once APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary mb-3"><div class="fa fa-arrow-circle-left"> Back</div></a>

       <h5><?php echo 'Control No.: ' . $data['profile']->control_no; ?></h5>
       <h6><?php echo 'Name: ' . $data['profile']->last_name . ', ' . $data['profile']->first_name . ' ' . $data['profile']->middle_name. ' - ' . $data['profile']->extension_name; ?></h6>
       <h6><?php echo 'Type of Admission: ' . $data['profile']->type_of_admission ; ?></h6>

              <div class="bg-secondary text-white p-2 mb-3 mt-3">
                     Profile created by <?php echo $data['user']->name; ?> on <?php echo $data['profile']->created_at ; ?>
              </div>

       <?php if($_SESSION['status'] == 'Administrator') : ; ?>
              <hr>
              <div class="row">
                     <div class="col-md-6">
                            <a href="<?php echo URLROOT; ?>/profiles/editProfile/<?php echo $data['profile']->id ; ?>" class="btn btn-dark">Edit</a>
                     </div>

                     <div class="col-md-6">
                            <form action="<?php echo URLROOT; ?>/profiles/deleteProfile/<?php echo $data['profile']->id ?>" method="post">
                                   <input type="submit" value="Delete" class="btn btn-danger pull-right">
                            </form>
                     </div>
              
              </div>
       <?php endif; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>