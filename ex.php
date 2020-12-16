$exp_date=$row[11];
$today_date=date('Y/m/d');
$exp=strtotime($exp_date);
$td=strtotime($today_date);
if($td<$exp)
{
  echo "<script> window.location.assign('track.php'); </script>";
}
else
{ 
  echo "<script> alert('Enter Correct Tracking Number'); </script>";
  echo "<script> window.location.assign('tracking.php'); </script>";
}