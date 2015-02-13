<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SuprofileEditType extends SuprofileType 
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options);
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_suprofileedittype';
	}
}
