<?php

namespace AppBundle\Repository;

/**
 * StatRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StatRepository extends \Doctrine\ORM\EntityRepository
{

    public function getRateByUser()
    {
        $query = $this->getEntityManager()
            ->createQuery("select IDENTITY(f.idUser),avg(f.rating) from AppBundle:Feedback f GROUP BY  f.idUser");
        return $query->getResult();
    }

}

