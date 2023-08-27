<?php
$styleplaceholder=TD."/assets/css/page.css";
include 'header.php';
if (have_posts()){
    while (have_posts()){
        the_post();
        $postTitle=get_the_title();
        $postID=get_the_id();
    }
}
?>
    <section>
        <h3><?php echo $postTitle; ?></h3>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="img-box" >
                </div>
                <h4><?php echo $postTitle; ?></h4>
                <div class="text-box">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
            <div class="col-lg-4 px-5">
                <?php
                if (is_active_sidebar('page_sidebar_col_4')){
                    dynamic_sidebar('page_sidebar_col_4');
                }
                ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'?>