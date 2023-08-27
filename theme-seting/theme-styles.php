<?php
if (isset($_POST['submit'])){
$textColor=isset($_POST['text-color'])?sanitize_text_field($_POST['text-color']):'';
$headerColor=isset($_POST['header-color'])?sanitize_text_field($_POST['header-color']):'';
$bodyColor=isset($_POST['body-color'])?sanitize_text_field($_POST['body-color']):'';
$footerColor=isset($_POST['footer-color'])?sanitize_text_field($_POST['footer-color']):'';
update_option('text-color',$textColor);
update_option('header-color',$headerColor);
update_option('body-color',$bodyColor);
update_option('footer-color',$footerColor);
}
$value_text_color=get_option('text-color');
$value_header_color=get_option('header-color');
$value_body_color=get_option('body-color');
$value_footer_color=get_option('footer-color');

?>
<div class="container">
    <h3>استایل های قالب</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
        <label>رنگ متن ها</label>
        <input type="color" name="text-color" value="<?php echo $value_text_color?>">
        </div>
        <div>
        <label>رنگ زمینه header</label>
        <input type="color" name="header-color" value="<?php echo $value_header_color?>">
        </div>
        <div>
        <label>رنگ زمینه سایت</label>
        <input type="color" name="body-color" value="<?php echo $value_body_color?>">
        </div>
        <div>
        <label>رنگ زمیه footer</label>
        <input type="color" name="footer-color" value="<?php echo $value_footer_color?>">
        </div>
        <div>
            <input type="submit" name="submit" value="ذخیره تغیرات">
        </div>
    </form>
</div>

