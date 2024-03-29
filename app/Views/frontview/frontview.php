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

    <!-- css link for code igniter -->
        <link href=" <?php echo base_url('public/assets/');?>css/styles.css" rel="stylesheet" />

        <script src=" <?php echo base_url('public/assets/');?>/js/jquery/jquery-3.7.0.js"></script>
        <script src=" <?php echo base_url('public/assets/');?>/js/jquery/main.js"></script>

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            #photoContainer img{
                height: 262px;
                width: 300px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Ebook</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->



            <!-- Navbar-->
            <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul> -->
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
                            <div class="sb-sidenav-menu-heading">Ebook Interface</div>
                            

                            <!-- authorlist -->
                            <div >
                                <h6 class="sb-nav-link-icon">Authorlist</h6>
                                <ol id="authorList">

                                </ol> 
                                <h6 class="sb-nav-link-icon">Categorylist</h6>
                                <ol id="catList">

                                </ol>  
                                <h6 class="sb-nav-link-icon">Ebooklist</h6>
                                <ol id="ebookList">

                                </ol>  
                            </div>
                           

                            
                       


                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Authentication page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->
                            <!-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
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
                            </div> -->

<!-- for the menu items -->



                            <div class="sb-sidenav-menu-heading">Menu items</div>

                            <!-- <a class="nav-link" href="<?php echo base_url('author')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Author
                            </a> -->
                            <?php foreach($authordata as $value) :?>
                                           
                                           <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                           <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                           Author
                                           <?php echo $value['name'] ?>
                                           </a>
                                                          
                            <?php endforeach; ?>

                            <!-- <a class="nav-link" href="<?php echo base_url('category')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Category
                            </a> -->

                            <?php foreach($catdata as $value) :?>
                                           
                                           <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                           <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                           Category
                                           <?php echo $value['category_name'] ?>
                                           </a>
                                                          
                            <?php endforeach; ?>


                            <!-- <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ebook
                            </a> -->

                            <?php foreach($imageData as $value) :?>
                                           
                                <a class="nav-link" href="<?php echo base_url('ebook')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ebook 
                                <?php echo $value['title'] ?>
                                </a>
                                               
                            <?php endforeach; ?>
                                         


                        </div>
                    </div>


                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">My Ebook</h1>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item active">Ebook Page</li> -->
                        </ol>




                        <!-- main part  -->

                        

 



                            <!-- search -->

                            <!-- <div class="row">
                                <div class="col-md-5 mx-auto">
                                    

                                    <form action="<?php echo base_url('search')?>" method="get">
                                    <div class="input-group">

                                        <input class="form-control border-end-0 border rounded-pill" type="search"  id="example-search-input" name="search"/>
                                        
                                        <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit"  id="btn">search</button>
                                                
                                        
                                    </div>
                                    </form>
                                </div>
                            </div> -->


                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                    <?php foreach($imageData as $value) :?>
                                           
                                            <td>
                                                <img height="262" width="300" src="<?php echo base_url('uploads/'.$value['photo']); ?>" alt="Image" >
                                            </td>
                                            

                                                
                                    <?php endforeach; ?>
                                          
                                    <?php //echo $pager->links(); ?>  

                                    </div>

                                    <div class="container">
                                        <div class="row text-center mx-auto ">
                                            <div class="col-md-12 ">
                                                 <div id="photoContainer" >
                                        
                                                 </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>

                                        $(document).ready(function() {
                                            
                                            function fetchall() {
                                                $.ajax({
                                                    url: '<?php echo base_url('frontview/listajax'); ?>',
                                                    type: 'GET',
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        
                                                        // alert('Success');
                                                        console.log(data);

                                                        var authorList = $('#authorList');
                                                        var catList = $('#catList');
                                                        var ebookList = $('#ebookList');
                                                        var photoContainer = $('#photoContainer');
                                                        // authorList.empty(); 

                                                       
                                                        for (var i = 0; i < data.authors.length; i++) {

                                                            var authorName = data.authors[i].name; 
                                                            var listItem = $('<li>').text(authorName);
                                                            authorList.append(listItem);
                                                        }

                                                        for (var i = 0; i < data.categories.length; i++) {

                                                            var catName = data.categories[i].category_name; 
                                                            var listItem = $('<li>').text(catName);
                                                            catList.append(listItem);
                                                        }

                                                        for (var i = 0; i < data.ebooks.length; i++) {

                                                            var ebooksName = data.ebooks[i].title; 
                                                            var listItem = $('<li>').text(ebooksName);
                                                            ebookList.append(listItem);
                                                        }

                                                        for (var i = 0; i < data.ebooks.length; i++) {

                                                            var photoUrl = data.ebooks[i].photo;

                                                            console.log(photoUrl);

                                                           
                                                            
                                                            var img = $('<img>').attr('src',"<?php echo base_url('uploads/');?>"+ photoUrl);

                                                            // alert(img);
                                                            console.log(img);
                                                            photoContainer.append(img);
                                                        }
                                                    },
                                                   
                                                });
                                            }

                                            
                                            fetchall();
                                        });
                            </script>
                                </div>
                            </div>
                            
                            
                                   
                                        
                                        












                        




                        
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
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
