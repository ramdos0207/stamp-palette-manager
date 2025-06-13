<!DOCTYPE html>
<html>

<head>
    <title>スタンプパレット管理ツール</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <h2>スタンプパレット管理ツール</h2>
    <a href="https://q.trap.jp/api/v3/oauth2/authorize?response_type=code&client_id=<?= $_ENV["CLIENT_ID"] ?>" class="btn">traQでログイン</a>
</body>

</html>