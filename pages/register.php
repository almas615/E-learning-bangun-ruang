<?php
session_start();
if (isset($_SESSION['userLogin'])) {
    header('location:user/?module=home');
    if ($_SESSION['hak_akses'] == 'user') {
        header('location:user/?module=home');
    }else {
        header('location:admin/?module=home');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="../../public/template/default/assets/images/icons/graduation_cap.svg">
    <title>Login | E-Learning</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../public/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="aksi_register.php" method="post">
        <img class="mb-4" src="../../public/template/default/assets/images/icons/graduation_cap.svg" alt="" width="132" height="117">

            <h1 class="h3 mb-3 fw-normal">Daftar E-Learnig</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="name@example.com" required>
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                     <a href="login.php">Kembali</a>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>