<?php
require_once("db_connect");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = db_connect();
    }

    /**
     * 本のタイトル情報の取得
     *
     * @param 
     * @return array $title 本のタイトルの情報
     */
    public function getTitleData(){
        $gettitles_sql = "SELECT * FROM books limit 1";
        $users_data = $this->pdo->query($gettitles_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        $post_data = $this->pdo->query($getposts_sql);
        return $post_data;
    }
}