 
  <form action="<?=SITE_PATH?>?cntrl=signup&act=details" method="post">
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
                </div>   -->
                <h2>Create Account</h2>
              
            </div>

            <div class="four columns mobile-two txt-align-right">
              <button title="Close" class="mfp-close"><i class="mfp-close-icn">&times;</i></button>
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
        <h3>Choose How You Want to Register</h3>
          <div class="six columns mobile-two">
              <span>I'm Aspiring Professional</span>
              <?php //($account_type=="NON_PROFESSIONAL") ? "checked='checked'" : "" ?>
              <?php $account_type=$_SESSION["SIGNUP"]["ACCOUNT_TYPE"]["account_type"] ?>
               <input checked="checked" type="radio" name="account_type" value="NON_PROFESSIONAL">
            </div>
            <div class="six columns mobile-two">
              <span>I,m a Professional</span>

               <input <?=($account_type=="PROFESSIONAL") ? "checked='checked'" : "" ?> type="radio" name="account_type" value="PROFESSIONAL">
            </div>
        </div>

        
        <div class="row half-spacer"></div>
        
        <div class="row spacer10">
          <h3>Register With an Existing Account</h3>    
          <div class="six columns mobile-two">
              <a href='javascript:void(0);' class="signup-with-facebook"><img src="<?=IMAGES_PATH?>create_account_facebook.png" class="create-account-social"></a>
            </div>
            <div class="six columns mobile-two">
              <a href='javascript:void(0);' class="signup-with-google"><img src="<?=IMAGES_PATH?>create_account_google.png"  class="create-account-social"></a>
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
              <input type="submit" value="Next" class="" />
            </div>

            <a href="#" class="mfp-close close-magnific-popup">Close</a>
        </div>
        
      
    </div>
<!-- secure -->
<input type="hidden" name="SECURE_TOKEN" value="1234567890" />    
    </form>        
    <!-- <div class="row half-spacer"></div> -->
