<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<H1>Form Paramedik</H1>
<form method="POST" action="proses_paramedik.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-500px"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="PARAXXX" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Paramedik</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="L" type="radio" required="required" class="custom-control-input" value="laki"> 
        <label for="L" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="P" type="radio" required="required" class="custom-control-input" value="perem"> 
        <label for="P" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" placeholder="YYYY_DD_MM" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <input id="kategori" name="kategori" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tlpon" class="col-4 col-form-label">Telephone</label> 
    <div class="col-8">
      <input id="tlpon" name="tlpon" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control"></textarea>
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label> 
    <div class="col-8">
      <input id="unit_kerja_id" name="unit_kerja_id" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
