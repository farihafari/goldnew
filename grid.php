<?php
include('query.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-2 grid1">
                <div class="grid1-child grid1-item-1"  data-bs-toggle="modal"
                data-bs-target="#profile">
                    
                </div>
                <div class="grid1-child grid1-item-2"></div>

            </div>
        <div class="col-lg-4 grid2">
            <div class="grid2-child grid2-item-1"  data-bs-toggle="modal"
            data-bs-target="#new-modal" ></div>
            <div class="grid2-child grid2-item-2"></div>
            <div class="grid2-child grid2-item-3"></div>
                <div class="grid2-child grid2-item-4"></div>
                <div class="grid2-child grid2-item-5"></div>
                <div class="grid2-child grid2-item-6"></div>
                <div class="grid2-child grid2-item-7"></div>
        </div>
        <div class="col-lg-3 grid3">
            <div class="grid3-child grid3-item-1"></div>
            <div class="grid3-child grid3-item-2"></div>
            <div class="grid3-child grid3-item-3"></div>
                <div class="grid3-child grid3-item-4"></div>
                <div class="grid3-child grid3-item-5"></div>
                <div class="grid3-child grid3-item-6"></div>
                <div class="grid3-child grid3-item-7"></div>
                <div class="grid3-child grid3-item-8"></div>
                <div class="grid3-child grid3-item-9"></div>
              
        </div>
        <div class="col-lg-3 grid4">
            <div class="grid4-child grid4-item-1"></div>
            <div class="grid4-child grid4-item-2"></div>
            <div class="grid4-child grid4-item-3"></div>
                <div class="grid4-child grid4-item-4"></div>
                <div class="grid4-child grid4-item-5"></div>
                <div class="grid4-child grid4-item-6"></div>
                <div class="grid4-child grid4-item-7"></div>
        </div>
        </div>
        <div class="row justify-content-center ">
<div class="col-lg-3 grid5 ">
    <div class="grid5-child grid5-item-1"></div>
    <div class="grid5-child grid5-item-2"></div>
    
</div>
            </div>
        </div>
        
    </div>
 
    
    <!-- Modal Body -->
    
    <div
        class="modal fade"
        id="profile"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
    >
        <div
            class="modal-dialog  modal-dialog-centered"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                  
                    
                        <button
                        type="button"
                        class="close-btn "
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ><i class="fa-solid fa-xmark pb-3"></i></button>
                   
                    
                 
                </div>
                <div class="modal-body container-fluid">
                    <!-- first section -->
                     <form action="" method="post">
                    <section id="profile-form">
                    <div class="row justify-content-center">
                        <div class="col-1">
                            <i class="fa-solid fa-circle-up" style="color: #4b6d75;"></i>
                            <p class="text-para">Top</p>
                        </div>
                            <div class="col-1">
                                <i class="fa-regular fa-square-caret-left" style="color: #4b6d75;"></i>
                                <p class="text-para">Prev</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-regular fa-square-caret-right" style="color: #4b6d75;"></i>
                                <p class="text-para">Next</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-circle-down" style="color: #4b6d75;"></i>
                                <p class="text-para">Bottom</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-magnifying-glass"  style="color: #4b6d75;" id="search-icon"></i>
                                <p class="text-para">Search</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-sharp fa-regular fa-pen-to-square" style="color: #4b6d75;"></i>                                <p class="text-para">Edit</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-envelope-open-text" style="color: #4b6d75;"></i>
                                <p class="text-para">New</p>
                            </div>
                            <div class="col-1" style="background-color: #4b6d75;">

                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-scissors" style="color: #4b6d75;"></i>
                                <p class="text-para">Delete </p>
                            </div>
                            <div class="col-1">
                <button type='submit' name='save' style="border:none;background-color:transparent"> <i class="fa-solid fa-file-arrow-down" style="color: #4b6d75;" name="hello" ></i>
                               <p class="text-para">Save</p>
                               </a></button>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-envelope-open-text" class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close" style="color: #4b6d75;"></i>
                                <p class="text-para">Exit</p>
                            </div>
                           

                    </div>
<div class="row">
    <div class="col-lg-6" id="ci">
        <h5 class="text-center text-uppercase mt-3 ">customer information</h5>
        <div class="row mt-5">
            <div class="col-lg-3 mt-3">
              <label for="" class="col-form-label form-label">Acc ID :</label>
            </div>
            <div class="col-lg-9 mt-3">
              <input type="text"  class="form-input" id="accId" name="accId" value="<?php echo $countRow + 1?>">
            </div>
            <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Party Name :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <input type="text"  class="form-input" name="partyName">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Contact :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <input type="text"  class="form-input" name="contact">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Date :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <input type="date"  class="form-input" name="date">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Address :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <textarea  cols="43" rows="9" name="address"></textarea>
              </div>
          </div>
         
    </div>
    <div class="col-lg-6 mt-4" id="ob">
        <h5 class="text-center text-uppercase  ">opening balance</h5>
        <p class="text-capitalize form-para">recivable</p>
        <div class="row">
            
            <div class="col-lg-3">
              <label for="" class="col-form-label form-label">Gold :</label>
            </div>
            <div class="col-lg-9">
              <input type="text"  class="form-input" value="0.00" name="recGold">
            </div>
            <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Cash :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <input type="text"  class="form-input" value="0.00" name="recCash">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Gold Type :</label>
              </div>
              <div class="col-lg-9 mt-3">
               <select name="recGoldType">
                <option value="Teezabi">Teezabi</option>
                <option value="piece">piece</option>
                

               </select>
              </div>
            <p class="text-capitalize form-para mt-5">payable</p>

              <div class="col-lg-3">
                <label for="" class="col-form-label form-label">Gold :</label>
              </div>
              <div class="col-lg-9">
                <input type="text"  class="form-input" value="0.00" name="payGold">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Cash :</label>
              </div>
              <div class="col-lg-9 mt-3">
                <input type="text"  class="form-input" value="0.00" name="payCash">
              </div>
              <div class="col-lg-3 mt-3">
                <label for="" class="col-form-label form-label">Gold Type :</label>
              </div>
              <div class="col-lg-9 mt-3">
               <select name="payGoldType">
                <option value="Teezabi">Teezabi</option>
                <option value="piece">piece</option>

               </select>
              </div>
          </div>
    </div>
</div>
                </section>
                </form>
                <!-- first section -->

                 <!-- search section -->
                 <section id="search-form">
                  <div class="row justify-content-center ">
                    <div class="col-1">
                      <i class="fa-solid fa-circle-up" style="color: #4b6d75;"></i>
                      <p class="text-para">Top</p>
                    </div>
                    <div class="col-1">
                      <i class="fa-regular fa-square-caret-left" style="color: #4b6d75;"></i>
                      <p class="text-para">Prev</p>
                    </div>
                    <div class="col-1">
                      <i class="fa-regular fa-square-caret-right" style="color: #4b6d75;"></i>
                      <p class="text-para">Next</p>
                    </div>
                    <div class="col-1">
                      <i class="fa-solid fa-circle-down" style="color: #4b6d75;"></i>
                      <p class="text-para">Bottom</p>
                    </div>
                    <div class="col-4 " style="background-color: #4b6d75;padding-top: 4%;">
      
                      <h5 class="text-center text-uppercase text-light">view parties profile</h5>
                    </div>
      
                    <div class="col-1">
                      <i class="fa-solid fa-scissors" style="color: #4b6d75;"></i>
                      <p class="text-para">Delete </p>
                    </div>
                    <div class="col-1">
                      <i class="fa-solid fa-file-arrow-down" style="color: #4b6d75;"></i>
                      <p class="text-para">Save</p>
                    </div>
                    <div class="col-1">
                      <i class="fa-solid fa-envelope-open-text" style="color: #4b6d75;" 
                     id="exit-search"></i>
                      <p class="text-para" >Exit</p>
                    </div>
      
      
                  </div>
                  <div class="container border border-success mt-3 search-con">
                    <h5 class="text-uppercase bg-light searchId">search availability</h5>
      
                    <div class="mb-3 row justify-content-end">
                      <div class="col-lg-7">
                        <label for="" class="form-label pe-4 text-primary-color">Search Bar: </label>
                        <input type="text" class="search-input ">
                      </div>
                      <div class="form-check form-check-inline col-lg-4 d-flex justify-content-end">
                        <input class="" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label form-label text-primary-color pe-4 ps-1 mt-2" for="inlineRadio1">ID</label>
                        <input class="" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                      <label class="form-check-label form-label text-primary-color pe-4 ps-1  mt-2" for="inlineRadio2">NAME</label>
                      <input class= "" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                      value="option3">
                    <label class="form-check-label form-label text-primary-color pe-4 ps-1 mt-2" for="inlineRadio3">PHONE</label>
                    </div>
                      
                    
                    </div>
                  </div>
                  <div class="row mt-3 search-con" id="searchtb">
                    <table class="table table-bordered table-bordered mt-2">
                     <tr>
                       <td>
                       </td>
                       <td>id</td>
                       <td>name</td>
                       <td>gold_rec</td>
                       <td>cash_rec</td>
                       <td>type_rec</td>
                       <td>gold_pay</td>
                       <td>cash_pay</td>
                       <td>type_pay</td>
                     </tr>
                     <?php
                     $query = $pdo ->query('select * from partiesprofile');
                     $row = $query->fetchAll(PDO::FETCH_ASSOC);
                     foreach($row as $tbData){
                      ?>  
                     <tr>
                       <td><i class="fa-solid fa-caret-right" style="color: #4b6d75;"></i></td>
                       <td><?php echo $tbData['acc_id']?></td>
                       <td><?php echo $tbData['party_name']?></td>
                       <td><?php echo $tbData['recivable_gold']?></td>
                       <td><?php echo $tbData['recivable_cash']?></td>
                       <td><?php echo $tbData['recivable_Type']?></td>
                       <td><?php echo $tbData['payable_gold']?></td>
                       <td><?php echo $tbData['payable_cash']?></td>
                       <td><?php echo $tbData['payable_Type']?></td>
                     </tr> 
                      <?php
                     }
                     ?>
                     
                  
                    </table>
                   </div>
                </section>
                  <!-- search section -->
                </div>
                
            </div>
        </div>
    </div>
    <!--new modal  -->
    <div class="modal fade" id="new-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document" id="new-window">
      <div class="modal-content">
        <div class="modal-header">


          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>



        </div>
        <div class="modal-body container-fluid ">
          <!-- first section -->
           <form action="" method="post">
          <section id="">
              <div class="row">
                      <div class="col-lg-10 row">
                        <div class="col-lg-1 col-1">
                            <i class="fa-solid fa-circle-up" style="color: #4b6d75;"></i>
                            <p class="text-para">Top</p>
                        </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-regular fa-square-caret-left" style="color: #4b6d75;"></i>
                                <p class="text-para">Prev</p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-regular fa-square-caret-right" style="color: #4b6d75;"></i>
                                <p class="text-para">Next</p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-solid fa-circle-down" style="color: #4b6d75;"></i>
                                <p class="text-para">Bottom</p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-solid fa-magnifying-glass"  style="color: #4b6d75;" id="search-icon"></i>
                                <p class="text-para">Search</p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-solid fa-scissors" style="color: #4b6d75;"></i>
                                <p class="text-para">Delete </p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <button type='submit' name='save' style="border:none;background-color:transparent"> <i class="fa-solid fa-file-arrow-down" style="color: #4b6d75;" name="hello" ></i>
                               <p class="text-para">Save</p>
                               </a></button>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-sharp fa-regular fa-pen-to-square" style="color: #4b6d75;"></i>                                <p class="text-para">Edit</p>
                            </div>
                            <div class="col-lg-1 col-1">
                                <i class="fa-solid fa-envelope-open-text" style="color: #4b6d75;"></i>
                                <p class="text-para">New</p>
                            </div>
                            <div class=" col-lg-2 col-1 px-0" style="background-color: #4b6d75;">
                                <p class="text-para text-light text-center">Bill Reference</p>
                            </div>
                            
                            <div class="col-lg-1 col-1">
                                <i class="fa-solid fa-envelope-open-text" class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close" style="color: #4b6d75;"></i>
                                <p class="text-para">Exit</p>
                            </div>
                           

                      </div>
                      <div class="col-lg-2 row customer-col ">
<table  class="table" id='new-table'>

  <tr class='text-upercase'>
    <td>slip</td>
    <td>bill</td>
  </tr>
  <tr class='text-capitalize'>
    <td>gold to rs</td>
    <td>rs to gold </td>
  </tr>
</table>
                      </div>
                    </div>
            <div class="container ">
              <h5 class="text-uppercase py-2 text-primary-color ">customer information</h5>

            
                <div class="row mt-3" >
                    <div class="col-lg-4 row" id="formData">
                     
                    </div>
                    <div class="col-lg-4 mt-auto">
                        <button class="convert-button">convert to Teezabi</button>
                        <button class="convert-button">convert to piece</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn-send  py-1"style='float: right;' ><i class="fa-sharp fa-solid fa-arrow-rotate-right" style="color: #4b6d75;" ></i> SEND</button>
                        <div class="row mt-5 py-3 px-0" style="background-color: #4b6d75;">
                            <div class="col-lg-6 mt-5">
                                <p class="text-para text-light me-5  text-uppercase">gold :</p>
                                <p class="text-para text-light me-5 text-uppercase">cash :</p>

                            </div>
                            <div class="col-lg-6 mt-auto">    <p class="text-para text-light me-5 text-uppercase ">nill :</p></div>
                        </div>
                    </div>
                    </div>
           
            </div>
           <div class="container mt-3 customer-col" >
           <h6 class="text-uppercase py-2 text-primary-color text-bold">casting detail</h5>
           <div class="row ">
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Rati:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label  form-label d-flex">Casting:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Casting Return:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex ">Ghati:</label>
    <input type="text"  class="form-input bg-danger">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Total:</label>
    <input type="text"  class="form-input bg-danger">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Pure Gold: </label>
    <input type="text"  class="form-input bg-danger">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Laboure</label>
    <input type="text"  class="form-input bg-danger">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Cash Recieve:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Cash Return:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Gold Return:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2">
    <label for="" class="col-form-label form-label d-flex">Less Casting:</label>
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2 mt-4">
    
    <input type="text"  class="form-input">
  </div>
  <div class="col-lg-2 my-2">
  <button class="convert-button text-light">convert to Teezabi</button>
  </div>
 
</div>
<div class="row justify-content-center">
<div class="col-lg-12">
<label class="form-label">Remarks :</label>
<textarea class="form-input"  cols="43" rows="3"  name=""  rows="3"></textarea>
</div>

</div>
           </div>
          </section>
          </form>
          <!-- second section -->

        </div>

      </div>
    </div>


  </div>
  
    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
<script src="assets/js/script.js"></script>
</body>
</html>