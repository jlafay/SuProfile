<?php

namespace SuProfile\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ArticleType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('categories',  'entity',        array('class'    => 'SuProfileBlogBundle:Categorie','property' => 'nom','multiple' => true))
			->add('titre',       'text')
			->add('video',       'text', array('required' => false))
			->add('contenu',     'textarea', array('required' => false))
			->add('image',       new ImageType(), array('required' => false));
		
		$builder->addEventListener(
		FormEvents::PRE_SET_DATA,    
		function(FormEvent $event) { 
			$article = $event->getData();
			if (null === $article) {
				return; 
			}
		}
		);
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'SuProfile\BlogBundle\Entity\Article'
		));
	}

	public function getName()
	{
		return 'SuProfile_blogbundle_articletype';
	}
}
