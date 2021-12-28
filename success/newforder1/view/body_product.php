<body>
    <div class="container">
      <h2 class="h2">Product</h2>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>product type</th>
            <th>price</th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($objects as $key => $product): ?>
          <tr>
            <td><?= $key +1; ?></td>
            <td><?= $product->name; ?></td>
            <td><?= $product->product_type; ?></td>
            <td><?= $product->price; ?></td>
            <td><img width="100px" src="<?= $product->image; ?>" alt=""></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>
    <div style="display:flex;">
            <?php foreach ( $objectMotobikes as $index => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->name; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->price." VND"; ?></p>
                    <button style="width: 73px;margin-left: 74px;margin-top: -13px;background: #e67e22;border-radius: 21px;">mua</button>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div style="display:flex;">
            <?php foreach ( $object_laptops as $index => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->name; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->price." VND"; ?></p>
                    <button style="width: 73px;margin-left: 74px;margin-top: -13px;background: #e67e22;border-radius: 21px;">mua</button>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <div style="display:flex;">
            <?php foreach ( $objectCars as $index => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->name; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->price." VND"; ?></p>
                    <button style="width: 73px;margin-left: 74px;margin-top: -13px;background: #e67e22;border-radius: 21px;">mua</button>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div style="display:flex;">
            <?php foreach ($objectSmart_phones as $index => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->name; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->price." VND"; ?></p>
                    <button style="width: 73px;margin-left: 74px;margin-top: -13px;background: #e67e22;border-radius: 21px;">mua</button>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    </body>