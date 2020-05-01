<?php
class Article {
    public $id = 0;
    public $title = '';
    public $content = '';

    function __construct($id = 0, $title = '', $content = '') {
        if(is_integer($id) && !empty($id)) {
            $this->id = $id;
        }
        if(is_string($title) && !empty($title)) {
            $this->title = $title;
        }
        if(is_string($content) && !empty($content)) {
            $this->content = $content;
        }
    }

    public function output() {
        $output = '';
        ob_start();
        ?>
        <h3> ID: <?php echo $this->id ?></h3>
        <p> TITLE: <?php echo $this->title ?></p>
        <p> CONTENT: <?php echo $this->content ?></p>
        <?php
        $output = ob_get_clean();
        return $output;
    }
}
?>