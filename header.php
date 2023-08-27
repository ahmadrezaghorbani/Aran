<?php
$value_text_color=get_option('text-color');
$value_header_color=get_option('header-color');
$value_body_color=get_option('body-color');
$value_footer_color=get_option('footer-color');
?>
<html>
<head>

    <?php wp_head() ?>
    <?php if (isset($styleplaceholder)){?>
    <link rel="stylesheet" href="<?php echo $styleplaceholder;}?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" href="<?php echo TD;?>/assets/imags/logo-1-copy.png">
    <link rel="stylesheet" href="<?php echo TD;?>/assets/css/main-css.css">
    <style>
        header{
            background: <?php if($value_header_color){echo $value_header_color;}else{echo "#fff";}?>;
        }
        body{
            background: <?php if($value_body_color){echo $value_body_color;}else{echo "#fff";}?>;
        }
        footer{
            background: <?php if($value_footer_color){echo $value_footer_color;}else{echo "#fff";}?>;
        }
        p{
            color: <?php if($value_text_color){echo $value_text_color;}else{echo "#fff";}?>;
        }
    </style>

</head>
<body>
<!--------- nav menu -------->
<div class="container_fluid">
    <header>
        <nav>
            <div class="row">
                <div class="col-9">
                    <button id="nav_list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                    <?php
                    wp_nav_menu([
                        'theme_location'=>'primary',
                        'container'=>'div',
                        'container_class'=>'menu',
                        'menu_id' => 'menu-list',
                    ]);
                    ?>
                </div>
                <div class="col-3 logo">
                    <?php
                    $logoID=get_option('theme_logo');
                    $logoURL=wp_get_attachment_url($logoID);
                    if($logoURL){
                    ?>
                    <a href="#"><img src="<?php echo $logoURL;?>"></a>
                    <?php } else{?>
                    <a href="#"><img src="<?php echo TD;?>/assets/imags/logo-1-copy.png"></a>
                    <?php }?>
                </div>
            </div>
        </nav>
    </header>
</div>