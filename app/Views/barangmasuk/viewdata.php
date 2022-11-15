<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Data Transaksi Barang Masuk
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-primary" onclick="location.href=('/barangmasuk/index')">
    <i class="fa fa-plus-circle"></i> Input Transaksi
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= form_open('barangmasuk/data') ?>
<?= "<span class=\"badge badge-success\">Total Data : $totaldata</span>"?>
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Cari Berdasarkan Faktur..." name="cari" value="<?= $cari?>" autofocus="true">
    <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" name="tombolcari">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>
<?= form_close(); ?>
<table class="table table-sm table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Faktur</th>
            <th>Tanggal</th>
            <th>Jumlah Item</th>
            <th>Total Harga (Rp)</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1 + (($nohalaman - 1) * 10);
        foreach ($tampildata as $row) :
        ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $row['faktur']; ?></td>
                <td><?= date('d-m-Y', strtotime($row['tglfaktur'])); ?></td>
                <td align="center">
                    <?php
                        $db = \Config\Database::connect();
                        $jumlahItem = $db->table('detail_barangmasuk')->where('detfaktur',$row['faktur'])->countAllResults();
                    ?>
                    <span style="cursor:pointer; font-weight: bold; color: blue;" 
                        onclick="detailItem('<?= $row['faktur'] ?>')"><?= $jumlahItem; ?></span>
                </td>
                <td>
                    <?= number_format($row['totalharga'], 0, ",", ".") ?>
                </td>
                <td>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="viewmodal" style="display: none;"></div>
<div class="float-left mt-4">
    <?= $pager->links('barangmasuk', 'paging') ?>
</div>
<script>
    function detailItem(faktur){
        alert(faktur);
        $.ajax({
            type: "post",
            url: "/barangmasuk/detailItem",
            data:{
                faktur : faktur
            },
            dataType: "json",
            success: function(response){
                if(response.data){
                    $('.viewmodal').html(response.data).show();
                    $('#modalitem').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }            
        });
    }
</script>
<?= $this->endSection('isi') ?>