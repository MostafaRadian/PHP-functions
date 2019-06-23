<html>
<head>
  <title> Tryout </title>
</head>
<body>
    <?php
     error_reporting(0);
     include_once("Assignment_3_part_1.php");

    $data=array(1,100,8,13,20,0);
    echo "the set of number: <br>";
    for($i=0;$i<6;$i++)
        echo $data[$i],"<br>";

    echo "<br>","<hr>";

    echo " Set after being sorted: <br>";
    sortit($data,6);

    echo "<br>","<hr>";

    $max= maxi($data,6);
    $min= mini($data,6);
    echo " The minimum number is: ",$min,"<br>","<br>"," The maximum number is: ",$max;

    echo "<br>","<hr>";

    echo " the submission of both numbers is: ",cal($max,'+',$min),'<br>';
    echo " the multiblication of both numbers is: ",cal($max,'*',$min),'<br>';
    echo " the subtraction of both numbers is: ",cal($max,'-',$min),'<br>';
    echo " the division of both numbers is: ",cal($max,'/',$min),'<br>';
    echo "Maximum powered by minimum: ",pw($max,$min);

    echo "<br>","<br>","<hr>";

    $user1="Mostafa Radian";$user2="Morgain Freeman";$user3="Nigal Walker";$user4="Akio Humaro";

    $pass1=1234; $pass2=5678; $pass3=2018; $pass4=2020;

    $info=array(
                array('Username'=> $user1 , 'Password'=> $pass1),
                array('Username'=> $user2 , 'Password'=> $pass2),
                array('Username'=> $user3 , 'Password'=> $pass3),
                array('Username'=> $user4 , 'Password'=> $pass4)
    );
    $nam_tar="Mostafa Radian";
    search_name($info,4,$nam_tar);
    // $user="<input type='text' value='username'>";
    // $pass="<input type='password' value='password'>";
    echo "<br>","<br>";
    $pass_tar=1234;
    search_pass($info,4,$pass_tar);

    echo "<hr>";

    Dimond(10,90);
    ?>
</body>
</html>
