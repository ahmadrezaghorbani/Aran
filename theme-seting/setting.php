<?php
if (isset($_POST['submit'])) {

    if (!empty($_FILES['theme_logo'])) {
        $uploadID = media_handle_upload('theme_logo', 0);
        if (!is_wp_error($uploadID)) {
            update_option('theme_logo', $uploadID);
        }
    }

    if(isset($_POST['url_tel'])){
        $telegram=sanitize_text_field($_POST['url_tel']);
    }

    if(isset($_POST['url_ins'])){
        $inestagram=sanitize_text_field($_POST['url_ins']);
    }

    if ($telegram){
        update_option('telegram_link',$telegram);
    }
        if ($inestagram){
            update_option('inestagram_link',$inestagram);
        }
}
?>
<link rel="stylesheet" href="../assets/css/main-css.css">
<div class="container" style="display: block">
    <h3>تنظیمات قالب</h3>
    <form action="" method="post" enctype="multipart/form-data" style="display: block">
        <label>لوگو سایت</label>
        <input type="file" name="theme_logo" id="theme_logo" accept="image/*">
        <label>لینک تلگرام</label>
        <input type="text" name="url_tel" value="<?php echo get_option('telegram_link')?>" id="url_tel" accept="image/*">
        <label>لینک اینستاگرام</label>
        <input type="text" name="url_ins" value="<?php echo get_option('inestagram_link')?>" id="url_ins" accept="image/*">
        <input type="submit" name="submit" value="ذخیره تغیرات">
    </form>
</div>