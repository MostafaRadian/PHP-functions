<?php
function pw($num1,$num2)
{
  $m=1;
  for($i=0;$i<$num2;$i++)
      $m*=$num1;

    return $m;
}

function cal($num1,$oper,$num2)
{
  switch($oper)
  {
    case '+':
      echo $num1+$num2;
      break;
    case '-':
      echo $num1-$num2;
      break;
    case '/':
      if($num2==0)
      {
           echo " Error can't divide by zero.";
           break;
       }
      else
      {
        echo $num1/$num2;
        break;
      }
    case '*':
        echo $num1*$num2;
        break;
    default:
       echo "Unexpected error.";

}
}


function  maxi($nums,$num)
{
  $maxi=$nums[0];
  for($i=1;$i<=$num;$i++)
     if($maxi<$nums[$i])
       $maxi=$nums[$i];

   return $maxi;
}

function  mini($nums,$num)
{
  $min=$nums[0];
  for($i=1;$i<=$num;$i++)
     if($min>$nums[$i])
       $min=$nums[$i];

   return $min;
}

function sortit($data,$num)
{
  for($i=0;$i<$num;$i++)

  {
    for($j=$i+1;$j<$num;$j++)
      if($data[$i]>$data[$j])
        {
          $temp=$data[$i];
          $data[$i]=$data[$j];
          $data[$j]=$temp;
        }
  }

    for($i=0;$i<$num;$i++)
        echo $data[$i],"<br>";
}

function search_name($data,$siz,$tar)
{

  for($i=0;$i<$siz;$i++)
    {
      if($tar==$data[$i]['Username'])
        {
          echo "Username: ",$data[$i]['Username'],'<br>',"Password: ",$data[$i]['Password'];
          return 0;
        }
    }
  echo " User data are no were to be found.";

}

function search_pass($data,$siz,$tar)
{

  for($i=0;$i<$siz;$i++)
    if($tar==$data[$i]['Password'])
        {
          echo "Username: ",$data[$i]['Username'],'<br>',"Password: ",$data[$i]['Password'];
          return 0;
        }

  echo " User data are no were to be found.";

}

function Dimond($level,$lev)
{

  for($i=0;$i<$level;$i++)
  {
    echo "<pre>";
    for($j=0;$j<$lev;$j++)
       echo " ";

     $lev--;

     for($c=0;$c<=$i;$c++)
       echo "<b>","* ";

     echo "<br>";
  }

  for($i=0;$i<$level;$i++)
  {
    echo "<pre>";
    for($j=$lev+2;$j>0;$j--)
       echo " ";

     $lev++;

     for($c=$level-1;$c>$i;$c--)
       echo "<b>","* ";

     echo "<br>";
  }
}

 ?>
