<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinController extends AbstractController
{
    /**
     * @Route("/", name="pins")
     */
    public function index(PinRepository $repo): Response
    {
        return $this->render('pins/index.html.twig', [ 'pins' => $repo->findAll()]);
    }
}
