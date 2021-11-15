<?php
$img_path = VB_THEME_URI.'src/imgs/';
?>
<!-- Footer -->
    <div class="container-fluid px-0">

<!--媒體平台-->
  <div class="row footer-green">
    <div class="col-lg-4 col-12 ps-lg-5 ps-4">
      <p class="text-white-lg">媒體平台</p>
      <p class="text-white">台灣最受知識社群歡迎的新媒體公司，我們致力於建立一個新的學習生態，讓天下沒有難學的知識。</p>
    </div>

    <div class="col-lg-8 col-12 footer-icons-table">
      <table class="table">
        <tbody>
          <tr>
            <td><a href="<?php echo get_field('footer1-icon1-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon1','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon2-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon2','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon3-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon3','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon4-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon4','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon5-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon5','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon6-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon6','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon7-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon7','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon8-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon8','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon9-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon9','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon10-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon10','option'); ?>"></a></td>
            <td><a href="<?php echo get_field('footer1-icon11-url','option'); ?>" target="_blank"><img src="<?php echo get_field('footer1-icon11','option'); ?>"></a></td>
          </tr>

          <tr>
            <td><p><?php echo get_field('footer1-icon1-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon2-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon3-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon4-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon5-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon6-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon7-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon8-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon9-text','option'); ?></p></td>
            <td><p><?php echo get_field('footer1-icon10-text','option'); ?></p></td> 
            <td><p><?php echo get_field('footer1-icon11-text','option'); ?></p></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <div class="row footer-cyan">

    <!--社群頻道-->
    <div class="col-lg-4 col-12 ps-lg-5 ps-3">
      <p class="text-white-lg"><?php echo get_field('footer2-title','option'); ?></p>
      <div class="socialmedia-icons">
        <a href="<?php echo get_field('footer2-link-fb','option'); ?>" class="fab fa-youtube" target="_blank"></a>
        <a href="<?php echo get_field('footer2-link-ig','option'); ?>" class="fab fa-instagram" target="_blank"></a>
        <a href="<?php echo get_field('footer2-link-line','option'); ?>" class="fab fa-line" target="_blank"></a>
        <a href="<?php echo get_field('footer2-link-podcast','option'); ?>" class="fas fa-podcast" target="_blank"></a>
        <a href="<?php echo get_field('footer2-link-spotify','option'); ?>" class="fab fa-spotify" target="_blank"></a>
      </div>
    </div>

    <!--創客基地-->
    <div class="col-lg-4 col-12 ps-lg-5 ps-3">
      <p class="text-white-lg"><?php echo get_field('footer3-title','option'); ?></p>
        <div class="mark-link text-white row px-0">
          <a class="col-lg-12 col-4" href="<?php echo get_field('footer3-title_link1_url','option'); ?>" target="_blank"><?php echo get_field('Footer3-title_link1','option'); ?></a>
          <a class="col-lg-12 col-4" href="<?php echo get_field('footer3-title_link2_url','option'); ?>" target="_blank"><?php echo get_field('Footer3-title_link2','option'); ?></a>
          <a class="col-lg-12 col-4" href="<?php echo get_field('footer3-title_link3_url','option'); ?>" target="_blank"><?php echo get_field('Footer3-title_link3','option'); ?></a>
        </div>
      </div>

    <!--加入我們-->
    <div class="col-lg-4 col-12 join-us ps-lg-5 ps-3">
      <a href="<?php echo get_field('footer4-link','option'); ?>" class="fas fa-hand-point-right text-white-lg mt-2" target="_blank"> <?php echo get_field('Footer4-title','option'); ?></a>
      <p class="text-white text-decoration-none">
        <?php echo get_field('contact_mail','option'); ?><br/>
        <?php echo get_field('contact_numbers','option'); ?><br/>
        <?php echo get_field('contact_add','option'); ?>
      </p>
    </div>            
  </div>

  <div class="row footer-blue">
    <div class="col-12 text-center">
      <p><?php echo get_field('footer_copyrights','option'); ?></p>
    </div>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>