
<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
 
echo "<br><br> 2. "; 
    $date = str_replace('-', '/', $date);
  
    echo "The value of \$date in Y/M/D format: ".$date."<br>";
 
echo "<br> 3. \$date compared to \$tar : ";     
    if ($date > $tar) {
      echo "The Future"; }
    else if($date < $tar) {
      echo "The Past";
    }else{
      echo"Ooops";  }
      
echo "<br>";
echo "<br> 4. "; 
    $last = 0;
    $post = array();
    while (($last = strpos ($date, "/", $last)) !== false) {
     $post[] = $last;
     $last = $last + strlen("/");
   }
   
   echo "Positions of / in \$date : " ;
   foreach ($post as $pos) {
    echo $pos. " ";
    }
    
echo "<br>";      
echo "<br> 5. ";  
  $worddate =  explode('/', $date);
  echo "Number of words in \$date : "; 
  print_r(count($worddate));
  
  
echo "<br>"; 
echo "<br> 6. "; 
  $length = strlen($date);
  echo "Length of \$date : ".$length;
  
echo "<br>"; 
echo "<br> 7. ";   
  echo "ASCII value of \$date : ";
  echo ord($date) ;
  
echo "<br>";  
echo "<br> 8. ";  
 
  $lasttwo = substr($date, -2);
  echo "Last two words in \$date : " .$lasttwo;
  
echo "<br>";    
echo "<br> 9. ";  
   echo "Date Array : ";
    print_r(explode("/",$date));
    
 echo "<br>";  
 echo "<br> 10. Leap Year <br>";  
 
$datearray = explode("," , $year);
foreach ($year as $datearray) {
  if ((($datearray % 4) == 0) && ((($datearray % 100) != 0) || (($datearray % 400) == 0))) {
  echo  $datearray. ": True |"; }
  else {
  echo $datearray. ": False |"; 
  }
}
    
?>