<?php
if(isset($_REQUEST['filename'])) {
    // دریافت نام فایل از پارامتر و اضافه کردن فرمت .json
    $filename = $_REQUEST['filename'] . '.json';

    if(file_exists($filename)) { // بررسی وجود فایل
        if(unlink($filename)) { // حذف فایل
            echo "با موفقیت حذف شد.";
        } else {
            echo "خطا در حذف فایل.";
        }
    } else {
        echo "فایل وجود ندارد.";
    }
} else {
    echo "Eror";
}
?>