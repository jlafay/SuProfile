<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class B2Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ENG', 'text', array('required' => false))
			->add('MGT', 'text', array('required' => false))
			->add('LAW', 'text', array('required' => false))
			->add('ADS', 'text', array('required' => false))
			->add('WEB', 'text', array('required' => false))
			->add('LIN', 'text', array('required' => false))
			->add('ORC', 'text', array('required' => false))
			->add('JVA', 'text', array('required' => false))
			->add('NET', 'text', array('required' => false))
			->add('GRA', 'text', array('required' => false))
			->add('CNS', 'text', array('required' => false))
			->add('CMP', 'text', array('required' => false))
			->add('PBS', 'text', array('required' => false))
			->add('MSA', 'text', array('required' => false))
			->add('JWB', 'text', array('required' => false))
			->add('DEV', 'text', array('required' => false))
			->add('DWB', 'text', array('required' => false));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\B2'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_B2type';
	}
}
