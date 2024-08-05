<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiHikingController extends AbstractController
{
    /**
     * @Route("/api/hikes", name="api_hikes", methods={"GET"})
     */
    public function getHikes(): JsonResponse
    {
        $hikes = [
            [
                'title' => 'Les Sources du Verdon',
                'location' => 'Provence-Alpes-Côte d\'Azur',
                'description' => 'A beautiful hike through the Verdon Gorge.',
                'image' => 'https://example.com/image1.jpg'
            ],
            [
                'title' => 'La Cabane de la Sestrière',
                'location' => 'Alpes-de-Haute-Provence',
                'description' => 'Explore the stunning mountain scenery.',
                'image' => 'https://example.com/image2.jpg'
            ],
            // Add more data here...
        ];

        return $this->json($hikes);
    }
}
