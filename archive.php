<?php
$styleplaceholder=TD."/assets/css/archive.css";
include 'header.php';
?>
<?php $archiveobject=get_queried_object(); ?>
<h2><?php echo $archiveobject->name;  ?></h2>
<div class="container d-sm-block d-lg-flex" style="align-items: center">
    <div class="row">
        <?php
        if (have_posts()){
        while (have_posts()){
        the_post();
        $postTitle=get_the_title();
        $postID=get_the_id();
        $postThmabnail=get_the_post_thumbnail($postID);
        $postPermalink=get_the_permalink();
        ?>
            <div class="col-lg-4 main">
                <a href="<?php echo $postPermalink;?>">
                    <img class="w-100 h-50 box-img" src="<?php echo $postThmabnail?>
                    <h3 class=mt-5><?php echo $postTitle;?></h3>
                </a>
            </div>
        <?php
        }
        }
        ?>
        </div>
</div>
<?php
include 'footer.php'
?>
