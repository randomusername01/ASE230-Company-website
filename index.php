<?php 
    require './lib/readCSV.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Orion Aerospace Dynamics - Responsive Bootstrap 5 Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Themesbrand" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
            </div>
        </div>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index-1.html">
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="28" />
                    <img src="images/logo-light.png" alt="" class="logo-light" height="28" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#team" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <a href="" class="btn btn-sm rounded-pill nav-btn ms-lg-3">Buy Now</a>
                </div>
            </div>
            <!-- end container -->
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <span class="badge badge-soft-primary mb-4">Professional Landing</span>
                            <h1 class="font-weight-semibold mb-4 hero-3-title">Professional, Multipurpose Landing Page</h1>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto">Nemo enim ipsam voluptatem quia voluptas sit aut aspernatur aut fugit sed consequuntur magni dolores nesciunt.</p>
                            
                            <div>
                                <button type="button" class="btn btn-primary rounded-pill me-2">Sign up for free</button>
                                <button type="button" class="btn btn-light rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#watchvideomodal">Play video <i class="ms-1 icon-sm align-middle" data-feather="play-circle"></i></button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content hero-modal-0 bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <video id="VisaChipCardVideo" class="w-100" controls="">
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
        <!-- Hero End -->

        <!-- Services start -->
        <section class="section" id="services">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Services</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="box"></i>
                                </div>
                                <h4 class="mb-3 font-size-22">Digital Design</h4>
                                <p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="layers"></i>
                                </div>
                                <h4 class="mb-3 font-size-22">Awesome Support</h4>
                                <p class="text-muted mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="service-box text-center px-4 py-5 position-relative mb-4">
                            <div class="service-box-content p-4">
                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                    <i class="" data-feather="server"></i>
                                </div>
                                <h4 class="mb-3 font-size-22">Easy to customize</h4>
                                <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

        </section>
        <!-- Services end -->

        <!-- Features start -->
        <section class="section bg-light" id="features">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Features</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                        <h2 class="mb-4">Perfect Solution For Small Businesses</h2>
                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>
                        <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6 ms-md-auto order-1 order-md-2">
                        <div class="position-relative">
                            <div class="ms-5 features-img">
                                <img src="images/features-1.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />
                            </div>
                            <img src="images/dot-img.png" alt="" class="dot-img-left" />
                        </div>
                    </div>
                    <!-- end col -->
                </div> 
                <!-- end row -->
                <div class="row align-items-center section pb-0">
                    <div class="col-md-6">
                        <div class="position-relative mb-md-0 mb-5">
                            <div class="me-5 features-img">
                                <img src="images/features-2.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />
                            </div>
                            <img src="images/dot-img.png" alt="" class="dot-img-right" />
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-5 ms-md-auto">
                        <h2 class="mb-4">Build community & conversion with our suite of social tool</h2>
                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>
                        <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Features end -->

        <section class="section bg-gradient-primary">
            <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="text-white mb-4">Build your dream website today</h1>
                            <p class="text-white mb-5 font-size-16">Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totamrem aperiam eaque inventore veritatis quasi.</p>
                            <a href="#" class="btn btn-lg btn-light">Ask for Demonstration</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Cta end -->

        <!-- Team start -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Team Members</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <!-- end col -->
					<?php 
						$file='./data/teams.csv';
						$teamMembers=readCSVFile($file);
						foreach ($teamMembers as $i=>$member):
							if($member[0]=='Name')
							{
								// skip
							}
							else{
									echo '<div class="col-lg-3 col-sm-6">
							<div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
								<div class="position-relative overflow-hidden">
									<img src="'.$member[3].'" alt="" class="img-fluid d-block mx-auto" />
									<ul class="list-inline p-3 mb-0 team-social-item">
										<li class="list-inline-item mx-3">
											<a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
										</li>
										<li class="list-inline-item mx-3">
											<a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
										</li>
										<li class="list-inline-item mx-3">
											<a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
										</li>
									</ul>
								</div>
								<div class="p-4">
									<h5 class="font-size-19 mb-1">'.$member[0].'</h5>
									<p class="text-muted text-uppercase font-size-14 mb-0">'.$member[1].'</p>
									<p class="text-muted font-size-12 mb-0">'.$member[2].'</p>
								</div>
							</div>
						</div>';
							}
						endforeach; 
						?>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Team end -->

        <!-- Award start -->
        <section class="section" id="award">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Achievements</h2>
                        <p class="text-muted">While we have many successes to be propud of, here are some of our top picks.</p>
                    </div>
                </div>
                <div class="row">
					<?php
					$file='./data/awards.csv';
						$ourAwards=readCSVFile($file);
						foreach ($ourAwards as $i=>$award):
							if($award[0]=='Year')
							{
								// skip
							}
							else{
							echo '<div class="col-lg-4">
								<div class="card mt-4 border-0 shadow">
									<div class="card-body p-4">
										<span class="badge badge-soft-primary">Achievements</span>
										<h4 class="font-size-22 my-4"><a href="javascript: void(0);">'.$award[0].'</a></h4>
										<p class="text-muted">'.$award[1].'</p>
										<div class="d-flex align-items-center mt-4 pt-2">
											<div class="flex-body">
												<h5 class="font-size-17 mb-0"></h5>
											</div>
										</div>
									</div><!-- end cardbody -->
								</div><!-- end card -->
							</div><!-- end col -->';
							};
						endforeach; 
					?>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Blog end -->

        <!-- CTA start -->
        <section class="section bg-center w-100 bg-light" style="background-image: url(images/cta-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-gradient-primary text-center border-0">
                            <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>
                            <div class="card-body mx-auto p-sm-5 p-4">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="p-3">
                                            <h2 class="text-white mb-4">Join our Growing Community</h2>
                                            <p class="text-white-70 font-size-16 mb-4 pb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <a href="javascript: void(0);" class="btn btn-light rounded-pill">Sign Up for free</a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- CTA end -->

        <!-- Contact us start -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Get in Touch</h2>
                        <p class="text-muted mb-5">Et harum quidem rerum facilis est expedita distinctio temporecum soluta nobis est eligendi optio cumque nihil impedit quo minus maxime.</p>
                       
                        <div>
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="text-muted form-label">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter name*" >
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="text-muted form-label">Email</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter email*">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label for="subject" class="text-muted form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject.." />
                                        </div>
    
                                        <div class="mb-4 pb-2">
                                            <label for="comments" class="text-muted form-label">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                        </div>
    
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-5 ms-lg-auto">
                        <div class="mt-5 mt-lg-0">
                            <img src="images/contact.png" alt="" class="img-fluid d-block" />
                            <p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i> Support@info.com</p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i> +91 123 4556 789</p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i> 2976 Edwards Street Rocky Mount, NC 27804</p>
                            <ul class="list-inline pt-4">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Contact us end -->

        <!-- Footer Start -->
        <footer class="footer" style="background-image: url(images/footer-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <a href="index-1.html"><img src="images/logo-light.png" alt="" class="" height="30" /></a>
                            <p class="text-white-50 my-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Customer</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Works</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Strategy</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Releases</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Press</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Mission</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Product</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Trending</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Popular</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Customers</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Features</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Information</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Developers</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Support</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Customer Service</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Get Started</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Guide</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Support</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">FAQ</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Contact</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Disscusion</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <p class="text-white-50 f-15 mb-0">
                                <script>
                                document.write(new Date().getFullYear())
                            </script> © Orion Aerospace Dynamics. Design By Themesbrand</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer End -->

        <!-- Style switcher -->
        <div id="style-switcher">
            <div class="bottom">
                <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                    <i class="mdi mdi-white-balance-sunny mode-light"></i>
                    <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
                </a>
                <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i class="mdi mdi-cog  mdi-spin"></i></a>
            </div>
        </div>

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/smooth-scroll.polyfills.min.js"></script>

        <script src="https://unpkg.com/feather-icons"></script>

        <!-- App Js -->
        <script src="js/app.js"></script>
    </body>
</html>
