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
	<div id="BannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" id="indicators1">
              <button type="button" data-bs-target="#BannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#BannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#BannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#BannerCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#BannerCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div> 

            <div class="carousel-inner">
              <div class="carousel-item active img-brightness" data-bs-interval="5000">
                <div class="carousel-caption-adj d-md-block">
                  <h2>PanMedia泛科知識媒體集團致力於知識推廣</h2>
                  <p>從泛科學新媒體起家，創建知識賦能共同體，讓天下沒有難學的知識</p>
                </div>
                <img src="<?echo $img_path;?>banner/carousel-7.jpg" class="d-block w-100 carousel-img-size" alt="...">
              </div>

              <div class="carousel-item img-brightness" data-bs-interval="5000">
                <div class="carousel-caption-adj d-md-block">
                  <h2>PanGOGO知識購是內容創作者的得力夥伴</h2>
                  <p>結合線上課程、內容訂閱、舉辦活動、贊助支持、線上商店功能的一站式知識變現平台</p>
                </div>
                <img src="<?echo $img_path;?>banner/carousel-3.jpg" class="d-block w-100 carousel-img-size" alt="...">
              </div>

              <div class="carousel-item img-brightness" data-bs-interval="5000">
                <div class="carousel-caption-adj d-md-block">
                  <h2>以內容行銷建立企業深度影響力</h2>
                  <p>線上媒體企劃與線下品牌活動的策劃專家，以知識轉譯為基底，有效溝通消費者並深植人心</p>
                </div>
                <img src="<?echo $img_path;?>banner/carousel-6.JPG" class="d-block w-100 carousel-img-size" alt="...">
              </div>

              <div class="carousel-item img-brightness" data-bs-interval="5000">
                <div class="carousel-caption-adj d-md-block">
                  <h2>專精公共議題公關與教育推廣</h2>
                  <p>獲2018年經濟部新創事業金質獎，深度經營公共議題溝通，並創辦國中科普素養數位平台「科學生」</p>
                </div>
                <img src="<?echo $img_path;?>banner/carousel-9.JPG" class="d-block w-100 carousel-img-size" alt="...">
              </div>

              <div class="carousel-item img-brightness" data-bs-interval="5000">
                <div class="carousel-caption-adj d-md-block">
                  <h2>深耕地方創新基地以傳承創業經驗</h2>
                  <p>串聯台南胖地創客基地、南方創客基地與桃園新創育成空間， 積極育成新創事業</p>
                </div>
                <img src="<?echo $img_path;?>banner/carousel-10.JPG" class="d-block w-100 carousel-img-size" alt="...">
              </div>
            </div>

            <div class="d-flex justify-content-between">
              <div class="carousel-1">
                  <i href="#" class="fas fa-angle-left" type="button" data-bs-target="#BannerCarousel" data-bs-slide="prev"></i>
                  <i herf="#" class="fas fa-angle-right" type="button" data-bs-target="#BannerCarousel" data-bs-slide="next"></i>          
              </div>
            </div>
    </div>

<!-- 三大事業群 -->
<div class="container my-lg-5 mt-5 pb-5">
	<div class="row p-lg-5 col-lg-12">
	<h2 class="pb-2 text-center text-lightblue-lg">
		<?php echo get_field('home-div-title-1','option'); ?>
	</h2>
	<h4 class="text-grey-lg text-center pt-lg-2 pb-4">
		<?php echo get_field('home-div-content-1','option'); ?>
	</h4>
	</div>

	<div class="row px-lg-5 p-3">
		<div class="col-lg-4 col-4 buz-scope" id="bs-1">
		<a href="#anchor-media">
			<i class="fas fa-bullhorn fs-1"></i>
			<p>媒體事業群</p>
			<p>Media</p>
		</a>
		</div>

	<div class="col-lg-4 col-4 buz-scope" id="bs-2">
		<a href="#anchor-shop">
			<i class="fas fa-shopping-cart fs-1"></i>
			<p>電商事業群</p>
			<p>Online shop</p>
		</a>
	</div>

	<div class="col-lg-4 col-4 buz-scope" id="bs-3">
		<a href="#anchor-edu">
			<i class="fas fa-book-open fs-1"></i>
			<p>教育事業群</p>
			<p>Education</p>
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
	<div id="carouselExampleIndicators" class="carousel slide row" data-bs-ride="carousel">
			<div class="pt-lg-3 ms-lg-5 col-lg-4 col-12"> 

			<div class="carousel-indicators" id="indicators2">
				<button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
			</div>

			<div class="carousel-inner py-lg-3 px-5">

				<div class="carousel-item active" data-bs-interval="5000">
					<div class="box">
						<img src="<?echo $img_path;?>logo/media-logo-1.png" alt="">
						<div class="box-content">
							<a class="box-title">泛科學</a>
							<a class="box-title2">PanSci</a>
							<ul class="icon">
                                      <li><a href="https://pansci.asia/" target="_blank" class="fa fa-link" target="_blank"></a></li>
                                      <li><a href="https://www.facebook.com/PanSci" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
                                      <li><a herf="https://page.line.me/ghl8230y" target="_blank" class="fab fa-line" target="_blank"></a></li>
                            </ul>
							<div class="description">
							PanSci 泛科學 為台灣最大的科學網站及知識社群。我們認為科學無處不在，卻常常在重要議題的討論當中缺席；因此我們致力提供科學、知識討論的最佳場合，並邀請科學研究者、教育者、愛好者、以及所有受科學影響的人們，共同暢談科學、理性思考議題中的科學面向。我們也認為科學應該面向大眾，要能解決大眾的問題，並且讓解決問題本身變成一種樂趣。
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item" data-bs-interval="5000">
					<div class="box">
						<img src="<?echo $img_path;?>logo/media-logo-2.png" alt="">
						<div class="box-content">
							<a class="box-title">泛科技</a>
							<a class="box-title2">PanX</a>
							<ul class="icon">
                                    <li><a href="https://panx.asia/" class="fa fa-link" target="_blank"></a></li>
                                    <li><a href="https://www.facebook.com/panx.asia" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
                            </ul>
							<div class="description">
							PanX 泛科技聚焦新能源、金融科技、生物科技、物聯網、大數據、工業4.0等主題，以數位科技發展、創新創業、產業應用、科技生活等不同角度，將科技對未來的影響做最深入、最完整的覆蓋。時常舉辦講座與主題會展，促進科技產業與趨勢關注者學習與溝通。
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item" data-bs-interval="5000">
					<div class="box">
						<img src="<?echo $img_path;?>logo/media-logo-3.png" alt="">
						<div class="box-content">
							<a class="box-title">娛樂重擊</a>
							<a class="box-title2">Punchline</a>
							<ul class="icon">
                                    <li><a href="http://punchline.asia/" target="_blank" class="fa fa-link" target="_blank"></a></li>
                                    <li><a href="https://www.facebook.com/Punchline.asia" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
                            </ul>
							<p class="description">
							Punchline 娛樂重擊是台灣最大的垂直影視音產業媒體，提供最可靠、專業的觀點與訊息，致力於傳承與提升產業知識。我們看見全球的影視音娛樂產業正劇烈變動，而我們試圖利用新的方式來應對改變。誠摯邀請關注娛樂產業未來，對發展產業有高度熱誠的媒體人、科技人、創作者、產業人士加入我們！
							</p>
						</div>
					</div>
				</div>

				<div class="carousel-item" data-bs-interval="5000">
				<div class="box">
					<img src="<?echo $img_path;?>logo/media-logo-4.png" alt="">
					<div class="box-content">
						<a class="box-title">美食加</a>
						<a class="box-title2">Taster</a>
						<ul class="icon">
                                  <li><a href="https://taster.life/" class="fa fa-link" target="_blank"></a></li>
                                  <li><a href="https://www.facebook.com/tasterlovesfood" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
                        </ul>
						<div class="description">
							美食是我們最重要的身分認同。即時頭條、流行趨勢、娛樂情報、消費指南、專家觀點，通通報給你知，當然，主題都是吃。「Taster 美食加」是 Liz 高琹雯 在 2018 年成立的美食垂直媒體，將擴大發揮她在「美食家的自學之路 Self-taught Gourmet」累積的經驗。「美食加」因此是美食家的延伸，希望用美食的加法把人與美好的事物串連起來。
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item" data-bs-interval="5000">
				<div class="box">
					<img src="<?echo $img_path;?>logo/media-logo-5.png" alt="">
					<div class="box-content">
						<a class="box-title">旅飯</a>
						<a class="box-title2">Pantravel</a>
						<ul class="icon">
                                <li><a href="http://pantravel.life/" target="_blank" class="fa fa-link"></a></li>
                                <li><a href="https://www.facebook.com/PanTravelTW" target="_blank" class="fab fa-facebook-f" target="_blank"></a></li>
                        </ul>
						<p class="description">
						Pantravel 旅飯，是專注台灣，發掘日本，旁及泛亞太區域等米食國家的新媒體。我們試圖創造令你耳目一新的旅遊體驗與思維，摸索出最適合台灣旅遊產業發展的藍圖。旅飯企圖在旅遊產業注入新血，不論面對群眾與面對產業都能佔有一席之地。
						</p>
					</div>
				</div>
			</div>

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
	<h4 class="text-grey-lg text-center mt-2 pb-lg-3 pt-lg-1 pb-5">
		<?php echo get_field('home-div-content-3','option'); ?>
	</h4>
</div>
<div class="row">       
	<div class="offset-lg-6 col-lg-6 col-12">
			<div class="box" id="box2">
				<img src="<?echo $img_path;?>logo/shop-logo-3.png" alt="">
				<div class="box-content">
					<a class="box-title">知識購</a>
					<a class="box-title2">PanGoGo</a>
					<ul class="icon">
					<li><a href="https://pangogo.com/" class="fa fa-link" target="_blank"></a></li>
					</ul>
					<p class="description2">
					PanGOGO 知識購是一個專為知識變現者誕生的解決方案，讓你用最輕鬆、最能掌控個人品牌的方式，放心打造只屬於你的全功能站點。你可以立即向粉絲販售線上課程、電商購物、創作訂閱方案、活動票券，或讓他們透過贊助表示支持。你將擁有完整的資料跟分析權限，同時跟使用其他平台一樣不費力氣。
					</p>
				</div>
			</div>
	</div>
	</div> 

	<div class="row mb-5">       
		<div class="offset-lg-6 col-lg-6 col-12">
			<div class="box" id="box2">
				<img src="<?echo $img_path;?>logo/shop-logo-2.png" alt="">
				<div class="box-content">
					<a class="box-title">泛科市集</a>
					<a class="box-title2">PanMarket</a>
					<ul class="icon">
					<li><a href="https://panmarket.asia/" class="fa fa-link" target="_blank"></a></li>
					<li><a href="https://www.facebook.com/panmarket.asia/" class="fab fa-facebook-f" target="_blank"></a></li>
					</ul>
					<p class="description2">
					泛科市集為集團旗下的電子商務平台，我們精選優質商品，訴求以運用科學知識，同時具創意、設計感、趣味性等元素為主，我們也鼓勵創客（maker）實作與手作產品。泛科市集以「生活化」為核心精神，藉由介紹與銷售選物，傳達科普知識與體驗，將科普推廣融入生活中。
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
	<h2 class="text-lightblue-lg text-center pt-lg-5 pb-lg-3">教育事業</h2>
	<h4 class="text-grey-lg text-left mt-2 pb-lg-3 px-4">泛科學院有全台串聯的創新基地、實體教室與線上課程，泛科活動是功能完備的活動報名平台，服務各界講座與國際論壇主辦方，並且我們向下紮根科普素養，聯手南一書局與科學月刊打造國中生專業科學閱讀素養課程平台「科學生」。</h4>
</div>      
	<div id="carouselExampleIndicators3" class="carousel slide row" data-bs-ride="carousel3">
		<div class="pt-3 offset-lg-2 col-lg-5 col-12">
		
			<div class="carousel-indicators" id="indicators3">
				<button  data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
				<button  data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button  data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3" class="active" ></button>
			</div>

			<div class="carousel-inner pt-3 px-5">

				<div class="carousel-item" data-bs-interval="5000">
					<div class="box">
					<img src="<?echo $img_path;?>logo/edu-logo-1.png" alt="">
					<div class="box-content">
						<a class="box-title">泛科學院</a>
						<a class="box-title2">Panschool</a>
						<ul class="icon">
							<li><a href="https://panschool.asia/" class="fa fa-link" target="_blank"></a></li>
						</ul>
						<p class="description">
							PanGOGO 知識購是一個專為知識變現者誕生的解決方案，讓你用最輕鬆、最能掌控個人品牌的方式，放心打造只屬於你的全功能站點。你可以立即向粉絲販售線上課程、電商購物、創作訂閱方案、活動票券，或讓他們透過贊助表示支持。你將擁有完整的資料跟分析權限，同時跟使用其他平台一樣不費力氣。
						</p>
						</div>
					</div>
				</div>

				<div class="carousel-item" data-bs-interval="5000">
					<div class="box">
					<img src="<?echo $img_path;?>logo/edu-logo-2.png" alt="">
					<div class="box-content">
						<a class="box-title">泛科活動</a>
						<a class="box-title2">PanMarket</a>
						<ul class="icon">
							<li><a href="https://events.panmedia.asia/" class="fa fa-link" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/panmarket.asia/" class="fab fa-facebook-f" target="_blank"></a></li>
						</ul>
						<p class="description">
							泛科市集為集團旗下的電子商務平台，我們精選優質商品，訴求以運用科學知識，同時具創意、設計感、趣味性等元素為主，我們也鼓勵創客（maker）實作與手作產品。泛科市集以「生活化」為核心精神，藉由介紹與銷售選物，傳達科普知識與體驗，將科普推廣融入生活中。
						</p>
						</div>
					</div>
				</div>

				<div class="carousel-item active" data-bs-interval="3200">
					<div class="box">
						<img src="<?echo $img_path;?>logo/edu-logo-3.png" alt="">
						<div class="box-content">
							<a class="box-title">科學生</a>
							<a class="box-title2">PanSci Student</a> 
							<ul class="icon">
							<li><a href="https://student.pansci.asia/" class="fa fa-link" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/Student.PanSci/" class="fab fa-facebook-f" target="_blank"></a></li>
							</ul>
							<p class="description">
							科學生是由泛科學、南一書局與科學月刊聯合打造的線上學習平台，提供搭配課程進度的「科普閱讀」文章與題組，幫助孩子掌握關鍵資訊，並透過不定期的新知補充，與科學潮流接軌。
							</p>
						</div>
					</div>
				</div>

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
							<h2 class="text-lightblue-lg text-center pt-4 pb-2">媒體合作案例</h2>
						</div>

						<div id="case-box-size">
							<div class="row">
								<div class="offset-lg-2 col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/XfhXAMth-F8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm">家樂福食物轉型計畫</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/bn5JxRDPsU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm">蔡司最新鑽金藍光防護鏡片</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-2"></div>
							</div>

							<div class="row">
								<div class="offset-lg-2 col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/7xl0_sNuUbk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm">花仙子香氛 原來香味這麼來！</h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-12 video-size">
									<div class="card-adj">
										<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/uEEY_cmmNs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="card-body">
										<h5 class="text-darkblue-sm">MSI微星科技 黃金比例螢幕</h5>
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
						<h2 class="text-lightblue-lg text-center pt-4 pb-2">公共合作案例</h2>
					</div>

					<div id="case-box-size">
						<div class="row">
							<div class="offset-lg-2 col-lg-4 col-12 video-size">
								<div class="card-adj">
									<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/083rXWPZnxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm">財政部綜合所得稅手機報稅</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 video-size">
								<div class="card-adj">
									<iframe width="100%" height="200px" class="rounded-3" src="https://www.youtube.com/embed/NnrU1zMeK6E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm">行政院農委會動植物防疫檢疫局「2020年植物健康年」</h5>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col"></div>
						</div>

						<div class="row">
							<div class="offset-lg-2 col-lg-4 col-12 video-size">
								<div class="card-adj">
									<img width="100%" height="200px" class="rounded-3" src="<?echo $img_path;?>cooperation/case-2.jpg" class="img-fit-screen" alt="...">
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm">高雄市政府時尚MIT產業創客人才培育計畫</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-4 video-size">
								<div class="card-adj">
									<img width="100%" height="200px" class="rounded-3" src="<?echo $img_path;?>cooperation/case-4.jpg">
									<div class="card-body px-0">
										<h5 class="text-darkblue-sm">地方創生與社會企業群眾募資專業輔導案</h5>
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
						<h2 class="text-lightblue-lg text-center pt-4 pb-2">大型活動案例</h2>
					</div>

					<div id="case-box-size">
						<div class="row g-5 py-lg-1 py-3">
							<div class="col-lg-6 col-12">
								<div class="card-adj">
									<img src="<?echo $img_path;?>event-1.jpg" class="case-img-size" alt="...">
									<div class="card-body">
									<h5 class="text-darkblue-sm">2015至2019年 泛·知識節</h5>
									<h6>「泛知識節」為泛科知識召集之年度大型活動，承繼 PanSci 泛科學年會的精神與架構。</h6>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-12 mt-lg-5 mt-0">
								<div class="card-adj">
									<img src="<?echo $img_path;?>event-2.jpg" class="case-img-size" alt="...">
									<div class="card-body">
									<h5 class="text-darkblue-sm">NPOst年會</h5>
									<h6>世界最大NGO「:BRAC」執行長法雷茲爵士來台演講。</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			  <!-- 我們的客戶／品牌牆 -->					
				<div class="carousel-item" data-bs-interval="4000">
					<div class="row col-lg-12 py-lg-5">
						<h2 class="text-lightblue-lg text-center pt-4 pb-2">我們的客戶</h2>
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
			<div class="carousel-5">
				<i href="#" class="fas fa-angle-left"  data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev"></i>
				<i herf="#" class="fas fa-angle-right"  data-bs-target="#carouselExampleIndicators4" data-bs-slide="next"></i>          
			</div>
			<div class="carousel-indicators" id="indicators4">
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="active"></button>
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button  data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="3" aria-label="Slide 4"></button>
			</div>
	</div>
</div>

<img src="<?echo $img_path;?>bg/contact-1.svg" class="bg-img8">
<img src="<?echo $img_path;?>bg/blue-bg-5.svg" class="bg-img9">


<!-- 聯絡我們 -->    
<div class="container pb-lg-5">
	<div class="row p-lg-5 px-3 pt-5">
		<h2 class="text-lightblue-lg text-center pt-lg-5 pb-lg-3">
			<?php echo get_field('home-div-title-6','option'); ?>
		</h2>
		<h4 class="text-grey-lg text-left mt-2">
			<?php echo get_field('home-div-content-6','option'); ?>
		</h4>
		<h5 class="text-danger text-left">*為必填</h5>
	</div>

	<div class="row px-lg-5 ps-3 w-100">
		<div class="col-lg-6 col-12">
		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon0">*姓&emsp;&emsp;名</span>
			<input type="text" class="form-control" placeholder="愛因斯坦" aria-label="Name" aria-describedby="basic-addon0">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">*職&emsp;&emsp;稱</span>
			<input type="text" class="form-control" placeholder="科學家" aria-label="Job" aria-describedby="basic-addon1">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon2">*公司名稱</span>
			<input type="text" class="form-control" placeholder="公司名稱" aria-label="CompanyName" aria-describedby="basic-addon2">
		</div>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon3">*電子郵件</span>
			<input type="text" class="form-control" placeholder="ex. acc0101@mail.com" aria-label="eMail" aria-describedby="basic-addon3">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon4">*聯絡電話</span>
			<input type="text" class="form-control" placeholder="ex. 0900-000-000" aria-label="PhoneNumber" aria-describedby="basic-addon4">
		</div>

		<div class="input-group">
			<span class="input-group-text">*所需服務</span>
			<textarea class="form-control" placeholder="請簡述您需要的服務內容" aria-label="TextContent"></textarea>
		</div>
		</div>
	</div>
	
	<div class="row my-4 px-5">
		<div href="" class="offset-lg-2 col-lg-2 btn-lightblue">送出</div>
	</div>

</div>


<?php get_footer(); ?>
