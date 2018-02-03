<?php
namespace forum\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class,array('label'=>'Pseudo'))
            ->add('mail', EmailType::class,array('label'=>'Adresse Mail'))
            ->add('anniversaire', BirthdayType::class, array(
    'format' => 'dd MM yyyy',
),array('label'=>'Date de naissance'))
            ->add('ville', TextType::class,array('label'=>'Ville de résidence'))
            ->add('site', null, array(
                  'required'   => false,
                   'label'=> 'Votre site web'))
            ->add('avatar', FileType::class, array('label' => 'Avatar (PNG ou JPEG)'))
            ->add('password', PasswordType::class,array('label'=>'Mot de passe'));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'forum\PlatformBundle\Entity\membre',
        ]);
    }
}
