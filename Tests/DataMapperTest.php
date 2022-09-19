<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Structural\DataMapper\StorageManger;
use Structural\DataMapper\DataMapper;
use Structural\DataMapper\Models\User;
class DataMapperTest extends TestCase
{
    private StorageManger $manager;
    private  array $data;
    protected function setUp() :void
    {
        $this->data = [1 => ['userName'=>'admin','password' => '123']];
        $this->manager = new StorageManger($this->data);
    }

    public function testCanGetUserById()
    {
        $dataMapper = new DataMapper($this->manager);
        $user = $dataMapper->findById(1);

        $this->assertEquals($this->data[1],$user);
    }

    public function testCanSaveUserObject()
    {
        $user = new User();
        $user->setUserName('master');
        $user->setPassword('321');
        $user->setId(2);

        $dataMapper = new DataMapper($this->manager);
       $this->assertTrue($dataMapper->store($user));
    }
}