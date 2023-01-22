<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP Sample Programs</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body>
    <br>
    <br>
    名刺登録<br>
    <br>
    <br>
    <br>
    <form action="meishi_add_check.php" method="post">
        <table>
            <tr>
                <td>会社名</td>
                <td><input type="text" name="corp" style="width:200px"></td>
            </tr>
            <tr>
                <td>役職</td>
                <td><input type="text" name="title" style="width:200px"></td>
            </tr>
            <tr>
                <td>名前</td>
                <td><input type="text" name="name" style="width:200px"></td>
            </tr>
            <tr>
                <td>
                    郵便番号<br>
                    住所<br>
                </td>
                <td>
                    <div class="h-adr">
                        <span class="p-country-name" style="display:none;">Japan</span>
                        <input type="text" class="p-postal-code" size="7" maxlength="7" style="width:200px"><br>
                        <input type="text" class="p-region p-locality p-street-address p-extended-address" style="width:200px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td><input type="text" name="tel" style="width:200px"></td>
            </tr>
            <tr>
                <td>携帯番号</td>
                <td><input type="text" name="mobile" style="width:200px"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" style="width:200px"></td>
            </tr>
        </table>
        <input type="submit" value="確定">
    </form>
    <br>
    <br>
    <a href="meishi_list.php">名刺一覧へ戻る</a>
    <br>
<br>
<br>
<br>
</body>
</html>