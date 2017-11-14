<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 12/11/2017
 * Time: 19:45
 * Plugin Name: Etimuè Sliding Tap List
 */
include( dirname( __FILE__ ) . '/library/admin-page-framework/admin-page-framework.php' );

if ( ! class_exists( 'EtTapListSlider_AdminPageFramework' ) ) {

    return;

};
// Extend the class
class APF_CreatePageGroup extends AdminPageFramework {

    // Define the setUp() method to set how many pages, page titles and icons etc.
    public function setUp() {

        // Create the root menu
        $this->setRootMenuPage(
            'Tap List Slider',    // specify the name of the page group
            dirname( __FILE__ ) . '/library/icon/beer.png'    // use 16 by 16 image for the menu icon.
        );

        // Add the sub menus and the pages.
        // The third parameter accepts screen icon url that appears at the top of the page.
        $this->addSubMenuItems(
            array(
                'title' => 'Taps',        // page title
                'page_slug' => 'et_taps',    // page slug
                'screen_icon' => 'https://lh5.googleusercontent.com/-vr0hu0pHcYo/UilDa_OwGYI/AAAAAAAABRg/29eid1MIBW0/s800/demo03_01_32x32.png'     // page screen icon for WP 3.7.x or below
            ),
            array(
                'title' => 'Beers Description',        // page title
                'page_slug' => 'et_beer_description',    // page slug
                'screen_icon' => 'https://lh5.googleusercontent.com/-vr0hu0pHcYo/UilDa_OwGYI/AAAAAAAABRg/29eid1MIBW0/s800/demo03_01_32x32.png'     // page screen icon for WP 3.7.x or below
            ),
            array(
                'title' => 'Style',        // page title
                'page_slug' => 'et_style',    // page slug
                'screen_icon' => 'https://lh5.googleusercontent.com/-vr0hu0pHcYo/UilDa_OwGYI/AAAAAAAABRg/29eid1MIBW0/s800/demo03_01_32x32.png'     // page screen icon for WP 3.7.x or below
            ),
            array(
                'title'    =>    __( 'Documentation', 'admin-page-framework-demo' ),
                'href'    =>    'http://admin-page-framework.michaeluno.jp/en/v3/',
                'show_page_heading_tab'    =>    true,
            )
        );
        // You can add more pages as many as you want!

    }

    // Action hook methods: 'do_' + page slug.
    public function do_et_taps() {
        ?>
        <h3>Taps</h3>
        <p>Here you'll be able to choose how many beers you have on tap.</p>
        <p>Use the slider and write down a small description of the beers.</p>
        <blockquote>Example: Falesia - Bock - 7.0%</blockquote>
        <?php
    }
    public function do_et_beer_description() {
        ?>
        <h3>Long description</h3>
        <p>This is the place where you'll be able to add the long description of your beers.</p>
        <blockquote>Example: Falesia is a Bock style beer made in Italy by Lariano Brewery. It has this flavour, that taste and this aftertaste.</blockquote>
        <?php
    }
    public function do_et_style() {
        ?>
        <h3>Style it up</h3>
        <p>Everybody would like to have a stylish slide, am i right?</p>
        <?php
    }

    /**
     * Let's try using methods for filters. For filters, the method must return the output.
     * The method name is content_ + page slug, similar to the above methods for action hooks.
     */
    public function content_et_taps( $sContent ) {
        return $sContent . '<h3>Filter Hook Method</h3><p>This is the first page from the filter! ( content_ + pageslug )</p>';
        array(
            'field_id'          => 'number',
            'title'             => __( 'Number', 'admin-page-framework-loader' ),
            'type'              => 'number',
        );
    }
    public function content_et_beer_description( $sContent ) {
        return $sContent . '<h3>Filter Hook Method</h3><p>This is the second page from the filter! ( content_ + pageslug )</p>';
    }
    public function content_et_style( $sContent ) {
        return $sContent . '<h3>Filter Hook Method</h3><p>This is the third page from the filter! ( content_ + pageslug )</p>';
    }

    public function load_et_taps( $oAdminPage ) {

        $this->addSettingSections(
            array(
                'section_id'    => 'et_taps_number',
                'page_slug'     => 'et_taps',
            )
        );

        $this->addSettingFields(
            array(
                'field_id'      => 'number',
                'section_id'    => 'et_taps_number',
                'title'         => 'Number of taps',
                'type'          => 'number',
            ),
            /**
             * Da cancellare finiti i test
             */
            array(
                'field_id'          => 'et_text_testing',
                'title'             => __( 'Text', 'admin-page-framework-loader' ),
                'type'              => 'text',
                'default'           => '1',
                'attributes'        => array(
                    'size' => 40,
                    'placeholder' => __( 'Type something here.', 'admin-page-framework-loader' ),
                ),
            ),
            /**
             * Fine della parte da cancellare finiti i test
             */
            array(
                'field_id'      => 'submit',
                'type'          => 'submit',
            )
        );

    }
    // There are more available filters and actions! Please refer to Demo 06 - Hooks.
}

// Instantiate the class object.

new APF_CreatePageGroup;


// That's it!! See, it's very short and easy, huh?


?>




