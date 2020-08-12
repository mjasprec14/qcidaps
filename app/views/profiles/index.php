<?php require_once APPROOT . '/views/inc/header.php'; ?>
<?php flash('profile_message'); ?>
<div class="row mb-3">

       <div class="col-md-3">
              <a href="<?php echo URLROOT; ?>/profiles/searchProfile" class="btn btn-success pull-left">
                     <i class="fa fa-search-plus"></i> Search Profile
              </a>
       </div> 

       <div class="col-md-6 text-center">
              <h2>Profiles</h2>
       </div>

       <div class="col-md-3">
              <a href="<?php echo URLROOT; ?>/profiles/createProfile" class="btn btn-success pull-right">
                     <i class="fa fa-pencil"></i> Add Profile
              </a>
       </div>
</div>

       <?php foreach($data['profile'] as $profiles) : ?>
              
              <div class="card card-body mb-3">
              
              <div class="row">
                     <div class="col-md-2">
                            <img src="<?php echo URLROOT; ?>/img/<?php echo $profiles->image; ?>" alt="" width="110" height="120">
                     </div>

                     <div class="col-md-10">
                            <h6 class="card-title"><?php echo $profiles->control_no; ?></h6>
                                   <p><?php echo ucwords($profiles->last_name) . ', ' . ucwords($profiles->first_name) . ' ' . ucwords($profiles->middle_name); ?></p>

                                   <div class="row">
                                          <div class="col-md-10">
                                                 <p>Created by <?php echo $profiles->name; ?> on <?php echo $profiles->created_at; ?></p>
                                          </div>

                                          <div class="col-md-2">
                                                 <a href="<?php echo URLROOT; ?>/profiles/showProfile/<?php echo $profiles->profileId; ?>" class="btn btn-primary pull-right">View More</a>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
                     

       <?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>