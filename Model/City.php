<?php
class City extends AbstractImageInfo
{
          public $type;
          public $country;
          public $continent;


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
           * Get the value of country
           */ 
          public function getCountry()
          {
                    return $this->country;
          }

          /**
           * Set the value of country
           *
           * @return  self
           */ 
          public function setCountry($country)
          {
                    $this->country = $country;

                    return $this;
          }

          /**
           * Get the value of continent
           */ 
          public function getContinent()
          {
                    return $this->continent;
          }

          /**
           * Set the value of continent
           *
           * @return  self
           */ 
          public function setContinent($continent)
          {
                    $this->continent = $continent;

                    return $this;
          }
}