<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syncopate:wght@400;700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>@yield('title', 'AutoManager - Kelola Mobil Anda')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚗</text></svg>">
    
    <!-- Global Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #2d3436;
            background: #f8f9fa;
            overflow-x: hidden;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f2f6;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #5a67d8, #6b46c1);
        }
        
        /* Selection Color */
        ::selection {
            background: rgba(102, 126, 234, 0.3);
            color: #2d3436;
        }
        
        /* Loading Animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease;
        }
        
        .page-loader.hide {
            opacity: 0;
            pointer-events: none;
        }
        
        .loader-content {
            text-align: center;
            color: white;
        }
        
        .loader-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: bounce 1.5s ease-in-out infinite;
        }
        
        .loader-text {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .loader-bar {
            width: 200px;
            height: 4px;
            background: rgba(255,255,255,0.3);
            border-radius: 2px;
            overflow: hidden;
            margin: 0 auto;
        }
        
        .loader-progress {
            height: 100%;
            background: linear-gradient(45deg, #00b894, #00cec9);
            border-radius: 2px;
            animation: loading 2s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes loading {
            0% { width: 0%; }
            50% { width: 70%; }
            100% { width: 100%; }
        }
        
        /* Utility Classes */
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive Typography */
        @media (max-width: 768px) {
            body {
                font-size: 14px;
            }
        }
        
        a:focus, button:focus, input:focus, textarea:focus, select:focus {
            outline: 3px solid rgba(102, 126, 234, 0.5);
            outline-offset: 2px;
        }
        
        /* Print Styles */
        @media print {
            .page-loader,
            nav {
                display: none !important;
            }
            
            body {
                background: white !important;
                color: black !important;
            }
        }
    </style>
</head>
<body>
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-icon">🚗</div>
            <div class="loader-text">AutoManager</div>
            <div class="loader-bar">
                <div class="loader-progress"></div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    @include('navbar')
    
    <!-- Main Content -->
    <main class="fade-in">
        @yield('content')
    </main>
    
    <!-- JavaScript -->
    <script>
        // Page Loader
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            setTimeout(() => {
                loader.classList.add('hide');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }, 1000);
        });
        
        // Smooth scrolling for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
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
        });
        
        // Add smooth page transitions
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a:not([href^="#"]):not([href^="mailto"]):not([href^="tel"])');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.hostname === window.location.hostname) {
                        e.preventDefault();
                        const href = this.getAttribute('href');
                        document.body.style.opacity = '0.5';
                        setTimeout(() => {
                            window.location.href = href;
                        }, 200);
                    }
                });
            });
        });
        
        // Back to top functionality
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                if (!document.getElementById('backToTop')) {
                    const backToTop = document.createElement('button');
                    backToTop.id = 'backToTop';
                    backToTop.innerHTML = '↑';
                    backToTop.style.cssText = `
                        position: fixed;
                        bottom: 2rem;
                        right: 2rem;
                        background: linear-gradient(45deg, #667eea, #764ba2);
                        color: white;
                        border: none;
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        font-size: 1.2rem;
                        font-weight: bold;
                        cursor: pointer;
                        z-index: 1000;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                        transition: all 0.3s ease;
                        animation: fadeInScale 0.3s ease-out;
                    `;
                    
                    backToTop.addEventListener('click', function() {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    });
                    
                    backToTop.addEventListener('mouseover', function() {
                        this.style.transform = 'scale(1.1)';
                        this.style.boxShadow = '0 6px 20px rgba(0,0,0,0.3)';
                    });
                    
                    backToTop.addEventListener('mouseout', function() {
                        this.style.transform = 'scale(1)';
                        this.style.boxShadow = '0 4px 15px rgba(0,0,0,0.2)';
                    });
                    
                    document.body.appendChild(backToTop);
                }
            } else {
                const backToTop = document.getElementById('backToTop');
                if (backToTop) {
                    backToTop.style.animation = 'fadeOutScale 0.3s ease-out';
                    setTimeout(() => {
                        backToTop.remove();
                    }, 300);
                }
            }
        });
        
        // Add fade animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInScale {
                from {
                    opacity: 0;
                    transform: scale(0.8);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            
            @keyframes fadeOutScale {
                from {
                    opacity: 1;
                    transform: scale(1);
                }
                to {
                    opacity: 0;
                    transform: scale(0.8);
                }
            }
        `;
        document.head.appendChild(style);
        
        // Enhanced form validation
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
                
                inputs.forEach(input => {
                    // Real-time validation
                    input.addEventListener('blur', function() {
                        validateField(this);
                    });
                    
                    input.addEventListener('input', function() {
                        if (this.classList.contains('error')) {
                            validateField(this);
                        }
                    });
                });
                
                // Form submission validation
                form.addEventListener('submit', function(e) {
                    let isValid = true;
                    inputs.forEach(input => {
                        if (!validateField(input)) {
                            isValid = false;
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        // Focus on first invalid field
                        const firstError = form.querySelector('.error');
                        if (firstError) {
                            firstError.focus();
                            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    }
                });
            });
        });
        
        function validateField(field) {
            const value = field.value.trim();
            let isValid = true;
            let errorMessage = '';
            
            // Remove existing error styling
            field.classList.remove('error');
            const existingError = field.parentNode.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }
            
            // Required field validation
            if (field.hasAttribute('required') && !value) {
                isValid = false;
                errorMessage = 'Field ini wajib diisi';
            }
            
            // Email validation
            if (field.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Format email tidak valid';
                }
            }
            
            // Phone validation
            if (field.type === 'tel' && value) {
                const phoneRegex = /^[\d\s\+\-\(\)]+$/;
                if (!phoneRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Format nomor telepon tidak valid';
                }
            }
            
            // Show error if validation fails
            if (!isValid) {
                field.classList.add('error');
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.cssText = `
                    color: #e74c3c;
                    font-size: 0.85rem;
                    margin-top: 0.25rem;
                    animation: slideDown 0.3s ease-out;
                `;
                errorDiv.textContent = errorMessage;
                field.parentNode.appendChild(errorDiv);
                
                // Add error styling to field
                field.style.borderColor = '#e74c3c';
                field.style.boxShadow = '0 0 0 3px rgba(231, 76, 60, 0.1)';
            } else {
                // Reset field styling
                field.style.borderColor = '';
                field.style.boxShadow = '';
            }
            
            return isValid;
        }
        
        // Add slideDown animation for error messages
        const slideDownStyle = document.createElement('style');
        slideDownStyle.textContent = `
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .error {
                animation: shake 0.5s ease-in-out;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-5px); }
                75% { transform: translateX(5px); }
            }
        `;
        document.head.appendChild(slideDownStyle);
        
        // Add loading state to buttons
        document.addEventListener('DOMContentLoaded', function() {
            const submitButtons = document.querySelectorAll('button[type="submit"], input[type="submit"]');
            
            submitButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const form = this.closest('form');
                    if (form && form.checkValidity()) {
                        // Add loading state
                        const originalText = this.textContent;
                        this.textContent = '⏳ Memproses...';
                        this.disabled = true;
                        this.style.opacity = '0.7';
                        
                        // Reset after 5 seconds (fallback)
                        setTimeout(() => {
                            this.textContent = originalText;
                            this.disabled = false;
                            this.style.opacity = '1';
                        }, 5000);
                    }
                });
            });
        });
        
        // Add keyboard navigation improvements
        document.addEventListener('keydown', function(e) {
            // ESC key to close modals or go back
            if (e.key === 'Escape') {
                const modals = document.querySelectorAll('.modal');
                if (modals.length > 0) {
                    modals.forEach(modal => modal.style.display = 'none');
                } else if (window.history.length > 1) {
                    window.history.back();
                }
            }
            
            // Ctrl/Cmd + Enter to submit forms
            if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                const activeForm = document.activeElement.closest('form');
                if (activeForm) {
                    const submitButton = activeForm.querySelector('button[type="submit"], input[type="submit"]');
                    if (submitButton) {
                        submitButton.click();
                    }
                }
            }
        });
        
        // Performance monitoring
        window.addEventListener('load', function() {
            // Log page load time
            const loadTime = performance.now();
            console.log(`⚡ Page loaded in ${Math.round(loadTime)}ms`);
            
            // Monitor long tasks
            if ('PerformanceObserver' in window) {
                const observer = new PerformanceObserver((list) => {
                    for (const entry of list.getEntries()) {
                        if (entry.duration > 50) {
                            console.warn(`⚠️ Long task detected: ${Math.round(entry.duration)}ms`);
                        }
                    }
                });
                observer.observe({ entryTypes: ['longtask'] });
            }
        });
    </script>
</body>
</html>