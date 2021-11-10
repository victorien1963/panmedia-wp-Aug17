<?php
/**
 * The home template file.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pan-bootstrap-child
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$img_path = VB_THEME_URI.'src/imgs/';
get_header(); ?>

    <!-- Banner輪播 -->
		<div id="BannerCarousel" class="carousel slide banner-size" data-bs-ride="carousel">
            <div class="carousel-indicators" id="indicators1">
				<?php 
					$slides = get_field('slides','option');
					$count = count($slides);
					for ($i = 0; $i < $count; $i++){
						$active = '';	
						if ($i === 0) {
							$active = 'active';
						}
						?>
						<button data-bs-target="#BannerCarousel" class="<?php echo $active?>" data-bs-slide-to="<?php echo $i;?>" aria-label="Slide <?php echo $i+1;?>"></button>
						<?php
					}					
					?>
            </div>

            <div class="carousel-inner">
				<?php
				$i = 0;
					foreach($slides as $slide){
						$active = '';
						if($i === 0) {
							$active = 'active';
						}
						$title = $slide['title'];
						$excerpt = $slide['excerpt'];
						$thumbnail = $slide['thumbnail']['url'];
				?>

				<div class="carousel-item <?php echo $active;?> img-brightness" data-bs-interval="5000" style="background-image: url('<?php echo $thumbnail;?>');">
					<div class="carousel-caption-adj d-md-block">
						<h2><?php echo $title;?></h2>
						<p><?php echo $excerpt;?></p>
					</div>
					<!-- <img src="<?php echo $thumbnail;?>" class="d-block carousel-img-size" alt="..."> -->
				</div>
				<?php
				$i++;
			}
			?>
            </div> 

            <div class="d-flex justify-content-between">
              <div class="carousel-1">
                  <i href="#" class="fas fa-angle-left" type="button" data-bs-target="#BannerCarousel" data-bs-slide="prev"></i>
                  <i herf="#" class="fas fa-angle-right" type="button" data-bs-target="#BannerCarousel" data-bs-slide="next"></i>          
              </div>
            </div>
    </div>


<!-- echo test -->
 	<!--?php
		$slides = get_field('slides','option');
		// echo '<pre>'
		// print_r($slides);
		// echo '</pre>';
		echo '<url>';
		foreach($slides as $slide) {
			echo '<li><ul>';
			echo '<li>'.$slide['title'].'</li>';
			echo '<li>'.$slide['excerpt'].'</li>';
			echo '<li>'.$slide['thumbnail']['url'].'</li>';
			echo '</ul></li>';
		}
		echo'</ul>';
	?> -->

<!-- 三大事業群 -->
<div class="container my-lg-5 mt-5 pb-5">
	<div class="row p-lg-5 col-lg-12">
	<h2 class="pb-2 text-center text-lightblue-lg">
		<?php echo get_field('home-div-title-1','option'); ?>
	</h2>
	<h4 class="text-grey-lg text-md-center pt-lg-2 pb-4">
		<?php echo get_field('home-div-content-1','option'); ?>
	</h4>
	</div>

	<div class="row px-lg-5 p-0">
		<div class="col-lg-4 col-4 buz-scope" id="bs-1">
		<a href="#anchor-media">
			<i class="fas fa-bullhorn fs-1"></i>
			<p><?php echo get_field('div-title-chi-1','option'); ?></p>
			<p><?php echo get_field('div-title-eng-1','option'); ?></p>
		</a>
		</div>

	<div class="col-lg-4 col-4 buz-scope" id="bs-2">
		<a href="#anchor-shop">
			<i class="fas fa-shopping-cart fs-1"></i>
			<p><?php echo get_field('div-title-chi-2','option'); ?></p>
			<p><?php echo get_field('div-title-eng-2','option'); ?></p>
		</a>
	</div>

	<div class="col-lg-4 col-4 buz-scope" id="bs-3">
		<a href="#anchor-edu">
			<i class="fas fa-book-open fs-1"></i>
			<p><?php echo get_field('div-title-chi-3','option'); ?></p>
			<p><?php echo get_field('div-title-eng-3','option'); ?></p>
		</a>
		</div>
	</div>
</div>

<img src="<?echo $img_path;?>bg/blue-bg-1.svg" class="bg-img4">
<img src="<?echo $img_path;?>bg/media-1.svg" class="bg-img">


<!-- 五大媒體 -->
<div class="container my-lg-5 pb-lg-5" id="anchor-media">
	<div class="row p-lg-5 p-2">
		<h2 class="pt-5 pb-2 text-lightblue-lg">
			<?php echo get_field('home-div-title-2','option'); ?>
		</h2>
		<h4 class="text-grey-lg text-left pt-2 pb-lg-4">
			<?php echo get_field('home-div-content-2','option'); ?>
		</h4>
	</div>

<!-- Branding Slides 1 -->
	<div id="carouselExampleIndicators" class="carousel slide row" data-bs-ride="carousel">
			<div class="pt-lg-3 ms-lg-5 col-lg-4 col-12"> 
				<div class="carousel-indicators" id="indicators2">
				<?php 
						$slides_brand_1 = get_field('slides_brand_1','option');
						$count = count($slides_brand_1);
						for ($i = 0; $i < $count; $i++){
							$active = '';	
							if ($i === 0) {
								$active = 'active';
							}
							?>
							<button data-bs-target="#BannerCarousel" class="<?php echo $active?>" data-bs-slide-to="<?php echo $i;?>" aria-label="Slide <?php echo $i+1;?>"></button>
							<?php
						}					
						?>
				</div>

				<div class="carousel-inner py-lg-3 px-5">

				<?php
					$i = 0;
						foreach($slides_brand_1 as $slide2){
							$active = '';
							if($i === 0) {
								$active = 'active';
							}
							$title_chi = $slide2['title_chi'];
							$title_eng = $slide2['title_eng'];
							$excerpt2 = $slide2['excerpt2'];
							$img2 = $slide2['img2']['url'];
							$link = $slide2['link'];
							$link_fb = $slide2['link_fb'];
							$link_ig = $slide2['link_line'];
					?>

					<div class="carousel-item <?php echo $active;?> img-brightness2" data-bs-interval="5000">
						<div class="box">
							<img src="<?echo $img2;?>" alt="">
							<div class="box-content">
								<a class="box-title"><?echo $title_chi;?></a>
								<a class="box-title2"><?echo $title_eng;?></a>
								<ul class="icon">
										<li><a href="<?echo $link;?>" target="_blank" class="fa fa-link" target="_blank"></a></li>
										<li><a href="<?echo $link_fb;?>" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
								</ul>
								<div class="description">
									<?echo $excerpt2;?>
								</div>
							</div>
						</div>
					</div>
					<?php
					$i++;
				}
				?>

				<div class="d-flex justify-content-between">
					<div class="carousel-2">
						<i href="#" class="fas fa-angle-left"  data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></i>
						<i herf="#" class="fas fa-angle-right"  data-bs-target="#carouselExampleIndicators" data-bs-slide="next"></i>          
					</div>
				</div>

			</div>
		</div>
	 </div>
   </div>
</div>

<img src="<?echo $img_path;?>bg/green-bg-1.svg" class="bg-img2 w-100">
<img src="<?echo $img_path;?>bg/onlineshop-1.svg" class="bg-img3">


<!-- 電商事業 -->
<div class="container" id="anchor-shop">
	<div class="row pt-lg-5">
	<h2 class="pt-5 pb-3 text-center text-lightblue-lg">
		<?php echo get_field('home-div-title-3','option'); ?>
	</h2>
	<h4 class="text-grey-lg text-md-center mt-2 pb-lg-3 pt-lg-1 pb-5">
		<?php echo get_field('home-div-content-3','option'); ?>
	</h4>
</div>
<div class="row">       
	<div class="offset-lg-6 col-lg-6 col-12">
			<div class="box" id="box2">
				<img src="<?php echo get_field('brand1-img','option'); ?>" alt="">
				<div class="box-content">
					<a class="box-title"><?php echo get_field('brand1-chi','option'); ?></a>
					<a class="box-title2"><?php echo get_field('brand1-eng','option'); ?></a>
					<ul class="icon">
					<li><a href="<?php echo get_field('brand1-link','option'); ?>" class="fa fa-link" target="_blank"></a></li>
					</ul>
					<p class="description2">
						<?php echo get_field('brand1-content','option'); ?>
					</p>
				</div>
			</div>
	</div>
	</div> 

	<div class="row mb-5">       
		<div class="offset-lg-6 col-lg-6 col-12">
			<div class="box" id="box2">
				<img src="<?php echo get_field('brand2-img','option'); ?>" alt="">
				<div class="box-content">
					<a class="box-title"><?php echo get_field('brand2-chi','option'); ?></a>
					<a class="box-title2"><?php echo get_field('brand2-eng','option'); ?></a>
					<ul class="icon">
					<li><a href="<?php echo get_field('brand2-link','option'); ?>" class="fa fa-link" target="_blank"></a></li>
					<li><a href="<?php echo get_field('brand2-link-fb','option'); ?>" class="fab fa-facebook-f" target="_blank"></a></li>
					</ul>
					<p class="description2">
						<?php echo get_field('brand2-content','option'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<img src="<?echo $img_path;?>bg/edu-1.svg" class="bg-img5">


<!-- 教育事業 -->
<div class="container pb-lg-5" id="anchor-edu">
<div class="row py-lg-5">
	<h2 class="text-lightblue-lg text-center pt-lg-5 pb-lg-3"><?php echo get_field('home-div-title-4','option'); ?></h2>
	<h4 class="text-grey-lg text-left mt-2 pb-lg-3 px-4"><?php echo get_field('home-div-content-4','option'); ?></h4>
</div>      

	<div id="carouselExampleIndicators3" class="carousel slide row" data-bs-ride="carousel3">
		<div class="pt-3 offset-lg-2 col-lg-5 col-12">
		
			<div class="carousel-indicators" id="indicators3">
				<?php 
					$slides_brand_2 = get_field('slides_brand_2','option');
					$count = count($slides_brand_2);
					for ($i = 0; $i < $count; $i++){
						$active = '';	
						if ($i === 0) {
							$active = 'active';
						}
						?>
						<button data-bs-target="#BannerCarousel" class="<?php echo $active?>" data-bs-slide-to="<?php echo $i;?>" aria-label="Slide <?php echo $i+1;?>"></button>
						<?php
					}					
				?>
			</div>

			<div class="carousel-inner pt-3 px-5">
				<?php
					$i = 0;
					foreach($slides_brand_2 as $slide3){
						$active = '';
						if($i === 0) {
							$active = 'active';
						}
						$title_chi3 = $slide3['title_chi3'];
						$title_eng3 = $slide3['title_eng3'];
						$excerpt3 = $slide3['excerpt3'];
						$img3 = $slide3['img3']['url'];
						$link3 = $slide3['link3'];
						$link_fb3 = $slide3['link_fb3'];
						$link_ig3 = $slide3['link_line3'];
				?>

					<div class="carousel-item <?php echo $active;?> img-brightness2" data-bs-interval="5000">
						<div class="box">
							<img src="<?echo $img3;?>" alt="">
							<div class="box-content">
								<a class="box-title"><?echo $title_chi3;?></a>
								<a class="box-title2"><?echo $title_eng3;?></a>
								<ul class="icon">
										<li><a href="<?echo $link3;?>" target="_blank" class="fa fa-link" target="_blank"></a></li>
								</ul>
								<div class="description">
									<?echo $excerpt3;?>
								</div>
							</div>
						</div>
					</div>
					<?php
					$i++;
				}
				?>

				<div class="d-flex justify-content-between">
					<div class="carousel-4">
						<i href="#" class="fas fa-angle-left"  data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev"></i>
						<i herf="#" class="fas fa-angle-right"  data-bs-target="#carouselExampleIndicators3" data-bs-slide="next"></i>          
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>


<img src="<?echo $img_path;?>bg/blue-bg-4.svg" class="bg-img6">
<img src="<?echo $img_path;?>bg/event-4.svg" class="bg-img7">

<!-- 媒體合作案例 -->
<div id="carouselExampleIndicators4" class="carousel slide row mx-0 px-5 mb-5" data-bs-ride="carousel4">
	<div class="pt-3 col-lg-12 col-12">

			<div class="carousel-inner pt-3">

			  <!-- 媒體合作案例 -->
				<div class="carousel-item active" data-bs-interval="5000">
						<div class="row col-lg-12 py-lg-5">
							<h2 class="text-lightblue-lg text-center pt-4 pb-2"><?php echo get_field('slides_b1_title','option'); ?></h2>
						</div>

						<div id="case-box-size">
							<div class="row">
								<div class="offset-lg-2 col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case1-1-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm"><?php echo get_field('case1-1-text','option'); ?></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case1-2-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm"><?php echo get_field('case1-2-text','option'); ?></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-2"></div>
							</div>

							<div class="row">
								<div class="offset-lg-2 col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case1-3-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm"><?php echo get_field('case1-3-text','option'); ?></h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case1-4-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm"><?php echo get_field('case1-4-text','option'); ?></h5>
										</div>
									</div>
								</div>

								<div class="col-lg-2"></div>
							</div>
						</div>

				</div>

			  <!-- 公共合作案例 -->				
				<div class="carousel-item" data-bs-interval="4000">
					<div class="row col-lg-12 py-lg-5">
						<h2 class="text-lightblue-lg text-center pt-4 pb-2"><?php echo get_field('slides_b2_title','option'); ?></h2>
					</div>

					<div id="case-box-size">
						<div class="row">
							<div class="offset-lg-2 col-lg-4 col-12 video-size">
								<div class="card-adj">
									<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case2-1-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm"><?php echo get_field('case2-1-text','option'); ?></h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 video-size">
								<div class="card-adj">
									<iframe width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case2-2-url','option'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm"><?php echo get_field('case2-2-text','option'); ?></h5>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col"></div>
						</div>

						<div class="row">
							<div class="offset-lg-2 col-lg-4 col-12 video-size">
								<div class="card-adj">
									<img width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case2-3-url','option'); ?>" class="img-fit-screen" alt="...">
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm"><?php echo get_field('case2-3-text','option'); ?></h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 video-size">
								<div class="card-adj">
									<img width="100%" height="200px" class="rounded-3" src="<?php echo get_field('case2-4-url','option'); ?>">
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm"><?php echo get_field('case2-4-text','option'); ?></h5>
									</div>
								</div>
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</div>

			  <!-- 大型活動案例 -->					
				<div class="carousel-item" data-bs-interval="4000">
					<div class="row col-lg-12 py-lg-5">
						<h2 class="text-lightblue-lg text-center pt-4 pb-2"><?php echo get_field('slides_b3_title','option'); ?></h2>
					</div>

					<div id="case-box-size">
						<div class="row g-5 py-lg-1 py-3">
							<div class="col-lg-6 col-12">
								<div class="card-adj">
									<img src="<?echo $img_path;?>event-1.jpg" class="case-img-size" alt="...">
									<div class="card-body">
									<h5 class="text-darkblue-sm"><?php echo get_field('case3-1-text','option'); ?></h5>
									<h6><?php echo get_field('case3-1-content','option'); ?></h6>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-12 mt-lg-5 mt-0">
								<div class="card-adj">
									<img src="<?echo $img_path;?>event-2.jpg" class="case-img-size" alt="...">
									<div class="card-body">
									<h5 class="text-darkblue-sm"><?php echo get_field('case3-2-text','option'); ?></h5>
									<h6><?php echo get_field('case3-2-content','option'); ?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="carousel-5">
				<i href="#" class="fas fa-angle-left"  data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev"></i>
				<i herf="#" class="fas fa-angle-right"  data-bs-target="#carouselExampleIndicators4" data-bs-slide="next"></i>          
			</div>
			<div class="carousel-indicators" id="indicators4">
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="active"></button>
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
	</div>
</div>

<!-- 我們的客戶／品牌牆 -->					
	<div class="container">
		<div class="row col-lg-12 py-lg-5">
			<h2 class="text-lightblue-lg text-center pt-4 pb-2"><?php echo get_field('brand-icon-title','option'); ?></h2>
				</div> 

					<table class="table brand-table-size">
							<tbody>
								<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/勞動部.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/財政部.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/中央研究院.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/科技部.png"></td>
								</tr>
				
								<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/國家通訊傳播委員會.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/行政院農委會動植物防疫檢疫局.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/毒物及化學物質局.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/賦稅署.png"></td>
								</tr>
					
								<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/交通部鐵道局.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/財團法人資訊工業策進會.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/教育部青年署.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/教育部資訊及科技教育司.png"></td>
								</tr>
					
								<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/臺北市政府產業發展局.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/台灣農產科技資源運籌管理學會.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/文化部影視及流行音樂產業局.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/財團法人中華航空事業發展基金會.png"></td>
					
									<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/衛生福利部食品藥物管理署.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/利泓科技.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/利眾公關.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/知路公關.png"></td>
									</tr>
					
									<tr class="row">
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/戰國策.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/tronSolutions.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/亞典行銷顧問.png"></td>
									<td class="col-lg-3"><img src="<?echo $img_path;?>cooperation/高誠公關.png"></td>
									</tr>        
							</tbody>
						</table>
				</div>
			</div>

<img src="<?echo $img_path;?>bg/contact-1.svg" class="bg-img8">


<!-- 聯絡我們 -->    
<div class="container pb-lg-5">
	<div class="row p-lg-5 px-3 pt-5">
		<h2 class="text-lightblue-lg text-center pt-lg-5 pb-lg-3">
			<?php echo get_field('home-div-title-6','option'); ?>
		</h2>
		<h4 class="text-grey-lg text-left mt-2">
			<?php echo get_field('home-div-content-6','option'); ?>
		</h4>
	<!--<h5 class="text-danger text-left">*為必填</h5> -->
	</div>

	<div class="row px-lg-5 ps-3 w-100">
		<div class="col-lg-6 col-12">
		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon0"><?php echo get_field('forms-q1','option'); ?></span>
			<input required="required" type="text" class="form-control" placeholder="<?php echo get_field('forms-a1','option'); ?>" aria-label="Name" aria-describedby="basic-addon0">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1"><?php echo get_field('forms-q2','option'); ?></span>
			<input required="required" type="text" class="form-control" placeholder="<?php echo get_field('forms-a2','option'); ?>" aria-label="Job" aria-describedby="basic-addon1">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon2"><?php echo get_field('forms-q3','option'); ?></span>
			<input required="required" type="text" class="form-control" placeholder="<?php echo get_field('forms-a3','option'); ?>" aria-label="CompanyName" aria-describedby="basic-addon2">
		</div>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon3"><?php echo get_field('forms-q4','option'); ?></span>
			<input required="required" type="text" class="form-control" placeholder="<?php echo get_field('forms-a4','option'); ?>" aria-label="eMail" aria-describedby="basic-addon3">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon4"><?php echo get_field('forms-q5','option'); ?></span>
			<input required="required" type="text" class="form-control" placeholder="<?php echo get_field('forms-a5','option'); ?>" aria-label="PhoneNumber" aria-describedby="basic-addon4">
		</div>

		<div class="input-group">
			<span class="input-group-text"><?php echo get_field('forms-q6','option'); ?></span>
			<textarea class="form-control" placeholder="<?php echo get_field('forms-a6','option'); ?>" aria-label="TextContent"></textarea>
		</div>
		</div>
	</div>
	
	<div class="row my-4 px-5">
		<div href="" class="offset-lg-2 col-lg-2 btn-lightblue"><?php echo get_field('forms-btn','option'); ?></div>
	</div>

</div>


<?php get_footer(); ?>
