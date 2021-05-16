<?php
stream_set_blocking(STDIN, 0);
$csv_ar = fgetcsv(STDIN);
if (is_array($csv_ar)){
  print "CVS on STDIN\n";
} else {
  print "Look to ARGV for CSV file name.\n";
}
?>