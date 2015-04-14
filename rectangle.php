<?php
class Rectangle {
    protected $height;
    protected $width;

    public function __construct($height, $width) {
        $this->height = $heigth;
        $this->width  = $width;
    }

    public function area() {
    	return $this->height * $this->width;
	}

	public function perimeter(){
		return ($this->height * 2) + ($this->width * 2);
	}

	public function getWidth(){
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

}

?>