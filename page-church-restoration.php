<?php
    get_header();
    $Filter = array("category_name"=>"fundact","order"=>"ASC","posts_per_page"=>200);
    $Array = get_posts($Filter);
    $Filter = array("category_name"=>"techdetails","order"=>"ASC","posts_per_page"=>200);
    $Array2 = get_posts($Filter);
    $themeRoot = get_template_directory_uri();
    $siteRoot = get_site_url();
?>
<script>
    $(document).ready(function(){
        
    })
    
</script>
<!---<div>
<img src="/assets/churchrestab.jpg" class="w-100"/>
</div>--->
<!---<div style="background-color:#c6e5d6">
    <div class="content-container content-container-stretch">
        <img src="/assets/churchrestab.jpg" class="w-100"/>
    </div>
</div>--->
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Church Restoration</h1>
    <h3 class="text-bold text-center mb-4">How can I help?</h3>
    <div class="mb-4">
        <img src="<?=$themeRoot?>/assets/pledge-infor.jpg" class="w-100"/>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="text-bold">Pledge Contributions</h5>
                    <div>
                        Pledge contributions are collected by your Zone or BEC leaders. Follow the instructions on the infographic above.
                    </div>
                    <div>
                    
                    </div>
                </div>
                <div class="card-footer text-bold">
                    Target: RM 300,000
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="text-bold">Donations and Sponsors</h5>
                    <div>
                        A donation box is available <a href="#">outside the church at the foyer</a>
                    </div>
                </div>
                <div class="card-footer text-bold">
                    Target: RM 350,000
                </div>
            </div>
        </div>
    </div>
    <div class="list-group">
    <?php
        /*if($Array){
            foreach($Array as $Info):setup_postdata($Info);
                $postTitle=$Info -> post_title;
                $postContent=$Info -> post_content;
                include("template-parts/bec-card.php");
            endforeach;
        }*/
    ?>
    </div>
</div>

<div class="content-container py-5">
    <h3 class="text-bold text-center mb-4">What do we plan to fix?</h3>
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