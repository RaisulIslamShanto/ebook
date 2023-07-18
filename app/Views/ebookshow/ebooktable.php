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
                                    <a class="btn btn-primary " id="ebooklist" href="<?php echo base_url('ebooktable') ?>">Ebook list</a>
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Ebook
                                    </button> -->

                                </div>
                        </div>


 

        

                            <!-- search -->

                            <div class="row">
                                <div class="col-md-5 mx-auto">
                                    

                                    <!-- <form  action="<?//php// echo base_url('search')?>" method="get">

                                        <div class="input-group">

                                            <input class="form-control border-end-0 border rounded-pill" type="search"  id="title" name="title"/>
                                            
                                            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit"  id="search">search</button>
                                                    
                                            
                                        </div>
                                    </form> -->

                                        <!-- search option with ajax -->
                                    <script>

                                            $(document).ready(function(){
                                                $('#search').click(function(e){
                                                    e.preventDefault();
                                                    


                                                    var searchdata = $('#title').val();

                                                    // alert (searchdata);
                                                    // console.log(searchdata);

                                                    $.ajax({


                                                        url : '<?php echo base_url('searchwithajax')?>',
                                                        type : 'GET',
                                                        data : { data: searchdata},
                                                        dataType : 'json',

                                                        success : function(data){
                                                            console.log(data);
                                                            // alert(data);

                                                            $('#tablemain').hide();
                                                            var table = $('<table class="table table-striped"></table>');
        
                                                           
                                                            var headers = ['Id','Title', 'User', 'Photo' , 'Action'];
                                                            var headerRow = $('<tr></tr>');
                                                            
                                                            for (var h = 0; h < headers.length; h++) {
                                                                var headerCell = $('<th class="thead-dark"></th>').text(headers[h]);
                                                                headerRow.append(headerCell);
                                                            }

                                                            table.append(headerRow);
        

                                                            for (var i = 0; i < data.length; i++) {
                                                                var row = $('<tr></tr>');

                                                                var idcell = $('<td></td>').text(data[i].id);
                                                                row.append(idcell);
                                                                
                                                                var titleCell = $('<td></td>').text(data[i].title);
                                                                row.append(titleCell);
                                                                
                                                                var userCell = $('<td></td>').text(data[i].user);
                                                                row.append(userCell);
                                                                
                                                                
                                                                
                                                                var img = $('<img style="height:100px;width:100px;">').attr('src',"<?php echo base_url('uploads/');?>"+data[i].photo);

                                                                var photoCell = $('<td></td>').html(img);

                                                                row.append(photoCell);
                                                                
                                                                // var editbutton = $('.editme').show();
                                                                // var deletebutton = $('.delete').show();
                                                                
                                                                // $('.delete').show();

                                                                // var actionCell = $('<td></td>').html(editbutton);

                                                                // row.append(actionCell);
                                                                
                                                                

                                                                // alert(data.pager);

                                                            }
                                                            
                                                            

                                                            var container = $('#tableContainer'); 
                                                            container.append(table);
    

                                                           





                                                        }


                                                    })





                                                })
                                            })



                                    </script>
                                </div>
                            </div>




                       
                                    <table class="table table-striped" id="tablemain">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Title</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Action</th>
                                           
                                            
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($ebook as $value) :?>
                                            <tr>
                                                
                                            <th scope="row"><?= $value['id']?></th>
                                                <td><?= $value['title'] ?></td>
                                                <td><?= $value['user'] ?></td>
                                                <td>
                                                <img height="60" width="60" src="<?php echo base_url('uploads/').$value['photo'];  ?>" alt="Image" >
                                            </td>
                                            <td>
                                                <!-- <a class="btn btn-warning edit" id="edit"    value="<?//= $value['id']?>" href="<?//php echo base_url('edit_ebook/'.$value['id'])?>">edit</a> -->


                                                <!-- <a class="btn btn-primary editme"    href="<?php //echo base_url('formsubmitwithajax/'.$value['id'])?>"  value="<?//= $value['id']?>" >editme</a> -->

                                                <!-- editwithajax -->
                                                <button type="submit" class="btn btn-primary edit" data-bs-toggle="modal" data-bs-target="#exampleModal"  value="<?= $value['id']?>">
                                                    Editme
                                                </button>

                                                <a class="btn btn-danger delete" id="delete"  value="<?= $value['id']?>" href="<?php echo base_url('delete_ebook/'.$value['id'])?>">delete</a></td>
                                            <td>
                                                
                                            <?php endforeach; ?>
                                            </tr>
                                        </tbody>
                                        
                                    </table>

                                    <div id="tableContainer" class="table table-striped"></div>

                                    <?php  $pager->links(); ?>  
                                        
                                    <div id="tableshow" class="table table-striped"></div> 

                                    <div id="pagination">hh</div>  
                                    
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Ebook</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                            <div class="modal-body">

                                                                <form id="myform" action="" method="Post" enctype="multipart/form-data">

                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                            <input type="text" class="form-control" id="id" name="id" value="">
                                                                            
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Title</label>
                                                                            <input type="text" class="form-control" id="titlename" name="titlename" value="">
                                                                            
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">User </label>
                                                                            <input type="text" class="form-control" id="user" name="user" value="">
                                                                            
                                                                        </div>
                                                                        <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Photo</label>
                                                                        <input type="file" class="form-control" id="photo" name="photo" value="">
                                                                        
                                                                        </div>
                                                                        
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Author </label>
                                                                        <!-- <input type="text" class="form-control" id="author" name="" value=""> -->
                                                                        <select class="form-control" name="authorlist" id="authorlist">
                                                                            
                                                                            
                                                                           
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                
                                                                           

                                                                        </select>
                                                                    </div>

                                                                        


                                                
                                                                    
                                                                    <button type="submit" id="updateme" class="btn btn-primary  update">update</button>
                                                                </form>
                                                            </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                       
                                                    </div>
                                                </div>
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
        
       
        
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->







<!-- loading with pagination -->
     <script>

        var siteurl = '<?php echo base_url('loadwithajax'); ?>';
        $(document).ready(function() {
            
            function fetchall(page) {

                url = siteurl +"?page="+page;

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {

                            $('#tablemain').hide();
                            console.log(data);

                            var table = $('<table class="table table-striped"></table>');

                            
                            var headers = ['Id','Title', 'User', 'Photo', 'Action'];
                            var headerRow = $('<tr></tr>');
                            
                            for (var h = 0; h < headers.length; h++) {
                                var headerCell = $('<th class="thead-dark"></th>').text(headers[h]);
                                headerRow.append(headerCell);
                            }

                            table.append(headerRow);


                            for (var i = 0; i < data.ebook.length; i++) {
                                var row = $('<tr></tr>');

                                var idcell = $('<td></td>').text(data.ebook[i].id);
                                row.append(idcell);
                                
                                var titleCell = $('<td></td>').text(data.ebook[i].title);
                                row.append(titleCell);
                                
                                var userCell = $('<td></td>').text(data.ebook[i].user);
                                row.append(userCell);

                                
                                
                                
                                
                                var img = $('<img style="height:100px;width:100px;">').attr('src',"<?php echo base_url('uploads/');?>"+data.ebook[i].photo);

                                var photoCell = $('<td></td>').html(img);

                            

                                row.append(photoCell);
                                
                                // alert('hi');
                                var actionCell = $('<td><button ebookid="'+data.ebook[i].id+'" type="button" class="btn btn-danger bg-danger deletebtn ">delete</button> <button type="button" ebookid="'+data.ebook[i].id+'"class="btn btn-primary bg-primary editmebtn">edit</button></td>')
                                row.append(actionCell);

                                
                                table.append(row);


                                $('#pagination').html(data.pager);




                            }
                            
                            
                            var container = $('#tableshow'); 
                            container.append(table);

                    }

                    


                    
                    
                });

                    

            }

            
            fetchall(1);

$('#pagination').on('click','a',function(e){

                        e.preventDefault(); 

                        $('#tableshow').empty();
                        
                        var pageno = $(this).attr('href'); 

                        // var page = new URL(pageno).searchParams.get('page');

                        var url = pageno;
                        var pagePosition = url.indexOf('page=') + 5; 
                        var page = url.substring(pagePosition); 
                            // console.log(page);
                        // alert(page);
                        // console.log(page);



                        // var pageNum = $(this).html().trim();

                        // alert(pageNum);
                        // console.log(pageNum);
                        fetchall(page);

                    });

                    
$('#tableshow').on('click','.deletebtn',function(e){

                    e.preventDefault();

                    // alert('hi');

                    var id = $(this).attr('ebookid'); 

                    console.log(id);

                    alert(id);

                    $.ajax({

                    url: "delete_ebook/"+id,

                    type: 'GET',






                    success: function(response){

                    
                        alert(response);

                        // window.location.reload();
                        

                    },


                    });





});

$('#tableshow').on('click','.editmebtn',function(e){

     e.preventDefault();

     // alert('hi');

     var id = $(this).attr('ebookid'); 

     // console.log(id);

     // alert(id);

     // var modal = $('.modal');
     // modal.show();

     $("#exampleModal").modal('show');

     $.ajax({

     url: "editajax/"+id,

     type: 'GET',

     dataType: 'json',
     




     success: function(response){

     console.log(response);
     
         $("#id").val(response.id);
         $("#titlename").val(response.title);
         $("#user").val(response.user);
         // $("#photo").val(response.photo);

     },


 });

});

// updatewithajax

$('#updateme').on('click',function(e){

     e.preventDefault();

     // alert('updateme');

     var formData = new FormData(document.getElementById("myform"));

     // var formData = $('#myform').serialize();


     var id = $('#id').val(); 
     // var titlename = $('#titlename').val(); 
     // var user = $('#user').val(); 

    
     
      
     // var formData = 'id='+id + '&titlename='+titlename + '&user='+user ;

     console.log(formData);

     // alert(user);

     // var modal = $('.modal');
     // modal.show();

     $("#exampleModal").modal('hide');

     

     $.ajax({

     url: "updateebookajax/"+id,

     data: formData,

     processData : false,

     contentType : false,

     type: 'POST',

     dataType: 'json',


     success: function(response){

         console.log(response);

         alert ('updated successfully')
        
         $('#tableshow').empty();
         fetchall(1);

     },


     });

});
                    
$('#authorlist').on('click',function(e){

    e.preventDefault();

    // alert('hi');
    $.ajax({

        url : 'alistajax/',
        type : 'GET',
        // DataType : 'json',
        success: function(data){

           console.log(data);
        //    alert(data);
        
            var dropdown = $('#authorlist');
            // dropdown.empty();

            for (var i = 0; i < data.length; i++) {
               
                
                
                var name = data[i].name;
                console.log(name);
                var id = data[i].id;
                var option = $('<option></option>').text(name).val(id)
                dropdown.append(option);
            }
           

        }





    });





});






                    

});
         </script>

<!--  previous delete-->

<script>

        $(document).ready(function() 
        {

            var editid;
            $(".delete").click(function(e) 
            {
                e.preventDefault();

                alert('Are you sure you want to delete this');
                    

                var id = $(this).attr('value'); 

                console.log(id);

                alert(id);
                

                

                $.ajax({
                    
                        url: "delete_ebook/"+id,
                        
                        type: 'GET',
                        
                        


                        
                        
                        success: function(response){

                            
                            alert(response);

                            window.location.reload();
                            
                        
                        },
                        

                        });

                        

            });

            $('.edit').click(function(e){
                e.preventDefault();

                    editid = $(this).attr('value');

                // alert(id);
                // console.log(id);

            })

            
            $('update').click(function(e){

                e.preventDefault();

                alert('Are you sure you want to update this');

                
                var id = editid;
                
                alert(id);
                console.log(id);
                
                var data = {

                    
                    'title' : $('#titlename').val(),
                    'user' : $('#user').val(),
                    
                    
                }
                
                // alert(data.title);
                // console.log(data);
                

                $.ajax({

                    
                        
                        url: "formsubmitwithajax/"+id,
                        
                        type: 'POST',
                        
                        data: data,

                        dataType: 'json',
                        

                        
                        success: function(response){

                            console.log(response.title);


                            
                            // alert(response.title);
                            
                            // $('#title').text(response.title);
                            // $('#user').text(response.user);

                            // window.location.reload();
                        
                        },
                        

                        });




            });


        });

        </script>

<!-- delete and edit with ajax -->








    </body>
</html>
