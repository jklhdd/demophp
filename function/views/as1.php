<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $table = [
            [
                "ten" => "Áo",
                "gia" => 12000,
                "sl" => 9,
                "mota" => "Khong dang tien" 

            ],
            [
                "ten" => "Áo",
                "gia" => 12000,
                "sl" => 9,
                "mota" => "Khong dang tien" 

            ],
            [
                "ten" => "Áo",
                "gia" => 12000,
                "sl" => 9,
                "mota" => "Khong dang tien" 

            ],
            
        ];    
    ?>
    <table>
        <thead>Bảng sản phẩm</thead>
        <tbody>
            <tr>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Mô tả</th>
            </tr>
            <?php foreach ($table as $t ) {?>
                    <tr>
                        <td><?php echo $t["ten"] ?></td>
                        <td><?php echo $t["gia"] ?></td>
                        <td><?php echo $t["sl"] ?></td>
                        <td><?php echo $t["mota"] ?></td>
                    </tr>
                    
            <?php     }            ?>
        </tbody>
    </table>
</body>
</html>