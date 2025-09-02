<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="common/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/contact.css"> 
    <title>Design House Renovations</title>
</head>
<body>
<header>
        <h1>
          <a href="index.php"><img src="images/logo.svg" alt="Design House Renovations"></a>
        </h1>
</header>
<main>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$name = $_POST["name"];
$furigana = $_POST["furigana"];
$tel = $_POST["tel"];
$postcode = $_POST["postcode"];
$address = $_POST["address"];
$mail = $_POST["mail"];
$message = $_POST["message"]; 
} else { 
header("Location: contact.php"); 
} 
?>

<div class="contact">
    <h2>contact</h2>
    <h3 style="color:#333"><hr>お問い合わせフォーム - 確認画面<hr></h3>
    <div class="formSec">
    <p>以下の内容で送信します。<br>よろしいですか？</p>

    <table>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['inquiry'])) {
            $inquiry = $_POST['inquiry'];
            echo 'お問い合わせ内容種別：<span style="font-weight:bold;">' . htmlspecialchars($inquiry, ENT_QUOTES, 'UTF-8') . '</span>';
        }
    }
    ?>
        <br><br>
        <tr><td>名前：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>フリガナ：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($furigana, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>電話番号：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>郵便番号：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($postcode, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>住所：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>メールアドレス：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>メッセージ：</td><td style="font-weight:bold;"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></td></tr>
    </table>
    <form method="post" action="send.php">
        <input type="hidden" name="name" value="<?php echo $inquiry; ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
        <p class="confirmation"><label><input type="submit" value="送信"><span style="color:#fff; font-size:8px;">▶</span></label></p>
    </form>
</div>
<p style="color:red; text-align:center; padding: 20px; font-size:20px; font-weight: bolder;">！　制作演習用です。送信しないでください。！</p>
<button type="button" onclick="history.back()">戻る</button>
</main>
<footer>
    <p><small>&copy; 2023 Design House Renovations</small></p>
</footer>
</body>
</html>