<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-4 fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <button
      class="navbar-toggler bg-white border-0 mx-3"
      type="button"
      aria-expanded="false"
      id="toggleSidebar"
      aria-controls="offcanvasScrolling">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Navbar brand -->
    <a class="navbar-brand" href="">
      <img
        src="https://inovindoacademy.com/assets/images/logo.png"
        class="logo"
        alt="logo" />
    </a>

    <div class="d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <img
          src="https://www.gamelab.id/uploads/members/75964/photo-ade-ridwan-75964.png"
          alt="cms"
          class="avatar rounded-circle" />
      </button>
    </div>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex align-items-center flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <a
            class="nav-link dropdown-toggle"
            href=""
            role="button"
            id="dropdownMenuLink"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
            data-mdb-offset="100,0">
            <span class="me-2 text-muted">Selamat Pagi, Administrator</span>
            <div class="d-inline-block">
              <div
                class="d-flex justify-content-center align-items-center text-white rounded-circle"
                style="
                  width: 32px;
                  height: 32px;
                  background-color: #bf360c;
                  font-size: 0.85rem;
                ">
              </div>
            </div>
          </a>
          <!-- Bagian logout di navbar -->
          <!-- Bagian logout di navbar -->
          <ul class="dropdown-menu dropdown-menu-end border border-1" aria-labelledby="dropdownMenuLink">
            <li>
              <a class="dropdown-item" href="https://inovindoacademy.com/admin/profile">
                <i class="fas fa-user fa-fw me-2"></i><span>Profil Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider my-0" />
            </li>
            <li>
              <!-- Formulir logout dengan method POST -->
              <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="fas fa-power-off fa-fw me-2"></i><span>Keluar</span>
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
