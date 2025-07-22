<?php
class Redirect extends url{

    public function to($location){
        header("Location:" . $this->base_url() . "/" . $location);
    }
    public function back(){
        header("Location:" .$_SERVER['HTTP_REFERER']);
    }
    
}
?>