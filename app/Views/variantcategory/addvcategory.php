<?= $this->extend("layouts/base") ?>

<!-- headerpart -->
<?= $this->section('content') ?> 

<!-- for the menu items -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Add Category Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Category Page</li>
                        </ol>              
                          

                        <!-- main part  -->
                            
                        <div class="card mb-4">
                                <div class="card-body text-end">

                                    <a class="btn btn-primary" href="<?php echo base_url('addvcategory') ?>">Add Category</a>
                                    <a class="btn btn-primary" href="<?php echo base_url('variantcategories') ?>">Category List</a>
                  
                                </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Post Details</h5>
                                        
                                        <form id="addvarcategory">
                                            <div class="form-group">
                                                <label class="form-label">Title</label>
                                                
                                                <select class="form-control" name="language" id="language">
                                                   
                                                <?php foreach($languages as $value):?>
                                                    <option value="<?= $value['id']?>"><?= $value['languageName']?></option>
                                                <?php endforeach?>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Parent Category</label>
                                                <select class="form-control" name="parentCat" >
                                                    <option value="0">none</option>
                                                <?php foreach($cattable as $value):?>
                                                    
                                                    <option value="<?= $value['id']?>"><?= $value['catname']?></option>
                                                <?php endforeach?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Category Name</label>
                                                <input type="text" class="form-control"  name="catname">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">slug </label>
                                                <input type="text" class="form-control"  name="slug">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Description (Meta Tag)</label>
                                                <input type="text" class="form-control"  name="description">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Keywords (Meta Tag)</label>
                                                <input type="text" class="form-control"  name="keywords">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Color</label>
                                                <input type="color" class="form-control" name="color">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label">Order</label>
                                                <input type="number" class="form-control"  name="order">
                                               
                                            </div>

                                            <label class="form-check-label" for="inlineRadio1">Show on Menu</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="showOnMenu" id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="showOnMenu" id="inlineRadio2" value="No">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                            <br>
                                            <label class="form-check-label" for="inlineRadio1">Show on HomePage</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="showOnHomePage" id="a" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="showOnHomePage" id="b" value="No">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div><br>
                                            <button type="submit" class="btn btn-primary mt-4">Add Category</button>

                                        </form>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-4">
                                
                            </div>
                        </div>
                    </div>

                </main>

                <!-- footer  -->
<script>
    $(document).ready(function(){

        // 1st form
    $('#addvarcategory').on('submit', function (e){
        e.preventDefault();

       alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'addvarcategoryform', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });

//    pdf form
    $(' language').on('', function(e){
        e.preventDefault();

                alert('hi');

                var id = $("#language").attr('value');

                alert(id);
                console.log(id);

                // var formData = new FormData(this);
                // console.log(formData);
                
                

                // $.ajax({
                //     url: 'lanfile', 
                //     type: 'POST',
                //     data: formData,
                //     contentType: false,
                //     processData: false,
                //     dataType: 'json',
                //     success: function (response) {
                        
                //         alert(response.message);
                //     },
                // });
            });

            //  default button

    $('.def').click(function(e){
        e.preventDefault();

        

        var id = $(this).attr('value');
        alert(id);

        var allbutton =$('.def');
        allbutton.css('color', 'white');
        var button = $(this);
        button.css('color', 'black');
       
        
        

        $.ajax({
            url: 'makedefault', 
            type: 'POST',
            data: {"id":id},
            
            
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);




            },
        });
    });

    





    });
    




</script>


<?= $this->endSection() ?>
                