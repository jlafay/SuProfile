<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class SuprofileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('nom',       'text')
			->add('prenom',       'text')
			->add('adresse',       'text', array('required' => false))
			->add('classe',       'text', array('required' => false))
			->add('formations',       'textarea', array('required' => false))
			->add('competences',       'textarea', array('required' => false))
			->add('experiences',       'textarea', array('required' => false))
			->add('image',       new ImageType(), array('required' => false))
			->add('B1',       new B1Type(), array('required' => false))
			->add('B2',       new B2Type(), array('required' => false))
			->add('B3',       new B3Type(), array('required' => false))
			->add('M1',       new M1Type(), array('required' => false))
			->add('M2',       new M2Type(), array('required' => false));
		
		$builder->addEventListener(
		FormEvents::PRE_SET_DATA,    
		function(FormEvent $event) { 
			$suprofile = $event->getData();
			if (null === $suprofile) {
				return; 
			}
		}
		);
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\Suprofile'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_suprofiletype';
	}
}
