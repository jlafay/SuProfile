<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	public function getSelectList()
	{
		$qb = $this->createQueryBuilder('a');

		return $qb;
	}

	public function getArticles($nombreParPage, $page, $cate)
	{
		if ((int) $page < 1) {
			throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
		}
	
		$bonneCate;
	
		switch ($cate) {
		case "B1":
			$bonneCate = 11;
			break;
		case "B2":
			$bonneCate = 12;
			break;
		case "B3":
			$bonneCate = 13;
			break;
		case "M1":
			$bonneCate = 14;
			break;
		case "M2":
			$bonneCate = 15;
			break;
		case "communaute":
			$bonneCate = 16;
			break;
		}

		$query = $this->createQueryBuilder('a')
					  ->leftJoin('a.image', 'i')
                      ->addSelect('i')
                      ->leftJoin('a.categories', 'cat')
                      ->addSelect('cat') 
				      ->where('cat= :cat')
                      ->orderBy('a.date', 'DESC')
				      ->setParameter('cat', $bonneCate)
                      ->getQuery();

		$query->setFirstResult(($page-1) * $nombreParPage)
              ->setMaxResults($nombreParPage);

		return new Paginator($query);
	}
	
	public function getDownloads($nombreParPage, $page)
	{
		if ((int) $page < 1) {
			throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
		}
	
		$query = $this->createQueryBuilder('a')
					  ->leftJoin('a.fichier', 'f')
                      ->addSelect('f')
					  ->where('f is not NULL')
                      ->orderBy('a.date', 'DESC')
                      ->getQuery();

		$query->setFirstResult(($page-1) * $nombreParPage)
              ->setMaxResults($nombreParPage);

		return new Paginator($query);
	}
}