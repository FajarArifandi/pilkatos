<header class="header"
    style="background: linear-gradient(90deg, #6b4b29ff, rgba(252, 183, 55, 1)); 
           height: 70px;              /* 👉 atur tinggi bar */
           padding: 0 30px;           /* kiri-kanan, biar tinggi pakai height saja */
           color: white; 
           display: flex; 
           align-items: center;       /* biar konten tetap vertikal di tengah */
           justify-content: space-between; 
           box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
           border-bottom-left-radius: 10px; 
           border-bottom-right-radius: 10px;">
  
  <!-- KIRI: toggle + logo -->
  <div style="display: flex; align-items: center; gap: 20px;">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>

    <!--logo start-->
    <a href="<?= base_url(); ?>" class="logo"
      style="display: flex; 
             align-items: center; 
             gap: 10px; 
             font-size: 26px; 
             font-weight: 800; 
             letter-spacing: 1px; 
             text-decoration: none; 
             color: #0d6efd; 
             font-family: 'Poppins', sans-serif; 
             transition: all 0.3s ease;">

        <!-- Logo -->
        <img src="<?= base_url('assets/images/logo .png'); ?>" alt="Logo" 
           style="height: 40px;   /* 👉 tinggi logo bisa atur sendiri */ 
                  width: auto; 
                  object-fit: contain;">

        <!-- Tulisan -->
        <b><span style="background: linear-gradient(90deg, #ffffffff, #b9b9b9ff); 
                        -webkit-background-clip: text; 
                        -webkit-text-fill-color: transparent;">
            PEMIRA
        </span></b>
    </a>
  </div>

  <!-- KANAN: menu -->
  <div class="top-menu">
    <ul class="nav pull-right top-menu" style="margin:0; padding:0;">
      <li><a class="logout" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
    </ul>
  </div>
</header>
