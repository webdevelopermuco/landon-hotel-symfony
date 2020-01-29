<?php


namespace App\Controller;


use App\Entity\Hotel;
use App\Service\DateCalculator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends  AbstractController
{
    private const HOTEL_OPENED = 1969;

    /**
     * @Route("/{y}", methods={"GET|HEAD"})
     */

    public function home(LoggerInterface $logger, DateCalculator $dateCalculator,Request $request)
    {
        $logger->info('Homepage loaded.');

        $year = $dateCalculator->yearsDifference(self::HOTEL_OPENED);

        $year = $request->query->get('y');

//        echo '<pre>'; print_r($_REQUEST); echo '</pre>';

        $hotels = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->findAllBelowPrice(750);

        $images = [
            ['url' => 'images/hotel/intro_room.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_pool.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_dining.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_attractions.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_wedding.jpg', 'class' => 'hidesm']
        ];

        return $this->render('index.html.twig',
            ['year' => $year, 'images' => $images, 'hotels' => $hotels]
        );
    }

}