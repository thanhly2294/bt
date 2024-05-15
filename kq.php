<?php
    session_start();
    $gioitinh = $_POST['g'];
    $can = $_POST['cannag'];
    $douong = $_POST['du'];
    $soluong = $_POST['lon'];
    $phuongtien = $_POST['xe'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($soluong) && empty($can)){
            echo "<script>alert('Vui lòng nhập số lượng chính xác');</script>";
        }
        $_SESSION['gt'] = $gioitinh;
        $_SESSION['can'] = $can;
        $_SESSION['doU'] = $douong;
        $_SESSION['slg'] = $soluong;
        $_SESSION['pthgT'] = $phuongtien;
    }

    $time = time() + (24 * 3600);
    setcookie('gt', $gioitinh, $time);
    setcookie('can', $can, $time);
    setcookie('doU', $gioitinh, $time);
    setcookie('slg', $gioitinh, $time);
    setcookie('pthgT', $gioitinh, $time);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <p>Giới tính:  <?php echo $_SESSION['gt'];?>
            Cân nặng: <?php echo $_SESSION['can'];?>
    </p>
    <p>Đã uống: <?php echo $_SESSION['can'];?></p>
    <p>Phương tiện: <?php echo $_SESSION['gt'];?></p>
    <p>Thời gian đào thải: </p>
    </fieldset>
</body>
</html>