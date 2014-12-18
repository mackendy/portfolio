<?php

namespace Mac\PortfolioBundle\Controller;

use Mac\PortfolioBundle\Entity\Post;
use Mac\PortfolioBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $posts = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('MacPortfolioBundle:Post')
                      ->findAll();

        return $this->render('MacPortfolioBundle:Page:list.html.twig',array(
            'posts'=>$posts,
         ));
    }

    public function viewAction(Post $post)
    {

    }

    /**
     * Ajouter un post
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     *
     */
    public function createAction()
    {
        $post = new Post();
        $post->setType(Post::TYPE_PAGE);
        $form = $this->createForm(new PostType(), $post);
        $formHandler = $this->get('mac.post_handler');

        if ($formHandler->process($form)) {
            return $this->redirect( $this->generateUrl('mac_admin_homepage', array('id' => $post->getId())) );
        }

        return $this->render('MacPortfolioBundle:Page:create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Ajouter un post
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     *
     */
    public function updateAction(Post $post)
    {
        $form = $this->createForm(new PostType(), $post);
        $formHandler = $this->get('mac.post_handler');

        if ($formHandler->process($form)) {
            return $this->redirect( $this->generateUrl('mac_admin_homepage', array('id' => $post->getId())) );
        }

        return $this->render('MacPortfolioBundle:Page:create.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
