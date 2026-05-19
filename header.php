<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>

    <!-- Preloader -->
    <div id="preloader">
        <div class="logo">Hommie<span>.</span></div>
    </div>
    <script>
        const savedTheme = localStorage.getItem('hommie_theme') || 'light';
        if (savedTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
        if (sessionStorage.getItem('hommie_preloader_shown')) {
            document.getElementById('preloader').style.display = 'none';
        }
    </script>

    <!-- Header -->
    <header class="header">
        <div class="container nav-container">
            <a href="<?php echo home_url('/'); ?>" class="logo">Hommie<span>.</span></a>
            
            <nav class="nav-links">
                <a href="<?php echo home_url('/'); ?>" class="<?php echo is_front_page() || is_home() ? 'active' : ''; ?>">
                    <span class="lang-id">Beranda</span><span class="lang-en">Home</span>
                </a>
                <a href="<?php echo home_url('/about/'); ?>" class="<?php echo is_page('about') ? 'active' : ''; ?>">
                    <span class="lang-id">Tentang</span><span class="lang-en">About</span>
                </a>
                <a href="<?php echo home_url('/legacy/'); ?>" class="<?php echo is_page('legacy') ? 'active' : ''; ?>">
                    <span class="lang-id">Jejak Kami</span><span class="lang-en">Legacy</span>
                </a>
                <a href="<?php echo home_url('/programs/'); ?>" class="<?php echo is_page('programs') ? 'active' : ''; ?>">
                    <span class="lang-id">Program</span><span class="lang-en">Programs</span>
                </a>
                <a href="<?php echo home_url('/join/'); ?>" class="<?php echo is_page('join-us') || is_page('join') ? 'active' : ''; ?>">
                    <span class="lang-id">Gabung</span><span class="lang-en">Join Us</span>
                </a>
            </nav>
            
            <div style="display: flex; align-items: center; gap: 16px;">
                <button class="lang-toggle" aria-label="Toggle Language" style="background: none; border: none; color: var(--text-main); font-weight: 600; cursor: pointer; font-size: 1rem; font-family: var(--font-heading);">
                    <span class="lang-id-label">ID</span><span style="opacity: 0.3; margin: 0 4px;">|</span><span class="lang-en-label" style="opacity: 0.5;">EN</span>
                </button>
                <button class="theme-toggle" aria-label="Toggle Dark Mode">
                    <i data-lucide="moon" class="moon-icon" aria-hidden="true"></i>
                    <i data-lucide="sun" class="sun-icon" aria-hidden="true" style="display: none;"></i>
                </button>
                <button class="btn btn-primary" onclick="window.location.href='<?php echo home_url('/join/'); ?>'">
                    <span class="lang-id">Gabung Sekarang</span>
                    <span class="lang-en">Join Now</span>
                    <i data-lucide="arrow-right" style="width: 18px; height: 18px;" aria-hidden="true"></i>
                </button>
            </div>
            
            <button class="mobile-menu-btn">
                <i data-lucide="menu" aria-hidden="true"></i>
            </button>
        </div>
    </header>
