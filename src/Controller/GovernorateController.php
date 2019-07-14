<?php

namespace App\Controller;

use App\Entity\Governorate;
use App\Form\GovernorateType;
use App\Repository\GovernorateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dashboard/governorate")
 */
class GovernorateController extends AbstractController
{
    /**
     * @Route("/", name="governorate_index", methods={"GET"})
     */
    public function index(GovernorateRepository $governorateRepository): Response
    {
        return $this->render('governorate/index.html.twig', [
            'governorates' => $governorateRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="governorate_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $governorate = new Governorate();
        $form = $this->createForm(GovernorateType::class, $governorate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($governorate);
            $entityManager->flush();

            return $this->redirectToRoute('governorate_index');
        }

        return $this->render('governorate/new.html.twig', [
            'governorate' => $governorate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="governorate_show", methods={"GET"})
     */
    public function show(Governorate $governorate): Response
    {
        return $this->render('governorate/show.html.twig', [
            'governorate' => $governorate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="governorate_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Governorate $governorate): Response
    {
        $form = $this->createForm(GovernorateType::class, $governorate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('governorate_index', [
                'id' => $governorate->getId(),
            ]);
        }

        return $this->render('governorate/edit.html.twig', [
            'governorate' => $governorate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="governorate_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Governorate $governorate): Response
    {
        if ($this->isCsrfTokenValid('delete' . $governorate->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($governorate);
            $entityManager->flush();
        }

        return $this->redirectToRoute('governorate_index');
    }
}
