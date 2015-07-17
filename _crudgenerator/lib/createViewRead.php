<!--
Author : Hari Prasetyo
Website : harviacode.com
Create Date : 08/05/2015

You may edit this code, but please do not remove original information. Thanks :D
-->
<?php

$path = "../application/views/protected/".$table."/" . $read_file;
$dirpath = "../application/views/protected/".$table."/";

$createRead = fopen($path, "w") or die("Unable to open file!");

$result2 = mysql_query("SELECT COLUMN_NAME,COLUMN_KEY FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database' AND TABLE_NAME='$table' AND COLUMN_KEY = 'PRI'");
$row = mysql_fetch_assoc($result2);
$primary = $row['COLUMN_NAME'];

$string = "
<div class=\"panel panel-inverse\" data-sortable-id=\"table-basic-2\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-heading-btn\">
                                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-default\" data-click=\"panel-expand\"><i class=\"fa fa-expand\"></i></a>
                                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-success\" data-click=\"panel-reload\"><i class=\"fa fa-repeat\"></i></a>
                                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-warning\" data-click=\"panel-collapse\"><i class=\"fa fa-minus\"></i></a>
                            </div>
                            <h4 class=\"panel-title\">".strtoupper($table)." Read</h4>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table table-hover\">";

$result2 = mysql_query("SELECT COLUMN_NAME,DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database' AND TABLE_NAME='$table' AND COLUMN_KEY <> 'PRI'");
if (mysql_num_rows($result2) > 0)
{
    while ($row1 = mysql_fetch_assoc($result2))
    {
        $string .= "\n\t    <tr><td>".strtoupper($row1["COLUMN_NAME"])."</td><td><?php echo $".$row1["COLUMN_NAME"]."; ?></td></tr>";
    }
}
$string .= "\n\t    <tr><td></td><td><a href=\"<?php echo site_url('protected/".$controller."') ?>\" class=\"btn btn-default\">Cancel</button></td></tr>";
$string .= "\n\t</table>
                        </div>
                    </div>";


fwrite($createRead, $string);
fclose($createRead);

$read_res = "<p>" . $path . "</p>";
?>