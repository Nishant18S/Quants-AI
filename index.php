<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Quants-AI - Stock Market Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
            
            
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".toggle-description").hide(); // Hide descriptions initially
    $(".learn-more-btn").click(function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        var target = $(this).attr("href"); // Get the target description ID
        $(target).slideToggle(); // Toggle with slide animation
    });
});
</script>



<style>
    
table {
        width: 100%;
        animation: fadeIn 2s ease-in-out;
    }
    th, td {
        text-align: center;
        vertical-align: middle;
        animation: fadeIn 2s ease-in-out;
    }
    thead {
        background-color: #343a40;
        color: white;
        animation: slideIn 1s ease-in-out;
    }
    tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
        animation: fadeIn 2s ease-in-out;
    }
    tbody tr:nth-child(even) {
        background-color: #ffffff;
        animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .dem {
            display: flex; /* Use flexbox for layout */
            align-items: center; /* Center vertically */
           
            margin: 20px;
            padding: 55px;
            border-radius: 10px;
            background-color: rgba(0, 255, 255, 0.1);
            opacity: 0; /* Start hidden */
            transform: translateY(-20px); /* Start slightly above */
            transition: opacity 0.5s ease, transform 0.5s ease; /* Add transition */
        }

        .dem.visible {
            opacity: 1; /* Fully visible */
            transform: translateY(0); /* Move into place */
        }

        .dem-image {
            max-width: 100%; /* Responsive image */
            height: auto;
            margin-left: 20px; /* Space between text and image */
        }

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px); /* Start from below */
    }
    to {
        opacity: 1;
        transform: translateY(0); /* End at normal position */
    }
}
.dem-image {
    max-width: 100%; /* Set a max width for the image */
    margin-left: 80px; /* Space between text and image */
    animation: fadeIn 1s forwards;
}
.demo {
    background-color: #f9f9f9; /* Light background */
    border: 1px solid #ddd;   /* Light border */
    border-radius: 8px;       /* Rounded corners */
    padding: 20px;            /* Padding inside the box */
    margin-top: 20px;         /* Space above the box */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
                   /* Start hidden */
    transform: translateY(20px); /* Move down for effect */
    transition: opacity 0.5s ease, transform 0.5s ease; /* Smooth transition */
}

.demo.visible {
    opacity: 1;               /* Fully visible */
    transform: translateY(0); /* Move back to original position */
}
    </style>
    </head>

    <body>
    <header>
        
    </header>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="tel:+917849025589" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+91 7849025589</a>
                        <a href="mailto:quantsai@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>quantsai@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="Register.php"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                        <a href="Login.php"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                                <small>
                                    <i class="fa fa-home text-primary me-2"></i> My Dashboard
                                </small>
                            </a>
                            <div class="dropdown-menu rounded">
                            <a href="profile.php" class="dropdown-item">
    <i class="fas fa-user-alt me-2"></i> My Profile
</a>


                                <a href="/inbox" class="dropdown-item">
                                    <i class="fas fa-comment-alt me-2"></i> Inbox
                                </a>
                                <a href="notification.html" class="dropdown-item">
                                    <i class="fas fa-bell me-2"></i> Notifications
                                </a>
                                <a href="/account-settings" class="dropdown-item">
                                    <i class="fas fa-cog me-2"></i> Account Settings
                                </a>
                                <a href="#" id="logout-link" class="dropdown-item">
                                    <i class="fas fa-power-off me-2"></i> Log Out
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Quants-AI</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="blog.html" class="nav-item nav-link">Blogs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Pages</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Features</a>
                                <a href="team.html" class="dropdown-item">Our team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="offer.html" class="dropdown-item">Our offer</a>
                                <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="Register.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Quants-AI</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Invest your money with higher return</h1>
                                        <p class="mb-5 fs-5">We offer secure and efficient trading solutions for global markets, leveraging cutting-edge technology to empower traders of all levels.... 
                                        </p>
                                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/@QuantsAI/videos"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Quants-AI</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Invest your money with higher return</h1>
                                        <p class="mb-5 fs-5">We offer secure and efficient trading solutions for global markets, leveraging cutting-edge technology to empower traders of all levels.... 
                                        </p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/@QuantsAI/videos"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1>
                            <p class="mb-4">At Quants-AI, we are more than just a trading platform. We are a community of traders with a shared passion for financial growth and success. Our platform is designed with user-friendliness in mind, so you can focus on making smart trading decisions without being bogged down by technical complexities. Whether you are trading stocks, cryptocurrencies, or commodities, Quants-AI offers a seamless experience tailored to your needs.
                                We believe in empowering our traders with the right knowledge and tools. That’s why we continuously update our resources with the latest market trends, analysis, and strategies. Our educational materials, including webinars, tutorials, and market reports, help you stay ahead in the fast-paced world of trading.
                                Join the thousands of traders who trust Quants-AI to manage their investments efficiently. Our platform is compatible with both desktop and mobile devices, ensuring you have access to your trading account anytime, anywhere.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Business Consuluting</h4>
                                            <p>Quants-AI, we understand that navigating the complexities of international trade requires expert guidance and strategic insight. Our business consulting services are designed to empower organizations to optimize their operations, expand their market reach, and enhance their competitive advantage. With a team of seasoned professionals, we provide tailored solutions that address the unique challenges of your business.

                                                We specialize in market analysis, supply chain optimization, and regulatory compliance, ensuring that our clients make informed decisions that drive growth and profitability. Whether you’re a small startup or an established enterprise, Quants-AI is committed to helping you unlock new opportunities in the global marketplace. Together, we can chart a course for sustainable success in the ever-evolving world of trade.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Year Of Expertise</h4>
                                            <p>With over 5 years of experience in the international trade sector, Quants-AI has established itself as a trusted leader in business consulting. Our deep understanding of global markets, combined with a robust network of industry connections, allows us to deliver insights and strategies that drive results. Throughout the years, we have successfully partnered with businesses across various sectors, helping them navigate challenges and seize opportunities in a dynamic trade landscape. Our commitment to continuous improvement and adaptation ensures that our clients benefit from the latest industry trends and best practices.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" id="discover-btn" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                                        </div>
                                    </div>
                                    <div id="content-container" class="mt-3" style="display: none;">
                                        <div class="dem">
                                            <div class="text">
                                                <h1>Profitability <br>on the Rise</h1><br><br><br>
                                                <h6>A trading platform that supports your financial goals.</h6>
                                                <p>We also offer personalized account management services, giving you the ability to set customized trading goals, receive tailored investment advice, and utilize automated trading strategies. Our platform is optimized for both desktop and mobile, allowing you to trade on the go without missing any market opportunities.</p>
                                            </div>
                                            <img src="img/home.webp" alt="Trading Image" class="dem-image">
                                        </div>
                                    </div>
                                </div>     
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Call Us</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+91 7849033345</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="img/about-2.png" class="img-fluid rounded w-100" alt="">
                            
                            <div class="" style="position: absolute; top: -15px; right: -15px;">
                                <img src="img/about-3.png" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                            </div>
                            <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                                <img src="img/about-4.png" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                            </div>
                            <div class="rounded-bottom">
                                <img src="img/about-5.jpg" class="img-fluid rounded-bottom w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4><br>
            <h1 class="display-5 mb-4">We Services provided best offer</h1>
            <p class="mb-0">At Quants-AI, we pride ourselves on offering a comprehensive suite of services tailored to meet the diverse needs of our clients. Our offerings include strategic market analysis, supply chain consulting, regulatory compliance assistance, and risk management solutions. We also provide training programs designed to equip your team with the skills necessary to thrive in the global marketplace. With our commitment to excellence, we deliver the best offers in the industry, ensuring that you receive exceptional value and insights that drive your business forward. Let us be your partner in navigating the complexities of trade and unlocking new growth opportunities.</p>
        </div>
        <div class="row g-4">
            <!-- Service Item 1 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Strategy Consulting</a><br>
                        <div id="service1" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our strategy consulting services are designed to help businesses define and achieve their strategic goals in the competitive landscape of international trade. We work closely with you to assess your current position, identify growth opportunities, and develop actionable plans that align with your vision. Our experienced consultants utilize data-driven insights and industry best practices to craft tailored strategies that enhance operational efficiency, market positioning, and long-term sustainability. Whether you’re looking to enter new markets, streamline your supply chain, or adapt to changing regulations, Quants-AI provides the expertise and guidance you need to navigate the complexities of trade successfully.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service1">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a><br>
                        <div id="service2" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our financial advisory services are dedicated to helping businesses make informed financial decisions that drive growth and stability in the global market. Our team of seasoned financial experts provides comprehensive analysis and strategic guidance tailored to your unique needs. From assessing investment opportunities and optimizing capital structures to navigating complex regulatory environments, we equip you with the insights necessary to maximize your financial performance. With Quants-AI as your partner, you can confidently tackle financial challenges and seize new opportunities, ensuring your business thrives in today’s competitive landscape.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service2">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Managements</a><br>
                        <div id="service3" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our management consulting services are designed to enhance your organization’s effectiveness and efficiency in the ever-evolving world of trade. We collaborate with you to identify operational challenges, streamline processes, and implement best practices that align with your business goals. Our expert consultants bring a wealth of experience in organizational development, change management, and performance optimization, ensuring that your team is empowered to achieve its full potential. Whether you’re looking to enhance team dynamics, improve project management, or drive innovation, Quants-AI provides the strategic support you need to foster a culture of continuous improvement and operational excellence.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service3">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service Item 4 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Supply Optimization</a><br>
                        <div id="service4" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our supply chain optimization services are designed to enhance the efficiency and effectiveness of your logistics and operations. We analyze every aspect of your supply chain, from procurement and inventory management to distribution and delivery, identifying areas for improvement and cost savings. Our expert consultants leverage data-driven insights and industry best practices to help you streamline processes, reduce lead times, and improve overall responsiveness to market demands. With Quants-AI, you can achieve a more agile supply chain that not only minimizes costs but also enhances customer satisfaction, ensuring your business stays competitive in a dynamic global landscape.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service4">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service Item 5 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-5.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Hr Consulting</a><br>
                        <div id="service5" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our HR consulting services are dedicated to helping organizations build and maintain a strong, engaged workforce. We provide strategic support in areas such as talent acquisition, employee development, performance management, and organizational culture. Our experienced consultants work closely with you to design tailored HR solutions that align with your business objectives and enhance overall employee satisfaction. Whether you’re looking to implement effective training programs, improve retention rates, or navigate complex labor regulations, Quants-AI is here to empower your HR initiatives and drive sustainable growth through your most valuable asset—your people.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service5">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service Item 6 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-6.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Marketing Consulting</a>
                        <div id="service6" class="mb-4 toggle-description" style="display: none;">
                            <p>At Quants-AI, our marketing consulting services are designed to elevate your brand and connect you with your target audience in meaningful ways. We offer strategic guidance in market research, brand positioning, digital marketing, and campaign development to ensure your marketing efforts are effective and aligned with your business goals. Our team of experts analyzes market trends and consumer behavior to create data-driven strategies that enhance visibility and drive engagement. Whether you're launching a new product, rebranding, or seeking to expand your market presence, Quants-AI provides the insights and tools you need to maximize your impact and achieve measurable results.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#service6">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

        <!-- Features Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Features</h4>
            <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
            <p class="mb-0">We believe in the power of collaboration to drive innovation and success. Our platform offers a suite of features designed to connect businesses, ideas, and people, fostering a vibrant ecosystem for growth. With intuitive networking tools, organizations can easily find and collaborate with potential partners, clients, and industry experts. Knowledge-sharing forums encourage the exchange of ideas and best practices, while a comprehensive resource library provides valuable insights and tools to stay ahead in the competitive trade landscape. Harness the collective wisdom of the community to create greater impact and unlock new opportunities for your business.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-chart-line fa-4x text-primary"></i>
                    </div>
                    <h4>Global Management</h4>
                    <div id="desc1" class="mb-4 toggle-description" style="display: none;">
                        <p>In today’s interconnected world, effective global management is essential for businesses seeking to thrive across borders. Our global management services provide strategic guidance to help organizations navigate the complexities of international operations. We assist in developing cross-cultural teams, optimizing global supply chains, and understanding diverse market dynamics. By leveraging our extensive knowledge of global regulations and best practices, we empower businesses to enhance their international presence and achieve sustainable growth. With a focus on adaptability and innovation, we ensure that your organization is well-equipped to meet the challenges of the global marketplace.</p>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#desc1">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-university fa-4x text-primary"></i>
                    </div>
                    <h4>Corporate Banking</h4>
                    <div id="desc2" class="mb-4 toggle-description" style="display: none;">
                        <p>Our corporate banking services are designed to support businesses of all sizes in achieving their financial goals. We offer a comprehensive range of financial solutions, including tailored lending options, cash management, trade finance, and treasury services. Our experienced bankers work closely with you to understand your unique needs and provide customized strategies that enhance liquidity and optimize capital structure. With a focus on building long-term relationships, we are committed to delivering exceptional service and expertise to help your business navigate the complexities of the corporate financial landscape. Partner with us to empower your growth and seize new opportunities in a competitive market.</p>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#desc2">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-file-alt fa-4x text-primary"></i>
                    </div>
                    <h4>Asset Management</h4>
                    <div id="desc3" class="mb-4 toggle-description" style="display: none;">
                        <p>Our asset management services are designed to help businesses and individuals optimize their investment portfolios for long-term growth and stability. We provide tailored investment strategies that align with your financial goals and risk tolerance, utilizing a comprehensive approach that includes market analysis, asset allocation, and ongoing performance monitoring. Our team of experienced professionals employs a disciplined investment process to identify opportunities and mitigate risks, ensuring your assets are working effectively for you. With a commitment to transparency and client-focused service, we empower you to navigate the complexities of investment management and achieve your financial aspirations.</p>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#desc3">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                    </div>
                    <h4>Investment Bank</h4>
                    <div id="desc4" class="mb-4 toggle-description" style="display: none;">
                        <p>Our investment banking services are designed to provide businesses with expert guidance in navigating complex financial landscapes. We specialize in mergers and acquisitions, capital raising, and strategic advisory services that empower clients to achieve their growth objectives. Our experienced team conducts thorough market analysis and valuations to identify the best opportunities for your organization, whether you’re looking to expand through strategic partnerships or access new sources of capital. With a commitment to delivering tailored solutions and unparalleled expertise, we help you make informed decisions that drive value and enhance your competitive position in the marketplace.</p>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4 learn-more-btn" href="#desc4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

        <script>
function toggleDescription(id) {
    const desc = document.getElementById(id);
    if (desc.style.display === "none") {
        desc.style.display = "block";
    } else {
        desc.style.display = "none";
    }
}
</script>

        <!-- Offer Start -->
<div class="container-fluid offer-section pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Offer</h4>
            <h1 class="display-5 mb-4">Benefits We offer</h1>
            <p class="mb-0">We provide a range of benefits designed to enhance your business operations and drive growth. Our expert consulting services deliver tailored strategies that address your unique challenges, while our comprehensive financial solutions optimize your capital and investments. With access to a robust network of industry connections, you can leverage valuable partnerships and insights that accelerate your market entry and expansion. Additionally, our commitment to transparency and client-focused service ensures that you receive the support and guidance needed to make informed decisions. By partnering with us, you gain a trusted ally dedicated to empowering your success and helping you achieve your business objectives.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="nav nav-pills bg-light rounded p-5">
                    <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                        <h5 class="mb-0">Lending money for investment of your new projects</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                        <h5 class="mb-0">Investment strategies tailored to your needs</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                        <h5 class="mb-0">Mobile payment solutions for all investors</h5>
                    </a>
                    <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                        <h5 class="mb-0">Zero transaction fees for pro traders</h5>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="tab-content">
                    <div id="collapseOne" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-1.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                <p class="mb-4">The stock market provides a vital venue for businesses to raise capital and for investors to participate in the growth of companies.</p>
                                <button class="btn btn-primary rounded-pill py-2 px-4" onclick="toggleDescription('descOne')">Learn More</button>
                                <div id="descOne" class="mt-3" style="display: none;">
                                    <p>The stock market serves as a platform where shares of publicly traded companies are bought and sold, allowing businesses to access the funds needed for expansion, innovation, and operational improvements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-2.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Investment strategies tailored to your needs</h1>
                                <p class="mb-4">Fluctuations in stock prices can indicate broader economic trends.</p>
                                <button class="btn btn-primary rounded-pill py-2 px-4" onclick="toggleDescription('descTwo')">Learn More</button>
                                <div id="descTwo" class="mt-3" style="display: none;">
                                    <p>By analyzing market movements, investors and policymakers gain valuable insights into the economic landscape.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-3.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Mobile payment solutions for all investors</h1>
                                <p class="mb-4">Investors can enjoy high returns but must navigate market volatility.</p>
                                <button class="btn btn-primary rounded-pill py-2 px-4" onclick="toggleDescription('descThree')">Learn More</button>
                                <div id="descThree" class="mt-3" style="display: none;">
                                    <p>Diversification, research, and a well-thought-out investment strategy are essential for navigating these risks effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFour" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-4.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Zero transaction fees for pro traders</h1>
                                <p class="mb-4">Investors can access international markets, diversifying their portfolios.</p>
                                <button class="btn btn-primary rounded-pill py-2 px-4" onclick="toggleDescription('descFour')">Learn More</button>
                                <div id="descFour" class="mt-3" style="display: none;">
                                    <p>Understanding international market dynamics is essential for making informed investment decisions and managing risk effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

<script>
    function toggleDescription(id) {
        const desc = document.getElementById(id);
        desc.style.display = desc.style.display === 'none' ? 'block' : 'none';
    }
</script>


        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Blog & News</h4>
                    <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
                    <p class="mb-0">Welcome to our blog and news section, dedicated to professional traders seeking to stay ahead in the fast-paced world of financial markets. Here, you’ll find in-depth articles, market analyses, and expert insights that cater specifically to the needs of seasoned traders. From strategies for navigating volatility to updates on economic indicators and market trends, our content is designed to enhance your trading acumen and inform your decision-making. Whether you’re looking for technical analysis, risk management tips, or commentary on global events, our curated resources empower you to trade with confidence and precision.

                    </p>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">The options trading business offers unique opportunities for investors to enhance their portfolios and manage risk effectively. By trading options, investors can leverage their positions, hedge against market volatility, and generate income through various strategies, such as writing covered calls or engaging in spreads. Successful options trading requires a deep understanding of market dynamics, technical analysis, and the nuances of option pricing. As traders develop their strategies, they must also stay informed about market trends and economic indicators that can impact their positions. With disciplined risk management and a well-thought-out trading plan, options trading can become a lucrative venture for those willing to invest the time and effort to master the craft.
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">September 1, 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">The options trading business provides a dynamic avenue for investors to engage with financial markets by leveraging the power of options contracts. Unlike traditional stock trading, options allow traders to speculate on price movements, hedge against potential losses, and enhance their portfolios through strategic positioning. The versatility of options enables a variety of trading strategies, such as straddles, spreads, and covered calls, catering to different risk appetites and market outlooks.

                            Success in the options trading business hinges on a thorough understanding of market mechanics, including the factors that influence options pricing, such as volatility, time decay, and underlying asset performance. Additionally, effective risk management is crucial; traders must establish clear exit strategies and position sizes to mitigate potential losses. By continuously analyzing market trends and staying informed about economic indicators, traders can make informed decisions that maximize their opportunities in this exciting and complex field.
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">September 5, 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">In the options trading business, various strategies can be employed to maximize profits and minimize risks. Traders may choose to implement simple strategies like covered calls, which involve selling call options against owned stock, or more advanced tactics such as straddles and strangles that capitalize on volatility. Each strategy requires careful consideration of market conditions, including volatility and time decay, as these factors can significantly impact the profitability of options trades. Developing a solid trading plan tailored to individual risk tolerance and market outlook is crucial for success.

                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-4.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Options trading involves buying and selling contracts that give traders the right, but not the obligation, to buy or sell an underlying asset at a specific price within a certain timeframe. Unlike traditional stock trading, options provide a unique way to leverage positions, enabling traders to control larger amounts of stock for a fraction of the cost. Understanding the fundamentals of options, such as call and put options, expiration dates, and strike prices, is essential for anyone looking to navigate this complex financial landscape effectively.

                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- FAQs Start -->
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-0">Our Frequently Asked Questions (FAQs) section is designed to provide you with clear and concise answers to common inquiries about options trading. Whether you're a novice looking to understand the basics or a seasoned trader seeking specific strategies, this resource aims to clarify key concepts and address your concerns. From the fundamental principles of options trading to advanced strategies and risk management techniques, our FAQs cover a wide range of topics to help you navigate the complexities of the options market with confidence. If you have any additional questions, feel free to reach out to us for personalized assistance!

                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                            <div class="accordion-item rounded-top">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">This tool is designed to enhance your options trading experience by offering a range of features tailored for traders at all levels. It provides real-time market data, advanced charting capabilities, and in-depth analysis to support informed decision-making. Additionally, the tool includes educational resources, strategy guides, and risk management calculators, empowering users to develop effective trading strategies. Whether you aim to analyze market trends, evaluate potential trades, or monitor your portfolio's performance, this tool equips you with the insights and resources necessary to navigate the options market with confidence. With a sleek interface that implements the <code></code> class, it ensures a clean and organized layout for easy access to all features.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    What Are The Disadvantages Of Online Trading?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Online trading comes with several disadvantages that traders should consider. One major drawback is the lack of personal interaction, which can limit access to personalized guidance from financial advisors. Additionally, the overwhelming amount of information and data available on trading platforms can lead to confusion, especially for novice traders. Technical issues, such as system outages or slow internet connections, may disrupt trading activities and result in missed opportunities. Finally, the ease of access to trading platforms can encourage emotional decision-making, leading to impulsive trades rather than adherence to a disciplined strategy. Together, these factors can pose significant challenges for online traders, particularly when navigating the complexities of the market.<code></code> class. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is Online Trading Safe?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">When considering whether online trading is safe, several factors come into play. Generally, reputable online trading platforms implement robust security measures, such as encryption and two-factor authentication, to protect users' personal and financial information. However, the risk of cyberattacks and fraud still exists, making it essential for traders to choose a platform that is regulated and has a solid reputation. Additionally, traders must practice good security hygiene, such as using strong passwords and regularly monitoring their accounts for suspicious activity. While online trading can be safe when proper precautions are taken, it is crucial for traders to remain vigilant and informed about the potential risks associated with their trading activities.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    What Is Online Trading, And How Dose It Work?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Online trading refers to the process of buying and selling financial instruments, such as stocks, options, futures, and currencies, through internet-based platforms. This modern approach allows traders to execute trades from anywhere in the world, provided they have an internet connection.

                                        The process typically begins with opening an account with an online brokerage, where traders deposit funds to use for trading. Once the account is set up, traders can access various tools and resources, including real-time market data, charts, and analysis. They place trades by entering the desired asset, the quantity, and the type of order (e.g., market or limit order) through the trading platform. The trade is then executed electronically, and the results are reflected in the trader’s account almost instantaneously. Online trading empowers individuals to manage their investments actively and take advantage of market opportunities in real time.
                                        
                                        </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Which App Is Best For Online Trading?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">When it comes to online trading, several apps stand out for their features, usability, and reliability. Robinhood is popular among beginners for its user-friendly interface and commission-free trading on stocks and options. TD Ameritrade's thinkorswim platform offers advanced tools and analytics, making it ideal for more experienced traders who require in-depth market research. E*TRADE combines ease of use with robust trading features, including educational resources and a variety of investment options.

                                        For those interested in cryptocurrency, Coinbase is widely recognized for its simplicity and security. Additionally, Webull caters to both novice and experienced traders, providing commission-free trading along with comprehensive market analysis tools. Ultimately, the best app for online trading depends on your individual needs, such as the types of assets you want to trade, your trading experience, and the features you prioritize.
                                        
                                        </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-bottom">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    How To Create A Trading Account?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Creating a trading account is a straightforward process that begins with selecting a reputable online brokerage that fits your trading needs. Once you’ve chosen a broker, visit their website and complete the online application form, providing your personal information, including your name, email, and address. Most brokers will require identity verification, so be prepared to upload a government-issued ID and proof of address. After your account is approved, fund it using your preferred method, such as a bank transfer or credit card. Finally, download the trading platform, familiarize yourself with its features, and you’ll be ready to start trading.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <img src="img/about-2.png" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


         <!-- Team Start -->
         <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <p class="mb-0">At Quants-AI, our strength lies in our people. Meet the talented team of professionals who drive our mission forward every day.</p>
                    <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                    
<table class="table table-striped table-bordered">
  <thead class="table-dark">
    <tr>
      <th>Name</th>
      <th>Role</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Rajesh Kumar</td>
      <td>Chief Financial Adviser</td>
      <td>With over 20 years of experience in the financial sector, Rajesh is a master of market analysis and investment strategies. His expertise has guided countless clients to financial success.</td>
    </tr>
    <tr>
      <td>Anjali Sharma</td>
      <td>Investment Strategist</td>
      <td>Anjali's knack for identifying market trends and opportunities makes her a crucial part of our advisory team. Her strategic insights help our clients navigate the complexities of trading.</td>
    </tr>
    <tr>
      <td>Prakash Mehta</td>
      <td>Risk Management Expert</td>
      <td>Prakash's deep understanding of risk assessment ensures that our clients' investments are secure. His strategies mitigate potential risks and enhance profitability.</td>
    </tr>
    <tr>
      <td>Neha Gupta</td>
      <td>Client Relations Specialist</td>
      <td>Neha's dedication to client satisfaction makes her the heart of our team. Her personalized approach ensures that each client receives the best possible service and support.</td>
    </tr>
  </tbody>
</table>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/Nishant.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Nishant Sankar Swain</h4>
                                <p class="mb-0">Devloper</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
         <br><br>
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                    <p class="mb-0">At Quants-AI, our clients’ success stories speak volumes. Raj Malhotra praises our advanced tools and insights for revolutionizing his trading strategy, while Sneha Patel finds our educational resources indispensable for novice traders. Anil Deshmukh values our risk management strategies that boost his trading confidence, and Priya Nair lauds our responsive customer service. Rahul Verma commends our comprehensive suite of tools, catering to traders of all levels, making Quants-AI the ultimate trading partner.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Quants-AI has revolutionized the way I trade. Their advanced tools and insights have significantly improved my portfolio. I couldn't be happier!" Raj praises Quants-AI for its transformative impact on his trading strategies, highlighting the role of advanced tools and insights in enhancing his portfolio.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Raj Malhotra</h4>
                                <p class="mb-0">Senior Trader</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">As a novice trader, I found Quants-AI's educational resources incredibly helpful. The support team is always there to assist, making the entire experience seamless." Sneha appreciates Quants-AI's educational resources and supportive team, making her trading experience smooth and educational.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Sneha Patel</h4>
                                <p class="mb-0">Junior Trader</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">The risk management strategies provided by Quants-AI have given me confidence in my trades. Their platform is intuitive and user-friendly." Anil commends Quants-AI's intuitive platform and effective risk management strategies for boosting his trading confidence.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Anil Deshmukh</h4>
                                <p class="mb-0">Risk Manager</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Quants-AI offers a comprehensive suite of tools that caters to traders of all levels. The market analysis provided is always spot-on. A must for serious traders!" Rahul praises Quants-AI's comprehensive tools and accurate market analysis, making it essential for serious traders.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Rahul Verma</h4>
                                <p class="mb-0">Market Analyst</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.php" class="p-0">
                                <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Quants-AI</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            <div class="d-flex">
                                <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                    <i class="fas fa-apple-alt text-white"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Download on the</small>
                                        <h6 class="text-white">App Store</h6>
                                    </div>
                                </a>
                                <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                    <i class="fas fa-play text-primary"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Get it on</small>
                                        <h6 class="text-white">Google Play</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">Bhubaneswar , Odisha , India</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">quantsai@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+91) 79445 25874</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">QuantsAI.com</p>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Quants-AI</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">Nishant Sankar Swain</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
document.getElementById("logout-link").addEventListener("click", function(event) {
    event.preventDefault(); 
    const confirmLogout = confirm("Are you sure you want to logout?");
    
    if (confirmLogout) {
        
        window.location.href = "logout.php";
    }
});


window.addEventListener("beforeunload", function(event) {
    
    navigator.sendBeacon("logout.php"); 
});
</script>
<script>
             document.getElementById('discover-btn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    const contentContainer = document.getElementById('content-container');
    const demElement = contentContainer.querySelector('.dem');

    if (contentContainer.style.display === 'flex') {
        // If content is currently displayed, remove the visible class and hide it
        demElement.classList.remove('visible');
        setTimeout(() => {
            contentContainer.style.display = 'none'; // Hide the content after the animation
        }, 500); // Match this timeout with the transition duration
    } else {
        // If content is hidden, show it
        contentContainer.style.display = 'flex'; // Use flex display
        setTimeout(() => {
            demElement.classList.add('visible'); // Add class for animation
        }, 10); // Small timeout to trigger CSS transition
    }
});

        </script>
    </body>

</html>