<?php

namespace Imie\TotoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Imie\TotoBundle\Entity\Job;
use Imie\TotoBundle\Form\jobType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * job controller.
 *
 * @Route("/job")
 */
class JobController extends Controller
{
    /**
     * Lists all job entities.
     *
     * @Route("/", name="imie_job_index")
     * @Method("GET")
     */
    public function indexAction()
    {
    $em = $this->getDoctrine()->getManager();
 
    $entities = $em->getRepository('ImieTotoBundle:Job')->findAll();
 
    return $this->render('ImieTotoBundle:Job:index.html.twig', array(
        'entities' => $entities,
    ));
    }

    /**
     * Creates a new job entity.
     *
     * @Route("/new", name="imie_job_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm('Imie\TotoBundle\Form\jobType', $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('imie_job_show', array('id' => $job->getId()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a job entity.
     *
     * @Route("/{id}", name="imie_job_show")
     * @Method("GET")
     */
  public function showAction($id)
{
    $em = $this->getDoctrine()->getManager();
 
    $entity = $em->getRepository('ImieTotoBundle:Job')->find($id);
 
    if (!$entity) {
        throw $this->createNotFoundException('Unable to find Job entity.');
    }
 
    $deleteForm = $this->createDeleteForm($entity);
 
    return $this->render('ImieTotoBundle:Job:show.html.twig', array(
        'entity'      => $entity,
        'delete_form' => $deleteForm->createView(),
    ));
}

    /**
     * Displays a form to edit an existing job entity.
     *
     * @Route("/{id}/edit", name="imie_job_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, job $job)
    {
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('Imie\TotoBundle\Form\jobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('imie_job_edit', array('id' => $job->getId()));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a job entity.
     *
     * @Route("/{id}", name="imie_job_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, job $job)
    {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('imie_job_index');
    }

    /**
     * Creates a form to delete a job entity.
     *
     * @param job $job The job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(job $job)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imie_job_delete', array('id' => $job->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
