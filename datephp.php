<? $timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
echo date('d-m-Y H:i:s');
?>
