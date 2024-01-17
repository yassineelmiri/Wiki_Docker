<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="/Wiki/public/vendor/aos/aos.css" rel="stylesheet">
  <link href="/Wiki/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Wiki/public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Wiki/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/Wiki/public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/Wiki/public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="/Wiki/public/css/style.css" rel="stylesheet">
</head>
<style>
    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }



    .error input {
        border: 3px solid red;
    }

    .success input {
        border: 3px solid green;
    }

    form span.error-msg {
        color: red;
        width: 100%;
        display: flex;
        margin-left: 30%;
        margin-bottom: 20px;
    }

    form {
        padding: 20px;
    }

    form a {
        margin-left: 25%;
        text-decoration: none;
    }

    .card {
        width: 100%;
        border: none;
        background-color: transparent;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card img {
        width: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin: auto;
    }

    .card label {
        margin-top: 30px;
        text-align: center;
        height: 40px;
        cursor: pointer;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .card input {
        display: none;
    }
</style>

<body class="bg-dark">
<section id="hero">

<div class="container ">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Welcome To Wiki <br />
                        <span style="color: white">All on One Platform</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card1 bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <?php
                            if (isset($_SESSION['error_message'])) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $_SESSION['error_message'];
                                echo '</div>';
                                unset($_SESSION['error_message']);
                            }
                            ?>
                            <form action="signup" enctype="multipart/form-data" method="POST" id="form">
                                <div class="card">
                                    <img src="/Wiki/public/img/avatar.jpg" id="image">
                                    <label for="input-file">Choose Image</label>
                                    <input type="file" accept="image/jpg, image/png, image/jpeg" name="profil"
                                        style="background-color: transparent;" id="input-file">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <input type="text" id="fullname" class="form-control"
                                                placeholder="FullName" name="fullname" />
                                            <p class="fname-error text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <input type="text" id="address" class="form-control" placeholder="Address"
                                                name="address" />
                                            <p class="address-error text-danger"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control" placeholder="Email"
                                        name="email" />
                                    <p class="email-error text-danger"></p>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                        name="password" />
                                    <p class="password-error text-danger"></p>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4 col-12" name="signup">
                                    Register
                                </button>
                                <a type="submit" class="mb-4 col-12 register text-primary" href="signin">
                                    Already have an account Login
                                </a>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class='bx bxl-meta'></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class='bx bxl-google'></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class='bx bxl-linkedin'></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class='bx bxl-github'></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section>


    <script src="/Wiki/public/js/login.js"></script>
    <script src="/Wiki/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        let image = document.getElementById("image");
        let input = document.getElementById("input-file");

        input.onchange = () => {
            image.src = URL.createObjectURL(input.files[0]);
        }
    </script>
</body>



<script>
    AOS.init();
</script>

</html>