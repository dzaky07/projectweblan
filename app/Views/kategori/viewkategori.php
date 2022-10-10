<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Kategori
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

Ini adalah Data Kategori
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
Ini adalah isi Kategori


<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"
]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>


 
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"


<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"

<?= form_button('','Tambah Data',[
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('". site_url('kategori/formtambah') ."')"
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



                    <button type="button" class="btn btn-danger" title="Hapus Data" onclick="hapus('<?= $row['katid'] ?>')">

                    <button type="button" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                    </button>

                </td>
            </tr>



        <?php endforeach; ?>
    </tbody>
</table>
<script>
    function edit(id){

        window.location = ('/kategori/formedit/' + id);
    }
</script>
      
<script>
    function hapus(){
       pesan = confirm('yakin data kategori di hapus?');
       if (pesan) {
            return true;

         
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


<?= $this->endSection('isi') ?>

<tr>
    <td><?= $nomor++; ?></td>
    <td><?= $row['katnama']; ?></td>
    <td>

    </td>
</tr>


        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function edit(id){
        window.location = ('/kategori/formedit/' + id);
    }
</script>
<?= $this->endSection('isi') ?>

