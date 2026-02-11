<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // البيانات القادمة من الفورم
    $data = [
        "raison" => $_POST["raison"] ?? "",
        "message_client" => $_POST["message_client"] ?? "",
        "message_vendeur" => $_POST["message_vendeur"] ?? "",
        "action" => $_POST["action"] ?? "",
        "note" => $_POST["note"] ?? ""
    ];

    // تحويل البيانات إلى JSON مرتب
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    // حفظ الملف في السيرفر
    file_put_contents("data.json", $jsonData);

    // رسالة نجاح + رجوع للصفحة
    echo "<h2 style='font-family:Arial;color:green;text-align:center;'>
            ✅ Données enregistrées avec succès dans <b>data.json</b>
          </h2>";

    echo "<p style='text-align:center;'>
            <a href='index.html'>⬅ Retour</a>
          </p>";
}
?>
