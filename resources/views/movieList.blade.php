<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Showtimes Table</title>
  <style>
    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }
    th, td {
      padding: 12px 15px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #f5f5f5;
    }
    tr:hover {
      background-color: #f0f0f0;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar Ni Aldrich</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php 
$movies = [
    [
        'title' => 'Inception',
        'theater' => 'Dipolog Cinema',
        'date' => '2025-07-22',
        'time' => '18:00',
        'price' => '₱250'
    ],
    [
        'title' => 'Interstellar',
        'theater' => 'Dapitan Cinema',
        'date' => '2025-07-22',
        'time' => '20:30',
        'price' => '₱280'
    ],
];
?>

<body>
  <div class="container">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>Movie</th>
          <th>Theater</th>
          <th>Show Date</th>
          <th>Start Time</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($movies as $movie): ?>
        <tr>
          <td><?= $movie['title'] ?></td>
          <td><?= $movie['theater'] ?></td>
          <td><?= $movie['date'] ?></td>
          <td><?= $movie['time'] ?></td>
          <td><?= $movie['price'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>


</html>
