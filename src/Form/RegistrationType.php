<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control')))
            ->add(
                'password',
                PasswordType::class
            )
            ->add('confirm_password', PasswordType::class)
            ->add('fisrtName')
            ->add('lastname')
            ->add('telephone')
            ->add('address')
            ->add('company')
            ->add('governorate', EntityType::class, [
                'class' => 'App\Entity\Governorate',
                'placeholder' => 'Please select a governorate',
                'mapped' => false
            ])
            ->add('city');

        $builder->get('governorate')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                $form = $event->getForm();
                //var_dump($form->getData());


                $form->getParent()->add('city', EntityType::class, [
                    'class' => 'App\Entity\City',
                    'placeholder' => 'Please select a City',
                    'choices' => $form->getData()->getCities()
                ]);
            }
        );

        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $city = $data->getCity();

                if ($city) {
                    $form->get('governorate')->setData($city->getGovernorate());
                    //dump($city->getGovernorate()->getCities());
                    $form->add('city', EntityType::class, [
                        'class' => 'App\Entity\City',
                        'placeholder' => 'Please select a city',
                        'choices' => $city->getGovernorate()->getCities()
                    ]);
                } else {
                    //dump($city);
                    $form->add('city', EntityType::class, [
                        'class' => 'App\Entity\City',
                        'placeholder' => 'Please select a city',
                        'choices' => []
                    ]);
                }
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
