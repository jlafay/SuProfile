<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class B1Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ENG', 'text', array('required' => false))
			->add('MGT', 'text', array('required' => false))
			->add('LAW', 'text', array('required' => false))
			->add('MAT', 'text', array('required' => false))
			->add('ARI', 'text', array('required' => false))
			->add('CCNA', 'text', array('required' => false))
			->add('ADS', 'text', array('required' => false))
			->add('WEB', 'text', array('required' => false))
			->add('CPA', 'text', array('required' => false))
			->add('OSS', 'text', array('required' => false))
			->add('LIN', 'text', array('required' => false))
			->add('MER', 'text', array('required' => false))
			->add('SEC', 'text', array('required' => false))
			->add('ORC', 'text', array('required' => false))
			->add('JWB', 'text', array('required' => false))
			->add('DEV', 'text', array('required' => false))
			->add('ARC', 'text', array('required' => false));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\B1'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_B1type';
	}
}
