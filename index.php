<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <style>
      @font-face {
        font-family: klavika;
        src: url(KlavikaBoldBold.otf);
      }
     </style>

    <title>ASESMEN</title>
  </head>
  <body>
    <section class="mt-5 col-sm-10  p-2 bg-opacity-10 mx-auto text-center col-lg-12 mx-lg-auto justify-content-center align-items-center align-center">
      <div class="d-flex justify-content-center my-3 pt-0">
      <img class="pt-0" width="70px" height="70px" src="img/logo.png" alt="" class="img img-fluid">

      </div>
      <div class="col-sm-3 text mx-2">
        <h2
          class="text-success fw-bold pb-2"
          style="font-size: 1.5rem"
        >
          ASESMEN PESERTA PLS
        </h2>
        <h5>Masukkan Nomor registrasi anda</h5>
      </div>
      <div class="mt-2 col-sm-4 form bg-white shadow p-3 bg-body rounded ">
        <form class="text-center col-lg-12 justify-content-center" method="POST" action="procces.php">
            <div class="mb-1 input input-group-lg">
              <input
                placeholder="Nomor Registrasi"
                type="text"
                class="form-control text-center"
                id="exampleInputEmail1"
                name="noreg"
                aria-describedby="emailHelp"
              />
            </div>
             <!-- <div class="mb-1 input input-group-lg">
              <input
              name="password"
                placeholder="Password"
                type="password"
                class="form-control"
                id="exampleInputPassword1"
              />
            </div> -->
            <div class="button">
             <button
            name="btn"
              type="submit"
              class="btn btn-success col-12 btn-lg"
            > 
              <b>Masuk</b>
            </button>
        </div>
       
          </div>
        </form>
      </div>
    </section>
<div class="fixed-bottom text-center">
Aplikasi dibuat oleh Tim Mentor SKAWAN
<br>
<span class="text-muted small">© Muhammad Naufal Fadhilah</span>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

