<?php


/**
 * Base class that represents a query for the 'cms_page_i18n' table.
 *
 * 
 *
 * @method     iceModelCmsPageI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelCmsPageI18nQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     iceModelCmsPageI18nQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     iceModelCmsPageI18nQuery orderByContents($order = Criteria::ASC) Order by the contents column
 * @method     iceModelCmsPageI18nQuery orderByMetaDescription($order = Criteria::ASC) Order by the meta_description column
 * @method     iceModelCmsPageI18nQuery orderByMetaKeywords($order = Criteria::ASC) Order by the meta_keywords column
 * @method     iceModelCmsPageI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 *
 * @method     iceModelCmsPageI18nQuery groupById() Group by the id column
 * @method     iceModelCmsPageI18nQuery groupByName() Group by the name column
 * @method     iceModelCmsPageI18nQuery groupBySlug() Group by the slug column
 * @method     iceModelCmsPageI18nQuery groupByContents() Group by the contents column
 * @method     iceModelCmsPageI18nQuery groupByMetaDescription() Group by the meta_description column
 * @method     iceModelCmsPageI18nQuery groupByMetaKeywords() Group by the meta_keywords column
 * @method     iceModelCmsPageI18nQuery groupByCulture() Group by the culture column
 *
 * @method     iceModelCmsPageI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelCmsPageI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelCmsPageI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelCmsPageI18nQuery leftJoiniceModelCmsPage($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelCmsPage relation
 * @method     iceModelCmsPageI18nQuery rightJoiniceModelCmsPage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelCmsPage relation
 * @method     iceModelCmsPageI18nQuery innerJoiniceModelCmsPage($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelCmsPage relation
 *
 * @method     iceModelCmsPageI18n findOne(PropelPDO $con = null) Return the first iceModelCmsPageI18n matching the query
 * @method     iceModelCmsPageI18n findOneOrCreate(PropelPDO $con = null) Return the first iceModelCmsPageI18n matching the query, or a new iceModelCmsPageI18n object populated from the query conditions when no match is found
 *
 * @method     iceModelCmsPageI18n findOneById(int $id) Return the first iceModelCmsPageI18n filtered by the id column
 * @method     iceModelCmsPageI18n findOneByName(string $name) Return the first iceModelCmsPageI18n filtered by the name column
 * @method     iceModelCmsPageI18n findOneBySlug(string $slug) Return the first iceModelCmsPageI18n filtered by the slug column
 * @method     iceModelCmsPageI18n findOneByContents(string $contents) Return the first iceModelCmsPageI18n filtered by the contents column
 * @method     iceModelCmsPageI18n findOneByMetaDescription(string $meta_description) Return the first iceModelCmsPageI18n filtered by the meta_description column
 * @method     iceModelCmsPageI18n findOneByMetaKeywords(string $meta_keywords) Return the first iceModelCmsPageI18n filtered by the meta_keywords column
 * @method     iceModelCmsPageI18n findOneByCulture(string $culture) Return the first iceModelCmsPageI18n filtered by the culture column
 *
 * @method     array findById(int $id) Return iceModelCmsPageI18n objects filtered by the id column
 * @method     array findByName(string $name) Return iceModelCmsPageI18n objects filtered by the name column
 * @method     array findBySlug(string $slug) Return iceModelCmsPageI18n objects filtered by the slug column
 * @method     array findByContents(string $contents) Return iceModelCmsPageI18n objects filtered by the contents column
 * @method     array findByMetaDescription(string $meta_description) Return iceModelCmsPageI18n objects filtered by the meta_description column
 * @method     array findByMetaKeywords(string $meta_keywords) Return iceModelCmsPageI18n objects filtered by the meta_keywords column
 * @method     array findByCulture(string $culture) Return iceModelCmsPageI18n objects filtered by the culture column
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsPageI18nQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelCmsPageI18nQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelCmsPageI18n', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelCmsPageI18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelCmsPageI18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelCmsPageI18nQuery) {
            return $criteria;
        }
        $query = new iceModelCmsPageI18nQuery();
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
     * @return    iceModelCmsPageI18n|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelCmsPageI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(iceModelCmsPageI18nPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(iceModelCmsPageI18nPeer::CULTURE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(iceModelCmsPageI18nPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(iceModelCmsPageI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
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
     * @see       filterByiceModelCmsPage()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::ID, $id, $comparison);
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
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::SLUG, $slug, $comparison);
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
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::CONTENTS, $contents, $comparison);
    }

    /**
     * Filter the query on the meta_description column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaDescription('fooValue');   // WHERE meta_description = 'fooValue'
     * $query->filterByMetaDescription('%fooValue%'); // WHERE meta_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metaDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterByMetaDescription($metaDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metaDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metaDescription)) {
                $metaDescription = str_replace('*', '%', $metaDescription);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::META_DESCRIPTION, $metaDescription, $comparison);
    }

    /**
     * Filter the query on the meta_keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaKeywords('fooValue');   // WHERE meta_keywords = 'fooValue'
     * $query->filterByMetaKeywords('%fooValue%'); // WHERE meta_keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metaKeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterByMetaKeywords($metaKeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metaKeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metaKeywords)) {
                $metaKeywords = str_replace('*', '%', $metaKeywords);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::META_KEYWORDS, $metaKeywords, $comparison);
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
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelCmsPageI18nPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query by a related iceModelCmsPage object
     *
     * @param     iceModelCmsPage|PropelCollection $iceModelCmsPage The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function filterByiceModelCmsPage($iceModelCmsPage, $comparison = null)
    {
        if ($iceModelCmsPage instanceof iceModelCmsPage) {
            return $this
                ->addUsingAlias(iceModelCmsPageI18nPeer::ID, $iceModelCmsPage->getId(), $comparison);
        } elseif ($iceModelCmsPage instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelCmsPageI18nPeer::ID, $iceModelCmsPage->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelCmsPage() only accepts arguments of type iceModelCmsPage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelCmsPage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function joiniceModelCmsPage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelCmsPage');

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
            $this->addJoinObject($join, 'iceModelCmsPage');
        }

        return $this;
    }

    /**
     * Use the iceModelCmsPage relation iceModelCmsPage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelCmsPageQuery A secondary query class using the current class as primary query
     */
    public function useiceModelCmsPageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelCmsPage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelCmsPage', 'iceModelCmsPageQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelCmsPageI18n $iceModelCmsPageI18n Object to remove from the list of results
     *
     * @return    iceModelCmsPageI18nQuery The current query, for fluid interface
     */
    public function prune($iceModelCmsPageI18n = null)
    {
        if ($iceModelCmsPageI18n) {
            $this->addCond('pruneCond0', $this->getAliasedColName(iceModelCmsPageI18nPeer::ID), $iceModelCmsPageI18n->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(iceModelCmsPageI18nPeer::CULTURE), $iceModelCmsPageI18n->getCulture(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}