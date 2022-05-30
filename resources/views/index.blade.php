<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Viga&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="main-content p-5">
      <div class="container-fluid bg-white content p-0 m-auto">
        <div class="row">
          <div class="col-md-6 p-5">
            <div class="row">
              <img src="Gambar/logo.jpeg" alt="logo" class="logo m-auto" />
              <div class="strip"></div>
            </div>
            <div class="row mt-3 p-5">
              <h3 class="fw-bold">Login</h3>
              <p class="text-capitalize mb-1">Your Honor come with us</p>
            </div>
            <div class="row p-5">
              <button class="bg-white btn btn-outline-dark fw-bold fs-6 mt-4 border" style="font-size: 12px">
                <img src="/Gambar/icon google.png" alt="icon" class="me-3" /><span class="google text-dark bg-white">Sign In With Google</span>
              </button>
              <form action="" class="mt-5 p-0">
                <div class="mb-4">
                  <label for="email" class="form-label">Email*</label>
                  <input type="email" class="form-control border" id="exampleInputEmail1" placeholder="mail@website.com" />
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control border" id="exampleInputPassword1" placeholder="Min.8 character" />
                </div>
                <div class="mb-4 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label for="checkBox">Remember me</label>
                  <label for="" class="float-end text-primary fw-bold"><a href="" class="text-decoration-none">Forget password ?</a></label>
                </div>
              </form>
              <button type="submit" class="btn btn-primary button mt-3 p-3 mb-3">Login</button>
              <label for="">Not register yet? <a href="/register" class="text-primary text-decoration-none">Create an Account</a></label>
            </div>
          </div>
          <div class="col-md-6 bg-image">
            <div class="row mt-5">
              <div class="social-account">
                <a href=""><img src="Gambar/instagram.png" alt="" class="bg-white p-2 instagram-icon" /></a>
                <a href=""><img src="Gambar/twitter.png" alt="" class="bg-white p-2 twitter-icon" style="width: 70px" /></a>
                <a href=""><img src="Gambar/facebook.png" alt="" class="bg-white p-2 facebook-icon" style="width: 60px" /></a>
                <div class="person">
                  <img src="Gambar/your-photo.jpeg" alt="" />
                </div>
              </div>
            </div>
            <div class="text-bottom">
              <h4 class="text-uppercase text-center fw-bold text-dark">
                Turn to your ideas <br />
                into reality
              </h4>
              <p class="text-center">Consisten quality and experience across <br />all platforms and device</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
