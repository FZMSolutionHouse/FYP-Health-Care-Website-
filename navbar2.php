<!DOCTYPE html>
<head>
    <title>Demo Site</title>
    <link rel="stylesheet" href="assests/css/navbar2.css">
</head>
<html>
    <body>
<nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                KTC
            </a>
            
            <div class="nav-right">
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">
                            <span class="icon">🏠</span>
                            Home
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown" id="taxToolDropdown">
                        <a href="#" class="nav-link" onclick="toggleDropdown(event)">
                            <span class="icon">⚙️</span>
                            Tax Tool
                            <span class="dropdown-arrow">▼</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#calculator" class="dropdown-item">
                                <span class="icon">🧮</span>
                                Calculator
                            </a>
                            <a href="#ntn" class="dropdown-item">
                                <span class="icon">📋</span>
                                NTN
                            </a>
                            <a href="#blogs" class="dropdown-item">
                                <span class="icon">📝</span>
                                Blogs
                            </a>
                            <a href="#faq" class="dropdown-item">
                                <span class="icon">❓</span>
                                FAQ
                            </a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#resource" class="nav-link">
                            <span class="icon">📚</span>
                            Resource
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#business" class="nav-link">
                            <span class="icon">💼</span>
                            Business Service
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">
                            <span class="icon">📞</span>
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item mobile-signup">
                        <a href="#signup" class="signup-btn">
                            <span class="icon">👤</span>
                            Sign Up
                        </a>
                    </li>
                </ul>
                
                <a href="#signup" class="signup-btn desktop-signup">
                    <span class="icon">👤</span>
                    Sign Up
                </a>
                
                <div class="hamburger" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
    </body>
    <script src="assests/javascript/navbar2.js"></script>
</html>

