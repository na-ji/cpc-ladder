<?php

namespace CPC\TeamBundle\Repository;

/**
 * TeamRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TeamRepository extends \Doctrine\ORM\EntityRepository
{
	public function findOrdered($id)
	{
		return $this->findBy(array('videogame' => $id), array('currentScore' => 'DESC'));
	}

	public function findAll()
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }
}