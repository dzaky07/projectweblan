<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Form Edit Barang
<<<<<<< HEAD
=======



>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/barang/index')">
  <i class="fa fa-backward"></i> Kembali
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<<<<<<< HEAD
=======
<?= form_open_multipart('barang/updatedata') ?>



>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
<?= form_open_multipart('barang/updatedata') ?>
<?= session()->getFlashdata('error'); ?>
<?= session()->getFlashdata('sukses'); ?>
<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Kode Barang</label>
  <div class="col-sm-8">
<<<<<<< HEAD
=======
    <input type="Text" class="form-control" id="kodebarang" name="kodebarang" readonly value="<?= $kodebarang; ?>">



>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
    <input type="Text" class="form-control" id="kodebarang" name="kodebarang" readonly value="<?= $kodebarang; ?>">
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Nama Barang</label>
  <div class="col-sm-8">
<<<<<<< HEAD
    <input type="Text" class="form-control" id="namabarang" name="namabarang" value="<?= $namabarang; ?>">
=======
    <input type="Text" class="form-control" id="namabarang" name="namabarang" value="<?= $namabarang; ?>">


    <input type="Text" class="form-control" id="namabarang" name="namabarang" value="<?= $namabarang; ?>">

    <input type="Text" class="form-control" id="namabarang" name="namabarang">


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Pilih Kategori</label>
  <div class="col-sm-4">
    <select name="kategori" id="kategori" class="form-control">
        <?php foreach ($datakategori as $kat) : ?>

        <?php if ($kat['katid'] == $kategori) : ?>

        <option selected value="<?= $kat['katid'] ?>"><?= $kat['katnama'] ?></option>

        <?php else : ?>
                  

        <option value="<?= $kat['katid'] ?>"><?= $kat['katnama'] ?></option>
        
        <?php endif; ?>
        <?php endforeach; ?>
<<<<<<< HEAD
=======

        <option value="<?= $kat['katid'] ?>"><?= $kat['katnama'] ?></option>
        
        <?php endif; ?>
        <?php endforeach; ?>
      
      <option selected value="">=Pilih=</option>
      <?php foreach ($datakategori as $kat) : ?>
        <option value="<?= $kat['katid'] ?>"><?= $kat['katnama'] ?></option>
      <?php endforeach; ?>


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Harga</label>
  <div class="col-sm-4">
<<<<<<< HEAD
    <input type="number" class="form-control" id="harga" name="harga" value="<?= $harga; ?>">
=======
    <input type="number" class="form-control" id="harga" name="harga" value="<?= $harga; ?>">



    <input type="number" class="form-control" id="harga" name="harga" value="<?= $harga; ?>">

    <input type="number" class="form-control" id="harga" name="harga">


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Stok</label>
  <div class="col-sm-4">
<<<<<<< HEAD
=======




>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
    <input type="number" class="form-control" id="stok" name="stok" value="<?= $stok; ?>">
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label">Gambar Yang Sudah Ada</label>
  <div class="col-sm-4">
    <img src="<?= base_url().'/'.$gambar ?>" class="img-thumbnail" style="width: 50%;" alt="Gambar Barang">
<<<<<<< HEAD
=======

    <input type="number" class="form-control" id="stok" name="stok">


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
  </div>
</div>

<div class="form-group row">
<<<<<<< HEAD
  <label for="" class="col-sm-4 col-form-label">Upload Gambar (<i>Jika diganti..</i>)</label>
=======
  <label for="" class="col-sm-4 col-form-label">Upload Gambar (<i>Jika diganti..</i>)</label>


  <label for="" class="col-sm-4 col-form-label">Upload Gambar (<i>Jika diganti..</i>)</label>

  <label for="" class="col-sm-4 col-form-label">Upload Gambar (<i>Optional</i>)</label>


>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
  <div class="col-sm-4">
    <input type="file" id="gambar" name="gambar">
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-sm-4 col-form-label"></label>
  <div class="col-sm-4">
    <input input type="Submit" value="Simpan" class = "btn btn-success">
  </div>
</div>
<?= form_close(); ?>
<?= $this->endSection('isi'); ?>