<?php
namespace App\Repositories;

class UserRepository

{
    public function findByName(string $name)
    {
       return $usersQuery = query()
            ->select('*')
            ->from('Users')
            ->where('name = :name')
            ->setParameter('name', $name)
            ->execute()
            ->fetchAssociative();
    }
}