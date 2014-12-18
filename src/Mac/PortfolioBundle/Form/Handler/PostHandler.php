<?php

namespace Neotravel\SuiviBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use Mac\PortfolioBundle\Entity\Post;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * The UniversalHandler.
 * Use for manage your form submitions
 *
 * @author Virgile Vivier
 */
class PostHandler
{
    protected $requestStack;
    protected $om;
    protected $session;

    /**
     * Initialize the handler with the form and the request
     *
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     * @param \Doctrine\Common\Persistence\ObjectManager $om
     * @param \Symfony\Component\HttpFoundation\Session\Session $session
     */
    public function __construct(RequestStack $requestStack, ObjectManager $om, Session $session)
    {
        $this->requestStack = $requestStack;
        $this->om = $om;
        $this->session = $session;
    }

    /**
     * Process form
     *
     * @param \Symfony\Component\Form\Form $form
     * @return boolean
     */
    public function process(Form $form)
    {
        $request = $this->requestStack->getCurrentRequest();
        // Check the method
        if ('POST' == $request->getMethod()) {
            $reflect = new \ReflectionClass($entity);
            $className = $reflect->getShortName();

            $form->handleRequest($request);
            if ($form->isValid()) {
                $entity = $form->getData();
                $new = ($entity->getId()) ? false : true;

                $this->onSuccess($entity);

                if ($new) {
                    /** @todo arriver à passer le nom de l'entité $form->getName() ou quelque chose comme ca au lieu de : l'AUTOCARISTE */
                    $this->session->getFlashBag()->add('success', "Le ". $className ." à bien été crée");
                } else {
                    $this->session->getFlashBag()->add('success', "Le ". $className ." à bien été mis à jour");
                }

                return true;
            } else {
                $this->session->getFlashBag()->add('error', "Le ". $className ." n'a pas pu s'enregistrer, veuillez corriger les erreurs");
            }
        }

        return false;
    }

    protected function onSuccess($entity)
    {
        $this->om->persist($entity);
        $this->om->flush();
    }
}