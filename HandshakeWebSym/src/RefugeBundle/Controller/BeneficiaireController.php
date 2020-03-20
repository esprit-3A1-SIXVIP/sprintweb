<?php

namespace RefugeBundle\Controller;

use RefugeBundle\Entity\Beneficiaire;
use RefugeBundle\Form\BeneficiaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Beneficiaire controller.
 *
 */
class BeneficiaireController extends Controller
{
    /**
     * Lists all beneficiaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $beneficiaires = $em->getRepository('RefugeBundle:Beneficiaire')->findAll();

        return $this->render('@Refuge/Beneficiaire/index.html.twig', array(
            'beneficiaires' => $beneficiaires,
        ));
    }

    /**
     * Creates a new beneficiaire entity.
     *
     */
    public function newAction(Request $request)
    {
        $beneficiaire = new Beneficiaire();
        $form=$this->createForm(BeneficiaireType::class,$beneficiaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($beneficiaire);
            $em->flush();

            return $this->redirectToRoute('beneficiaire_show', array('beneficiaireid' => $beneficiaire->getBeneficiaireid()));
        }

        return $this->render('@Refuge/Beneficiaire/new.html.twig', array(
            'beneficiaire' => $beneficiaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a beneficiaire entity.
     *
     */
    public function showAction(Beneficiaire $beneficiaire)
    {
        $deleteForm = $this->createDeleteForm($beneficiaire);

        return $this->render('@Refuge/Beneficiaire/show.html.twig', array(
            'beneficiaire' => $beneficiaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing beneficiaire entity.
     *
     */
    public function editAction(Request $request,$beneficiaireid)
    {
        $beneficiaire=$this->getDoctrine()->getRepository(Beneficiaire::class)->find($beneficiaireid);
        $deleteForm = $this->createDeleteForm($beneficiaire);
        $editForm = $this->createForm('RefugeBundle\Form\BeneficiaireType', $beneficiaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('beneficiaire_edit', array('beneficiaireid' => $beneficiaire->getBeneficiaireid()));
        }

        return $this->render('@Refuge/Beneficiaire/edit.html.twig', array(
            'beneficiaire' => $beneficiaire,
            'edit_form' => $editForm->createView(),
           'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a beneficiaire entity.
     *
     */
    public function deleteAction(Request $request, $beneficiaireid)
    {
        $em = $this->getDoctrine()->getManager();
        $beneficiaire=$em->getRepository(Beneficiaire::class)->find($beneficiaireid);
        $form = $this->createDeleteForm($beneficiaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->remove($beneficiaire);
            $em->flush($beneficiaire);
        }

        return $this->redirectToRoute('beneficiaire_index');
    }

    /**
     * Creates a form to delete a beneficiaire entity.
     *
     * @param Beneficiaire $beneficiaire The beneficiaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Beneficiaire $beneficiaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('beneficiaire_delete', array('beneficiaireid' => $beneficiaire->getBeneficiaireid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
