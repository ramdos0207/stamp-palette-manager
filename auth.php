<?php
session_start();
if (isset($_GET['code'])) {
    $url = 'https://q.trap.jp/api/v3/oauth2/token';

    $data = array(
        'grant_type' => 'authorization_code',
        'client_id' => $_ENV["CLIENT_ID"],
        'code' => $_GET['code'],
    );

    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($data)
        )
    );

    $response = json_decode(file_get_contents($url, false, stream_context_create($context)), true);

    session_regenerate_id();
    $_SESSION['token'] = $response['access_token'];

    header('Location: editor.php');
} else {
    echo "ログインに失敗しました";
}
