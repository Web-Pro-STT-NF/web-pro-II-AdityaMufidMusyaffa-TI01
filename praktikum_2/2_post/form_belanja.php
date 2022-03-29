<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Form Belanja</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 bg-light pt-2 border border-2">
        <p>Belanja Online</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <form action="" method="POST">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label> 
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Customer Name" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Choose a Product</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_0" type="radio" class="custom-control-input" value="TV"> 
              <label for="product_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_1" type="radio" class="custom-control-input" value="Kulkas"> 
              <label for="product_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
              <label for="product_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="quantity" class="col-4 col-form-label">Quantity</label> 
          <div class="col-8">
            <input id="quantity" name="quantity" placeholder="Numbers of Products" type="text" class="form-control">
          </div>
        </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Place an Order</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-6">
        <ul class="list-group">
          <li class="list-group-item bg-warning">DAFTAR HARGA</li>
          <li class="list-group-item">TV: 4.500.000</li>
          <li class="list-group-item">KULKAS: 3.100.000</li>
          <li class="list-group-item">MESIN CUCI: 3.800.000</li>
          <li class="list-group-item bg-warning">HARGA DAPAT BERUBAH SETIAP SAAT</li>
        </ul>
      </div>
    </div>
      
    <div class="mt-5">
      <?php if(isset($_POST['submit'])) : 
          $customer = $_POST['customer'];
          $product = $_POST['product'];
          $quantity = $_POST['quantity'];
          ?>
        <table class="table table-striped table-hover table-dark border-light">
          <thead>
            <tr>
              <th>customer</th>
              <th>Product</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= $customer ?></td>
              <td><?= $product ?></td>
              <td><?= $quantity ?></td>
            </tr>
          </tbody>
        </table>
    <?php endif ?>
  </div>

  </div>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>