<?php require_once APPROOT . '/views/inc/header.php'; ?>

       <div class="row">
              <div class="col-md-6 mx-auto">
                     <div class="card card-body bg-light ">
                            <h2>Create A New Moderator</h2>
                            <p>Please fill out this form to register with us</p>

                            <form action="<?php echo URLROOT; ?>/users/register" method="post">

                                   <div class="form-group">
                                          <label for="name">Name: <sup>*</sup></label>

                                          <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                                   </div>

                                   <div class="form-group">
                                          <label for="email">Email: <sup>*</sup></label>

                                          <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                   </div>
                                   
                                   <div class="form-group">
                                          <label for="employee_id">Employee ID: <sup>*</sup></label>

                                          <input type="text" name="employee_id" class="form-control form-control-lg <?php echo (!empty($data['employee_id_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['employee_id']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['employee_id_err']; ?></span>
                                   </div>

                                   <div class="form-group mb-4">
                                          <label for="status">Status: <sup>*</sup></label>

                                          
                                          <select class="form-control" name="status" id="status">
                                                 <option>Moderator</option>
                                                 <option>Administrator</option>
                                          </select>
                                   </div>

                                   <div class="form-group">
                                          <label for="password">Password: <sup>*</sup></label>

                                          <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['password']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                   </div>

                                   <div class="form-group">
                                          <label for="password">Confirm Password: <sup>*</sup></label>

                                          <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['confirm_password']; ?>">

                                          <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                                   </div>

                                          
                                   <input type="submit" value="Register" class="btn btn-success btn-block">
                                          
                            </form>
                     </div>
              </div>
       </div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>