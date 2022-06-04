# OSSLabFinal

What does this project do?
==========================
  - Helps you create a calendar that lets you organize your personal schedules.
  - Generate a QR code for a calendar web page so you can share it with others.

Why is this project useful?
==========================
  - If you need to share a schedule with multiple people, such as an event schedule for a club, this open-source help you easy to resolve it.
  - It helps you easily generate QR code images and can also be used for promotional materials.

How to get started?
==========================
  1.Download open-source or fork this repository
    - https://fullcalendar.io/
    - https://sourceforge.net/projects/phpqrcode/
  
  2.Modifying the PHP QRcode File
    - If you download PHPQR codes yourself, you need to write a code that generates an image file.
    
    ```c
    <html>
    <head>
    <title></title>
    </head>
    <body>
    <?php
        include_once "qrlib.php";

        $codeContents = "Address of your calendar web page";
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
    ```
  
  3.
  
  4.



My contribution.
==========================



Where can people get more help, if needed?
==========================
  - asd
  -  
  - https://sourceforge.net/projects/phpqrcode/
  - 22100237@handong.ac.kr
    *my email adress


Presentation Video (YouTube) Link
==========================


