<?php

namespace Blog\ModelBundle\Repository;

use Blog\ModelBundle\Entity\Author;
use Doctrine\ORM\EntityRepository;


/**
 * Class AuthorRepository
 */
class AuthorRepository extends EntityRepository
{

    /**
     * Find the fist Author
     *
     * @return Author
     */
    public function findFirst()
    {
        $qb = $this->getQueryBuilder()
                   ->orderBy('a.id', 'asc')
                   -setMaxResults(1);

        return $qb->getQuery()->getSingleResult();
    }


    private function getQueryBuilder()
    {
        $em = $this->getEntityManager();

        $qb = $em->getRepository('ModelBundle:Author')
                 ->createQueryBuilder('a');

        return $qb;
    }
}