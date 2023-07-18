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
        <script src=" <?php echo base_url('public/assets/');?>/js/jquery/jquery-3.7.0.js"></script>

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
                                Category Page
                            </a>
                            <div class="sb-sidenav-menu-heading">Ebook Interface</div>


                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->



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
                        <h1 class="mt-4">Category Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category Page</li>
                        </ol>

                        <!-- main part  -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body text-start">
                                    <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    All Category listings
                                    </button>
                                </div>
                                <table  class="table">
                                    <thead class="thead-dark">
                                        

                                        <tr>
                                        
                                        <?php foreach($categories as $value):?>
                                            
                                        <tr>
                                           
                                            
                                            <th> <a href=""> 
                                            </a></th>
                                                
                                            <th><?= $sl++ ?> <a class="catnam" href="<?php echo base_url('subcategoryview/'.$value['id'])?>"> 
                                            <?= $value['category_name'] ?></a>
                                            <ul>
                                                
                                            <?php foreach($value['subcategories'] as $subcat):?>
                                                <li><?php echo $subcat['subcategoryname'] ?></li>
                                            <?php endforeach ?>

                                            </ul>
                                            
                                            </th>
                                            
                                       
                                        
                                        
                                            <td><a href="<?php echo base_url('edit_category/'.$value['id'])?>">edit</a></td>
                                            <td><a href="<?php echo base_url('delete_category/'.$value['id'])?>">delete</a></td>
                                        
                                        </tr>
                                    
                                        <?php endforeach;?>

                                    </thead>
                                    <tbody>
                                        
                                        
                                    </tbody>
                                </table>
                                
                                <table id=tablecategory class="table">

                                    <thead>

                                    </thead>
                                    <tbody>


                                    </tbody>
                                    
                                </table>
                                
                            </div>   
                    </div>
                                                

                    <script>

                                                
                                                            //     for (var i = 0; i < response.length; i++) {
                                                            //     var categoryName = response[i].category_name;
                                                            //     var row = '<tr><td><a href="#" class="Category">' + categoryName + '</a><td><a href="#" class="deleteCategory">Delete</a></td><td> <a href="#" class="editCategory">Edit</a></td></tr>';
                                                            //     $('#tablecategory thead').append(row);
                                                            // }

                                    $(document).ready(function() {

                                       
    
                                                function fetchCategories() 
                                                {
                                                
                                                    $.ajax({
                                                        url: 'getCategories',
                                                        type: 'GET',
                                                        success: function(response) 
                                                        {
                                                            $('#editform').hide();
                                                            // console.log(response);
                                                            $('#tablecategory thead').empty();

        
                                                                for (var i = 0; i < response.length; i++) {
                                                                    var category = response[i];
                                                                    var categoryName = category.category_name;
                                                                    var subcategories = category.subcategories;

                                                                   
                                                                    var row = '<tr><td><a href="" class="Category">' + categoryName + '</a></td><td> <button type="button"   catid="'+response[i].id+'"class="editCategory">Edit</button></td><td> <button type="button" catid="'+response[i].id+'" class="deleteCategory">Delete</button></td></tr>';

                                                                   
                                                                    $('#tablecategory thead').append(row);

                                                                    
                                                                    for (var j = 0; j < subcategories.length; j++) {
                                                                        var subcategory = subcategories[j];
                                                                        var subcategoryName = subcategory.subcategoryname;

                                                                        
                                                                        var subcategoryRow = '<tr><td><ul><li>' + subcategoryName + '</ul></li></td></tr>';

                                                                        
                                                                        $('#tablecategory thead').append(subcategoryRow);
                                                                    }
                                                                }
                                                            },
                                                        
                                                        });
                                                        
                                                }
                                            

                                                
                                                fetchCategories();


                                        $('#save').click(function(e){
                                            e.preventDefault();
                                                                        
                                            var formData = {

                                            categoryname: $('#categoryname').val(),
                                            searchable: $('#searchable').prop('checked') ? 1 : 0,

                                            
                                            status: $('#status').prop('checked') ? 1 : 0

                                            };
                                            var categoryname =  formData.categoryname;

                                            // console.log(categoryname);
                                            // alert('hi');

                                            $.ajax({

                                            url: '<?= base_url('addcategorywithajaxr') ?>',
                                            type: 'POST',
                                            data: formData,

                                            success: function(response) {
                                               
                                                console.log(response);

                                               
                                                

                                                // Clear the input field
                                                $('#categoryname').val('');

                                                fetchCategories();
                                                // fetchCategories();
                                                alert('data successfully sent');

                                                
                                            }
                                            });



                                        });

                                        $('#tablecategory').on('click','.deleteCategory',function(e){
                                            e.preventDefault();

                                            var id = $(this).attr('catid');

                                            alert(id);
                                            $.ajax({

                                                url: '<?= base_url('deletecategorywithajax') ?>'+id,
                                                type: 'GET',
                                                

                                                success: function(response) {
                                                
                                                    console.log(response);

                                                    fetchCategories();
                                                   
                                                    alert('data successfully deleted');

                                                    
                                                }
                                                });
                                           
                                        });
                                        
                                        $('#tablecategory').on('click','.editCategory',function(e){
                                            e.preventDefault();
                                            $('#editform').show();
                                            var id = $(this).attr('catid');

                                            alert(id);

                                            $.ajax({

                                                url: '<?= base_url('editcategorywithajax') ?>'+id,
                                                type: 'POST',
                                                

                                                success: function(response) {
                                                
                                                    console.log(response.id);

                                                    $('#categoryidu').val(response.id);
                                                    $('#categorynameu').val(response.category_name);




                                                    // fetchCategories();
                                                   
                                                    // alert('data edited successfully');

                                                    
                                                }
                                                });
                                           
                                        });
                                        

                                        $('#catUpdate').on('click',function(e){
                                            e.preventDefault();

                                            
                                           var id = $('#categoryidu').val();
                                           var categoryname = $('#categorynameu').val();
                                             


                                            // alert(categoryname);

                                            $.ajax({

                                                url: '<?= base_url('updatecatwithajax') ?>'+id,
                                                type: 'POST',
                                                data: {'categoryname': categoryname},
                                                dataType: 'json',

                                                success: function(response) {
                                                
                                                    console.log(response.category_name);

                                                    var category = response.category_name;
                                                    
                                                    

                                                    // fetchCategories();
                                                   
                                                    alert(category+'edited successfully');

                                                    fetchCategories();
                                                }
                                                });
                                           
                                        });

                                    });
                                            


                                    






                     </script>



                    <div class="col-md-6">
                            <!-- message show  -->
                    

                        <div class="card mb-4">
                            
                            <div class="card-body text-end">
                                <a class="btn btn-primary"  href="<?php echo base_url('addcategory')?>">Add root category
                                </a>
                                <!-- <a class="btn btn-primary"  href="">Add subcategory
                                </a> -->
                                
                                <!-- form of category submittion -->


                            <div class="card-body text-start">

                                <form id="" action="<?= base_url('addcategory') ?>" method="Post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>

                                        

                                        <input type="text" class="form-control" id="categoryname" 
                                        name ="categoryname">
                                        
                                    </div>
                                    
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="searchable" name="searchable" value="1">
                                        <label class="form-check-label" for="exampleCheck1" >searchable</label>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                                        <label class="form-check-label" for="exampleCheck1">status</label>
                                    </div>
                                    <button type="submit" id="save" name="save" class="btn btn-primary">Save</button>
                                    
                                </form>

                                

                            </div>
                            
                            
                                
                                <?//php// if (isset($_POST['save'])): ?>



                                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Success</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>  -->
                                    


                                <?//php// endif; ?>
                                    
                                   
                                </div>

                                

                            </div> 
                            <div id="editform" class="col-md-6">
  <!-- message show  -->
                                    <div class="card mb-4">
                                        <!-- updateform -->
                                        <div class="card-body text-end">
                                            <a class="btn btn-primary" href="
                                                        <?php echo base_url('addcategory')?>">Add root category </a>
                                        <!-- <a class="btn btn-primary"  href="">Add subcategory
                                                                    </a> -->
                                        <!-- form of category submittion -->
                                            <div  class="card-body text-start">
                                                <form id=updateformcategory action="
                                                            <?= base_url('addcategory') ?>" method="Post">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="categoryidu" 
                                                    name ="categoryidu">
                                                    <input type="text" class="form-control" id="categorynameu" name="categorynameu">
                                                </div>
                                                <!-- <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="searchable" name="searchable" value="1">
                                                    <label class="form-check-label" for="exampleCheck1">searchable </label>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                                                    <label class="form-check-label" for="exampleCheck1">status</label>
                                                </div> -->
                                                <button type="submit" id="catUpdate" name="Update" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>







                                            <?//php// if (isset($_POST['save'])): ?>
                                            <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Success</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>  -->
                                            <?//php// endif; ?>
                                        </div>
                                     </div>
                                    </div>
                                    </div>
                        </div>
                         
                        
                </div>




                            <!-- <div class="card mb-4">
                                <div class="card-body text-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add category
                                    </button>
                                </div>
                            </div> -->
                            
                            <!-- Button trigger modal -->

 

<!-- Modal -->
<!-- Button trigger modal -->




                        

                                    
                                   
                        
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
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
    </body>
</html>
