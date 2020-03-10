<?php

interface ImageStorageInterface
{
    /**
     * Returns an array of image arrays, each with the following keys:
     *
     * @return array
     */
    public function Load($id);

}
