<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pemilihan Ketua OSIM</title>

  <!-- Favicons -->
  <link href="<?= base_url('assets/images/' . $sekolah->logo); ?>" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/template'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url('assets/template'); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/template'); ?>/css/style.css" rel="stylesheet">
  <!-- <link href="<?= base_url('assets/template'); ?>/css/style-responsive.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?= base_url(); ?>/assets/material-dashboard.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template'); ?>/lib/gritter/css/jquery.gritter.css" />
  <style>
    .header ul {
      margin-left: 80px;
      margin-top: 14px;
      right: 18px;
      position: absolute;
    }

    .header ul li {
      display: inline-block;
      margin-left: 5px;
      font-size: 20px;
    }

    .header ul li a {
      border: 1px solid #393b3f;
      padding: 2px 4px;
      border-radius: 8px;
      color: #62cdc4;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      transition: 0.2s;
    }

    .header ul li a:hover {
      background-color: #3d514d;
      color: #0ff9e6;
      font-size: 22px;
    }
  </style>

</head>

<body style="background-image: url('<?= base_url('assets/images/wheat.png'); ?>'); 
             background-size: cover; 
             background-position: center; 
             background-repeat: no-repeat; 
             background-attachment: fixed; 
             margin: 0; 
             min-height: 100vh;">




  <!--header start-->
  <header class="header" 
        style="background: linear-gradient(90deg, #6b4b29ff, rgba(252, 183, 55, 1)); 
               padding: 15px 30px; 
               color: white; 
               display: flex; 
               align-items: center; 
               justify-content: space-between; 
               box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
               border-bottom-left-radius: 12px; 
               border-bottom-right-radius: 12px;">

    <!--logo start-->
    <a href="<?= base_url(); ?>" class="logo"
      style="display: flex; 
              align-items: center; 
              gap: 10px; 
              font-size: 26px; 
              font-weight: 800; 
              letter-spacing: 2px; 
              text-decoration: none; 
              color: #6b4b29ff; 
              font-family: 'Poppins', sans-serif; 
              transition: all 0.3s ease;">

        <!-- Logo -->
        <img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" 
           style="height: 1.5em;   /* Logo besar, bebas atur px */
                  width: auto; 
                  object-fit: contain;
                  display: inline-block;
                  vertical-align: middle;">


        <!-- Tulisan -->
        <b><span style="background: linear-gradient(90deg, #ffffffff, #b9b9b9ff); 
                        -webkit-background-clip: text; 
                        -webkit-text-fill-color: transparent;">
            PEMIRA
        </span></b>
    </a>

        <!--logo end-->
       <ul style="list-style: none; 
                  margin: 0; 
                  padding: 0; 
                  display: flex; 
                  gap: 25px; 
                  font-family: 'Poppins', sans-serif; 
                  font-size: 16px; 
                  font-weight: 500;">

            <li>
                <a href="<?= base_url('welcome/visimisi'); ?>" class="nav-link-custom">
                    Visi Misi
                </a>
            </li>
            
            <li>
                <a href="javascript:void(0)" data-target="#modal-petunjuk" data-toggle="modal" class="nav-link-custom">
                    Cara Memilih
                </a>
            </li>

        </ul>

        <style>
            .nav-link-custom {
                text-decoration: none;
                background: white;
                color: #6b4b29ff;
                padding: 10px 20px;
                border-radius: 8px;
                border: 2px solid #ffffffff;
                font-weight: 600;
                transition: all 0.3s ease;
                display: 100%;                /* biar fleksibel */
                align-items: center;           /* rata tengah vertikal */
                justify-content: center;       /* rata tengah horizontal */
                min-width: 120px;              /* biar ga mengecil */
                text-align: center;
            }

            .nav-link-custom:hover {
                background: #0d6efd;  /* biru */
                color: white !important; /* teks putih */
                box-shadow: 0 4px 10px rgba(0,0,0,0.15);
                transform: scale(1.03); /* efek interaktif */
            }
        </style>


  </header>
  <!--header end-->

  <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
  <!--main content start-->
  <br>
  <section class="container">
    <!-- Judul -->
        <h2 class="judul-section">
            DAFTAR CALON KETUA OSIM <br> dan WAKIL KETUA OSIM
        </h2>
        <h2 class="sub-judul">
            <?= $sekolah->nmSekolah; ?><br>
            <span>Tahun Pelajaran 2025 - 2026</span>
        </h2>

        <style>
            /* Styling untuk judul utama */
            .judul-section {
                color: #ffffff;
                font-weight: 800;
                font-size: 36px;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 3px;
                margin-top: 80px;
                margin-bottom: 10px;
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(90deg, #ffffffff, #dadadaff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: fadeInDown 1s ease-out;
            }

            /* Styling untuk subjudul */
            .sub-judul {
                color: #ffffff;
                font-weight: 700;
                font-size: 28px;
                text-align: center;
                letter-spacing: 1px;
                font-family: 'Poppins', sans-serif;
                margin-bottom: 10px;
                animation: fadeInUp 1.2s ease-out;
            }

            .sub-judul span {
                font-size: 22px;
                font-weight: 500;
                color: #ffffffff;
                display: block;
                margin-top: 5px;
            }

            /* Animasi */
            @keyframes fadeInDown {
                from { opacity: 0; transform: translateY(-30px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>
    <div class="text-center">
        <img src="assets/images/osim.png" alt="" width="200">    
    </div>

    <div class="row mt">
      <div class="col-lg-12">
        <!--  FIFTH ROW OF PANELS -->
        <div class="row">
          <?php foreach ($calon as $c) : ?>

            <div class="col-md-4 col-sm-6">
              <div class="card card-product mx-auto" style="height: 300px; width: 100%; max-width: 280px;">
                <div class="card-header card-header-image" data-header-animation="true">
                  <a href="#">
                    <div style="display: flex; justify-content: center; align-items: center;">
                      <img class="img" 
                          src="<?= base_url('assets/images/calon/' . $c->photo); ?>" 
                          style="width: 68%; 
                                  height: auto; 
                                  object-fit: contain;">
                    </div>
                  </a>
                </div>
                <div class="card-body" style="margin-top: 10px">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Pilih Calon">
                      <a <?= (($sekolah->tglPilihan . ' ' . $sekolah->jamPilihan) < date('Y-m-d H:i:s') && ($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) > date('Y-m-d H:i:s')) ? 'data-target="#modal-pilih' . $c->xid . '"' : 'data-target="#modal"'; ?> data-target="#modal-pilih<?= $c->xid; ?>" data-toggle="modal">
                        <div class="card-header-primary card-header-icon">
                          <div class="card-icon">
                            Pilih
                    </button>

                  </div>
                  <h4 class="card-title">
                    <a><b><?= $c->nama; ?></b></a>
                  </h4>
                  <div class="card-description">
                    <h2><?= $c->nomorUrut; ?></h2>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="modal-pilih<?= $c->xid; ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Masukkan Kode Pilihan</h2>
                  </div>
                  <?= form_open(); ?>
                  <input type="hidden" name="pil" value="<?= $c->nomorUrut; ?>" style="display: none;">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for=""> Kode Pilih</label>
                      <input type="number" autocomplete="off" name="kode" class="form-control" placeholder="Masukkan kode pilih" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Pilihan</button>
                  </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          <?php endforeach; ?>

        </div>
        <!-- /row FIFTH ROW OF PANELS -->
        <!--  SIXTH ROW OF PANELS -->

      </div>
    </div>
  </section>

  <div class="modal fade" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Informasi !</h2>
        </div>

        <?php if (($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) < date('Y-m-d H:i:s')) : ?>
          <div class="modal-body">
            <h2>Kegiatan pemilihan ketua osim sudah selesai.</h2>
          </div>
        <?php else : ?>
          <div class="modal-body">
            <h3>Silakan gunakan hak suara pada jadwal berikut :</h3>
            <table class="table">
              <tbody>
                <tr>
                  <th>Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                </tr>
                <tr>
                  <th>Waktu Mulai</th>
                  <td><?= tgl($sekolah->tglPilihan); ?></td>
                  <td><?= $sekolah->jamPilihan; ?></td>
                </tr>
                <tr>
                  <th>Waktu Selesai</th>
                  <td><?= tgl($sekolah->tglPilihans); ?></td>
                  <td><?= $sekolah->jamPilihans; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        <?php endif; ?>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="modal-petunjuk">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Informasi !</h2>
        </div>

        <div class="modal-body">
          <h3>Silakan gunakan hak suara anda dengan cara berikut :</h3>
          <h3>
            <ol type="1">
              <li>
                Arahkan pointer mouse ke foto pasangan calon pilihan anda.
              </li>
              <li>
                Klik tombol pilih dibawah foto pasangan calon.
              </li>
              <li>
                Masukkan KODE pilih sesuai yang tertera di kartu pemilih.
              </li>
              <li>
                Klik tombol simpan pilihan.
              </li>
              <li>
                Pastikan muncul pesan bahwa proses pemilihan sudah berhasil dilakukan pada pojok kanan bawah.
              </li>
            </ol>
          </h3>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <script src="<?= base_url('assets/template'); ?>/lib/jquery/jquery.min.js"></script>

  <script src="<?= base_url('assets/template'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/jquery.dcjqaccordion.2.7.js"></script>

  <script src="<?= base_url('assets/template'); ?>/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter-conf.js"></script>




  <?php if ($this->session->flashdata('pesan')) : ?>
    <script type="text/javascript">
      $(document).ready(function() {
        var unique_id = $.gritter.add({
          // (string | mandatory) the heading of the notification
          title: 'Informasi!',
          // (string | mandatory) the text inside the notification
          text: '<?= $this->session->flashdata('pesan'); ?>',
          // (string | optional) the image to display on the left
          image: false,
          // (bool | optional) if you want it to fade out on its own or just sit there
          sticky: false,
          // (int | optional) the time you want it to be alive for before fading out
          time: 20000,
          // (string | optional) the class name you want to apply to that specific message
          class_name: 'my-sticky-class'
        });

        return false;
      });
    </script>
  <?php endif; ?>
</body>

</html>