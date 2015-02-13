<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleEditType extends ArticleType 
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options);

		$builder->remove('date');
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_articleedittype';
	}
}
