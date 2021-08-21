<?php
if( isset( $_POST['file'] ) ) {
$fileForDelete = $_POST['file'];
unlink($fileForDelete);
echo "DELETE FILE-".$fileForDelete;

}