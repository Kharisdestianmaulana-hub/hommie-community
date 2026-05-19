<?php
get_header();
?>

<!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-container">
            <div class="hero-content fade-up">
                <div class="hero-badge">Designing the Future: Beyond Portfolio, Build Your Legacy</div>
                <h1 class="lang-id">Bukan Sekadar Portofolio. Bangun <span>Legacy</span> yang Hidup.</h1>
                <h1 class="lang-en">Beyond Portfolio. Build a <span>Living Legacy</span>.</h1>
                <p class="lang-id">Hommie membantu kreator muda Indonesia mengubah karya digital menjadi dampak nyata: dipakai, diwariskan, dan bertumbuh bersama komunitas.</p>
                <p class="lang-en">Hommie helps young Indonesian creators turn digital work into real impact: used, passed on, and grown with community.</p>
                <div class="hero-actions">
                    <a href="<?php echo home_url('/legacy/'); ?>" class="btn btn-primary">
                        <span class="lang-id">Lihat Warisan Kami</span><span class="lang-en">View Our Legacy</span>
                    </a>
                    <a href="<?php echo home_url('/about/'); ?>" class="btn btn-secondary">
                        <span class="lang-id">Kenali Kami</span><span class="lang-en">Get to Know Us</span>
                    </a>
                </div>
            </div>
            <div class="hero-image-wrapper fade-up delay-200">
                <div class="blob blob-1"></div>
                <div class="blob blob-2"></div>
                <div class="placeholder-img hero-image">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Kolaborasi Digital" loading="lazy" class="lazy-img" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                </div>
            </div>
        </div>
    </section>

    <!-- Problem & Solution Framework -->
    <section class="problem-framework-section">
        <div class="container">
            <div class="problem-framework-grid fade-up">
                <div class="problem-card">
                    <span class="eyebrow">Problem Statement</span>
                    <h2 class="lang-id">Banyak kreator muda punya portofolio, tapi belum punya ruang untuk menciptakan dampak.</h2>
                    <h2 class="lang-en">Many young creators have portfolios, but not yet a place to create impact.</h2>
                    <p class="lang-id">Karya sering berhenti sebagai tampilan. Hommie mengubahnya menjadi proses belajar, kolaborasi, dan kontribusi yang bisa diteruskan.</p>
                    <p class="lang-en">Work often stops as presentation. Hommie turns it into learning, collaboration, and contribution that can continue.</p>
                </div>
                <div class="framework-card">
                    <span class="eyebrow">Solution Framework</span>
                    <div class="framework-steps">
                        <div>
                            <strong>01</strong>
                            <h3>Learn</h3>
                            <p class="lang-id">Belajar dari mentor dan review yang jujur.</p>
                            <p class="lang-en">Learn from mentors and honest reviews.</p>
                        </div>
                        <div>
                            <strong>02</strong>
                            <h3>Collaborate</h3>
                            <p class="lang-id">Membangun proyek nyata bersama lintas role.</p>
                            <p class="lang-en">Build real projects together across roles.</p>
                        </div>
                        <div>
                            <strong>03</strong>
                            <h3>Leave Legacy</h3>
                            <p class="lang-id">Merilis karya yang dipakai, dirawat, dan diwariskan.</p>
                            <p class="lang-en">Launch work that is used, maintained, and passed on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Bar -->
    <section class="impact">
        <div class="container impact-container">
            <div class="stat-item fade-up">
                <div class="stat-number" data-count="100">
                    0<span style="color: var(--accent-secondary);">+</span>
                </div>
                <div class="stat-label"><span class="lang-id">Kreator Aktif</span><span class="lang-en">Active Creators</span></div>
            </div>
            <div class="stat-item fade-up">
                <div class="stat-number" data-count="50">
                    0<span style="color: var(--accent-secondary);">+</span>
                </div>
                <div class="stat-label"><span class="lang-id">Proyek Digital</span><span class="lang-en">Digital Projects</span></div>
            </div>
            <div class="stat-item fade-up">
                <div class="stat-number" data-count="15">
                    0<span style="color: var(--accent-secondary);">+</span>
                </div>
                <div class="stat-label"><span class="lang-id">Penghargaan</span><span class="lang-en">Awards Won</span></div>
            </div>
            <div class="stat-item fade-up">
                <div class="stat-number" data-count="10">
                    0<span style="color: var(--accent-secondary);">+</span>
                </div>
                <div class="stat-label"><span class="lang-id">Aksi Sosial</span><span class="lang-en">Social Actions</span></div>
            </div>
        </div>
    </section>

    <!-- Community Pulse Dashboard -->
    <section class="pulse-section">
        <div class="container">
            <div class="pulse-grid fade-up">
                <div class="pulse-heading">
                    <span class="eyebrow">Community Pulse</span>
                    <h2 class="lang-id">Aktivitas minggu ini, langsung dari perapian digital.</h2>
                    <h2 class="lang-en">This week's activity, straight from the digital hearth.</h2>
                </div>
                <div class="pulse-card">
                    <i data-lucide="clipboard-check" aria-hidden="true"></i>
                    <strong>18</strong>
                    <span class="lang-id">Review Portofolio</span><span class="lang-en">Portfolio Reviews</span>
                </div>
                <div class="pulse-card">
                    <i data-lucide="rocket" aria-hidden="true"></i>
                    <strong>7</strong>
                    <span class="lang-id">Proyek Aktif</span><span class="lang-en">Active Projects</span>
                </div>
                <div class="pulse-card">
                    <i data-lucide="calendar-days" aria-hidden="true"></i>
                    <strong>4</strong>
                    <span class="lang-id">Sesi Mentor</span><span class="lang-en">Mentor Sessions</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Teaser -->
    <section id="about" class="about-teaser">
        <div class="container">
            <div class="about-container fade-up">
                <div class="about-badge">Welcome Home</div>
                <div class="placeholder-img about-image" style="border-radius: 16px;">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Suasana Kumpul Hangat" loading="lazy" class="lazy-img" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                </div>
                <div class="about-content">
                    <h2 class="lang-id">Lebih dari sekadar portofolio. Ini adalah <i>rumah</i>.</h2>
                    <h2 class="lang-en">More than just a portfolio. This is a <i>home</i>.</h2>
                    <p class="lang-id">Di Hommie Community, kami percaya bahwa karya terbaik lahir dari <span class="text-highlight">lingkungan yang mendukung</span>. Kami bukan sekadar platform pamer karya, melainkan perapian digital tempat kehangatan kolaborasi menyala.</p>
                    <p class="lang-en">At Hommie Community, we believe that the best work is born from <span class="text-highlight">a supportive environment</span>. We are not just a platform to showcase work, but a digital hearth where the warmth of collaboration ignites.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon"><i data-lucide="check" style="width: 16px; height: 16px;" aria-hidden="true"></i></div>
                            <span class="lang-id">Lingkungan belajar yang suportif dan inklusif</span><span class="lang-en">A supportive and inclusive learning environment</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i data-lucide="check" style="width: 16px; height: 16px;" aria-hidden="true"></i></div>
                            <span class="lang-id">Mentorship dari para ahli di industri kreatif</span><span class="lang-en">Mentorship from experts in the creative industry</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i data-lucide="check" style="width: 16px; height: 16px;" aria-hidden="true"></i></div>
                            <span class="lang-id">Jejaring profesional yang terasa seperti keluarga</span><span class="lang-en">A professional network that feels like family</span>
                        </div>
                    </div>
                    
                    <a href="<?php echo home_url('/about/'); ?>" class="btn btn-outline">
                        <span class="lang-id">Baca Cerita Kami</span><span class="lang-en">Read Our Story</span>
                        <i data-lucide="arrow-right" style="width: 16px; height: 16px;" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Fit -->
    <section class="future-fit-section">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Dibangun untuk Web Masa Depan</h2>
                <h2 class="lang-en">Built for the Future Web</h2>
                <p class="lang-id" style="color: var(--text-light);">Hommie tidak hanya tampil modern, tapi juga memenuhi fungsi esensial website kompetisi: CMS, responsif, aksesibel, dan dinamis.</p>
                <p class="lang-en" style="color: var(--text-light);">Hommie is not only visually modern, but also meets essential competition website functions: CMS, responsive, accessible, and dynamic.</p>
            </div>
            <div class="future-fit-grid">
                <div class="future-fit-card fade-up">
                    <i data-lucide="layout-template" aria-hidden="true"></i>
                    <h3>WordPress CMS</h3>
                    <p class="lang-id">Menggunakan custom theme, template halaman, dan konten program dari Posts.</p>
                    <p class="lang-en">Uses a custom theme, page templates, and program content from Posts.</p>
                </div>
                <div class="future-fit-card fade-up">
                    <i data-lucide="smartphone" aria-hidden="true"></i>
                    <h3>Responsive</h3>
                    <p class="lang-id">Layout disiapkan untuk desktop dan mobile agar nyaman dinilai di berbagai perangkat.</p>
                    <p class="lang-en">Layouts are prepared for desktop and mobile so judging feels good on every device.</p>
                </div>
                <div class="future-fit-card fade-up">
                    <i data-lucide="accessibility" aria-hidden="true"></i>
                    <h3>Accessible</h3>
                    <p class="lang-id">Mode aksesibilitas mengurangi animasi dan meningkatkan keterbacaan.</p>
                    <p class="lang-en">Accessibility mode reduces motion and improves readability.</p>
                </div>
                <div class="future-fit-card fade-up">
                    <i data-lucide="languages" aria-hidden="true"></i>
                    <h3>Bilingual</h3>
                    <p class="lang-id">Bahasa Indonesia sebagai utama, dengan opsi Inggris tanpa reload halaman.</p>
                    <p class="lang-en">Indonesian as the main language, with English available without page reload.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Simulator -->
    <section class="simulator-section">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Temukan Jalur Legacy-mu</h2>
                <h2 class="lang-en">Find Your Legacy Path</h2>
                <p class="lang-id" style="color: var(--text-light);">Pilih peranmu dan Hommie akan menunjukkan kontribusi yang paling cocok.</p>
                <p class="lang-en" style="color: var(--text-light);">Choose your role and Hommie will reveal the contribution path that fits you best.</p>
            </div>
            <div class="simulator-panel fade-up">
                <div class="role-picker" role="group" aria-label="Pilih role">
                    <button class="role-chip active" data-role="designer"><i data-lucide="pen-tool" aria-hidden="true"></i> Designer</button>
                    <button class="role-chip" data-role="developer"><i data-lucide="code-2" aria-hidden="true"></i> Developer</button>
                    <button class="role-chip" data-role="mentor"><i data-lucide="messages-square" aria-hidden="true"></i> Mentor</button>
                    <button class="role-chip" data-role="writer"><i data-lucide="book-open-text" aria-hidden="true"></i> Writer</button>
                </div>
                <div class="path-result" id="pathResult">
                    <div class="path-badge">Creative Builder</div>
                    <h3 class="lang-id">Kamu cocok membangun sistem desain untuk proyek sosial.</h3>
                    <h3 class="lang-en">You fit building design systems for social projects.</h3>
                    <p class="lang-id">Mulai dari merapikan pengalaman pengguna, membuat style guide, sampai membantu tim developer menjaga kualitas visual.</p>
                    <p class="lang-en">Start by shaping user experience, creating style guides, and helping developers keep visual quality consistent.</p>
                    <div class="path-steps">
                        <span>Audit</span><span>Prototype</span><span>Ship</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Legacy Map -->
    <section class="map-section">
        <div class="container">
            <div class="map-layout fade-up">
                <div>
                    <span class="eyebrow">Legacy Map</span>
                    <h2 class="lang-id">Jejak karya yang tersebar, bukan sekadar tersimpan.</h2>
                    <h2 class="lang-en">Work that spreads, not just sits in a portfolio.</h2>
                    <p class="lang-id">Klik kota untuk melihat contoh dampak komunitas Hommie di berbagai wilayah.</p>
                    <p class="lang-en">Click a city to see examples of Hommie's community impact across regions.</p>
                    <div class="map-info" id="mapInfo">
                        <strong>Yogyakarta</strong>
                        <span class="lang-id">12 mentor membantu kelas desain aksesibel untuk pelajar SMK.</span>
                        <span class="lang-en">12 mentors support accessible design classes for vocational students.</span>
                    </div>
                </div>
                <div class="legacy-map" aria-label="Peta legacy komunitas">
                    <button class="map-pin active" style="left: 44%; top: 58%;" data-city="Yogyakarta" data-id="12 mentor membantu kelas desain aksesibel untuk pelajar SMK." data-en="12 mentors support accessible design classes for vocational students."><span>YK</span></button>
                    <button class="map-pin" style="left: 36%; top: 50%;" data-city="Bandung" data-id="6 proyek website membantu UMKM lokal tampil lebih profesional." data-en="6 website projects help local small businesses look more professional."><span>BD</span></button>
                    <button class="map-pin" style="left: 31%; top: 61%;" data-city="Jakarta" data-id="Komunitas mengadakan review portofolio hybrid untuk talenta muda." data-en="The community runs hybrid portfolio reviews for young talents."><span>JK</span></button>
                    <button class="map-pin" style="left: 57%; top: 65%;" data-city="Surabaya" data-id="Tim relawan membangun landing page kampanye lingkungan." data-en="Volunteer teams build a landing page for an environmental campaign."><span>SB</span></button>
                    <div class="map-line line-1"></div>
                    <div class="map-line line-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Legacy Pledge -->
    <section class="pledge-section">
        <div class="container">
            <div class="pledge-panel fade-up">
                <div>
                    <span class="eyebrow">Legacy Pledge</span>
                    <h2 class="lang-id">Warisan digital apa yang ingin kamu bangun?</h2>
                    <h2 class="lang-en">What digital legacy do you want to build?</h2>
                    <p class="lang-id">Pilih fokus kontribusimu dan lihat bagaimana Hommie mengubah niat baik menjadi karya yang bisa ditinggalkan.</p>
                    <p class="lang-en">Choose your contribution focus and see how Hommie turns good intent into lasting work.</p>
                </div>
                <div class="pledge-options" role="group" aria-label="Legacy pledge choices">
                    <button class="pledge-option active" data-pledge="impact">
                        <i data-lucide="hand-heart" aria-hidden="true"></i>
                        <span class="lang-id">Dampak Sosial</span><span class="lang-en">Social Impact</span>
                    </button>
                    <button class="pledge-option" data-pledge="craft">
                        <i data-lucide="sparkles" aria-hidden="true"></i>
                        <span class="lang-id">Karya Kreatif</span><span class="lang-en">Creative Craft</span>
                    </button>
                    <button class="pledge-option" data-pledge="mentor">
                        <i data-lucide="graduation-cap" aria-hidden="true"></i>
                        <span class="lang-id">Mentorship</span><span class="lang-en">Mentorship</span>
                    </button>
                </div>
                <div class="pledge-result" id="pledgeResult">
                    <strong class="lang-id">Aku akan membangun produk digital yang membantu orang lain bertumbuh.</strong>
                    <strong class="lang-en">I will build digital products that help others grow.</strong>
                    <p class="lang-id">Mulai dari project sosial, akses belajar, sampai solusi sederhana untuk komunitas sekitar.</p>
                    <p class="lang-en">From social projects and learning access to simple solutions for nearby communities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Manifesto -->
    <section class="manifesto-section">
        <div class="container">
            <div class="manifesto-panel fade-up">
                <div>
                    <span class="eyebrow">Manifesto</span>
                    <h2 class="lang-id">Empat nilai yang membuat portfolio berubah jadi legacy.</h2>
                    <h2 class="lang-en">Four values that turn a portfolio into a legacy.</h2>
                </div>
                <div class="manifesto-list">
                    <button class="manifesto-item active" data-manifesto="create">Create</button>
                    <button class="manifesto-item" data-manifesto="collaborate">Collaborate</button>
                    <button class="manifesto-item" data-manifesto="care">Care</button>
                    <button class="manifesto-item" data-manifesto="continue">Continue</button>
                </div>
                <div class="manifesto-copy" id="manifestoCopy">
                    <h3 class="lang-id">Create dengan tujuan.</h3>
                    <h3 class="lang-en">Create with purpose.</h3>
                    <p class="lang-id">Setiap karya harus menjawab masalah nyata, bukan hanya mengejar tampilan indah.</p>
                    <p class="lang-en">Every work should answer a real problem, not only chase a beautiful look.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Time Capsule -->
    <section class="time-capsule-section">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Kapsul Waktu Digital 2030</h2>
                <h2 class="lang-en">Digital Time Capsule 2030</h2>
                <p class="lang-id" style="color: var(--text-light);">Pesan kecil dari komunitas untuk masa depan yang sedang dibangun.</p>
                <p class="lang-en" style="color: var(--text-light);">Small notes from the community for the future being built.</p>
            </div>
            <div class="capsule-grid">
                <article class="capsule-card fade-up">
                    <span>2030 / Education</span>
                    <p class="lang-id">Kami ingin setiap pelajar punya akses ke mentor digital yang ramah dan gratis.</p>
                    <p class="lang-en">We want every student to access friendly and free digital mentors.</p>
                </article>
                <article class="capsule-card fade-up">
                    <span>2030 / Community</span>
                    <p class="lang-id">Kami ingin portfolio anak muda Indonesia dikenal karena dampaknya.</p>
                    <p class="lang-en">We want Indonesian youth portfolios to be known for their impact.</p>
                </article>
                <article class="capsule-card fade-up">
                    <span>2030 / Technology</span>
                    <p class="lang-id">Kami ingin teknologi terasa seperti rumah: aman, manusiawi, dan terbuka.</p>
                    <p class="lang-en">We want technology to feel like home: safe, humane, and open.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Testimonial Carousel -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="lang-id fade-up" style="text-align: center; margin-bottom: 48px;">Apa Kata <i>Mereka</i></h2>
            <h2 class="lang-en fade-up" style="text-align: center; margin-bottom: 48px;">What <i>They</i> Say</h2>
            <div class="testimonial-carousel fade-up" id="testimonialCarousel">
                <div class="testimonial-track">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="lang-id">"Bergabung dengan Hommie adalah keputusan terbaik. Saya menemukan mentor yang membimbing saya dari nol hingga bisa membangun portofolio profesional."</p>
                        <p class="lang-en">"Joining Hommie was the best decision. I found a mentor who guided me from scratch to building a professional portfolio."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AR</div>
                            <div>
                                <strong>Andi Rizky</strong>
                                <span>UI/UX Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="lang-id">"Komunitas ini bukan sekadar tempat belajar, tapi rumah kedua. Setiap proyek kolaborasi terasa menyenangkan dan penuh dukungan."</p>
                        <p class="lang-en">"This community isn't just a place to learn, but a second home. Every collaborative project feels fun and full of support."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">SP</div>
                            <div>
                                <strong>Sari Putri</strong>
                                <span>Frontend Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="lang-id">"Workshop dan mentorship di Hommie membuka wawasan saya tentang industri teknologi. Sekarang saya lebih percaya diri menghadapi dunia kerja."</p>
                        <p class="lang-en">"Workshops and mentorship at Hommie opened my eyes about the tech industry. Now I'm more confident facing the professional world."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">BK</div>
                            <div>
                                <strong>Bima Kurniawan</strong>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-dots" id="testimonialDots"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php get_footer(); ?>
