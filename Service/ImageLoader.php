<?php
class ImageLoader
{
    private $DBM;
    private $imageStorage;

    public function __construct( DBManager $DBM, ImageStorageInterface $imageStorage)
    {
        $this->DBM = $DBM;
        $this->imageStorage = $imageStorage;
    }

    public function Load( $id = null )
    {

        $imageStorage = $this->imageStorage;
        $data = $imageStorage->Load($id);
        return $data;

    }

}