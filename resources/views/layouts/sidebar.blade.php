<body class="bg-body">
  <div class="backdrop" id="backdrop"></div>
  
  @include('layouts.navbar') 

  <nav class="sidebar sidebar-mini sticky-top" id="sidebar">
  <div class="menu shadow pb-5" id="sidebar-scroll">
    <ul class="menu-wrapper">
      <li class="menu-item ripple">
        <a
          href="{{ route('students.index') }}"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Beranda"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="home" class="fa-fw"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Profil Saya"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="user" class="fa-fw"></i>
          <span>Profil Saya</span>
        </a>
      </li>
      <div class="ps-3 text-muted menu-title">
        <small>Main Menu</small>
      </div>
      <li
        class="menu-item ripple show"
        data-mdb-placement="right"
        data-mdb-toggle="tooltip"
        title="Master Data"
        data-mdb-delay='{"show":"350", "hide":"0"}'
      >
        <a
          data-mdb-toggle="collapse"
          href="#collapseMenu3"
          role="button"
          aria-expanded="false"
          aria-controls="collapseMenu3"
        >
          <i data-feather="database" class="fa-fw"></i>
          <span>Master Data</span>
        </a>
      </li>

      <div class="collapse show" id="collapseMenu3">
        <ul class="p-0 m-0">
          <li class="menu-item ripple">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Sekolah"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i class="far fa-building fa-fw"></i>
              <span>Sekolah</span>
            </a>
          </li>
          <li class="menu-item ripple active">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Jurusan"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i data-feather="grid" class="fa-fw"></i>
              <span>Jurusan</span>
            </a>
          </li>
          <li class="menu-item ripple">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Format Nilai"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i data-feather="clipboard" class="fa-fw"></i>
              <span>Format Nilai</span>
            </a>
          </li>
          <li class="menu-item ripple">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Jadwal Peserta"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i class="bi bi-bookmark-check"></i>
              <span>Jadwal Peserta</span>
            </a>
          </li>
          <li class="menu-item ripple">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Jam Kerja"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i class="bi bi-alarm"></i>
              <span>Jam Kerja</span>
            </a>
          </li>
          <li class="menu-item ripple">
            <a
              href="#"
              data-mdb-placement="right"
              data-mdb-toggle="tooltip"
              title="Hari Libur"
              data-mdb-delay='{"show":"350", "hide":"0"}'
              class="sub-item"
            >
              <i data-feather="calendar" class="fa-fw"></i>
              <span>Hari Libur</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="ps-3 text-muted menu-title">
        <small>Kelola Peserta Magang</small>
      </div>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Pengajuan"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="send" class="fa-fw"></i>
          <span>Pengajuan</span>
        </a>
      </li>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Peserta"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="users" class="fa-fw"></i>
          <span>Peserta</span>
        </a>
      </li>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Penilaian"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="bar-chart-2" class="fa-fw"></i>
          <span>Penilaian</span>
        </a>
      </li>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Penilaian Template"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="folder" class="fa-fw"></i>
          <span>Penilaian Template</span>
        </a>
      </li>
      <li class="menu-item ripple">
        <a
          href="#"
          data-mdb-placement="right"
          data-mdb-toggle="tooltip"
          title="Monitoring"
          data-mdb-delay='{"show":"350", "hide":"0"}'
        >
          <i data-feather="monitor" class="fa-fw"></i>
          <span>Monitoring</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

