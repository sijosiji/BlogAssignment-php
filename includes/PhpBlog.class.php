<?php
include_once dirname(__FILE__) . '/Article.Class.php';

class PhpBlog {
    private $allBlogs = array();

    function __construct($jsonFilePath = '') {
        if(file_exists($jsonFilePath)) {
            $jsonString = file_get_contents($jsonFilePath);
            $jsonObject = json_decode($jsonString);
            if(is_array($jsonObject->articles)) {
                $this->allBlogs = $jsonObject->articles;
            } else {
                echo '<p> Warning! cannot parse json file!</p>';
            }
        } else {
            echo '<p> Warning! json file doesn\'t exist.</p>';
        }
    }

    public function output() {
        if(is_array($this->allBlogs) && !empty($this->allBlogs)) {
            echo '<h2>PHP Blog Article Contents</h2><ul type="circle">';
            foreach($this->allBlogs as $blog) {
                $newArticle = new Article($blog->id, $blog->title, $blog->content);
                echo '<li>' . $newArticle->output() . '</li>';
            }
            echo '</ul>';
        }
    }
}
?>