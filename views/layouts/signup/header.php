<div class="container header">
    <div class="left">
      <a href="./" class="header_container_logo_anchor">
        <img src="<?=IMAGES_PATH?>main_logo.png">
      </a>
    </div>
    <div class="right">
      <a href="./" class="header_container_social_anchor"><img src="<?=IMAGES_PATH?>header_icon_profile.png"></a>
      <a href="./" class="header_container_social_anchor"><img src="<?=IMAGES_PATH?>header_icon_pinterest.png"></a>
      <a href="./" class="header_container_social_anchor"><img src="<?=IMAGES_PATH?>header_icon_googleplus.png"></a>
      <a href="./" class="header_container_social_anchor"><img src="<?=IMAGES_PATH?>header_icon_twitter.png"></a>
      <a href="./" class="header_container_social_anchor"><img src="<?=IMAGES_PATH?>header_icon_facebook.png"></a> 
    </div>
    <div class="clear"></div>
</div>

<!-- InstanceBeginEditable name="ContentArea" -->
<!-- -->
<div class="container hero">
  <div class="row hide-for-small">
      <div class="five columns">
            <div class="row double-spacer"></div>
            <h2 class="text-medium text-white text-center">Have you ever wondered how to communicate with your favorite celebrities?</h2>
                <div class="hero-spacer"></div>
                <div class="row">
                  <div class="nine columns centered">
                    <div class="center"><p class="text-white">
                      <a href="/tour" class="tour">Take a Tour</a><span class="hero-or">or</span>
                      <?php 
                      if($FACEBOOK->status())
                      {
                          $url = $FACEBOOK->signout_path();
                          $profile = $FACEBOOK->profile();
                          $what = "Sign Out";
                      }                      
                      else
                      {
                           $url = $FACEBOOK->signin_path();
                           $what = "Sign Up";
                      } 
                      ?>
                      <a href="<?=$url?>" class="button small round four" data-reveal-id="createaccountModal"><?=$what?></a>
                    </p>

                  </div>
                    </div>
                </div>
        </div>
        <div class="seven columns">
          <img src="<?=IMAGES_PATH?>background.png">
        </div>
    </div>
</div>