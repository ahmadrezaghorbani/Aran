<?php
$styleplaceholder=TD."/assets/css/single.css";
include 'header.php';
if (have_posts()){
    while (have_posts()){
        the_post();
        $postTitle=get_the_title();
        $postID=get_the_id();
        $postTumbnail=get_the_post_thumbnail($postID);
    }
}
?>
    <section>
        <h2><?php echo $postTitle; ?></h2>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="img-box" >
                    <img width="600" height="400" src="<?php echo $postTumbnail; ?>
                </div>
                <span><?php the_date('F j, Y'); ?></span>
                <h4><?php echo $postTitle; ?></h4>
                <div class="text-box">
                    <?php
                    the_content();
                    ?>
                </div>
                <?php
                comments_template();
                ?>
            </div>
            <div class="col-lg-4 px-5">
                <?php
                if (is_active_sidebar('sidebar_col_4')){
                    dynamic_sidebar('sidebar_col_4');
                }
                ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'?>