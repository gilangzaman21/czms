<!--
Author : Hari Prasetyo
Website : harviacode.com
Create Date : 08/05/2015

You may edit this code, but please do not remove original information. Thanks :D
-->
<?php

$path = "../application/views/protected/".$table."/" . $list_file;
$dirpath = "../application/views/protected/".$table."/";
        
$createList = fopen($path, "w") or die("Unable to open file!");

$result2 = mysql_query("SELECT COLUMN_NAME,COLUMN_KEY FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database' AND TABLE_NAME='$table' AND COLUMN_KEY = 'PRI'");
$row = mysql_fetch_assoc($result2);
$primary = $row['COLUMN_NAME'];

$string = "
<!-- begin col-12 -->
<div class=\"col-md-12\">
    <div class=\"panel panel-inverse\">
        <div class=\"panel-heading\">
            <div class=\"panel-heading-btn\">
                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-default\" data-click=\"panel-expand\"><i class=\"fa fa-expand\"></i></a>
                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-success\" data-click=\"panel-reload\"><i class=\"fa fa-repeat\"></i></a>
                <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-warning\" data-click=\"panel-collapse\"><i class=\"fa fa-minus\"></i></a>
            </div>
            <h4 class=\"panel-title\">".strtoupper($table)."</h4>
        </div>
        <div class=\"row\">
            <div style=\"margin:10px;padding:10px;\">
                <?php echo anchor(site_url('protected/".$controller."/create'),'Tambah Data', 'class=\"btn btn-primary\"'); ?>
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
        <table id=\"data-table\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>No</th>";

$result2 = mysql_query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database' AND TABLE_NAME='$table' AND COLUMN_KEY <> 'PRI'");
if (mysql_num_rows($result2) > 0)
{
    while ($row1 = mysql_fetch_assoc($result2))
    {
        $string .= "\n\t\t<th>" . strtoupper($row1['COLUMN_NAME']) . "</th>";
    }
}
$string .= "\n\t\t<th>ACTION</th>
            </tr>";


$string .=  "
                
        </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end col-10 -->

<script type=\"text/javascript\" charset=\"utf-8\">
    
    var handleDataTableCombinationSetting = function() {
    \"use strict\";
    if (\$(\"#data-table\").length !== 0) {
        if (\$(window).width() >= 767) {
            var e = \$(\"#data-table\").DataTable({
                ajax: \"<?php echo base_url('protected'); ?>/".$controller."/getJson\",
                dom: 'TRC<\"clear\">lfrtip',
                tableTools: {
                    sSwfPath: \"<?php echo base_url('assets'); ?>/plugins/DataTables/swf/copy_csv_xls_pdf.swf\"
                },
                lengthMenu: [10, 20, 30, 40, 50, 100]
            });
        } else {
            var e = $(\"#data-table\").DataTable({
                ajax: \"<?php echo base_url('protected'); ?>/".$controller."/getJson\",
                dom: '<\"clear\">frtip',
                lengthMenu: [10, 20, 30, 40, 50, 100]
            })
        }
    }
    };
    var TableManageCombine = function() {
    \"use strict\";
    return {
        init: function() {
            handleDataTableCombinationSetting()
        }
    }
    }()
    

</script>";


fwrite($createList, $string);
fclose($createList);

$list_res = "<p>" . $path . "</p>";
?>