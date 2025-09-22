<?php
$menu = $this->uri->segment(1);
$sub  = $this->uri->segment(2);
?>
<aside>
  <div id="sidebar" class="nav-collapse"
       style="background: linear-gradient(180deg, #6b4b29ff, rgba(252, 183, 55, 1)); 
              min-height: 100vh; 
              box-shadow: 4px 0 15px rgba(0,0,0,0.1); 
              transition: width 0.4s ease, all 0.3s ease;">

    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion" style="margin:0; padding:0; list-style:none;">

      <!-- Logo Sekolah -->
      <p class="centered" style="margin-top:80px;">
        <a href="profile.html">
          <img src="<?= base_url('assets/images/' . $sekolah->logo); ?>" 
               class="img-circle" width="90"
               style="border:3px solid #fff; box-shadow:0 4px 10px rgba(0,0,0,0.25); transition:0.3s;">
        </a>
      </p>
      <h5 class="centered school-name" style="color:white; font-weight:600; margin:15px 0 30px; letter-spacing:1px;">
        <?= $sekolah->nmSekolah; ?>
      </h5>

      <!-- Dashboard -->
      <li class="mt">
        <a <?= ($sub == '') ? 'class="active"' : ''; ?> href="<?= base_url('admin'); ?>" class="menu-link">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Settings -->
      <li class="sub-menu">
        <a <?= ($sub == 'setsekolah' || $sub == 'ubahsekolah' || $sub == 'aturcalon' || $sub == 'pemilih' || $sub == 'user') ? 'class="active"' : ''; ?> href="javascript:;" class="menu-link">
          <i class="fa fa-cogs"></i>
          <span>Settings</span>
        </a>
        <ul class="sub">
          <li <?= ($sub == 'setsekolah' || $sub == 'ubahsekolah') ? 'class="active"' : ''; ?>>
            <a href="<?= base_url('admin/setsekolah'); ?>" class="submenu-link">Sekolah</a>
          </li>
          <li <?= ($sub == 'aturcalon') ? 'class="active"' : ''; ?>>
            <a href="<?= base_url('admin/aturcalon'); ?>" class="submenu-link">Kandidat</a>
          </li>
          <li <?= ($sub == 'pemilih') ? 'class="active"' : ''; ?>>
            <a href="<?= base_url('admin/pemilih'); ?>" class="submenu-link">Pemilih</a>
          </li>
          <li <?= ($sub == 'user') ? 'class="active"' : ''; ?>>
            <a href="<?= base_url('admin/user'); ?>" class="submenu-link">User</a>
          </li>
        </ul>
      </li>

      <!-- Suara -->
      <li class="sub-menu">
        <a <?= ($sub == 'sementara' || $sub == 'hasil') ? 'class="active"' : ''; ?> href="javascript:;" class="menu-link">
          <i class="fa fa-bar-chart-o"></i>
          <span>Suara</span>
        </a>
        <ul class="sub">
          <li <?= ($sub == 'sementara') ? 'class="active"' : ''; ?>>
            <a <?= (($sekolah->tglPilihan . ' ' . $sekolah->jamPilihan) < date('Y-m-d H:i:s') && ($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) > date('Y-m-d H:i:s')) ? 'href="' . base_url('admin/sementara') . '"' : 'href="javascript:void(0)"'; ?> class="submenu-link">
              Sementara
            </a>
          </li>
          <?php if (($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) < date('Y-m-d H:i:s')) : ?>
            <li <?= ($sub == 'hasil') ? 'class="active"' : ''; ?>>
              <a class="buathasil submenu-link" href="<?= base_url('admin/hasil'); ?>">Hasil Akhir</a>
            </li>
          <?php endif; ?>
        </ul>
      </li>

    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->

<!-- CSS -->
<style>
  /* Lebar sidebar default */
  #sidebar {
    width: 260px;   /* default lebar */
  }

  /* Lebar sidebar ketika collapsed */
  #sidebar.collapsed {
    width: 80px;
  }

  /* Hover expand */
  #sidebar.collapsed:hover {
    width: 260px;
  }

  /* Konten utama mengikuti lebar sidebar */
  #main-content {
    margin-left: 260px;
    transition: margin-left 0.4s ease;
  }
  #sidebar.collapsed ~ #main-content {
    margin-left: 80px;
  }
  #sidebar.collapsed:hover ~ #main-content {
    margin-left: 260px;
  }

  .menu-link {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 20px;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    margin: 5px 15px;
    transition: all 0.3s;
  }
  .menu-link:hover {
    background: rgba(255,255,255,0.15);
    transform: translateX(5px);
  }
  .menu-link.active {
    background: #0d6efd;
    font-weight: 600;
    box-shadow: inset 4px 0 #fff;
  }

  .submenu-link {
    display: block;
    padding: 8px 30px;
    font-size: 14px;
    color: #e0e0e0;
    text-decoration: none;
    transition: all 0.3s;
  }
  .submenu-link:hover {
    color: #fff;
    transform: translateX(5px);
  }
  .sub li.active > a {
    color: #fff !important;
    font-weight: 600;
  }

  /* Override bawaan template agar submenu sinkron */
  #sidebar ul.sub {
    background: transparent !important;
    box-shadow: none !important;
  }
  #sidebar ul.sub li a {
    background: none !important;
    color: #e0e0e0 !important;
  }
  #sidebar ul.sub li a:hover {
    background: rgba(255,255,255,0.15) !important;
    color: #fff !important;
  }
  #sidebar ul.sub li.active a {
    background: #0d6efd !important;
    color: #fff !important;
    font-weight: 600;
  }

  /* Saat collapsed, sembunyikan teks menu */
  #sidebar.collapsed .sidebar-menu span,
  #sidebar.collapsed .school-name {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
  }
  #sidebar.collapsed:hover .sidebar-menu span,
  #sidebar.collapsed:hover .school-name {
    opacity: 1;
    visibility: visible;
  }

  /* Animasi ikon */
  .menu-link.active i.fa-cogs { animation: spin 2s linear infinite; }
  .menu-link.active i.fa-bar-chart-o { animation: pulse 1.5s infinite; }
  .menu-link.active i.fa-dashboard { animation: bounce 1s infinite; }

  @keyframes spin { 0% { transform: rotate(0deg);} 100% { transform: rotate(360deg);} }
  @keyframes pulse { 0%,100% { transform: scale(1); opacity:1;} 50% { transform: scale(1.2); opacity:0.7;} }
  @keyframes bounce { 0%,100% { transform: translateY(0);} 50% { transform: translateY(-4px);} }
</style>

<!-- JS untuk toggle collapse -->
<script>
  document.addEventListener("DOMContentLoaded", function(){
    const toggleBtn = document.querySelector(".sidebar-toggle-box");
    const sidebar = document.getElementById("sidebar");

    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
    });
  });
</script>
