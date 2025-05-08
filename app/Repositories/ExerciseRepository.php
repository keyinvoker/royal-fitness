<?php

namespace App\Repositories;

use mysqli;

class ExerciseRepository
{
    protected mysqli $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    private function exec(string $query)
    {
        $result = mysqli_query($this->conn, $query);

        $data = null;

        $result = mysqli_query($this->conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                $data = $row;
            }
        }

        mysqli_free_result($result);

        return $data;
    }

    private function execAll(string $query)
    {
        $result = mysqli_query($this->conn, $query);

        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        mysqli_free_result($result);

        return $data;
    }

    public function getAll(int $offset = 0, ?int $limit = null)
    {
        $query = (
            "SELECT " .
            "   e.name," .
            "   e.duration_minutes," .
            "   e.video_url," .
            "   e.description," .
            "   eq.name AS equipment " .
            "FROM exercises AS e " .
            "JOIN equipments AS eq ON eq.id = e.equipment_id"
        );
        if ($limit && $offset) {
            $query = "$query OFFSET $offset LIMIT $limit";
        }
        $query = "$query ORDER BY e.id ASC";

        return $this->execAll($query);;
    }

    public function findOne(int $id)
    {
        $query = "SELECT * FROM exercises WHERE id = $id";
        return $this->exec($query);
    }
}
