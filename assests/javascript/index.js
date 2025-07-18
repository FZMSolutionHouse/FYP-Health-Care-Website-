// Loading screen
window.addEventListener('load', function() {
    const loading = document.getElementById('loading');
    if (loading) {
        setTimeout(() => {
            loading.classList.add('hidden');
        }, 1000);
    }
});

// Navbar scroll effect - Updated to use correct class
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar'); // Changed from #navbar to .navbar
    if (navbar) {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observe all elements with fade-in class
document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});

// Interactive service cards
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Dynamic testimonials rotation
const testimonials = [
    {
        stars: 5,
        text: "The consultants' efficient approach helped me navigate the process faster than I expected. Excellent support!",
        client: "Faisal Butt"
    },
    {
        stars: 5,
        text: "Despite my complex situation last year, KTC expertly handled all the necessary forms and guided me through every step. They removed all the stress and secured me a great refund. Highly recommended!",
        client: "Hidayat Ullah"
    },
    {
        stars: 5,
        text: "KTC has delivered perfectly filed returns for me three years running. Their consistent efficiency earns my loyalty - I'll definitely be back next year!",
        client: "Sana"
    },
    {
        stars: 5,
        text: "A sincere thank you for your exceptional tax services! I've been a loyal client for years, and your combination of quality work and great prices keeps me coming back!",
        client: "Malaika Nade"
    }
];

let currentTestimonial = 0;
const testimonialElement = document.querySelector('.testimonial');

function rotateTestimonials() {
    if (testimonialElement) {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        const testimonial = testimonials[currentTestimonial];
        
        testimonialElement.style.opacity = '0';
        setTimeout(() => {
            const starsHtml = '<i class="fas fa-star"></i>'.repeat(testimonial.stars);
            testimonialElement.innerHTML = `
                <div class="stars">${starsHtml}</div>
                <p>"${testimonial.text}"</p>
                <div class="client">- ${testimonial.client}</div>
            `;
            testimonialElement.style.opacity = '1';
        }, 300);
    }
}

// Rotate testimonials every 5 seconds
setInterval(rotateTestimonials, 5000);

// Interactive stats counter animation
function animateStats() {
    const stats = document.querySelectorAll('.stat-number');
    const targets = [2000, 2.5, 24];
    
    stats.forEach((stat, index) => {
        const target = targets[index];
        const suffix = index === 1 ? 'M+' : index === 0 ? '+' : '/7';
        let current = 0;
        const increment = target / 100;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            if (index === 1) {
                stat.textContent = current.toFixed(1) + suffix;
            } else {
                stat.textContent = Math.floor(current) + suffix;
            }
        }, 20);
    });
}

// Trigger stats animation when about section is visible
const aboutSection = document.getElementById('about');
if (aboutSection) {
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats();
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statsObserver.observe(aboutSection);
}

// Add floating animation to hero background elements
function createFloatingElements() {
    const hero = document.querySelector('.hero');
    if (hero) {
        for (let i = 0; i < 20; i++) {
            const element = document.createElement('div');
            element.style.position = 'absolute';
            element.style.width = Math.random() * 10 + 5 + 'px';
            element.style.height = element.style.width;
            element.style.background = 'rgba(255,255,255,0.1)';
            element.style.borderRadius = '50%';
            element.style.left = Math.random() * 100 + '%';
            element.style.top = Math.random() * 100 + '%';
            element.style.animation = `float ${Math.random() * 20 + 10}s infinite linear`;
            element.style.animationDelay = Math.random() * 20 + 's';
            hero.appendChild(element);
        }
    }
}

createFloatingElements();

// Parallax effect for hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Add click-to-call functionality
document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', function(e) {
        if (!('ontouchstart' in window)) {
            e.preventDefault();
            alert('Call us at: ' + this.textContent);
        }
    });
});

// Form validation function
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Add service card click handlers
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('click', function() {
        const serviceName = this.querySelector('h3').textContent;
        
        // Show selection feedback
        this.style.borderColor = '#7dd87f';
        this.style.background = '#f0fff0';
        
        setTimeout(() => {
            this.style.borderColor = 'transparent';
            this.style.background = 'white';
        }, 1000);
    });
});

// Add keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Tab') {
        document.body.classList.add('keyboard-navigation');
    }
});

document.addEventListener('mousedown', function() {
    document.body.classList.remove('keyboard-navigation');
});

// Performance optimization: Lazy load animations
const animationElements = document.querySelectorAll('.service-cards');

const lazyAnimationObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.transition = 'all 0.3s ease';
            lazyAnimationObserver.unobserve(entry.target);
        }
    });
});

animationElements.forEach(el => {
    lazyAnimationObserver.observe(el);
});

// Add error handling for missing elements
function safeQuerySelector(selector, callback) {
    const element = document.querySelector(selector);
    if (element && callback) {
        callback(element);
    }
    return element;
}

// Initialize all interactive features
function initializeInteractions() {
    // Add hover effects to all buttons
    document.querySelectorAll('.cta-button, .nav-link').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Add focus states for accessibility
    document.querySelectorAll('a, button').forEach(element => {
        element.addEventListener('focus', function() {
            this.style.outline = '2px solid #7dd87f';
            this.style.outlineOffset = '2px';
        });
        
        element.addEventListener('blur', function() {
            this.style.outline = 'none';
        });
    });
}

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', initializeInteractions);

// Add custom cursor effect (optional enhancement)
document.addEventListener('mousemove', function(e) {
    const cursor = document.querySelector('.custom-cursor');
    if (cursor) {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    }
});