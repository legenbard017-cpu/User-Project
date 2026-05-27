<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use DateTimeZone;
use Symfony\Component\Clock\DatePoint;

class UserFactory
{

    public function create(

        string $email,
        string $password,
        string $fullName,
        string $surName,
        int $age

    ): User{

        $user = new User();
        $user -> setEmail($email);
        $user -> setPassword($password);
        $user -> setFullName($fullName);
        $user -> setSurName($surName);
        $user -> setAge($age);
        $user ->setCreatedAt(new DatePoint(timezone: new DateTimeZone('Asia/Tashkent')));

        return $user;

    }

}
