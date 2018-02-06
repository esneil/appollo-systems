<?php
/**
 * Appollo Custom Theme functions
 * User: Esneil
 * Date: 1/6/2018
 * Time: 6:41 PM
 */

load_theme_textdomain('appollo', get_template_directory() . '/languages');
add_action('after_setup_theme', 'appollo_theme_setup');
function appollo_theme_setup()
{
    load_theme_textdomain('appollo', get_template_directory() . '/languages');
}

define('TEMPLATE_PATH', get_template_directory_uri());
define('JS', TEMPLATE_PATH . "/assets/js");

add_theme_support('custom-logo');
//add_theme_support('custom-header');
add_action('customize_register', 'appollo_theme_options');
add_action('init', 'register_appollo_menus');

function appollo_theme_options($wp_customize)
{
    //Sections, settings and controls will be set here
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');


    //-- Slides Options Section
    $wp_customize->add_section(
        'appollo_slider_options',
        array(
            'title' => pll__('Header Slide Options'),
            'priority' => 100,
            'capability' => 'edit_theme_options',
            'description' => pll__('Change header slider options here.'),
        )
    );

    $wp_customize->add_setting(
        'header_slide1_url',
        array(
            'default' => '#'
        )
    );

    $wp_customize->add_setting(
        'header_slide2_url',
        array(
            'default' => '#'
        )
    );

    $wp_customize->add_setting(
        'header_slide3_url',
        array(
            'default' => '#'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'header_slide1_control',
        array(
            'label' => pll__('Header Slide First Image'),
            'section' => 'appollo_slider_options',
            'settings' => 'header_slide1_url',
            'priority' => 10,
        )
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'header_slide2_control',
        array(
            'label' => pll__('Header Slide Second Image'),
            'section' => 'appollo_slider_options',
            'settings' => 'header_slide2_url',
            'priority' => 20,
        )
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'header_slide3_control',
        array(
            'label' => pll__('Header Slide Third Image'),
            'section' => 'appollo_slider_options',
            'settings' => 'header_slide3_url',
            'priority' => 30,
        )
    ));

    //-- End of Slide Options Section

    //-- Page Entries Options

    $icon_options = array(
        'icon-adjustment-system' => 'adjustment-system',
        'icon-angle-ruler' => 'angle-ruler',
        'icon-anvil' => 'anvil',
        'icon-axe' => 'axe',
        'icon-backhoes' => 'backhoes',
        'icon-barrier' => 'barrier',
        'icon-big-derrick-with-boxes' => 'big-derrick-with-boxes',
        'icon-big-shovel' => 'big-shovel',
        'icon-board' => 'board',
        'icon-brick-wall' => 'brick-wall',
        'icon-bucket' => 'bucket',
        'icon-cement-truck' => 'cement-truck',
        'icon-chainsaw' => 'chainsaw',
        'icon-clippers' => 'clippers',
        'icon-concrete-mixer' => 'concrete-mixer',
        'icon-constructing-a-brick-wall' => 'constructing-a-brick-wall',
        'icon-construction-palette' => 'construction-palette',
        'icon-crane' => 'crane',
        'icon-crane-1' => 'crane-1',
        'icon-crane-truck' => 'crane-truck',
        'icon-derrick-facing-right' => 'derrick-facing-right',
        'icon-derrick-with-ball' => 'derrick-with-ball',
        'icon-derrick-with-box-1' => 'derrick-with-box-1',
        'icon-derrick-with-boxes' => 'derrick-with-boxes',
        'icon-derrick-with-load' => 'derrick-with-load',
        'icon-derrick-with-pallet' => 'derrick-with-pallet',
        'icon-derrick-with-tong' => 'derrick-with-tong',
        'icon-door-2' => 'door-2',
        'icon-doors-open' => 'doors-open',
        'icon-double-ladder' => 'double-ladder',
        'icon-drawing-compass' => 'drawing-compass',
        'icon-drill-1' => 'drill-1',
        'icon-electricity' => 'electricity',
        'icon-electric-tower' => 'electric-tower',
        'icon-electric-tower-1' => 'electric-tower-1',
        'icon-engineer' => 'engineer',
        'icon-eolic-energy' => 'eolic-energy',
        'icon-flash' => 'flash',
        'icon-flashlight' => 'flashlight',
        'icon-garbage-truck' => 'garbage-truck',
        'icon-garden-fence' => 'garden-fence',
        'icon-gas-pipe-7' => 'gas-pipe-7',
        'icon-hammer' => 'hammer',
        'icon-hammer-1' => 'hammer-1',
        'icon-hammer-and-nail' => 'hammer-and-nail',
        'icon-helmet' => 'helmet',
        'icon-home-key' => 'home-key',
        'icon-house-plan-1' => 'house-plan-1',
        'icon-house-plan-2' => 'house-plan-2',
        'icon-hydrant' => 'hydrant',
        'icon-inclined-magnet' => 'inclined-magnet',
        'icon-inclined-picker' => 'inclined-picker',
        'icon-inclined-shovel' => 'inclined-shovel',
        'icon-jackhammer' => 'jackhammer',
        'icon-knife' => 'knife',
        'icon-ladder' => 'ladder',
        'icon-ladder-1' => 'ladder-1',
        'icon-ladder-4' => 'ladder-4',
        'icon-light-bulb' => 'light-bulb',
        'icon-light-bulb-1' => 'light-bulb-1',
        'icon-light-bulb-2' => 'light-bulb-2',
        'icon-light-bulb-3' => 'light-bulb-3',
        'icon-light-bulb-6' => 'light-bulb-6',
        'icon-light-bulb-8' => 'light-bulb-8',
        'icon-light-bulb-9' => 'light-bulb-9',
        'icon-little-snowplow' => 'little-snowplow',
        'icon-loader' => 'loader',
        'icon-log-2' => 'log-2',
        'icon-man-painting' => 'man-painting',
        'icon-nail-gun' => 'nail-gun',
        'icon-nails' => 'nails',
        'icon-paint-brush' => 'paint-brush',
        'icon-paint-brush-1' => 'paint-brush-1',
        'icon-paint-brush-5' => 'paint-brush-5',
        'icon-paint-brush-9' => 'paint-brush-9',
        'icon-paint-brush-12' => 'paint-brush-12',
        'icon-paint-bucket' => 'paint-bucket',
        'icon-paint-roller-1' => 'paint-roller-1',
        'icon-pantone' => 'pantone',
        'icon-parquet' => 'parquet',
        'icon-pipe-8' => 'pipe-8',
        'icon-pipe-11' => 'pipe-11',
        'icon-plier-2' => 'plier-2',
        'icon-plier-4' => 'plier-4',
        'icon-plug-3' => 'plug-3',
        'icon-plug-4' => 'plug-4',
        'icon-plumbering' => 'plumbering',
        'icon-relief-valve-2' => 'relief-valve-2',
        'icon-road-barrier' => 'road-barrier',
        'icon-road-stopper' => 'road-stopper',
        'icon-roller-and-paint' => 'roller-and-paint',
        'icon-roof' => 'roof',
        'icon-ruler-1' => 'ruler-1',
        'icon-saw-1' => 'saw-1',
        'icon-saw-2' => 'saw-2',
        'icon-saw-3' => 'saw-3',
        'icon-screwdriver-1' => 'screwdriver-1',
        'icon-screwdriver-5' => 'screwdriver-5',
        'icon-screwdriver-3' => 'screwdriver-3',
        'icon-screws' => 'screws',
        'icon-set-square' => 'set-square',
        'icon-short-shovel' => 'short-shovel',
        'icon-socket-8' => 'socket-8',
        'icon-socket-16' => 'socket-16',
        'icon-socket-18' => 'socket-18',
        'icon-socket-19' => 'socket-19',
        'icon-spray-gun' => 'spray-gun',
        'icon-stairs-with-handle' => 'stairs-with-handle',
        'icon-stopcock' => 'stopcock',
        'icon-sweeping-broom' => 'sweeping-broom',
        'icon-swiss-army-knife-3' => 'swiss-army-knife-3',
        'icon-switch' => 'switch',
        'icon-tap' => 'tap',
        'icon-tap-1' => 'tap-1',
        'icon-tap-2' => 'tap-2',
        'icon-three-tools' => 'three-tools',
        'icon-tiles' => 'tiles',
        'icon-tool-bag' => 'tool-bag',
        'icon-toolbox' => 'toolbox',
        'icon-toolbox-1' => 'toolbox-1',
        'icon-tools' => 'tools',
        'icon-tools-1' => 'tools-1',
        'icon-tools-2' => 'tools-2',
        'icon-tools-3' => 'tools-3',
        'icon-trolley-truck' => 'trolley-truck',
        'icon-trolley-with-cargo' => 'trolley-with-cargo',
        'icon-trowel' => 'trowel',
        'icon-trowel-1' => 'trowel-1',
        'icon-trowel-2' => 'trowel-2',
        'icon-trowel-3' => 'trowel-3',
        'icon-trowel-4' => 'trowel-4',
        'icon-truck-with-crane' => 'truck-with-crane',
        'icon-truck-with-freight' => 'truck-with-freight',
        'icon-truck-with-load' => 'truck-with-load',
        'icon-two-screws' => 'two-screws',
        'icon-two-shovels' => 'two-shovels',
        'icon-vise-2' => 'vise-2',
        'icon-wallpaper' => 'wallpaper',
        'icon-wheelbarrow-1' => 'wheelbarrow-1',
        'icon-wheelbarrow' => 'wheelbarrow',
        'icon-window-1' => 'window-1',
        'icon-window-2' => 'window-2',
        'icon-wood-1' => 'wood-1',
        'icon-wood-saw' => 'wood-saw',
        'icon-wrench-2' => 'wrench-2',
        'icon-wrench-7' => 'wrench-7',
        'icon-drawing' => 'drawing',
        'icon-brick-wall4' => 'brick-wall4',
        'icon-vest' => 'vest',
        'icon-drill-2' => 'drill-2',
        'icon-brick-wall-2' => 'brick-wall-2',
        'icon-drawing-1' => 'drawing-1',
        'icon-cone' => 'cone',
        'icon-o-concrete-mixer' => 'o-concrete-mixer',
        'icon-o-cone' => 'o-cone',
        'icon-o-crane' => 'o-crane',
        'icon-o-crane-1' => 'o-crane-1',
        'icon-o-door-3' => 'o-door-3',
        'icon-o-drawing' => 'o-drawing',
        'icon-o-drawing-1' => 'o-drawing-1',
        'icon-o-drill-1' => 'o-drill-1',
        'icon-o-electricity' => 'o-electricity',
        'icon-o-engineer' => 'o-engineer',
        'icon-o-eolic-energy' => 'o-eolic-energy',
        'icon-o-flash' => 'o-flash',
        'icon-o-gas-pipe-3' => 'o-gas-pipe-3',
        'icon-o-gas-pipe-7' => 'o-gas-pipe-7',
        'icon-o-glass-wall' => 'o-glass-wall',
        'icon-o-hammer' => 'o-hammer',
        'icon-o-hammer-1' => 'o-hammer-1',
        'icon-o-hammer-3' => 'o-hammer-3',
        'icon-o-helmet' => 'o-helmet',
        'icon-o-hook' => 'o-hook',
        'icon-o-hydrant' => 'o-hydrant',
        'icon-o-jackhammer' => 'o-jackhammer',
        'icon-o-jigsaw' => 'o-jigsaw',
        'icon-o-ladder-2' => 'o-ladder-2',
        'icon-o-ladder-3' => 'o-ladder-3',
        'icon-o-light-bulb' => 'o-light-bulb',
        'icon-o-light-bulb-1' => 'o-light-bulb-1',
        'icon-o-light-bulb-8' => 'o-light-bulb-8',
        'icon-o-light-bulb-9' => 'o-light-bulb-9',
        'icon-o-loader' => 'o-loader',
        'icon-o-log-2' => 'o-log-2',
        'icon-o-nail-gun' => 'o-nail-gun',
        'icon-o-paint-brush-1' => 'o-paint-brush-1',
        'icon-o-paint-brush-2' => 'o-paint-brush-2',
        'icon-o-paint-brush-5' => 'o-paint-brush-5',
        'icon-o-paint-brush-9' => 'o-paint-brush-9',
        'icon-o-paint-roller' => 'o-paint-roller',
        'icon-o-paint-roller-1' => 'o-paint-roller-1',
        'icon-o-parquet' => 'o-parquet',
        'icon-o-parquet-1' => 'o-parquet-1',
        'icon-o-pipe-2' => 'o-pipe-2',
        'icon-o-pipe-3' => 'o-pipe-3',
        'icon-o-pipe-9' => 'o-pipe-9',
        'icon-o-pipe-11' => 'o-pipe-11',
        'icon-o-plier-1' => 'o-plier-1',
        'icon-o-plier-4' => 'o-plier-4',
        'icon-o-plug-3' => 'o-plug-3',
        'icon-o-plug-4' => 'o-plug-4',
        'icon-o-plumbering' => 'o-plumbering',
        'icon-o-rake' => 'o-rake',
        'icon-o-relief-valve-2' => 'o-relief-valve-2',
        'icon-o-roof' => 'o-roof',
        'icon-o-ruler-2' => 'o-ruler-2',
        'icon-o-ruler-4' => 'o-ruler-4',
        'icon-o-saw-1' => 'o-saw-1',
        'icon-o-saw-2' => 'o-saw-2',
        'icon-o-screwdriver-3' => 'o-screwdriver-3',
        'icon-o-screwdriver-5' => 'o-screwdriver-5',
        'icon-o-screws-1' => 'o-screws-1',
        'icon-o-shovel-2' => 'o-shovel-2',
        'icon-o-socket-8' => 'o-socket-8',
        'icon-o-socket-13' => 'o-socket-13',
        'icon-o-socket-18' => 'o-socket-18',
        'icon-o-socket-19' => 'o-socket-19',
        'icon-o-swiss-army-knife-3' => 'o-swiss-army-knife-3',
        'icon-o-tap-1' => 'o-tap-1',
        'icon-o-tiles' => 'o-tiles',
        'icon-o-tools-1' => 'o-tools-1',
        'icon-o-tools-2' => 'o-tools-2',
        'icon-o-trowel-4' => 'o-trowel-4',
        'icon-o-vest' => 'o-vest',
        'icon-o-vise' => 'o-vise',
        'icon-o-vise-3' => 'o-vise-3',
        'icon-o-voltmeter-2' => 'o-voltmeter-2',
        'icon-o-wallpaper' => 'o-wallpaper',
        'icon-o-wheelbarrow' => 'o-wheelbarrow',
        'icon-o-window' => 'o-window',
        'icon-o-window-1' => 'o-window-1',
        'icon-o-window-3' => 'o-window-3',
        'icon-o-wood-1' => 'o-wood-1',
        'icon-o-woodcutter' => 'o-woodcutter',
        'icon-o-wrench' => 'o-wrench',
        'icon-o-wrench-3' => 'o-wrench-3',
        'icon-o-wrench-4' => 'o-wrench-4',
        'icon-o-wrench-5' => 'o-wrench-5',
        'icon-o-wrench-6' => 'o-wrench-6',
        'icon-o-wrench-9' => 'o-wrench-9',
        'icon-o-allen-2' => 'o-allen-2',
        'icon-o-anvil' => 'o-anvil',
        'icon-o-axe' => 'o-axe',
        'icon-o-barrier' => 'o-barrier',
        'icon-o-brace' => 'o-brace',
        'icon-o-brick-wall-1' => 'o-brick-wall-1',
        'icon-o-brick-wall-2' => 'o-brick-wall-2',
        'icon-o-bucket' => 'o-bucket',
        'icon-o-chainsaw' => 'o-chainsaw',
    );
    $wp_customize->add_section(
        'appollo_page_entry_options',
        array(
            'title' => pll__('Page Entries Options'),
            'priority' => 110,
            'description' => pll__('Change page entries options here. To be able to change
            titles and descriptions refer to Language->String translations and change the key that
            identifies the block.'),
        )
    );

    $wp_customize->add_setting( 'page_entry_title', array(
        'default' => pll__("page-entry-title"),
    ));

    $wp_customize->add_control('page_entry_title', array(
        'label' => pll__('key: page-entry-title'),
        'section' => 'appollo_page_entry_options',
        'type' => 'hidden'
    ));

    $wp_customize->add_setting( 'page_entry_description', array(
        'default' => pll__("page-entry-description"),
    ));

    $wp_customize->add_control( 'page_entry_description', array(
        'label' => pll__('key: page-entry-description'),
        'section' => 'appollo_page_entry_options',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('first_page_icon', array(
        'default' => $icon_options,
    ));

    $wp_customize->add_control('first_page_icon', array(
        'label' => pll__('First page icon entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'select',
        'choices' => $icon_options,
    ));

    $wp_customize->add_setting('first_page_title', array(
        'default' => "",
    ));

    $wp_customize->add_control('first_page_title', array(
        'label' => pll__('First page entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'dropdown-pages',
    ));

    $wp_customize->add_setting('first_page_description', array(
        'default' => pll__("first-page-description"),
    ));

    $wp_customize->add_control('first_page_description', array(
        'label' => pll__('key: first-page-description'),
        'section' => 'appollo_page_entry_options',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('second_page_title', array(
        'default' => "second-page-title",
    ));

    $wp_customize->add_control('second_page_title', array(
        'label' => pll__('Second page entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'dropdown-pages',
    ));

    $wp_customize->add_setting('second_page_icon', array(
        'default' => "",
    ));

    $wp_customize->add_control('second_page_icon', array(
        'label' => pll__('Second page icon entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'select',
        'choices' => $icon_options,
    ));

    $wp_customize->add_setting('second_page_description', array(
        'default' => pll__("second-page-description"),
    ));

    $wp_customize->add_control('second_page_description', array(
        'label' => pll__('key: second-page-description'),
        'section' => 'appollo_page_entry_options',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('third_page_title', array(
        'default' => "",
    ));

    $wp_customize->add_control('third_page_title', array(
        'label' => pll__('Third page entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'dropdown-pages',
    ));

    $wp_customize->add_setting('third_page_icon', array(
        'default' => "",
    ));

    $wp_customize->add_control('third_page_icon', array(
        'label' => pll__('Third page icon entry'),
        'section' => 'appollo_page_entry_options',
        'type' => 'select',
        'choices' => $icon_options,
    ));

    $wp_customize->add_setting('third_page_description', array(
        'default' => pll__("third-page-description"),
    ));

    $wp_customize->add_control('third_page_description', array(
        'label' => pll__('key: third-page-description'),
        'section' => 'appollo_page_entry_options',
        'type' => 'hidden',
    ));
    //-- End of Page Entries Options

    //-- Start of Mini Slider Options
    $wp_customize->add_section(
        'appollo_mini_slider_options',
        array(
            'title' => pll__('Mini Slider Options'),
            'priority' => 120,
            'description' => pll__('Change mini slider options here. To be able to change
             titles and descriptions refer to Language->String translations 
             and change the key that identifies the block.'),
        )
    );

    $wp_customize->add_setting('mini_slider_title', array(
        'default' => pll__("mini-slider-title"),
    ));

    $wp_customize->add_control('mini_slider_title', array(
        'label' => pll__('key: mini-slider-title'),
        'section' => 'appollo_mini_slider_options',
        'type' => 'hidden'
    ));

    $wp_customize->add_setting(
        'mini_slide1_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide1_control',
        array(
            'label' => pll__('Mini Slide First Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide1_url',
            'priority' => 10,
        )
    ));

    $wp_customize->add_setting(
        'mini_slide2_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide2_control',
        array(
            'label' => pll__('Mini Slide Second Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide2_url',
            'priority' => 20,
        )
    ));

    $wp_customize->add_setting(
        'mini_slide3_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide3_control',
        array(
            'label' => pll__('Mini Slide Third Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide3_url',
            'priority' => 30,
        )
    ));

    $wp_customize->add_setting(
        'mini_slide4_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide4_control',
        array(
            'label' => pll__('Mini Slide Fourth Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide4_url',
            'priority' => 40,
        )
    ));

    $wp_customize->add_setting(
        'mini_slide5_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide5_control',
        array(
            'label' => pll__('Mini Slide Fifth Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide5_url',
            'priority' => 50,
        )
    ));

    $wp_customize->add_setting(
        'mini_slide6_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mini_slide6_control',
        array(
            'label' => pll__('Mini Slide Sixth Image'),
            'section' => 'appollo_mini_slider_options',
            'settings' => 'mini_slide6_url',
            'priority' => 60,
        )
    ));
    //-- End of Mini Slider Options

    //-- Start of Appollo Suit Demo Options
    $wp_customize->add_section(
        'appollo_demo_options',
        array(
            'title' => pll__('Appollo Demo Options'),
            'priority' => 130,
            'description' => pll__('Change appollo demo options here. To be able to change
             titles and descriptions refer to Language->String translations 
             and change the key that identifies the block.'),
        )
    );

    $wp_customize->add_setting('demo_options_title', array(
        'default' => pll__("demo-options-title"),
    ));

    $wp_customize->add_control('demo_options_title', array(
        'label' => pll__('key: demo-options-title'),
        'section' => 'appollo_demo_options',
        'type' => 'hidden'
    ));

    $wp_customize->add_setting('demo_options_description', array(
        'default' => pll__("demo-options-description"),
    ));

    $wp_customize->add_control('demo_options_description', array(
        'label' => pll__('key: demo-options-description'),
        'section' => 'appollo_demo_options',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting(
        'demo_options_image_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'demo_options_image_control',
        array(
            'label' => pll__('Demo Options Image'),
            'section' => 'appollo_demo_options',
            'settings' => 'demo_options_image_url',
            'priority' => 60,
        )
    ));
    //-- End of Appollo Suit Demo Options

    //-- Start of Customers section options
    $wp_customize->add_section(
        'appollo_customers_options',
        array(
            'title' => pll__('Customers Options'),
            'priority' => 140,
            'description' => pll__('Change appollo customer options here.'),
        )
    );

    $wp_customize->add_setting(
        'customers_options_image_url',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'customers_options_image_control',
        array(
            'label' => pll__('Customers Options Image'),
            'section' => 'appollo_customers_options',
            'settings' => 'customers_options_image_url',
            'priority' => 60,
        )
    ));
    //-- End of Customers section options

    //-- Start Contact Form options
    $wp_customize->add_section(
        'appollo_contact_form_options',
        array(
            'title' => pll__('Contact Form Options'),
            'priority' => 150,
            'description' => pll__('Change appollo customer options here.'),
        )
    );

    $wp_customize->add_setting(
        'contact_form_options_email',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control('contact_form_options_email', array(
        'label' => pll__('Enter contact form destination email address.'),
        'section' => 'appollo_contact_form_options',
        'type' => 'email',
    ));
    //-- End of Contact Form options

}

function register_appollo_menus()
{
    register_nav_menus(
        array(
            'header-menu' => pll__('Header Menu'),
        )
    );
}
