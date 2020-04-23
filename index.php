  <script>
    function getLinkJSONloaitamgiac() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api.php/checkloaitamgiac/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONngayketiep() {
        var a,b,c;
       a = document.getElementById("inputday").value;
       b = document.getElementById("inputmonth").value;
        c = document.getElementById("inputyear").value;
        window.open("api.php/checkngayketiep/"+a+"/"+b+"/"+c);
    }
    function getData()
    {
        document.getElementById("txt_apijsonloaitamgiac").innerHTML = window.location.host +"/CloudPhpEX/api.php/checkloaitamgiac/a/b/c";
        document.getElementById("txt_apijsonyear").innerHTML = window.location.host +"/CloudPhpEX/api.php/checkngayketiep/year";
    }
</script>

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Ex test api</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Xác định loại tam giác</h1>
<form>
    <label for="fname">a</label><br>
    <input type="number" id="inputa" name="fname"><br>
    <label for="lname">b</label><br>
    <input type="number" id="inputb" name="lname"><br>
    <label for="lname">c</label><br>
    <input type="number" id="inputc" name="lname"><br>
    <input type ="button" name="OKE" value="GETJSON" onclick="getLinkJSONloaitamgiac()">
</form>
<h3>Api json loai tam giac: </h3><h4 id="txt_apijsonloaitamgiac"></h4>
<h1>Tính ngày kế tiếp</h1>
<form>
    <label for="lname">Nhập ngày</label><br>
    <input type="number" id="inputday" name="lname"><br>
   <label for="lname">Nhập tháng</label><br>
    <input type="number" id="inputmonth" name="lname"><br>
   <label for="lname">Nhập năm</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="GETJSON" onclick="getLinkJSONngayketiep()">
</form>
<h3>Api json ngay ke tiep: </h3><h4 id="txt_apijsonngayketiep"></h4>
<script>getData();</script>
</body>
</html>
