<?= $this->extend("layouts/base") ?>

<!-- headerpart -->
<?= $this->section('content') ?> 

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
                        <h1 class="mt-4">Language Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Language Page</li>
                        </ol>

                        <!-- main part  -->
                            
                       
                        <div class="card mb-4"  >
                            <div class="card-body">
                                <h5 class="card-title">Languages</h5>
                                
                                <table class="table">

                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Language Name</th>
                                        <th scope="col">Default language</th>
                                        <th scope="col">translation/export</th>
                                        <th scope="col">option</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($lanName as $value) :?>
                                            <tr>
                                                

                                            <td><?= $sl++. '#' ?></td>
                                            <td><?= $value['languageName'] ?></td>
                                            <td><button class="btn btn-primary btn-sm def" value="<?= $value['id']?>">Default</button></td>
                                            <td><button class="btn btn-success btn-sm" value="<?= $value['id']?>">Export</button></td>
                                            <td><button class="btn btn-danger btn-sm" value="<?= $value['id']?>">Option</button></td>
                                                
                                                
                                               
                                            
                                            
                                                
                                            </tr>
                                            
                                            <?php endforeach; ?>
                                        <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        </tr> -->
                                    </tbody>
                                </table>                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Add Language</h5>
                                        <form id="lanform">
                                            <div class="form-group">
                                                <label class="form-label">language Name</label>
                                                <input type="text" class="form-control" id="languageName" name="languageName">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Short Form</label>
                                                <input type="text" class="form-control" id="shortForm" name="shortForm">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Language Code</label>
                                                <input type="text" class="form-control" id="languageCode" name="languageCode">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Order</label>
                                                <input type="text" class="form-control" id="order" name="order">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label">Text Editor Language</label>
                                                <select class="form-control"  name="editorlan" id="editorlan">
                                                    <option value="English">English</option>
                                                    <option value="Bangla">Bangla</option>
                                                </select>
                                               
                                            </div>

                                            <label class="form-check-label" for="inlineRadio1">Text Direction</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <label class="form-check-label" for="inlineRadio1">Status</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div><br>
                                            <button type="submit" class="btn btn-primary mt-4">Add Language</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Import Language</h5>
                                        <form id="lanpdfile">
                                            <div class="form-group">
                                                <label class="form-label">JSon Language File</label>
                                                <input type="file" name="lanfile" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">Import language</button>

                                        </form>
                                    </div>
                                </div>
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
                