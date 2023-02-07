<?php
declare(strict_types=1);
namespace app;

class Model
{
    public static function find(int $id)
    {
        $table = explode('\\',(static::class));
        return "SELECT * FROM " . $table[1] . " WHERE id = " . $id;
    }

    public function create(array $data)
    {
        $table = explode('\\',(static::class));
        $cols = implode(', ', array_keys(get_class_vars(static::class)));
        $temp = [];
        foreach ($data as $value){
            $temp[] = "'" . $value . "'";
        }
        $value = implode(',', $temp);
        $sql = "INSERT INTO " . $table[1] . " (" . "$cols" . ") VALUES ( " . $value . " )";
        return $sql;
    }

    public function update(int $id, array $data)
    {
        $table = explode('\\', (static::class));
        $temp = [];
        foreach ($data as $key => $value)
        {
            $temp []= $key . ' = ' . $value;
        }
        $temp = implode(', ', $temp);
        var_dump("UPDATE " . $table[1] . " SET " . $temp ." WHERE id = " . $id);
    }

    public function delete(int $id)
    {
        $table = explode('\\', (static::class));
        return "DELETE " . $table[1] . " WHERE id = " . $id;
    }

    public function save(int $id = null,string $name = '', string $email = '')
    {
        if(is_null($id)){
            $this->create($name, $email);
        }else{
            $this->update($id, $name);
        }
    }
}