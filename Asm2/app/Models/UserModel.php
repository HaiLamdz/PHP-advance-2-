<?php
namespace App\Models;

use App\Common\Database;
use Doctrine\DBAL\Query\QueryBuilder;

class UserModel{
    private $queryBuilder;
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
        $this->queryBuilder = Database::getQueryBuilder();
    }

    public function addUser($name, $age, $job, $email, $password){
        $stmt = $this->queryBuilder->insert('users')
        ->values([
            'user_name' => ':name',
            'user_age' => ':age',
            'job' => ':job',
            'email' => ':email',
            'password' => ':password',
            'password' => ':password',
        ])
        ->setParameters([
            'name' => $name,
            'age' => $age,
            'job' => $job,
            'email' => $email,
            'password' => $password,
        ]);
        return $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }
    
    public function getUser() {
        $stmt = $this->queryBuilder->select('*')->from('users');
        return $stmt->fetchAllAssociative();
    }

    public function userOfId($id){
        $stmt = $this->queryBuilder->select('*')
        ->from('users')
        ->where('user_id = :id')
        ->setParameter('id', $id);
        return $stmt->fetchAssociative();
    }

    public function updateUser($id, $name, $age, $job, $email){
        $stmt = $this->queryBuilder->update('users')
        ->where('user_id = :id')
        ->set('user_name' , ':name')
        ->set('user_age' , ':age')
        ->set('job' , ':job')
        ->set('email' , ':email')
        ->setParameters([
            'id' => $id,
            'name' =>$name,
            'age' =>$age,
            'job' =>$job,
            'email' =>$email,
        ]);
        return $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }

    public function deleteUser($id){
        $stmt = $this->queryBuilder->delete('users')
        ->where('user_id = :id')
        ->setParameter('id', $id);
        return $this->connection->executeStatement($stmt->getSQL(), $stmt->getParameters());
    }
}
?>