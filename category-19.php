<?php
$styleplaceholder=TD."/assets/css/index.css";
include 'header.php';
?>
<div>
    <div class="row m-5">
        <?php if (have_posts()){
            while (have_posts()){
                the_post();
                $more_link_text = 'ادامه‌ی متن'; // متن لینک "ادامه مطلب"
                $strip_teaser = false; // حذف تگ <!--more--> از محتوا
                $content = get_the_content($more_link_text, $strip_teaser);
                $postTitle=get_the_title();
                $postLink=get_the_permalink();
         ?>
        <div class="col-lg-4" style="box-shadow: 0px 0px 19.8px 0.2px rgb(76 85 196 / 8%);
    border-radius: 100% 50%;
    padding: 6.5rem 5rem;
    text-align: center;
    position: relative;
    margin-top: 6rem;
    ">
            <h3><?php echo $postTitle;?></h3>
            <p style="overflow: hidden;
    max-height: 9em; /* تعداد خطوط مورد نظر * ارتفاع یک خط */"><?php echo $content?></p>
            <a href="<?php echo $postLink?>"><svg xmlns="http://www.w3.org/2000/svg" width="10%" height="6%" style="width: 15%; height: 15%"  fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></a>
        </div>

        <?php
            }
        }?>
    </div>
</div>
<?php
include 'footer.php';
?>
