<?php

include_once("admin/db.php");

class query extends database
{
    function fetchData($table, $field = "*", $condition = "", $like = "", $order = "", $sort = "", $limit = "")
    {

        $q = "SELECT $field FROM `$table`";

        if ($condition != "") {
            $q .= " WHERE $condition ";
        }
        if ($like != "" && $condition == "") {
            $q .= " WHERE $like ";
        } else if ($like != "") {
            $q .= " and $like ";
        }

        if ($order != "") {
            $q .= " order by `$order` ";
        }
        if ($sort != "" && $order != "") {
            $q .= " $sort ";
        }
        if ($limit != "") {
            $q .= " limit $limit ";
        }

        //$q = "SELECT * FROM `$table` $condition $like $order $sort $limit";

        $q = $this->connect()->prepare($q);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function isVerified($id)
    {

        // $role = 'agent';
        // $agentData = $this->fetchAll();
        $q = $this->connect()->prepare("SELECT * FROM users WHERE id=?");
        $q->bindParam(1, $id);
        $q->execute();
        $v_status = $q->fetch(PDO::FETCH_ASSOC)['verified'];
        //$v_status = $agentData[`$id`]['verified'];
        if ($v_status == 'yes') {
            return true;
        } else {
            return false;
        }
    }

    function ratingComment($listing_id)
    {

        $q = $this->connect()->prepare("SELECT * FROM listings WHERE id=?");
        $q->bindParam(1, $listing_id);
        $q->execute();
        $value = $q->fetch(PDO::FETCH_ASSOC);
        if ($value['overall_rating'] <= 1) {
            echo "Worst";
        } else if ($value['overall_rating'] > 1 && $value['overall_rating'] <= 2) {
            echo "Bad";
        } else if ($value['overall_rating'] > 2 && $value['overall_rating'] <= 3) {
            echo "Average";
        } else if ($value['overall_rating'] > 3 && $value['overall_rating'] <= 4) {
            echo "Good";
        } else if ($value['overall_rating'] > 4 && $value['overall_rating'] <= 5) {
            echo "Excillent";
        }
    }

    function insert($table, $data)
    {
        $field = array();
        $values = array();
        foreach ($data as $key => $value) {
            $field[] = $key;
            $values[] = $value;
        }
        $field = "`" . implode("`,`", $field) . "`";
        $values = "'" . implode("','", $values) . "'";
        $db = $this->connect();
        // echo $table;

        $q = $db->prepare("INSERT INTO `$table` ($field) VALUES ($values)");
        $q->execute();


        if (!$q) {
            echo "no";
        } else {
            return $db->lastInsertId();
        }
    }
}
