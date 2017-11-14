<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/et-tap-list-slider>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class EtTapListSlider_AdminPageFramework_FieldType_default extends EtTapListSlider_AdminPageFramework_FieldType {
    public $aDefaultKeys = array();
    public function _replyToGetField($aField) {
        return $aField['before_label'] . "<div class='et-tap-list-slider-input-label-container'>" . "<label for='{$aField['input_id']}'>" . $aField['before_input'] . ($aField['label'] && !$aField['repeatable'] ? "<span " . $this->getLabelContainerAttributes($aField, 'et-tap-list-slider-input-label-string') . ">" . $aField['label'] . "</span>" : "") . $aField['value'] . $aField['after_input'] . "</label>" . "</div>" . $aField['after_label'];
    }
}
