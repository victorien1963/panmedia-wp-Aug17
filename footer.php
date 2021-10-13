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
            <td><a href="https://pansci.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/pansci-icon.png"></a></td>
            <td><a href="https://PanX.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/panx-icon.png"></a></td>
            <td><a href="https://pangogo.com/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/Pangogo-icon-2.png"></a></td>
            <td><a href="https://punchline.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/Punchline-icon.png"></a></td>
            <td><a href="https://taster.life/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/Taster-icon-2.png"></a></td>
            <td><a href="https://pantravel.life/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/Pantravel-icon-2.png"></a></td>
            <td><a href="https://student.pansci.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/PanStudent-icon.png"></a></td>
            <td><a href="https://panschool.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/Panschool-icon.png"></a></td>
            <td><a href="https://panmarket.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/PanMarket-icon.png"></a></td>
            <td><a href="https://events.panmedia.asia/" type="button" target="_blank"><img src="<?echo $img_path;?>icons/PanEvents-icon.png"></a></td>
            <td><a href="https://pansci.asia/archives/118585" type="button" target="_blank"><img src="<?echo $img_path;?>icons/PanRead-icon.png"></a></td>
          </tr>

          <tr>
            <td><p>泛科學</p></td>
            <td><p>泛科技</p></td>
            <td><p>知識購</p></td>
            <td><p>娛樂重擊</p></td>
            <td><p>美食加</p></td>
            <td><p>旅飯</p></td>
            <td><p>科學生</p></td>
            <td><p>泛科學院</p></td>
            <td><p>泛科市集</p></td>
            <td><p>泛科活動</p></td> 
            <td><p>泛讀</p></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <div class="row footer-cyan">

    <!--社群頻道-->
    <div class="col-lg-4 col-12 ps-lg-5 ps-3">
      <p class="text-white-lg"><?php echo get_field('Footer2-title','option'); ?></p>
      <div class="socialmedia-icons">
        <a href="<?php echo get_field('Footer2-link-fb','option'); ?>" class="fab fa-youtube" target="_blank"></a>
        <a href="<?php echo get_field('Footer2-link-ig','option'); ?>" class="fab fa-instagram" target="_blank"></a>
        <a href="<?php echo get_field('Footer2-link-line','option'); ?>" class="fab fa-line" target="_blank"></a>
        <a href="<?php echo get_field('Footer2-link-podcast','option'); ?>" class="fas fa-podcast" target="_blank"></a>
        <a href="<?php echo get_field('Footer2-link-spotify','option'); ?>" class="fab fa-spotify" target="_blank"></a>
      </div>
    </div>

    <!--創客基地-->
    <div class="col-lg-4 col-12 ps-lg-5 ps-3">
      <p class="text-white-lg"><?php echo get_field('Footer3-title','option'); ?></p>
        <div class="mark-link text-white row px-0">
          <div class="col-lg-12 col-4" href="<?php echo get_field('Footer3-title_link1_url','option'); ?>" type="button" target="_blank"><?php echo get_field('Footer3-title_link1','option'); ?></div>
          <div class="col-lg-12 col-4" href="<?php echo get_field('Footer3-title_link2_url','option'); ?>" type="button" target="_blank"><?php echo get_field('Footer3-title_link2','option'); ?></div>
          <div class="col-lg-12 col-4" href="<?php echo get_field('Footer3-title_link3_url','option'); ?>" type="button" target="_blank"><?php echo get_field('Footer3-title_link3','option'); ?></div>
        </div>
      </div>

    <!--加入我們-->
    <div class="col-lg-4 col-12 join-us ps-lg-5 ps-3">
      <a href="<?php echo get_field('Footer4-link','option'); ?>" class="fas fa-hand-point-right text-white-lg mt-2" target="_blank"> <?php echo get_field('Footer4-title','option'); ?></a>
      <p class="text-white">
        <?php echo get_field('contact_mail','option'); ?><br/>
        <?php echo get_field('contact_numbers','option'); ?><br/>
        <?php echo get_field('contact_add','option'); ?>
      </p>
    </div>            
  </div>

  <div class="row footer-blue">
    <div class="col-12 text-center">
      <p>CopyRights © 2021 PanMedia All rights reserved.</p>
    </div>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>