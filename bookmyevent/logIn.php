  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');


  $user=$_REQUEST['postName'];
  $pass=$_REQUEST['postPassword'];

  $sql="select userId,status from user where  userName ='$user' and password='$pass';";

  $account_type="";

  $res=$conn->query($sql);
  if (($data=$res->fetch_object())) {
    $_SESSION['user']= $data->userId ;
    $account_type=$data->status;


    if (  $account_type ==="101") {
      echo "1";
    }else if ($account_type ==="202"){
      echo "2";
    }
  }else{
    echo "3";
  }

  ?>