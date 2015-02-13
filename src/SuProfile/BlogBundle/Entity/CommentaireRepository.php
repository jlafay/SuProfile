<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireRepository extends EntityRepository
{
	public function getByArticle($articleId)
	{
		$qb = $this->createQueryBuilder('c')
				   ->leftJoin('c.user', 'u') 
                   ->addSelect('u')
                   ->orderBy('c.date', 'DESC')
                   ->where('c.article = :id')
                   ->setParameter('id', $articleId);

		return $qb->getQuery()
				  ->getResult();
	}

	public function isFlood($ip, $secondes)
	{
		$qb = $this->createQueryBuilder('c')
				   ->select('COUNT(c)')
				   ->where('c.ip = :ip')
				   ->setParameter('ip', $ip)
				   ->andWhere('c.date >= :date')
                   ->setParameter('date', new \Datetime('-'.$secondes.'seconds'));

		return (bool) $qb->getQuery()->getSingleScalarResult();
	}
}
