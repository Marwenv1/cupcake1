<?php


namespace App\Controller;


use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationJson extends AbstractController
{


    /**
     * @Route("/rec", name="rec")
     */
    public function AffAction()
    {
        $tasks = $this->getDoctrine()->getManager()->getRepository(Reclamation::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }
}
