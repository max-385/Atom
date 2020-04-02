<?php

namespace Factory;


use Entity\Page;

class PageFactory
{
    public function createPage(array $data): Page
    {
        $page = new Page();
        $page->setId($data['id']);
        $page->setLabel($data['label']);
        $page->setTitle($data['title']);
        $page->setBody($data['body']);
        $page->setUserId($data['user_id']);
        $page->setHeader($data['header']);

        return $page;
    }
}