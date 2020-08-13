<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<div class="row mt-3">
       <div class="col-md-12 mx-auto">
              <form action="<?php echo URLROOT; ?>/profiles/searchProfile" method="post">
              <div class="form-row">

                            <div class="form-group col-md-3">
                                   <select class="form-control" id="filter_by" name="filter_by">
                                                 <option selected value="control_no">Control No.</option>
                                                 <option value="last_name">Last Name</option>
                                                 <option value="first_name">First Name</option>
                                                 <option value="middle_name">Middle Name</option>
                                   </select>
                            </div>

                            <div class="form-group col-md-7">             
                                   <input type="text" id="search_item" name="search_item" class="form-control form-control-md <?php echo (!empty($data['search_item_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['search_item']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['search_item_err']; ?></span>
                            </div>

                            <div class="form-group col-md-2">
                                  <button type="submit" class="btn btn-success">Search</button>
                            </div>
              </div>      
              </form>
       </div>
</div>

     <?php foreach($data['profiles'] as $profiles) : ?>
              
       <div class="card card-body mb-3" style="display: <?php echo $profiles->display; ?>">
              <div class="row">
                     <div class="col-md-2">
                                   <img src="<?php echo URLROOT; ?>/img/<?php echo $profiles->image; ?>" alt="" width="110" height="120">
                     </div>

                     <div class="col-md-10">
                                   <h6 class="card-title"><?php echo $profiles->control_no; ?></h6>
                                   <p><?php echo ucwords($profiles->last_name) . ', ' . ucwords($profiles->first_name) . ' ' . ucwords($profiles->middle_name); ?></p>

                                   <div class="row">
                                          <div class="col-md-9">
                                                 <p>Created by <?php echo $profiles->name; ?> on <?php echo $profiles->created_at; ?></p>
                                          </div>

                                          <div class="col-md-3">
                                                 <a href="<?php echo URLROOT; ?>/profiles/showProfile/<?php echo $profiles->profileId; ?>" class="btn btn-primary pull-right">View More</a>
                                          </div>
                                   </div>
                     </div>
              </div>                 
       </div>

       <?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>