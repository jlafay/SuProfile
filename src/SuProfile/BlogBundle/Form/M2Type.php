<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class M2Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ENG', 'text', array('required' => false))
			->add('MGT', 'text', array('required' => false))
			->add('LAW', 'text', array('required' => false))
			->add('EPS', 'text', array('required' => false))
			->add('ORC', 'text', array('required' => false))
			->add('BIS', 'text', array('required' => false))
			->add('MET', 'text', array('required' => false))
			->add('VTZ', 'text', array('required' => false))
			->add('DAT', 'text', array('required' => false))
			->add('EBP', 'text', array('required' => false));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\M2'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_M2type';
	}
}
