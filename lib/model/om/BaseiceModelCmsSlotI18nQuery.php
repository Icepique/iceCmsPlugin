<?php


/**
 * Base class that represents a query for the 'cms_slot_i18n' table.
 *
 * 
 *
 * @method     iceModelCmsSlotI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelCmsSlotI18nQuery orderByContents($order = Criteria::ASC) Order by the contents column
 * @method     iceModelCmsSlotI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 *
 * @method     iceModelCmsSlotI18nQuery groupById() Group by the id column
 * @method     iceModelCmsSlotI18nQuery groupByContents() Group by the contents column
 * @method     iceModelCmsSlotI18nQuery groupByCulture() Group by the culture column
 *
 * @method     iceModelCmsSlotI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelCmsSlotI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelCmsSlotI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelCmsSlotI18nQuery leftJoiniceModelCmsSlot($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelCmsSlot relation
 * @method     iceModelCmsSlotI18nQuery rightJoiniceModelCmsSlot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelCmsSlot relation
 * @method     iceModelCmsSlotI18nQuery innerJoiniceModelCmsSlot($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelCmsSlot relation
 *
 * @method     iceModelCmsSlotI18n findOne(PropelPDO $con = null) Return the first iceModelCmsSlotI18n matching the query
 * @method     iceModelCmsSlotI18n findOneOrCreate(PropelPDO $con = null) Return the first iceModelCmsSlotI18n matching the query, or a new iceModelCmsSlotI18n object populated from the query conditions when no match is found
 *
 * @method     iceModelCmsSlotI18n findOneById(int $id) Return the first iceModelCmsSlotI18n filtered by the id column
 * @method     iceModelCmsSlotI18n findOneByContents(string $contents) Return the first iceModelCmsSlotI18n filtered by the contents column
 * @method     iceModelCmsSlotI18n findOneByCulture(string $culture) Return the first iceModelCmsSlotI18n filtered by the culture column
 *
 * @method     array findById(int $id) Return iceModelCmsSlotI18n objects filtered by the id column
 * @method     array findByContents(string $contents) Return iceModelCmsSlotI18n objects filtered by the contents column
 * @method     array findByCulture(string $culture) Return iceModelCmsSlotI18n objects filtered by the culture column
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsSlotI18nQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelCmsSlotI18nQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelCmsSlotI18n', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelCmsSlotI18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelCmsSlotI18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelCmsSlotI18nQuery) {
            return $criteria;
        }
        $query = new iceModelCmsSlotI18nQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$id, $culture] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelCmsSlotI18n|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelCmsSlotI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(iceModelCmsSlotI18nPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(iceModelCmsSlotI18nPeer::CULTURE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(iceModelCmsSlotI18nPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(iceModelCmsSlotI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @see       filterByiceModelCmsSlot()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelCmsSlotI18nPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the contents column
     *
     * Example usage:
     * <code>
     * $query->filterByContents('fooValue');   // WHERE contents = 'fooValue'
     * $query->filterByContents('%fooValue%'); // WHERE contents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contents The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterByContents($contents = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contents)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contents)) {
                $contents = str_replace('*', '%', $contents);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotI18nPeer::CONTENTS, $contents, $comparison);
    }

    /**
     * Filter the query on the culture column
     *
     * Example usage:
     * <code>
     * $query->filterByCulture('fooValue');   // WHERE culture = 'fooValue'
     * $query->filterByCulture('%fooValue%'); // WHERE culture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterByCulture($culture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culture)) {
                $culture = str_replace('*', '%', $culture);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsSlotI18nPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query by a related iceModelCmsSlot object
     *
     * @param     iceModelCmsSlot|PropelCollection $iceModelCmsSlot The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function filterByiceModelCmsSlot($iceModelCmsSlot, $comparison = null)
    {
        if ($iceModelCmsSlot instanceof iceModelCmsSlot) {
            return $this
                ->addUsingAlias(iceModelCmsSlotI18nPeer::ID, $iceModelCmsSlot->getId(), $comparison);
        } elseif ($iceModelCmsSlot instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelCmsSlotI18nPeer::ID, $iceModelCmsSlot->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelCmsSlot() only accepts arguments of type iceModelCmsSlot or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelCmsSlot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function joiniceModelCmsSlot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelCmsSlot');

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
            $this->addJoinObject($join, 'iceModelCmsSlot');
        }

        return $this;
    }

    /**
     * Use the iceModelCmsSlot relation iceModelCmsSlot object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsSlotQuery A secondary query class using the current class as primary query
     */
    public function useiceModelCmsSlotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelCmsSlot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsSlot', 'iceModelCmsSlotQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelCmsSlotI18n $iceModelCmsSlotI18n Object to remove from the list of results
     *
     * @return    iceModelCmsSlotI18nQuery The current query, for fluid interface
     */
    public function prune($iceModelCmsSlotI18n = null)
    {
        if ($iceModelCmsSlotI18n) {
            $this->addCond('pruneCond0', $this->getAliasedColName(iceModelCmsSlotI18nPeer::ID), $iceModelCmsSlotI18n->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(iceModelCmsSlotI18nPeer::CULTURE), $iceModelCmsSlotI18n->getCulture(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}