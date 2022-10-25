<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Kategori
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>


<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"

Ini adalah Data Kategori
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
Ini adalah isi Kategori


<<<<<<< Updated upstream
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"
]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>


 
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"


=======
>>>>>>> Stashed changes
<?= form_button('', 'Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formtambah') . "')"

<?= form_button('','Tambah Data',[
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('". site_url('kategori/formtambah') ."')"

]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>


<<<<<<< Updated upstream
=======
 
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


>>>>>>> Stashed changes
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
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['katnama']; ?></td>
                <td>
                    <button type="button" class="btn btn-info" title="Edit Data" onclick="edit('<?= $row['katid'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>

                    <form method="POST" action="/kategori/hapus/<?= $row['katid'] ?>" style="display:inline;" onsubmit="hapus();">
                        <input type="hidden" value="DELETE" name="_method">


<<<<<<< Updated upstream
=======
<<<<<<< HEAD
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


=======
>>>>>>> abcabe36fcc18496ecb6dba746cc93bda96164a6
                        <button type="submit" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>
       
                </td>
            </tr>



<<<<<<< HEAD
=======
                    <button type="button" class="btn btn-danger" title="Hapus Data" onclick="hapus('<?= $row['katid'] ?>')">

                    <button type="button" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                    </button>


>>>>>>> Stashed changes
                        <button type="submit" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>
       
                </td>
            </tr>



<<<<<<< Updated upstream
                    <button type="button" class="btn btn-danger" title="Hapus Data" onclick="hapus('<?= $row['katid'] ?>')">

                    <button type="button" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                    </button>


                        <button type="submit" class="btn btn-danger" title="Hapus Data">
                        <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>
       
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



=======
>>>>>>> Stashed changes
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



>>>>>>> abcabe36fcc18496ecb6dba746cc93bda96164a6
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

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<tr>
    <td><?= $nomor++; ?></td>
    <td><?= $row['katnama']; ?></td>
    <td>

    </td>
</tr>



        <?php endforeach; ?>
    </tbody>
</table>

<div class="float-center">
    <?= $pager->links('kategori', 'paging'); ?>
</div>

<script>
    function edit(id) {
        window.location = ('/kategori/formedit/' + id);
    }
</script>

<<<<<<< HEAD
=======
      
>>>>>>> abcabe36fcc18496ecb6dba746cc93bda96164a6
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


<?= $this->endSection('isi') ?>

=======
>>>>>>> abcabe36fcc18496ecb6dba746cc93bda96164a6
>>>>>>> Stashed changes

