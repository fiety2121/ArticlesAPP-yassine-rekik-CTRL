<?php
// tests/ArticleTest.php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Article.php';

class ArticleTest extends TestCase
{
    public function testGetTitle()
    {
        $article = new Article("Laptop", 1200);
        $this->assertEquals("Laptop", $article->getTitle());
    }

    public function testGetPrice()
    {
        $article = new Article("Laptop", 1200);
        $this->assertEquals(1200, $article->getPrice());
    }

    public function testSetPrice()
    {
        $article = new Article("Laptop", 1200);
        $article->setPrice(1500);
        $this->assertEquals(1500, $article->getPrice());
    }
}
