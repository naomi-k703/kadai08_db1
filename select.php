<?php
// 1. DB接続


//DB接続用の関数

  try {
    $db_name =  '------';            //データベース名
    $db_host =  '------';  //DBホスト
    $db_id =    '------';                //アカウント名(登録しているドメイン)
    $db_pw =    '------';           //さくらサーバのパスワード

    $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
    $pdo = new PDO($server_info, $db_id, $db_pw);

    // return $pdo;
  } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
  }
// }

//SQLエラー用の関数
function sql_error($stmt)
{
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('SQLError:' . $error[2]);
}

// 2. データ取得SQL
$sql = "SELECT * FROM gs_an_table_TEST";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// 3. データ表示
if ($status == false) {
  $error = $stmt->errorInfo();
  exit("SQL_ERROR: " . $error[2]);
}

// 全データ取得
$values = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($values, JSON_UNESCAPED_UNICODE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  div { padding: 10px; font-size: 16px; }
  td { border: 1px solid red; }
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  <div class="container jumbotron">
    <table>
      <tr>
        <th>Username</th>
        <th>Employee Number</th>
        <th>Department</th>
        <th>Position</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Naiyou</th>
        <th>Options</th>
      </tr>
      <?php foreach ($values as $value) { ?>
        <tr>
          <td><?= htmlspecialchars($value["username"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["employee_number"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["department"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["position"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["gender"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["email"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["naiyou"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($value["options"], ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</div>
<!-- Main[End] -->


<script>
  // JSON受け取り
  const jsonString = '<?= addslashes($json) ?>';
  const data = JSON.parse(jsonString);
  console.log(data);
</script>

</body>
</html>
