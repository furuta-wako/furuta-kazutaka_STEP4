<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力内容確認</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>入力内容確認</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      
      $name = htmlspecialchars($_POST["name"]);
      $age = htmlspecialchars($_POST["age"]);
      $phone = htmlspecialchars($_POST["phone"]);
      $email = htmlspecialchars($_POST["email"]);
      $address = htmlspecialchars($_POST["address"]);
      $question = htmlspecialchars($_POST["question"]);
      $gender = htmlspecialchars($_POST["gender"]);

      echo "<p>名前：$name</p>";
      echo "<p>年齢：$age</p>";
      echo "<p>電話番号：$phone</p>";
      echo "<p>メールアドレス：$email</p>";
      echo "<p>住所：$address</p>";
      echo "<p>質問：$question</p>";
      echo "<p>性別：$gender</p>";
  } else {
      echo "<p>データが送信されていません。</p>";
  }
  ?>

  <a href="form.php">戻る</a>
</body>
</html>
