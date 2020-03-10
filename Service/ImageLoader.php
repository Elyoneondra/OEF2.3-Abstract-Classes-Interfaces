<?php
class ImageLoader
{
    private $DBM;

    public function __construct( DBManager $DBM)
    {
        $this->DBM = $DBM;
    }

    public function Load( $id = null )
    {
        $images = array();

        $sql = "select * from images";
        if ( $id > 0 ) $sql .= " where img_id=$id";

        $data = $this->DBM->GetData($sql);
        foreach ( $data as $row )
        {
          if ($row['img_type'] == 'City' ) {
                    $image = new City($row['img_title']);
                    $image->setCountry($row['img_country']);
                    $image->setContinent($row['img_continent']);
          } else {
                    $image = new Nature($row['img_title']);
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