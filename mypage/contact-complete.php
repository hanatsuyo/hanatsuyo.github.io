<?php
ini_set('display_errors', 'stderr');
error_reporting(E_ALL);
// データベースに接続するために必要なデータソースを変数に格納
// mysql:host=ホスト名;dbname=データベース名;charset=文字エンコード

try {

    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */
    session_start();
    // データベースに接続
    $pdo = new PDO('mysql:host=localhost;dbname=takeuchi_db','takeuchi', 'gQ2fp8Ee', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    /* データベースから値を取ってきたり， データを挿入したりする処理 */
    $stmt = $pdo -> prepare("INSERT INTO contact ( name,company,text ) VALUES ( :name,:company,:text)");
        $stmt -> bindParam(':name', $name);
        $stmt -> bindParam(':company', $company);
        $stmt -> bindParam(':text', $text);

       
        $name = $_SESSION['name'];
        $company = $_SESSION['company'];
        $text = $_SESSION['text'];


        $stmt -> execute();


} catch (PDOException $e) {

    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());

}



// Webブラウザにこれから表示するものがUTF-8で書かれたHTMLであることを伝える
// (これか <meta charset="utf-8"> の最低限どちらか1つがあればいい． 両方あっても良い．)
header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
</head>
<body>
<div id="inquiry">
<?php

  print $name.'様<br>'."\n";
  print 'お問い合わせ、ありがとうございました。<br>'."\n";
  print '会社名:'.$company.'<br>'."\n";
  print '備考:'.$text.'<br>'."\n";



?>
<ul>
<li><a href="tsuyoshi.php">トップページに戻る</a></li>
</ul>
</div>
</body>
</html>

