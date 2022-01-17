<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


class ProductController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $rep = $entityManager->getRepository(Product::class);
    public function index(): Response
    {
        $rep = $this->getDoctrine()->getRepository(Product::class);
        $products = $rep->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/product/show/{id}", name="product_show")
     */
    public function product(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $rep = $entityManager->getRepository(Product::class);
    public function product(int $id): Response
    {
        $rep = $this->getDoctrine()->getRepository(Product::class);
        $product = $rep->find($id);

        return $this->render('product/product.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/product/new", name="product_new")
     */
    public function new(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProductType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();

            $attachment = $form->get('img')->getData();
            $originalFilename = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$attachment->guessExtension();

            try {
                $attachment->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                throw new FileException($e);
            }

            $product->setImg($newFilename);

            $entityManager = $doctrine->getManager();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_new');
        }

        return $this->render('product/product_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
