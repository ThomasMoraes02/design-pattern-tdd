<?php

use DesignPattern\Creational\Builder\MysqlQueryBuilder;
use DesignPattern\Creational\Builder\PostgresQueryBuilder;
use DesignPattern\Creational\Builder\SqlQueryBuilder;

test("Deve criar um select em mysql", function() {
    $query = queryBuilder(new MysqlQueryBuilder());
    expect($query->getSql())->toBe("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;");
});

test("Deve criar um select em postgres", function() {
    $query = queryBuilder(new PostgresQueryBuilder());
    expect($query->getSql())->toBe("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;");
});

function queryBuilder(SqlQueryBuilder $queryBuilder) {
    return $queryBuilder->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20);
}