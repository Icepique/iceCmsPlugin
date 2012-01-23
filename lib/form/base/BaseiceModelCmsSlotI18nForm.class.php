<?php

/**
 * iceModelCmsSlotI18n form base class.
 *
 * @method iceModelCmsSlotI18n getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsSlotI18nForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'contents' => new sfWidgetFormTextarea(),
      'culture'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'iceModelCmsSlot', 'column' => 'id', 'required' => false)),
      'contents' => new sfValidatorString(array('required' => false)),
      'culture'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_cms_slot_i18n[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsSlotI18n';
  }


}
