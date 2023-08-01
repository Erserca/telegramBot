function tg($mesaj, $chat_id, $token)
    $ch = curl_init();
    $url = "https://api.telegram.org/bot".$token."/sendmessage";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"chat_id=".$id."&text=".$mesaj);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($tg);
}

// örnek kullanım:

$token = "TELEGRAM BOTUNUZ İÇİN ALDIĞINIZ TOKEN";
$id = "MESAJ GÖNDERECEĞİNİZ CHAT İD BİLGİSİ (GRUPLAR İÇİN DE GRUP CHAT İD BİLGİSİ)";
$mesaj = "Test mesajı!";

tg($mesaj, $id, $token);
