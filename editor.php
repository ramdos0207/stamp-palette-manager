<!DOCTYPE html>
<html>

<head>
    <title>スタンプパレット管理ツール</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script>
        function sendData(data) {

            const XHR = new XMLHttpRequest();
            const urlEncodedDataPairs = [];
            for (const [name, value] of Object.entries(data)) {
                urlEncodedDataPairs.push(
                    `${encodeURIComponent(name)}=${encodeURIComponent(value)}`,
                );
            }
            const urlEncodedData = urlEncodedDataPairs.join("&").replace(/%20/g, "+");
            XHR.addEventListener("load", (event) => {
                alert("スタンプパレットを追加しました");
            });
            XHR.addEventListener("error", (event) => {
                alert("失敗しました");
            });
            XHR.open("POST", "manager.php");
            XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            XHR.send(urlEncodedData);
            alert("スタンプパレットを追加中です");
        }
    </script>
</head>

<body>
    <h1>スタンプパレット管理ツール</h1>
    <p><span class="btn" onclick="sendData({'id':0})">オススメスタンプパレットを登録する！</span></p>


</html>