<?php
class City extends AbstactImageInfo
{
          private $country;

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
}