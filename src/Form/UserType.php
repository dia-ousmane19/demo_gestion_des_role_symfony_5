<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ],
                'required'=>true,
                'constraints'=>[
                    new NotBlank([
                        'message'=>'veuillez entrer votre adresse email'
                    ])
                ]
            ])
            ->add('roles',ChoiceType::class,[
                'choices'=>[
                    'utilisateur' =>'ROLE_USER',
                    'administrateur' =>'ROLE_ADMIN',
                    'client' =>'ROLE_CLIENT',
                    'Community Manager' =>'ROLE_CM'
                ],
                'expanded'=>true,
                'multiple'=>true,
                
            ])
            ->add('password',PasswordType::class,[
                'attr'=>[
                    'class' => 'form-control mb-2'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
