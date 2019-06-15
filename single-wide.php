<?php
    /*
     * Template Name: Wide Post Template
     * Template Post Type: post
     */
    get_header();
    $displayPost=true;
    $siteRoot=get_site_url();
    if(have_posts()){
        while(have_posts()){
            the_post();
            $pagetitle=get_the_title();
            $pagecontent=get_the_content();
            if(has_category("front_page_events")){
                $displayPost=false;
                include("template-parts/single-content-wide-none.php");
            }
            else{
                include("template-parts/single-content-wide-default.php");   
            }
        }
    }
?>
<?php
    get_footer();
?>