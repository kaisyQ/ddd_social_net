<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\AbstractUserUniqueProperty;
use App\Domain\ValueObject\Id;
use App\Domain\ValueObject\Password;
use App\Domain\ValueObject\Username;

class User
{
    private Id $id;
    private Username $username;
    private AbstractUserUniqueProperty $userUniqueProperty;
    private Password $password;

    /**
     * @var Post[] $posts
     */
    private array $posts = [];

    /**
     * @param Post[] $posts
     */
    public function __construct(
        Username $username,
        AbstractUserUniqueProperty $userUniqueProperty,
        Password $password,
        array $posts = []
    ) {
        $this->id = new Id();
        $this->username = $username;
        $this->userUniqueProperty = $userUniqueProperty;
        $this->password = $password;
        $this->posts = $posts;
    }

    public function getUsername(): Username
    {
        return $this->username;
    }

    public function setusername($username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getId(): Id
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUserUniqueProperty(): AbstractUserUniqueProperty
    {
        return $this->userUniqueProperty;
    }
    public function setUserUniqueProperty($userUniqueProperty): self
    {
        $this->userUniqueProperty = $userUniqueProperty;

        return $this;
    }

    public function getPassword(): Password
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Post[]
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param Post[] $posts
     * @return self
     */
    public function setPosts(array $posts): self
    {
        $this->posts = $posts;

        return $this;
    }
}
