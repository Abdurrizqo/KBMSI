<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assetOprec/assetOprec8/styleformulir.css?v=5'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

    <title>formulir</title>
  </head>
  <body>

    <img id="aa" src="<?= base_url('assetOprec/assetOprec8/bg.jpg'); ?>" alt="">


<div class="container">
  <div class="kata">
    <h6 class="mt-4">Welcome</h6>
    <h4><?= $nama;  ?></h4>
    <div class="text-left download mt-4 ml-5">
      <span>Form Pendafaran</span> <a href="<?= base_url('form/FORM PENDAFTARAN LEMBAGA KBMSI.docx'); ?>" class="btn btn-secondary">download</a>
    </div>

    <!-- -------------- -->

    <div class="isi-form my-3 text-left">
      <form action=" <?= base_url('OprecstaffGen8/isi_form'); ?> " method="post">

        <div class="form-group">
          <label class="control-label">Nama Lengkap</label>
          <input type="text" class="form-control" value="<?= $nama;  ?>" disabled>
        </div>

        <div class="row">

        <div class="form-group col-md-6 col-sm-12">
          <label class="control-label">NIM</label>
          <input type="text" class="form-control" value="<?= $nim;  ?>" disabled>
        </div>

        <div class="form-group col-md-6 col-sm-12">
          <label class="control-label">No Handphone</label>
          <input type="text" class="form-control" name="noHp" value="<?= set_value('noHp'); ?>" required>
        </div>

      </div>

      <div class="row">
        <div class="form-group col-md-6 col-sm-12">
          <label class="control-label">ID LINE</label>
          <input type="text" class="form-control" name="idLine" value="<?= set_value('idLine'); ?>" required>
        </div>

        <div class="form-group col-md-6 col-sm-12">
          <label class="control-label">EMAIL</label>
          <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" required>
        </div>
        </div>


      <h4>Pilihan jadwal screening</h4>
      <?= $this->session->flashdata('messagescreening'); ?>
      <div class="row">
      <div class="form-group col-md-6 col-sm-12">
      <label class="control-label">Opsi Jadwal 1</label>
      <select class="form-control" name="waktu1" required>
        <option value="">--tgl 23-03-2021--</option>
        <option value="23, 15.00 - 16.00">Jam 15.00 - 16.00 WIB</option>
        <option value="23, 16.00 - 17.00">Jam 16.00 - 17.00 WIB</option>
        <option value="23, 17.00 - 18.00">Jam 17.00 - 18.00 WIB</option>
        <option value="23, 18.00 - 19.00">Jam 19.00 - 20.00 WIB</option>
        <option value="23, 20.00 - 21.00">Jam 20.00 - 21.00 WIB</option>
        <option value="">--tgl 24-03-2021--</option>
        <option value="24, 15.00 - 16.00">Jam 15.00 - 16.00 WIB</option>
        <option value="24, 16.00 - 17.00">Jam 16.00 - 17.00 WIB</option>
        <option value="24, 17.00 - 18.00">Jam 17.00 - 18.00 WIB</option>
        <option value="24, 18.00 - 19.00">Jam 19.00 - 20.00 WIB</option>
        <option value="24, 20.00 - 21.00">Jam 20.00 - 21.00 WIB</option>
      </select>
      </div>


      <div class="form-group col-md-6 col-sm-12">
      <label class="control-label">Opsi Jadwal 2</label>
      <select class="form-control" name="waktu2" required>
        <option value="">--tgl 23-03-2021--</option>
        <option value="23, 15.00 - 16.00">Jam 15.00 - 16.00 WIB</option>
        <option value="23, 16.00 - 17.00">Jam 16.00 - 17.00 WIB</option>
        <option value="23, 17.00 - 18.00">Jam 17.00 - 18.00 WIB</option>
        <option value="23, 18.00 - 19.00">Jam 19.00 - 20.00 WIB</option>
        <option value="23, 20.00 - 21.00">Jam 20.00 - 21.00 WIB</option>
        <option value="">--tgl 24-03-2021--</option>
        <option value="24, 15.00 - 16.00">Jam 15.00 - 16.00 WIB</option>
        <option value="24, 16.00 - 17.00">Jam 16.00 - 17.00 WIB</option>
        <option value="24, 17.00 - 18.00">Jam 17.00 - 18.00 WIB</option>
        <option value="24, 18.00 - 19.00">Jam 19.00 - 20.00 WIB</option>
        <option value="24, 20.00 - 21.00">Jam 20.00 - 21.00 WIB</option>
      </select>
      </div>
    </div>


      <h4>Pilihan Departemen</h4>
      <div class="row">
      <div class="form-group col-md-6 col-sm-12">
      <label class="control-label">Pilihan Departemen 1 (wajib)</label>
      <select class="form-control" name="pildep1" required>
        <option value="" disabled selected hidden></option>
        <option value="emsi_p2s">Penelitian dan pengembangan studi</option>
        <option value="emsi_psdm">Pengebangan sumber daya manusia</option>
        <option value="emsi_sosma">Sosial masyarakat</option>
        <option value="emsi_kwu">Kewirausahaan</option>
        <option value="emsi_medkom">Media komunikasi & informasi</option>
        <option value="emsi_advo">Advokasi</option>
      </select>
      </div>
      <div class="form-group col-md-6 col-sm-12">
      <label class="control-label">Pilihan Komisi1 (Wajib)</label>
      <select class="form-control" name="pilkom1" required>
        <option value="" disabled selected hidden></option>
        <option value="BPM_kominfo">Komisi Kominfo</option>
        <option value="BPM_HUU">Komisi Hukum</option>
      </select>
      </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6 col-sm-12">
      <label class="">Pilihan Departemen 2</label>
      <select class="form-control" name="pildep2">
        <option value="" disabled selected hidden></option>
        <option value="emsi_p2s">Penelitian dan pengembangan studi</option>
        <option value="emsi_psdm">Pengebangan sumber daya manusia</option>
        <option value="emsi_sosma">Sosial masyarakat</option>
        <option value="emsi_kwu">Kewirausahaan</option>
        <option value="emsi_medkom">Media komunikasi & informasi</option>
        <option value="emsi_advo">Advokasi</option>
      </select>
      </div>
      <div class="form-group col-md-6 col-sm-12">
      <label class="">Pilihan Komisi 2</label>
      <select class="form-control" name="pilkom2">
        <option value="" disabled selected hidden></option>
        <option value="BPM_kominfo">Komisi Kominfo</option>
        <option value="BPM_HUU">Komisi Hukum</option>
      </select>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label">Link google drive</label>
        <input type="text" class="form-control" name="link" value="<?= set_value('link'); ?>" required>
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    </div>
    </div>

  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
