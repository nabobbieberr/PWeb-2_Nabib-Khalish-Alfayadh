<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<H1>Form Pasien</H1>
<form method="POST" action="proses_pasien.php">
  <input type="hidden" name="proses" value="<?= $tombol ?>">
    <input type="hidden" name="idx">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" placeholder="PAXXX" name="kode" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" required class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" required class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="text" required class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="L" type="radio" class="custom-control-input" value="laki"> 
        <label for="L" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="P" type="radio" class="custom-control-input" value="perem"> 
        <label for="P" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
      <input id="kelurahan" name="kelurahan" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

