<?php

$kalimat = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

function toLow($kalimat) {
	return strtolower($kalimat);
}
function toUp($kalimat) {
	return strtoupper($kalimat);
}
function uc_first($kalimat) {
	return ucfirst($kalimat);
}
function lc_first($kalimat) {
	return lcfirst($kalimat);
}

echo "1. Awal kecil, lainnya besar : <br> ",lc_first(toUp($kalimat));
echo "<br><br> 2. Awal Besar, lain kecil : <br>",uc_first(toLow($kalimat));
echo "<br><br> 3. Fungsi to lowercase : <br> ",toLow($kalimat);
echo "<br><br> 4. Fungsi to uppercase : <br>",toUp($kalimat);


?>