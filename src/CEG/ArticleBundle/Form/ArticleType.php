<?php

namespace CEG\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artclTitle','text')
            ->add('artclContent','textarea')
            ->add('artclType','choice',array(
                  'choices' => array(
                        'Information' => 'Information',
                        'Compétition' => 'Compétition',
                        'Résultat' => 'Résultat',
                        'Stage' => 'Stage'
                  ),
                  'choices_as_values' => true,
            ))
            ->add('artclPost','submit',array('label' => 'Publier', ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CEG\ArticleBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ceg_articlebundle_article';
    }
}
