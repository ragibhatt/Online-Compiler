
<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="crossorigin=""/>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">



</head>
<body>

<div class="text-center">
      <a href="#" class="btn btn-default text-white text-center btn-primary font-weight-bold" data-toggle="modal" data-target="#modalLRForm">RSVP</a>
</div>
<!--Modal: Login / Register Form-->
  <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content py-2">
              <div class="text-center modal-header">
                <h4 class="font-weight-bold black-text text-uppercase">JOIN NOW</h4>
              </div>
              <hr>
              <div class="modal-body">
                <form>

                    <h4 class="font-weight-bold black-text text-left">Member Details</h4>
                    <hr>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
                      </div>
                      <input type="text" name="name"class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" name="uname"class="form-control" placeholder="User_Name" aria-label="Name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
                      </div>
                      <input type="email" class="form-control" name="email" placeholder="Email id" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
                      </div>
                      <input type="tel" pattern="[789][0-9]{9}" class="form-control" name="contact"placeholder="Contact Number" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
                      </div>
                      <input type="password"  class="form-control" name="password"placeholder="Password" aria-label="Email" aria-describedby="basic-addon1">
                    </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password"  class="form-control" name="rewrite"placeholder="Rewrite Password" aria-label="Email" aria-describedby="basic-addon1">
                  </div>
                  </div>
                  <hr>
                  <div class="text-center modal-footer">
                    <button class="btn btn-info btn-lg font-weight-bold text-uppercase-center" name="reg" type="submit">Register</button>
                  </div>
                  </div>

                </div>
              </form>
              </div>




        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
</body>
</html>
