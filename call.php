<?php
// استقبال البيانات من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// القيام بما تحتاج إليه هنا، مثل إرسال بريد إلكتروني أو حفظ البيانات في قاعدة البيانات

// الرد بنص نجاح إلى العميل
echo "تم الإرسال بنجاح!";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "imadkhaoua96@gmail.com"; // تحديد بريدك الإلكتروني هنا
    $subject = "رسالة جديدة من $name";
    $body = "اسم: $name\n\nبريد إلكتروني: $email\n\nرسالة:\n$message";

    if (mail($to, $subject, $body)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
