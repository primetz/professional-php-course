<?php

class GalleryController extends Controller
{

    public function index()
    {
        $db = new Db();

        $data = $db->findAll('SELECT * FROM images');

        $this->render('/homepage/index.twig', array('data' => $data));
    }

    public function photo($args)
    {
        $db = new Db();

        $data = $db->find('SELECT * FROM images WHERE id = :id', $args);

        $this->render('/photo/index.twig', array('data' => $data));
    }
}
