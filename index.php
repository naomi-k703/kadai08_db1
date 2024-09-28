<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自己分析</title>

    <!-- CSSファイルのリンク -->
    <link rel="stylesheet" href="style.css">
    <!-- Chart.js CDNのリンク -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- jQueryのCDNリンク -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <!-- Main[Start] -->
    <form action="submit.php" method="post"> <!-- フォームの開始 -->

        <!-- 左右に分かれた情報セクション -->
        <div class="container">
            <!-- 左側のセクション -->
            <div class="left-section">

                <!-- 1. 所属情報（基本情報）セクション -->
                <div class="section affiliation-info">
                    <h2>1. 所属情報（基本情報）</h2>
                    <div class="underline"></div>

                    <!-- 社員番号と連絡先 -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>名前（フルネーム）:</label>
                            <input type="text" name="username"><br>
                        </div>
                        <div class="form-group">
                            <label>社員番号:</label>
                            <input type="text" name="employee_number"><br>
                        </div>
                        <div class="form-group">
                            <label>部署:</label>
                            <input type="text" name="department" placeholder="部署名を入力" required><br>
                        </div>
                    </div>
                    <!-- 名前と性別 -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>役職:</label>
                            <input type="text" name="position" placeholder="役職を入力（例：スタッフ、マネージャー、リーダーなど）" required><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            性別:<select name="gender" required>
                                <option value="">選択してください</option>
                                <option value="男性">男性</option>
                                <option value="女性">女性</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>メールアドレス:</label>
                            <input type="email" name="email"><br>
                        </div>
                    </div>
                    <label>備考:</label>
                    <textarea name="naiyou" cols="30" rows="10"></textarea>
                </div>

                <!-- 3. 過去の経験・キャリアセクション -->
                <div class="section experience">
                    <h2>3. 過去の経験・キャリア</h2>
                    <div class="underline"></div>

                    <div class="form-group">
                        <label>モチベーションの源泉（最大3つ選択）:</label><br>
                        <input type="checkbox" name="options[]" value="達成感"> 達成感<br>
                        <input type="checkbox" name="options[]" value="チームワーク"> チームワーク<br>
                        <input type="checkbox" name="options[]" value="スキルアップ"> スキルアップ<br>
                        <input type="checkbox" name="options[]" value="社会貢献"> 社会貢献<br>
                        <input type="checkbox" name="options[]" value="報酬"> 報酬<br>
                        <input type="checkbox" name="options[]" value="挑戦"> 挑戦<br>
                    </div>

                    <input type="submit" value="Submit">
                </div>
            </div>
        </div>

    </form> <!-- フォームの終了 -->
</body>

</html>

