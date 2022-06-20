<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta name="Description" CONTENT="Software Customer Service Terintegrasi untuk Pengembangan Bisnis Secara Maksimal.">
    <meta name="keywords" content="banyumax">
    <meta name="author" content="PT. Powerkerto Wahyu Keprabon">
    <meta name="robots" content="noindex,nofollow">

    <!-- Favicons -->
    <link rel="icon" href="img/favicon.png">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/login.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="POST" class="sign-in-form">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          <form action="{{route('login.store')}}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
              @error('username')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account ?</h3>
            <p>
              Free trial for 14 days, You're able to subscribe after trial. Lets join with us and feel the benefits by using banyumax.id. Click right <a href="/register" style="color:white;">here</a>
            </p>
          </div>
          <img src="assets/img/hero-img.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Reasons Why Banyumax You Really Need This software makes it easy for you to divide traffic effectively to all CS.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/img/why-us.png" class="image" alt="" />
        </div>
      </div>
      <div class="copyright">
        <img src="assets/img/favicon.png" alt="">
        <a href="https://banyumax.id/">banyumax.id</a>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });

    </script>
  </body>
</html>
