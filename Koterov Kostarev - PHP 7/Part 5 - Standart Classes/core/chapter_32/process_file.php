<?php

echo "<h4>Process POST data</h4>";

if( isset($_POST['name']) )
{
    $form = [];
    $form[] = $_POST['name'];
    $form[] = $_POST['passwd'];

    $str = implode(" ", $form);

    echo $str."<br/>";
}
else
{
    echo "<h5>There is no data</h5>";
}