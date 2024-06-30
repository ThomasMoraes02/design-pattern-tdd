<?php 
namespace DesignPattern\Creational\Builder;

use Exception;
use stdClass;

class MysqlQueryBuilder implements SqlQueryBuilder
{
    protected object $query;

    protected function reset(): void
    {
        $this->query = new stdClass();
    }

    public function select(string $table, array $fields): SqlQueryBuilder
    {
        $this->reset();
        $fields = implode(", ", $fields);
        $this->query->base = "SELECT {$fields} FROM {$table}";
        $this->query->type = "select";
        return $this;
    }

    public function where(string $field, string $value, string $operator = "="): SqlQueryBuilder
    {
        if(!in_array($this->query->type, ["select", "update", "delete"])) {
            throw new Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }

    public function limit(int $start, int $offset): SqlQueryBuilder
    {
        if(!in_array($this->query->type, ["select"])) {
            throw new Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = "LIMIT $start, $offset";
        return $this;
    }

    public function getSql(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if(!empty($query->where)) $sql .= " WHERE " . implode(" AND ", $query->where); 
        if(isset($query->limit)) $sql .= " {$query->limit}";
        $sql .= ";";
        return $sql;
    }
}