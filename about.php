<?php
session_start(); // Always start the session at the top

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>About Quants-AI</title>
        <style>
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
.animated-background {
    background: linear-gradient(270deg, #ff6b6b, #f7c6c7, #ff6b81, #ffcc6b);
    background-size: 400% 400%; /* Makes the gradient larger for smooth animation */
    animation: gradient-animation 8s ease infinite; /* Animation duration and type */
    padding: 20px; /* Optional padding */
    border-radius: 8px; /* Rounded corners for better aesthetics */
}

@keyframes gradient-animation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}


        </style>
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
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

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
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-chart-line me-3"></i>Quants-AI</h1>
                    <!--<img src="img/home.webp" alt="Logo">-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
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

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
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
                                            <p>At Quants-AI, we understand that navigating the complexities of international trade requires expert guidance and strategic insight. Our business consulting services are designed to empower organizations to optimize their operations, expand their market reach, and enhance their competitive advantage. With a team of seasoned professionals, we provide tailored solutions that address the unique challenges of your business.

                                                We specialize in market analysis, supply chain optimization, and regulatory compliance, ensuring that our clients make informed decisions that drive growth and profitability. Whether you’re a small startup or an established enterprise, Quants-AI is committed to helping you unlock new opportunities in the global marketplace. </p>
                                        </p>
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
                                
                                <div id="text-container" class="mt-3"></div>                                
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Call Us</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+91 234567890</p>
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

        <div class="animated-background">
            <div class="demo" id="graph-section">
                <h1 class="display-5 text-center mb-4" style="color: #007bff;">Live Sensex Trading Graph</h1>
                <p class="mb-4 text-muted text-center lh-lg">Stay updated with live market movements through our real-time Sensex trading graph. Track the performance of India's leading stock market index, and use our graphing tools to analyze trends, compare historical data, and identify key trading opportunities. With up-to-the-minute data, our Sensex graph empowers you to make better trading decisions.</p>
                <p class="text-center">
                    <a href="https://in.tradingview.com/chart/?symbol=BSE%3ASENSEX" target="_blank" class="btn btn-primary">View Live SENSEX Graph</a>
                </p>
            </div>    
        </div>        
        
        <br><br>    
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
                                <p class="text-white mb-0">Bhuabneswar , Odisha , India</p>
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
                                <p class="text-white mb-0">Yoursite@ex.com</p>
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
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
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