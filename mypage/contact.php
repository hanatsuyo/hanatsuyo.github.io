<?php
// フォームデータが空の場合は処理終了
if (empty($_POST)) {
    print "処理終了";
    exit;
}

// セッションの開始
session_start();

$name = htmlspecialchars( $_POST[ 'name' ], ENT_QUOTES );
$company = htmlspecialchars( $_POST[ 'company' ], ENT_QUOTES );
$text = htmlspecialchars( $_POST[ 'text' ], ENT_QUOTES );

$_SESSION[ 'name' ] = $name;
$_SESSION[ 'company']= $company;
$_SESSION[ 'text' ] = $text;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="inquiry">
<h1>確認画面</h1>
<?php
  print '<ul>'."\n";
  print '<li>';
if($name==''){
  print 'お名前が入力されていません。<br>'."\n";
}else{
  print 'お名前：'.$name.'<br>'."\n";
}
  print '</li>'."\n";
  print '<li>';
if($company==''){
  print '会社名が入力されていません。<br>'."\n";
}
else{
  print '会社名：'.$company.'<br>'."\n";
}
  print '</li>'."\n";
  print '<li>';

print '</li>'."\n";
print '<li>';
if($text==''){
    print '備考が入力されていません。<br>'."\n";
  }else{
    echo '備考欄： '.$text."\n";

  }
  print '</li>'."\n";
  print '</ul>'."\n";
?>
 
 

<?php
if($name=='' || $company=='' || $text==''){
  print '<p>未記入の項目があります。「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";
  print '<div class="submit">'."\n";
  print '<form>'."\n";
  print '<input type="button" onclick="history.back()" value="戻る">'."\n";
  print '</form>'."\n";
  print '</div>'."\n";
}
else{
  print '<p>以上の内容を送信します。<br>よろしければ「<span class="deco">送信</span>」ボタンを、修正する場合は「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";  
  print '<div class="submit">'."\n";
  print '<form action="contact-complete.php" method="post">'."\n";

/*
  print '<input type="hidden" name="name" value="'.$name.'">';
  print '<input type="hidden" name="email" value="'.$email.'">';
  print '<input type="hidden" name="message" value="'.$message.'">';
*/
  print '<input type="button" onClick="history.back()" value="戻る">'."\n";
  print '<input type="submit" value="送信">'."\n";
  print '</form>'."\n";
  print '</div>'."\n";
}
?>

</div>
</body>
</html>
