<?= $this->extend('templates/admin'); ?>
<?= $this->section('content'); ?>
<section class="home">
   <h1 class="py-5 text-center">Dashboard</h1>
   <div class="text">
      <div class="container">
         <div class="row">
            <!-- Jumlah User -->  
            <div class="col-4">         
               <div class="card mt-2" style="width: 18rem;">
                  <div class="card-body">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                           <i class='bx bxs-user-circle'></i>
                        </div>
                        <div class="ps-5">
                           <h6>Jumlah User</h6>
                           <span class="text-success small pt-1 fw-bold">4 User</span>          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <!--End Jumlah User -->  

            <!-- Jumlah Portofolio -->   
            <div class="col-4">
               <div class="card mt-2" style="width: 18rem;">
                  <div class="card-body">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                           <i class='bx bxs-detail'></i>
                        </div>
                        <div class="ps-5">
                           <h6>Jumlah Portofolio</h6>
                           <span class="text-success small pt-1 fw-bold">2 Portofolio</span>          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--End Jumlah Portofolio -->
               

            <!-- Jumlah Forumulir -->
            <div class="col-4">
               <div class="card mt-2" style="width: 18rem;">
                  <div class="card-body">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                              <i class='bx bxs-report'></i>
                        </div>
                        <div class="ps-5">
                           <h6>Jumlah Formulir</h6>
                           <span class="text-success small pt-1 fw-bold">5 Formulir</span>          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--End Jumlah Forumulir -->
            
            <!-- Jumlah Total Project -->
            <div class="col-4">
               <div class="card mt-2" style="width: 18rem;">
                  <div class="card-body">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class='bx bx-code-alt' ></i>
                           </div>
                           <div class="ps-5">
                              <h6>Total Project</h6>
                              <span class="text-success small pt-1 fw-bold">1 Project</span>          
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Jumlah Total Project -->
         </div>
      </div>
   </div>
</section>
<?= $this->endSection(); ?>