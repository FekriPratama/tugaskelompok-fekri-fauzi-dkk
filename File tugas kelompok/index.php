
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>

    <h1>Welcome our Website</h1>
    <a href="index.php">Home</a> |
    <a href="index.php?page=page1">Page 1</a> |
    <a href="index.php?page=page2">Page 2</a> |
    <a href="index.php?page=page3">Page 3</a> |
    <a href="index.php?page=page4">Page 4</a> |
    <a href="index.php?page=page5">Page 5</a> 
    <hr/>
    
    <?php 
    
    if (isset($_GET['page'])) :  
        $halaman= filter_var($_GET['page'],FILTER_SANITIZE_URL);
        $a= include "page/".$halaman.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
<?php else: ?>
  <center><img src= "img/klmp.jpg" width="550px" border="2px" cellspacing="50px" cellpadding="20px">
<center><table width="600px" border="2px" cellspacing="0" cellpadding="5px">
    <tr>
    <th>NAMA</th>
    <th>POSISI</th>
    <th>PHOTO</th>
</tr>
<tr>
    <td><center>M.Ikhwan Fauzi</td>
    <td><center>Ketua</td>
    <td><center><img src="img/a.jpeg" width="180px" height="240px" border="2"></td>
</tr>
<tr>
    <td><center>Hendri Jaya</td>
    <td><center>Anggota</td>
    <td><center><img src="img/h.jpg" width="200px;" height="220px;" border="2"></td>
</tr>
<tr>
    <td><center>Khairul Razikin</td>
    <td><center>Anggota</td>
    <td><center><img src="img/k.jpg" style="width="180px;" height="240px;" border="2"></td>
</tr>
<tr>
    <td><center>Fekri Pratama</td>
    <td><center>Anggota</td>
    <td><center><img src="img/f.jpg" width="180px;" height="240px;" border="2"></td>
</tr>
<tr>
    <td><center>Nur Fath</td>
    <td><center>Anggota</td>
    <td><center><img src="img/fat.jpg" width="180px;" height="280px;" border="2"></td>
</tr>
</table>
<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
