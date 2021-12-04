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
}


class listingData
{

    function getListings($id = "")
    {
        include("admin/db.php");
        if ($id == "") {
            $q = $con->prepare("SELECT * FROM listings");
        } else {
            $q = $con->prepare("SELECT * FROM listings WHERE id=?");
            $q->bindParam(1, $id);
        }
        $q->execute();
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
        return ($r);
    }

    function listingAuthor($id)
    {
        include("admin/db.php");
        $q = $con->prepare("SELECT * FROM users WHERE id=?");
        $q->bindParam(1, $id);
        $q->execute();
        $r = $q->fetch(PDO::FETCH_ASSOC);
        return ($r);
    }

    function ratingComment($listing_id)
    {
        include("admin/db.php");
        $q = $con->prepare("SELECT * FROM listings WHERE id=?");
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
    function city($id)
    {
        include("admin/db.php");
        $q = $con->prepare("SELECT * FROM cities WHERE id=?");
        $q->bindParam(1, $id);
        $q->execute();
        return $q->fetch(PDO::FETCH_ASSOC);
    }
}



class fetchData
{
    function getAgents()
    {
        include("admin/db.php");
        $role = "agent";
        $q = $con->prepare("SELECT * FROM users WHERE `role`=?");
        $q->bindParam(1, $role);
        $q->execute();
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
        return $r;
    }
    function getCities()
    {
        include("admin/db.php");
        $q = $con->prepare("SELECT * FROM cities");
        $q->execute();
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
        return $r;
    }
}

class agentData
{
    public function fetchAll()
    {
        include("admin/db.php");
        $role = "agent";
        $q = $con->prepare("SELECT * FROM users WHERE `role`=?");
        $q->bindParam(1, $role);
        $q->execute();
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
        return $r;
    }
    function isVerified($id)
    {
        include("admin/db.php");
        // $role = 'agent';
        // $agentData = $this->fetchAll();
        $q = $con->prepare("SELECT * FROM users WHERE id=?");
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
}
