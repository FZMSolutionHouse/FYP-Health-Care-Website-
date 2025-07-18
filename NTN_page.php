<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BS.css">
    <link rel="stylesheet" href="assests/css/navbar.css">
    <link rel="stylesheet" href="assests/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>NTN Status - Key Tax Consultancy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f5f5f5;
            padding-top: 70px;
        }

        /* Hamburger Menu Button */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Main Content Styles */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #2d5a27;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .verification-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            /* Green border on left and bottom */
            border-left: 4px solid #2d5a27;
            border-bottom: 4px solid #4a7c59;
        }

        .verification-container h2 {
            font-size: 2rem;
            color: #2d5a27;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .verification-container p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .link-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #90EE90, #32CD32);
            color: #2d5a3d;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(144, 238, 144, 0.3);
        }

        .link-btn:hover {
            background: linear-gradient(135deg, #32CD32, #90EE90);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(144, 238, 144, 0.4);
        }

        .benefits-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .benefits-title {
            font-size: 2rem;
            color: #2d5a27;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .ntn-text {
            color: #4a7c59;
            font-weight: 700;
        }

        .benefit-item {
            margin-bottom: 30px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 12px;
            border-left: 4px solid #2d5a27;
            transition: transform 0.3s ease;
        }

        .benefit-item:hover {
            transform: translateX(5px);
        }

        .benefit-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2d5a27;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .benefit-title::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #2d5a27;
            font-size: 1.1rem;
        }

        .benefit-description {
            color: #666;
            line-height: 1.6;
            font-size: 1rem;
        }

        .highlight {
            background: linear-gradient(120deg, #90EE90, #32CD32);
            color: #2d5a27;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: 600;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 15px;
                flex-wrap: wrap;
            }
            
            .logo {
                font-size: 24px;
            }

            .hamburger {
                display: flex;
                order: 2;
            }

            .nav-right {
                order: 2;
            }

            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #2d5a3d 0%, #45644A 100%);
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 20px 0;
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-item {
                width: 100%;
                text-align: center;
            }

            .nav-link {
                padding: 15px 20px;
                margin: 5px 20px;
                border-radius: 8px;
                justify-content: center;
                width: auto;
            }

            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background: rgba(255, 255, 255, 0.1);
                margin: 0 20px;
                border-radius: 8px;
                display: none;
            }

            .dropdown.active .dropdown-menu {
                display: block;
            }

            .dropdown-item {
                color: white;
                margin: 5px 10px;
            }

            .dropdown-item:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: none;
            }

            .signup-btn {
                margin: 10px 20px;
                justify-content: center;
            }

            .mobile-signup {
                display: none;
            }

            .content-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .header h1 {
                font-size: 2.2rem;
            }

            .main-container {
                padding: 20px 15px;
            }

            .verification-container,
            .benefits-container {
                padding: 25px;
            }

            .verification-container h2,
            .benefits-title {
                font-size: 1.6rem;
            }

            .benefit-item {
                padding: 20px;
            }

            .benefit-title {
                font-size: 1.1rem;
            }

            .link-btn {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }

        /* Hide desktop signup on mobile, show mobile signup */
        @media (max-width: 768px) {
            .desktop-signup {
                display: none;
            }
            
            .mobile-signup {
                display: flex;
            }
        }

        .desktop-signup {
            display: flex;
        }

        .mobile-signup {
            display: none;
        }

        @media (max-width: 480px) {
            .main-container {
                padding: 15px 10px;
            }

            .header h1 {
                font-size: 1.5rem;
            }

            .header p {
                font-size: 0.9rem;
            }

            .verification-container,
            .benefits-container {
                padding: 20px;
            }

            .verification-container h2,
            .benefits-title {
                font-size: 1.4rem;
            }

            .benefit-item {
                padding: 15px;
                margin-bottom: 20px;
            }

            .benefit-title {
                font-size: 1rem;
            }

            .benefit-description {
                font-size: 0.9rem;
            }

            .link-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
  <!-- Navigation -->
     <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="logo">
                <span class="logo-text">KTC</span>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Tax Tool
                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                    </a>
                    <div class="dropdown">
                    <div class="dropdown-item">
                        <a href="calculator.php" class="dropdown-link">
                            <i class="fas fa-calculator"></i>
                            Tax Calculator
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="NTN_page.php" class="dropdown-link">
                            <i class="fas fa-id-card"></i>
                            NTN
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="faq.php" class="dropdown-link">
                            <i class="fas fa-question-circle"></i>
                            FAQ
                        </a>
                    </div>
                     <div class="dropdown-item">
                        <a href="blog.php" class="dropdown-link">
                            <i class="fas fa-pen-square"></i>
                            BLog
                        </a>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link">
                        <i class="fas fa-folder-open"></i>
                        Resources
                    </a>
                </li>
                <li class="nav-item">
                    <a href="BS.php" class="nav-link">
                 <i class="fa fa-university"></i>
                        Business Service
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php" class="nav-link">
                        <i class="fas fa-envelope"></i>
                       Contact us
                    </a>
                </li>
            </ul>
            <div class="auth-buttons">
             
                <a href="sigupup.php" class="auth-btn signup-btn">
                    <i class="fas fa-user-plus"></i>
                    Sign Up
                </a>
            </div>
            <div class="mobile-menu" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <div class="header">
            <h1>NTN Verification Portal</h1>
            <p>Your trusted partner for tax compliance and verification</p>
        </div>

        <div class="content-wrapper">
            <!-- NTN Verification Section -->
            <div class="verification-container">
                <h2>NTN Verification</h2>
                <p>Verify your NTN status directly from FBR's official website for accurate and up-to-date information.</p>
                <a href="https://e.fbr.gov.pk/esbn/Verification" target="_blank" class="link-btn">
                    <i class="fas fa-external-link-alt"></i>
                    Verify on FBR Website
                </a>
            </div>

            <!-- Benefits Section -->
            <div class="benefits-container">
                <h2 class="benefits-title">Benefits of having <span class="ntn-text">NTN</span></h2>
                
                <div class="benefit-item">
                    <div class="benefit-title">Tax Saving</div>
                    <div class="benefit-description">
                        Get maximum tax saving like claiming tax credits for investments and adjustment of taxes paid on utilities, vehicle, property transactions, and cash withdrawals etc. <span class="highlight">Lower Rate of Withholding Tax</span> Non-Filers are subject to higher rate of taxes on various transactions e.g. withholding tax is applicable on cash withdrawals and banking transfers exceeding Rs. 50,000.
                    </div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-title">Avoid Penalties</div>
                    <div class="benefit-description">
                        Be a responsible citizen and avoid penalties and/or prosecutions from the FBR for not filing return.
                    </div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-title">Compliance Check</div>
                    <div class="benefit-description">
                        Many government related organizations and banks now check your FBR tax filer status before acceding to your requests, like registration of company, purchase of property and loan processing etc.
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <!--  <p><i class="fas fa-phone"></i> (555) 123-4567</p> -->
                    <p><i class="fas fa-envelope"></i>keytaxconsultancyofficial@gmail.com</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/keytaxconsultancy?igsh=MTluZzI5OGR2d3RyNA=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="index.php">Home</a></p>
                    <p><a href="BS.php">Services</a></p>
                    <p><a href="contactus.php">Contact Us</a></p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <p><a href="BS.php">Individual Tax Return</a></p>
                    <p><a href="BS.php">Business Tax Filing</a></p>
                    <p><a href="BS.php">Tax Planning</a></p>
                    <p><a href="BS.php">Audit Protection</a></p>
                </div>
                <div class="footer-section">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 TaxPro. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>


    <script>
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            const hamburger = document.querySelector('.hamburger');
            
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        function toggleDropdown(event) {
            event.preventDefault();
            if (window.innerWidth <= 768) {
                const dropdown = document.getElementById('taxToolDropdown');
                dropdown.classList.toggle('active');
            }
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const navMenu = document.getElementById('navMenu');
            const hamburger = document.querySelector('.hamburger');
            const navbar = document.querySelector('.navbar');
            
            if (!navbar.contains(event.target)) {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const navMenu = document.getElementById('navMenu');
                const hamburger = document.querySelector('.hamburger');
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });
    </script>
</body>
</html>