    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="<?php echo home_url('/'); ?>" class="logo">Hommie<span>.</span></a>
                    <p class="lang-id">Membangun warisan digital melalui kolaborasi, kreativitas, dan komunitas yang hangat layaknya sebuah rumah.</p>
                    <p class="lang-en">Building a digital legacy through collaboration, creativity, and a community as warm as home.</p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f" style="font-size: 18px;" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fa-brands fa-instagram" style="font-size: 20px;" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="TikTok">
                            <i class="fa-brands fa-tiktok" style="font-size: 18px;" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Discord">
                            <i class="fa-brands fa-discord" style="font-size: 18px;" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-nav">
                    <h4 class="lang-id">Navigasi</h4>
                    <h4 class="lang-en">Navigation</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>"><span class="lang-id">Beranda</span><span class="lang-en">Home</span></a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>"><span class="lang-id">Tentang Kami</span><span class="lang-en">About Us</span></a></li>
                        <li><a href="<?php echo home_url('/legacy/'); ?>"><span class="lang-id">Karya & Warisan</span><span class="lang-en">Works & Legacy</span></a></li>
                        <li><a href="<?php echo home_url('/programs/'); ?>"><span class="lang-id">Program Terkini</span><span class="lang-en">Latest Programs</span></a></li>
                    </ul>
                </div>
                
                <div class="footer-nav">
                    <h4 class="lang-id">Komunitas</h4>
                    <h4 class="lang-en">Community</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/join/'); ?>"><span class="lang-id">Cara Bergabung</span><span class="lang-en">How to Join</span></a></li>
                        <li><a href="#"><span class="lang-id">Panduan Anggota</span><span class="lang-en">Member Guide</span></a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="<?php echo home_url('/join/#contact'); ?>"><span class="lang-id">Hubungi Kami</span><span class="lang-en">Contact Us</span></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Hommie Community. All rights reserved. Designed for "Designing the Future" Web Competition.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <script>
        window.addEventListener('load', function() {
            // Initialize Lucide Icons
            if(typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
            
            // Mobile Menu Toggle
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');
            
            if(mobileBtn && navLinks) {
                mobileBtn.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                });
            }
            
            // Preloader fade out
            const preloader = document.getElementById('preloader');
            if (preloader && preloader.style.display !== 'none') {
                setTimeout(() => {
                    preloader.classList.add('hidden');
                    setTimeout(() => {
                        preloader.style.display = 'none';
                        sessionStorage.setItem('hommie_preloader_shown', 'true');
                    }, 500);
                }, 500); // Minimum 500ms display for effect
            }
            
            // Custom Cursor Logic
            const cursor = document.querySelector('.custom-cursor');
            if (cursor && window.matchMedia("(pointer: fine)").matches) {
                document.addEventListener('mousemove', e => {
                    cursor.style.left = e.clientX + 'px';
                    cursor.style.top = e.clientY + 'px';
                });
                
                document.querySelectorAll('a, button, input, textarea, .card').forEach(el => {
                    el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
                    el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
                });
            }
            
            // Fade-up Animation Observer
            const fadeElements = document.querySelectorAll('.fade-up');
            if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
                const fadeObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            fadeObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
                
                fadeElements.forEach(el => fadeObserver.observe(el));
            } else {
                fadeElements.forEach(el => el.classList.add('visible'));
            }
            
            // Modal Logic
            const modalBtns = document.querySelectorAll('.open-modal-btn');
            const closeBtns = document.querySelectorAll('.modal-close, .modal-close-btn');
            const modals = document.querySelectorAll('.modal-overlay');
            
            modalBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modalId = this.getAttribute('data-modal');
                    const targetModal = document.getElementById(modalId);
                    if(targetModal) {
                        targetModal.classList.add('active');
                        document.body.style.overflow = 'hidden'; // Prevent background scrolling
                    }
                });
            });
            
            function closeModal() {
                modals.forEach(modal => modal.classList.remove('active'));
                document.body.style.overflow = '';
            }
            
            closeBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    closeModal();
                });
            });
            
            // Close modal on click outside
            modals.forEach(modal => {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeModal();
                    }
                });
            });
            
            // Close modal on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
            
            // Theme Toggle Logic
            const themeToggleBtn = document.querySelector('.theme-toggle');
            const moonIcon = document.querySelector('.moon-icon');
            const sunIcon = document.querySelector('.sun-icon');
            
            function updateThemeIcons(theme) {
                if (theme === 'dark') {
                    moonIcon.style.display = 'none';
                    sunIcon.style.display = 'block';
                } else {
                    moonIcon.style.display = 'block';
                    sunIcon.style.display = 'none';
                }
            }
            
            if (themeToggleBtn) {
                // Initialize icon state
                const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
                updateThemeIcons(currentTheme);
                
                themeToggleBtn.addEventListener('click', function() {
                    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
                    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                    
                    document.documentElement.setAttribute('data-theme', newTheme);
                    localStorage.setItem('hommie_theme', newTheme);
                    updateThemeIcons(newTheme);
                });
            }
            
            // Bilingual Logic
            const langToggleBtn = document.querySelector('.lang-toggle');
            const langIdLabel = document.querySelector('.lang-id-label');
            const langEnLabel = document.querySelector('.lang-en-label');
            
            function updateLangLabels(lang) {
                if (!langIdLabel || !langEnLabel) return;
                if (lang === 'en') {
                    langEnLabel.style.opacity = '1';
                    langIdLabel.style.opacity = '0.5';
                } else {
                    langIdLabel.style.opacity = '1';
                    langEnLabel.style.opacity = '0.5';
                }
            }
            
            if (langToggleBtn) {
                // Initialize language state
                const currentLang = localStorage.getItem('hommie_lang') || 'id';
                document.documentElement.setAttribute('data-lang', currentLang);
                updateLangLabels(currentLang);
                
                langToggleBtn.addEventListener('click', function() {
                    const currentLang = document.documentElement.getAttribute('data-lang') || 'id';
                    const newLang = currentLang === 'id' ? 'en' : 'id';
                    
                    document.documentElement.setAttribute('data-lang', newLang);
                    localStorage.setItem('hommie_lang', newLang);
                    updateLangLabels(newLang);
                });
            }
            
            // Accordion Logic
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const item = this.closest('.faq-item');
                    // Optional: Close other open FAQs
                    // document.querySelectorAll('.faq-item').forEach(otherItem => {
                    //    if (otherItem !== item) otherItem.classList.remove('active');
                    // });
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>
