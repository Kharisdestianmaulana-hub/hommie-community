<?php
/* Template Name: Halaman Legacy */
get_header();
?>

<!-- Page Header -->
    <div class="page-header fade-up">
        <div class="container">
            <h1 class="lang-id">Jejak Langkah & Karya Kami</h1>
            <h1 class="lang-en">Our Footprints & Works</h1>
            <p class="lang-id">Meninggalkan warisan digital yang bermakna bagi masa depan melalui karya-karya revolusioner.</p>
            <p class="lang-en">Leaving a meaningful digital legacy for the future through revolutionary works.</p>
        </div>
    </div>

    <!-- Hall of Fame -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Hall of Fame: Proyek Bulan Ini</h2>
                <h2 class="lang-en">Hall of Fame: Project of the Month</h2>
                <p class="lang-id" style="color: var(--text-light);">Apresiasi tertinggi untuk kolaborasi paling berdampak.</p>
                <p class="lang-en" style="color: var(--text-light);">Highest appreciation for the most impactful collaborations.</p>
            </div>
            
            <div class="grid-2" style="background-color: var(--surface-color); padding: 40px; border-radius: 24px; box-shadow: var(--shadow-soft);">
                <div class="placeholder-img" style="height: 100%; min-height: 300px; border-radius: 12px;">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hall of Fame Project" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                </div>
                <div>
                    <div class="lang-id" style="color: var(--accent-secondary); font-weight: 600; margin-bottom: 8px;">Kategori: EdTech</div>
                    <div class="lang-en" style="color: var(--accent-secondary); font-weight: 600; margin-bottom: 8px;">Category: EdTech</div>
                    <h3 class="lang-id" style="font-size: 2.25rem; margin-bottom: 16px;">Pijar Akses: Platform Edukasi Inklusif</h3>
                    <h3 class="lang-en" style="font-size: 2.25rem; margin-bottom: 16px;">Pijar Akses: Inclusive Education Platform</h3>
                    <p class="lang-id" style="color: var(--text-light); margin-bottom: 24px; font-size: 1.125rem;">
                        Pijar Akses dikembangkan oleh 5 anggota komunitas secara remote. Aplikasi ini membantu anak berkebutuhan khusus belajar matematika dengan visual sederhana, audio pendamping, dan latihan bertahap.
                    </p>
                    <p class="lang-en" style="color: var(--text-light); margin-bottom: 24px; font-size: 1.125rem;">
                        Pijar Akses was developed remotely by 5 community members. The app helps children with special needs learn math through simple visuals, audio guidance, and progressive practice.
                    </p>
                    <div style="display: flex; gap: 16px; margin-bottom: 32px;">
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Next.js</span>
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Tailwind CSS</span>
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Figma</span>
                    </div>
                    <button class="btn btn-outline open-modal-btn" data-modal="modal-pijar"><span class="lang-id">Lihat Detail Proyek</span><span class="lang-en">View Project Details</span> <i data-lucide="external-link" style="width: 16px; height: 16px;" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </section>

    <div id="modal-pijar" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2 class="lang-id">Pijar Akses: Dari Masalah Belajar ke Legacy Edukasi</h2>
            <h2 class="lang-en">Pijar Akses: From Learning Problem to Education Legacy</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Materi matematika sulit diakses anak berkebutuhan khusus.</p><p class="lang-en">Math material is hard to access for children with special needs.</p></div>
                <div><strong>Process</strong><p class="lang-id">Riset pengguna, prototipe audio-visual, dan uji kelas kecil.</p><p class="lang-en">User research, audio-visual prototypes, and small classroom tests.</p></div>
                <div><strong>People</strong><p class="lang-id">5 anggota: desainer, developer, mentor pendidikan, dan ilustrator.</p><p class="lang-en">5 members: designers, developers, education mentors, and illustrators.</p></div>
                <div><strong>Product</strong><p class="lang-id">Platform latihan matematika interaktif dengan mode visual sederhana.</p><p class="lang-en">An interactive math practice platform with a simple visual mode.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Template pembelajaran bisa dipakai ulang oleh komunitas lain.</p><p class="lang-en">The learning template can be reused by other communities.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <!-- Legacy Timeline -->
    <section class="section-padding" style="background-color: var(--surface-color);">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Timeline Warisan Hommie</h2>
                <h2 class="lang-en">Hommie Legacy Timeline</h2>
                <p class="lang-id" style="color: var(--text-light);">Jejak perkembangan komunitas dari percakapan kecil menjadi ekosistem kolaboratif.</p>
                <p class="lang-en" style="color: var(--text-light);">The growth path from small conversations into a collaborative ecosystem.</p>
            </div>
            <div class="legacy-timeline">
                <div class="timeline-item fade-up">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h3 class="lang-id">Ruang Tengah Pertama</h3>
                        <h3 class="lang-en">The First Living Room</h3>
                        <p class="lang-id">Hommie dimulai sebagai kelompok belajar desain dan web kecil dengan sesi review portofolio mingguan.</p>
                        <p class="lang-en">Hommie began as a small design and web learning circle with weekly portfolio reviews.</p>
                    </div>
                </div>
                <div class="timeline-item fade-up">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <h3 class="lang-id">Kolaborasi Berdampak</h3>
                        <h3 class="lang-en">Impact Collaboration</h3>
                        <p class="lang-id">Anggota mulai membangun proyek nyata untuk UMKM, edukasi, dan komunitas lokal.</p>
                        <p class="lang-en">Members started building real projects for small businesses, education, and local communities.</p>
                    </div>
                </div>
                <div class="timeline-item fade-up">
                    <div class="timeline-year">2026</div>
                    <div class="timeline-content">
                        <h3 class="lang-id">Beyond Portfolio</h3>
                        <h3 class="lang-en">Beyond Portfolio</h3>
                        <p class="lang-id">Hommie berkembang menjadi ruang legacy: setiap karya punya cerita, dampak, dan penerus.</p>
                        <p class="lang-en">Hommie grows into a legacy space: every work carries a story, impact, and continuity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Showcase Grid -->
    <section class="section-padding" style="background-color: var(--bg-main);">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Galeri Karya Pilihan</h2>
                <h2 class="lang-en">Selected Works Gallery</h2>
                <p class="lang-id" style="color: var(--text-light);">Eksplorasi mahakarya digital dari para kreator Hommie.</p>
                <p class="lang-en" style="color: var(--text-light);">Explore digital masterpieces from Hommie creators.</p>
            </div>

            <div class="project-filters fade-up" role="group" aria-label="Filter karya">
                <button class="filter-btn active" data-filter="all"><span class="lang-id">Semua</span><span class="lang-en">All</span></button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="ui">UI/UX</button>
                <button class="filter-btn" data-filter="brand">Branding</button>
                <button class="filter-btn" data-filter="impact"><span class="lang-id">Dampak</span><span class="lang-en">Impact</span></button>
            </div>
            
            <div class="grid-3">
                <!-- Project 1 -->
                <div class="image-card fade-up project-card" data-category="web impact">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 1" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>DesaConnect</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Dashboard layanan warga untuk surat, agenda, dan laporan publik di desa Jawa Tengah.</p>
                        <div class="legacy-score">
                            <span style="--score: 92%;">Creativity</span>
                            <span style="--score: 88%;">Collab</span>
                            <span style="--score: 96%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: Tim Delta</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-desaconnect" aria-label="Lihat pola legacy DesaConnect"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="image-card fade-up project-card" data-category="ui">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 2" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>DompetRapi UI Kit</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Sistem desain aplikasi literasi keuangan untuk pelajar dan pekerja muda.</p>
                        <div class="legacy-score">
                            <span style="--score: 94%;">Creativity</span>
                            <span style="--score: 80%;">Collab</span>
                            <span style="--score: 78%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: Rina UI</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-dompetrapi" aria-label="Lihat pola legacy DompetRapi"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="image-card fade-up project-card" data-category="web impact">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f124dcb02?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 3" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>WarungNaik</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Etalase digital untuk UMKM kelontong agar katalog dan pesanan lebih mudah diakses.</p>
                        <div class="legacy-score">
                            <span style="--score: 86%;">Creativity</span>
                            <span style="--score: 84%;">Collab</span>
                            <span style="--score: 91%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: GreenDev</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-warungnaik" aria-label="Lihat pola legacy WarungNaik"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Add 3 more empty projects to make it long -->
                <div class="image-card fade-up project-card" data-category="brand">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 4" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>AkarKopi Identity</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Identitas visual kopi lokal dari petani Garut agar lebih siap masuk pasar modern.</p>
                        <div class="legacy-score">
                            <span style="--score: 89%;">Creativity</span>
                            <span style="--score: 76%;">Collab</span>
                            <span style="--score: 83%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: ArtStudio</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-akarkopi" aria-label="Lihat pola legacy AkarKopi"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="image-card fade-up project-card" data-category="web ui">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 5" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>RuangKarya 3D</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Eksperimen portofolio 3D untuk menampilkan proses kreatif, bukan hanya hasil akhir.</p>
                        <div class="legacy-score">
                            <span style="--score: 98%;">Creativity</span>
                            <span style="--score: 72%;">Collab</span>
                            <span style="--score: 74%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: 3DCreator</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-ruangkarya" aria-label="Lihat pola legacy RuangKarya"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="image-card fade-up project-card" data-category="web">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 6" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>MainBareng Canvas</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Game web edukatif berbasis HTML Canvas untuk mengenalkan logika dasar pemrograman.</p>
                        <div class="legacy-score">
                            <span style="--score: 90%;">Creativity</span>
                            <span style="--score: 70%;">Collab</span>
                            <span style="--score: 69%;">Impact</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: PixelMage</span>
                            <button class="icon-action open-modal-btn" data-modal="modal-mainbareng" aria-label="Lihat pola legacy MainBareng"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 60px;">
                <a href="<?php echo home_url('/programs/'); ?>" class="btn btn-outline"><span class="lang-id">Lihat Program Pembentuk Karya</span><span class="lang-en">See Programs Behind the Works</span></a>
            </div>
        </div>
    </section>

    <!-- Project Journey Modals -->
    <div id="modal-desaconnect" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>DesaConnect</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Warga desa masih harus datang langsung untuk surat dan laporan sederhana.</p><p class="lang-en">Villagers still need to come in person for simple letters and reports.</p></div>
                <div><strong>Process</strong><p class="lang-id">Tim memetakan alur layanan, membuat prototipe, lalu menguji dengan perangkat desa.</p><p class="lang-en">The team mapped service flows, prototyped, then tested with village staff.</p></div>
                <div><strong>People</strong><p class="lang-id">Developer, UI designer, penulis konten, dan relawan administrasi desa.</p><p class="lang-en">Developers, UI designers, content writers, and village admin volunteers.</p></div>
                <div><strong>Product</strong><p class="lang-id">Dashboard layanan warga untuk surat, agenda, dan laporan publik.</p><p class="lang-en">A citizen service dashboard for letters, agendas, and public reports.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Template layanan bisa direplikasi untuk desa kecil lain.</p><p class="lang-en">The service template can be replicated for other small villages.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <div id="modal-dompetrapi" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>DompetRapi UI Kit</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Banyak pelajar mulai mencatat uang, tapi aplikasi finansial terasa rumit.</p><p class="lang-en">Many students start tracking money, but finance apps feel complicated.</p></div>
                <div><strong>Process</strong><p class="lang-id">Riset kebiasaan uang saku, wireframe, dan uji copy agar mudah dipahami.</p><p class="lang-en">Allowance habit research, wireframes, and copy testing for clarity.</p></div>
                <div><strong>People</strong><p class="lang-id">UI designer, UX researcher, dan mentor produk.</p><p class="lang-en">UI designers, UX researchers, and product mentors.</p></div>
                <div><strong>Product</strong><p class="lang-id">Sistem desain aplikasi literasi keuangan dengan komponen siap pakai.</p><p class="lang-en">A financial literacy app design system with reusable components.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Komponen bisa dipakai anggota baru untuk belajar desain produk.</p><p class="lang-en">Components can be reused by new members learning product design.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <div id="modal-warungnaik" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>WarungNaik</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">UMKM kelontong sulit menampilkan stok dan promo secara digital.</p><p class="lang-en">Small shops struggle to show stock and promotions digitally.</p></div>
                <div><strong>Process</strong><p class="lang-id">Tim observasi warung, membuat katalog sederhana, dan menguji pemesanan via chat.</p><p class="lang-en">The team observed shops, built a simple catalog, and tested chat ordering.</p></div>
                <div><strong>People</strong><p class="lang-id">Frontend developer, desainer brand, dan pemilik warung sebagai co-creator.</p><p class="lang-en">Frontend developers, brand designers, and shop owners as co-creators.</p></div>
                <div><strong>Product</strong><p class="lang-id">Etalase digital ringan yang mudah diperbarui dari CMS.</p><p class="lang-en">A lightweight digital storefront that is easy to update from a CMS.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Pola etalase bisa dipakai ulang untuk UMKM lain di lingkungan sekitar.</p><p class="lang-en">The storefront pattern can be reused by nearby small businesses.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <div id="modal-akarkopi" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>AkarKopi Identity</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Petani kopi punya cerita kuat, tapi identitas produk belum konsisten.</p><p class="lang-en">Coffee farmers have strong stories, but product identity is inconsistent.</p></div>
                <div><strong>Process</strong><p class="lang-id">Wawancara asal biji, moodboard lokal, dan sistem label kemasan.</p><p class="lang-en">Bean-origin interviews, local moodboards, and packaging label systems.</p></div>
                <div><strong>People</strong><p class="lang-id">Brand designer, copywriter, fotografer produk, dan pelaku UMKM.</p><p class="lang-en">Brand designers, copywriters, product photographers, and small businesses.</p></div>
                <div><strong>Product</strong><p class="lang-id">Identitas visual, tone komunikasi, dan panduan kemasan.</p><p class="lang-en">Visual identity, communication tone, and packaging guide.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">UMKM bisa menjaga konsistensi brand setelah proyek selesai.</p><p class="lang-en">Small businesses can keep brand consistency after the project ends.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <div id="modal-ruangkarya" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>RuangKarya 3D</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Portofolio sering menampilkan hasil akhir tanpa menunjukkan proses belajar.</p><p class="lang-en">Portfolios often show final results without revealing the learning process.</p></div>
                <div><strong>Process</strong><p class="lang-id">Eksperimen WebGL, storyboard interaksi, dan optimasi agar tetap ringan.</p><p class="lang-en">WebGL experiments, interaction storyboards, and optimization for performance.</p></div>
                <div><strong>People</strong><p class="lang-id">3D creator, frontend developer, dan mentor performa web.</p><p class="lang-en">3D creators, frontend developers, and web performance mentors.</p></div>
                <div><strong>Product</strong><p class="lang-id">Ruang portofolio interaktif yang menampilkan proses, catatan, dan karya.</p><p class="lang-en">An interactive portfolio room showing process, notes, and work.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Anggota belajar bahwa eksperimen visual tetap harus aksesibel dan cepat.</p><p class="lang-en">Members learn that visual experiments must stay accessible and fast.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <div id="modal-mainbareng" class="modal-overlay">
        <div class="modal-content project-journey-modal">
            <button class="modal-close" aria-label="Tutup detail">&times;</button>
            <span class="eyebrow">Project Journey</span>
            <h2>MainBareng Canvas</h2>
            <div class="journey-grid">
                <div><strong>Problem</strong><p class="lang-id">Materi logika pemrograman sering terasa kaku untuk pemula.</p><p class="lang-en">Programming logic material often feels rigid for beginners.</p></div>
                <div><strong>Process</strong><p class="lang-id">Tim membuat mekanik sederhana, uji coba dengan siswa, lalu menyeimbangkan level.</p><p class="lang-en">The team built simple mechanics, tested with students, then balanced levels.</p></div>
                <div><strong>People</strong><p class="lang-id">Game designer, canvas developer, mentor coding, dan siswa penguji.</p><p class="lang-en">Game designers, canvas developers, coding mentors, and student testers.</p></div>
                <div><strong>Product</strong><p class="lang-id">Game web edukatif untuk mengenalkan urutan, kondisi, dan percabangan.</p><p class="lang-en">An educational web game introducing sequences, conditions, and branching.</p></div>
                <div><strong>Legacy</strong><p class="lang-id">Materi bisa dipakai ulang untuk workshop coding pemula.</p><p class="lang-en">The material can be reused for beginner coding workshops.</p></div>
            </div>
            <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup Cerita</span><span class="lang-en">Close Story</span></button>
        </div>
    </div>

    <!-- Before After Portfolio -->
    <section class="section-padding before-after-section">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Sebelum Portfolio, Sesudah Legacy</h2>
                <h2 class="lang-en">Before Portfolio, After Legacy</h2>
                <p class="lang-id" style="color: var(--text-light);">Transformasi anggota setelah belajar, berkolaborasi, dan menyelesaikan proyek nyata.</p>
                <p class="lang-en" style="color: var(--text-light);">Member transformations after learning, collaborating, and shipping real projects.</p>
            </div>
            <div class="before-after-grid">
                <div class="before-after-card fade-up">
                    <div class="before-side">
                        <span>Before</span>
                        <h3 class="lang-id">Portofolio berisi latihan pribadi.</h3>
                        <h3 class="lang-en">A portfolio full of personal exercises.</h3>
                    </div>
                    <div class="after-side">
                        <span>After</span>
                        <h3 class="lang-id">Studi kasus nyata untuk UMKM dan komunitas.</h3>
                        <h3 class="lang-en">Real case studies for small businesses and communities.</h3>
                    </div>
                </div>
                <div class="before-after-card fade-up">
                    <div class="before-side">
                        <span>Before</span>
                        <h3 class="lang-id">Belajar sendiri tanpa arah.</h3>
                        <h3 class="lang-en">Learning alone without direction.</h3>
                    </div>
                    <div class="after-side">
                        <span>After</span>
                        <h3 class="lang-id">Punya mentor, ritme review, dan partner proyek.</h3>
                        <h3 class="lang-en">Having mentors, review rhythm, and project partners.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="section-padding" style="background-color: var(--surface-color);">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Cerita Sukses Anggota</h2>
                <h2 class="lang-en">Member Success Stories</h2>
                <p class="lang-id" style="color: var(--text-light);">Bagaimana Hommie mengubah karir dan kehidupan mereka.</p>
                <p class="lang-en" style="color: var(--text-light);">How Hommie changed their careers and lives.</p>
            </div>
            
            <div class="grid-2">
                <div class="card fade-up" style="display: flex; gap: 24px; align-items: flex-start;">
                    <div class="placeholder-img" style="width: 80px; height: 80px; border-radius: 50%; flex-shrink: 0; overflow: hidden; position: relative;">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Avatar 1" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div>
                        <p style="font-size: 1.125rem; font-style: italic; margin-bottom: 16px;">"Sebelum bergabung, saya hanya mengoding sendiri tanpa arah. Lewat Hommie, saya mendapat mentor dan kolaborator. Sekarang saya memimpin proyek *open source*."</p>
                        <p style="font-weight: 600;">- Dimas A.</p>
                        <p style="font-size: 0.875rem; color: var(--text-light);">Fullstack Developer</p>
                    </div>
                </div>
                <div class="card fade-up" style="display: flex; gap: 24px; align-items: flex-start;">
                    <div class="placeholder-img" style="width: 80px; height: 80px; border-radius: 50%; flex-shrink: 0; overflow: hidden; position: relative;">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Avatar 2" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div>
                        <p style="font-size: 1.125rem; font-style: italic; margin-bottom: 16px;">"Komunitas ini sangat suportif! Saya yang awalnya ragu dengan desain saya, sekarang percaya diri dan berhasil menang kompetisi nasional berkat review dari teman-teman."</p>
                        <p style="font-weight: 600;">- Clara M.</p>
                        <p style="font-size: 0.875rem; color: var(--text-light);">UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php get_footer(); ?>
