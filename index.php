<?php  get_header(); ?>	
		
		<section id="background" class="default-cloud">
        	<div class="bg animated zoomIn"></div>
			<div class="lightning">
				<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0">
					<defs>
					 <filter id="brightness">
					    <feComponentTransfer>
					        <feFuncR type="linear" slope="3"></feFuncR>
					        <feFuncG type="linear" slope="3"></feFuncG>
					        <feFuncB type="linear" slope="3"></feFuncB>
					    </feComponentTransfer>
					  </filter>
			   		 </defs>
				</svg>
			</div>
			<div id="effect">
				<img src="<?php echo get_template_directory_uri(); ?> /img/cloud/cloud-01.png" alt="cloud-01" id="cloud1" class="img-cloud">
				<img src="<?php echo get_template_directory_uri(); ?> /img/cloud/cloud-02.png" alt="cloud-02" id="cloud2" class="img-cloud">
				<img src="<?php echo get_template_directory_uri(); ?> /img/cloud/cloud-03.png" alt="cloud-03" id="cloud3" class="img-cloud">
				<img src="<?php echo get_template_directory_uri(); ?> /img/cloud/cloud-04.png" alt="cloud-04" id="cloud4" class="img-cloud">
		    </div>
		</section>

        <section id="whoWeAre">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                        	<?php  
                            	$args = array(
                            		'page_id' => '10',	
                            	);
                            	
                            	$query = new WP_Query($args);
                            	
                            	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                            ?>
                            <h1>.we are amo<span> space </span></h1>
	                        <?php the_content(); 
                            	endwhile; endif;
                            ?>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object icon-greeting fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Engagement</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-support fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">24/7/365 support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-send fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">multipurpose layout</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-slack fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">pixed perfect</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.about amo<span> space </span>
                            </h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur temporibus a illum deleniti? Quae, adipisci praesentium quis omnis dignissimos!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 scrollpoint sp-effect4">
	                            <?php  
	                            	$args = array(
	                            		'post_id' => '6',	
	                            	);
	                            	
	                            	if ( have_posts() ) : while ( have_posts() ) : the_post();
	                            		the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-center' ) ); 
		                        	endwhile; endif;
		                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-university fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Why Bondy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-user fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">what we do</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-umbrella fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">our history</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-taxi fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Achievments</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="highlights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators vertical">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/600-300/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/600-300/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/600-300/1.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Company highlights</h4>
                        <h5>This is how we have aachieved the success!</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, nisi, debitis, quia molestiae ipsa dolores beatae eaque nulla tempora deserunt sunt suscipit quisquam laborum magnam aut reiciendis sed pariatur totam!</p>
                        <ul>
                            <li>Aenean sodales justo in neque adipiscing pulvinar.</li>
                            <li>Vivamus faucibus nisi et fermentum mattis.</li>
                            <li>Proin commodo lorem non gravida varius.</li>
                            <li>Proin condimentum lacus sed tristique lacinia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <img src="<?php echo get_template_directory_uri(); ?> /img/samples/ipad-bl.png" class="img-responsive ipad-image img-center" alt="">
                    </div>
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <h1>.Core Features of bond<span>Y</span>
                        </h1>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Beautiful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Powerful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Responsive</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.Nos Missions</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-mobile fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mobile development</h4>
                                        <p> Missions d´audit et de diagnostic architecturaux, techniques et fonctionnels. </p>
                                    </div>
                                </div>
                                <div class="media media-services right scrollpoint sp-effect2">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-link fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">networking</h4>
                                        <p> Mission de programmation pour la consolidation de vos problématiques immobilières. </p>
                                    </div>
                                </div>
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-film fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">video editing</h4>
                                        <p> Mission de conduite d´opérations pour le suivi de vos projets immobiliers. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-send-o fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">startup launching</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect1">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-shopping-cart fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">ui / ux design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-shopping-cart fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">e-commerce solutions</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <i class="fa fa-quote-left fa-4x"></i>
                            <h3>.Client's testimonials</h3>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="testimonials-carousel" class="carousel slide scrollpoint sp-effect3" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam, minima!</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam.</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
                                <i class="fa fa-angle-left fa-3x"></i>
                            </a>
                            <a class="right carousel-control" href="#testimonials-carousel" data-slide="next">
                                <i class="fa fa-angle-right fa-3x"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="buyNow">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <img src="<?php echo get_template_directory_uri(); ?> /img/samples/macbook-bl.png" alt="" class="img-responsive macbook-image img-center">
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <h1>.Buy bond<span>y</span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis esse velit nesciunt. Eius, atque, animi quidem libero harum modi cumque similique eveniet consequuntur dignissimos beatae necessitatibus ipsum cum unde deleniti! animi quidem libero harum modi cumque similique eveniet consequuntur!</p>
                        <a href="#" class="btn btn-primary btn-lg">Buy now</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.Meet the team</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/team/1.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Sara jones</h4>
                                    <p>Art Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/team/2.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4>jon Doe</h4>
                                    <p>UI Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/team/3.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Sam jones</h4>
                                    <p>Design Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="<?php echo get_template_directory_uri(); ?> /img/samples/team/4.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4>Sofia jones</h4>
                                    <p>IT Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h3>.we got skills</h3>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="95">
                            <span>95%</span>
                        </div>
                        <h4 class="skill-detail">html/css</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="75">
                            <span>75%</span>
                        </div>
                        <h4 class="skill-detail">wordpress</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="55">
                            <span>55%</span>
                        </div>
                        <h4 class="skill-detail">javascript</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="35">
                            <span>35%</span>
                        </div>
                        <h4 class="skill-detail">python</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.the work</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="filters" class="button-group">
                        <button data-filter="*" class="current">all items</button>
                        <button data-filter=".web-design">web design</button>
                        <button data-filter=".print">print</button>
                        <button data-filter=".mobile">mobile</button>
                        <button data-filter=".logo">logo</button>
                    </div>

                    <div id="container">
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/1.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-facebook"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/2.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star-o"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Point Of Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/6.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/7.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-pinterest"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/8.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/3.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/4.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="<?php echo get_template_directory_uri(); ?> /img/samples/portfolio/5.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Mobile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="twitter">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading white scrollpoint sp-effect3">
                            <h1>.bond<span>y</span>@ twitter</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="carousel-twitter" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-twitter" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-twitter" data-slide-to="1"></li>
                            <li data-target="#carousel-twitter" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="follow">
                        <a href="#" class="btn btn-empty text-center">
                            <i class="fa fa-twitter"></i> Follow
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.get in touch</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="detail">
                                <h4>amo space</h4>
                            </div>
                            <address>
								<p>
									<i class="fa fa-map-marker"></i>&nbsp;<span> 23, Boulvard Murat 750616. Paris, France </span>
								</p>
								<p>
									<i class="fa fa-phone"></i>&nbsp;<span> +33 680 160 515 / +33 612 670 659 </span>
								</p>
								<p>
									<i class="fa fa-envelope"></i>&nbsp;<span> bev@amo-space.com / mam@amo-space.com </span>
								</p>
							</address>
                            <div class="detail">
	                            <a class="social-icons" href="https://www.facebook.com/AMO-Space-1353205561468283/">
									<i class="fa fa-facebook"></i>
								</a>
	                            <a class="social-icons" href="https://plus.google.com/u/0/111739118604038434055">
									<i class="fa fa-google-plus"></i>
								</a>
	                            <a class="social-icons" href="https://www.linkedin.com/in/amo-space-4b4631146/">
									<i class="fa fa-linkedin"></i>
								</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group has-feedback left">
                                <input type="text" class="form-control" placeholder="NAME">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <input type="email" class="form-control" placeholder="Email">
                                <i class="fa fa-envelope-o form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <textarea class="form-control noresize" rows="7" placeholder="MESSAGE"></textarea>
                                <i class="fa fa-pencil-square-o form-control-feedback"></i>
                            </div>
                            <button class="btn btn-primary btn-lg pull-right" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		
<?php  get_footer(); ?>