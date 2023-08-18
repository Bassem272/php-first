<?php 
require_once '../models/user.php';
require_once '../entities/userEntities.php';

class Controllers {
    public function index(){
    $me = new User(  [
        "name" => 'Basssem',
        'email' => 'bassem@gmail.com',
        'city' => '23 alamal'

    ]  ) ;
    $jsonOptions = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;
    $jsonOutput = json_encode($me, $jsonOptions);
    header('Content-Type: application/json');
    echo $jsonOutput;
    


    }
    public function add ($request){
        $user = new User([
            'name'=>'John',
            'email'=>'john@example.com',
            'city'=>'San Francisco',
        ]);
        $newUser = userEntity :: addUser($user);
        $jsonOptions = JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE;
        $jsonOutput = json_encode($newUser,$jsonOptions);
        header('Content-Type: application/json');
        echo $jsonOutput;

        
    }
public function profile(){
    $user = new User([
        'name' => 'armada',
        'email' => 'armada@yahoo.com',
        'city' => 'san Francisco',
        'bio_ar'=> "ةش سيشتمسبشت",
        'bio_en' =>'this is another day in the world',
    ]);
    extract(['archive' =>$user]);
    require_once '../views/profile.php';


}
public function friends(){
    $filePath = 'F:/phpnew/storage/myFriends.csv';
    echo $filePath;
    echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.'/n';

    // open the file
    $file = fopen($filePath, 'r+');
    echo print_r($file);
    echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.'/n';

    if( filesize($filePath)){
        $content = fread($file, filesize($filePath));
        echo print_r($content);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.'/n';

    }else{
        $content = null;
        echo print_r($content);
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.'/n';

    }
    $arr = rtrim($content, "\r\n");
    echo print_r(   $arr );
    echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>/n';

    $dataArr = explode("\n", $arr);
    echo print_r($dataArr   );
    echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>/n';
    $friends = [];
    foreach($dataArr as $friend){
        $newData = explode(",", $friend);
        $friends[] = [
            'name' => $newData[0],
            'email' => $newData[1],
            'city' => $newData[2]
        ];

    }
    echo "\n"; 
    echo json_encode($friends) . "\n";;

    $newFriend = [
        'name' => 'Mahmoud Kassem',
        'email' => 'mahmoud@example.com',
        'city' => 'Alexandria',
        'bio_en' => 'I am a web developer',
        'bio_ar' => 'أنا مطور ويب',
      ];
      
      $datao = implode(',', $newFriend) . "\n";
      fwrite($file, $datao); // write the data
      fclose($file); // close the file
  
      header('Content-Type: application/json');
      echo json_encode($friends);
}
}