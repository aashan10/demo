<?php

/**
 * Fields Summary:
 * - name [input]
 * - netAmount [numeric]
 * - pricingRuleId [numeric]
 * - amount [numeric]
 */

return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'OrderPriceModifications',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Order Details',
   'layoutDefinitions' =>
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' =>
    array (
      0 =>
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => '',
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' =>
        array (
          0 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'name',
             'title' => 'Name',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 300,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'name' => 'netAmount',
             'title' => 'NetAmount',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'numeric',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 300,
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => 19,
             'decimalPrecision' => 4,
             'defaultValueGenerator' => '',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'name' => 'pricingRuleId',
             'title' => 'Applied pricing rule ID',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => NULL,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'numeric',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => NULL,
             'defaultValue' => NULL,
             'integer' => true,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'defaultValueGenerator' => '',
          )),
          3 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'name' => 'amount',
             'title' => 'Amount',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'numeric',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 300,
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => 19,
             'decimalPrecision' => 4,
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' =>
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => '',
         'border' => false,
         'icon' => NULL,
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' =>
  array (
  ),
));
