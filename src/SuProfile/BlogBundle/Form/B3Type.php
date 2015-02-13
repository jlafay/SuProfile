<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class B3Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ENG', 'text', array('required' => false))
			->add('ORC', 'text', array('required' => false))
			->add('LAW', 'text', array('required' => false))
			->add('NET', 'text', array('required' => false))
			->add('LIN', 'text', array('required' => false))
			->add('APL', 'text', array('required' => false))
			->add('JVA', 'text', array('required' => false))
			->add('MSD', 'text', array('required' => false))
			->add('AIT', 'text', array('required' => false))
			->add('MET', 'text', array('required' => false))
			->add('MGT', 'text', array('required' => false))
			->add('WEB', 'text', array('required' => false))
			->add('DEV', 'text', array('required' => false))
			->add('ARC', 'text', array('required' => false));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\B3'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_B3type';
	}
}
