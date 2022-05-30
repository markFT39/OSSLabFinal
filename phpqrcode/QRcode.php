<html>
<head>
<title></title>
</head>
<body>
<?php
    include_once "qrlib.php";
       
    $codeContents = "http://192.168.137.185/OSSLabFinal/calendar/index.html";
    $filePath = md5($codeContents).".png";
   
    if(!file_exists($filePath)) {
        QRcode::png($codeContents, "QRcode.png");
        echo "파일이 정상적으로 생성되었습니다.";
        echo "<hr/>";
    } else {
        echo "파일이 이미 생성되어 있습니다.\n파일을 지우거나 이름을 바꾸어 실행하세요.";
        echo "<hr/>";
    }
   
    echo "저장된 파일명 : ".$filePath;
    echo "<hr/>";
    echo "<img src='".$filePath."'/>";
?>

</body>
</html>