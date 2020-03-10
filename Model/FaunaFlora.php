<?php
class FaunaFlora extends AbstactImageInfo
{
          private $type;
          private $family;

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
}