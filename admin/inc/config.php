<?php
error_reporting(0);
/**
 * config.php
 *
 * Author: Ritedev Tech
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'              => 'Glix School Portal',
    'version'           => '3.2',
    'author'            => 'Ritedev Tech',
    'robots'            => 'noindex, nofollow',
    'title'             => 'Glix - Schools',
    'description'       => 'Glix is a School Entrance Portal developed by Ritedev Tech Developers.',
    // true                     enable page preloader
    // false                    disable page preloader
    'page_preloader'    => true,
    // true                     enable main menu auto scrolling when opening a submenu
    // false                    disable main menu auto scrolling when opening a submenu
    'menu_scroll'       => true,
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar'     => 'navbar-default',
    // ''                       empty for a static layout
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header'            => '',
    // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
    // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
    // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-mini sidebar-visible-lg-mini'           for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
    // 'sidebar-mini sidebar-visible-lg'                for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)
    // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
    // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
    // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
    'sidebar'           => 'sidebar-partial sidebar-visible-lg sidebar-no-animations',
    // ''                       empty for a static footer
    // 'footer-fixed'           for a fixed footer
    'footer'            => '',
    // ''                       empty for default style
    // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
    'main_style'        => '',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire', 'coral', 'lake',
    // 'forest', 'waterlily', 'emerald', 'blackberry' or '' leave empty for the Default Blue theme
    'theme'             => '',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content'    => '',
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => './',
        'icon'  => 'gi gi-dashboard'
    ),
    array(
        'name'  => 'Examination',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Admin should be careful while creating Exams titles and Questions."><i class="gi gi-lightbulb"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Add Exam Title',
        'url'   => 'add-exam',
        'icon'  => 'gi gi-book'
    ),
    array(
        'name'  => 'Add Exam Questions',
        'url'   => 'addquestions',
        'icon'  => 'gi gi-link'
    ),
    array(
        'name'  => 'Add Secondary Level',
        'url'   => 'add-secondary-level',
        'icon'  => 'gi gi-notes_2'
    ),
    array(
        'name'  => 'Registration Pin',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Registration Pins"><i class="gi gi-keys"></i></a>',
        'url'   => 'header'
    ),
    array(
        'name'  => 'List of Unused Pins',
        'url'   => 'list-of-unused-pins',
        'icon'  => 'gi gi-keys'
    ),
    array(
        'name'  => 'List of Used Pins',
        'url'   => 'list-of-used-pins',
        'icon'  => 'gi gi-keys'
    ),
    array(
        'name'  => 'Generate Manual Pin',
        'url'   => 'manual-generator',
        'icon'  => 'gi gi-keys'
    ),
    array(
        'name'  => 'Other Tools',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Other useful admin tools"><i class="gi gi-settings"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Confirm Registration No',
        'url'   => 'confirmstudents',
        'icon'  => 'gi gi-show_big_thumbnails'
    ),
    array(
        'name'  => 'CBT Questions Setting',
        'url'   => 'cbt-settings',
        'icon'  => 'gi gi-log_book'
    ),
    array(
        'name'  => 'Admin',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip"><i class="gi gi-user"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Lock',
        'url'   => '../lock',
        'icon'  => 'gi gi-lock'
    ),
    array(  
        'name'  => 'Logout',
        'url'   => '../logout',
        'icon'  => 'gi gi-power'
    ),
);