<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Ini Adalah Judul Barang
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-primary" onclick="location.href=('/barang/tambah')">
    <i class="fa fa-plus-circle"></i> Tambah Barang
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<<<<<<< HEAD
<?= session()->getFlashdata('error'); ?>
<?= session()->getFlashdata('sukses'); ?>
=======



<?= session()->getFlashdata('error'); ?>
<?= session()->getFlashdata('sukses'); ?>

>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
<?= form_open('barang/index') ?>
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Cari data berdasarkan Kode, Nama Barang & Kategori" name="cari" autofocus value="<?= $cari?>">

<?= form_open('barang/index') ?>
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Cari data berdasarkan Kode, Nama Barang & Kategori" name="cari" autofocus value="<?= $cari?>">


    <input type="text" class="form-control" placeholder="Cari data berdasarkan Kode, Nama Barang & Kategori" name="cari" autofocus>



    <div class="input-group-append">
        <button class="btn btn-outline-success" type="submit" name="tombolcari">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>
<?= form_close(); ?>





<span class="badge badge-success">
    <h5>
        <?= "Total Data : $totaldata"; ?>
    </h5>
</span>
<br>
<<<<<<< HEAD
=======


<?= session()->getFlashdata('error'); ?>
<?= session()->getFlashdata('sukses'); ?>




>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
<table class="table table-striped table-bordered" style="width:100%;">
    <thead>
        <tr>
            <th style="width: 5;">No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th style="width: 15%;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $nomor = 1 + (($nohalaman - 1) * 10);
        foreach ($tampildata as $row) :

        $nomor = 1 + (($nohalaman - 1) * 10);
        foreach ($tampildata as $row) :


        $nomor = 1 + (($nohalaman - 1) * 10);
        foreach ($tampildata as $row) :

        $nomor = 1;
        foreach ($tampildata as $row) :
        foreach ($tampildata->getResultArray() as $row) :

        ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['brgkode']; ?></td>
                <td><?= $row['brgnama']; ?></td>
                <td><?= $row['katnama']; ?></td>
                <td><?= number_format($row['brgharga'], 0); ?></td>
                <td><?= number_format($row['brgstok'], 0); ?></td>

                <td>

                    <button type="button" class="btn btn-sm btn-info" onclick="edit('<?= $row['brgkode'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>

                    <form method="POST" action="/barang/hapus/<?= $row['brgkode'] ?>" style="display:inline;" onsubmit="return hapus();">
                        <input type="hidden" value="DELETE" name="_method">

                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus Data">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>

<<<<<<< HEAD
=======
                <td><?= number_format($row['brgharga'],0); ?></td>
                <td><?= number_format($row['brgstok'],0); ?></td>

                <td>

                    <button type="button" class="btn btn-sm btn-info" onclick="edit('<?= $row['brgkode'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>

                    <form method="POST" action="/barang/hapus/<?= $row['brgkode'] ?>" style="display:inline;" onsubmit="return hapus();">
                        <input type="hidden" value="DELETE" name="_method">

                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus Data">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>

>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<<<<<<< HEAD
<div class="float-left mt-4">
    <?= $pager->links('barang','paging') ?>
</div>
=======

<div class="float-left mt-4">
    <?= $pager->links('barang','paging') ?>
</div>



<div class="float-left mt-4">
    <?= $pager->links('barang','paging') ?>
</div>

>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
<script>
    function edit(kode) {
        window.location.href = ('/barang/edit/' + kode);
    }

    function hapus(kode) {
        pesan = confirm('Yakin data barang ini dihapus ?');
        if (pesan) {

            return true;
        } else {

            return true;
        } else {

        if(pesan){
            return true;
        }else{


            return false;
        }
    }
</script>
<<<<<<< HEAD
<?= $this->endSection('isi') ?>
=======

<?= $this->endSection('isi') ?>

<?= $this->endSection('isi') ?>



>>>>>>> ab1a9029e4c436139049007ae48dfbc6eae64c70
