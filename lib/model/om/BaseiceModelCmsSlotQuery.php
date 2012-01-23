<?php


/**
 * Base class that represents a query for the 'cms_slot' table.
 *
 * 
 *
 * @method     iceModelCmsSlotQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelCmsSlotQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     iceModelCmsSlotQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     iceModelCmsSlotQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelCmsSlotQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelCmsSlotQuery groupById() Group by the id column
 * @method     iceModelCmsSlotQuery groupByType() Group by the type column
 * @method     iceModelCmsSlotQuery groupByName() Group by the name column
 * @method     iceModelCmsSlotQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelCmsSlotQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelCmsSlotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelCmsSlotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelCmsSlotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelCmsSlotQuery leftJoiniceModelCmsSlotI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelCmsSlotI18n relation
 * @method     iceModelCmsSlotQuery rightJoiniceModelCmsSlotI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelCmsSlotI18n relation
 * @method     iceModelCmsSlotQuery innerJoiniceModelCmsSlotI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelCmsSlotI18n relation
 *
 * @method     iceModelCmsSlot findOne(PropelPDO $con = null) Return the first iceModelCmsSlot matching the query
 * @method     iceModelCmsSlot findOneOrCreate(PropelPDO $con = null) Return the first iceModelCmsSlot matching the query, or a new iceModelCmsSlot object populated from the query conditions when no match is found
 *
 * @method     iceModelCmsSlot findOneById(int $id) Return the first iceModelCmsSlot filtered by the id column
 * @method     iceModelCmsSlot findOneByType(string $type) Return the first iceModelCmsSlot filtered by the type column
 * @method     iceModelCmsSlot findOneByName(string $name) Return the first iceModelCmsSlot filtered by the name column
 * @method     iceModelCmsSlot findOneByUpdatedAt(string $updated_at) Return the first iceModelCmsSlot filtered by the updated_at column
 * @method     iceModelCmsSlot findOneByCreatedAt(string $created_at) Return the first iceModelCmsSlot filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelCmsSlot objects filtered by the id column
 * @method     array findByType(string $type) Return iceModelCmsSlot objects filtered by the type column
 * @method     array findByName(string $name) Return iceModelCmsSlot objects filtered by the name column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelCmsSlot objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelCmsSlot objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsSlotQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelCmsSlotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelCmsSlot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelCmsSlotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelCmsSlotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelCmsSlotQuery) {
            return $criteria;
        }
        $query = new iceModelCmsSlotQuery();
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
     * @return    iceModelCmsSlot|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelCmsSlotPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelCmsSlotPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelCmsSlotPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelCmsSlotPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotPeer::NAME, $name, $comparison);
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
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelCmsSlotPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelCmsSlotPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelCmsSlotPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelCmsSlotPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related iceModelCmsSlotI18n object
     *
     * @param     iceModelCmsSlotI18n $iceModelCmsSlotI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function filterByiceModelCmsSlotI18n($iceModelCmsSlotI18n, $comparison = null)
    {
        if ($iceModelCmsSlotI18n instanceof iceModelCmsSlotI18n) {
            return $this
                ->addUsingAlias(iceModelCmsSlotPeer::ID, $iceModelCmsSlotI18n->getId(), $comparison);
        } elseif ($iceModelCmsSlotI18n instanceof PropelCollection) {
            return $this
                ->useiceModelCmsSlotI18nQuery()
                ->filterByPrimaryKeys($iceModelCmsSlotI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelCmsSlotI18n() only accepts arguments of type iceModelCmsSlotI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelCmsSlotI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function joiniceModelCmsSlotI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelCmsSlotI18n');

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
            $this->addJoinObject($join, 'iceModelCmsSlotI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelCmsSlotI18n relation iceModelCmsSlotI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsSlotI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelCmsSlotI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelCmsSlotI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsSlotI18n', 'iceModelCmsSlotI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelCmsSlot $iceModelCmsSlot Object to remove from the list of results
     *
     * @return    iceModelCmsSlotQuery The current query, for fluid interface
     */
    public function prune($iceModelCmsSlot = null)
    {
        if ($iceModelCmsSlot) {
            $this->addUsingAlias(iceModelCmsSlotPeer::ID, $iceModelCmsSlot->getId(), Criteria::NOT_EQUAL);
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
   * @return    iceModelCmsSlotQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelCmsSlotI18n';
    return $this
      ->joiniceModelCmsSlotI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelCmsSlotQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelCmsSlotI18n');
    $this->with['iceModelCmsSlotI18n']->setIsWithOneToMany(false);
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
   * @return    iceModelCmsSlotI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsSlotI18n', 'iceModelCmsSlotI18nQuery');
  }

}