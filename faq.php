<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assests/css/navbar.css">
        <link rel="stylesheet" href="assests/css/footer.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Tax Filing FAQ - TaxHelp Pro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            min-height: 100vh;
            margin-top: 70px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            padding: 40px 0;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            color: #2d5a27;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            color: #2d5a27;
        }

        .search-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .search-box {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #2d5a27;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #2d5a27;
            font-size: 20px;
        }

        .category-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .filter-btn {
            padding: 8px 16px;
            border: 2px solid #2d5a27;
            background: white;
            color: #2d5a27;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #2d5a27;
            color: white;
            transform: translateY(-2px);
        }

        .faq-content {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .faq-category {
            margin-bottom: 40px;
        }

        .category-title {
            font-size: 1.5rem;
            color: #2d5a27;
            margin-bottom: 20px;
            padding-left: 20px;
            position: relative;
        }

        .category-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 30px;
            background: linear-gradient(135deg, #2d5a27, #4a7c59);
            border-radius: 2px;
        }

        .faq-item {
            border: 1px solid #e1e5e9;
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .faq-question {
            padding: 20px;
            background: #f8f9fa;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: #e9ecef;
        }

        .faq-question h3 {
            font-size: 1.1rem;
            color: #333;
            margin: 0;
        }

        .faq-toggle {
            font-size: 1.5rem;
            color: #2d5a27;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
        }

        .faq-item.active .faq-answer {
            padding: 20px;
            max-height: 500px;
        }

        .faq-answer p {
            margin-bottom: 15px;
            color: #555;
        }

        .faq-answer ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .faq-answer li {
            margin-bottom: 8px;
            color: #555;
        }

        .contact-section {
            background: linear-gradient(135deg, #2d5a27, #4a7c59);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-top: 40px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .contact-section p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .contact-btn {
            display: inline-block;
            padding: 15px 30px;
            background: white;
            color: #2d5a27;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
            display: none;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 10px;
            }
            
            .search-container,
            .faq-content,
            .contact-section {
                padding: 20px;
            }
            
            .category-filters {
                justify-content: center;
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
    <div class="container">
        <div class="header">
            <h1>Frequently Asked Questions</h1>
            <p>Get answers to common tax filing questions</p>
        </div>


        <div class="faq-content">
            <div class="no-results" id="noResults">
                <h3>No results found</h3>
                <p>Try adjusting your search terms or browse all categories.</p>
            </div>

            <div class="faq-category" data-category="filing">
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is income tax and who needs to pay it in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Income tax is a tax on income earned by individuals and businesses. If your annual income exceeds the exemption threshold set by the government, you are required to file and pay income tax.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who is required to file a tax return in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>According to the Income Tax Ordinance, 2001, the following individuals must file tax returns:</p>
                        <ul>
                            <li>Salaried individuals earning above the taxable limit</li>
                            <li>Business owners and professionals</li>
                            <li>Property or vehicle owners (as per FBR notices)</li>
                            <li>Anyone who received a notice from FBR</li>
                            <li>NTN holders</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the deadline for filing income tax returns in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Typically, the deadline is 30th September each year for individuals and businesses. Extensions may be granted, but late filing can result in penalties.</p>
                    </div>
                </div>
            </div>

            <div class="faq-category" data-category="deductions">
               
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is an NTN and how do I get one?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>NTN stands for National Tax Number. It is issued by FBR when you register as a taxpayer. You can apply for NTN online through FBR’s IRIS portal.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How can I register myself with FBR?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>You can register through the IRIS Portal (https://iris.fbr.gov.pk/) by creating an account with your CNIC and email.</p>
                       
                    </div>
                </div>
            </div>

            <div class="faq-category" data-category="refunds">
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a filer and non-filer?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>A filer is a person whose name appears on the Active Taxpayer List (ATL) maintained by FBR. Non-filers are not listed and are subject to higher tax rates on banking transactions, property, and vehicle purchases.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How can I become a filer?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>To become a filer, submit your tax return via the IRIS portal. Once accepted, your name will appear in the ATL usually after a few weeks.</p>
                       
                    </div>
                </div>
            </div>

            <div class="faq-category" data-category="deadlines">
            
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the penalty for not filing a tax return in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Penalties can range from Rs. 1,000 to Rs. 50,000, depending on your income and type of non-compliance. Continued failure may lead to legal action or freezing of bank accounts.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I file taxes without an NTN?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>No, an NTN or registration on IRIS is mandatory to file income tax returns in Pakistan.</p>
                       
                    </div>
                </div>
            </div>

            <div class="faq-category" data-category="forms">
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documents are required to file a tax return in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        
                        <ul>
                            <li>CNIC</li>
                            <li>Salary Certificate / Pay Slip</li>
                            <li>Bank statements</li>
                            <li>Tax deduction certificates (if any) </li>
                            <li>Evidence of expenses for business owners </li>
                            <li>Property documents (if applicable)</li>
                            <li>NTN</li>
                        </ul>
                      
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the benefit of filing tax returns in Pakistan?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                     
                       <ul>
                            <li>Lower withholding tax on banking and property transactions</li>
                            <li>Legal proof of income</li>
                            <li>Ease in getting visas, loans, and credit cards</li>
                            <li>Avoidance of penalties and legal issues</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-section">
            <h2>Still Have Questions?</h2>
            <p>Our tax experts are here to help you navigate any complex tax situations.</p>
            <a href="contactus.php" class="contact-btn">Contact Our Tax Experts</a>
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
        // FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all other FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Toggle current item
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const faqItems = document.querySelectorAll('.faq-item');
        const noResults = document.getElementById('noResults');
        const categories = document.querySelectorAll('.faq-category');

        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            let hasResults = false;

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });

            // Show/hide categories based on visible items
            categories.forEach(category => {
                const visibleItems = category.querySelectorAll('.faq-item[style="display: block"], .faq-item:not([style*="display: none"])');
                const hasVisibleItems = searchTerm === '' || visibleItems.length > 0;
                category.style.display = hasVisibleItems ? 'block' : 'none';
            });

            noResults.style.display = hasResults || searchTerm === '' ? 'none' : 'block';
        });

        // Category filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const category = btn.dataset.category;
                
                // Clear search
                searchInput.value = '';
                
                // Show/hide categories
                categories.forEach(cat => {
                    if (category === 'all' || cat.dataset.category === category) {
                        cat.style.display = 'block';
                    } else {
                        cat.style.display = 'none';
                    }
                });
                
                // Reset FAQ items visibility
                faqItems.forEach(item => {
                    item.style.display = 'block';
                });
                
                noResults.style.display = 'none';
            });
        });
    </script>
</body>
</html>