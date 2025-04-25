<?php

return [
  "database" => [
      "sqlite" => [
          "driver" => "sqlite",
          "database" => "db.sqlite"
      ],
      "mysql" => [
          "driver" => "mysql",
          "host" => "localhost",
          "port" => "3306",
          "dbname" => "bookwise",
          "user" => "root",
      ]
  ]
];