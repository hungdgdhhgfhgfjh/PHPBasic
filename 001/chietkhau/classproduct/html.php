
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .divall{
        width:100%;
        height:100%;
    }
.div{
    margin: 0 auto;
    width:500px;
    height:1000px;
    display: flex;
}
    .product{
        width: 204px;
        height: 246px;
        border: 10px solid yellow;

    }
    td{
        text-align: center;
    }
    .name{
        color: red;
        font-size: 20px;
    }
    button{
        background-color: orange;
        width:100px;
        height:30px;
        font-size: 20px;
    }
</style>
<body>
    <div class="divall">
    <div class="div">
    <?php foreach($objectProduct as $product): ?>
    <div class="product">
    <table >
        <tr>
            <td class="name"><?php echo $product->name; ?></td>
        </tr>
        <tr>
          <td><img height="150px" width ="200px" src="<?php echo $product->image; ?>" alt="" ></td>
        </tr>
        <tr>
        <td class="name"><?php echo $product->price; ?></td>
        </tr>
        <tr>
        <td class="name"><button><?php echo $product->button; ?></button></td>
        </tr>
        </table>
        </div>
        <?php endforeach;?>
        
    
    </div>
    </div>
</body>
</html>
