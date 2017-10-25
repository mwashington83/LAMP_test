<?php class Address {
    private $street;
    private $city;
    private $state;
    private $zip;

    public function getStreet() {
        return $this->street;
        }

    public function setstreet($street) {
        $this->street = $street;
    }

    public function getcity() {
        return $this->city;
        }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getstate() {
        return $this->state;
        }

    public function setState($state) {
        $this->state = $state;
    }

    public function getZip() {
        return $this->zip;
        }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function prettyPrint()
    {
        return "$this->street <br />
                 $this->city $this->state $this->zip";
    }
}


?>