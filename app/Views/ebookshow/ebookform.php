<!-- header -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ebook</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <!-- jquery  -->
        <script src=" <?php echo base_url('public/assets/');?>/js/jquery/jquery-3.7.0.js"></script>
        <script src=" <?php echo base_url('public/assets/');?>/js/jquery/main.js"></script>
    <!-- css link for code igniter -->
        <link href=" <?php echo base_url('public/assets/');?>css/styles.css" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Ebook</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>



            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

<!-- header end  -->


<!-- layouts  -->


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">



                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core ebook</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Ebook Page
                            </a>
                            <div class="sb-sidenav-menu-heading"> Ebook Interface</div>


                            


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Authentication page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

<!-- for the menu items -->

                            <div class="sb-sidenav-menu-heading">Menu items</div>
                            <a class="nav-link" href="<?php echo base_url('author')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Author
                            </a>
                            <a class="nav-link" href="<?php echo base_url('category')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Category
                            </a>
                            <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ebook
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
                        <h1 class="mt-4">Ebook Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ebook Page</li>
                        </ol>







                        <!-- main part  -->




                        <div class="card mb-4">
                                <div class="card-body text-end">

                                    <a class="btn btn-primary" href="<?php echo base_url('ebookform') ?>">Add Ebook</a>
                                    <a class="btn btn-primary" href="<?php echo base_url('ebooktable') ?>">Ebook list</a>
                                    
                                </div>

                                 <?php 
                                 if (session()->getFlashdata('status')){
                                    echo "<h5>".session()->getFlashdata('status').  "</h5>";
                                 }


                                 ?>
                                
                        <div class="card-body text-start">

                                

                         <form  id="myform" action ="" method="Post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">User </label>
                                        <input type="text" class="form-control" id="user" name="user" value="">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Categories </label>

                                        <!-- <input type="text" class="form-control" id="categories" name="categories" value=""> -->

                                        <select class="form-control" name="catname" id="catname">

                                        <?php foreach($catname as $value) :?>
                                           
                                        <option value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?> </option>


                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Author </label>
                                        <!-- <input type="text" class="form-control" id="author" name="" value=""> -->
                                        <select class="form-control" name="authorname" id="authorname" >
                                            
                                            
                                            <?php foreach($authname as $value) :?>
                                            
                                            
                                            <option id="author"  value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?></option>
                                                
                                            <?php endforeach; ?>

                                        </select>
                                    </div>

                                    <div class="mb-3">

                                        <label for="exampleInputEmail1" class="form-label">Photo</label>
                                        <input type="file" class="form-control" id="photo" name="photo" value="">
                                        
                                    </div>

                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                </form>



                                </div>
                        </div>

                        <script>

                                            $(document).ready(function() 
                                            {

                                            
                                                $('#myform').on('submit', function(e) 
                                                {
                                                    e.preventDefault();
                                                    //  alert('Please enter');
                                                        
                                                    var formData = new FormData(this); 

                                                    

                                                     console.log(formData);
                                                    
                                                    
                                                   


                                                    $.ajax({
                                                        
                                                            url: "<?php echo base_url('ebookformsubmit')?>",
                                                            
                                                            type: 'POST',
                                                            
                                                            data: formData,

                                                            
                                                            
                                                            processData : false,

                                                            contentType : false,
                                                            
                                                            success: function(response){

                                                                clearForm();
                                                                alert(response);
                                                                
                                                            
                                                            },
                                                            

                                                            });

                                                            function clearForm(){
                                                                $('#myform')[0].reset(); }

                                                });
                                            });
  
                        </script>


 










                       
                                    
                                        
                    
                    </div> 
                </main>

                <!-- footer  -->


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- footer end  -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
    </body>
</html>
