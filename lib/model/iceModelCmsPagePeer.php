<?php

require 'plugins/iceCmsPlugin/lib/model/om/BaseiceModelCmsPageNestedSetPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'cms_page' table.
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model
 */
class iceModelCmsPagePeer extends BaseiceModelCmsPageNestedSetPeer
{
  public static function retrievePublicBySlug($slug, $culture = null, $con = null)
  {
    $c = new Criteria();
    $c->addJoin(iceModelCmsPagePeer::ID, iceModelCmsPageI18nPeer::ID, Criteria::RIGHT_JOIN);
    $c->add(iceModelCmsPageI18nPeer::SLUG, $slug);

    return self::doSelectOne($c, $con);
  }

  public static function retrieveBySlug($slug, $culture = null, $con = null)
  {
    $c = new Criteria();
    $c->addJoin(iceModelCmsPagePeer::ID, iceModelCmsPageI18nPeer::ID, Criteria::RIGHT_JOIN);
    $c->add(iceModelCmsPageI18nPeer::SLUG, $slug);

    return self::doSelectOne($c, $con);
  }

  public static function doSelectPublished(Criteria $criteria, $con = null)
  {
    $c = clone $criteria;
    $c->add(self::IS_PUBLISHED, true);

    return self::doSelect($c, $con);
  }

  public static function getAllPagesWithLevel($scope = 1, $indent_string = ' — ')
  {
    $page_names = array();
    $level = 0;
    $previous = null;

    $pages = self::getAllOrderByTree($scope);
    foreach ($pages as $page)
    {
      $level = $page->getLevel();

      $previous = $page;
      $page_names[$page->getSlug()] = str_repeat($indent_string, $level) . $page->getSlug();
    }

    return $page_names;
  }

  public static function getAllOrderByTree($scope = 1, $con = null)
  {
    $c = new Criteria();
    $c->add(self::TREE_SCOPE, $scope);
    $c->addAscendingOrderByColumn(self::TREE_LEFT);

    return self::doSelect($c, $con);
  }
}
