<?php
/**
 * Parse and verifies the doc comment for file. 
 * 
 * PHP Version 7.3.1
 * 
 * @category View
 * @package  Teerapuch
 * @author   Teerapuch Kassakul <teerapuch@hotmail.com>
 * @license  http://www.teerapuch.com teerapuch
 * @link     http://www.teerapuch.com
 */
$EP1 = "http://www.youtube.com/watch?feature=player_embedded&v=_tuuI_pQm4M";
$EP2 = "http://www.youtube.com/watch?feature=player_embedded&v=rb8i3dK-UE4";
$EP3 = "http://www.youtube.com/watch?feature=player_embedded&v=nrcC2PYCwyI";
$EP4 = "http://www.youtube.com/watch?feature=player_embedded&v=B1gdw5_TWfM";
$EP5 = "http://www.youtube.com/watch?feature=player_embedded&v=h4WIU3e63_k";
$EP6 = "http://www.youtube.com/watch?feature=player_embedded&v=S45lwvV0i_I";
$EP7 = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Zero By :: Teerapuch</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" 
    rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <style>
        body {
            color: #fff;
            padding: 20px;
            background-color: #f46523;
            font-family: 'Ubuntu', sans-serif;
        }
        hr {
            float: right;
            width: 80%;
            height: 5px;
            background-color: #fff;
        }
        h1 {
            margin-left: 300px;
            font-size: 150px;
            line-height: 0.8;
        }
        h1 > span {
            font-size: 90px;
        }
        h3 {
            margin-left: 320px;
            font-size: 30px;
        }
        .content-list {
            margin-left: 350px;
        }
        a:link, a:visited, a:active {
            color: #fff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline overline;
        }
        li {
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <hr>
    <h1>
        PHP Zero
        <br>
        <span>Tutorial From Basic</span>
    </h1>
    <h3>By : Teerapuch Kassakul</h3>
    <div class="content-list">
        <ul>
            <li>
                <a href="<?php echo $EP1; ?>" target="_blank">
                    Intro ตอนที่ 1 แนะนำข้อมูลเบื้องต้น
                </a>
            </li>
            <li>
                <a href="<?php echo $EP2; ?>" target="_blank">
                    Intro ตอนที่ 2 ติดตั้งโปรแกรมที่เกี่ยวข้อง
                </a>
            </li>
            <li>
                <a href="<?php echo $EP3; ?>" target="_blank">
                    ตอนที่ 3 Start Coding เริ่มเขียนกันเลย
                </a>
            </li>
            <li>
                <a href="<?php echo $EP4; ?>" target="_blank">
                    ตอนที่ 4 Variables ทำความรู้จักกับเรื่องราวของตัวแปร
                </a>
            </li>
            <li>
                <a href="<?php echo $EP5; ?>" target="_blank">
                    ตอนที่ 5 Numbers เป็นเรื่องราวของวิธีการทำงานกับตัวเลข
                </a>
            </li>
            <li>
                <a href="<?php echo $EP6; ?>" target="_blank">
                    ตอนที่ 6 Array Indexed เรื่องของการเก็บค่าในตัวแปรแบบกลุ่ม
                </a>
            </li>
            <li>
                <a href="<?php echo $EP7; ?>" target="_blank">
                    ตอนที่ 7 ตัวแปรแบบคงที่ Constants
                </a>
            </li>
        </ul>
    </div>
</body>
</html>