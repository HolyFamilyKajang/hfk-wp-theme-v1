<?php
    $randomPostsFilter = array("post_type"=>"post","orderby"=>"rand","posts_per_page"=>5,"category_name"=>"news");
    $randomPosts= new WP_Query($randomPostsFilter);
?>
<div class="content-container py-5">
    <div class="mb-2">
        <a href="<?=$siteRoot?>/news" class="text-black-50 text-decoration-none">
            <i class="fa fa-arrow-circle-left"></i>
            News
        </a>
    </div>
    <h1 class="text-bold text-center"><?=$pagetitle?></h1>
    <?=$pagecontent?>
</div>