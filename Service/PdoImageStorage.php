<?php

class PdoImageStorage implements ImageStorageInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /*public function fetchAllImagesData()
    {
        $statement = $this->pdo->prepare('SELECT * FROM images');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchSingleImageData($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM images WHERE id = :id');
        $statement->execute(array('id' => $id));
        $imageArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$imageArray) {
            return null;
        }

        return $imageArray;
    }*/

    public function Load( $id = null )
    {
        $images = array();

        $sql = "select * from images";
        if ( $id > 0 ) $sql .= " where img_id=$id";

        $stm = $this->pdo->prepare($sql);
        $stm->execute();

        $data = $stm->fetchAll(PDO::FETCH_ASSOC);

        foreach ( $data as $row )
        {
            if ($row['img_type'] == 'City' ) {
                $image = new City();
                $image->setCountry($row['img_country']);
                $image->setContinent($row['img_continent']);
            } else {
                $image = new Nature();
                $image->setFamily($row['img_family']);
                $image->setAnimal($row['img_animal']);
            }

            $image->setId( $row['img_id'] );
            $image->setFileName( $row['img_filename'] );
            $image->setTitle( $row['img_title'] );
            $image->setWidth( $row['img_width'] );
            $image->setHeight( $row['img_height'] );
            $image->setType($row['img_type']);

            $images[] = $image;
        }

        return $images;
    }
}
