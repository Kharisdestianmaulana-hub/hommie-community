<?php
/* Template Name: Halaman Programs */
get_header();
?>

<!-- Page Header -->
    <div class="page-header fade-up">
        <div class="container">
            <h1 class="lang-id">Bertumbuh Bersama Melalui Program Kami</h1>
            <h1 class="lang-en">Growing Together Through Our Programs</h1>
            <p class="lang-id">Beragam inisiatif yang dirancang untuk mengasah skill dan memperluas relasimu.</p>
            <p class="lang-en">Various initiatives designed to hone your skills and expand your network.</p>
        </div>
    </div>

    <!-- Mentorship Program -->
    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div class="placeholder-img" style="height: 400px;">
                    <img src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mentorship Program" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                </div>
                <div>
                    <h2 class="lang-id" style="font-size: 2.5rem; margin-bottom: 24px;">Program Mentorship Eksklusif</h2>
                    <h2 class="lang-en" style="font-size: 2.5rem; margin-bottom: 24px;">Exclusive Mentorship Program</h2>
                    <p class="lang-id" style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 16px;">
                        Jangan berjuang sendirian. Dapatkan bimbingan langsung 1-on-1 dari para praktisi industri yang sudah berpengalaman. Program mentorship kami berjalan selama 3 bulan, fokus pada pengembangan portofolio dan persiapan karir.
                    </p>
                    <p class="lang-en" style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 16px;">
                        Don't struggle alone. Get direct 1-on-1 guidance from experienced industry practitioners. Our mentorship program runs for 3 months, focusing on portfolio development and career preparation.
                    </p>
                    <ul class="lang-id" style="margin-bottom: 24px; display: flex; flex-direction: column; gap: 12px;">
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> Sesi tatap muka online mingguan</li>
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> Review CV dan Portofolio mendalam</li>
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> Kesempatan magang atau *referral*</li>
                    </ul>
                    <ul class="lang-en" style="margin-bottom: 24px; display: flex; flex-direction: column; gap: 12px;">
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> Weekly online face-to-face sessions</li>
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> In-depth CV and Portfolio reviews</li>
                        <li style="display: flex; gap: 12px; align-items: center;"><i data-lucide="check-circle" style="color: var(--accent-primary);" aria-hidden="true"></i> Internship or referral opportunities</li>
                    </ul>
                    <button class="btn btn-secondary"><span class="lang-id">Daftar Mentorship Batch 4</span><span class="lang-en">Register for Mentorship Batch 4</span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshops & Events -->
    <section class="section-padding" style="background-color: var(--surface-color);">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Agenda & Workshop Mendatang</h2>
                <h2 class="lang-en">Upcoming Agenda & Workshops</h2>
                <p class="lang-id" style="color: var(--text-light);">Ikuti kelas interaktif untuk menambah *hard skill* maupun *soft skill*.</p>
                <p class="lang-en" style="color: var(--text-light);">Join interactive classes to improve both hard and soft skills.</p>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 24px;">
<?php
$programs_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3
));

if ($programs_query->have_posts()) :
    while ($programs_query->have_posts()) : $programs_query->the_post();
?>
        <div class="card fade-up" style="display: grid; grid-template-columns: auto 1fr auto; gap: 32px; align-items: center;">
            <div style="text-align: center; padding-right: 32px; border-right: 1px solid rgba(0,0,0,0.1);">
                <p style="color: var(--accent-primary); font-weight: 700; font-size: 1.25rem;"><?php echo get_the_date('d'); ?></p>
                <p style="font-weight: 600;"><?php echo get_the_date('M Y'); ?></p>
            </div>
            <div>
                <h3 style="margin-bottom: 8px;"><?php the_title(); ?></h3>
                <div style="color: var(--text-light);"><?php the_excerpt(); ?></div>
                <p style="font-size: 0.875rem; color: var(--text-light); margin-top: 8px;"><i data-lucide="clock" style="width: 14px; height: 14px; display: inline; vertical-align: middle;" aria-hidden="true"></i> <?php echo get_the_time(); ?> &nbsp; | &nbsp; <i data-lucide="video" style="width: 14px; height: 14px; display: inline; vertical-align: middle;" aria-hidden="true"></i> Online/Offline</p>
            </div>
            <button class="btn btn-primary open-modal-btn" data-modal="modal-<?php the_ID(); ?>" style="padding: 10px 20px; font-size: 0.875rem;" aria-label="Lihat detail <?php the_title(); ?>"><span class="lang-id">Detail</span><span class="lang-en">Details</span></button>
        </div>

        <!-- Modal for this post -->
        <div id="modal-<?php the_ID(); ?>" class="modal-overlay">
            <div class="modal-content">
                <button class="modal-close" aria-label="Tutup detail">&times;</button>
                <h2 style="margin-bottom: 16px;"><?php the_title(); ?></h2>
                <div class="modal-body" style="margin-bottom: 24px; color: var(--text-light);">
                    <?php the_content(); ?>
                </div>
                <button class="btn btn-primary modal-close-btn" style="width: 100%;"><span class="lang-id">Tutup</span><span class="lang-en">Close</span></button>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p class="lang-id" style="text-align: center; color: var(--text-light);">Belum ada program saat ini. Cek kembali nanti!</p>';
    echo '<p class="lang-en" style="text-align: center; color: var(--text-light);">No programs available at the moment. Check back later!</p>';
endif;
?>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" style="color: var(--accent-primary); font-weight: 600;"><span class="lang-id">Lihat Kalender Penuh</span><span class="lang-en">View Full Calendar</span> &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php get_footer(); ?>
