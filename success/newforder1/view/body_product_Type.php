
    <div class="container">
      <h2 class="h2">Product</h2>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>product type</th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>
           <?php foreach($objects as $key => $product): ?> 
          <tr>
            <td><?= $key +1; ?></td>
            <td><?= $product->product_type; ?></td>
            <td><img width="100px" src="<?= $product->image; ?>" alt=""></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    </body>