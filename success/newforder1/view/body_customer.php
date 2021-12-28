<body>
    <div class="container">
      <h2 class="h2">Customer</h2>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Number Phone</th>
            <th>address</th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($objects as $key => $customer): ?>
          <tr>
            <td><?= $key +1; ?></td>
            <td><?= $customer->name; ?></td>
            <td><?= $customer->email; ?></td>
            <td><?= $customer->number_Phone; ?></td>
            <td><?= $customer->address; ?></td>
            <td><img width="100px" src="<?= $customer->image; ?>" alt=""></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    </body>