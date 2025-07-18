<?php
session_start();
include("include/db.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = trim($_POST['fname']);
    $email = trim($_POST['email']);
    $number = (int)$_POST['number']; // Cast to integer since it's INT in database
    $message = trim($_POST['message']);

    // Validate all required fields
    if(!empty($fullname) && !empty($email) && !empty($number) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Use correct table name: cclientinfo (not form)
        $query = "INSERT INTO cclientinfo (fname, email, number, message) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        
        if ($stmt) {
            // Bind parameters: s=string, i=integer, s=string, s=string
            mysqli_stmt_bind_param($stmt, "siss", $fullname, $email, $number, $message);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "')</script>";
            }
            
            mysqli_stmt_close($stmt);
        } else {
            echo "<script type='text/javascript'>alert('Error preparing statement: " . mysqli_error($con) . "')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please fill all required fields with valid data')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/navbar.css">
    <link rel="stylesheet" href="assests/css/footer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 80px 20px 20px;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 600px;
        }

        .left-section {
            flex: 1;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            position: relative;
        }

        .diamond-grid {
            display: grid;
            grid-template-columns: repeat(3, 120px);
            grid-template-rows: repeat(3, 120px);
            gap: 15px;
            transform: rotate(45deg);
        }

        .diamond-item {
            width: 120px;
            height: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 14px;
            transform: rotate(-45deg);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .diamond-item:hover {
            transform: rotate(-45deg) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .diamond-item.green {
            background: linear-gradient(135deg, #4CAF50, #45a049);
        }

        .diamond-item.red {
            background: linear-gradient(135deg, #FF5757, #FF4444);
        }

        .diamond-item.blue {
            background: linear-gradient(135deg, #5DADE2, #3498DB);
        }

        .diamond-icon {
            width: 24px;
            height: 24px;
            margin-bottom: 8px;
            fill: currentColor;
        }

        .diamond-text {
            font-size: 12px;
            text-align: center;
            font-weight: 600;
            line-height: 1.2;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h1 {
            color: #333;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-header p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
            color: #333;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-textarea {
            min-height: 80px;
            resize: vertical;
            font-family: inherit;
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: #999;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 80px 15px 15px;
            }

            .main-container {
                flex-direction: column;
                max-width: 100%;
                margin: 0 auto;
            }

            .left-section {
                min-height: 250px;
                padding: 25px;
            }

            .diamond-grid {
                grid-template-columns: repeat(3, 80px);
                grid-template-rows: repeat(3, 80px);
                gap: 12px;
            }

            .diamond-item {
                width: 80px;
                height: 80px;
                font-size: 10px;
            }

            .diamond-icon {
                width: 16px;
                height: 16px;
                margin-bottom: 4px;
            }

            .diamond-text {
                font-size: 8px;
            }

            .right-section {
                padding: 25px;
            }

            .form-header h1 {
                font-size: 22px;
            }

            .form-header p {
                font-size: 13px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-input,
            .form-textarea {
                padding: 10px 12px;
                font-size: 13px;
            }

            .submit-btn {
                padding: 12px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 80px 10px 10px;
            }

            .left-section {
                padding: 20px;
                min-height: 200px;
            }

            .diamond-grid {
                grid-template-columns: repeat(3, 60px);
                grid-template-rows: repeat(3, 60px);
                gap: 8px;
            }

            .diamond-item {
                width: 60px;
                height: 60px;
                font-size: 8px;
            }

            .diamond-icon {
                width: 12px;
                height: 12px;
                margin-bottom: 3px;
            }

            .diamond-text {
                font-size: 7px;
            }

            .right-section {
                padding: 20px;
            }

            .form-header h1 {
                font-size: 20px;
            }

            .form-header p {
                font-size: 12px;
            }

            .form-input,
            .form-textarea {
                padding: 8px 10px;
                font-size: 12px;
            }

            .submit-btn {
                padding: 10px;
                font-size: 13px;
            }
        }

        /* Ensure no scrolling issues */
        @media (max-height: 700px) {
            body {
                padding: 60px 20px 10px;
            }
            
            .left-section {
                padding: 20px;
                min-height: 150px;
            }
            
            .right-section {
                padding: 20px;
            }
            
            .form-header {
                margin-bottom: 15px;
            }
            
            .form-group {
                margin-bottom: 12px;
            }

            .diamond-grid {
                grid-template-columns: repeat(3, 70px);
                grid-template-rows: repeat(3, 70px);
                gap: 8px;
            }

            .diamond-item {
                width: 70px;
                height: 70px;
            }

            .diamond-icon {
                width: 14px;
                height: 14px;
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
        <div class="left-section">
            <div class="diamond-grid">
                <div class="diamond-item green">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    <div class="diamond-text">Ecommerce</div>
                </div>
                <div class="diamond-item red">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <div class="diamond-text">Construction</div>
                </div>
                <div class="diamond-item blue">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <div class="diamond-text">Fashion</div>
                </div>
                <div class="diamond-item red">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.20-1.10-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                    </svg>
                    <div class="diamond-text">Food</div>
                </div>
                <div class="diamond-item blue">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                    <div class="diamond-text">Healthcare</div>
                </div>
                <div class="diamond-item green">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                    <div class="diamond-text">Education</div>
                </div>
                <div class="diamond-item green">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M22 11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3z"/>
                    </svg>
                    <div class="diamond-text">Engineering</div>
                </div>
                <div class="diamond-item red">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    <div class="diamond-text">Retail</div>
                </div>
                <div class="diamond-item blue">
                    <svg class="diamond-icon" viewBox="0 0 24 24">
                        <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                    </svg>
                    <div class="diamond-text">Finance</div>
                </div>
            </div>
        </div>
        
        <div class="right-section">
            <div class="form-header">
                <h1>Contact</h1>
                <p>We are happy to provide you 30 mins free consultation to discuss your idea and requirement.</p>
            </div>
            
            <form method="POST" id="contactForm">
                <div class="form-group">
                    <input type="text" class="form-input" name="fname" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-input" name="email" placeholder="Email*" required>
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-input" name="number" placeholder="Phone" required>
                </div>
                
                <div class="form-group">
                    <textarea class="form-textarea" name="message" placeholder="Message" rows="3"></textarea>
                </div>
                
                <button type="submit" value="submit" class="submit-btn">Submit Query</button>
            </form>
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
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const name = e.target.querySelector('input[name="fname"]').value;
            const email = e.target.querySelector('input[name="email"]').value;
            const phone = e.target.querySelector('input[name="number"]').value;
            
            // Basic validation
            if (!name || !email || !phone) {
                alert('Please fill in all required fields.');
                e.preventDefault();
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                e.preventDefault();
                return;
            }

            // Phone number validation (basic check for numbers only)
            if (!/^\d+$/.test(phone)) {
                alert('Please enter a valid phone number (numbers only).');
                e.preventDefault();
                return;
            }
        });

        // Add focus effects
        const inputs = document.querySelectorAll('.form-input, .form-textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-1px)';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>