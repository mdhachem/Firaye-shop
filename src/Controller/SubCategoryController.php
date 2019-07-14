<?php

namespace App\Controller;

use App\Entity\SubCategory;
use App\Form\SubCategoryType;
use Doctrine\DBAL\DBALException;
use App\Repository\SubCategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/dashboard/sub/category")
 */
class SubCategoryController extends AbstractController
{
    /**
     * @Route("/", name="sub_category_index", methods={"GET"})
     */
    public function index(SubCategoryRepository $subCategoryRepository): Response
    {
        return $this->render('sub_category/index.html.twig', [
            'sub_categories' => $subCategoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sub_category_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $subCategory = new SubCategory();
        $form = $this->createForm(SubCategoryType::class, $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subCategory);
            $entityManager->flush();

            return $this->redirectToRoute('sub_category_index');
        }

        return $this->render('sub_category/new.html.twig', [
            'sub_category' => $subCategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sub_category_show", methods={"GET"})
     */
    public function show(SubCategory $subCategory): Response
    {
        return $this->render('sub_category/show.html.twig', [
            'sub_category' => $subCategory,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sub_category_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SubCategory $subCategory): Response
    {
        $form = $this->createForm(SubCategoryType::class, $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sub_category_index', [
                'id' => $subCategory->getId(),
            ]);
        }

        return $this->render('sub_category/edit.html.twig', [
            'sub_category' => $subCategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sub_category_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SubCategory $subCategory): Response
    {
        if ($this->isCsrfTokenValid('delete' . $subCategory->getId(), $request->request->get('_token'))) {
            try {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($subCategory);
                $entityManager->flush();
            } catch (\Doctrine\DBAL\DBALException $e) {
                $this->addFlash("error", "This Sub Category can't remove !! it's have a child !!");
            }
        }

        return $this->redirectToRoute('sub_category_index');
    }
}
