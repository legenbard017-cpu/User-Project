<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\UserFactory;
use App\Component\User\UserManager;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserCreateAction extends AbstractController
{

    public function __construct(private UserFactory $userFactory, private UserManager $userManager)
    {

    }
    public function __invoke(User $user): void
    {

        $user = $this->userFactory->create(
            $user -> getEmail(),
            $user -> getPassword(),
            $user -> getFullName(),
            $user -> getSurName(),
            $user -> getAge(),
        );

        $this -> userManager->save($user,true);

        print $user->getFullName() . PHP_EOL;
        print $user->getSurName() . PHP_EOL;
        print $user->getEmail() . PHP_EOL;
        print $user->getAge();

        exit();


    }

}
