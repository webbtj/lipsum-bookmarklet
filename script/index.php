<?php
	$lipsum = file_get_contents('http://loripsum.net/api/1/plaintext');
	$lipsum = addslashes($lipsum);
	$lipsum = trim($lipsum);
?>
if(document.activeElement){
	if(document.activeElement.tagName.toLowerCase()=='textarea'){
		document.activeElement.value += document.activeElement.value ? ' ' : '';
		document.activeElement.value += '<?php echo $lipsum; ?>';
	}
}
scr = document.getElementById('lipsum-bookmarklet-script');
scr.parentNode.removeChild(scr);