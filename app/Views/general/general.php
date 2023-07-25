<?= $this->extend("layouts/base") ?> <?= $this->section('content') ?>
<!-- headerpart  -->
<!-- for the menu items -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">General Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">General Page</li>
                        </ol>
<!-- main part  -->
<div class="card mb-4">
  <div class="card-body">
    <div class="form-group">
      <label class="form-label">Setting Language</label>
      <select class="form-control" name="" id=""> <?php foreach($lanName as $value):?> <option value="
					<?= $value['id']?>"> <?= $value['languageName']?> </option> <?php endforeach ?>
        <!-- <option value="Arabic">Arabic</option><option value="Bangla">Bangla</option> -->
      </select>
    </div>
  </div>
</div>
<div class="card mb-4">
  <div class="card-body">

  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#a" type="button" role="tab" aria-controls="nav-home" aria-selected="true">General Setting</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#b" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Logo</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#c" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Setting</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#d" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Socail Media Setting</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#e" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Facebook Comments</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#f" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cookies Warning</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#g" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Custom Header </button>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <!-- general setting  -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <form id="gsetting">
          <div class="form-group">
            <label class="form-label">Time Zone</label>
            <select class="form-control" name="time" id="time">
              <option value="">1</option>
            </select>
          </div>
          <div class="form-group">
            <label for="form-label">Application</label>
            <textarea class="form-control" name="application" id="application" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>
          <div class="form-group">
            <label for="form-label">Post Optional URL Button Name</label>
            <input class="form-control" type="text" name="url" id="url">
          </div>
          <div class="form-group">
            <label for="form-label">Copyright</label>
            <input class="form-control" type="text" name="copyright" id="copyright">
          </div><br>
          <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
        </form>
      </div>
  </div>
  <!-- logo -->
  <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <?php foreach($logodata as $value):?>
        <form id="logoform">
          <div class="form-group">
            <label class="form-label">Logo</label><br>
            
            <img height="150" width="150" src="<?php echo base_url('logouploads/').$value['logo'];  ?>" alt="Image" >
            
            <input type="file" class="form-control" name="logo">
          </div>
          <div class="form-group">
            <label for="form-label">Logo footer</label>
            <img height="150" width="150" src="<?php echo base_url('logouploads/').$value['logoFooter'];  ?>" alt="Image" >
            <input type="file" class="form-control" name="logoFooter">
          </div>
          <div class="form-group">
            <label for="form-label">Logo email</label>
            <img height="150" width="150" src="<?php echo base_url('logouploads/').$value['logoEmail'];  ?>" alt="Image" >
            <input type="file" class="form-control"  name="logoEmail" >
          </div>
          <div class="form-group">
            <label for="form-label">Favicon</label>
            <img height="150" width="150" src="<?php echo base_url('logouploads/').$value['favicon'];  ?>" alt="Image" >
            <input type="file" class="form-control"  name="favimg" >
          </div>
          <br>
          <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
        </form> 
        <?php endforeach?>     
  </div>
  <!-- contact setting -->
  <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <form id="consetting">
          <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="Address">
          </div>
          <div class="form-group">
            <label for="form-label">Email</label>
            <input type="text" class="form-control" name="Email">
          </div>
          <div class="form-group">
            <label for="form-label">Phone</label>
            <input class="form-control" type="text" name="Phone" id="Phone">
          </div>
          <div class="form-group">
            <label for="form-label">Contact</label>
            <input class="form-control" type="text" name="Contact" id="Contact">
          </div><br>
          <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
        </form>
  </div>
  <!-- social media setting -->
  <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
            <form id="smediasetting">
                <div class="form-group">
                    <label class="form-label">Facebook url</label>
                    <input type="text" class="form-control" name="face">
                </div>
                <div class="form-group">
                    <label for="form-label">Twitter url</label>
                    <input type="text" class="form-control" name="twit">
                </div>
                <div class="form-group">
                    <label for="form-label">Instagram Url</label>
                    <input class="form-control" type="text" name="inst" >
                </div>
                <div class="form-group">
                    <label for="form-label">Pinterest url</label>
                    <input class="form-control" type="text" name="pint" >
                </div><br>
                <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
            </form>
  </div>
  <!-- facebook comments -->
  <div class="tab-pane fade " id="e" role="tabpanel" aria-labelledby="pills-home-tab">
        <form id="facebookcomments">
          <div class="form-group">
            <label class="form-check-label " for="inlineRadio1">status</label>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="enable" id="enable" value="1">
                <label class="form-check-label" for="inlineRadio1">enable</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="disable" id="disable" value="0">
                <label class="form-check-label" for="inlineRadio2">disable</label>
            </div><br>
            <div class="form-group">
            <label for="form-label">Facebook Comments Plugin Code</label>
            <textarea class="form-control" name="fcomments" id="fcomments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
        </form>
      </div>
  </div>
  <!-- cookies warning -->
  <div class="tab-pane fade " id="f" role="tabpanel" aria-labelledby="pills-home-tab">
        <form id="cookies">
          <div class="form-group mt-4">
            <label class="form-check-label " for="inlineRadio">Show Cookies Warning</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="yes" id="a" value="1">
                  <label class="form-check-label" for="a">yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="yes" id="b" value="0">
                  <label class="form-check-label" for="b">no</label>
              </div>
              <br>
          <div class="form-group">
            <label for="form-label"></label>
            <textarea class="form-control" name="cookieswarning" id="cookieswarning" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
        </form>
      </div>
  </div>
  
  <!-- custom header -->
  <div class="tab-pane fade " id="g" role="tabpanel" aria-labelledby="pills-home-tab">
        <form id="custom">
          
          <div class="form-group">
            <label for="form-label"></label>
            <textarea class="form-control" name="customHeader" id="customHeader" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mt-4 mb-5">Save Changes</button>
        </form>
      </div>
  </div>
  

</div>
    
<!-- recaptcha part -->

<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <form id="recaptcha" >
        <h5 class="card-title">Google reCAPTCHA</h5>
          <div class="form-group">
            <label class="form-label">site key</label>
            <input class="form-control" name="siteKey" type="text">
          </div>
          <div class="form-group">
            <label class="form-label">Secret Key</label>
            <input class="form-control" name="secretKey" type="password">
          </div><br>
        <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
      </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <form id="maintenance" >
        <h5 class="card-title">Maintenance Mode</h5>
            <div class="form-group mb-4">
            <label class="form-label">Title</label>
            <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group">
            <label class="form-label">Description </label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            </div>
            </div>
            <div class="form-group">
            <label class="form-check-label  " for="inlineRadio">status</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="enable" id="inlineRadio1" value="1">
                  <label class="form-check-label" for="inlineRadio1">enable</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="enable" id="inlineRadio2" value="0">
                  <label class="form-check-label" for="inlineRadio2">disable</label>
                </div>
                <br>
            <button type="submit" class="btn btn-primary mb-4 mt-4">Save Changes</button>
        </form>
        
      </div>
    </div>
</div>


<script>
    $(document).ready(function(){

        // general settings
    $('#gsetting').on('submit', function (e){
        e.preventDefault();

        alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'generalsetting', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });
    // logo
    $('#logoform').on('submit', function(e){
        e.preventDefault();

                alert('hi');

                var formData = new FormData(this);
                console.log(formData);
                
                

                $.ajax({
                    url: 'logoform', 
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


    // contact setting form

    $('#consetting').on('submit', function (e){
        e.preventDefault();

        alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'consetting', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });

    // social media settings
    $('#smediasetting').on('submit', function (e){
        e.preventDefault();

        alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'smediasetting', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });
    // cookies warning
    $('#cookies').on('submit', function (e){
        e.preventDefault();

        alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'cookies', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });
    // custom header 
    $('#custom').on('submit', function (e){
        e.preventDefault();

        alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'custom', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });


    //recap form
    $('#recaptcha').on('submit', function (e){
        e.preventDefault();

       alert('hi');
        var formData = $(this).serializeArray();

        $.ajax({
            type: 'POST',
            url: 'recaptcha', 
            data: formData,
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);
            },
            
        });
    });




//    pdf form
    $('#maintenance').on('submit', function(e){
        e.preventDefault();

                alert('hi');

                var formData = new FormData(this);
                console.log(formData);
                
                

                $.ajax({
                    url: 'maintenance', 
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

    $('#asdf').click(function(e){
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







  </main>
  <!-- footer  --> <?= $this->endSection() ?>