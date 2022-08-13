<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addTab('one')
                ->setIcon('phone')
                ->setHelp('Phone number is preferred'),
            IdField::new('id')->setDisabled(),

            FormField::addTab('Foo')
                ->setIcon('phone')
                ->setHelp('Phone number is preferred'),
            TextField::new('title'),
            AssociationField::new('price')
                ->setLabel(false)
                ->useCrudForm(),
            TextField::new('title'),
        ];
    }
}
