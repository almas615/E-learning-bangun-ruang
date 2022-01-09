<?php
include "../../lib/koneksi.php";
session_start();

$materi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT *  FROM materi WHERE id = $_GET[materiId]"));
if ($materi) {
    $judul = $materi['judulMateri'];
} else {
    $judul = "";
}
?>
<!doctype html>
<html lang="en">

<head></head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        background-color: azure;

    }

    .soal-container {
        position: relative;
        min-width: 65vw;
    }

    .navbar {
        background-color: #3b3d40;
    }

    a {
        text-decoration: none;
    }

    .arrow {
        cursor: pointer;
    }

    .attachment__caption {
        display: none;
    }

    .show-from-right {
        animation: 1s ease-out 0s 1 slideInFromRight forwards;
    }

    .show-from-left {
        animation: 1s ease-out 0s 1 slideInFromLeft forwards;
    }

    @keyframes slideInFromRight {
        0% {
            transform: translatex(100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes slideInFromLeft {
        0% {
            transform: translatex(-100%);
        }

        100% {
            transform: translateX(0);
        }
    }
</style>
<link rel="shortcut icon" href="../../public/template/default/assets/images/icons/graduation_cap.svg">
<title>Quiz | E-Learning</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" style="margin-right: 50px;color: white;font-weight: bold;" href="#"><?= "QUIZZ Materi " . $judul; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link active btn " style="background-color: white;" aria-current="page" href="./../../../../pages/user/index.php?module=daftar_materi">Daftar Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn " style="background-color: white;" aria-current="page" href="index.php?materiId=<?= $_GET['materiId']; ?>">Mulai Ulang</a>
                    </li>

                </ul>
            </div>
            <a href="./../../../../pages/user/index.php?module=daftar_materi" style="margin-left: 50px;text-decoration: none;color: white;"><i class="fa fa-times-circle fa-2x"></i></a>

        </div>
    </nav>
    <section>
        <div class="container-fluid mt-5 d-flex justify-content-between align-items-center" style="min-height: 80vh;">
            <div class="arrow <?= $previousHidden; ?>" id="previous"><i class="fa fa-chevron-left" style="font-size: 40px;font-weight: normal;"></i></div>
            <div style="max-width: 70vw;">
                <form action="aksi_simpan.php?materiId=<?= $_GET['materiId']; ?>" method="post">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT *  FROM soal  WHERE materiId = $_GET[materiId] ORDER BY noSoal ASC"); // ambil data isi soal
                    if ($query) {
                        $no = 0;
                        while ($isiSoal = mysqli_fetch_array($query)) {
                    ?>
                            <div class="soal-container" data-no="<?= ++$no; ?>">
                                <div class="soal align-self-start"><?= $isiSoal['isiSoal']; ?></div>
                                <div class="jawaban-container mt-3">
                                    <?php
                                    $queryJawaban = mysqli_query($koneksi, "SELECT *  FROM jawaban  WHERE soalId = $isiSoal[id]");
                                    while ($jawaban = mysqli_fetch_array($queryJawaban)) {
                                    ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jawaban[<?= $isiSoal['id']; ?>]" value="<?= $jawaban['id']; ?>" id="jawaban<?= $jawaban['id']; ?>">
                                            <label class="form-check-label" for="jawaban<?= $jawaban['id']; ?>">
                                                <?= $jawaban['isiJawaban']; ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <button id="submit" type="submit" class="btn btn-primary mt-5" style="width: 100%;" onclick="return confirm('Are you sure?')">SUBMIT</button>
                </form>
            </div>
            <div class="arrow <?= $nextHidden; ?>" id="next"><i class="fa fa-chevron-right" style="font-size: 40px;font-weight: normal;"></i></div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        const next = document.getElementById('next');
        const previous = document.getElementById('previous');
        const submit = document.getElementById('submit');
        let soal = document.querySelectorAll('.soal-container');
        let currentQuestion = 1;

        function hideAllQuestion() {
            soal.forEach(element => {
                element.style.display = "none"
                element.classList.remove("show-from-right")
                element.classList.remove("show-from-left")
            });
        }

        function hideArrows() {
            if (currentQuestion >= soal.length) {
                next.style.visibility = "hidden"
            } else {
                next.style.visibility = ""
            }
            if (currentQuestion <= 1) {
                previous.style.visibility = "hidden"
            } else {
                previous.style.visibility = ""
            }
        }

        function hideBtnSubmit(animation) {
            if (currentQuestion == soal.length) {
                submit.style.removeProperty("display")
                submit.classList.add(`${animation}`)

            } else {
                submit.classList.remove(`show-from-right`)
                submit.classList.remove(`show-from-left`)
                submit.style.display = "none"
            }
        }
        hideAllQuestion()
        hideArrows()
        hideBtnSubmit()
        document.querySelector(`[data-no="${currentQuestion}"]`).style.removeProperty("display")
        document.querySelector(`[data-no="${currentQuestion}"]`).classList.add("show-from-left")
        next.addEventListener('click', function() {
            currentQuestion++;
            hideAllQuestion();
            document.querySelector(`[data-no="${currentQuestion}"]`).style.removeProperty("display")
            document.querySelector(`[data-no="${currentQuestion}"]`).classList.add("show-from-right")
            console.log(currentQuestion)
            hideArrows()
            hideBtnSubmit("show-from-right");
        })
        previous.addEventListener('click', function() {
            currentQuestion--;
            hideAllQuestion();
            document.querySelector(`[data-no="${currentQuestion}"]`).style.removeProperty("display")
            document.querySelector(`[data-no="${currentQuestion}"]`).classList.add("show-from-left")
            console.log(currentQuestion)
            hideArrows()
            hideBtnSubmit("show-from-left")
        })
        console.log(currentQuestion)
    </script>
</body>

</html>