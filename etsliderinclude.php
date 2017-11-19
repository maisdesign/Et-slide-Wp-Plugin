<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 19/11/2017
 * Time: 19:33
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}
    $my_options = get_option( 'APF_CreatePageGroup' );
        var_dump($my_options);
    $_oUtil = new AdminPageFramework_WPUtility;
    $value = $_oUtil->getElement(
        $my_options,    // (required) subject array
            array( 'et_taps_number', 'et_text_testing' ),   // (required) dimensional path
                'My Default Value Here' // (optional) set your default value in case a value is not set
    );
    echo $value;
?>