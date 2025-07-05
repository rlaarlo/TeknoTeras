// Smooth scrolling function
function scrollToSection(sectionId) {
    console.log('Scrolling to section:', sectionId);
    const element = document.getElementById(sectionId);
    if (element) {
        console.log('Element found:', element);
        const navbarHeight = document.querySelector('.navbar').offsetHeight;
        const elementPosition = element.offsetTop - navbarHeight;
        
        window.scrollTo({
            top: elementPosition,
            behavior: 'smooth'
        });
    } else {
        console.log('Element not found for ID:', sectionId);
    }
}

// Enhanced smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        scrollToSection(targetId);
    });
});

// Enhanced navbar background change on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});

// Add animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all service cards and feature items
document.querySelectorAll('.service-card, .feature-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease';
    observer.observe(el);
});

// Auto-collapse navbar on mobile after clicking link
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
            navbarToggler.click();
        }
    });
});

// Handle logo loading errors with fallback
document.querySelectorAll('.partner-logo').forEach(img => {
    img.addEventListener('error', function() {
        console.log('Failed to load image:', this.src);
    });
});

// Handle main logo loading error
const brandLogo = document.querySelector('.brand-logo');
if (brandLogo) {
    brandLogo.addEventListener('error', function() {
        console.log('Failed to load main logo from:', this.src);
        // Could add a fallback here if needed
    });
}

// Handle footer logo loading error
const footerLogo = document.querySelector('.footer-logo');
if (footerLogo) {
    footerLogo.addEventListener('error', function() {
        console.log('Failed to load footer logo from:', this.src);
        // Could add a fallback here if needed
    });
}

// Contact Form Handling
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnLoading = document.getElementById('btn-loading');
    const formAlert = document.getElementById('form-alert');
    const alertMessage = document.getElementById('alert-message');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Bootstrap validation
            if (!contactForm.checkValidity()) {
                contactForm.classList.add('was-validated');
                return;
            }

            // Show loading state
            setLoadingState(true);
            hideAlert();

            // Prepare form data
            const formData = new FormData(contactForm);

            // Send to server
            fetch('api/contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                setLoadingState(false);
                
                if (data.success) {
                    showAlert('success', data.message);
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                } else {
                    showAlert('danger', data.message);
                }
            })
            .catch(error => {
                setLoadingState(false);
                console.error('Error:', error);
                showAlert('danger', 'Terjadi kesalahan jaringan. Silakan coba lagi.');
            });
        });
    }

    function setLoadingState(isLoading) {
        if (isLoading) {
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnLoading.classList.remove('d-none');
        } else {
            submitBtn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');
        }
    }

    function showAlert(type, message) {
        formAlert.className = `alert alert-${type} alert-dismissible fade show`;
        alertMessage.textContent = message;
        formAlert.style.display = 'block';
        
        // Auto hide after 5 seconds for success messages
        if (type === 'success') {
            setTimeout(() => {
                hideAlert();
            }, 5000);
        }
        
        // Scroll to alert
        formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function hideAlert() {
        formAlert.style.display = 'none';
        formAlert.classList.remove('show');
    }
});

// Phone number formatting (optional enhancement)
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            // Add country code if not present
            if (value.length > 0 && !value.startsWith('62')) {
                if (value.startsWith('0')) {
                    value = '62' + value.substring(1);
                } else if (!value.startsWith('62')) {
                    value = '62' + value;
                }
            }
            
            // Format: +62 xxx xxxx xxxx
            if (value.length > 2) {
                value = value.replace(/(\d{2})(\d{3})(\d{4})(\d{4})/, '+$1 $2 $3 $4');
            } else if (value.length > 0) {
                value = '+' + value;
            }
            
            e.target.value = value;
        });
    }
});
