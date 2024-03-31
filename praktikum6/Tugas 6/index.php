<?php

    include 'hubung.php';

    // show data
    $query = "SELECT * FROM mobile_legends";
    $result = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Mobile legends</h2>
    <table border="2" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Mode</th>
            <th>Nama</th>
            <th>Server</th>
            <th>Rank</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) :  ?>

        <tr>
            <td> <?= $row['id']?></td>
            <td><?= $row['mode'] ?></td>
            <td><?= $row['nama']?></td>
            <td><?= $row['server']?></td>
            <td><?= $row['rank']?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>

        <?php endwhile; ?>

    </table>

    <br>
    <h2>Tambah Data</h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="tambah.php" method="POST">
  <div class="form-group row">
    <label for="mode" class="col-4 col-form-label">Mode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-area-chart"></i>
          </div>
        </div> 
        <input id="mode" name="mode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="server" class="col-4 col-form-label">Server</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-chrome"></i>
          </div>
        </div> 
        <input id="server" name="server" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="rank" class="col-4 col-form-label">Rank</label> 
    <div class="col-8">
      <select id="rank" name="rank" class="custom-select">
        <option value="elite">Elite</option>
        <option value="master">Master</option>
        <option value="gm">Grand Master</option>
        <option value="epic">Epic</option>
        <option value="legend">Legend</option>
        <option value="mythic">Mythic</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      <button name="batal" type="batal" class="btn btn-danger">Batal</button>
    </div>
  </div>
</form>
        
    </form>
</body>
</html>