<?php

require_once dirname(__FILE__).'/../lib/iceCmsPageModuleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/iceCmsPageModuleGeneratorHelper.class.php';

/**
 * iceCmsPageModule actions.
 *
 * @subpackage iceCmsPageModule
 * @author     Icepique Inc.
 */
class iceCmsPageModuleActions extends autoIceCmsPageModuleActions
{
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter('ice_model_cms_page'));

    $c = new Criteria();
    $c->add(iceModelCmsPagePeer::TREE_SCOPE, 1);
    $c->addJoin(iceModelCmsPagePeer::ID, iceModelCmsPageI18nPeer::ID, Criteria::RIGHT_JOIN);
    $c->add(iceModelCmsPageI18nPeer::SLUG, $form->getValue('page'));
    $c->add(iceModelCmsPageI18nPeer::CULTURE, $this->getUser()->getCulture());
    $page = iceModelCmsPagePeer::doSelectOne($c);

    if ($form->getObject()->isNew() && $page)
    {
      if ($form->getValue('position') == 'after' && !$page->isRoot())
      {
        $form->getObject()->insertAsNextSiblingOf($page);
      }
      else
      {
        $form->getObject()->insertAsLastChildOf($page);
      }
    }

    parent::processForm($request, $form);
  }

  protected function buildCriteria()
  {
    $c = parent::buildCriteria();
    $c->setDistinct();
    $c->add(iceModelCmsPagePeer::TREE_SCOPE, 1);
    $c->addJoin(iceModelCmsPagePeer::ID, iceModelCmsPageI18nPeer::ID, Criteria::RIGHT_JOIN);
    $c->addAscendingOrderByColumn(iceModelCmsPagePeer::TREE_LEFT);

    return $c;
  }
}
