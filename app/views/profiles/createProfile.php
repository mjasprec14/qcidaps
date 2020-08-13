<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<h4 class="mb-3 mt-4">Create new profile</h4>

       <?php flash('existing_profile'); ?>

<div class="row">
       <div class="col-md-12 mx-auto">
       <hr>
              <form action="<?php echo URLROOT; ?>/profiles/createProfile" method="post" enctype="multipart/form-data">

              <div class="form-row">           
                            <div class="form-group col-md-3">
                                   <img height="200px" width="250px" alt="" class="imgPreview">
                                   <input type="file" name="image" class="form-control-file mt-2 " id="image" onchange="imgPreview(event)">  
                            </div>

                            <div class="form-group col-md-9 mt-3">
                                   <div class="col">
                                          <div class="row">
                                                 <div class="col">
                                                        <label for="control_no">Control No.: </label>
                                                        <input type="text" id="control_no" name="control_no" class="form-control form-control-sm <?php echo (!empty($data['control_no_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['control_no']; ?>">

                                                        <span class="invalid-feedback"><?php echo $data['control_no_err']; ?></span>
                                                 </div>

                                                 <div class="col">

                                                               <label for="type_of_admission">Admission Type:</label>
                                                               <select name="type_of_admission" id="type_of_admission" class="form-control form-control-sm <?php echo !empty($data['type_of_admission_err']) ? 'is-invalid' : ''; ?>"
                                                               >
                                                                      <option selected value="<?php echo $data['type_of_admission']; ?>"><?php echo $data['type_of_admission']; ?></option>
                                                                      <option value="Public">Public</option>
                                                                      <option value="Administrator">Administrator</option>
                                                               </select>

                                                               <span class="invalid-feedback"><?php echo $data['type_of_admission_err']; ?></span>
                                                 </div>
                                          </div>
                                   </div>
                                   
                                  
                                   <div class="col">
                                          <div class="row">
                                                        <div class="form-group col-md-4">
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

                                                        <div class="form-group col-md-2">

                                                               <label for="extension_name">Extension:</label>
                                                               <select name="extension_name" id="extension_name" class="form-control form-control-sm <?php echo !empty($data['extension_name_err']) ? 'is-invalid' : ''; ?>"
                                                               >
                                                                      <option selected value="<?php echo $data['extension_name']; ?>"><?php echo $data['extension_name']; ?></option>
                                                                      <option value="No Name Extension">No Name Extension</option>
                                                                      <option value="Junior">Junior</option>
                                                                      <option value="Senior">Senior</option>
                                                               </select>

                                                               <span class="invalid-feedback"><?php echo $data['extension_name_err']; ?></span>
                                                        </div>
                                          </div>
                                   </div>


                                   
                                   <div class="col">
                                          <div class="row">

                                                        <div class="form-group col-md-2">
                                                               <label for="sex">Sex:</label>
                                                               <select name="sex" id="sex" class="form-control form-control-sm <?php echo !empty($data['sex_err']) ? 'is-invalid' : ''; ?>"
                                                               >
                                                                      <option selected value="<?php echo $data['sex']; ?>"><?php echo $data['sex']; ?></option>
                                                                      <option value="Male">Male</option>
                                                                      <option value="Female">Female</option>
                                                               </select>

                                                               <span class="invalid-feedback"><?php echo $data['sex_err']; ?></span>
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                               <label for="aka">AKA: </label>
                                                               <input type="text" id="aka" name="aka" class="form-control form-control-sm <?php echo (!empty($data['aka_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['aka']; ?>" >

                                                               <span class="invalid-feedback"><?php echo $data['aka_err']; ?></span>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                               <label for="date_of_birth">Date of Birth: </label>
                                                               <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-sm <?php echo (!empty($data['date_of_birth_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['date_of_birth']; ?>"  >

                                                               <span class="invalid-feedback"><?php echo $data['date_of_birth_err']; ?></span>
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                               <label for="age">Age: </label>
                                                               <input type="text" id="age" name="age" class="form-control form-control-sm <?php echo (!empty($data['age_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['age']; ?>"  >

                                                               <span class="invalid-feedback"><?php echo $data['age_err']; ?></span>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                               <label for="place_of_birth">Place of Birth: </label>
                                                               <input type="text" id="place_of_birth" name="place_of_birth" class="form-control form-control-sm <?php echo (!empty($data['place_of_birth_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['place_of_birth']; ?>"  >

                                                               <span class="invalid-feedback"><?php echo $data['place_of_birth_err']; ?></span>
                                                        </div>
                                                 
                                          </div>
                                   </div>

                                   
                     </div>
              </div>

              <hr>

             


             
                     <button type="submit" class="btn btn-success pull-right">Create</button>
              
              
              </form>
       </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>