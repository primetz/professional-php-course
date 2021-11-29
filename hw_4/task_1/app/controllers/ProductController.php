<?php

class ProductController extends Controller
{

    public function index()
    {
        $db = new Db();

        $data = $db->findAll('SELECT * FROM images LIMIT 25');

        $this->render('/homepage/index.twig', [
            'products' => $data
        ]);
    }

    public function product($args)
    {
        $db = new Db();

        $data = $db->find('SELECT * FROM images WHERE id = :id', $args);

        $this->render('/product/index.twig', [
            'product' => $data
        ]);
    }

    public function fetch($args)
    {
        $db =new Db();

        $data = $db->findAll("SELECT * FROM images LIMIT :from, :to", $args);

        echo json_encode($data, JSON_UNESCAPED_SLASHES);
    }
}
