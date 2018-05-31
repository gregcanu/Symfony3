<?php

// src/OC/PlatformBundle/Repository/AdvertRepository.php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository {

    public function getAdverts($page, $nbPerPage) {
        $query = $this->createQueryBuilder('a')
                ->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.categories', 'c')
                ->addSelect('c')
                ->orderBy('a.date', 'DESC')
                ->getQuery()
        ;

        $query
                ->setFirstResult(($page - 1) * $nbPerPage)
                ->setMaxResults($nbPerPage)
        ;

        return new Paginator($query, true);
    }

    public function whereCurrentYear(QueryBuilder $qb) {
        $qb->andWhere('a.date BETWEEN :start AND :end')
                ->setParameter('start', new \Datetime(date('Y') . '-01-01'))  // Date entre le 1er janvier de cette année
                ->setParameter('end', new \Datetime(date('Y') . '-12-31'))  // Et le 31 décembre de cette année
        ;
    }

    public function findByAuthorAndDate($author, $year) {
        $qb = $this->createQueryBuilder('a');

        $qb->where('a.author = :author')
                ->setParameter('author', $author)
                ->andWhere('a.date < :year')
                ->setParameter('year', $year)
                ->orderBy('a.date', 'DESC')
        ;

        return $qb->getQuery()
                        ->getResult()
        ;
    }

    public function myFind() {
        $qb = $this->createQueryBuilder('a');

        // On peut ajouter ce qu'on veut avant
        $qb->where('a.author = :author')
                ->setParameter('author', 'Marine')
        ;

        // On applique notre condition sur le QueryBuilder
        $this->whereCurrentYear($qb);

        // On peut ajouter ce qu'on veut après
        $qb->orderBy('a.date', 'DESC');

        return $qb->getQuery()
                        ->getResult()
        ;
    }

    public function getAdvertWithApplications() {
        $qb = $this
                ->createQueryBuilder('a')
                ->leftJoin('a.applications', 'app')
                ->addSelect('app')
        ;

        return $qb
                        ->getQuery()
                        ->getResult()
        ;
    }

    public function getAdvertWithCategories(array $categoryNames) {
        $qb = $this->createQueryBuilder('a')
                ->innerJoin('a.categories', 'c')
                ->addSelect('c')
        ;

        $qb->where($qb->expr()->in('c.name', $categoryNames));

        return $qb->getQuery()->getResult();
    }

}
