<?php
session_start();
include("include/db.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['fame'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Fixed variable names and added better validation
    if(!empty($email) && !empty($password) && !empty($fullname) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Using prepared statements to prevent SQL injection - FIXED: Added placeholders
        $query = "INSERT INTO form (fame, email, pass) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $password);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "')</script>";
            }
            
            mysqli_stmt_close($stmt);
        } else {
            echo "<script type='text/javascript'>alert('Error preparing statement')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please fill all fields with valid data')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assests/css/navbar.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Key Tax Consultancy - Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .signup-container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border: 3px solid #7FB069;
        }

        .form-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #7FB069;
        }

        .visual-section {
            flex: 1;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            color: white;
        }

        .logo svg {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 600;
        }

        .form-title {
            font-size: 32px;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            font-size: 16px;
            color: #2c3e50;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: white;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }

        .form-input::placeholder {
            color: #888;
        }

        .password-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #666;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #7FB069;
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
        }

        .signup-btn {
            width: 100%;
            padding: 15px;
            background: white;
            color: #7FB069;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .signup-btn:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me input {
            margin-right: 10px;
            transform: scale(1.2);
            accent-color: white;
        }

        .remember-me label {
            color: white;
            font-size: 14px;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .social-btn:hover {
            border-color: white;
            background: rgba(255, 255, 255, 0.2);
        }

        .social-btn svg {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .signin-link {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .signin-link a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .signin-link a:hover {
            text-decoration: underline;
        }

        .tax-illustration {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            position: relative;
        }

        .calculator {
            background: #2c3e50;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: rotate(-5deg);
        }

        .calculator-screen {
            background: #34495e;
            color: #2ecc71;
            padding: 10px;
            border-radius: 8px;
            text-align: right;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            font-family: monospace;
        }

        .calculator-buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }

        .calc-btn {
            background: #ecf0f1;
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            padding: 12px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .calc-btn:hover {
            background: #d5dbdb;
            transform: translateY(-2px);
        }

        .tax-forms {
            display: flex;
            gap: 15px;
            transform: rotate(3deg);
        }

        .form-doc {
            background: white;
            border: 2px solid #7FB069;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            width: 120px;
        }

        .form-doc-2 {
            transform: rotate(-10deg);
            margin-top: 15px;
        }

        .form-header {
            background: #7FB069;
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .form-lines {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-line {
            height: 2px;
            background: #ecf0f1;
            border-radius: 2px;
        }

        .form-line:nth-child(1) { width: 100%; }
        .form-line:nth-child(2) { width: 80%; }
        .form-line:nth-child(3) { width: 90%; }
        .form-line:nth-child(4) { width: 70%; }

        .money-stack {
            display: flex;
            align-items: flex-end;
            gap: 10px;
            transform: rotate(-8deg);
        }

        .bill {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 15px 10px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: 2px solid #1e8449;
        }

        .bill-1 {
            width: 80px;
            height: 40px;
            transform: rotate(-5deg);
        }

        .bill-2 {
            width: 80px;
            height: 40px;
            transform: rotate(5deg);
            margin-top: -10px;
        }

        .bill-3 {
            width: 80px;
            height: 40px;
            transform: rotate(-3deg);
            margin-top: -5px;
        }

        .coins {
            display: flex;
            gap: 5px;
            margin-left: 10px;
        }

        .coin {
            width: 35px;
            height: 35px;
            background: linear-gradient(45deg, #f39c12, #e67e22);
            border: 3px solid #d35400;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .coin:nth-child(2) {
            margin-top: 10px;
        }

        .coin:nth-child(3) {
            margin-top: 20px;
        }

        .tax-badge {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            padding: 15px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transform: rotate(5deg);
        }

        .badge-icon {
            font-size: 24px;
        }

        .badge-text {
            font-weight: bold;
            font-size: 18px;
            letter-spacing: 2px;
        }

        @media (max-width: 768px) {
            .signup-container {
                flex-direction: column;
                max-width: 400px;
            }

            .visual-section {
                order: -1;
                min-height: 200px;
                padding: 20px;
            }

            .form-section {
                padding: 30px 20px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .social-btn {
                justify-content: center;
            }

            .tax-image {
                max-height: 200px;
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
    <div class="signup-container">
        <div class="form-section">
            <div class="logo">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                    <path d="M9 12l2 2 4-4" stroke="white" stroke-width="2" fill="none"/>
                </svg>
                <h1>Key Tax Consultancy</h1>
            </div>
            
            <h2 class="form-title">Sign up</h2>
            <p class="form-subtitle">Create an account to start managing your taxes with our expert consultancy services</p>
            
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-input" name="fame" placeholder="Full Name" required>
                </div>
                   
                <div class="form-group">
                    <input type="email" class="form-input" name="email" placeholder="Email Address" required>
                </div>
                
                <div class="form-group">
                    <div class="password-wrapper">
                        <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <svg id="eye-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <button type="submit" value="submit" class="signup-btn">Sign up</button>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember" checked>
                    <label for="remember">Remember me</label>
                </div>
                
                <div class="divider">Access Quickly</div>
                
                <div class="social-buttons">
                    <a href="#" class="social-btn">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        Google
                    </a>
                </div>
            </form>
            
            <p class="signin-link">
                Already have an account? <a href="#">Sign in</a>
            </p>
        </div>
        
        <div class="visual-section">
            <div class="tax-illustration">
                <!-- Calculator -->
                <div class="calculator">
                    <div class="calculator-screen">2024</div>
                    <div class="calculator-buttons">
                        <div class="calc-btn">7</div>
                        <div class="calc-btn">8</div>
                        <div class="calc-btn">9</div>
                        <div class="calc-btn">+</div>
                        <div class="calc-btn">4</div>
                        <div class="calc-btn">5</div>
                        <div class="calc-btn">6</div>
                        <div class="calc-btn">-</div>
                        <div class="calc-btn">1</div>
                        <div class="calc-btn">2</div>
                        <div class="calc-btn">3</div>
                        <div class="calc-btn">=</div>
                    </div>
                </div>
                
                <!-- Tax Forms -->
                <div class="tax-forms">
                    <div class="form-doc">
                        <div class="form-header">1040</div>
                        <div class="form-lines">
                            <div class="form-line"></div>
                            <div class="form-line"></div>
                            <div class="form-line"></div>
                            <div class="form-line"></div>
                        </div>
                    </div>
                    <div class="form-doc form-doc-2">
                        <div class="form-header">W-2</div>
                        <div class="form-lines">
                            <div class="form-line"></div>
                            <div class="form-line"></div>
                            <div class="form-line"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Money Stack -->
                <div class="money-stack">
                    <div class="bill bill-1">$100</div>
                    <div class="bill bill-2">$50</div>
                    <div class="bill bill-3">$20</div>
                    <div class="coins">
                        <div class="coin">$</div>
                        <div class="coin">$</div>
                        <div class="coin">$</div>
                    </div>
                </div>
                
                <!-- Tax Badge -->
                <div class="tax-badge">
                    <div class="badge-icon">📊</div>
                    <div class="badge-text">TAX EXPERT</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                    <line x1="1" y1="1" x2="23" y2="23"/>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                `;
            }
        }
    </script>
</body>
</html>