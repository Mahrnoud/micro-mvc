<?php


namespace Database;


use Database\Interfaces\DbQueryInterface;

class Database implements DbQueryInterface
{
    /**
     * Connect To Database
     */
    use Connect;

    /**
     * @var $connect
     * store connection query
     */
    protected $connect;

    /**
     * @var $table
     * for determine the table
     */
    protected $table;

    /*
     * @var $query
     * collect the query statement
     */
    private $query;

    /**
     * @var array $where
     * store array of conditions
     */
    protected $where = [];

    /**
     * @var array $order
     * order the result by
     */
    protected $order = [];

    /**
     * @param array $select
     * @return $this
     */
    function select(array $select)
    {
        // TODO: Implement select() method.
        $this->query = "SELECT " . implode(", ", $select) . " From ".$this->table;

        return $this;
    }

    function update()
    {
        // TODO: Implement update() method.
        return $this;
    }

    function delete()
    {
        // TODO: Implement delete() method.
        return $this;
    }

    /**
     * @param string $field
     * @param string $operator
     * @param string $value
     * @return $this
     */
    function where(string $field,  string $operator = '=', string $value)
    {
        // TODO: Implement where() method.
        $this->where[] .= " $field$operator'$value' ";

        return $this;
    }

    /**
     * @param string $col
     * @param string|null $order
     * @return $this
     */
    function orderBy(string $col, string $order = null)
    {
        // TODO: Implement orderBy() method.
        $this->order[] .= " $col $order ";

        return $this;
    }

    function limit()
    {
        // TODO: Implement limit() method.
        return $this;
    }

    /**
     *
     * check if where array has value
     * check if order array has value
     * execute the query
     * @return array
     */
    function get(){

        if (!empty($this->where)) {

            $this->query .= " WHERE " . implode(' AND ', $this->where);
        }

        if (!empty($this->order)) {

            $this->query .= " ORDER BY " . implode(' AND ', $this->order);
        }

        $result = mysqli_query($this->connect, $this->query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
