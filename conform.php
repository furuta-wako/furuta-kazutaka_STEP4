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

      //入力を確認する:名前
      if (preg_match("/^[a-zA-Z0-9._\-]+$/", $name)) {
        echo "<p>名前：$name</p>";
    } else {
        echo "<p>名前は半角英数字および一部の記号のみで入力してください</p>";
    }
　　　// 入力チェック：年齢
      if (filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 150]])) {
        echo "<p>年齢：$age</p>";
    } else {
        echo "<p>年齢は0〜150の数値で入力してください</p>";
    }

      // 入力チェック：電話番号
      if (preg_match("/^[0-9\-]+$/", $phone)) {
      echo "<p>電話番号：$phone</p>";
    } else {
      echo "<p>電話番号は数字とハイフンのみで入力してください</p>";
    }

      // 入力チェック：メールアドレス
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<p>メールアドレス：$email</p>";
    } else {
      echo "<p>正しいメールアドレスを入力してください</p>";
    }

      // 入力チェック：住所
      if (!empty($address)) {
      echo "<p>住所：$address</p>";
    } else {
      echo "<p>住所を入力してください</p>";
    }

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
