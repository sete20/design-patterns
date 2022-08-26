<?php

namespace Structural\DataMapper;

use Structural\DataMapper\Models\User;
use Structural\DataMapper\StorageManger;
class DataMapper
{
    /**
     * @var StorageManger
     */
    private $manager;

    public function __construct(StorageManger $manager)
    {
        $this->manager = $manager;
    }

    public function findById(string $id)
    {
        return $this->manager->find($id);
    }

    public function store(User $user)
    {
        return $this->manager->store(
            [$user->getId() => ['userName' => $user->getUserName(), 'password' => $user
                ->getPassword()]]);
    }
}