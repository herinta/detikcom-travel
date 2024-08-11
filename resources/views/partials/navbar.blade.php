  <!-- resources/views/partials/navbar.blade.php -->
  <nav class="fixed-top navbar navbar-expand-lg mx-md-5 mx-3  py-3 px-4">
  <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="images/logo.png" class="img-fluid logo" alt=""></a>
      <button id="menuToggle" class="navbar-toggler border-0 outline-none shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <img id="menuIcon" src="images/menu.png" alt="">
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-content-center text-center gap-3 gap-md-5 mt-3 mt-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <a href="" class="btn-primary">Registrasi</a>
        </ul>
      </div>
    </div>
  </nav>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const menuIcon = document.getElementById('menuIcon');

    menuToggle.addEventListener('click', function () {
      if (menuIcon.src.includes('menu.png')) {
        menuIcon.src = 'images/close.png';  // Ganti dengan path gambar close
      } else {
        menuIcon.src = 'images/menu.png';   // Ganti dengan path gambar menu
      }
    });
  });
</script>
