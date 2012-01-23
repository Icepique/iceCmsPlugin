<?php


/**
 * Base class that represents a query for the 'cms_page' table.
 *
 * 
 *
 * @method     iceModelCmsPageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelCmsPageQuery orderByTreeLeft($order = Criteria::ASC) Order by the tree_left column
 * @method     iceModelCmsPageQuery orderByTreeRight($order = Criteria::ASC) Order by the tree_right column
 * @method     iceModelCmsPageQuery orderByTreeScope($order = Criteria::ASC) Order by the tree_scope column
 * @method     iceModelCmsPageQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method     iceModelCmsPageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelCmsPageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelCmsPageQuery groupById() Group by the id column
 * @method     iceModelCmsPageQuery groupByTreeLeft() Group by the tree_left column
 * @method     iceModelCmsPageQuery groupByTreeRight() Group by the tree_right column
 * @method     iceModelCmsPageQuery groupByTreeScope() Group by the tree_scope column
 * @method     iceModelCmsPageQuery groupByIsPublished() Group by the is_published column
 * @method     iceModelCmsPageQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelCmsPageQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelCmsPageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelCmsPageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelCmsPageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelCmsPageQuery leftJoiniceModelCmsPageI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelCmsPageI18n relation
 * @method     iceModelCmsPageQuery rightJoiniceModelCmsPageI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelCmsPageI18n relation
 * @method     iceModelCmsPageQuery innerJoiniceModelCmsPageI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelCmsPageI18n relation
 *
 * @method     iceModelCmsPage findOne(PropelPDO $con = null) Return the first iceModelCmsPage matching the query
 * @method     iceModelCmsPage findOneOrCreate(PropelPDO $con = null) Return the first iceModelCmsPage matching the query, or a new iceModelCmsPage object populated from the query conditions when no match is found
 *
 * @method     iceModelCmsPage findOneById(int $id) Return the first iceModelCmsPage filtered by the id column
 * @method     iceModelCmsPage findOneByTreeLeft(int $tree_left) Return the first iceModelCmsPage filtered by the tree_left column
 * @method     iceModelCmsPage findOneByTreeRight(int $tree_right) Return the first iceModelCmsPage filtered by the tree_right column
 * @method     iceModelCmsPage findOneByTreeScope(int $tree_scope) Return the first iceModelCmsPage filtered by the tree_scope column
 * @method     iceModelCmsPage findOneByIsPublished(boolean $is_published) Return the first iceModelCmsPage filtered by the is_published column
 * @method     iceModelCmsPage findOneByUpdatedAt(string $updated_at) Return the first iceModelCmsPage filtered by the updated_at column
 * @method     iceModelCmsPage findOneByCreatedAt(string $created_at) Return the first iceModelCmsPage filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelCmsPage objects filtered by the id column
 * @method     array findByTreeLeft(int $tree_left) Return iceModelCmsPage objects filtered by the tree_left column
 * @method     array findByTreeRight(int $tree_right) Return iceModelCmsPage objects filtered by the tree_right column
 * @method     array findByTreeScope(int $tree_scope) Return iceModelCmsPage objects filtered by the tree_scope column
 * @method     array findByIsPublished(boolean $is_published) Return iceModelCmsPage objects filtered by the is_published column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelCmsPage objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelCmsPage objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsPageQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelCmsPageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelCmsPage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelCmsPageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelCmsPageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelCmsPageQuery) {
            return $criteria;
        }
        $query = new iceModelCmsPageQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelCmsPage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelCmsPagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelCmsPagePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelCmsPagePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the tree_left column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLeft(1234); // WHERE tree_left = 1234
     * $query->filterByTreeLeft(array(12, 34)); // WHERE tree_left IN (12, 34)
     * $query->filterByTreeLeft(array('min' => 12)); // WHERE tree_left > 12
     * </code>
     *
     * @param     mixed $treeLeft The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByTreeLeft($treeLeft = null, $comparison = null)
    {
        if (is_array($treeLeft)) {
            $useMinMax = false;
            if (isset($treeLeft['min'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_LEFT, $treeLeft['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLeft['max'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_LEFT, $treeLeft['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::TREE_LEFT, $treeLeft, $comparison);
    }

    /**
     * Filter the query on the tree_right column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeRight(1234); // WHERE tree_right = 1234
     * $query->filterByTreeRight(array(12, 34)); // WHERE tree_right IN (12, 34)
     * $query->filterByTreeRight(array('min' => 12)); // WHERE tree_right > 12
     * </code>
     *
     * @param     mixed $treeRight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByTreeRight($treeRight = null, $comparison = null)
    {
        if (is_array($treeRight)) {
            $useMinMax = false;
            if (isset($treeRight['min'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_RIGHT, $treeRight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeRight['max'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_RIGHT, $treeRight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::TREE_RIGHT, $treeRight, $comparison);
    }

    /**
     * Filter the query on the tree_scope column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeScope(1234); // WHERE tree_scope = 1234
     * $query->filterByTreeScope(array(12, 34)); // WHERE tree_scope IN (12, 34)
     * $query->filterByTreeScope(array('min' => 12)); // WHERE tree_scope > 12
     * </code>
     *
     * @param     mixed $treeScope The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByTreeScope($treeScope = null, $comparison = null)
    {
        if (is_array($treeScope)) {
            $useMinMax = false;
            if (isset($treeScope['min'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_SCOPE, $treeScope['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeScope['max'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::TREE_SCOPE, $treeScope['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::TREE_SCOPE, $treeScope, $comparison);
    }

    /**
     * Filter the query on the is_published column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublished(true); // WHERE is_published = true
     * $query->filterByIsPublished('yes'); // WHERE is_published = true
     * </code>
     *
     * @param     boolean|string $isPublished The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByIsPublished($isPublished = null, $comparison = null)
    {
        if (is_string($isPublished)) {
            $is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::IS_PUBLISHED, $isPublished, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelCmsPagePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsPagePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related iceModelCmsPageI18n object
     *
     * @param     iceModelCmsPageI18n $iceModelCmsPageI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function filterByiceModelCmsPageI18n($iceModelCmsPageI18n, $comparison = null)
    {
        if ($iceModelCmsPageI18n instanceof iceModelCmsPageI18n) {
            return $this
                ->addUsingAlias(iceModelCmsPagePeer::ID, $iceModelCmsPageI18n->getId(), $comparison);
        } elseif ($iceModelCmsPageI18n instanceof PropelCollection) {
            return $this
                ->useiceModelCmsPageI18nQuery()
                ->filterByPrimaryKeys($iceModelCmsPageI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelCmsPageI18n() only accepts arguments of type iceModelCmsPageI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelCmsPageI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function joiniceModelCmsPageI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelCmsPageI18n');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'iceModelCmsPageI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelCmsPageI18n relation iceModelCmsPageI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsPageI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelCmsPageI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelCmsPageI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsPageI18n', 'iceModelCmsPageI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelCmsPage $iceModelCmsPage Object to remove from the list of results
     *
     * @return    iceModelCmsPageQuery The current query, for fluid interface
     */
    public function prune($iceModelCmsPage = null)
    {
        if ($iceModelCmsPage) {
            $this->addUsingAlias(iceModelCmsPagePeer::ID, $iceModelCmsPage->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // symfony_i18n behavior
  
  /**
   * Adds a JOIN clause to the query using the i18n relation
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelCmsPageQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelCmsPageI18n';
    return $this
      ->joiniceModelCmsPageI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelCmsPageQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelCmsPageI18n');
    $this->with['iceModelCmsPageI18n']->setIsWithOneToMany(false);
    return $this;
  }
  
  /**
   * Use the I18n relation query object
   *
   * @see       useQuery()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelCmsPageI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsPageI18n', 'iceModelCmsPageI18nQuery');
  }

}