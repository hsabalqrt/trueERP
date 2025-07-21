<?php

$zipFile = __DIR__ . '/sys3.zip'; // مسار الملف المضغوط
$extractTo = __DIR__ . '/';    // المجلد الذي سيتم استخراج الملفات إليه

$zip = new ZipArchive;

if ($zip->open($zipFile) === TRUE) {
    $zip->extractTo($extractTo);
    $zip->close();
    echo 'تم استخراج الملف بنجاح!';
} else {
    echo 'فشل في فتح الملف المضغوط.';
}
