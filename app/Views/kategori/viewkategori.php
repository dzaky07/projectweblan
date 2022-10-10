<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Kategori
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

 
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"


<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"

<?= form_button('','Tambah Data',[
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('". site_url('kategori/formtambah') ."')"
main
main
]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<?= session()->getFlashdata('sukses'); ?>
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
        $nomor = 1;
        foreach ($tampildata as $row) :
        ?>



 main
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['katnama']; ?></td>
                <td>
                    <button type="button" class="btn btn-info" title="Edit Data" onclick="edit('<?= $row['katid'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>


                    <button type="button" class="btn btn-danger" title="Hapus Data" onclick="hapus('<?= $row['katid'] ?>')">

                    <button type="button" class="btn btn-danger" title="Hapus Data">
 main
                        <i class="fa fa-trash-alt"></i>
                    </button>

                </td>
            </tr>


        <?php endforeach; ?>
    </tbody>
</table>
<script>
    function edit(id){
         
    }

    function hapus(id){
       pesan = confirm('yakin data kategori di hapus?');
       if(pesan){
        window.location = ('/kategori/hapus/' + id);

       }else{
        return false;
       }
    }
</script>

<tr>
    <td><?= $nomor++; ?></td>
    <td><?= $row['katnama']; ?></td>
    <td>

    </td>
</tr>
main

        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function edit(id){
        window.location = ('/kategori/formedit/' + id);
    }
</script>
main
main


<?= $this->endSection('isi') ?>