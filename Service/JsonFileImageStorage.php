<?php

class JsonFileImageStorage implements ImageStorageInterface
{
    private $filename;

    public function __construct($jsonFilePath)
    {
        $this->filename = $jsonFilePath;
    }

    public function fetchAllImagesData()
    {
        $jsonContents = file_get_contents($this->filename);

        return json_decode($jsonContents, true);
    }

    public function Load($id)
    {
        $images = $this->fetchAllImagesData();

        foreach ($images as $image) {
            if ($image['img_id'] == $id) {
                return $image;
            }
        }

        return null;
    }
}
