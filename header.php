<?php
wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
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
    <header id="header" role="banner">
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <ul id="menu-main" class="menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Platzhalter</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Platzhalter</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Platzhalter</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Platzhalter</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Platzhalter</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="content" role="main">
