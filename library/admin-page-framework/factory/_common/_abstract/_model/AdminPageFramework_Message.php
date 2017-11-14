<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/et-tap-list-slider>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class EtTapListSlider_AdminPageFramework_Message {
    public $aMessages = array();
    public $aDefaults = array('option_updated' => 'The options have been updated.', 'option_cleared' => 'The options have been cleared.', 'export' => 'Export', 'export_options' => 'Export Options', 'import_options' => 'Import', 'import_options' => 'Import Options', 'submit' => 'Submit', 'import_error' => 'An error occurred while uploading the import file.', 'uploaded_file_type_not_supported' => 'The uploaded file type is not supported: %1$s', 'could_not_load_importing_data' => 'Could not load the importing data.', 'imported_data' => 'The uploaded file has been imported.', 'not_imported_data' => 'No data could be imported.', 'upload_image' => 'Upload Image', 'use_this_image' => 'Use This Image', 'insert_from_url' => 'Insert from URL', 'reset_options' => 'Are you sure you want to reset the options?', 'confirm_perform_task' => 'Please confirm your action.', 'specified_option_been_deleted' => 'The specified options have been deleted.', 'nonce_verification_failed' => 'A problem occurred while processing the form data. Please try again.', 'check_max_input_vars' => 'Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'send_email' => 'Is it okay to send the email?', 'email_sent' => 'The email has been sent.', 'email_scheduled' => 'The email has been scheduled.', 'email_could_not_send' => 'There was a problem sending the email', 'title' => 'Title', 'author' => 'Author', 'categories' => 'Categories', 'tags' => 'Tags', 'comments' => 'Comments', 'date' => 'Date', 'show_all' => 'Show All', 'show_all_authors' => 'Show all Authors', 'powered_by' => 'Thank you for creating with', 'and' => 'and', 'settings' => 'Settings', 'manage' => 'Manage', 'select_image' => 'Select Image', 'upload_file' => 'Upload File', 'use_this_file' => 'Use This File', 'select_file' => 'Select File', 'remove_value' => 'Remove Value', 'select_all' => 'Select All', 'select_none' => 'Select None', 'no_term_found' => 'No term found.', 'select' => 'Select', 'insert' => 'Insert', 'use_this' => 'Use This', 'return_to_library' => 'Return to Library', 'queries_in_seconds' => '%1$s queries in %2$s seconds.', 'out_of_x_memory_used' => '%1$s out of %2$s MB (%3$s) memory used.', 'peak_memory_usage' => 'Peak memory usage %1$s MB.', 'initial_memory_usage' => 'Initial memory usage  %1$s MB.', 'repeatable_section_is_disabled' => 'The ability to repeat sections is disabled.', 'repeatable_field_is_disabled' => 'The ability to repeat fields is disabled.', 'warning_caption' => 'Warning', 'allowed_maximum_number_of_fields' => 'The allowed maximum number of fields is {0}.', 'allowed_minimum_number_of_fields' => 'The allowed minimum number of fields is {0}.', 'add' => 'Add', 'remove' => 'Remove', 'allowed_maximum_number_of_sections' => 'The allowed maximum number of sections is {0}', 'allowed_minimum_number_of_sections' => 'The allowed minimum number of sections is {0}', 'add_section' => 'Add Section', 'remove_section' => 'Remove Section', 'toggle_all' => 'Toggle All', 'toggle_all_collapsible_sections' => 'Toggle all collapsible sections', 'reset' => 'Reset', 'yes' => 'Yes', 'no' => 'No', 'on' => 'On', 'off' => 'Off', 'enabled' => 'Enabled', 'disabled' => 'Disabled', 'supported' => 'Supported', 'not_supported' => 'Not Supported', 'functional' => 'Functional', 'not_functional' => 'Not Functional', 'too_long' => 'Too Long', 'acceptable' => 'Acceptable', 'no_log_found' => 'No log found.', 'method_called_too_early' => 'The method is called too early.', 'debug_info' => 'Debug Info', 'debug' => 'Debug', 'field_arguments' => 'Field Arguments', 'debug_info_will_be_disabled' => 'This information will be disabled when <code>WP_DEBUG</code> is set to <code>false</code> in <code>wp-config.php</code>.', 'section_arguments' => 'Section Arguments', 'click_to_expand' => 'Click here to expand to view the contents.', 'click_to_collapse' => 'Click here to collapse the contents.', 'loading' => 'Loading...', 'please_enable_javascript' => 'Please enable JavaScript for better user experience.',);
    protected $_sTextDomain = 'et-tap-list-slider';
    static private $_aInstancesByTextDomain = array();
    public static function getInstance($sTextDomain = 'et-tap-list-slider') {
        $_oInstance = isset(self::$_aInstancesByTextDomain[$sTextDomain]) && (self::$_aInstancesByTextDomain[$sTextDomain] instanceof EtTapListSlider_AdminPageFramework_Message) ? self::$_aInstancesByTextDomain[$sTextDomain] : new EtTapListSlider_AdminPageFramework_Message($sTextDomain);
        self::$_aInstancesByTextDomain[$sTextDomain] = $_oInstance;
        return self::$_aInstancesByTextDomain[$sTextDomain];
    }
    public static function instantiate($sTextDomain = 'et-tap-list-slider') {
        return self::getInstance($sTextDomain);
    }
    public function __construct($sTextDomain = 'et-tap-list-slider') {
        $this->_sTextDomain = $sTextDomain;
        $this->aMessages = array_fill_keys(array_keys($this->aDefaults), null);
    }
    public function getTextDomain() {
        return $this->_sTextDomain;
    }
    public function set($sKey, $sValue) {
        $this->aMessages[$sKey] = $sValue;
    }
    public function get($sKey = '') {
        if (!$sKey) {
            return $this->_getAllMessages();
        }
        return isset($this->aMessages[$sKey]) ? __($this->aMessages[$sKey], $this->_sTextDomain) : __($this->{$sKey}, $this->_sTextDomain);
    }
    private function _getAllMessages() {
        $_aMessages = array();
        foreach ($this->aMessages as $_sLabel => $_sTranslation) {
            $_aMessages[$_sLabel] = $this->get($_sLabel);
        }
        return $_aMessages;
    }
    public function output($sKey) {
        echo $this->get($sKey);
    }
    public function __($sKey) {
        return $this->get($sKey);
    }
    public function _e($sKey) {
        $this->output($sKey);
    }
    public function __get($sPropertyName) {
        return isset($this->aDefaults[$sPropertyName]) ? $this->aDefaults[$sPropertyName] : $sPropertyName;
    }
    private function __doDummy() {
        __('The options have been updated.', 'et-tap-list-slider');
        __('The options have been cleared.', 'et-tap-list-slider');
        __('Export', 'et-tap-list-slider');
        __('Export Options', 'et-tap-list-slider');
        __('Import', 'et-tap-list-slider');
        __('Import Options', 'et-tap-list-slider');
        __('Submit', 'et-tap-list-slider');
        __('An error occurred while uploading the import file.', 'et-tap-list-slider');
        __('The uploaded file type is not supported: %1$s', 'et-tap-list-slider');
        __('Could not load the importing data.', 'et-tap-list-slider');
        __('The uploaded file has been imported.', 'et-tap-list-slider');
        __('No data could be imported.', 'et-tap-list-slider');
        __('Upload Image', 'et-tap-list-slider');
        __('Use This Image', 'et-tap-list-slider');
        __('Insert from URL', 'et-tap-list-slider');
        __('Are you sure you want to reset the options?', 'et-tap-list-slider');
        __('Please confirm your action.', 'et-tap-list-slider');
        __('The specified options have been deleted.', 'et-tap-list-slider');
        __('A problem occurred while processing the form data. Please try again.', 'et-tap-list-slider');
        __('Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'et-tap-list-slider');
        __('Is it okay to send the email?', 'et-tap-list-slider');
        __('The email has been sent.', 'et-tap-list-slider');
        __('The email has been scheduled.', 'et-tap-list-slider');
        __('There was a problem sending the email', 'et-tap-list-slider');
        __('Title', 'et-tap-list-slider');
        __('Author', 'et-tap-list-slider');
        __('Categories', 'et-tap-list-slider');
        __('Tags', 'et-tap-list-slider');
        __('Comments', 'et-tap-list-slider');
        __('Date', 'et-tap-list-slider');
        __('Show All', 'et-tap-list-slider');
        __('Show All Authors', 'et-tap-list-slider');
        __('Thank you for creating with', 'et-tap-list-slider');
        __('and', 'et-tap-list-slider');
        __('Settings', 'et-tap-list-slider');
        __('Manage', 'et-tap-list-slider');
        __('Select Image', 'et-tap-list-slider');
        __('Upload File', 'et-tap-list-slider');
        __('Use This File', 'et-tap-list-slider');
        __('Select File', 'et-tap-list-slider');
        __('Remove Value', 'et-tap-list-slider');
        __('Select All', 'et-tap-list-slider');
        __('Select None', 'et-tap-list-slider');
        __('No term found.', 'et-tap-list-slider');
        __('Select', 'et-tap-list-slider');
        __('Insert', 'et-tap-list-slider');
        __('Use This', 'et-tap-list-slider');
        __('Return to Library', 'et-tap-list-slider');
        __('%1$s queries in %2$s seconds.', 'et-tap-list-slider');
        __('%1$s out of %2$s MB (%3$s) memory used.', 'et-tap-list-slider');
        __('Peak memory usage %1$s MB.', 'et-tap-list-slider');
        __('Initial memory usage  %1$s MB.', 'et-tap-list-slider');
        __('The allowed maximum number of fields is {0}.', 'et-tap-list-slider');
        __('The allowed minimum number of fields is {0}.', 'et-tap-list-slider');
        __('Add', 'et-tap-list-slider');
        __('Remove', 'et-tap-list-slider');
        __('The allowed maximum number of sections is {0}', 'et-tap-list-slider');
        __('The allowed minimum number of sections is {0}', 'et-tap-list-slider');
        __('Add Section', 'et-tap-list-slider');
        __('Remove Section', 'et-tap-list-slider');
        __('Toggle All', 'et-tap-list-slider');
        __('Toggle all collapsible sections', 'et-tap-list-slider');
        __('Reset', 'et-tap-list-slider');
        __('Yes', 'et-tap-list-slider');
        __('No', 'et-tap-list-slider');
        __('On', 'et-tap-list-slider');
        __('Off', 'et-tap-list-slider');
        __('Enabled', 'et-tap-list-slider');
        __('Disabled', 'et-tap-list-slider');
        __('Supported', 'et-tap-list-slider');
        __('Not Supported', 'et-tap-list-slider');
        __('Functional', 'et-tap-list-slider');
        __('Not Functional', 'et-tap-list-slider');
        __('Too Long', 'et-tap-list-slider');
        __('Acceptable', 'et-tap-list-slider');
        __('No log found.', 'et-tap-list-slider');
        __('The method is called too early: %1$s', 'et-tap-list-slider');
        __('Debug Info', 'et-tap-list-slider');
        __('Click here to expand to view the contents.', 'et-tap-list-slider');
        __('Click here to collapse the contents.', 'et-tap-list-slider');
        __('Loading...', 'et-tap-list-slider');
        __('Please enable JavaScript for better user experience.', 'et-tap-list-slider');
        __('Debug', 'et-tap-list-slider');
        __('Field Arguments', 'et-tap-list-slider');
        __('This information will be disabled when <code>WP_DEBUG</code> is set to <code>false</code> in <code>wp-config.php</code>.', 'et-tap-list-slider');
        __('Section Arguments', 'et-tap-list-slider');
        __('The ability to repeat sections is disabled.', 'et-tap-list-slider');
        __('The ability to repeat fields is disabled.', 'et-tap-list-slider');
        __('Warning.', 'et-tap-list-slider');
    }
}