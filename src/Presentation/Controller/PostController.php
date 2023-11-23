<?php

declare(strict_types=1);

namespace App\Presentation\Controller;

use App\Application\UseCaseInterface\FindAllPostsUseCaseInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
	public function __construct(private FindAllPostsUseCaseInterface $findAllPostsUseCase)
	{
	}

    #[Route(path: "/api/v1/posts", name: "posts_index", methods: ["GET"])]
    public function index(): JsonResponse
    {
        return $this->json($this->findAllPostsUseCase->execute());
    }


    #[Route(path: "/api/v1/posts/{slug}", name: "posts_show", methods: ["GET"])]
    public function show(string $slug): JsonResponse
    {
        return $this->json([
            'post' => true,
            'slug' => $slug
        ]);
    }
}
