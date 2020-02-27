<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titletitle", type="string", length=255)
     */
    private $titletitle;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titletitle
     *
     * @param string $titletitle
     *
     * @return Post
     */
    public function setTitletitle($titletitle)
    {
        $this->titletitle = $titletitle;

        return $this;
    }

    /**
     * Get titletitle
     *
     * @return string
     */
    public function getTitletitle()
    {
        return $this->titletitle;
    }
}

