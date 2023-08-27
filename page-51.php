<?php

$styleplaceholder=TD."/assets/css/page.css";
include 'header.php';

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $postTitle=get_the_title();
        $postID=get_the_id();
        $postTumbnail=get_the_post_thumbnail($postID);
    }
}
?>
<style>
    .parallax-item{
        direction: rtl;
        align-items: start;
    }
</style>
    <div class="container my-5">
        <h3><?php echo $postTitle?></h3>
        <div class="row">
            <div class="col-lg-6 comment">
            <?php
            the_content();
            ?>
            </div>
            <div class="col-lg-6">
                <section id="parallax">
                    <div class="container">
                            <div class="parallax-item">
                                <span>کدپستی:</span>
                                <span>123456</span>
                            </div>
                            <div class="parallax-item">
                                <span>تلفن:</span>
                                <span>123456</span>
                            </div>
                            <div class="parallax-item">
                                <span>فکس:</span>
                                <span>123456</span>
                            </div>
                            <div class=" parallax-item">
                                <span>ایمیل:</span>
                                <span>ahmadrezakhalkhal123@gmail.com</span>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>