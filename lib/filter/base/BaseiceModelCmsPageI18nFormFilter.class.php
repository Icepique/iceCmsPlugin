<?php

/**
 * iceModelCmsPageI18n filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsPageI18nFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contents'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meta_description' => new sfWidgetFormFilterInput(),
      'meta_keywords'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'             => new sfValidatorPass(array('required' => false)),
      'slug'             => new sfValidatorPass(array('required' => false)),
      'contents'         => new sfValidatorPass(array('required' => false)),
      'meta_description' => new sfValidatorPass(array('required' => false)),
      'meta_keywords'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_cms_page_i18n_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsPageI18n';
  }

  public function getFields()
  {
    return array(
      'id'               => 'ForeignKey',
      'name'             => 'Text',
      'slug'             => 'Text',
      'contents'         => 'Text',
      'meta_description' => 'Text',
      'meta_keywords'    => 'Text',
      'culture'          => 'Text',
    );
  }
}
