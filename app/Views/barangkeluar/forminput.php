<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Input Transaksi Barang Keluar
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/barangkeluar/data')">
    <i class="fa fa-backward"></i> Kembali
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">No.Faktur</label>
            <input type="text" name="nofaktur" id="nofaktur" value="<?= $nofaktur ?>" class="form-control" readonly>
            <input type="text" name="nofaktur" id="nofaktur" class="form-control" readonly>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Tgl.Faktur</label>
            <input type="date" name="tglfaktur" id="tglfaktur" class="form-control" value="<?= date('Y-m-d') ?>">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Cari Pelanggan</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Pelanggan" name="namapelanggan" id="namapelanggan" readonly>
                <input type="text" name="idpelanggan" id="idpelanggan">
                <input type="hidden" name="idpelanggan" id="idpelanggan">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="tombolCariPelanggan" title="Cari Pelanggan">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="btn btn-outline-success" type="button" id="tombolTambahPelanggan" title="Tambah Pelanggan">
                        <i class="fa fa-plus-square"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label for="">Kode Barang</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="kodebarang" id="kodebarang">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="tombolCariBarang">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="namabarang" id="namabarang" class="form-control" readonly>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="">Harga Jual (Rp)</label>
            <input type="text" name="hargajual" id="hargajual" class="form-control" readonly>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="">Qty</label>
            <input type="number" name="jml" id="jml" class="form-control" value="1">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="">#</label>
            <div class="input-group mb-3">
                <button type="button" class="btn btn-success" title="Simpan Item" id="tombolSimpanItem">
                    <i class="fa fa-save"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="viewmodal" style="display: none;"></div>
<script>
    function buatNofaktur() {
        let tanggal = $('#tglfaktur').val()

        $.ajax({
            type: "post",
            url: "/barangkeluar/buatNoFaktur",
            data: {
                tanggal: tanggal
            },
            dataType: "json",
            success: function(response) {
                $('#nofaktur').val(response.nofaktur);

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });
    }
    $(document).ready(function() {
        $('#tglfaktur').change(function(e) {
            buatNofaktur();
        });

        $('#tombolTambahPelanggan').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "/pelanggan/formtambah",
                dataType: "json",
                success: function(response) {
                    if(response.data){
                        $('.viewmodal').html(response.data).show();
                        $('#modaltambahpelanggan').modal('show');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + '\n' + thrownError);
                }
            });
        });
    });
</script>
<?= $this->endSection('isi') ?>