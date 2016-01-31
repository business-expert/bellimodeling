  <form action="<?=SITE_PATH?>?cntrl=signup&act=terms-of-use" method="post">
  <div class="modal-upper">
      <div class="row half-spacer hide-for-small"></div>
        <div class="row quarter-spacer show-for-small"></div>
      <div class="row modal-header">
          	<!-- <div class="four columns mobile-one">
              <img src="icons/lock.png" class="right">
            </div> -->
            <div class="twelve columns mobile-three">
             <!--  <h2>Create Account</h2> -->

             <div class="four columns mobile-two">
              	<a href="<?=IMAGES_PATH?>icons-two/tour_video_male.png" class="view-tower">View Tower ></a>
            </div>

            <div class="four columns mobile-two txt-align-center">
            	<!-- <div class="two columns mobile-one">
            		<img src="<?php//IMAGES_PATH?>icons/lock.png" class="right">
            	</div>	
            	<div class="two columns mobile-three">
            			<h2>Create Account</h2>
            	</div>	 -->
            	<h2>Create Account</h2>
              
            </div>

            <div class="four columns mobile-two txt-align-right">
              <a id="" class="snm-fancybox-close" style="display: inline;"></a>
            </div>
           


            </div>
        </div>
    </div>
    <div class="modal-upper-shadow"></div>
    <div class="row triple-spacer"></div>
    <div class="row">
      <div class="nine columns centered">
        <!-- INNER MODAL CONTENT GOES HERE -->
        
        <div class="row">
        <h3>The information is required to register</h3>
          <div class="ten columns centered">
                <label>Enter Your Website,s Address</label>
              	<input name="web_links[title]" type="text" placeholder="You Can Enter Your Website Here" value="<?=$_SESSION["SIGNUP"]["ABOUT_YOU"]["web_links"]["title"]?>">
              	<label class="required_msg">This information is required to register</label>

                <label>What's Your Profession</label>
                <input name="profession_credits[title]" id="profession_credits_title" type="text" placeholder="Are You an Actor, Model, Singer" value="<?=$_SESSION["SIGNUP"]["ABOUT_YOU"]["profession_credits"]["title"]?>">
                <label class="required_msg">This information is required to register</label>
                <label>What's Your Best Talents</label>
                <input name="talents" type="text" placeholder="Your Best Talent" value="<?=$_SESSION["SIGNUP"]["ABOUT_YOU"]["talents"]?>">
                <label class="required_msg">For Example, are you great at autions?</label>

                <label>What Are You Interested In?</label>
                <ul class="block-grid four-up mobile select_interests_container">
                        <?= $HTML->get_interest_list_as_li($_SESSION["SIGNUP"]["ABOUT_YOU"]["interests"]); ?>
                          <!-- <li>Four-up element</li>
                          <li>Four-up element</li>
                          <li class="selected">Four-up element</li>
                          <li>Four-up element</li>
                          <li class="selected">Four-up element</li>
                          <li>Four-up element</li> -->
                        </ul>
                        <input type="hidden" class="interests" name="interests" value="" />
                        <input type="text" class="expand" placeholder="Add new interest">
               <!-- <a href="/edit-profile" class="button medium expand radius">Create Account</a> -->
            </div>
        </div>
        
        <!-- END INNER MODAL CONTENT -->
        </div>
    </div>
    <div class="row triple-spacer"></div>
    <div class="modal-lower">

    	<div class="row">      
          	<div class="six columns mobile-two">
              <a href="<?=SITE_PATH?>?cntrl=signin&act=signin">Already Have Account ></a>
            </div>
            <div class="six columns mobile-two">
              <a href="<?=SITE_PATH?>?cntrl=signup&act=details"><input type="button" value="Back" class="" /></a>
              <input type="submit" value="Next" class="" />
            </div>
        </div>
    	
      
    </div>
      <!-- secure -->
      <input type="hidden" name="SECURE_TOKEN" value="1234567890" />     
    </form>        
    <!-- <div class="row half-spacer"></div> -->
