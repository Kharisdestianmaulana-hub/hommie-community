<?php
/* Template Name: Halaman Join */
$form_submitted = false;
$join_data = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_join'], $_POST['hommie_join_nonce']) && wp_verify_nonce($_POST['hommie_join_nonce'], 'hommie_join_form')) {
    $join_data = array(
        'name' => sanitize_text_field(wp_unslash($_POST['name'] ?? '')),
        'email' => sanitize_email(wp_unslash($_POST['email'] ?? '')),
        'role' => sanitize_text_field(wp_unslash($_POST['role'] ?? '')),
        'portfolio' => esc_url_raw(wp_unslash($_POST['portfolio'] ?? '')),
        'reason' => sanitize_textarea_field(wp_unslash($_POST['reason'] ?? '')),
    );
    $form_submitted = $join_data['name'] && is_email($join_data['email']) && $join_data['role'] && $join_data['portfolio'] && $join_data['reason'];
}
get_header();
?>

<!-- Page Header -->
    <div class="page-header fade-up" style="background-color: var(--bg-main);">
        <div class="container">
            <h1 class="lang-id">Siap Meninggalkan Jejakmu?</h1>
            <h1 class="lang-en">Ready to Leave Your Mark?</h1>
            <p class="lang-id">Mari bergabung dengan perapian digital kami. Tempat di mana ide-ide kreatif dikembangkan menjadi karya nyata bersama.</p>
            <p class="lang-en">Join our digital hearth. A place where creative ideas are developed into real works together.</p>
        </div>
    </div>

    <!-- Membership Benefits -->
    <section id="faq" class="section-padding">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Mengapa Bergabung?</h2>
                <h2 class="lang-en">Why Join Us?</h2>
                <p class="lang-id" style="color: var(--text-light);">Keuntungan menjadi bagian dari keluarga Hommie.</p>
                <p class="lang-en" style="color: var(--text-light);">Benefits of being part of the Hommie family.</p>
            </div>
            
            <div class="grid-3">
                <div class="card fade-up">
                    <div class="card-icon" style="background-color: rgba(200, 121, 90, 0.1); color: var(--accent-secondary);">
                        <i data-lucide="coffee" style="width: 24px; height: 24px;" aria-hidden="true"></i>
                    </div>
                    <h3 class="lang-id">Akses Eksklusif Discord</h3>
                    <h3 class="lang-en">Exclusive Discord Access</h3>
                    <p class="lang-id" style="color: var(--text-light);">Akses ke channel diskusi rahasia, tempat berbagi lowongan kerja, dan channel *roast my portfolio* untuk feedback brutal namun membangun.</p>
                    <p class="lang-en" style="color: var(--text-light);">Access to secret discussion channels, job sharing, and *roast my portfolio* channels for brutal yet constructive feedback.</p>
                </div>
                <div class="card fade-up">
                    <div class="card-icon" style="background-color: rgba(200, 121, 90, 0.1); color: var(--accent-secondary);">
                        <i data-lucide="ticket" style="width: 24px; height: 24px;" aria-hidden="true"></i>
                    </div>
                    <h3 class="lang-id">Diskon Workshop</h3>
                    <h3 class="lang-en">Workshop Discounts</h3>
                    <p class="lang-id" style="color: var(--text-light);">Potongan harga khusus atau bahkan akses gratis untuk setiap workshop premium dan kelas berbayar yang diselenggarakan komunitas.</p>
                    <p class="lang-en" style="color: var(--text-light);">Special discounts or even free access to every premium workshop and paid class organized by the community.</p>
                </div>
                <div class="card fade-up">
                    <div class="card-icon" style="background-color: rgba(200, 121, 90, 0.1); color: var(--accent-secondary);">
                        <i data-lucide="briefcase" style="width: 24px; height: 24px;" aria-hidden="true"></i>
                    </div>
                    <h3 class="lang-id">Peluang Kolaborasi</h3>
                    <h3 class="lang-en">Collaboration Opportunities</h3>
                    <p class="lang-id" style="color: var(--text-light);">Diutamakan untuk direkrut dalam proyek-proyek *freelance* berskala besar yang masuk melalui jaringan partner Hommie.</p>
                    <p class="lang-en" style="color: var(--text-light);">Prioritized for recruitment in large-scale freelance projects coming through Hommie's partner network.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Form & Steps -->
    <section class="section-padding" style="background-color: var(--surface-color);">
        <div class="container">
            <div class="grid-2" style="gap: 80px;">
                <!-- Steps -->
                <div>
                    <h2 class="lang-id" style="font-size: 2.5rem; margin-bottom: 32px;">Alur Pendaftaran</h2>
                    <h2 class="lang-en" style="font-size: 2.5rem; margin-bottom: 32px;">Registration Flow</h2>
                    
                    <div style="position: relative; padding-left: 40px;">
                        <!-- Line -->
                        <div style="position: absolute; left: 15px; top: 10px; bottom: 10px; width: 2px; background-color: rgba(122, 139, 118, 0.2);"></div>
                        
                        <!-- Step 1 -->
                        <div style="position: relative; margin-bottom: 40px;">
                            <div style="position: absolute; left: -40px; top: 0; width: 32px; height: 32px; border-radius: 50%; background-color: var(--accent-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; z-index: 2;">1</div>
                            <h3 class="lang-id" style="margin-bottom: 8px;">Isi Formulir</h3>
                            <h3 class="lang-en" style="margin-bottom: 8px;">Fill out the Form</h3>
                            <p class="lang-id" style="color: var(--text-light);">Lengkapi data diri dan sertakan link portofolio (jika ada). Kami ingin mengenalmu lebih jauh!</p>
                            <p class="lang-en" style="color: var(--text-light);">Complete your personal details and include a portfolio link (if any). We want to know you better!</p>
                        </div>
                        
                        <!-- Step 2 -->
                        <div style="position: relative; margin-bottom: 40px;">
                            <div style="position: absolute; left: -40px; top: 0; width: 32px; height: 32px; border-radius: 50%; background-color: var(--accent-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; z-index: 2;">2</div>
                            <h3 class="lang-id" style="margin-bottom: 8px;">Review Kurator</h3>
                            <h3 class="lang-en" style="margin-bottom: 8px;">Curator Review</h3>
                            <p class="lang-id" style="color: var(--text-light);">Tim kurator kami akan mereview aplikasimu dalam waktu 2-3 hari kerja untuk memastikan *culture fit*.</p>
                            <p class="lang-en" style="color: var(--text-light);">Our curation team will review your application within 2-3 business days to ensure a culture fit.</p>
                        </div>
                        
                        <!-- Step 3 -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -40px; top: 0; width: 32px; height: 32px; border-radius: 50%; background-color: var(--accent-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; z-index: 2;">3</div>
                            <h3 style="margin-bottom: 8px;">Welcome Home!</h3>
                            <p class="lang-id" style="color: var(--text-light);">Kamu akan menerima email undangan berisi tautan rahasia menuju *basecamp* digital kami di Discord.</p>
                            <p class="lang-en" style="color: var(--text-light);">You will receive an invitation email containing a secret link to our digital basecamp on Discord.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Form -->
                <div id="contact" style="background-color: var(--bg-main); padding: 40px; border-radius: 24px; box-shadow: var(--shadow-soft);">
                    <?php if ($form_submitted) : ?>
                        <div style="text-align: center; padding: 40px 20px;">
                            <div style="width: 64px; height: 64px; background-color: #E8F5E9; color: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;">
                                <i data-lucide="check" style="width: 32px; height: 32px;" aria-hidden="true"></i>
                            </div>
                            <h3 class="lang-id" style="font-size: 1.75rem; margin-bottom: 16px;">Pendaftaran Berhasil!</h3>
                            <h3 class="lang-en" style="font-size: 1.75rem; margin-bottom: 16px;">Registration Successful!</h3>
                            <p class="lang-id" style="color: var(--text-light);">Terima kasih telah mendaftar. Tim kurator kami akan segera meninjau profilmu dan menghubungi via email.</p>
                            <p class="lang-en" style="color: var(--text-light);">Thank you for registering. Our curation team will review your profile shortly and contact you via email.</p>
                            <?php if (!empty($join_data['name'])) : ?>
                                <div class="submission-summary">
                                    <p><strong><?php echo esc_html($join_data['name']); ?></strong></p>
                                    <p><?php echo esc_html($join_data['email']); ?> · <?php echo esc_html(ucfirst($join_data['role'])); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                    <h3 class="lang-id" style="font-size: 1.75rem; margin-bottom: 24px;">Form Registrasi Calon Anggota</h3>
                    <h3 class="lang-en" style="font-size: 1.75rem; margin-bottom: 24px;">Prospective Member Registration Form</h3>
                    <form action="#contact" method="POST">
                        <?php wp_nonce_field('hommie_join_form', 'hommie_join_nonce'); ?>
                        <div class="form-group">
                            <label class="form-label" for="name"><span class="lang-id">Nama Lengkap</span><span class="lang-en">Full Name</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email"><span class="lang-id">Alamat Email</span><span class="lang-en">Email Address</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="role"><span class="lang-id">Minat/Role Utama</span><span class="lang-en">Interest/Main Role</span></label>
                            <select id="role" name="role" class="form-control" style="appearance: auto;" required>
                                <option value="" class="lang-id">-- Pilih Peran --</option>
                                <option value="" class="lang-en">-- Select Role --</option>
                                <option value="design">UI/UX Designer</option>
                                <option value="frontend">Frontend Developer</option>
                                <option value="backend">Backend Developer</option>
                                <option value="pm">Product Manager</option>
                                <option value="other" class="lang-id">Lainnya</option>
                                <option value="other" class="lang-en">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="portfolio"><span class="lang-id">Link Portofolio / GitHub / LinkedIn</span><span class="lang-en">Portfolio / GitHub / LinkedIn Link</span></label>
                            <input type="url" id="portfolio" name="portfolio" class="form-control" placeholder="https://..." required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="reason"><span class="lang-id">Mengapa ingin bergabung dengan Hommie?</span><span class="lang-en">Why do you want to join Hommie?</span></label>
                            <textarea id="reason" name="reason" class="form-control" placeholder="..." required></textarea>
                        </div>
                        
                        <button type="submit" name="submit_join" class="btn btn-primary" style="width: 100%;"><span class="lang-id">Kirim Aplikasi Sekarang</span><span class="lang-en">Submit Application Now</span></button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title fade-up">
                <h2 class="lang-id">Pertanyaan Sering Diajukan</h2>
                <h2 class="lang-en">Frequently Asked Questions</h2>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item">
                    <h4 class="faq-question">
                        <span class="lang-id">Apakah bergabung dengan komunitas ini berbayar?</span>
                        <span class="lang-en">Is it free to join this community?</span>
                        <i data-lucide="chevron-down" class="faq-icon" aria-hidden="true"></i>
                    </h4>
                    <div class="faq-answer">
                        <p class="lang-id">Tidak. Keanggotaan Hommie 100% gratis. Namun, kami sangat menyeleksi calon anggota berdasarkan motivasi dan portofolio untuk menjaga kualitas komunitas.</p>
                        <p class="lang-en">No. Hommie membership is 100% free. However, we strictly curate prospective members based on motivation and portfolio to maintain community quality.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <h4 class="faq-question">
                        <span class="lang-id">Saya belum punya portofolio sama sekali, apakah boleh mendaftar?</span>
                        <span class="lang-en">I don't have a portfolio yet, can I still apply?</span>
                        <i data-lucide="chevron-down" class="faq-icon" aria-hidden="true"></i>
                    </h4>
                    <div class="faq-answer">
                        <p class="lang-id">Sangat boleh! Yang paling kami hargai adalah semangat belajar. Jika belum ada portofolio, jelaskan apa yang sedang kamu pelajari dan targetmu ke depan pada kolom 'Alasan Bergabung'.</p>
                        <p class="lang-en">Absolutely! We value the passion to learn above all else. If you don't have a portfolio, simply explain what you are currently studying and your future goals in the 'Reason for Joining' field.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <h4 class="faq-question">
                        <span class="lang-id">Apakah aktivitas komunitas sepenuhnya online?</span>
                        <span class="lang-en">Are the community activities fully online?</span>
                        <i data-lucide="chevron-down" class="faq-icon" aria-hidden="true"></i>
                    </h4>
                    <div class="faq-answer">
                        <p class="lang-id">Saat ini aktivitas harian kami 100% online melalui Discord. Namun, kami secara rutin mengadakan *meetup* fisik kuartalan di beberapa kota besar.</p>
                        <p class="lang-en">Currently, our daily activities are 100% online via Discord. However, we regularly hold physical meetups quarterly in several major cities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php get_footer(); ?>
