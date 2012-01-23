<?php

/**
 * iceModelCmsPage form base class.
 *
 * @method iceModelCmsPage getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsPageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'tree_left'    => new sfWidgetFormInputText(),
      'tree_right'   => new sfWidgetFormInputText(),
      'tree_scope'   => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tree_left'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tree_right'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tree_scope'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_cms_page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsPage';
  }

  public function getI18nModelName()
  {
    return 'iceModelCmsPageI18n';
  }

  public function getI18nFormClass()
  {
    return 'iceModelCmsPageI18nForm';
  }

}
