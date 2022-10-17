<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Kategori
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<<<<<<< Updated upstream
<?= form_button('','Tambah Data',[
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('". site_url('kategori/formtambah') ."')"
=======
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"
>>>>>>> Stashed changes
]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<?= session()->getFlashdata('sukses'); ?>
<?= form_open('kategori/index') ?>
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Cari Kategori" aria-label="Recipient's username" aria-describedby="button-addonn2" name="cari" value=<?= $cari ?> >
    <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" id="tombolcari" name="tombolcari">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>
<?= form_close(); ?>
<table class="table table-striped table-bordered" style="width:100%;">
    <thead>
        <tr>
            <th style="width: 15%;">No</th>
            <th>Nama Kategori</th>
            <th style="width: 15%;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $nomor = 1 + (($nohalaman - 1) * 5);
        foreach ($tampildata as $row) :
        ?>
<<<<<<< Updated upstream
<tr>
    <td><?= $nomor++; ?></td>
    <td><?= $row['katnama']; ?></td>
    <td>

    </td>
</tr>
=======
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['katnama']; ?></td>
                <td>
                    <button type="button" class="btn btn-info" title="Edit Data" onclick="edit('<?= $row['katid'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>

                    <form method="POST" action="/kategori/hapus/<?= $row['katid'] ?>" style="display:inline;" onsubmit="hapus();">
                        <input type="hidden" value="DELETE" name="_method">

                        <button type="submit" class="btn btn-danger" title="Hapus Data">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>

                </td>
            </tr>
>>>>>>> Stashed changes

        <?php endforeach; ?>
    </tbody>
</table>

<<<<<<< Updated upstream
=======
<div class="float-center">
    <?= $pager->links('kategori', 'paging'); ?>
</div>

<script>
    function edit(id) {
        window.location = ('/kategori/formedit/' + id);
    }
</script>

<script>
    function hapus() {
        pesan = confirm('yakin data kategori di hapus?');
        if (pesan) {
            return true;
        } else {
            return false;
        }
    }
</script>
>>>>>>> Stashed changes


<?= $this->endSection('isi') ?>