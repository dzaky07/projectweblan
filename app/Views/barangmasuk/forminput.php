<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Input Barang Masuk
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/barangmasuk/data')">
  <i class="fa fa-backward"></i> Kembali
</button>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="">Input Faktur Barang Masuk</label>
    <input type="text" class="form-control" placeholder="No.Faktur" name="faktur" id="faktur">
  </div>
  <div class="form-group col-md-6">
    <label for="">Tanggal Faktur</label>
    <input type="date" class="form-control" name="tglfaktur" id="tglfaktur" value="<?= date('Y-m-d') ?>">
  </div>
</div>

<div class="card">
    <div class="form-group col-md-6">
        <label for="">Input Faktur Barang Masuk</label>
      <input type="text" class="form-control" placeholder="No.Faktur" name="faktur" id="faktur">
    </div>
    <div class="form-group col-md-6">



    <label for="">Tanggal Faktur</label>
    <input type="date" class="form-control" name="tglfaktur" id="tglfaktur" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<div class="card">
  <div class="card-header bg-primary">
    Input Barang
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="">Kode Barang</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Kode Barang" name="kdbarang" id="kdbarang">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="tombolCariBarang">
              <i class="fa fa-search"></i>

            </button>
          </div>
        </div>
      </div>
      <div class="form-group col-md-3">
        <label for="">Nama Barang</label>
        <input type="Text" class="form-control" name="namabarang" id="namabarang" readonly>
      </div>
      <div class="form-group col-md-2">
        <label for="">Harga Jual</label>
        <input type="Text" class="form-control" name="hargajual" id="hargajual" readonly>
      </div>
      <div class="form-group col-md-2">
        <label for="">Harga Beli</label>
        <input type="number" class="form-control" name="hargabeli" id="hargabeli">
      </div>
      <div class="form-group col-md-1">
        <label for="">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah">
      </div>
      <div class="form-group col-md-1">
        <label for="">Aksi</label>
        <div class="input-group"></div>
        <button type="button" class="btn btn -sm btn-info" title="tambah item" id="tombolTambahItem">
          <i class="fa fa-plus-square"></i>
        </button>
        <button type="button" class="btn btn -sm btn-warning" title="Releod Data" id="tombolReload">
          <i class="fa fa-sync-alt"></i>
        </button>
      </div>
    </div>
    <div class="row" id="tampilDataTemp"></div>
    <div class="row justify-content-end">
      <button type="button" class="btn btn-lg btn-success" id="tombolSelesaiTransaksi">
        <i class="fa fa-save"></i> Selesai Transaksi
      </button>

    </div>


    </div>

    </div>

    </div>
  </div>
</div>
<div class="modalcaribarang" style="display: none;"></div>
<script>
  function dataTemp() {
  <div class="form-row">
    <div class="form-group col-md-3">

        <label for="">Kode Barang</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Kode Barang" name="kdbarang" id="kdbarang">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="tombolCariBarang">
              <i class="fa fa-search"></i>


            </button>
          </div>
        </div>
      </div>
      <div class="form-group col-md-3">
        <label for="">Nama Barang</label>
        <input type="Text" class="form-control" name="namabarang" id="namabarang" readonly>
      </div>
      <div class="form-group col-md-2">
        <label for="">Harga Jual</label>
        <input type="Text" class="form-control" name="hargajual" id="hargajual" readonly>
      </div>
      <div class="form-group col-md-2">
        <label for="">Harga Beli</label>
        <input type="number" class="form-control" name="hargabeli" id="hargabeli">
      </div>
      <div class="form-group col-md-1">
        <label for="">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah">
      </div>
      <div class="form-group col-md-1">
        <label for="">Aksi</label>
        <div class="input-group"></div>
        <button type="button" class="btn btn -sm btn-info" title="tambah item" id="tombolTambahItem">
          <i class="fa fa-plus-square"></i>
        </button>
        <button type="button" class="btn btn -sm btn-warning" title="Releod Data" id="tombolReload">
          <i class="fa fa-sync-alt"></i>
        </button>
      </div>
    </div>
    <div class="row" id="tampilDataTemp"></div>

    </button>
  </div>
</div>
    </div>
    <div class="form-group col-md-3">
    <label for="">Nama Barang</label>
      <input type="Text" class="form-control" name="namabarang" id="namabarang" readonly>
    </div>
    <div class="form-group col-md-2">
    <label for="">Harga Jual</label>
      <input type="Text" class="form-control" name="hargajual" id="hargajual" readonly>
    </div>
    <div class="form-group col-md-2">
    <label for="">Harga Beli</label>
      <input type="number" class="form-control" name="hargabeli" id="hargabeli">
    </div>
    <div class="form-group col-md-1">
    <label for="">Jumlah</label>
      <input type="number" class="form-control" name="jumlah" id="jumlah">
    </div>
    <div class="form-group col-md-1">
    <label for="">Aksi</label>
    <div class="input-group"></div>
     <button type="button" class="btn btn -sm btn-info" title="tambah item" id="tombolTambahItem">
        <i class="fa fa-plus-square"></i>
     </button>
     <button type="button" class="btn btn -sm btn-warning" title="Releod Data" id="tombolReload">
        <i class="fa fa-sync-alt"></i>
     </button>
    </div>
  </div>

  <div class="row" id="tampilDataTemp"></div>




  </div>
</div>
<div class="modalcaribarang" style="display: none;"></div>
<script>
  function dataTemp() {
    let faktur = $('#faktur').val();

    $.ajax({
      type: "post",
      url: "/barangmasuk/dataTemp",
      data: {
        faktur: faktur
      },
      dataType: "json",
      success: function(response) {
        if (response.data) {
          $('#tampilDataTemp').html(response.data);
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {

        faktur : faktur
      },
      dataType: "json",
      success: function(response) {
        if (response.data) {
          $('#tampilDataTemp').html(response.data);
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {

        alert(xhr.status + '\n' + thrownError);
      }
    });
  }

  function kosong() {
    $('#kdbarang').val('');
    $('#namabarang').val('');
    $('#hargajual').val('');

    $('#hargabeli').val('');
    $('#jumlah').val('');
    $('#kdbarang').focus();
  }
  function ambilDataBarang() {
    let kodebarang = $('#kdbarang').val();

    $.ajax({
      type: "post",
      url: "/barangmasuk/ambilDataBarang",
      data: {
        kodebarang: kodebarang
      },
      dataType: "json",
      success: function(response) {
        if (response.sukses) {
          let data = response.sukses;
          $('#namabarang').val(data.namabarang);
          $('#hargajual').val(data.hargajual);


          $('#hargabeli').focus();
        }




          $('#hargabeli').focus();
        }



    $('#hargabeli').val('');
    $('#jumlah').val('');
    $('#kdbarang').focus();
  }


  function ambilDataBarang() {
    let kodebarang = $('#kdbarang').val();

    $.ajax({
      type: "post",
      url: "/barangmasuk/ambilDataBarang",
      data: {
        kodebarang: kodebarang
      },
      dataType: "json",
      success: function(response) {
        if (response.sukses) {
          let data = response.sukses;
          $('#namabarang').val(data.namabarang);
          $('#hargajual').val(data.hargajual);

          $('#hargabeli').focus();
        }

        if (response.error) {
          alert(response.error);
          kosong();
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(xhr.status + '\n' + thrownError);
      }
    });

    $('#hargabeli').val();
    $('#jumlah').val();
    $('#kdbarang').focus();

  }
  function ambilDataBarang() {
    let kodebarang = $('#kdbarang').val();

    $.ajax({
      type: "post",
      url: "/barangmasuk/ambilDataBarang",
      data: {
        kodebarang: kodebarang
      },
      dataType: "json",
      success: function(response) {
        if (response.sukses) {
          let data = response.sukses;
          $('#namabarang').val(data.namabarang);
          $('#hargajual').val(data.hargajual);

          $('#hargabeli').focus();
        }
        if (response.error) {
          alert(response.error);
          kosong();
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(xhr.status + '\n' + thrownError);
      }
    });
  }
  $(document).ready(function() {
    dataTemp();

    $('#kdbarang').keydown(function(e) {
      if (e.keyCode == 13) {
        e.preventDefault();
        ambilDataBarang();

      }
    });

    $('#tombolTambahItem').click(function(e) {
      e.preventDefault();
      let faktur = $('#faktur').val();
      let kodebarang = $('#kdbarang').val();
      let hargabeli = $('#hargabeli').val();
      let jumlah = $('#jumlah').val();
      let hargajual = $('#hargajual').val();
      console.log(hargabeli);

      if (faktur.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Faktur tidak boleh kosong',
        })
      } else if (kodebarang.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, kode barang tidak boleh kosong',
        })
        //alert('Maaf, kode barang tidak boleh kosong');
      } else if (hargabeli.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Harga Beli tidak boleh kosong',
        })

      }
        else if (hargabeli >= hargajual) {


      }
        else if (hargabeli >= hargajual) {

      }
        else if (hargabeli >= hargajual) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Harga Beli tidak boleh lebih besar dari harga jual',
        })
        //alert('Maaf, Harga Beli tidak boleh kosong');
      } else if (jumlah.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Jumlah tidak boleh kosong',
        })
        //alert('Maaf, Jumlah tidak boleh kosong');
      } else {
        $.ajax({
          type: "post",
          url: "/barangmasuk/simpanTemp",
          data: {
            faktur: faktur,
            kodebarang: kodebarang,
            hargabeli: hargabeli,
            hargajual: hargajual,
            jumlah: jumlah
          },
          dataType: "json",
          success: function(response) {
            if (response.sukses) {
              alert(response.sukses);
              kosong();
              dataTemp();
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + '\n' + thrownError);
          }
        });
      }
    });
  });
</script>
$(document).ready(function () {
  dataTemp();

});
  }
  $(document).ready(function() {
    dataTemp();

    $('#kdbarang').keydown(function(e) {
      if (e.keyCode == 13) {
        e.preventDefault();
        ambilDataBarang();

      }
    });

    $('#tombolTambahItem').click(function(e) {
      e.preventDefault();
      let faktur = $('#faktur').val();
      let kodebarang = $('#kdbarang').val();
      let hargabeli = $('#hargabeli').val();
      let jumlah = $('#jumlah').val();
      let hargajual = $('#hargajual').val();
      console.log(hargabeli);

      if (faktur.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Faktur tidak boleh kosong',
        })
      } else if (kodebarang.length == 0) {


        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Harga Beli tidak boleh lebih besar dari harga jual',

        })

      }
        else if (hargabeli >= hargajual) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Harga Beli tidak boleh lebih besar dari harga jual',

        })

        //alert('Maaf, Harga Beli tidak boleh kosong');
      } else if (jumlah.length == 0) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Maaf, Jumlah tidak boleh kosong',
        })
        //alert('Maaf, Jumlah tidak boleh kosong');
      } else {
        $.ajax({
          type: "post",
          url: "/barangmasuk/simpanTemp",
          data: {
            faktur: faktur,
            kodebarang: kodebarang,
            hargabeli: hargabeli,
            hargajual: hargajual,
            jumlah: jumlah
          },
          dataType: "json",
          success: function(response) {
            if (response.sukses) {
              alert(response.sukses);
              kosong();
              dataTemp();
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + '\n' + thrownError);
          }
        });
      }
    });
    $('#tombolReload').click(function(e) {
      e.preventDefault();
      dataTemp();
    });
    $('#tombolCariBarang').click(function(e) {
      e.preventDefault();
      $.ajax({
        url: "/barangmasuk/cariDataBarang",
        dataType: "json",
        success: function(response) {
          if (response.data) {


    $('#tombolCariBarang').click(function(e) {
    $('#tombolCariBarang').click(function(e) {
    $('#tombolCariBarang').click(function (e){

      e.preventDefault();
      $.ajax({
        url: "/barangmasuk/cariDataBarang",

        success: function(response) {
          if (response.data) {


        success: function(response) {
          if (response.data) {

        success: function (response){
          if(response.data){



            $('.modalcaribarang').html(response.data).show();
            $('#modalcaribarang').modal('show');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {


          alert(xhr.status + '\n' + thrownError);
        }



          alert(xhr.status + '\n' + thrownError);
        }
      });
    });
    $('#tombolSelesaiTransaksi').click(function(e) {
      e.preventDefault();
      let faktur = $('#faktur').val();
      if (faktur.length == 0) {
        Swal.fire({
          title: 'Pesan',
          icon: 'warning',
          text: 'Maaf, faktur tidak boleh kosong'
        });
      } else {
        Swal.fire({
          title: 'Selesai Transaksi',
          text: "Yakin transaksi ini disimpan?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Simpan'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: "post",
              url: "/barangmasuk/selesaiTransaksi",
              data: {
                faktur: faktur,
                tglfaktur: $('#tglfaktur').val()
              },
              dataType: "json",
              success: function(response) {
                if (response.error) {
                  Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: response.error
                  });
                }

                if(response.sukses){
                  Swal.fire({
                    title: 'Berhasil',
                    icon: 'success',
                    text: response.sukses
                  }).then((result) =>{
                    if(result.isConfirmed){
                      window.location.reload();
                    }
                  })
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
              }
            });
          }
        })
      }
    });
  });
</script>

            alert(xhr.status + '\n' + thrownError);
          }

      });
    });
    $('#tombolSelesaiTransaksi').click(function(e) {
      e.preventDefault();
      let faktur = $('#faktur').val();


      if (faktur.length == 0) {
        Swal.fire({
          title: 'Pesan',
          icon: 'warning',
          text: 'Maaf, faktur tidak boleh kosong'
        });
      } else {
        Swal.fire({
          title: 'Selesai Transaksi',
          text: "Yakin transaksi ini disimpan?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Simpan'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: "post",
              url: "/barangmasuk/selesaiTransaksi",
              data: {
                faktur: faktur,
                tglfaktur: $('#tglfaktur').val()
              },
              dataType: "json",
              success: function(response) {
                if (response.error) {
                  Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: response.error
                  });
                }

                if(response.sukses){
                  Swal.fire({
                    title: 'Berhasil',
                    icon: 'success',
                    text: response.sukses
                  }).then((result) =>{
                    if(result.isConfirmed){
                      window.location.reload();
                    }
                  })
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
              }
            });
          }
        })
      }
    $('#tombolCariBarang').click(function(e) {
      e.preventDefault();
      $.ajax({
        url: "/barangmasuk/cariDataBarang",
        dataType: "json",
        success: function(response) {
          if (response.data) {
            $('.modalcaribarang').html(response.data).show();
            $('#modalcaribarang').modal('show');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(xhr.status + '\n' + thrownError);
        }
      });

    });
    $('#tombolSelesaiTransaksi').click(function(e) {
      e.preventDefault();
      let faktur = $('#faktur').val();


      if (faktur.length == 0) {
        Swal.fire({
          title: 'Pesan',
          icon: 'warning',
          text: 'Maaf, faktur tidak boleh kosong'
        });
      } else {
        Swal.fire({
          title: 'Selesai Transaksi',
          text: "Yakin transaksi ini disimpan?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Simpan'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: "post",
              url: "/barangmasuk/selesaiTransaksi",
              data: {
                faktur: faktur,
                tglfaktur: $('#tglfaktur').val()
              },
              dataType: "json",
              success: function(response) {
                if (response.error) {
                  Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: response.error
                  });
                }

                if(response.sukses){
                  Swal.fire({
                    title: 'Berhasil',
                    icon: 'success',
                    text: response.sukses
                  }).then((result) =>{
                    if(result.isConfirmed){
                      window.location.reload();
                    }
                  })
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
              }
            });
          }
        })
      }
    });
  });
</script>

<?= $this->endSection('isi') ?>