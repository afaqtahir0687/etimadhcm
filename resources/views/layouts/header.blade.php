<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <div class="text-center">
      <a href="{{url('/')}}" class="logo d-block">
        <img src="assets/img/logo/eitmad.png" alt="Logo Eitmad">
      </a>
      <p class="sitename mt-2">Human Capital Management System (HCM)</p>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#adv-features">Adv Features</a></li>
        <li><a href="#key-features">Key Features</a></li>
        <li><a href="#uae-features">UAE Features</a></li>
      
        <li><a href="#services">Modules</a></li>
        <li><a href="#team">Leadership</a></li>

        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>

<script>
  window.addEventListener('scroll', function () {
    const header = document.getElementById('header');

    if (window.scrollY > 50) {
      header.classList.add('header-scrolled');
    } else {
      header.classList.remove('header-scrolled');
    }
  });
</script>