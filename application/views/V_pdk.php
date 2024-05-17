

    <!-- SEARCH FORM -->
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
    <!-- tambah data Modal -->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdataModal">

<i class="fa fa-plus">
  Tambah data</i>

</button>

<a class="btn btn-danger"href="<?php echo base_url('admin/print') ?>"> <i class="fa fa-print">Print</i></a>

<!-- Modal -->
<div class="modal fade" id="tambahdataModal" tabindex="-1" role="dialog" aria-labelledby="tambahdataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form action="<?php echo base_url(), 'admin/tambah_data' ?>" method="post">


  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama"  name="nama" placeholder="Masukkan nama">
    
  </div>
  
  <div class="form-group">
    <label for="nik">Nik</label>
    <input type="text" class="form-control" id="nik"  name="nik" placeholder="Masukkan NIK">
</div>

<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat"  name="alamat" placeholder="Masukkan Alamat">


  </div>
  

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    
    
    </form>
    </div>
  </div>
</div>

    <table class="table">

<tr>
<td>No</td>
<td>Nama</td>
<td>Nik</td>
<td>Alamat</td>
<td colspan="2">Aksi</td>

</tr>
<?php 
$no=1;
foreach ($penduduk as $pdk) :



?>
<tr>
  <td><?php echo $no++;  ?></td>
  <td><?php echo $pdk->nama;   ?></td>
  <td><?php echo $pdk->nik;   ?></td>
  <td><?php echo $pdk->alamat;   ?></td>
  <td onClick="return confirm('apakah mau dihapus?')"><?php echo anchor('admin/hapus/'.$pdk->id, '<div class="btn btn-danger btn-sm">
  <i class="fa fa-trash"></i></div>') ?>

  </td>

  <td><?php echo anchor('admin/edit/'.$pdk->id, '<div class="btn btn-warning btn-sm">
  <i class="fa fa-edit"></i></div>') ?>

  </td>
</tr>

<?php endforeach;  ?>
    </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  