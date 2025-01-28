<?php

use app\Config\Database;


class Repository
{

    protected $db;
    protected $table;

    public function __contruct($tableName)
    {
        $this->table = $tableName;
        $this->db = Database::getInstance()->getPdo();
    }

    public function getTableName()
    {
        return $this->table;
    }

    public function all()
    {
        $tableName = $this->getTableName();
        $stmt = $this->db->query("SELECT*FROM $tableName");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $keys = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $stmt = $this->db->prepare("INSERT INTO $this->table ($keys) VALUES ($values)");
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }
    public function update($id, $data)
    {
        $setValues = '';
        foreach ($data as $key) {
            $setValues .= "$key=:$key, ";
        }
        $setValues = rtrim($setValues, ', ');
        $data['id'] = $id;
        $stmt = $this->db->prepare("UPDATE $this->table SET $setValues WHERE id = :id");
        $stmt->execute($data);
        return $stmt->rowCount();
    }
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }



    // relanship methods 


    public function hasMany($relatedModel, $foreign_key, $id)
    {
        $relatedTableName = (new $relatedModel())->getTableName();

        $query = "SELECT * FROM $relatedTableName WHERE $foreign_key = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function belongsTo($relatedModel, $foreign_key, $id)
    {
        $relatedModelInstance = new $relatedModel();
        $relatedTableName = $relatedModelInstance->getTableName();

        $query = "SELECT * FROM $relatedTableName WHERE id = (SELECT $foreign_key FROM $this->table WHERE id = :id)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function belongsToMany($relatedModel, $pivotTable, $foreignPivotKey, $relatedPivotKey, $id)
    {
        $relatedTableName = (new $relatedModel())->getTableName();

        $query = "SELECT $relatedTableName.* FROM $relatedTableName
        JOIN $pivotTable ON $relatedTableName.id = $pivotTable.$relatedPivotKey
        WHERE $pivotTable.$foreignPivotKey = :id";;

        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);

        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }
}
