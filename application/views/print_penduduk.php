<!DOCTYPE html>
<html>
    <head>

    <title></title>
    </head>

    <body>

    <h2 align="center">DATA PENDUDUK</h2>

    <table class="table" border="1px" align="center">

<tr>
<td>No</td>
<td>Nama</td>
<td>Nik</td>
<td>Alamat</td>


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
 
</tr>

<?php endforeach;  ?>
    </table>
    <script type="text/javascript">

        window.print();
    </script>
</body>
</html>