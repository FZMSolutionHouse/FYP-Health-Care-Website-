<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resources</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/navbar.css">
    <link rel="stylesheet" href="assests/css/footer.css">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #2d5a27;
            margin-bottom: 30px;
        }

        .pdf-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .pdf-container {
            background: #ffffff;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .pdf-container:hover {
            transform: translateY(-5px);
        }

        .pdf-title {
            font-weight: bold;
            color: #2d5a27;
            margin-bottom: 10px;
            font-size: 16px;
        }

        iframe {
            width: 100%;
            height: 250px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        a.download-link {
            display: inline-block;
            margin-top: 10px;
            color: white;
            background-color: #2d5a27;
            padding: 8px 14px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        a.download-link:hover {
            background-color: #4a7c59;
        }

    </style>
</head>
<?php

?>
<>

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
    <h1>📚 PDF Resources</h1>

    <div class="pdf-section">
        <div class="pdf-container">
            <div class="pdf-title">Appellate Tribunal Inland Revenue Rules 2010 SRO</div>
            <iframe src="pdfs/file1.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file1.pdf" target="_blank">Open Full PDF</a>
        </div>

        <div class="pdf-container">
            <div class="pdf-title">Customs Act 1969 - June 2023</div>
            <iframe src="pdfs/file2.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file2.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">Customs Rules, 2001</div>
            <iframe src="pdfs/file3.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file3.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">ICT Ordinance - June 2023</div>
            <iframe src="pdfs/file4.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file4.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">FED Act - June 2023</div>
            <iframe src="pdfs/file5.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file5.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">Federal Excise Rules, 2005 - Oct 2023</div>
            <iframe src="pdfs/file6.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file6.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">ITO 2001 - June 2023</div>
            <iframe src="pdfs/file7.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file7.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">ITO 2001 - June 2024</div>
            <iframe src="pdfs/file8.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file8.pdf" target="_blank">Open Full PDF</a>
        </div>

                <div class="pdf-container">
            <div class="pdf-title">SRB withholding rules 2011</div>
            <iframe src="pdfs/file9.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file9.pdf" target="_blank">Open Full PDF</a>
        </div>

         <div class="pdf-container">
            <div class="pdf-title">STA 1990 - June 2023</div>
            <iframe src="pdfs/file10.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file10.pdf" target="_blank">Open Full PDF</a>
        </div>

         <div class="pdf-container">
            <div class="pdf-title">Income Tax Rules, 2002 - Nov 2023</div>
            <iframe src="pdfs/file11.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file11.pdf" target="_blank">Open Full PDF</a>
        </div>


                 <div class="pdf-container">
            <div class="pdf-title">Sales Tax Rules, 2006 - Oct 2023</div>
            <iframe src="pdfs/file12.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file12.pdf" target="_blank">Open Full PDF</a>
        </div>

                 <div class="pdf-container">
            <div class="pdf-title">Sindh-Sales-Tax-on-Services-Act-2011-updated-upto-1st-July-2024-EOE-6</div>
            <iframe src="pdfs/file13.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file13.pdf" target="_blank">Open Full PDF</a>
        </div>
        
                 <div class="pdf-container">
            <div class="pdf-title">Sindh-Sales-Tax-Special-Procedure-Withholding-Rules-2014-Updated-upto-1st-July-2024-EOE-4</div>
            <iframe src="pdfs/file14.pdf#toolbar=0"></iframe>
            <a class="download-link" href="pdfs/file14.pdf" target="_blank">Open Full PDF</a>
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
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/keytaxconsultancy?igsh=MTluZzI5OGR2d3RyNA=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="../index.php">Home</a></p>
                    <p><a href="../BS.php">Services</a></p>
                    <p><a href="../pages/contactus.php">Contact Us</a></p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <p><a href="../BS.php">Individual Tax Return</a></p>
                    <p><a href="../BS.php">Business Tax Filing</a></p>
                    <p><a href="../BS.php">Tax Planning</a></p>
                    <p><a href="../BS.php">Audit Protection</a></p>
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

</body>

<script src="../assests/javascript/index.js"></script>

</html>
