
<?php

class userEntity {
    public static $users= [];

    public function getAll(){
        // return all users
        return self::$users;

    }
    public function getUser ($id) {
        return array_filter(self::$users,function ($user) use ($id) {
            return $user['id'] == $id;
        });
    }

    public static function addUser ($user) {
        $last = end (self :: $users) ['id'] ?? 1;
        $user->id = $last+1;
        self ::$users[] = $user;
        return $user;
}


}