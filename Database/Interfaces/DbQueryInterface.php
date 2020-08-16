<?php


namespace Database\Interfaces;


interface DbQueryInterface
{
    function select(array $select);
    function update();
    function delete();
    function where(string $field, string $operator, string $value);
    function orderBy(string $col, string $order);
    function limit();
    function get();

}