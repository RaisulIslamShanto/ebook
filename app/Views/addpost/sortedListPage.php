<?= $this->extend("layouts/base") ?>

<!-- headerpart -->
<?= $this->section('content') ?> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- for the menu items -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Sorted List </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Sorted List Page</li>
                        </ol>              
                          

                        <!-- main part  -->

                        <div class="card-body text-end">

                            <a class="btn btn-primary mb-4" href="<?php echo base_url('allpost') ?>">Posts</a>
                            <a class="btn btn-primary mb-4" href="<?php echo base_url('postformate') ?>">Add Post</a>
    
                        </div>
                        <form id="sortedListForm" >
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="hidden" name='type' value="Sorted">
                                            <h5 class="card-title">Post Details</h5>
                                            
                                                <div class="form-group">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="languageName" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Slug</label>
                                                    <input type="text" class="form-control" id="shortForm" name="Slug">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Summary Description</label>
                                                    <input type="text" class="form-control" id="languageCode" name="Summary">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Keywords</label>
                                                    <input type="text" class="form-control" id="order" name="Keywords">
                                                </div>
                                                
                                
                                                <div class="form-group">
                                                    <label class="form-check-label" for="s">visibility</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="visibility" id="s" value="show">
                                                        <label class="form-check-label" for="inlineRadio1">show</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="visibility" id="h" value="hide">
                                                        <label class="form-check-label" for="h">hide</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vehicle1"> Add to Featured</label>
                                                    <input type="checkbox" id="Featured" name="Featured" value="1"><br>
                                                    <label for="vehicle2"> Add to Breaking</label>
                                                    <input type="checkbox" id="Breaking" name="Breaking" value="1"><br>
                                                    <label for="vehicle3"> Add to Slider</label>
                                                    <input type="checkbox" id="Slider" name="Slider" value="1"><br>
                                                    <label for="vehicle3"> Add to Recommended</label>
                                                    <input type="checkbox" id="Recommended" name="Recommended" value="1"><br>
                                                    <label for="vehicle3"> Show Only to Registered Users</label>
                                                    <input type="checkbox" id="Registered" name="Registered" value="1"><br>  
                                                </div>
                                                <div class="form-group">
                                                    <label for="">tags</label>
                                                    <textarea class="form-control" name="tags" id="tags" cols="30" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Optional Url</label>
                                                    <input class="form-control" name="OptionalUrl" type="text">
                                                </div> 
                                        </div>
                                    </div>
                                    <!-- content part -->
                                    <div id="content" class="card mt-4">
                                        <div class="card-body">
                                            <form>
                                                
                                                <div class="form-group">
                                                    <label for="">#1</label>  
                                                    <button type="button" class="btn btn-danger delete">X</button>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Image</label>
                                                    <input class="form-control" type="file">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Content</label>
                                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                                </div>

                                        

                                            </form>


                                        </div>

                                    </div>

                                    <div class="text-center">
                                        <button id="addContent" type="button" class="btn btn-sm btn-secondary mt-4">Add Content</button>
                                    </div>
                                    <!-- add content script -->
                                    <script>
                                        $('document').ready(function(){
                                                var id = 1;
                                                var content =

                                                 `<div id="content" class="card mt-4">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="">#id++</label> 
                                                                    <button type="button"  class="btn btn-sm btn-danger delete text-right">X</button> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Title</label>
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Image</label>
                                                                    <input class="form-control" type="file">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Content</label>
                                                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                                                </div>

                                                        

                                                            </form>


                                                        </div>

                                                    </div>`;
                                                    

                                            $('#addContent').click(function(){

                                                // alert('hi');
                                                $('#content').append(content);

                                            });
                                            $('#content').on("click",'.delete', function(e){

                                                alert('hi');
                                                
                                                $(e.target).parent().parent().parent().parent().remove();
                                            });


                                        });


                                    </script>
                                
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="">Image</h5>
                                            
                                            <div class="form-group">
                                                <label for="">Add Image</label>
                                                <input type="file" class="dropify" data-height="300" />
                                            </div> 
                                            <div class="form-group">
                                                <label for="">or Add Image Url</label>
                                                <input class="form-control" name="ImageUrl" type="text">
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Image Description</label>
                                                <input class="form-control" name="ImageDescription" type="text">
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <h5 class="">Additional Images</h5>
                                            <div class="form-group">
                                                <input type="file" name="AdditionalImages" class="form-control" >
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <h5 class="">Files</h5>
                                            <div class="form-group">
                                                <input  name="Files" type="file" class="form-control" >
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <h5 class="">Category</h5>
                                            <div class="form-group">
                                                <label for="">Language</label>
                                                <select class="form-control" name="language" id="">
                                                    <?php foreach ($lantable as $value):?>
                                                        <option value="<?= $value['languageName']?>"><?= $value['languageName']?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <select class="form-control" name="category" id="">
                                                    <?php foreach ($cattable as $value):?>
                                                        <option value="<?= $value['parentCat']?>"><?= $value['parentCat']?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label for="">Subcategory</label>
                                                <select class="form-control" name="subcategory" id="">
                                                    <option value="Cricket">Cricket</option>
                                                    <option value="Football">Football</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <h5 class="">Publish</h5>
                                            <div class="form-group">
                                                <label for="">Date Published</label>
                                                <input  name="datePublished" type="date" class="form-control" >
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">Save as Draft</button>
                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </form>
 
                </main>

                <!-- footer  -->
<script>
    $(document).ready(function(){

    $('.dropify').dropify();
        // 1st form
    $('#sortedListForm').on('submit', function (e){
        e.preventDefault();

       alert('hi');
        // var formData = $(this).serializeArray();
        var formData = new FormData(this);
        console.log(formData);
        
        $.ajax({
            type: 'POST',
            url: 'sortedListForm', 
            data: formData,
            contentType: false,
            processData: false,
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
                    success: function (response){
                        
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
                