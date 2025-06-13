<?php
session_start();

$url = 'https://q.trap.jp/api/v3/stamp-palettes';

$array = ["0194f870-450c-7f06-8696-c5c80210ca4d", "037f37fd-1a54-41a7-aa5c-5d1b00d3b714", "099ef742-c9de-4b8f-9201-82acfad96521", "0b5d22ce-dee2-42f9-98a4-6038ac69521a", "0cee1804-3a79-4ce0-b7d8-0c60a36cd6d9", "131464b7-5cb2-40f0-8cc4-fb71b6292980", "1a9c7717-053b-4fb1-acb8-7f23e9b37854", "1c891de7-e68c-4aa5-9cce-28f0ca74522c", "1dcda7cd-7824-43fb-9e1d-6bb8602910d4", "20a7034b-e095-486b-aade-70f236b1ec14", "26ba5f47-f6ad-4000-9c7c-d65e45da3328", "402c60bb-7452-4a34-baef-d27dda10f471", "46d1f4f8-6c21-47d9-8e8a-6536a7b0f4df", "494d0ebd-8ae0-4145-8932-6ea630166fb9", "4e7e3747-168a-4249-b485-91fabe390043", "58a6e925-b3a1-43dd-a30f-8a2b2085950f", "6308a443-69f0-45e5-866f-56cc2c93578f", "6d7df3bf-f2cf-47b3-841c-75711fb5fad4", "6f23c19d-f1a1-4deb-9e4f-b182c13aeccc", "8940a6d9-8c35-48a9-87e3-88ed6a779b4b", "8aa46d09-6243-485d-937f-b43ba900a3fe", "8b9d2d4f-a9cd-48de-9fc4-cd43ddf52e14", "97d8b59f-2ecb-4c7f-990a-f6be4b45bcc0", "a1d92d72-4e31-43df-bd53-80000e7cfc25", "b3883f9f-1efe-40ee-9d66-5f0615a3bfb7", "b5071490-fa62-4b03-9d82-b85172e9cf62", "bf5b0f20-c224-45de-9ecc-3b768a0aabde", "c746e275-e0a1-42a3-bf69-d64c8a8769fe", "ca329a82-028c-4180-b66b-92de5a025016", "cff4fc64-e227-452f-8936-5041666088b6", "de4b7156-ebc8-46eb-919f-b10ef96b0b54", "e77c3b8a-9ac2-45b1-b16b-11b1f3dcbc31", "ea41ed1e-455a-4902-95ad-b1fb39570f72", "fe8966e9-a594-4563-88cd-fb38d86bc771"];

$data = json_encode(array(
    'stamps' => $array,
    'name' => "オススメスタンプパレット",
    'description' => 'スタンプパレット管理ツールにより生成されたスタンプパレット',
));

echo $data;
$context = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => implode("\r\n", array('accept: */*', 'Authorization: Bearer ' . $_SESSION['token'], 'Content-Type: application/json',)),
        'content' => $data,
    )
);

$data = file_get_contents($url, false, stream_context_create($context));
