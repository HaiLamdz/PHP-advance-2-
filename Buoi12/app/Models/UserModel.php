<?php

namespace App\Models;

use App\Common\Database;
use Doctrine\DBAL\Query\QueryBuilder;

class UserModel
{
    private $connection;
    private $queryBuilder;

    public function __construct()
    {
        $this->connection = database::getConnection();
        $this->queryBuilder =  Database::getQueryBuilder();
    }
    public function getAll()
    {

        $stmt = $this->queryBuilder->select('*')->from('users');
        return $stmt->fetchAllAssociative();
    }

    public function insertUser($name, $age, $image)
    {
        $stmt = $this->queryBuilder->insert('users')->values(['name' => ':name', 'age' => ':age', 'image' =>':image'])->setParameters(['name' => $name, 'age' => $age, 'image' => $image]);
        return $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }

    public function userOfId($id)
    {
        $stmt = $this->queryBuilder->select('*')->from('users')->where('id = :id')->setParameter('id', $id);
        return $stmt->fetchAssociative();
    }

    public function updateUser($id, $name, $age, $image)
    {
        $stmt = $this->queryBuilder->update('users')
            ->where('id = :id')
            ->set('name', ':name')
            ->set('age', ':age')
            ->set('image', ':image')
            ->setParameters([
                'id'    => $id,
                'name' => $name,
                'age' => $age,
                'image' => $image,
            ]);
        return $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }

    public function delete($id)
    {
        $stmt = $this->queryBuilder->delete('users')
            ->where('id = :id')
            ->setParameter('id', $id);

        $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }
}
