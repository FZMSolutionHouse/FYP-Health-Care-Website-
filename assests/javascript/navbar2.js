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
                
                // Close dropdown on mobile
                const dropdown = document.getElementById('taxToolDropdown');
                dropdown.classList.remove('active');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const navMenu = document.getElementById('navMenu');
                const hamburger = document.querySelector('.hamburger');
                const dropdown = document.getElementById('taxToolDropdown');
                
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
                dropdown.classList.remove('active');
            }
        });

        // Handle navigation clicks
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#') && !this.classList.contains('dropdown')) {
                    // Remove active class from all links
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Close mobile menu
                    if (window.innerWidth <= 768) {
                        const navMenu = document.getElementById('navMenu');
                        const hamburger = document.querySelector('.hamburger');
                        navMenu.classList.remove('active');
                        hamburger.classList.remove('active');
                    }
                }
            });
        });