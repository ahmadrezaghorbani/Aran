<?php
$styleplaceholder=TD."/assets/css/search.css";
include 'header.php';?>
<div class="container">
    <div class="row">
    <?php
    if (have_posts()){
        while(have_posts()){
            the_post();
            $postTitle=get_the_title();
            $postID=get_the_id();
            $postTumbnail=get_the_post_thumbnail($postID);
            $postPermalink=get_the_permalink();
    ?>
        <div class="col-lg-3">
            <a style="color: #28303d;text-decoration: none" href="<?php echo $postPermalink;?>">
            <img class="img-box" src="<?php echo $postTumbnail?>
            <h4><?php echo $postTitle ?></h4></a>
        </div>
    <?php
        }
    }
    ?>
    </div>
</div>
<?php include 'footer.php'?>
