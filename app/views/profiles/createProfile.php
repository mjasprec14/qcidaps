<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<h4 class="mb-3 mt-4">Create new profile</h4>

       <?php flash('existing_profile'); ?>

<div class="row">
       <div class="col-md-12 mx-auto">
              <form action="<?php echo URLROOT; ?>/profiles/createProfile" method="post">
              <div class="form-row">


                            <div class="form-group col-md-6">
                                   <label for="control_no">Control No.: </label>
                                   <input type="text" id="control_no" name="control_no" class="form-control form-control-sm <?php echo (!empty($data['control_no_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['control_no']; ?>">

                                   <span class="invalid-feedback"><?php echo $data['control_no_err']; ?></span>
                            </div>

                            <div class="form-group col-md-6">
                                   <label for="type_of_admission">Admission Type: </label>
                                   <select id="type_of_admission" name="type_of_admission" class="form-control form-control-sm" >
                                          <option value="New Admission" selected>New Admission</option>
                                          <option value="New Admission">Readmission</option>
                                           <option value="New Admission">Recommitment</option>
                                   </select>
                            </div>
              </div>

              <div class="form-row">

                            <div class="form-group col-md-3">
                                   <label for="last_name">Last Name: </label>
                                   <input type="text" id="last_name" name="last_name" class="form-control form-control-sm <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['last_name']; ?>" >

                                   <span class="invalid-feedback"><?php echo $data['last_name_err']; ?></span>
                            </div>

                            <div class="form-group col-md-3">
                                   <label for="first_name">First Name: </label>
                                   <input type="text" id="first_name" name="first_name" class="form-control form-control-sm <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['first_name']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['first_name_err']; ?></span>
                            </div>

                            <div class="form-group col-md-3">
                                   <label for="middle_name">Middle Name: </label>
                                   <input type="text" id="middle_name" name="middle_name" class="form-control form-control-sm <?php echo (!empty($data['middle_name_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['middle_name']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['middle_name_err']; ?></span>
                            </div>

                            <div class="form-group col-md-3">
                                   <label for="extension_name" >Extension Name: </label>
                                   <select id="extension_name" name="extension_name" class="form-control form-control-sm" >
                                          <option selected value="No Name Extension">No Name Extension</option>
                                          <option value="Junior">Junior</option>
                                          <option value="Senior">Senior</option>
                                   </select>
                            </div>
              </div>


             
                     <button type="submit" class="btn btn-success pull-right">Create</button>
              
              
              </form>
       </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>