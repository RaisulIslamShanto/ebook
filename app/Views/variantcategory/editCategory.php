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
                                        <?php foreach($catdata as $value):?>
                                        <form id="updatevarcategory" method="Post" action="<?= base_url('updatevarcategory/'.$value['id'])?>">
                                            <div class="form-group">
                                                <input type="number" value="<?= $value['id']?>">
                                                <label class="form-label">Title</label>
                                                <select class="form-control"  name="language" id="language">
                                                    <option value="English"><?= $value['language']?></option>
                                                    <option value="Bangla">Bangla</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Slug</label>
                                                <select class="form-control"  name="parentCat" >
                                                    <option value="Fashion"><?= $value['parentCat']?></option>
                                                    <option value="Sports">Sports</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Summary and Description (Meta Tag)</label>
                                                <input type="text" class="form-control"  name="catname" value="<?= $value['catname']?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Keywords </label>
                                                <input type="text" class="form-control"  name="slug" value="<?= $value['slug']?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Description (Meta Tag)</label>
                                                <input type="text" class="form-control"  name="description" value="<?= $value['description']?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Keywords (Meta Tag)</label>
                                                <input type="text" class="form-control"  name="keywords" value="<?= $value['keywords']?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Color</label>
                                                <input type="color" class="form-control" name="color" value="<?= $value['color']?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label">Order</label>
                                                <input type="number" class="form-control"  name="order" value="<?= $value['order']?>">
                                               
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
                                            <button type="submit" class="btn btn-primary mt-4 categoryid" catid="<?= $value['id']?>">Update Category</button>
                                            <?php endforeach?>
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
    $('updatevarcategory').on('submit', function (e){
        e.preventDefault();

    //    alert('hi');
        var id = $('.categoryid').attr('catid');
       
        alert(id);
        console.log(id);
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'updatevarcategory'+id, 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });

//    pdf form
    $('#lanpdfile').on('submit', function(e){
        e.preventDefault();

                alert('hi');

                var formData = new FormData(this);
                console.log(formData);
                
                

                $.ajax({
                    url: 'lanfile', 
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        
                        alert(response.message);
                    },
                });
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
                