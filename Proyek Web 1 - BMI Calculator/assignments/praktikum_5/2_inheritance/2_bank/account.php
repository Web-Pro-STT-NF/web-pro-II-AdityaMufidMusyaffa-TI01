<?php require_once "class_account.php";
$customer = [
  $C001 = new AccountBank('C001', 6000000, 'Ahmad'),
  $C002 = new AccountBank('C002', 5350000, 'Budi'),
  $C003 = new AccountBank('C003', 2500000, 'Kurniawan')
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Account Bank</title>
</head>

<body>
  <div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-dark border-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Account</th>
          <th scope="col">Pemilik</th>
          <th scope="col">Saldo</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        <?php foreach ($customer as $cust) : ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $cust->getNomor() ?></td>
            <td><?= $cust->getCustomer() ?></td>
            <td><?= number_format($cust->getSaldo()) ?></td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
  </div>
  
  <?php
    echo $customer[0]->getCustomer() . " menabung " . number_format($customer[0]->deposit(1000000)) . " sehingga saldo {$customer[0]->getCustomer()} menjadi " . number_format($customer[0]->getSaldo());
    echo "<br>";
    echo $customer[0]->getCustomer() . " mentransfer sejumlah " . number_format($customer[0]->transfer(1500000, $C003)) .
      " kepada  {$C003->getCustomer()} dan sejumlah " . number_format($customer[0]->transfer(500000, $C002)) . " kepada {$C002->getCustomer()}";
  ?>

<div class="table-responsive mt-3">
  <table class="table table-striped table-hover table-sm table-dark border-dark">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Account</th>
        <th scope="col">Pemilik</th>
        <th scope="col">Saldo</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ?>
      <?php foreach ($customer as $cust) : ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $cust->getNomor() ?></td>
          <td><?= $cust->getCustomer() ?></td>
          <td><?= number_format($cust->getSaldo()) ?></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
</div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>