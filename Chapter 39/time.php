<?php ## Звернення до серверо точного часу

$curl = curl_init('http://wwv.nist.gov:13');
$curl = curl_exec($curl); // 58363 18-09-02 05:36:43 50 0 0 333.6 UTC(NIST) *
curl_close($curl);