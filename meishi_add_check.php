<?php require "header.php";?>
<?
    $corp=htmlspecialchars($_POST['corp'], ENT_QUOTES, "UTF-8");
    $title=htmlspecialchars($_POST['title'], ENT_QUOTES, "UTF-8");
    $name=htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8");
    $postal=htmlspecialchars($_POST['postal'], ENT_QUOTES, "UTF-8");
    $address=htmlspecialchars($_POST['address'], ENT_QUOTES, "UTF-8");
    $tel=htmlspecialchars($_POST['tel'], ENT_QUOTES, "UTF-8");
    $mobile=htmlspecialchars($_POST['mobile'], ENT_QUOTES, "UTF-8");
    $email=htmlspecialchars($_POST['email'], ENT_QUOTES, "UTF-8");

    $postal_mb= mb_convert_kana($postal, "a");
?>
<?php require "footer.php";?>