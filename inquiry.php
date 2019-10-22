<?php
//練習問題２
if(isset($_post['tel'])){
    echo $_post['tel'];
}
?>

<form  class="" action="confirm.php" method="post">
    氏名<input type="text" name="name" value=""><br/>
    フリガナ<input type="text" name="kana" value=""><br/>
    ID<input type="text" name="id" value=""><br/>
    pass<input type="password" name="pass" value=""><br/>
    都道府県<input type="text" name="state" value=""><br/>
    問い合わせ確認<input type="text" name="check" value=""><br/>
    <input type="submit" name="tel" value="送信">
</form>
