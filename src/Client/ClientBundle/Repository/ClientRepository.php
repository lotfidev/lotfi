<?php

namespace Client\ClientBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AmbianceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{
    public function findNbrUser() {

        return $this->createQueryBuilder('p')

            ->select('COUNT(p)')

            ->getQuery()

            ->getSingleScalarResult();

    }


}
