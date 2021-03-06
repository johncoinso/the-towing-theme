<?php

if (!defined('ABSPATH')) {
    /* Prevent Direct Access */
    die(-1);
}

class WPPress_ACF_WPPress_Sliders
{

    function __construct() {
        add_action('acf/register_fields', array(&$this,
            'register_fields'
        ));

        /* For ACF Pro 5+ */
        add_action('acf/include_fields', array(&$this,
            'register_fields'
        ));
    }

    function register_fields() {
        include_once (dirname(__FILE__) . '/slider.class.php');
        if (class_exists('LS_Sliders')) {
            include_once ('field-layerslider.php');
        }
        if (class_exists('RevSlider')) {
            include_once ('field-revslider.php');
        }
        if (class_exists('NewRoyalSliderMain')) {
            include_once ('field-royal-slider.php');
        }
    }
}

new WPPress_ACF_WPPress_Sliders();