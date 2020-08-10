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
                                   <input type="text" id="search" name="search" class="form-control form-control-md <?php echo (!empty($data['search_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['search']; ?>">

                                   <span class="invalid-feedback"><?php echo $data['search_err']; ?></span>
                            </div>

                            <div class="form-group col-md-2">
                                  <button type="submit" class="btn btn-success">Search</button>
                            </div>
              </div> 
                     
              
              
              </form>
       </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>