<?php
//-----------------------------------------------------
// PHP debug code which I used to test page for errors
// This code must be remove when the site is ready for 
// live production.
//-----------------------------------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Batch Class
 */
class Join
{
    /**
     * Unique identifier
     * @var integer
     */
    public $id;

    /**
     * User Name
     * @var string
     */
    public $user_name;

    /**
     * User likes
     * @var string
     */
    public $likes_name;

    /**
     * Get all the get Join data from database
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the Join Data records
     */
    public static function getAllJoin($conn)
    {
        $sql = "SELECT * 
                FROM users
                JOIN users_likes
                on users.id = users_likes.user_id
                JOIN likes
                on users_likes.like_id = likes.id;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get all the get Left Join data from database
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the Left Join Data records
     */
    public static function getAllLeftJoin($conn)
    {
        $sql = "SELECT * 
                FROM users
                LEFT JOIN users_likes
                on users.id = users_likes.user_id
                LEFT JOIN likes
                on users_likes.like_id = likes.id;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
    
   }

   