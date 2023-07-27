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

                        <div class="card mb-4">
                                <div class="card-body text-start">
                                    
                                    <div class="d-flex gap-3">
                                        <div>
                                            <label for="">Show</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">15</option>
                                                <option value="">30</option>
                                                <option value="">60</option>
                                            </select>
                                        </div>
                                        <div>
                                            
                                            <label for="">Language</label>
                                            
                                            <select class="form-control" name="" id="">
                                            <?php foreach($cattable as $value):?>
                                                <option value="<?= $value['id']?>"><?= $value['language']?></option>
                                            <?php endforeach?>
                                            </select>
                                            
                                        </div>
                                        <div>
                                            <label for="">Parent Category</label>
                                            <select class="form-control" name="" id="">

                                            <?php foreach($cattable as $value):?>
                                                <option value="<?= $value['id']?>"><?= $value['parentCat']?></option>
                                            <?php endforeach?>
                                                
                                            </select>
                                        </div>
                                        <div>
                                            <label for="">Search</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div>
                                            <label for=""></label>
                                            <button class="form-control" type="submit">Filter</button>
                                        </div>

                                        
                                    </div>
                                </div>
                        </div>
                        <div class="card mb-4"  >
                            <div class="card-body">
                                <h5 class="card-title">Category</h5>
                                
                                <table class="table">

                                    <thead>
                                        <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Parent Category</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($cattable as $value) :?>
                                            <tr>
                                                

                                            <td><?= $sl++. '#' ?></td>
                                            <td><?= $value['catname'] ?></td>
                                            <td><?= $value['language'] ?></td>
                                            <td><?= $value['parentCat'] ?></td>
                                            <td><?= $value['order'] ?></td>
                                            <td><div style="width: 20px; height: 20px; border-radius: 50%; background-color:<?= $value['color'] ?> ;"></div></td>

                                            <td><a class="btn btn-danger btn-sm delete" id="delete"  value="<?= $value['id']?>" href="<?php echo base_url('deletecategory/'.$value['id'])?>"><i class="fa fa-trash option-icon"></a></td>

                                            <td><a class="btn btn-danger btn-sm edit" id="edit"  value="<?= $value['id']?>" href="<?php echo base_url('editcategory/'.$value['id'])?>"><i class="fa fa-edit option-icon"></a></td>
                                            
 
                                            </tr>
                                            
                                    <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>                                
                            </div>
                        </div>
                    </div>

                </main>

                <!-- footer  -->
<script>
    $(document).ready(function(){

        // 1st form
    $('#lanform').on('submit', function (e){
        e.preventDefault();

    //    alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'addlanguage', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });

//    pdf form
    $('.  delete').on('click', function(e){
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
                