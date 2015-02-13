<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class M1Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ENG', 'text', array('required' => false))
			->add('MGT', 'text', array('required' => false))
			->add('MET', 'text', array('required' => false))
			->add('LAW', 'text', array('required' => false))
			->add('JVA', 'text', array('required' => false))
			->add('MSE', 'text', array('required' => false))
			->add('NET', 'text', array('required' => false))
			->add('ERP', 'text', array('required' => false))
			->add('BIS', 'text', array('required' => false))
			->add('MOS', 'text', array('required' => false))
			->add('AIT', 'text', array('required' => false))
			->add('VIP', 'text', array('required' => false))
			->add('VTZ', 'text', array('required' => false))
			->add('DEV', 'text', array('required' => false))
			->add('ARC', 'text', array('required' => false));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\M1'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_M1type';
	}
}
