<?php
wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
wp_enqueue_script('header', get_template_directory_uri() . '/assets/scripts/header.js');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" class="nastylashy-header" role="banner">
        <button class="mobile-nav-btn">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <ul id="menu-main" class="menu">
                <li>
                    <a href="/#home" itemprop="url">Home</a>
                </li>
                <li>
                    <a href="/#bilder" itemprop="url">Bilder</a>
                </li>
                <li>
                    <a href="/#leistungen" itemprop="url">Leistungen</a>
                </li>
                <li>
                    <a href="/#ueber-mich" itemprop="url">Über mich</a>
                </li>
                <li>
                    <a href="/#faq" itemprop="url">FAQ</a>
                </li>
                <li>
                    <a href="/#preise" itemprop="url">Preise</a>
                </li>
                <li>
                    <a href="/#kontakt" itemprop="url">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="content" role="main">
