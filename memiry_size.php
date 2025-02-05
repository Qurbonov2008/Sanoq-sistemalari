<?php
// Birliklar
define('KB', 1024);
define('MB', 1024 * KB);
define('GB', 1024 * MB);
define('TB', 1024 * GB);
define('BIT', 8);

echo "1MB = " . (MB / KB) . " KB\n";
echo "989929828 bit = " . (989929828 / (MB * BIT)) . " MB\n";
echo "1GB = " . (GB * BIT) . " bit\n";
echo "321312312312 KB = " . (321312312312 / TB) . " TB\n";
echo "13221221 MB = " . (13221221 * MB) . " bayt\n";
echo "3123213 GB = " . (3123213 * GB * BIT) . " bit\n";
echo "1 GB = " . (GB / KB) . " KB\n";
echo "23 MB = " . (23 * MB * BIT) . " bit\n";
echo "1 b = " . (1 / TB) . " TB\n";
echo "5 KB = " . (5 * KB * BIT) . " bit\n";
echo "123221 KB = " . (123221 / TB) . " TB\n";
echo "8 b = " . (8 / BIT) . " bit\n";
echo "901231 MB = " . (901231 * MB * BIT) . " bit\n";
echo "1213111 b = " . (1213111 / (MB * BIT)) . " MB\n";
echo "213 GB = " . (213 * GB) . " b\n";


/*
1MB = 1024 KB
989929828 bit = 118.00883150101 MB
1GB = 8589934592 bit
321312312312 KB = 0.29223184566217 TB
13221221 MB = 13863455031296 bayt
3123213 GB = 26828195386884096 bit
1 GB = 1048576 KB
23 MB = 192937984 bit
1 b = 9.0949470177293E-13 TB
5 KB = 40960 bit
123221 KB = 1.1206884664716E-7 TB
8 b = 1 bit
901231 MB = 7560073576448 bit
1213111 b = 0.14461410045624 MB
213 GB = 228707008512 b
 */