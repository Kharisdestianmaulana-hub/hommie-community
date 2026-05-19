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
                    <h3 class="lang-id" style="font-size: 2.25rem; margin-bottom: 16px;">Platform Edukasi Inklusif "Pijar"</h3>
                    <h3 class="lang-en" style="font-size: 2.25rem; margin-bottom: 16px;">Inclusive Education Platform "Pijar"</h3>
                    <p class="lang-id" style="color: var(--text-light); margin-bottom: 24px; font-size: 1.125rem;">
                        Proyek Pijar dikembangkan oleh 5 anggota komunitas secara remote. Aplikasi ini bertujuan membantu anak-anak berkebutuhan khusus untuk belajar matematika dengan cara yang interaktif dan menyenangkan.
                    </p>
                    <p class="lang-en" style="color: var(--text-light); margin-bottom: 24px; font-size: 1.125rem;">
                        The Pijar project was developed remotely by 5 community members. The application aims to help children with special needs learn math in an interactive and fun way.
                    </p>
                    <div style="display: flex; gap: 16px; margin-bottom: 32px;">
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Next.js</span>
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Tailwind CSS</span>
                        <span style="padding: 6px 12px; background: rgba(122, 139, 118, 0.1); color: var(--accent-primary); border-radius: 20px; font-size: 0.875rem;">Figma</span>
                    </div>
                    <button class="btn btn-outline"><span class="lang-id">Lihat Detail Proyek</span><span class="lang-en">View Project Details</span> <i data-lucide="external-link" style="width: 16px; height: 16px;" aria-hidden="true"></i></button>
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
            
            <div class="grid-3">
                <!-- Project 1 -->
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 1" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>Sistem Manajemen Desa</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Aplikasi web untuk digitalisasi administrasi desa di Jawa Tengah.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: Tim Delta</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 2" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>FinTracker UI Kit</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Desain UI/UX lengkap untuk aplikasi pencatatan keuangan pribadi.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: Rina UI</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f124dcb02?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 3" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>EcoShop E-Commerce</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Toko online khusus produk ramah lingkungan dengan checkout instan.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: GreenDev</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Add 3 more empty projects to make it long -->
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 4" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>Brand Identity: Kopi Lokal</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Rebranding UMKM kopi agar bersaing di pasar modern.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: ArtStudio</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 5" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>Web Portofolio 3D</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Eksperimen WebGL untuk portofolio interaktif.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: 3DCreator</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="image-card fade-up">
                    <div class="placeholder-img image-card-img" style="border-radius: 0;">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 6" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                    </div>
                    <div class="image-card-content">
                        <h3>Retro Game Web</h3>
                        <p style="color: var(--text-light); margin-bottom: 16px;">Game arcade 2D yang dibangun menggunakan HTML Canvas.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; font-size: 0.875rem;">Oleh: PixelMage</span>
                            <a href="#" style="color: var(--accent-primary);"><i data-lucide="arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 60px;">
                <button class="btn btn-outline"><span class="lang-id">Muat Lebih Banyak Karya</span><span class="lang-en">Load More Works</span></button>
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
