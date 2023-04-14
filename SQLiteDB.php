<?php

class SQLiteDB
{
    public function __construct(private SQLite3 $db) {}

    public function query(string $sql): SQLite3Result|false {
        return $this->db->query($sql);
    }

    public function prepare(string $sql): SQLite3Stmt|false {
        return $this->db->prepare($sql);
    }

    public function bindValue(SQLite3Stmt $stmt, string $param, mixed $value): bool {
        return $stmt->bindValue($param, $value);
    }

    public function execute(SQLite3Stmt $stmt): SQLite3Result|false {
        return $stmt->execute();
    }

    public function fetchAll(SQLite3Result $result): array {
        $rows = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function lastInsertRowID(): int {
        return $this->db->lastInsertRowID();
    }
}
