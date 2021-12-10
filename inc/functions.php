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
    function commentRatingText($id)
    {
        $q = $this->connect()->prepare("SELECT rating FROM reviews WHERE id=?");
        $q->bindParam(1, $id);
        $q->execute();
        $value = $q->fetch(PDO::FETCH_ASSOC)['rating'];
        $text = "";
        if ($value <= 1) {
            $text = "Worst";
        } else if ($value > 1 && $value <= 2) {
            $text = "Bad";
        } else if ($value > 2 && $value <= 3) {
            $text = "Average";
        } else if ($value > 3 && $value <= 4) {
            $text = "Good";
        } else if ($value > 4 && $value <= 5) {
            $text = "Excillent";
        }
        return $text;
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
    function getImages($table, $condition = "")
    {
        if ($condition == "") {
            $q = $this->connect()->prepare("SELECT `image` FROM $table");
            $q->execute();
            $images = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($images['image'] as $key) {
                $images[] = $key;
            }
            return $images;
        } else {
            $q = $this->connect()->prepare("SELECT `image` FROM listings WHERE $condition");

            // $q->bindParam(2, $condition);
            $q->execute();
            $images = $q->fetchAll(PDO::FETCH_ASSOC)[0]['image'];
            // $images = explode(",", $images);
            return explode(",", $images);
        }
    }
}
class userAuth extends database
{
    function logedUserInfo()
    {
        $user_id = $_SESSION['user_id'];
        $q = $this->connect()->prepare("SELECT `first_name`,`last_name`,`image`,`role`,`email`,`verified`,`registered_on` FROM users WHERE id=?");
        $q->bindParam(1, $user_id);
        $q->execute();
        $r = $q->fetch(PDO::FETCH_ASSOC);
        return $r;
    }
}
