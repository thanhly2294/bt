<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kq.php" method="post">
        <fieldset class="chinh">
            <h1>Tính nồng độ cồn</h1>
            <p for="gender">Giới tính</p>
            <label for="nam">Nam</label>
            <input type="radio" name="g" id="nam" class="gt" value="Nam" checked>
            <label for="nu">Nữ</label>
            <input type="radio" name="g" id="nu" class="gt" value="Nữ">
            <p>Cân nặng</p>
            <input type="text" name="cannag" id="cn"><label for="kg">kg</label>
            <p>Loại đồ uống</p>
            <label for="bia">Bia</label>
            <input type="radio" name="du" id="bia" checked>
            <label for="ruou">Rượu mạnh</label>
            <input type="radio" name="du" id="ruou">
            <label for="ruouv">Rượu vang</label>
            <input type="radio" name="du" id="ruouv">
            <p>Số lượng đã uống</p>
            <input type="text" name="lon" id="lon"><label for="lon">lon bia</label>
            <p>Phương tiện</p>
            <label for="xemay">Xe máy</label>
            <input type="radio" name="xe" id="xm" checked>
            <label for="oto">Oto</label>
            <input type="radio" name="xe" id="oto">
            <label for="xethoso">Xe thô sơ</label>
            <input type="radio" name="xe" id="xts"> <br>
            <input type="submit" name="kq" id="kq" value="Xem kết quả">
        </fieldset>
    </form>
</body>
</html>