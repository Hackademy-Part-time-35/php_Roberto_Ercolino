<?php

include("class.php");

class Post
{
    //creazione della classe per comporre
    public $title;
    public $category;
    public $tag;

    public function __construct($title, $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }
}

class PostSport extends Sport
{
    //passo la classe come riferimento
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->getMyCategory();
    }

    public function getMyCategory()
    {
        //prendo le variabili attraverso la classe post
        echo "il Post con titolo {$this->post->title}, della categoria {$this->post->category}, con tag {$this->post->tag}\n";
    }
}

$post = new Post("Mondiali", "Sport", "SP");
$postSport = new PostSport($post);

