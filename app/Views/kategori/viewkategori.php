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
                        <button type="submit" class="btn btn-danger" title="Hapus Data">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </form>

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
<div class="float-center">
    <?= $pager->links('kategori', 'paging'); ?>
</div>

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
    function edit(id) {
        window.location = ('/kategori/formedit/' + id);
    }
</script>

<script>
    function hapus() {
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
        } else {
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

<?= $this->endSection('isi') ?>


