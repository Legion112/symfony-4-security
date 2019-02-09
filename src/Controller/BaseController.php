<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 09.02.2019
 * Time: 22:06
 */

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class BaseController extends AbstractController
{
    protected function getUser():User
    {
        return parent::getUser();
    }


}