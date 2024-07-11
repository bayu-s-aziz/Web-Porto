<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="Seorang mahasiswa dari Universitas Galuh Program Studi Sistem Informasi yang menggeluti bidang Desain, Programming dan Animasi." name="description" />
  <meta content="bayu, septiana, aziz, desain, programming, animasi" name="keywords" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

  <title id="full_name">My Portofolio</title>
</head>

<body id="home">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <?php
          session_start();
          if (isset($_SESSION['user'])) {
            // Jika sudah login, tampilkan tombol Menu
            echo '
          <li class="nav-item dropdown">
            <a id="navbarDropdown" href="#" class="d-block link-light text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="user_avatar" src="img/users/default_avatar.webp" alt="mini_avatar" width="40" height="40" class="rounded-circle " >
          </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#usersModal">Users</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#skillsModal">Skills</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="http://localhost/web-porto/si-admin/api/auth/logout.php">Logout</a></li>
            </ul>
          </li>
          ';
          } else {
            // Jika belum login, tampilkan tombol Login
            echo '
          <li class="nav-item">
            <a href="http://localhost/web-porto/si-admin/views/login/" class="btn btn-outline-light me-2" id="buttonLogin">Login</a>
          </li>
          ';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Jumbotron -->
  <section class="jumbotron text-center mb-3 vh-100">
    <img id="user_avatar" src="img/users/default_avatar.webp" alt="avatar" width="200" class="rounded-circle img-thumbnail bg-dark mt-5 mb-5" />
    <h1 id="full_name" class="display-7 mt-5"></h1>
    <div class="single-divider"></div>
    <!-- tentukan ID dengan nama  -->
    <h2 id="job" class="lead" style="font-weight: bold;"></h2>
  </section>
  <!-- End Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center">
        <h2 class="divider line one-line" content>About Me</h2>
        <div class="row justify-content-center fs-5 text-center mt-5">
          <p>Seorang mahasiswa dari Universitas Galuh Program Studi Sistem Informasi yang bergelut di berbagai bidang.</p>
          <p></p>
          <p></p>
          <p></p>
          <p>Beberapa kemampuan yang dimiliki dalam berbagai kategori.</p>
        </div>
      </div>
      <!-- Skills Progress Bars -->
      <div class="container mt-3">
        <div class="row justify-content-center">
          <div class="col-md-6" id="skills-column-1">
            <!-- Skills Progress Bars Column 1 -->
          </div>
          <div class="col-md-6" id="skills-column-2">
            <!-- Skills Progress Bars Column 2 -->
          </div>
        </div>
      </div>
  </section>
  <!-- Akhir About -->

  <!-- Akhir About -->

  <!-- Gallery -->
  <section id="gallery">
    <div class="container">
      <div class="row text-center mb-0">
        <h2 class="divider line one-line" content>My Gallery</h2>
      </div>
      <div class="row mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex flex-column align-items-center">
                <img src="img/gallery/image1.jpg" class="d-block mx-5" alt="program perpustakaan" width="380" height="220" />
                <div class="caption text-center mt-3">
                  <h5>Program Manajemen Perpustakaan</h5>
                  <p>Tugas Besar Mata Kuliah Pemrograman Berbasis Objek Program Studi Sistem Informasi Universitas Galuh Ciamis.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-column align-items-center">
                <img src="img/gallery/image2.jpg" class="d-block mx-5" alt="manmonster3d" width="380" height="220" />
                <div class="caption text-center mt-3">
                  <h5>Man & Monster</h5>
                  <p>Ilustrasi 3D Permainan Bola Basket antara Manusia dan Monster. Ilustrasi 3D ini dibuat menggunakan Blender dan dirender dengan Blender Cycles</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-column align-items-center">
                <img src="img/gallery/image3.jpg" class="d-block mx-5" alt="gundam" width="380" height="220" />
                <div class="caption text-center mt-3">
                  <h5>Gundam 00 Raiser</h5>
                  <p>Ilustrasi 3D Gundam 00 Raiser. Ilustrasi 3D ini menggunakan Blender dan dirender menggunakan KeyShot.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-column align-items-center">
                <img src="img/gallery/image4.jpg" class="d-block mx-5" alt="gapura" width="380" height="220" />
                <div class="caption text-center mt-3">
                  <h5>Ciamis Pagi</h5>
                  <p>Ilustrasi 3D Gapura Ciamis dipagi hari. Ilustrasi 3D ini dibuat dan dirender menggunakan Autodesk 3DS Max 2014.</p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

          <!-- Indikator Carousel -->
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="3"></li>
          </ol>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Akhir Galeri -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row mb-5">
        <h2 class="divider line one-line" content>Contact Me</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" required />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" required></textarea>
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-secondary">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="text-white text-center">
    <p>Copyright 2024 © Bayu Septiana Aziz</p>
  </footer>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

  <script>
    // Add event listener to window for scroll event
    window.addEventListener("scroll", function() {
      var navbar = document.querySelector(".navbar");
      if (window.scrollY > 0) {
        // Adjust the scroll threshold as needed
        navbar.classList.add("navbar-scroll", "navbar-shrink");
      } else {
        navbar.classList.remove("navbar-shrink");
      }

      // Check which section is in the viewport
      const sections = document.querySelectorAll("section");
      const navLinks = document.querySelectorAll(".nav-link");

      let activeSection = false;

      sections.forEach((section, index) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (window.scrollY >= sectionTop - 50 && window.scrollY < sectionTop + sectionHeight - 50) {
          navLinks.forEach((link) => link.classList.remove("active"));
          navLinks[index].classList.add("active");
          activeSection = true;
        }
      });

      // If no other section is active, make sure Home is still active
      if (!activeSection) {
        navLinks.forEach((link) => link.classList.remove("active"));
        document.querySelector('.nav-link[href="#home"]').classList.add("active");
      }
    });

    // Ensure Home link is active on page load
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelector('.nav-link[href="#home"]').classList.add("active");
    });

    $(document).ready(function() {
      // Fungsi untuk merubah photo, full_name, job sesuai id serta mengambil user_id
      getUserIDAndShowAll();

      function getUserIDAndShowAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "http://localhost/web-porto/si-admin/api/getUserID.php",
          success: function(response) {
            if (response.user_id) {
              const userID = response.user_id;
              showAll(userID);
              fetchSkills(userID);
            } else {
              console.log(response.error);
            }
          },
          error: function(err) {
            console.log("Error fetching user ID", err);
          }
        });
      }

      function showAll(userID) {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "http://localhost/web-porto/si-admin/api/users/read.php?id=" + userID,
          success: function(response) {
            $("#full_name").text(response.full_name);
            $("#job").text(response.job + " | " + response.expected_position);
            document.title = "My Portfolio | " + response.full_name; // Mengubah judul halaman

            const photoURL = response.photo;
            //mencoba memuat photo
            loadImage(photoURL, function(isValid) {
              if (isValid) {
                $("img#user_avatar").attr("src", photoURL);
              } else {
                $("img#user_avatar").attr("src", "/web-porto/img/users/default_avatar.webp");
              }
            });
          },
          error: function(err) {
            console.log("Error fetching user data", err);
          }
        });
      }

      function loadImage(url, callback) {
        const img = new Image();
        img.onload = function() {
          callback(true);
        };
        img.onerror = function() {
          callback(false);
        };
        img.src = url;
      }

      // Fungsi untuk mengambil data dan menampilkan skills di progress bars sesuai user_id
      function fetchSkills(userID) {
        $.ajax({
          type: "GET",
          url: "http://localhost/web-porto/si-admin/api/skills/read.php",
          success: function(response) {
            const skills = response.body;

            // Filter skills sesuai dengan user_id
            const filteredSkills = skills.filter(skill => skill.user_id === userID);

            let skillsHtmlColumn1 = '';
            let skillsHtmlColumn2 = '';

            filteredSkills.forEach((skill, index) => {
              const skillHtml = `
                        <div class="mb-3">
                            <h6>${skill.skill_name}</h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: ${skill.rating}%" aria-valuenow="${skill.rating}" aria-valuemin="0" aria-valuemax="100">${skill.rating}%</div>
                            </div>
                        </div>`;

              if (index % 2 === 0) {
                skillsHtmlColumn1 += skillHtml;
              } else {
                skillsHtmlColumn2 += skillHtml;
              }
            });

            $('#skills-column-1').html(skillsHtmlColumn1);
            $('#skills-column-2').html(skillsHtmlColumn2);
          },
          error: function(err) {
            console.error('Error fetching skills:', err);
          }
        });
      }
    });
  </script>
  <!-- Modal User dan Skills -->
  <div class="modal fade" id="usersModal" tabindex="-1" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100" id="usersModalLabel" style="color: red">Users CRUD</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Tempatkan konten dari users/index.php di sini -->
          <iframe src="http://localhost/web-porto/si-admin/views/users/index.php" style=" border: none;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="skillsModal" tabindex="-1" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100" id="usersModalLabel" style="color: red">Skills CRUD</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Tempatkan konten dari skills/index.php di sini -->
          <iframe src="http://localhost/web-porto/si-admin/views/skills/index.php" style=" border: none;"></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Modal Users dan Skill -->
</body>

</html>