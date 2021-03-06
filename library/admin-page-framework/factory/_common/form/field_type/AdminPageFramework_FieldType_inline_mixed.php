<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/et-tap-list-slider>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class EtTapListSlider_AdminPageFramework_FieldType__nested extends EtTapListSlider_AdminPageFramework_FieldType {
    public $aFieldTypeSlugs = array('_nested');
    protected $aDefaultKeys = array();
    protected function getStyles() {
        return ".et-tap-list-slider-fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field.with-nested-fields > .et-tap-list-slider-fieldset.multiple-nesting {margin-left: 2em;}.et-tap-list-slider-fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field.with-nested-fields > .et-tap-list-slider-fieldset {margin-bottom: 1em;}.with-nested-fields > .et-tap-list-slider-fieldset.child-fieldset > .et-tap-list-slider-child-field-title {display: inline-block;padding: 0 0 0.4em 0;}.et-tap-list-slider-fieldset.child-fieldset > label.et-tap-list-slider-child-field-title {display: table-row; white-space: nowrap;}";
    }
    protected function getField($aField) {
        $_oCallerForm = $aField['_caller_object'];
        $_aInlineMixedOutput = array();
        foreach ($this->getAsArray($aField['content']) as $_aChildFieldset) {
            if (is_scalar($_aChildFieldset)) {
                continue;
            }
            if (!$this->isNormalPlacement($_aChildFieldset)) {
                continue;
            }
            $_aChildFieldset = $this->getFieldsetReformattedBySubFieldIndex($_aChildFieldset, ( integer )$aField['_index'], $aField['_is_multiple_fields'], $aField);
            $_oFieldset = new EtTapListSlider_AdminPageFramework_Form_View___Fieldset($_aChildFieldset, $_oCallerForm->aSavedData, $_oCallerForm->getFieldErrors(), $_oCallerForm->aFieldTypeDefinitions, $_oCallerForm->oMsg, $_oCallerForm->aCallbacks);
            $_aInlineMixedOutput[] = $_oFieldset->get();
        }
        return implode('', $_aInlineMixedOutput);
    }
}
class EtTapListSlider_AdminPageFramework_FieldType_inline_mixed extends EtTapListSlider_AdminPageFramework_FieldType__nested {
    public $aFieldTypeSlugs = array('inline_mixed');
    protected $aDefaultKeys = array('label_min_width' => '', 'show_debug_info' => false,);
    protected function getStyles() {
        return ".et-tap-list-slider-field-inline_mixed {width: 98%;}.et-tap-list-slider-field-inline_mixed > fieldset {display: inline-block;overflow-x: visible;padding-right: 0.4em;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields{display: inline;width: auto;table-layout: auto;margin: 0;padding: 0;vertical-align: middle;white-space: nowrap;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field {float: none;clear: none;width: 100%;display: inline-block;margin-right: auto;vertical-align: middle; }.with-mixed-fields > fieldset > label {width: auto;padding: 0;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field .et-tap-list-slider-input-label-string {padding: 0;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > .et-tap-list-slider-input-label-container,.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > * > .et-tap-list-slider-input-label-container{padding: 0;display: inline-block;width: 100%;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > .et-tap-list-slider-input-label-container > label,.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > * > .et-tap-list-slider-input-label-container > label{display: inline-block;}.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > .et-tap-list-slider-input-label-container > label > input,.et-tap-list-slider-field-inline_mixed > fieldset > .et-tap-list-slider-fields > .et-tap-list-slider-field > * > .et-tap-list-slider-input-label-container > label > input{display: inline-block;min-width: 100%;margin-right: auto;margin-left: auto;}.et-tap-list-slider-field-inline_mixed .et-tap-list-slider-input-label-container,.et-tap-list-slider-field-inline_mixed .et-tap-list-slider-input-label-string{min-width: 0;}";
    }
}
