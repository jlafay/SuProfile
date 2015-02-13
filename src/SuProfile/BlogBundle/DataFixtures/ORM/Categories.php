<?php

namespace SuProfile\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SuProfile\BlogBundle\Entity\Categorie;

class Categories implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$noms = array('B1','B2','B3','M1','M2','communaute');

		foreach ($noms as $i => $nom) {
			$liste_categories[$i] = new Categorie();
			$liste_categories[$i]->setNom($nom);

			$manager->persist($liste_categories[$i]);
		}
		$manager->flush();
	}
}
