<?php
/**
 * Created by PhpStorm.
 * User: niketpathak
 * Date: 27/09/17
 * Time: 15:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="media")
 */
class mediaEntity
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * This field is unused in this tutorial,
     * But it can be used as a foreign key to store the ID of another entity
     * in order to link it to this record/file instance
     * @ORM\Column(type="integer", nullable=true)
     */
    private $res_id = null;

    /**
     * Filename of the asset
     * @ORM\Column(length=40, nullable=false, unique=true)
     * @Assert\NotBlank()
     */
    private $fileName;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getResId()
    {
        return $this->res_id;
    }

    /**
     * @param mixed $res_id
     */
    public function setResId($res_id)
    {
        $this->res_id = $res_id;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

}