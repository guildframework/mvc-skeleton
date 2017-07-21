<?php


namespace Application\Controller;

use Guild\Mvc\Controller\AbstractActionController;
use Guild\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
//    echo 'cont';
        return new ViewModel();
    }
}