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

    public function create(string $name, string $email)
    {
        $table = explode('\\',(static::class));
        $cols = implode(', ', array_keys(get_class_vars(static::class)));
        return "INSERT INTO " . $table[1] . " (" . "$cols" . ") VALUES ( :id, ". $name . ", " . $email .")";
    }

    public function update(int $id, string $name)
    {
        $table = explode('\\', (static::class));
        return "UPDATE " . $table[1] . " SET name = '" . $name . "', email = 'email', WHERE id = " . $id;
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