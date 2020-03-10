<?php
class Nature extends AbstractImageInfo
{
          private $type;
          private $family;
          private $animal;

          /**
           * Get the value of type
           */ 
          public function getType()
          {
                    return $this->type;
          }

          /**
           * Set the value of type
           *
           * @return  self
           */ 
          public function setType($type)
          {
                    $this->type = $type;

                    return $this;
          }

          /**
           * Get the value of family
           */ 
          public function getFamily()
          {
                    return $this->family;
          }

          /**
           * Set the value of family
           *
           * @return  self
           */ 
          public function setFamily($family)
          {
                    $this->family = $family;

                    return $this;
          }

          /**
           * Get the value of animal
           */ 
          public function getAnimal()
          {
                    return $this->animal;
          }

          /**
           * Set the value of animal
           *
           * @return  self
           */ 
          public function setAnimal($animal)
          {
                    $this->animal = $animal;

                    return $this;
          }
}