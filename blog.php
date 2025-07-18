<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assests/css/navbar.css">
     <link rel="stylesheet" href="assests/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Befiler Blog Posts</title>
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
            background: linear-gradient(135deg, #f8fffe 0%, #f0f9f6 100%);
            min-height: 100vh;
            padding-top: 70px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #2d5a27 0%, #4a7c59 100%);
            color: white;
            padding: 2rem 0;
            box-shadow: 0 4px 20px rgba(45, 90, 61, 0.2);
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            text-align: center;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Search Bar */
        .search-section {
            background: white;
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-bar {
            display: flex;
            max-width: 600px;
            margin: 0 auto;
            gap: 1rem;
        }

        .search-input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: 2px solid #e0e7e3;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #2d5a27;
            box-shadow: 0 0 20px rgba(74, 124, 89, 0.2);
        }

        .search-btn {
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #2d5a27 0%, #4a7c59 100%);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 124, 89, 0.4);
        }

        .clear-btn {
            padding: 1rem 1.5rem;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: none;
        }

        .clear-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
        }

        .search-results {
            text-align: center;
            color: #666;
            margin: 1rem 0;
            font-style: italic;
        }

        /* Main Content */
        .main-content {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 3rem;
            margin: 3rem 0;
        }

        /* Blog Posts */
        .blog-posts {
            display: grid;
            gap: 2rem;
        }

        .blog-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 2rem;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .blog-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2d5a27, #4a7c59);
        }

        .blog-card.hidden {
            display: none;
        }

        .blog-image-container {
            flex: 0 0 280px;
            height: 200px;
        }

        .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }

        .blog-card:hover .blog-image {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .blog-content {
            flex: 1;
            padding: 2rem;
            padding-left: 0;
        }

        .blog-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #666;
            font-size: 0.9rem;
        }

        .blog-date {
            background: #e8f4eb;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            color: #2d5a27;
            font-weight: 600;
        }

        .blog-author {
            color: #2d5a27;
            font-weight: 600;
        }

        .blog-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d5a27;
            line-height: 1.3;
        }

        .blog-excerpt {
            color: #666;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #2d5a27;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: #2d5a3d;
            transform: translateX(5px);
        }

        /* Sidebar */
        .sidebar {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: fit-content;
            position: sticky;
            top: 2rem;
        }

        .sidebar h3 {
            color: #2d5a3d;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .category-list {
            list-style: none;
        }

        .category-item {
            margin-bottom: 0.8rem;
        }

        .category-link {
            color: #666;
            text-decoration: none;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            display: block;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            cursor: pointer;
        }

        .category-link:hover {
            background: #e8f4eb;
            color: #2d5a3d;
            border-left-color: #2d5a27;
            transform: translateX(5px);
        }

        .category-link.active {
            background: #e8f4eb;
            color: #2d5a3d;
            border-left-color: #2d5a27;
            font-weight: 600;
        }

        .no-results {
            text-align: center;
            color: #666;
            font-size: 1.2rem;
            margin: 3rem 0;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .sidebar {
                order: -1;
                position: relative;
                top: 0;
            }
            
            .blog-image-container {
                flex: 0 0 250px;
                height: 180px;
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .search-bar {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .blog-card {
                flex-direction: column;
                gap: 0;
            }
            
            .blog-image-container {
                flex: none;
                width: 100%;
                height: 200px;
            }
            
            .blog-content {
                padding: 1.5rem;
            }
            
            .blog-title {
                font-size: 1.3rem;
            }

            .sidebar {
                order: 1;
                margin-top: 2rem;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
            }
            
            .blog-image-container {
                height: 180px;
            }
            
            .blog-content {
                padding: 1rem;
            }
        }

        /* Loading Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .blog-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .blog-card:nth-child(2) { animation-delay: 0.1s; }
        .blog-card:nth-child(3) { animation-delay: 0.2s; }
        .blog-card:nth-child(4) { animation-delay: 0.3s; }
        .blog-card:nth-child(5) { animation-delay: 0.4s; }
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
                    <a href="https://drive.google.com/drive/folders/19H_Mrto3nUY7vutRkJd75HgfjFNvvIHT?usp=sharing" class="nav-link">
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
    <header class="header">
        <div class="container">
            <h1>Blog Posts</h1>
            <p>Stay updated with the latest tax insights and guidelines</p>
        </div>
    </header>

    <section class="search-section">
        <div class="container">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search for blog posts...">
                <button class="search-btn">Search</button>
                <button class="clear-btn">Clear</button>
            </div>
            <div class="search-results" id="searchResults"></div>
        </div>
    </section>

    <div class="container">
        <main class="main-content">
            <section class="blog-posts">
                <!-- Blog Post 1 -->
                <article class="blog-card" data-category="tax-guidance overseas comprehensive" data-title="A Comprehensive Tax Guidance for Overseas Pakistanis" data-excerpt="Living abroad as a Pakistani offers incredible opportunities, but managing taxes back home can feel like a difficult task. Whether you're an expat in the UAE, UK, or USA, understanding Pakistan's tax system is key to staying compliant and maximizing savings" onclick="openBlogPost('comprehensive-tax-guidance')">
                    <div class="blog-image-container">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tax Guidance" class="blog-image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">May 30, 2025</span>
                            <span class="blog-author">Befiler</span>
                        </div>
                        <h2 class="blog-title">A Comprehensive Tax Guidance for Overseas Pakistanis</h2>
                        <p class="blog-excerpt">Living abroad as a Pakistani offers incredible opportunities, but managing taxes back home can feel like a difficult task. Whether you're an expat in the UAE, UK, or USA, understanding Pakistan's tax system is key to staying compliant and maximizing savings...</p>
                        <a href="#" class="read-more" onclick="event.stopPropagation(); openBlogPost('comprehensive-tax-guidance')">
                            Read more →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card" data-category="tax-card tax-news pakistan-tax" data-title="Tax Card 2024-2025" data-excerpt="As Pakistan enters the fiscal year 2024-2025, understanding the updated tax regulations is crucial for individuals and businesses alike. The Tax Card outlines significant amendments that taxpayers need to be aware of" onclick="openBlogPost('tax-card-2024-2025')">
                    <div class="blog-image-container">
                        <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tax Card 2024-2025" class="blog-image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">December 9, 2024</span>
                            <span class="blog-author">Befiler</span>
                        </div>
                        <h2 class="blog-title">Tax Card 2024-2025</h2>
                        <p class="blog-excerpt">As Pakistan enters the fiscal year 2024-2025, understanding the updated tax regulations is crucial for individuals and businesses alike. The Tax Card outlines significant amendments that taxpayers need to be aware of...</p>
                        <a href="#" class="read-more" onclick="event.stopPropagation(); openBlogPost('tax-card-2024-2025')">
                            Read more →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card" data-category="fbr-directive pakistan-tax tax-news" data-title="FBR's New Directive: A Step Towards Transparent Taxation in Pakistan" data-excerpt="The Federal Board of Revenue (FBR) of Pakistan is entering a new era of tax transparency and compliance with its latest directive, SRO 1771(I)/2023. This move is designed to enhance tax collection and ensure compliance" onclick="openBlogPost('fbr-new-directive')">
                    <div class="blog-image-container">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="FBR Directive" class="blog-image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">December 7, 2023</span>
                            <span class="blog-author">Befiler</span>
                        </div>
                        <h2 class="blog-title">FBR's New Directive: A Step Towards Transparent Taxation in Pakistan</h2>
                        <p class="blog-excerpt">The Federal Board of Revenue (FBR) of Pakistan is entering a new era of tax transparency and compliance with its latest directive, SRO 1771(I)/2023. This move is designed to enhance tax collection and ensure compliance...</p>
                        <a href="#" class="read-more" onclick="event.stopPropagation(); openBlogPost('fbr-new-directive')">
                            Read more →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="blog-card" data-category="tax-portal befiler-revolutionizing tax-news" data-title="It's the time to profile non-filers: FBR's bid to launch Asaan Tax Portal" data-excerpt="The Federal Board of Revenue (FBR) is launching the Tax Asaan Portal to provide comprehensive details of financial transactions and encourage people to register and pay taxes" onclick="openBlogPost('asaan-tax-portal')">
                    <div class="blog-image-container">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Asaan Tax Portal" class="blog-image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">February 14, 2022</span>
                            <span class="blog-author">Befiler</span>
                        </div>
                        <h2 class="blog-title">It's the time to profile non-filers: FBR's bid to launch "Asaan Tax Portal"</h2>
                        <p class="blog-excerpt">The Federal Board of Revenue (FBR) is launching the "Tax Asaan Portal" to provide comprehensive details of financial transactions and encourage people to register and pay taxes...</p>
                        <a href="#" class="read-more" onclick="event.stopPropagation(); openBlogPost('asaan-tax-portal')">
                            Read more →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="blog-card" data-category="ntn-registration business-registration" data-title="Business NTN Registration Process: How to Register Business NTN in Pakistan" data-excerpt="NTN registration is not only for individuals but also for businesses, companies, and other entities. Learn about the convenient process to register your business NTN in Pakistan" onclick="openBlogPost('business-ntn-registration')">
                    <div class="blog-image-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business NTN Registration" class="blog-image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">February 2, 2022</span>
                            <span class="blog-author">Befiler</span>
                        </div>
                        <h2 class="blog-title">Business NTN Registration Process: How to Register Business NTN in Pakistan</h2>
                        <p class="blog-excerpt">NTN registration is not only for individuals but also for businesses, companies, and other entities. Learn about the convenient process to register your business NTN in Pakistan...</p>
                        <a href="#" class="read-more" onclick="event.stopPropagation(); openBlogPost('business-ntn-registration')">
                            Read more →
                        </a>
                    </div>
                </article>

                <div class="no-results" id="noResults" style="display: none;">
                    <h3>No blog posts found</h3>
                    <p>Try adjusting your search terms or browse all posts.</p>
                </div>
            </section>

            <aside class="sidebar">
                <h3>Categories</h3>
                <ul class="category-list">
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="all">All Posts</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="comprehensive">Comprehensive</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="befiler-revolutionizing">Befiler Revolutionizing the Tax Industry</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="business-registration">Business Registration Guide</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="sales-tax">Learn Sales Tax</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="ntn-registration">NTN Registration</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="pakistan-tax">Pakistan's Tax Affairs</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="tax-deduction">Tax Deduction and Credit in Pakistan</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="tax-news">Tax News and Social Trends</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-link" data-category="tax-planning">Tax Planning in Pakistan</a>
                    </li>
                </ul>
            </aside>
        </main>
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
        let allBlogCards = [];
        let currentCategory = 'all';
        let currentSearch = '';

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            allBlogCards = document.querySelectorAll('.blog-card');
            initializeSearch();
            initializeCategories();
        });

        function openBlogPost(slug) {
            const urls = {
                'comprehensive-tax-guidance': 'https://www.befiler.com/blog/a-comprehensive-tax-guidance-for-overseas-pakistanis',
                'tax-card-2024-2025': 'https://www.befiler.com/blog/tax-card-2024-2025-2',
                'fbr-new-directive': 'https://www.befiler.com/blog/fbrs-new-directive-a-step-towards-transparent-taxation-in-pakistan',
                'asaan-tax-portal': 'https://www.befiler.com/blog/its-the-time-to-profile-non-filers-fbrs-bid-to-launch-asaan-tax-portal',
                'business-ntn-registration': 'https://www.befiler.com/blog/business-ntn-registration-process-how-i-can-register-my-business-ntn-in-pakistan-conveniently'
            };
            
            const url = urls[slug] || 'https://www.befiler.com/blog/';
            window.open(url, '_blank');
        }

        function initializeSearch() {
            const searchInput = document.querySelector('.search-input');
            const searchBtn = document.querySelector('.search-btn');
            const clearBtn = document.querySelector('.clear-btn');
            const searchResults = document.getElementById('searchResults');

            // Search functionality
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                currentSearch = searchTerm;
                
                if (searchTerm === '') {
                    showAllPosts();
                    clearBtn.style.display = 'none';
                    searchResults.textContent = '';
                    return;
                }

                clearBtn.style.display = 'block';
                filterPosts();
            }

            // Search button click
            searchBtn.addEventListener('click', performSearch);

            // Enter key search
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            // Real-time search
            searchInput.addEventListener('input', function() {
                if (this.value.trim() === '') {
                    showAllPosts();
                    clearBtn.style.display = 'none';
                    searchResults.textContent = '';
                    currentSearch = '';
                }
            });

            // Clear button
            clearBtn.addEventListener('click', function() {
                searchInput.value = '';
                currentSearch = '';
                showAllPosts();
                clearBtn.style.display = 'none';
                searchResults.textContent = '';
                
                // Reset category selection
                document.querySelectorAll('.category-link').forEach(link => {
                    link.classList.remove('active');
                });
                document.querySelector('.category-link[data-category="all"]').classList.add('active');
                currentCategory = 'all';
            });
        }

        function initializeCategories() {
            const categoryLinks = document.querySelectorAll('.category-link');
            
            // Set "All Posts" as active by default
            document.querySelector('.category-link[data-category="all"]').classList.add('active');
            
            categoryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    categoryLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Get category
                    currentCategory = this.dataset.category;
                    
                    // Filter posts
                    filterPosts();
                });
            });
        }

        function filterPosts() {
            let visibleCount = 0;
            const searchResults = document.getElementById('searchResults');
            const noResults = document.getElementById('noResults');

            allBlogCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const excerpt = card.dataset.excerpt.toLowerCase();
                const category = card.dataset.category.toLowerCase();
                
                let matchesSearch = true;
                let matchesCategory = true;

                // Check search term
                if (currentSearch) {
                    matchesSearch = title.includes(currentSearch) || 
                                   excerpt.includes(currentSearch) || 
                                   category.includes(currentSearch);
                }

                // Check category
                if (currentCategory !== 'all') {
                    matchesCategory = category.includes(currentCategory);
                }

                // Show/hide card
                if (matchesSearch && matchesCategory) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            // Update search results text
            if (currentSearch || currentCategory !== 'all') {
                if (visibleCount === 0) {
                    searchResults.textContent = 'No posts found matching your criteria.';
                    noResults.style.display = 'block';
                } else {
                    searchResults.textContent = `Found ${visibleCount} post${visibleCount !== 1 ? 's' : ''} matching your criteria.`;
                    noResults.style.display = 'none';
                }
            } else {
                searchResults.textContent = '';
                noResults.style.display = 'none';
            }
        }

        function showAllPosts() {
            allBlogCards.forEach(card => {
                card.classList.remove('hidden');
            });
            
            document.getElementById('noResults').style.display = 'none';
            
            // Reset category to "All Posts"
            document.querySelectorAll('.category-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('.category-link[data-category="all"]').classList.add('active');
            currentCategory = 'all';
        }

        // Smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>