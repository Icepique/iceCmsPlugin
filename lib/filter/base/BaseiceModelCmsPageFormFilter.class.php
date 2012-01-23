<?php

/**
 * iceModelCmsPage filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsPageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tree_left'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tree_right'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tree_scope'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_published' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'tree_left'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_right'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_scope'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_published' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_cms_page_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsPage';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'tree_left'    => 'Number',
      'tree_right'   => 'Number',
      'tree_scope'   => 'Number',
      'is_published' => 'Boolean',
      'updated_at'   => 'Date',
      'created_at'   => 'Date',
    );
  }
}
