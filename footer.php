    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>


    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop" title="Back to Top">
        <svg class="progress-ring" width="48" height="48" viewBox="0 0 48 48">
            <circle class="progress-ring__bg" cx="24" cy="24" r="22"></circle>
            <circle class="progress-ring__circle" cx="24" cy="24" r="20" stroke-dasharray="125.66" stroke-dashoffset="125.66"></circle>
        </svg>
        <div class="btt-icon"><i data-lucide="arrow-up" aria-hidden="true"></i></div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="<?php echo home_url('/'); ?>" class="logo">Hommie<span>.</span></a>
                    <p class="lang-id">Membangun warisan digital melalui kolaborasi, kreativitas, dan komunitas yang hangat layaknya sebuah rumah.</p>
                    <p class="lang-en">Building a digital legacy through collaboration, creativity, and a community as warm as home.</p>
                    <div class="social-links">
                        <a href="<?php echo home_url('/about/'); ?>" class="social-link" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f" style="font-size: 18px;" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo home_url('/legacy/'); ?>" class="social-link" aria-label="Instagram">
                            <i class="fa-brands fa-instagram" style="font-size: 20px;" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo home_url('/programs/'); ?>" class="social-link" aria-label="TikTok">
                            <i class="fa-brands fa-tiktok" style="font-size: 18px;" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo home_url('/join/'); ?>" class="social-link" aria-label="Discord">
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
                        <li><a href="<?php echo home_url('/programs/'); ?>"><span class="lang-id">Panduan Anggota</span><span class="lang-en">Member Guide</span></a></li>
                        <li><a href="<?php echo home_url('/join/#faq'); ?>">FAQ</a></li>
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
            
            // Fade-up Animation Observer
            const fadeElements = document.querySelectorAll('.fade-up');
            if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
                const fadeObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); fadeObserver.unobserve(entry.target); } });
                }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
                fadeElements.forEach(el => fadeObserver.observe(el));
            } else { fadeElements.forEach(el => el.classList.add('visible')); }

            // Modal Logic
            const modalBtns = document.querySelectorAll('.open-modal-btn');
            const closeBtns = document.querySelectorAll('.modal-close, .modal-close-btn');
            const modals = document.querySelectorAll('.modal-overlay');
            modalBtns.forEach(btn => { btn.addEventListener('click', function(e) { e.preventDefault(); const t = document.getElementById(this.getAttribute('data-modal')); if(t) { t.classList.add('active'); document.body.style.overflow = 'hidden'; } }); });
            function closeModal() { modals.forEach(m => m.classList.remove('active')); document.body.style.overflow = ''; }
            closeBtns.forEach(btn => { btn.addEventListener('click', function(e) { e.preventDefault(); closeModal(); }); });
            modals.forEach(m => { m.addEventListener('click', function(e) { if (e.target === this) closeModal(); }); });
            document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeModal(); });

            // Theme Toggle
            const themeToggleBtn = document.querySelector('.theme-toggle');
            const moonIcon = document.querySelector('.moon-icon');
            const sunIcon = document.querySelector('.sun-icon');
            function updateThemeIcons(t) { if(t==='dark'){moonIcon.style.display='none';sunIcon.style.display='block';}else{moonIcon.style.display='block';sunIcon.style.display='none';} }
            if (themeToggleBtn) { updateThemeIcons(document.documentElement.getAttribute('data-theme')||'light'); themeToggleBtn.addEventListener('click',function(){const c=document.documentElement.getAttribute('data-theme')||'light';const n=c==='light'?'dark':'light';document.documentElement.setAttribute('data-theme',n);localStorage.setItem('hommie_theme',n);updateThemeIcons(n);}); }

            // Accessibility Mode
            const accessibilityToggle = document.querySelector('.accessibility-toggle');
            if (accessibilityToggle) {
                const isAccessible = localStorage.getItem('hommie_accessible') === 'true';
                accessibilityToggle.classList.toggle('active', isAccessible);
                accessibilityToggle.addEventListener('click', function() {
                    const next = document.documentElement.getAttribute('data-accessible') !== 'true';
                    document.documentElement.setAttribute('data-accessible', next ? 'true' : 'false');
                    localStorage.setItem('hommie_accessible', next ? 'true' : 'false');
                    this.classList.toggle('active', next);
                });
            }

            // Bilingual Logic
            const langToggleBtn = document.querySelector('.lang-toggle');
            const langIdLabel = document.querySelector('.lang-id-label');
            const langEnLabel = document.querySelector('.lang-en-label');
            function updateLangLabels(l) { if(!langIdLabel||!langEnLabel)return; if(l==='en'){langEnLabel.style.opacity='1';langIdLabel.style.opacity='0.5';}else{langIdLabel.style.opacity='1';langEnLabel.style.opacity='0.5';} }
            if (langToggleBtn) { const cl=localStorage.getItem('hommie_lang')||'id'; document.documentElement.setAttribute('data-lang',cl); updateLangLabels(cl); langToggleBtn.addEventListener('click',function(){const c=document.documentElement.getAttribute('data-lang')||'id';const n=c==='id'?'en':'id';document.documentElement.setAttribute('data-lang',n);localStorage.setItem('hommie_lang',n);updateLangLabels(n);}); }

            // Accordion
            document.querySelectorAll('.faq-question').forEach(q => { q.addEventListener('click', function() { this.closest('.faq-item').classList.toggle('active'); }); });

            // Project Filters
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.dataset.filter;
                    filterButtons.forEach(btn => btn.classList.toggle('active', btn === this));
                    projectCards.forEach(card => {
                        const categories = (card.dataset.category || '').split(' ');
                        card.classList.toggle('is-hidden', filter !== 'all' && !categories.includes(filter));
                    });
                });
            });

            // Legacy Pledge
            const pledgeCopy = {
                impact: {
                    idTitle: 'Aku akan membangun produk digital yang membantu orang lain bertumbuh.',
                    enTitle: 'I will build digital products that help others grow.',
                    idBody: 'Mulai dari project sosial, akses belajar, sampai solusi sederhana untuk komunitas sekitar.',
                    enBody: 'From social projects and learning access to simple solutions for nearby communities.'
                },
                craft: {
                    idTitle: 'Aku akan menciptakan karya yang tidak hanya indah, tapi juga berguna.',
                    enTitle: 'I will create work that is not only beautiful, but also useful.',
                    idBody: 'Desain, website, dan identitas visual menjadi alat untuk menceritakan nilai yang lebih besar.',
                    enBody: 'Design, websites, and visual identities become tools for telling bigger values.'
                },
                mentor: {
                    idTitle: 'Aku akan membagikan ilmu agar talenta berikutnya bisa melangkah lebih jauh.',
                    enTitle: 'I will share knowledge so the next talents can go further.',
                    idBody: 'Warisan terbaik adalah ketika pengalaman hari ini menjadi jalan bagi orang lain besok.',
                    enBody: "The best legacy is when today's experience becomes tomorrow's path for someone else."
                }
            };
            const pledgeButtons = document.querySelectorAll('.pledge-option');
            const pledgeResult = document.getElementById('pledgeResult');
            pledgeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const data = pledgeCopy[this.dataset.pledge];
                    if (!data || !pledgeResult) return;
                    pledgeButtons.forEach(btn => btn.classList.toggle('active', btn === this));
                    pledgeResult.innerHTML =
                        '<strong class="lang-id">' + data.idTitle + '</strong>' +
                        '<strong class="lang-en">' + data.enTitle + '</strong>' +
                        '<p class="lang-id">' + data.idBody + '</p>' +
                        '<p class="lang-en">' + data.enBody + '</p>';
                });
            });

            // Impact Simulator / Mentor Matcher
            const roleData = {
                designer: {
                    badge: 'Creative Builder',
                    idTitle: 'Kamu cocok membangun sistem desain untuk proyek sosial.',
                    enTitle: 'You fit building design systems for social projects.',
                    idBody: 'Mulai dari merapikan pengalaman pengguna, membuat style guide, sampai membantu tim developer menjaga kualitas visual.',
                    enBody: 'Start by shaping user experience, creating style guides, and helping developers keep visual quality consistent.',
                    steps: ['Audit', 'Prototype', 'Ship']
                },
                developer: {
                    badge: 'Impact Coder',
                    idTitle: 'Kamu cocok mengubah ide komunitas menjadi produk yang berjalan.',
                    enTitle: 'You fit turning community ideas into working products.',
                    idBody: 'Bangun fitur ringan, dashboard, dan automasi yang membuat kerja komunitas lebih cepat dan terukur.',
                    enBody: 'Build lightweight features, dashboards, and automation that make community work faster and measurable.',
                    steps: ['Build', 'Test', 'Scale']
                },
                mentor: {
                    badge: 'Growth Mentor',
                    idTitle: 'Kamu cocok menjadi pengarah yang membuka jalan talenta baru.',
                    enTitle: 'You fit guiding new talents toward clearer paths.',
                    idBody: 'Bantu anggota memilih fokus, memberi review jujur, dan menjaga proyek tetap bergerak sampai rilis.',
                    enBody: 'Help members choose focus, give honest reviews, and keep projects moving until launch.',
                    steps: ['Listen', 'Guide', 'Review']
                },
                writer: {
                    badge: 'Story Keeper',
                    idTitle: 'Kamu cocok mengubah proses menjadi cerita yang menginspirasi.',
                    enTitle: 'You fit turning process into stories that inspire.',
                    idBody: 'Tulis studi kasus, dokumentasi, dan narasi dampak agar karya komunitas mudah dipahami dan diteruskan.',
                    enBody: 'Write case studies, documentation, and impact narratives so community work is easy to understand and continue.',
                    steps: ['Observe', 'Frame', 'Publish']
                }
            };
            const roleChips = document.querySelectorAll('.role-chip');
            const pathResult = document.getElementById('pathResult');
            roleChips.forEach(chip => {
                chip.addEventListener('click', function() {
                    const data = roleData[this.dataset.role];
                    if (!data || !pathResult) return;
                    roleChips.forEach(item => item.classList.toggle('active', item === this));
                    pathResult.innerHTML =
                        '<div class="path-badge">' + data.badge + '</div>' +
                        '<h3 class="lang-id">' + data.idTitle + '</h3>' +
                        '<h3 class="lang-en">' + data.enTitle + '</h3>' +
                        '<p class="lang-id">' + data.idBody + '</p>' +
                        '<p class="lang-en">' + data.enBody + '</p>' +
                        '<div class="path-steps">' + data.steps.map(step => '<span>' + step + '</span>').join('') + '</div>';
                });
            });

            // Legacy Map
            const mapPins = document.querySelectorAll('.map-pin');
            const mapInfo = document.getElementById('mapInfo');
            mapPins.forEach(pin => {
                pin.addEventListener('click', function() {
                    mapPins.forEach(item => item.classList.toggle('active', item === this));
                    if (!mapInfo) return;
                    mapInfo.innerHTML =
                        '<strong>' + this.dataset.city + '</strong>' +
                        '<span class="lang-id">' + this.dataset.id + '</span>' +
                        '<span class="lang-en">' + this.dataset.en + '</span>';
                });
            });

            // Interactive Manifesto
            const manifestoData = {
                create: {
                    idTitle: 'Create dengan tujuan.',
                    enTitle: 'Create with purpose.',
                    idBody: 'Setiap karya harus menjawab masalah nyata, bukan hanya mengejar tampilan indah.',
                    enBody: 'Every work should answer a real problem, not only chase a beautiful look.'
                },
                collaborate: {
                    idTitle: 'Collaborate tanpa ego.',
                    enTitle: 'Collaborate without ego.',
                    idBody: 'Legacy lahir saat desainer, developer, penulis, dan mentor saling memperkuat.',
                    enBody: 'Legacy is born when designers, developers, writers, and mentors strengthen each other.'
                },
                care: {
                    idTitle: 'Care pada manusia.',
                    enTitle: 'Care for people.',
                    idBody: 'Teknologi masa depan harus ramah, aksesibel, dan memberi ruang bagi banyak orang.',
                    enBody: 'Future technology should be friendly, accessible, and make room for many people.'
                },
                continue: {
                    idTitle: 'Continue setelah rilis.',
                    enTitle: 'Continue after launch.',
                    idBody: 'Karya tidak berhenti di presentasi. Ia dirawat, dipelajari, dan diwariskan.',
                    enBody: 'Work does not stop at presentation. It is maintained, studied, and passed on.'
                }
            };
            const manifestoItems = document.querySelectorAll('.manifesto-item');
            const manifestoCopy = document.getElementById('manifestoCopy');
            manifestoItems.forEach(item => {
                item.addEventListener('click', function() {
                    const data = manifestoData[this.dataset.manifesto];
                    if (!data || !manifestoCopy) return;
                    manifestoItems.forEach(entry => entry.classList.toggle('active', entry === this));
                    manifestoCopy.innerHTML =
                        '<h3 class="lang-id">' + data.idTitle + '</h3>' +
                        '<h3 class="lang-en">' + data.enTitle + '</h3>' +
                        '<p class="lang-id">' + data.idBody + '</p>' +
                        '<p class="lang-en">' + data.enBody + '</p>';
                });
            });

            // Scroll Progress + Back-to-Top
            const scrollProgressBar = document.getElementById('scrollProgress');
            const backToTop = document.getElementById('backToTop');
            const progressCircle = document.querySelector('.progress-ring__circle');
            const circumference = 2 * Math.PI * 20;
            function updateScrollIndicators() { const s=window.scrollY; const d=document.documentElement.scrollHeight-window.innerHeight; const p=d>0?s/d:0; if(scrollProgressBar)scrollProgressBar.style.width=(p*100)+'%'; if(backToTop&&progressCircle){backToTop.classList.toggle('visible',s>300);progressCircle.style.strokeDashoffset=circumference-(p*circumference);} }
            window.addEventListener('scroll', updateScrollIndicators, { passive: true });
            updateScrollIndicators();
            if (backToTop) backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

            // Text Scramble on Hero Title
            const heroTitles = document.querySelectorAll('.hero-content h1');
            const scrambleChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/~`01';
            heroTitles.forEach(title => {
                const ot = title.textContent; if (!ot || ot.length < 3) return;
                let h = ''; for (let i = 0; i < ot.length; i++) { if(ot[i]===' ')h+=' '; else h+='<span class="scramble-char" data-final="'+ot[i]+'">'+scrambleChars[Math.floor(Math.random()*scrambleChars.length)]+'</span>'; }
                title.innerHTML = h;
                title.querySelectorAll('.scramble-char').forEach((c,i) => { let f=0; const m=3+Math.floor(Math.random()*4); setTimeout(()=>{const iv=setInterval(()=>{if(f>=m){c.textContent=c.dataset.final;clearInterval(iv);}else{c.textContent=scrambleChars[Math.floor(Math.random()*scrambleChars.length)];f++;}},40);},30+i*25); });
            });

            // ===== Directional Hover Fill on Buttons =====
            document.querySelectorAll('.btn').forEach(btn => {
                if (!btn.querySelector('.btn-fill')) {
                    const fill = document.createElement('span');
                    fill.classList.add('btn-fill');
                    btn.prepend(fill);
                }
                const fill = btn.querySelector('.btn-fill');

                btn.addEventListener('mouseenter', function(e) {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    if (x < rect.width / 2) {
                        fill.style.transform = 'translateX(-101%)';
                        requestAnimationFrame(() => { fill.style.transform = 'translateX(0)'; });
                    } else {
                        fill.style.transform = 'translateX(101%)';
                        requestAnimationFrame(() => { fill.style.transform = 'translateX(0)'; });
                    }
                });

                btn.addEventListener('mouseleave', function(e) {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    if (x < rect.width / 2) fill.style.transform = 'translateX(-101%)';
                    else fill.style.transform = 'translateX(101%)';
                });
            });

            // ===== FEATURE 5: Scroll Text Highlight =====
            const highlightEls = document.querySelectorAll('.text-highlight');
            if (highlightEls.length > 0 && 'IntersectionObserver' in window) {
                const highlightObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('highlighted');
                            highlightObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.6 });
                highlightEls.forEach(el => highlightObserver.observe(el));
            }
            // ===== FEATURE: Animated Number Counter =====
            const statNumbers = document.querySelectorAll('.stat-number[data-count]');
            if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const el = entry.target;
                            const target = parseInt(el.dataset.count);
                            const duration = 1500;
                            const startTime = performance.now();

                            function animateCount(currentTime) {
                                const elapsed = currentTime - startTime;
                                const progress = Math.min(elapsed / duration, 1);
                                // Ease out cubic
                                const eased = 1 - Math.pow(1 - progress, 3);
                                const current = Math.floor(eased * target);
                                const plusSpan = el.querySelector('span');
                                el.textContent = current;
                                if (plusSpan) el.appendChild(plusSpan);
                                else {
                                    const s = document.createElement('span');
                                    s.style.color = 'var(--accent-secondary)';
                                    s.textContent = '+';
                                    el.appendChild(s);
                                }
                                if (progress < 1) requestAnimationFrame(animateCount);
                            }
                            requestAnimationFrame(animateCount);
                            counterObserver.unobserve(el);
                        }
                    });
                }, { threshold: 0.5 });
                statNumbers.forEach(el => counterObserver.observe(el));
            }

            // ===== FEATURE: Lazy Image Blur-up =====
            const lazyImages = document.querySelectorAll('.lazy-img');
            lazyImages.forEach(img => {
                if (img.complete) {
                    img.classList.add('loaded');
                } else {
                    img.addEventListener('load', () => img.classList.add('loaded'));
                }
            });

            // ===== FEATURE: Testimonial Carousel Auto-slide =====
            const carousel = document.getElementById('testimonialCarousel');
            if (carousel) {
                const track = carousel.querySelector('.testimonial-track');
                const cards = carousel.querySelectorAll('.testimonial-card');
                const dotsContainer = document.getElementById('testimonialDots');
                let currentSlide = 0;
                const totalSlides = cards.length;

                // Create dots
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.classList.add('testimonial-dot');
                    if (i === 0) dot.classList.add('active');
                    dot.setAttribute('aria-label', 'Slide ' + (i + 1));
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }

                function goToSlide(index) {
                    currentSlide = index;
                    track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
                    const dots = dotsContainer.querySelectorAll('.testimonial-dot');
                    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
                }

                // Auto-slide every 5 seconds
                setInterval(() => {
                    goToSlide((currentSlide + 1) % totalSlides);
                }, 5000);

                // Touch/swipe support
                let touchStartX = 0;
                let touchEndX = 0;
                carousel.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
                carousel.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].screenX;
                    const diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 50) {
                        if (diff > 0 && currentSlide < totalSlides - 1) goToSlide(currentSlide + 1);
                        else if (diff < 0 && currentSlide > 0) goToSlide(currentSlide - 1);
                    }
                }, { passive: true });
            }
        });
    </script>
</body>
</html>
