<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="books")
 */
class Book {
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;

     /**
     * @ORM\Column(type="string", length=100)
     */
     private $name;

     /**
     * @ORM\Column(type="string", length=100)
     */
     private $autor;

     /**
     * @ORM\Column(type="string", length=100)
     */
     private $genre;

      /**
     * @ORM\Column(type="text")
     */
     private $description;

     /**
     * @ORM\Column(type="boolean", nullable=true)
     */
     private $published = false;

     /**
     * @ORM\Column(type="text")
     */
     private $img;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Book
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Book
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Book
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Book
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
