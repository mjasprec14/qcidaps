<?php require_once APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/profiles" class="btn btn-primary"><div class="fa fa-arrow-circle-left"> Back</div></a>

<h4 class="mb-3 mt-4">Update profile</h4>

<?php echo $data['id']; ?>
<div class="row">
       <div class="col-md-12 mx-auto">
              <form action="<?php echo URLROOT; ?>/profiles/editProfile/<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-row">           
                            <div class="form-group col-md-3">
                                   <img src="<?php echo URLROOT; ?>/img/<?php echo $data['image']; ?>" height="200px" width="250px" alt="" class="imgPreview" >
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
                                                                      <option value="New Admission">New Admission</option>
                                                                      <option value="Readmission">Readmission</option>
                                                                      <option value="Recommitment">Recommitment</option>
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
                                                                      <option value="Sr.">Sr.</option>
                                                                      <option value="Jr.">Jr.</option>
                                                                      <option value="I">I</option>
                                                                      <option value="II">II</option>
                                                                      <option value="III">III</option>
                                                                      <option value="IV">IV</option>
                                                                      <option value="V">V</option>
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

              <!--- ROW START -->
              <div class="form-row">

                     <div class="form-group col-md-3">
                                   <label for="house_no">House No.</label>
                                   <input type="text" id="house_no" name="house_no" class="form-control form-control-sm <?php echo (!empty($data['house_no_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['house_no']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['house_no_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="street">Street</label>
                                   <input type="text" id="street" name="street" class="form-control form-control-sm <?php echo (!empty($data['street_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['street']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['street_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="district">District</label>
                                          <select name="district" id="district" class="form-control form-control-sm <?php echo !empty($data['district_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['district']; ?>"><?php echo $data['district']; ?></option>
                                                 <option value="1st District">1st District</option>
                                                 <option value="2nd District">2nd District</option>
                                                 <option value="3rd District">3rd District</option>
                                                 <option value="4th District">4th District</option>
                                                 <option value="5th District">5th District</option>
                                                 <option value="6th District">6th District</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['district_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="barangay">Barangay:</label>
                                          <select name="barangay" id="barangay" class="form-control form-control-sm <?php echo !empty($data['barangay_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['barangay']; ?>"><?php echo $data['barangay']; ?></option>
                                                 <option value="Alicia / Bago Bantay">Alicia / Bago Bantay</option>
                                                 <option value="Bagong Pag-asa / North-EDSA, Diliman (southern part), Triangle Park (southern triangle)">Bagong Pag-asa / North-EDSA, Diliman (southern part), Triangle Park (southern triangle)</option>
                                                 <option value="Bahay Toro / Project 8">Bahay Toro / Project 8</option>
                                                 <option value="Balingasa / Balintawak, Cloverleaf">Balingasa / Balintawak, Cloverleaf</option>
                                                 <option value="Bungad / Project 7">Bungad / Project 7</option>
                                                 <option value="Damar">Damar</option>
                                                 <option value="Damayan / San Francisco del Monte, SFDM, Frisco">Damayan / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="Del Monte / San Francisco del Monte, SFDM, Frisco">Del Monte / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="Katipunan / Muñoz">Katipunan / Muñoz</option>
                                                 <option value="Lourdes / Sta. Mesa Heights">Lourdes / Sta. Mesa Heights</option>
                                                 <option value="Maharlika / Sta. Mesa Heights">Maharlika / Sta. Mesa Heights</option>
                                                 <option value="Manresa">Manresa</option>
                                                 <option value="Mariblo / San Francisco del Monte, SFDM, Frisco">Mariblo / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="Masambong">Masambong</option>
                                                 <option value="N.S. Amoranto (Gintong Silahis) / La Loma">N.S. Amoranto (Gintong Silahis) / La Loma</option>
                                                 <option value="Nayong Kanluran">Nayong Kanluran</option>
                                                 <option value="Paang Bundok / La Loma">Paang Bundok / La Loma</option>
                                                 <option value="Pag-ibig sa Nayon / Balintawak">Pag-ibig sa Nayon / Balintawak</option>
                                                 <option value="Paltok / San Francisco del Monte, SFDM, Frisco">Paltok / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="Paraiso / San Francisco del Monte, SFDM, Frisco">Paraiso / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="Phil-Am / West Triangle">Phil-Am / West Triangle</option>
                                                 <option value="Project 6 / Diliman (southeast quarter), Triangle Park (southern half)">Project 6 / Diliman (southeast quarter), Triangle Park (southern half)</option>
                                                 <option value="Ramon Magsaysay / Bago Bantay">Ramon Magsaysay / Bago Bantay</option>
                                                 <option value="Saint Peter / Sta. Mesa Heights">Saint Peter / Sta. Mesa Heights</option>
                                                 <option value="Salvacion / La Loma">Salvacion / La Loma</option>
                                                 <option value="San Antonio / San Francisco del Monte, SFDM, Frisco">San Antonio / San Francisco del Monte, SFDM, Frisco</option>
                                                 <option value="San Isidro Labrador / La Loma">San Isidro Labrador / La Loma</option>
                                                 <option value="San Jose">San Jose</option>
                                                 <option value="Santa Cruz / Pantranco, Heroes Hill">Santa Cruz / Pantranco, Heroes Hill</option>
                                                 <option value="Santa Teresita / Sta. Mesa Heights">Santa Teresita / Sta. Mesa Heights</option>
                                                 <option value="Sto. Cristo / Bago Bantay">Sto. Cristo / Bago Bantay</option>
                                                 <option value="Santo Domingo (Matalahib)">Santo Domingo (Matalahib)</option>
                                                 <option value="Siena">Siena</option>
                                                 <option value="Talayan">Talayan</option>
                                                 <option value="Vasra / Diliman (mostly)">Vasra / Diliman (mostly)</option>
                                                 <option value="Veterans Village / Project 7, Muñoz">Veterans Village / Project 7, Muñoz</option>
                                                 <option value="West Triangle">West Triangle</option>
                                                 <option value="Bagong Silangan">Bagong Silangan</option>
                                                 <option value="Batasan Hills / Constitution Hills">Batasan Hills / Constitution Hills</option>
                                                 <option value="Commonwealth / Manggahan">Commonwealth / Manggahan</option>
                                                 <option value="Holy Spirit  / Don Antonio">Holy Spirit  / Don Antonio</option>
                                                 <option value="Payatas">Payatas</option>
                                                 <option value="Amihan / Project 3">Amihan / Project 3</option>
                                                 <option value="Bagumbayan / Eastwood">Bagumbayan / Eastwood</option>
                                                 <option value="Bagumbuhay / Project 4">Bagumbuhay / Project 4</option>
                                                 <option value="Bayanihan / Project 4">Bayanihan / Project 4</option>
                                                 <option value="Blue Ridge A / Project 4">Blue Ridge A / Project 4</option>
                                                 <option value="Blue Ridge B / Project 4">Blue Ridge B / Project 4</option>
                                                 <option value="Camp Aguinaldo / Armed Forces (AFP), Camp General Emilio Aguinaldo">Camp Aguinaldo / Armed Forces (AFP), Camp General Emilio Aguinaldo</option>
                                                 <option value="Claro (Quirino 3-B) / Project 3">Claro (Quirino 3-B) / Project 3</option>
                                                 <option value="Dioquino Zobel / Project 4">Dioquino Zobel / Project 4</option>
                                                 <option value="Duyan-duyan / Project 3">Duyan-duyan / Project 3</option>
                                                 <option value="E. Rodriguez / Project 5, Cubao">E. Rodriguez / Project 5, Cubao</option>
                                                 <option value="East Kamias / Project 1">East Kamias / Project 1</option>
                                                 <option value="Escopa I / Project 4">Escopa I / Project 4</option>
                                                 <option value="Escopa II / Project 4">Escopa II / Project 4</option>
                                                 <option value="Escopa III / Project 4">Escopa III / Project 4</option>
                                                 <option value="Escopa IV / Project 4">Escopa IV / Project 4</option>
                                                 <option value="Libis / Eastwood">Libis / Eastwood</option>
                                                 <option value="Loyola Heights / Katipunan">Loyola Heights / Katipunan</option>
                                                 <option value="Mangga / Cubao">Mangga / Cubao</option>
                                                 <option value="Marilag / Project 4">Marilag / Project 4</option>
                                                 <option value="Masagana / Jacobo Zobel">Masagana / Jacobo Zobel</option>
                                                 <option value="Matandang Balara / Old Balara">Matandang Balara / Old Balara</option>
                                                 <option value="Milagrosa / Project 4">Milagrosa / Project 4</option>
                                                 <option value="Pansol / Balara">Pansol / Balara</option>
                                                 <option value="Quirino 2-A / Project 2, Anonas">Quirino 2-A / Project 2, Anonas</option>
                                                 <option value="Quirino 2-B / Project 2, Anonas">Quirino 2-B / Project 2, Anonas</option>
                                                 <option value="Quirino 2-C / Project 2, Anonas">Quirino 2-C / Project 2, Anonas</option>
                                                 <option value="Quirino 3-A / Project 3, Anonas">Quirino 3-A / Project 3, Anonas</option>
                                                 <option value="St. Ignatius">St. Ignatius</option>
                                                 <option value="San Roque / Cubao">San Roque / Cubao</option>
                                                 <option value="Silangan / Cubao"></option>
                                                 <option value="Socorro / Cubao, Araneta Center">Socorro / Cubao, Araneta Center</option>
                                                 <option value="Tagumpay / Project 4">Tagumpay / Project 4</option>
                                                 <option value="Ugong Norte / Green Meadows, Corinthian, Ortigas (southernmost)">Ugong Norte / Green Meadows, Corinthian, Ortigas (southernmost)</option>
                                                 <option value="Villa Maria Clara / Project 4">Villa Maria Clara / Project 4</option>
                                                 <option value="West Kamias / Project 5, Kamias">West Kamias / Project 5, Kamias</option>
                                                 <option value="White Plains">White Plains</option>

                                                 <option value="Bagong Lipunan ng Crame / Camp Crame, Philippine National Police (PNP)">Bagong Lipunan ng Crame / Camp Crame, Philippine National Police (PNP)</option>
                                                 <option value="Botocan / Diliman (northern half)">Botocan / Diliman (northern half)</option>
                                                 <option value="Central / Diliman">Central / Diliman</option>
                                                 <option value="Damayang Lagi / New Manila">Damayang Lagi / New Manila</option>
                                                 <option value="Don Manuel / Galas">Don Manuel / Galas</option>
                                                 <option value="Doña Aurora / Galas">Doña Aurora / Galas</option>
                                                 <option value="Doña Imelda / Galas, Sta. Mesa (border with City of Manila)">Doña Imelda / Galas, Sta. Mesa (border with City of Manila)</option>
                                                 <option value="Doña Josefa / Galas">Doña Josefa / Galas</option>
                                                 <option value="Horseshoe">Horseshoe</option>
                                                 <option value="Immaculate Concepcion / Cubao">Immaculate Concepcion / Cubao</option>
                                                 <option value="Kalusugan / St. Luke's">Kalusugan / St. Luke's</option>
                                                 <option value="Kamuning">Kamuning</option>
                                                 <option value="Kaunlaran / Cubao">Kaunlaran / Cubao</option>
                                                 <option value="Kristong Hari">Kristong Hari</option>
                                                 <option value="Krus na Ligas / Diliman">Krus na Ligas / Diliman</option>
                                                 <option value="Laging Handa / Diliman">Laging Handa / Diliman</option>
                                                 <option value="Malaya / Diliman">Malaya / Diliman</option>
                                                 <option value="Mariana / New Manila">Mariana / New Manila</option>
                                                 <option value="Obrero / Diliman (northern half), Project 1 (southern half)">Obrero / Diliman (northern half), Project 1 (southern half)</option>
                                                 <option value="Old Capitol Site / Diliman">Old Capitol Site / Diliman</option>
                                                 <option value="Paligsahan / Diliman">Paligsahan / Diliman</option>
                                                 <option value="Pinagkaisahan / Cubao">Pinagkaisahan / Cubao</option>
                                                 <option value="Pinyahan / Diliman, Triangle Park (northern triangle)">Pinyahan / Diliman, Triangle Park (northern triangle)</option>
                                                 <option value="Roxas / Project 1">Roxas / Project 1</option>
                                                 <option value="Sacred Heart / Diliman">Sacred Heart / Diliman</option>
                                                 <option value="San Isidro Galas / Galas">San Isidro Galas / Galas</option>
                                                 <option value="San Martin de Porres / Cubao">San Martin de Porres / Cubao</option>
                                                 <option value="San Vicente / Diliman">San Vicente / Diliman</option>
                                                 <option value="Santol">Santol</option>
                                                 <option value="Sikatuna Village / Diliman">Sikatuna Village / Diliman</option>
                                                 <option value="South Triangle / Diliman">South Triangle / Diliman</option>
                                                 <option value="Sto. Niño / Galas">Sto. Niño / Galas</option>
                                                 <option value="Tatalon">Tatalon</option>
                                                 <option value="Teacher's Village East / Diliman">Teacher's Village East / Diliman</option>
                                                 <option value="Teacher's Village West / Diliman">Teacher's Village West / Diliman</option>
                                                 <option value="U.P. Campus / Diliman">U.P. Campus / Diliman</option>
                                                 <option value="U.P. Village / Diliman">U.P. Village / Diliman</option>
                                                 <option value="Valencia / Gilmore Ave N. Domingo Ave.">Valencia / Gilmore Ave N. Domingo Ave.</option>
                                                 <option value="Bagbag / Novaliches District">Bagbag / Novaliches District</option>
                                                 <option value="Capri / Novaliches District">Capri / Novaliches District</option>
                                                 <option value="Fairview / La Mesa, Novaliches District">Fairview / La Mesa, Novaliches District</option>
                                                 <option value="Greater Lagro / Lagro, Novaliches District">Greater Lagro / Lagro, Novaliches District</option>
                                                 <option value="Gulod / Novaliches District">Gulod / Novaliches District</option>
                                                 <option value="Kaligayahan / Novaliches District, Zabarte">Kaligayahan / Novaliches District, Zabarte</option>
                                                 <option value="Nagkaisang Nayon / Novaliches District, General Luis">Nagkaisang Nayon / Novaliches District, General Luis</option>
                                                 <option value="North Fairview / Novaliches District">North Fairview / Novaliches District</option>
                                                 <option value="Novaliches Proper / Novaliches Bayan">Novaliches Proper / Novaliches Bayan</option>
                                                 <option value="Pasong Putik Proper / Novaliches District">Pasong Putik Proper / Novaliches District</option>
                                                 <option value="San Agustin / Novaliches District, Susano">San Agustin / Novaliches District, Susano</option>
                                                 <option value="San Bartolome / Novaliches District, Holy Cross">San Bartolome / Novaliches District, Holy Cross</option>
                                                 <option value="Sta. Lucia / Novaliches District, San Gabriel">Sta. Lucia / Novaliches District, San Gabriel</option>
                                                 <option value="Sta. Monica / Novaliches District">Sta. Monica / Novaliches District</option>
                                                 <option value="Apolonio Samson / Balintawak">Apolonio Samson / Balintawak</option>
                                                 <option value="Baesa / Project 8">Baesa / Project 8</option>
                                                 <option value="Balong Bato / Balintawak">Balong Bato / Balintawak</option>
                                                 <option value="Culiat / Tandang Sora">Culiat / Tandang Sora</option>
                                                 <option value="New Era / Iglesia ni Cristo/Central">New Era / Iglesia ni Cristo/Central</option>
                                                 <option value="Pasong Tamo / Tandang Sora">Pasong Tamo / Tandang Sora</option>
                                                 <option value="Sangandaan / Project 8">Sangandaan / Project 8</option>
                                                 <option value="Sauyo / Novaliches District">Sauyo / Novaliches District</option>
                                                 <option value="Talipapa / Novaliches District">Talipapa / Novaliches District</option>
                                                 <option value="Tandang Sora / Banlat">Tandang Sora / Banlat</option>
                                                 <option value="Unang Sigaw / Balintawak">Unang Sigaw / Balintawak</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['barangay_err']; ?></span> 
                     </div>
              </div>
 <!--- ROW START -->            
              <div class="form-row">

                     <div class="form-group col-md-3">
                                   <label for="civil_status">Civil Status</label>
                                          <select name="civil_status" id="civil_status" class="form-control form-control-sm <?php echo !empty($data['civil_status_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['civil_status']; ?>"><?php echo $data['civil_status']; ?></option>
                                                 <option value="Single">Single</option>
                                                 <option value="Married">Married</option>
                                                 <option value="Divorced">Divorced</option>
                                                 <option value="Widowed">Widowed</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['civil_status_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="nationality">Nationality</label>
                                          <select name="nationality" id="nationality" class="form-control form-control-sm <?php echo !empty($data['nationality_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['nationality']; ?>"><?php echo $data['nationality']; ?></option>
                                                 <option value="Filipino">Filipino</option>
                                                 <option value="Chinese">Chinese</option>
                                                 <option value="Japanese">Japanese</option>
                                                 <option value="Korean">Korean</option>
                                                 <option value="Indian">Indian</option>
                                                 <option value="Egyptian">Egyptian</option>
                                                 <option value="African">African</option>
                                                 <option value="American">American</option>
                                                 <option value="Australian">Australian</option>
                                                 <option value="Canadian">Canadian</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['nationality_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="religion">Religion</label>
                                          <select name="religion" id="religion" class="form-control form-control-sm <?php echo !empty($data['religion_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['religion']; ?>"><?php echo $data['religion']; ?></option>
                                                 <option value="Christian">Christian</option>
                                                 <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                                 <option value="Seventh-day Adventist">Seventh-day Adventist</option>
                                                 <option value="Mormon">Mormon</option>
                                                 <option value="Born Again">Born Again</option>
                                                 <option value="Muslim">Muslim</option>
                                                 <option value="Buddhist">Buddhist</option>
                                                 <option value="Hinduist">Hinduist</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['religion_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="advocacy_partner">Advocacy Partner</label>
                                   <input type="text" id="advocacy_partner" name="advocacy_partner" class="form-control form-control-sm <?php echo (!empty($data['advocacy_partner_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['advocacy_partner']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['advocacy_partner_err']; ?></span> 
                     </div>
              </div>
<!--- ROW START -->
              <div class="form-row">

                     <div class="form-group col-md-3">
                                   <label for="highest_educational_attainment">Highest Educational Attainment</label>
                                          <select name="highest_educational_attainment" id="highest_educational_attainment" class="form-control form-control-sm <?php echo !empty($data['highest_educational_attainment_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['highest_educational_attainment']; ?>"><?php echo $data['highest_educational_attainment']; ?></option>
                                                 <option value="No schooling completed, or less than 1 year">No schooling completed, or less than 1 year</option>
                                                 <option value="Nursery, kindergarten, and elementary (grades 1-8)">Nursery, kindergarten, and elementary (grades 1-8)</option>
                                                 <option value="High school (grades 9-12, no degree)">High school (grades 9-12, no degree)</option>
                                                 <option value="High school graduate (or equivalent)">High school graduate (or equivalent)</option>
                                                 <option value="Some college (1-4 years, no degree)">Some college (1-4 years, no degree)</option>
                                                 <option value="Associate's degree (including occupational or academic degrees)">Associate's degree (including occupational or academic degrees)</option>
                                                 <option value="Bachelor's degree">Bachelor's degree</option>
                                                 <option value="Master's degree">Master's degree</option>
                                                 <option value="Professional school degree">Professional school degree</option>
                                                 <option value="Doctorate degree">Doctorate degree</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['highest_educational_attainment_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="no_of_years_in_school">Number of Years in School</label>
                                          <select name="no_of_years_in_school" id="no_of_years_in_school" class="form-control form-control-sm <?php echo !empty($data['no_of_years_in_school_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['no_of_years_in_school']; ?>"><?php echo $data['no_of_years_in_school']; ?></option>
                                                 <option value="Less than 1 year">Less than 1 year</option>
                                                 <option value="1 to 8 years">1 to 8 years</option>
                                                 <option value="9 to 12 years">9 to 12 years</option>
                                                 <option value="13 to 16 years">13 to 16 years</option>
                                                 <option value="17 to 21 years">17 to 21 years</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['no_of_years_in_school_err']; ?></span> 
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="date_of_last_attendance_at_school">Date of Last Attendance at School</label>
                                          <input type="date" id="date_of_last_attendance_at_school" name="date_of_last_attendance_at_school" class="form-control form-control-sm <?php echo (!empty($data['date_of_last_attendance_at_school_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['date_of_last_attendance_at_school']; ?>"  >

                                   <span class="invalid-feedback"><?php echo $data['date_of_last_attendance_at_school_err']; ?></span>
                     </div>

                     <div class="form-group col-md-3">
                                   <label for="occupation_prior_to_surrender">Occupation Prior to Surrender:</label>
                                          <select name="occupation_prior_to_surrender" id="occupation_prior_to_surrender" class="form-control form-control-sm <?php echo !empty($data['occupation_prior_to_surrender_err']) ? 'is-invalid' : ''; ?>">
                                                 <option selected value="<?php echo $data['occupation_prior_to_surrender']; ?>"><?php echo $data['occupation_prior_to_surrender']; ?></option>
                                                 <option value="Employed">Employed</option>
                                                 <option value="Unemployed">Unemployed</option>
                                                 <option value="Self-Employed">Self-Employed</option>
                                          </select>

                                   <span class="invalid-feedback"><?php echo $data['occupation_prior_to_surrender_err']; ?></span> 
                     </div>
              </div>
<!--- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-3">
                            <label for="number_of_siblings">Number of Siblings</label>
                                   <select name="number_of_siblings" id="number_of_siblings" class="form-control form-control-sm <?php echo !empty($data['number_of_siblings_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['number_of_siblings']; ?>"><?php echo $data['number_of_siblings']; ?></option>
                                          <option value="None">None</option>
                                          <option value="One sibling">One sibling</option>
                                          <option value="Two siblings">Two siblings</option>
                                          <option value="Three siblings">Three siblings</option>
                                          <option value="Four siblings">Four siblings</option>
                                   </select>

                            <span class="invalid-feedback"><?php echo $data['number_of_siblings_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                            <label for="ordinal_position">Ordinal Position at the Family</label>
                                   <select name="ordinal_position" id="ordinal_position" class="form-control form-control-sm <?php echo !empty($data['ordinal_position_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['ordinal_position']; ?>"><?php echo $data['ordinal_position']; ?></option>
                                          <option value="Eldest">Eldest</option>
                                          <option value="Middle Child">Middle Child</option>
                                          <option value="Youngest">Youngest</option>
                                   </select>

                            <span class="invalid-feedback"><?php echo $data['ordinal_position_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                            <label for="living_arrangement">Living Arrangement</label>
                                   <select name="living_arrangement" id="living_arrangement" class="form-control form-control-sm <?php echo !empty($data['living_arrangement_err']) ? 'is-invalid' : ''; ?>">
                                   <option selected value="<?php echo $data['living_arrangement']; ?>"><?php echo $data['living_arrangement']; ?></option>
                                          <option value="With Parents">With Parents</option>
                                          <option value="With Relatives">With Relatives</option>
                                          <option value="With Spouse and Children">With Spouse and Children</option>
                                          <option value="Alone">Alone</option>
                                          <option value="With Children">With Children</option>
                                          <option value="With Live in Partner">With Live in Partner</option>
                                          <option value="With Siblings">With Siblings</option>
                                          <option value="With Friends">With Friends</option>
                                   </select>

                            <span class="invalid-feedback"><?php echo $data['living_arrangement_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                            <label for="estimated_monthly_inc">Estimated Monthly Income</label>
                                   <select name="estimated_monthly_inc" id="estimated_monthly_inc" class="form-control form-control-sm <?php echo !empty($data['estimated_monthly_inc_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['estimated_monthly_inc']; ?>"><?php echo $data['estimated_monthly_inc']; ?></option>
                                          <option value="5000">5000</option>
                                          <option value="10,000">10,000</option>
                                          <option value="15,000">15,000</option>
                                          <option value="20,000">20,000</option>
                                          <option value="25,000">25,000</option>
                                          <option value="30,000">30,000</option>
                                          <option value="35,000">35,000</option>
                                          <option value="40,000">40,000</option>
                                          <option value="45,000">45,000</option>
                                          <option value="50,000">50,000</option>
                                   </select>

                            <span class="invalid-feedback"><?php echo $data['estimated_monthly_inc_err']; ?></span>                     
              </div>
       </div>

<!-- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-3">
                     <label for="name_of_father">Name of Father</label>
                                   <input type="text" id="name_of_father" name="name_of_father" class="form-control form-control-sm <?php echo (!empty($data['name_of_father_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_father']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_father_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                            <label for="occupation_of_father">Occupation of Father</label>
                                   <select name="occupation_of_father" id="occupation_of_father" class="form-control form-control-sm <?php echo !empty($data['occupation_of_father_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['occupation_of_father']; ?>"><?php echo $data['occupation_of_father']; ?></option>
                                          <option value="Employed">Employed</option>
                                          <option value="Unemployed">Unemployed</option>
                                          <option value="Self-Employed">Self-Employed</option>
                                   </select>

                            <span class="invalid-feedback"><?php echo $data['occupation_of_father_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="name_of_mother">Name of Mother</label>
                                   <input type="text" id="name_of_mother" name="name_of_mother" class="form-control form-control-sm <?php echo (!empty($data['name_of_mother_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_mother']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_mother_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="occupation_of_mother">Occupation of Mother</label>
                            <select name="occupation_of_mother" id="occupation_of_mother" class="form-control form-control-sm <?php echo !empty($data['occupation_of_mother_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['occupation_of_mother']; ?>"><?php echo $data['occupation_of_mother']; ?></option>
                                          <option value="Employed">Employed</option>
                                          <option value="Unemployed">Unemployed</option>
                                          <option value="Self-Employed">Self-Employed</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['occupation_of_mother_err']; ?></span>
              </div>
       </div>

<!-- ROW START -->

       <div class="form-row">
              <div class="form-group col-md-4">
                     <label for="name_of_spouse">Name of Spouse</label>
                                   <input type="text" id="name_of_spouse" name="name_of_spouse" class="form-control form-control-sm <?php echo (!empty($data['name_of_spouse_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_spouse']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_spouse_err']; ?></span>
              </div>

              <div class="form-group col-md-4">
                     <label for="occupation_of_spouse">Occupation of Spouse</label>
                            <select name="occupation_of_spouse" id="occupation_of_spouse" class="form-control form-control-sm <?php echo !empty($data['occupation_of_spouse_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['occupation_of_spouse']; ?>"><?php echo $data['occupation_of_spouse']; ?></option>
                                          <option value="Employed">Employed</option>
                                          <option value="Unemployed">Unemployed</option>
                                          <option value="Self-Employed">Self-Employed</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['occupation_of_spouse_err']; ?></span>
              </div>

              <div class="form-group col-md-4">
                     <label for="address_of_spouse">Address of Spouse</label>
                                   <input type="text" id="address_of_spouse" name="address_of_spouse" class="form-control form-control-sm <?php echo (!empty($data['address_of_spouse_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['address_of_spouse']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['address_of_spouse_err']; ?></span>
              </div>
       </div>

<!-- ROW START -->

       <div class="form-row"> 

              <div class="form-group col-md-2">
                            <label for="age_at_first_drug_use">Age at First Drug Use</label>
                                   <input type="text" id="age_at_first_drug_use" name="age_at_first_drug_use" class="form-control form-control-sm <?php echo (!empty($data['age_at_first_drug_use_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['age_at_first_drug_use']; ?>"  >

                            <span class="invalid-feedback"><?php echo $data['age_at_first_drug_use_err']; ?></span>
              </div>

              <div class="form-group col-md-2">
                            <label for="date_of_last_drug_use">Date of Last Drug Use</label>
                                   <input type="date" id="date_of_last_drug_use" name="date_of_last_drug_use" class="form-control form-control-sm <?php echo (!empty($data['date_of_last_drug_use_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['date_of_last_drug_use']; ?>"  >

                            <span class="invalid-feedback"><?php echo $data['date_of_last_drug_use_err']; ?></span>
              </div>              
              

              <div class="form-group col-md-4">
                     <label for="length_of_drug_use">Length of Drug Use</label>
                            <select name="length_of_drug_use" id="length_of_drug_use" class="form-control form-control-sm <?php echo !empty($data['length_of_drug_use_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['length_of_drug_use']; ?>"><?php echo $data['length_of_drug_use']; ?></option>
                                          <option value="Less than 2 years">Less Than 2 Years</option>
                                          <option value="Equal or More than 2 ears but less than 4 years">Equal or More than 2 ears but less than 4 years</option>
                                          <option value="Equal or More than 4 ears but less than 6 years">Equal or More than 4 ears but less than 6 years</option>
                                          <option value="Equal or more than 6 years">Equal or more than 6 years</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['length_of_drug_use_err']; ?></span>
              </div>

              <div class="form-group col-md-4">
                     <label for="frequency_of_drug_use">Frequency of Drug Use</label>
                            <select name="frequency_of_drug_use" id="frequency_of_drug_use" class="form-control form-control-sm <?php echo !empty($data['frequency_of_drug_use_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['frequency_of_drug_use']; ?>"><?php echo $data['frequency_of_drug_use']; ?></option>
                                          <option value="Occasionally">Occasionally</option>
                                          <option value="Daily">Daily</option>
                                          <option value="Weekly">Weekly</option>
                                          <option value="Monthly">Monthly</option>
                                          <option value="2-5 times a week">2-5 times a week</option>
                                          <option value="2-5 times a month">2-5 times a month</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['frequency_of_drug_use_err']; ?></span>
              </div>
       </div>

<!-- ROW START -->
       <div class="form-row"> 
              <div class="form-group col-md-3">
                     <label for="means_to_support_drug_habbit">Means to Support Drug Habit</label>
                            <select name="means_to_support_drug_habbit" id="means_to_support_drug_habbit" class="form-control form-control-sm <?php echo !empty($data['means_to_support_drug_habbit_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['means_to_support_drug_habbit']; ?>"><?php echo $data['means_to_support_drug_habbit']; ?></option>
                                          <option value="Allowance">Allowance</option>
                                          <option value="Free">Free</option>
                                          <option value="Work Income">Work Income</option>
                                          <option value="Alms">Alms</option>
                                          <option value="Stealing and Selling">Stealing and Selling</option>
                                          <option value="Pushing and Running">Pushing and Running</option>
                                          <option value="Gambling">Gambling</option>
                                          <option value="Sex for Drugs(MSM)">Sex for Drugs(MSM)</option>
                                          <option value="Self-Employed Work Income">Self-Employed Work Income</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['means_to_support_drug_habbit_err']; ?></span>
              </div>
              
              <div class="form-group col-md-3">
                     <label for="area_where_drugs_are_being_abused">Area Where Drugs Are Being Abused</label>
                            <select name="area_where_drugs_are_being_abused" id="area_where_drugs_are_being_abused" class="form-control form-control-sm <?php echo !empty($data['area_where_drugs_are_being_abused_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['area_where_drugs_are_being_abused']; ?>"><?php echo $data['area_where_drugs_are_being_abused']; ?></option>
                                          <option value="Drug Den">Drug Den</option>
                                          <option value="Own House">Own House</option>
                                          <option value="Uncrowded Public Building / Structure">Uncrowded Public Building / Structure</option>
                                          <option value="Friend's House">Friend's House</option>
                                          <option value="School">School</option>
                                          <option value="Work Place">Work Place</option>
                                          <option value="Public Transport Terminal">Public Transport Terminal</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['area_where_drugs_are_being_abused_err']; ?></span>
              </div>
              
              <div class="form-group col-md-3">
                     <label for="daily_expense_on_drugs">Daily Expense on Drugs</label>
                            <select name="daily_expense_on_drugs" id="daily_expense_on_drugs" class="form-control form-control-sm <?php echo !empty($data['daily_expense_on_drugs_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['daily_expense_on_drugs']; ?>"><?php echo $data['daily_expense_on_drugs']; ?></option>
                                          <option value="100 Below">100 Below</option>
                                          <option value="100">100</option>
                                          <option value="200">200</option>
                                          <option value="300">300</option>
                                          <option value="400">400</option>
                                          <option value="500">500</option>
                                          <option value="600">600</option>
                                          <option value="700">700</option>
                                          <option value="800">800</option>
                                          <option value="900">900</option>
                                          <option value="1,000">1,000</option>
                                          <option value="1,100">1,100</option>
                                          <option value="1,200">1,200</option>
                                          <option value="1,300">1,300</option>
                                          <option value="1,400">1,400</option>
                                          <option value="1,500">1,500</option>
                                          <option value="1,600">1,600</option>
                                          <option value="1,700">1,700</option>
                                          <option value="1,800">1,800</option>
                                          <option value="1,900">1,900</option>
                                          <option value="2,000">2,000</option>
                                          <option value="2,000 Above">2,000 Above</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['daily_expense_on_drugs_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="source_of_drugs">Source of Drugs</label>
                            <select name="source_of_drugs" id="source_of_drugs" class="form-control form-control-sm <?php echo !empty($data['source_of_drugs_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['source_of_drugs']; ?>"><?php echo $data['source_of_drugs']; ?></option>
                                          <option value="Drug Store">Drug Store</option>
                                          <option value="Friend">Friend</option>
                                          <option value="Pusher">Pusher</option>
                                          <option value="Relative">Relative</option>
                                          <option value="Runner">Runner</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['source_of_drugs_err']; ?></span>
              </div>
       </div>   
       
<!-- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-3">
                            <label for="place_of_drug_source">Place of Drug Source</label>
                                   <input type="text" id="place_of_drug_source" name="place_of_drug_source" class="form-control form-control-sm <?php echo (!empty($data['place_of_drug_source_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['place_of_drug_source']; ?>"  >

                            <span class="invalid-feedback"><?php echo $data['place_of_drug_source_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="primary_reason_for_using_drugs">Primary Reason for Using Drugs</label>
                            <select name="primary_reason_for_using_drugs" id="primary_reason_for_using_drugs" class="form-control form-control-sm <?php echo !empty($data['primary_reason_for_using_drugs_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['primary_reason_for_using_drugs']; ?>"><?php echo $data['primary_reason_for_using_drugs']; ?></option>
                                          <option value="Curiosity / Experimentation">Curiosity / Experimentation</option>
                                          <option value="Energy">Energy</option>
                                          <option value="Family Problem">Family Problem</option>
                                          <option value="Depression / Frustrations">Depression / Frustrations</option>
                                          <option value="Peer Pressure">Peer Pressure</option>
                                          <option value="For Income">For Income</option>
                                          <option value="Self-Medication">Self-Medication</option>
                                          <option value="Boredom">Boredom</option>
                                          <option value="Intense Cravings (Relapse)">Intense Cravings (Relapse)</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['primary_reason_for_using_drugs_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     
                     <label for="drug_used_for_the_last_12_months">Primary Reason for Using Drugs</label>
                            <select name="drug_used_for_the_last_12_months" id="drug_used_for_the_last_12_months" class="form-control form-control-sm <?php echo !empty($data['drug_used_for_the_last_12_months_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['drug_used_for_the_last_12_months']; ?>"><?php echo $data['drug_used_for_the_last_12_months']; ?></option>
                                          <option value="Cannabis">Cannabis</option>
                                          <option value="Inhalants">Inhalants</option>
                                          <option value="Narcotic Analgesics">Narcotic Analgesics</option>
                                          <option value="Dissociative Anesthetics">Dissociative Anesthetics</option>
                                          <option value="Hallucinogens">Hallucinogens</option>
                                          <option value="CNS Stimulants">CNS Stimulants</option>
                                          <option value="Central Nervous System (CNS) Depressants">Central Nervous System (CNS) Depressants</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['drug_used_for_the_last_12_months_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="date_of_drug_dependency_evaluation">Date of Drug Dependency Evaluation</label>
                            <input type="date" id="date_of_drug_dependency_evaluation" name="date_of_drug_dependency_evaluation" class="form-control form-control-sm <?php echo (!empty($data['date_of_drug_dependency_evaluation_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['date_of_drug_dependency_evaluation']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['date_of_drug_dependency_evaluation_err']; ?></span>
              </div>
       </div>
<!-- ROW START -->
       <div class="form-row">
              <div class="form-group col-md-3">
                     <label for="name_of_physician_doh">Name of Physician</label>
                                   <input type="text" id="name _of_physician_doh" name="name_of_physician_doh" class="form-control form-control-sm <?php echo (!empty($data['name_of_physician_doh_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_physician_doh']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_physician_doh_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="findings_recommendations">Findings / Recommendations</label>
                            <select name="findings_recommendations" id="findings_recommendations" class="form-control form-control-sm <?php echo !empty($data['findings_recommendations_err']) ? 'is-invalid' : ''; ?>">

                                          <option selected value="<?php echo $data['findings_recommendations']; ?>"><?php echo $data['findings_recommendations']; ?></option>
                                          <option value="Drug Free">Drug Free</option>
                                          <option value="For Counseling">For Counseling</option>
                                          <option value="For Community Based Rehab Program - CBRP">For Community Based Rehab Program - CBRP</option>
                                          <option value="For Drug Test">For Drug Test</option>
                                          <option value="Psychiatric Treatment">Psychiatric Treatment</option>
                                          <option value="For Legal Action">For Legal Action</option>
                                          <option value="For Treatment and Rehabilitation">For Treatment and Rehabilitation</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['findings_recommendations_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="facility_type">Facility Type</label>
                            <select name="facility_type" id="facility_type" class="form-control form-control-sm <?php echo !empty($data['facility_type_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['facility_type']; ?>"><?php echo $data['facility_type']; ?></option>
                                          <option value="Option to Follow">Option to Follow</option>
                                          <option value="Option to Follow">Option to Follow</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['facility_type_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="intervention">Intervention</label>
                            <select name="intervention" id="intervention" class="form-control form-control-sm <?php echo !empty($data['intervention_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['intervention']; ?>"><?php echo $data['intervention']; ?></option>
                                          <option value="Option to Follow">Option to Follow</option>
                                          <option value="Option to Follow">Option to Follow</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['intervention_err']; ?></span>
              </div>
       </div>
<!-- ROW START -->
       <div class="form-row">
              <div class="form-group col-md-3">
                     <label for="risk_level_assist">Risk Level / Assist</label>
                            <select name="risk_level_assist" id="risk_level_assist" class="form-control form-control-sm <?php echo !empty($data['risk_level_assist_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['risk_level_assist']; ?>"><?php echo $data['risk_level_assist']; ?></option>
                                          <option value="Mild">Mild</option>
                                          <option value="Moderate">Moderate</option>
                                          <option value="Severe">Severe</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['risk_level_assist_err']; ?></span>
              </div>
              
              <div class="form-group col-md-3">
                     <label for="date_of_screening_assist">Date of Screening / ASSIST</label>
                            <select name="date_of_screening_assist" id="date_of_screening_assist" class="form-control form-control-sm <?php echo !empty($data['date_of_screening_assist_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['date_of_screening_assist']; ?>"><?php echo $data['date_of_screening_assist']; ?></option>
                                          <option value="Option to Follow">Option to Follow</option>
                                          <option value="Option to Follow">Option to Follow</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['date_of_screening_assist_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="name_of_social_worker">Name of Social Worker / Physician</label>
                                   <input type="text" id="name_of_social_worker" name="name_of_social_worker" class="form-control form-control-sm <?php echo (!empty($data['name_of_social_worker_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_social_worker']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_social_worker_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="referred_to_result_of_screening">Referred to (Result of Screening)</label>
                            <select name="referred_to_result_of_screening" id="referred_to_result_of_screening" class="form-control form-control-sm <?php echo !empty($data['referred_to_result_of_screening_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['referred_to_result_of_screening']; ?>"><?php echo $data['referred_to_result_of_screening']; ?></option>
                                          <option value="Counseling">Counseling</option>
                                          <option value="Drug Dependency Evaluation">Drug Dependency Evaluation</option>
                                          <option value="Rehabilitation">Rehabilitation</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['referred_to_result_of_screening_err']; ?></span>
              </div>
       </div>
<!-- ROW START -->
       <div class="form-row">
              <div class="form-group col-md-3">
                     <label for="assessment_result">Assessment Result</label>
                                   <input type="text" id="assessment_result" name="assessment_result" class="form-control form-control-sm <?php echo (!empty($data['assessment_result_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['assessment_result']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['assessment_result_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="re_dde_date">Re-DDE Date</label>
                            <input type="date" id="re_dde_date" name="re_dde_date" class="form-control form-control-sm <?php echo (!empty($data['re_dde_date_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['re_dde_date']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['re_dde_date_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="name_of_physician_dde">Name of Physician</label>
                                   <input type="text" id="name_of_physician_dde" name="name_of_physician_dde" class="form-control form-control-sm <?php echo (!empty($data['name_of_physician_dde_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name_of_physician_dde']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['name_of_physician_dde_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="findings_recommendations_dde">Findings / Recommendations</label>
                            <select name="findings_recommendations_dde" id="findings_recommendations_dde" class="form-control form-control-sm <?php echo !empty($data['findings_recommendations_dde_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['findings_recommendations_dde']; ?>"><?php echo $data['findings_recommendations_dde']; ?></option>
                                          <option value="Community Based Rehab">Community Based Rehab</option>
                                          <option value="Intensive Outpatient Program">Intensive Outpatient Program</option>
                                          <option value="Counseling">Counseling</option>
                                          <option value="Treatment and Rehabilitation">Treatment and Rehabilitation</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['findings_recommendations_dde_err']; ?></span>
              </div>
       </div>       
<!-- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-3">
                     <label for="start_date">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="form-control form-control-sm <?php echo (!empty($data['start_date_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['start_date']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['start_date_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="end_date">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="form-control form-control-sm <?php echo (!empty($data['end_date_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['end_date']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['end_date_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="provided_by">Provided By</label>
                            <input type="text" id="provided_by" name="provided_by" class="form-control form-control-sm <?php echo (!empty($data['provided_by_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['provided_by']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['provided_by_err']; ?></span>
              </div>

              
              <div class="form-group col-md-3">
                     <label for="complete_flag">Complete Flag</label>
                                   <input type="text" id="complete_flag" name="complete_flag" class="form-control form-control-sm <?php echo (!empty($data['complete_flag_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['complete_flag']; ?>"  >

                     <span class="invalid-feedback"><?php echo $data['complete_flag_err']; ?></span>
              </div>
       </div>
<!-- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-4">
                     <label for="intervention_provided_recommendation">Intervention Provided / Recommendation</label>
                            <select name="intervention_provided_recommendation" id="intervention_provided_recommendation" class="form-control form-control-sm <?php echo !empty($data['intervention_provided_recommendation_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['intervention_provided_recommendation']; ?>"><?php echo $data['intervention_provided_recommendation']; ?></option>
                                          <option value="Drug Free">Drug Free</option>
                                          <option value="Community Based Rehabilitation Program">Community Based Rehabilitation Program</option>
                                          <option value="For Counseling">For Counseling</option>
                                          <option value="For Drug Test">For Drug Test</option>
                                          <option value="Intensive Outpatient Program">Intensive Outpatient Program</option>
                                          <option value="For Legal Action">For Legal Action</option>
                                          <option value="Psychiatrict Treatment">Psychiatrict Treatment</option>
                                          <option value="Treatment and Rehabilitation">Treatment and Rehabilitation</option>
                                          <option value="Ongoing Process DDE">Ongoing Process DDE</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['intervention_provided_recommendation_err']; ?></span>
              </div>

              <div class="form-group col-md-4">
                     <label for="remarks">Remarks</label>
                            <select name="remarks" id="remarks" class="form-control form-control-sm <?php echo !empty($data['remarks_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['remarks']; ?>"><?php echo $data['remarks']; ?></option>
                                          <option value="Admitted to TAHANAN">Admitted to TAHANAN</option>
                                          <option value="Released from TAHANAN">Released from TAHANAN</option>
                                          <option value="Applied in Plea Bargaining">Applied in Plea Bargaining</option>
                                          <option value="Completed CBRP but needs Drug Test">Completed CBRP but needs Drug Test</option>
                                          <option value="Completed CBRP but positive in Drug Test">Completed CBRP but positive in Drug Test</option>
                                          <option value="Drug Free">Drug Free</option>
                                          <option value="For Rehabilitation">For Rehabilitation</option>
                                          <option value="Graduated CBRP 1st Batch">Graduated CBRP 1<sup>st</sup> Batch</option>
                                          <option value="Graduated CBRP 2nd Batch">Graduated CBRP 2<sup>nd</sup> Batch</option>
                                          <option value="Graduated CBRP 3rd Batch">Graduated CBRP 3<sup>rd</sup> Batch</option>
                                          <option value="Graduated CBRP 4th Batch">Graduated CBRP 4<sup>th</sup> Batch</option>
                                          <option value="Graduated CBRP 5th Batch">Graduated CBRP 5<sup>th</sup> Batch</option>
                                          <option value="Graduated CBRP 6th Batch">Graduated CBRP 6<sup>th</sup> Batch</option>
                                          <option value="Graduated CBRP 7th Batch">Graduated CBRP 7<sup>th</sup> Batch</option>
                                          <option value="Graduated CBRP 8th Batch">Graduated CBRP 8<sup>th</sup> Batch</option>
                                          <option value="Graduated CBRP 9th Batch">Graduated CBRP 9<sup>th</sup> Batch</option>
                                          <option value="For Legal Action">For Legal Action</option>
                                          <option value="Rehab in Private">Rehab in Private</option>
                                          <option value="No Intervenstion Needed">No Intervenstion Needed</option>
                                          <option value="QCPD Profiled">QCPD Profiled</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['remarks_err']; ?></span>
              </div>

              <div class="form-group col-md-4">
                     <label for="others_current_status">Others Current Status</label>
                            <select name="others_current_status" id="others_current_status" class="form-control form-control-sm <?php echo !empty($data['others_current_status_err']) ? 'is-invalid' : ''; ?>">
                                          <option selected value="<?php echo $data['others_current_status']; ?>"><?php echo $data['others_current_status']; ?></option>
                                          <option value="Inactive">Inactive</option>
                                          <option value="Employment">Employment</option>
                                          <option value="Applied in Plea Bargaining">Applied in Plea Bargaining</option>
                                          <option value="Active User">Active User</option>
                                          <option value="Arrested">Arrested</option>
                                          <option value="Transferred Residence">Transferred Residence</option>
                                          <option value="Medical Reasons">Medical Reasons</option>
                                          <option value="Cannot Be Located">Cannot Be Located</option>
                                          <option value="Deceased">Deceased</option>
                                          <option value="For Reassessment">For Reassessment</option>
                                          <option value="Refused to Undergo Rehab">Refused to Undergo Rehab</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['others_current_status_err']; ?></span>
              </div>
       </div>

<!-- ROW START -->

       <div class="form-row">

              <div class="form-group col-md-6">
                     <label for="enrolled_in_sustainability">Enrolled in Sustainability Provided by LGU / Brgy. / Other Affiliation</label>
                            <select name="enrolled_in_sustainability" id="enrolled_in_sustainability" class="form-control form-control-sm <?php echo !empty($data['enrolled_in_sustainability_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['enrolled_in_sustainability']; ?>"><?php echo $data['enrolled_in_sustainability']; ?></option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['enrolled_in_sustainability_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="applied_in_plea_bargaining">Applied in Plea Bargaining</label>
                            <select name="applied_in_plea_bargaining" id="applied_in_plea_bargaining" class="form-control form-control-sm <?php echo !empty($data['applied_in_plea_bargaining_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['applied_in_plea_bargaining']; ?>"><?php echo $data['applied_in_plea_bargaining']; ?></option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['applied_in_plea_bargaining_err']; ?></span>
              </div>

              <div class="form-group col-md-3">
                     <label for="plea_bargaining_remarks">Plea Bargaining Remarks</label>
                            <select name="plea_bargaining_remarks" id="plea_bargaining_remarks" class="form-control form-control-sm <?php echo !empty($data['plea_bargaining_remarks_err']) ? 'is-invalid' : ''; ?>">
                            <option selected value="<?php echo $data['plea_bargaining_remarks']; ?>"><?php echo $data['plea_bargaining_remarks']; ?></option>
                                          <option value="Court Order for QCADAAC Counselling">Court Order for QCADAAC Counselling</option>
                                          <option value="Court Order for QCADAAC Counselling (No Bail)">Court Order for QCADAAC Counselling (No Bail)</option>
                                          <option value="No Court Order">No Court Order</option>
                                          <option value="Finished Counselling">Finished Counselling</option>
                            </select>

                     <span class="invalid-feedback"><?php echo $data['plea_bargaining_remarks_err']; ?></span>
              </div>
       </div>       

             
                     <button type="submit" class="btn btn-primary pull-right">Update</button>
              
              
              </form>
       </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>