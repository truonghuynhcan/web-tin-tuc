<<<<<<< HEAD
<?php
   require_once './functions.php';
   $value=$_POST['value']??"tôi là một người mới mong bạn có thể giuo";
   
  $sql="SELECT * FROM tin WHERE TieuDe like '%".$value."%'  limit 10";
  $result=executeResult($sql);
  if($result!=null){
    $res=[
      'status'=>1,
      'result'=>$result
    ];
  }
  else{
    $res=[
        'status'=>0
      ];
  }
  echo json_encode($res)
=======
<?php
   require_once './functions.php';
   $value=$_POST['value']??"tôi là một người mới mong bạn có thể giuo";
   
  $sql="SELECT * FROM tin WHERE TieuDe like '%".$value."%'  limit 10";
  $result=executeResult($sql);
  if($result!=null){
    $res=[
      'status'=>1,
      'result'=>$result
    ];
  }
  else{
    $res=[
        'status'=>0
      ];
  }
  echo json_encode($res)
>>>>>>> 42f6431163bd0b26445e30a1a28c1de84d5f79a7
?>