<?php

namespace WA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="WA\BlogBundle\Entity\ArticleRepository")
 */
class Article
{
    public function __construct()
    {
        $this->articleDate=new \DateTime();

    }
    /**
     * @var integer
     *
     * @ORM\Column(name="articleId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $articleId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="articleDate", type="datetime")
     */
    private $articleDate;

    /**
     * @var string
     *
     * @ORM\Column(name="articleTitle", type="string", length=255)
     */
    private $articleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="articleContent", type="text")
     */
    private $articleContent;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="WA\BlogBundle\Entity\Category")
     * @ORM\JoinColumn(name="categoryId" , referencedColumnName="categoryId")
     */
    private $category;





    /**
     * Get articleId
     *
     * @return integer 
     */

    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set articleDate
     *
     * @param \DateTime $articleDate
     * @return Article
     */

    public function setArticleDate($articleDate)
    {
        $this->articleDate = $articleDate;

        return $this;
    }

    /**
     * Get articleDate
     *
     * @return \DateTime 
     */
    public function getArticleDate()
    {
        return $this->articleDate;
    }

    /**
     * Set articleTitle
     *
     * @param string $articleTitle
     * @return Article
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = strtoupper($articleTitle);

        return $this;
    }

    /**
     * Get articleTitle
     *
     * @return string 
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * Set articleContent
     *
     * @param string $articleContent
     * @return Article
     */
    public function setArticleContent($articleContent)
    {
        $this->articleContent = $articleContent;

        return $this;
    }

    /**
     * Get articleContent
     *
     * @return string 
     */
    public function getArticleContent()
    {
        return $this->articleContent;
    }

    /**
     * Set category
     *
     * @param \WA\BlogBundle\Entity\Category $category
     * @return Article
     */
    public function setCategory(\WA\BlogBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \WA\BlogBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
