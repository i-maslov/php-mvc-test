<!DOCTYPE html>
<html>
<head>
  <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <ul>
      <li>Email: <?= $contacts['email'] ?></li>
      <li>Phone number: <?= $contacts['phone'] ?></li>
      <li>Address: <?= $contacts['address'] ?></li>
    </ul>
    <p><a href="index.php?page=home">To main page</a></p>
</body>
</html>
