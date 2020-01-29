<?php


namespace App\Controller;



use App\Repository\HotelsRepository;
use App\Service\DateCalculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    private const HOTEL_OPENED=1956;

    public function index(DateCalculator $dateCalculator, LoggerInterface $logger, HotelsRepository $hotelsRepository){

//        $logger->info('Anasayfa req');

        $hotels = $hotelsRepository->findAllBelowPrice(1000);

        $diffYear = $dateCalculator->yearsdiff(self::HOTEL_OPENED);

//        return new Response('hey');
//        return $this->json(['hey' =>['a' => 'b']]);
      return  $this->render('index.html.twig', ['year' => $diffYear, 'hotels' => $hotels]);
    }
}