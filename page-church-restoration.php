<?php
    get_header();
    $Filter = array("category_name"=>"fundact","order"=>"ASC","posts_per_page"=>200);
    $Array = get_posts($Filter);
    $Filter = array("category_name"=>"techdetails","order"=>"ASC","posts_per_page"=>200);
    $Array2 = get_posts($Filter);
    $themeRoot = get_template_directory_uri();
?>
<script>
    $(document).ready(function(){
        $(".bec-card").on("click",function(){
            $(this).siblings(".bec-card").removeClass("opened");
            $(this).toggleClass("opened");
			
        })
    })
    
</script>
<div>
    <img src="<?=$themeRoot?>/assets/churchrestab.jpg" class="w-100"/>
</div>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Fundraising Activities</h1>
    <div class="list-group">
    <?php
        if($Array){
            foreach($Array as $Info):setup_postdata($Info);
                $postTitle=$Info -> post_title;
                $postContent=$Info -> post_content;
                include("template-parts/bec-card.php");
            endforeach;
        }
    ?>
    </div>
</div>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Restoration Works</h1>
    <div class="list-group">
    <?php
        if($Array){
            foreach($Array2 as $Info):
                setup_postdata($Info);
                $postTitle=$Info -> post_title;
                $postContent=$Info -> post_content;
                include("template-parts/bec-card.php");
            endforeach;
        }
    ?>
    </div>
</div>

<?php
    get_footer();
?>