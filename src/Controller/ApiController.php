<?php


namespace App\Controller;

use App\Entity\Hotel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ApiController extends AbstractController implements TokenAuthenticatedController
{

    /**
     * @Route("/api/roomse")
     */

    public function home()
    {
//        echo '<pre>'; print_r($_REQUEST); echo '</pre>';

        $hotels = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->findAll();
        return $this->json(['hotels' => $hotels]);
    }
}