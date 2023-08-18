<?php 
require_once '../utils/traits/trait.php';
class User {
    use localizable;

    public $name;
    public $email;
    public $city;
    public $bio_en;
    public $bio_ar;
    private $localizable = [ 'bio'];

    public function __construct($user= null) {
        if ($user) {
            foreach ($user as $key=>$value) {
                $this->{$key} = $value;

}
        }
    }
}