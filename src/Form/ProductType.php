<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description', CKEditorType::class)
            ->add('imageFile1', VichImageType::class)
            ->add('imageFile2', VichImageType::class)
            ->add('imageFile3', VichImageType::class)
            ->add('price')
            ->add('category', EntityType::class, [
                'class' => 'App\Entity\Category',
                'placeholder' => 'Please select a category',
                'mapped' => false
            ])
            ->add('SubCategory');



        $builder->get('category')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                $form = $event->getForm();
                //var_dump($form->getData());


                $form->getParent()->add('SubCategory', EntityType::class, [
                    'class' => 'App\Entity\SubCategory',
                    'placeholder' => 'Please select a sub category',
                    'choices' => $form->getData()->getSubCategories()
                ]);
            }
        );




        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();



                $subCategory = $data->getSubCategory();



                if ($subCategory) {
                    $form->get('category')->setData($subCategory->getCategory());
                    //dump($city->getGovernorate()->getCities());
                    $form->add('SubCategory', EntityType::class, [
                        'class' => 'App\Entity\SubCategory',
                        'placeholder' => 'Please select a subCategory',
                        'choices' => $subCategory->getCategorie()->getSubCategories()
                    ]);
                } else {
                    //dump($city);
                    $form->add('SubCategory', EntityType::class, [
                        'class' => 'App\Entity\SubCategory',
                        'placeholder' => 'Please select a subCategory',
                        'choices' => []
                    ]);
                }
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
