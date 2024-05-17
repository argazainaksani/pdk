

    <!-- SEARCH FORM -->
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Penduduk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
    <?php foreach ($penduduk as $pdk): ?>
      
<form action="<?php echo base_url(), 'admin/update' ?>" method="post">


<div class="form-group">
    <!-- <label for="nama">id</label> -->
    <input type="hidden" class="form-control" id="id"  name="id" value="<?php echo $pdk->id ; ?>">
    
  </div>
  

<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama"  name="nama" value="<?php echo $pdk->nama ; ?>">
    
  </div>
  
  <div class="form-group">
    <label for="nik">Nik</label>
    <input type="text" class="form-control" id="nik"  name="nik" value="<?php echo $pdk->nik ; ?>">
</div>

<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat"  name="alamat" value="<?php echo $pdk->alamat ; ?>">


  </div>
  

      
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    
    
    </form>
  
<?php endforeach  ?>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  