<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use DateTimeZone;
use Symfony\Component\Clock\DatePoint;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFactory
{

    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {

    }
    public function create(

        string $email,
        string $password,
        string $fullName,
        string $surName,
        int $age

    ): User{

        $user = new User();

        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);

        $user -> setEmail($email);
        $user -> setPassword($hashedPassword);
        $user -> setFullName($fullName);
        $user -> setSurName($surName);
        $user -> setAge($age);
        $user ->setCreatedAt(new DatePoint(timezone: new DateTimeZone('Asia/Tashkent')));

        return $user;

    }

}
