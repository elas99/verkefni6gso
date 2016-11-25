<?php
// if the form has been submitted, process the input text
if (isset($_POST['putContents'])) {

    // php býr til write.txt ef hún er ekki til, og opnar í write-only mode
    $file = fopen('bobbi.csv', 'w');
    // write the contents
    // The original content is deleted from write.txt and replaced with the new text. The deleted text is gone forever.	
    fwrite($file, $_POST['myndslod']);
    fwrite($file, $_POST['myndheiti']);
    // close the file
    fclose($file);
}
?>