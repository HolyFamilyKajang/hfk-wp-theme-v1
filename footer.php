<?php
    $siteRoot=get_site_url();
?>
        <div class="pagefooter border-top py-3 text-lg-left text-md-left text-sm-center text-center">
            <div class="content-container">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                        <div class="text-bold">Email</div>
                        <div>hfckajang@gmail.com</div>
                        <div class="text-bold">Phone Number</div>
                        <div>+603 87331154</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                        <div class="text-bold">Follow Us</div>
                        <div>
                            <a href="https://www.facebook.com/HolyFamilyKajang/">Facebook</a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/holyfamilykajang/">Instagram</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                        <div class="text-bold">About Us</div>
                        <div>
                            <a href="<?=$siteRoot?>/our-priests">Our Priests</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/parish-pastoral-council">Parish Pastoral Council</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/parish-coordinating-council">Parish Coordinating Council</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/parish-finance-council">Parish Finance Council</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/parish-history">Parish History</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/parish-vision">Parish Vision</a>
                        </div>
                        <div>
                            <a href="https://www.google.com.my/maps/place/Church+of+The+Holy+Family+(1899)/@2.988675,101.7883941,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdcb838c6da811:0xa716824c78151353!8m2!3d2.988675!4d101.7905828?hl=en&authuser=0">Our Location</a>
                        </div>
                        <div>
                            <a href="<?=$siteRoot?>/our-logo">Our Logo</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                        <div class="text-bold">Resources</div>
                        <div>
                            <a href="http://www.heraldmalaysia.com/">The Herald</a>
                        </div>
                        <div>
                            <a href="http://www.scborromeo.org/ccc.htm">Catechism of the Catholic Church</a>
                        </div>
                        <div>
                            <a href="https://www.catholic.org/bible/daily_reading/">Daily Bible Readings</a>
                        </div>
                        <div>
                            <a href="https://www.franciscanmedia.org/sacraments/">The 7 Sacraments</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                        <div class="text-bold">Fund Raising</div>
                        <div>
                            <a href="<?=$siteRoot?>/church-restoration">Church Restoration</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container text-center text-bold fs-80pc">
                Copyright <i class="fa fa-copyright"></i> 2019  Holy Family Church Kajang
            </div>
        </div>
        <div class="modal fade" id="SmallMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered rounded-0" role="document">
                <div class="modal-content rounded-0 text-center text-bold">
                    <div class="list-group">
                        <a href="<?=$siteRoot?>/" class="list-group-item">Home</a>
                        <a href="<?=$siteRoot?>/news" class="list-group-item">News</a>
                        <a href="<?=$siteRoot?>/clusters" class="list-group-item">Clusters</a>
                        <a href="<?=$siteRoot?>/bulletin" class="list-group-item">Bulletin</a>
                        <a href="<?=$siteRoot?>/bec" class="list-group-item">BEC</a>
                        <a href="<?=$siteRoot?>/calendar" class="list-group-item">Calendar</a>
                        <a href="<?=$siteRoot?>/forms" class="list-group-item">Forms</a>
                        <a href="<?=$siteRoot?>/contact-us" class="list-group-item">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
<?php if(is_front_page()): ?>
		<div class="modal fade" id="myModal" >
		  <div class="modal-dialog">
			<div class="modal-content" style="background-color: transparent; border:none;" >

			  <!-- Modal Header -->
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" style="color:lightgrey;">&times;</button>
			  </div>

			  <!-- Modal body -->
			  <div class="modal-body">
				<img src="http://www.hfckajang.org.my/wp-content/uploads/2019/05/change-in-venue.jpg" class="w-100">
			  </div>
			</div>
		  </div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#myModal').modal('show');
			});
		</script>
<?php endif;?>
    </body>
</html>
