<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Business Services</title>
  <link rel="stylesheet" href="assests/css/BS.css" />
      <link rel="stylesheet" href="assests/css/navbar.css">
      <link rel="stylesheet" href="assests/css/footer.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
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
  <!-- ✅ Hero Section -->
  <header class="header">
    <h1>Business Services</h1>
    <p>Affordable and Professional Business Services for You</p>
    <button id="callBtn">Whatsapp Contact</button>
  </header>

  <!-- ✅ Tabs & Services Section -->
  <section class="services">
    <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search services by name..." />
</div>

    <div class="tabs">
      <button class="tab active" data-tab="all">All</button>
      <button class="tab" data-tab="tax">Income Tax Return</button>
      <button class="tab" data-tab="corporate">Sales Tax Registration</button>
      <button class="tab" data-tab="bookkeeping">Company's Registration</button>
      <button class="tab" data-tab="intellectual">Intellectual Property</button>
    </div>

    <!-- tabs all -->
  <div class="tab-content active" id="all">
  

  </div>



  <!-- tabs tax -->
  <div class="tab-content" id="tax">

  </div>
  
  <div class="tab-content" id="corporate">
  <!-- Cards for Sales Tax Registration will go here -->
</div>

<!-- tabs bookkeeping -->
<div class="tab-content" id="bookkeeping">
  <!-- Cards for Company's Registration will go here -->
</div>

<!-- tabs intellectual -->
<div class="tab-content" id="intellectual">
  <!-- Cards for Intellectual Property will go here -->
</div>

  </section>

  <!-- ✅ Popup -->
  <div class="popup" id="popup">
    <div class="popup-content">
      <span class="close-btn" id="closePopup">&times;</span>
      <p>Message us at: <strong>0336-4528138</strong></p>
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


  <!-- ✅ Combined JS -->
  <script src="assests/javascript/BS.js"></script>

</body>
</html>
