<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォーム入力</title>
  <link rel="stylesheet" href="/style.css?v=2">
</head>
<body>
  <h1>フォーム入力</h1>
  <form action="conform.php" method="post">
    <label for="name">名前：</label>
    <input type="text" id="name" name="name" required><br>

    <label for="age">年齢：</label>
    <input type="number" id="age" name="age" min="0" max="150" required><br>

    <label for="phone">電話番号：</label>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="email">メールアドレス：</label>
    <input type="email" id="email" name="email" required><br>

    <label for="address">住所：</label>
    <input type="text" id="address" name="address" required><br>

    <label for="question">質問：</label>
    <input type="text" id="question" name="question"><br>

    <label for="gender">性別：</label>
    <select id="gender" name="gender" required>
      <option value="男性">男性</option>
      <option value="女性">女性</option>
    </select><br>

    <button type="submit">送信</button>
  </form>
</body>
</html>
