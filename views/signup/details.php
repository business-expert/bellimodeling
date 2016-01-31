  <form action="<?=SITE_PATH?>?cntrl=signup&act=about-you" method="post">
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
                <label>Your First Name</label>
              	<input name="fname" type="text" placeholder="First Name" value="<?=$_SESSION["SIGNUP"]["DETAILS"]["fname"]?>">
                <label>Your Sirname</label>
                <input name="lname" type="text" placeholder="Last Name" value="<?=$_SESSION["SIGNUP"]["DETAILS"]["lname"]?>">
                <label>Your E-Mail Address</label>
                <input name="email" type="text" placeholder="Email Address" value="<?=$_SESSION["SIGNUP"]["DETAILS"]["email"]?>">
                <label>Choose a Password</label>
                <input name="password" type="password" placeholder="Password" value="<?=$_SESSION["SIGNUP"]["DETAILS"]["Password"]?>">
                <label>Confirm Your Password</label>
                <input name="password_confirmation" type="password" placeholder="Password Confirmation" value="<?=$_SESSION["SIGNUP"]["DETAILS"]["password_confirmation"]?>">
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
              <a href="<?=SITE_PATH?>?cntrl=signup&act=account-type"><input type="button" value="Back" class="" /></a>
              <input type="submit" value="Next" class="" />
            </div>
        </div>
    	
      
    </div>
      <!-- secure -->
      <input type="hidden" name="SECURE_TOKEN" value="1234567890" />  
    </form>        
    <!-- <div class="row half-spacer"></div> -->
