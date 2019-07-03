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
    'name'              => 'Glix Schools',
    'version'           => '3.2',
    'author'            => 'Ritedev Technologies',
    'robots'            => 'noindex, nofollow',
    'title'             => 'Glix - Schools',
    'description'       => 'Glix is a School Entrance Portal developed by Ritedev Tech Developers.',
    // true             for a boxed layout
    // false            for a full width layout
    'boxed'         => false,
    'active_page'   => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array) */
$primary_nav = array(
    array(
        'name'  => 'Home',
        'url'   =>  './'
    ),
    array(
        'name'  => 'Apply',
        'sub'   => array(
            array(
                'name'  => 'Apply Now',
                'url'   => 'apply'
            ),
            array(
                'name'  => 'Re-print KIT',
                'url'   => 're-print'
            ),
        )
    ),
    array(
        'name'  => 'Result',
        'sub'   => array(
            array(
                'name'  => 'Screening Result',
                'url'   => 'screening'
            ),
            array(
                'name'  => 'Admission',
                'url'   => 'admissioncheck'
            ),
        )
    ),
    array(
        'name'  => 'Exam',
        'url'   => 'exam'
    ),
    array(
        'name'  => 'Help Desk',
        'url'   => './Documentation'
    ),
    array(
        'name'  => 'Contact',
        'url'   => 'contact'
    ),
);