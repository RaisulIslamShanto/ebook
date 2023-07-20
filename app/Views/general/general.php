
<?= $this->extend("layouts/base") ?>


<?= $this->section('content') ?> 


<!-- headerpart  -->
<!-- for the menu items -->

                            <div class="sb-sidenav-menu-heading">Menu items</div>
                            <a class="nav-link" href="<?php echo base_url('language')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Language 
                            </a>
                            <a class="nav-link" href="<?php echo base_url('general')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               General
                            </a>
                            <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Setting
                            </a>
                        </div>
                    </div>


                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>

                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">General Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">General Page</li>
                        </ol>

                        <!-- main part  -->
                            
                       
                        <div class="card mb-4"  >
                            <div class="card-body">
                                
                                <div class="form-group">
                                                <label class="form-label">Setting Language</label>
                                                <select class="form-control"  name="" id="">
                                                    <option value="volvo">English</option>
                                                </select>
                                               
                                </div>
                                                               
                            </div>
                        </div>

                        
                      
                        <div class="card mb-4"  >
                            <div class="card-body">
                                
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General Setting</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Logo</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact Setting</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Socail Media Setting</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Facebook Comments</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cookies Warning</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Custom Header Codes</button>
                                        </li>
                                </ul>
                                        
                                        <div class="tab-content" id="pills-tabContent">
                                        <!-- firsttab  -->
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                       <form action="">
                                            
                                            <div class="form-group">
                                                        <label class="form-label">Time Zone</label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">1</option>
                                                        </select>
                                                    
                                            </div>

                                            <div class="form-group">
                                                        <label for="form-label">Application</label>
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>

                                            <div class="form-group">
                                                        <label for="form-label">Post Optional URL Button Name</label>
                                                        <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                        <label for="form-label">Copyright</label>
                                                        <input class="form-control" type="text">
                                            </div>


                                       </form>
                                        

                                        

                                        </div>

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">b</div>


                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">c</div>
                                        </div>
                                                               
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                            <div class="card mb-4"  >
                            <div class="card-body">
                                
                                <div class="form-group">
                                                <label class="form-label">Google reCAPTCHA</label>
                                                <input class="form-control" type="text">
                                               
                                </div>
                                <div class="form-group">
                                                <label class="form-label">Secret Key</label>
                                                <input class="form-control" type="text">
                                               
                                </div>
                                                               
                            </div>
                        </div>

                        

                            </div>
                            
                                <div class="col-md-6">
                                    <div class="card mb-4"  >
                                            <div class="card-body">
                                                
                                                <div class="form-group mb-4" >
                                                                <label class="form-label">Title</label>
                                                                <input class="form-control" type="text">
                                                            
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Description </label>
                                                    <div class="form-floating">
                                                            
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                            <label for="floatingTextarea2"></label>
                                                        </div>
                                                    </div>  

                                                </div>
                                                <div class="form-group">
                                                    <label class="form-check-label" for="inlineRadio1">Text Direction</label>

                                                    <div class="form-check form-check-inline">

                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </div>
                                    </div>
                                





                        
 

                    </div>

                </main>
                <!-- footer  -->
                <?= $this->endSection() ?>


               