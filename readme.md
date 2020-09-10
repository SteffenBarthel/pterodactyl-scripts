### fix ssl issue
Download the latest cacert.pem from https://curl.haxx.se/ca/cacert.pem
<br>
Add the following line to php.ini:
<br>
curl.cainfo="/path/to/downloaded/cacert.pem"