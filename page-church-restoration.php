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
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="text-bold">Pledge Contributions</h5>
                    <div>
                        Pledge contributions are collected by your Zone or BEC leaders. Follow the instructions on the infographic above.
                    </div>
                    <div>
                    
                    </div>
                </div>
                <div class="card-footer">
                    <h5 class="text-bold">Target: RM 300,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="text-bold">Donations and Sponsors</h5>
                    <p>
                        A donation box is available <a href="#">outside the church at the foyer</a>
                    </p>
                    <p>
                        Cash and cheques can be put into the donation box. If you would like a receipt, please make your donation at the church office.
                    </p>
                    <div>
                        <p>Online banking transfers and cheques can also be made to:</p>
                        <div style="font-style:italic">
                            <b>Church of the Holy Family</b>
                            <br>
                            186-201-200340-4
                            <br>
                            AmBank
                            <br>
                            Payment Reference: HFK Restoration Fund
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5 class="text-bold">Target: RM 350,000</h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-bottom-fix">
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="text-bold">Important Notes</h5>
                    <p>Any contributions, donations or sponsorships made using online banking MUST use the reference code of <b>"HFK Restoration Fund"</b> without the quotation marks.</p>
                    <p>The pledge card is for <b>internal circulation ONLY</b>.</p>
                    <div>
                        Any donors contributing <b>a lump sum of RM25,000.00 and above</b>, 
                        kindly proceed to the church office to make your donation, as we would require your particulars in accordance with the Anti Money Laundering Act (AMLA).
                    </div>
                    
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
<div class="content-container pb-5">
    <h3 class="text-bold text-center mb-4">What do we plan to do?</h3>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Change the exisiting 14 units of ceiling type split air-conditioning units
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM350,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Paint the entire church building, and include flat roof water-proofing
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM100,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Renovate the sanctuary walls with suitable cladding materials
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM50,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Upgrade the chapel
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM50,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Change Audio Visual (AV) equipment due to wear and tear
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM50,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Repair and re-shellac the existing pews
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM30,000</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <div class="card rounded-0 h-100">
                <div class="card-body">
                    <h5 class="mb-0">
                        Repair and re-premix church carpark and driveway area
                    </h5>
                </div>
                <div class="card-footer">
                    <h5 class="mb-0 text-bold">Estimated Cost: RM103,000</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group">
    <?php
        /*if($Array){
            foreach($Array2 as $Info):
                setup_postdata($Info);
                $postTitle=$Info -> post_title;
                $postContent=$Info -> post_content;
                include("template-parts/bec-card.php");
            endforeach;
        }*/
    ?>
    </div>
</div>
<div class="pb-5">
    <div class="content-container">
        <h3 class="text-bold text-center mb-4">Thank you for supporting our cause</h3>
        <div>
            <img src="<?=$themeRoot?>/assets/churchrestab.jpg" class="w-100"/>
        </div>
    </div>
</div>
<?php
    get_footer();
?>