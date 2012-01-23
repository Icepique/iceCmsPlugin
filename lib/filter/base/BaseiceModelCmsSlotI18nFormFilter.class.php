<?php

/**
 * iceModelCmsSlotI18n filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsSlotI18nFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'contents' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'contents' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_cms_slot_i18n_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsSlotI18n';
  }

  public function getFields()
  {
    return array(
      'id'       => 'ForeignKey',
      'contents' => 'Text',
      'culture'  => 'Text',
    );
  }
}
