<!--
Author : Hari Prasetyo
Website : harviacode.com
Create Date : 08/05/2015

You may edit this code, but please do not remove original information. Thanks :D
-->
<?php
$table_error = '';
$model_res = '';
$controller_res = '';
$list_res = '';
$read_res = '';
$form_res = '';
$page_res = '';

if (isset($_POST['table'])) {
    // include connection 
    require 'lib/config.php';

    $connection = mysql_connect($hostname, $username, $password);
    $select_database = mysql_select_db($database);

    if (!$select_database) {
        die('Pleace check database setting on lib/config.php');
    }

    // get table name
    $table = strtolower(trim($_POST['table']));
    $controller = strtolower(trim($_POST['controller']));
    $model = strtolower(trim($_POST['model']));
    $rules = strtolower(trim($_POST['rules']));
    $versici = "3";
    $jenistabel = "regtable";
    $paginationConfig = isset($_POST['paginationConfig']) ? $_POST['paginationConfig'] : '';

    // cek table in database
    if (mysql_num_rows(mysql_query("SHOW TABLES LIKE '" . $table . "'")) <> 1) {
        // show error
        $table_error = "<p>Table \"" . $table . "\" does not exist</p>";
    } else {
        // setting 
        $model = $model <> '' ? $model : $table . "_model";
        $controller = $controller <> '' ? $controller : $table;
        $list = $table . "_list";
        $read = $table . "_read";
        $form = $table . "_form";

        //filename
        if ($versici == 2) {
            $model_file = $model . ".php";
            $controller_file = $controller . ".php";
        } else {
            $model_file = ucfirst($model) . ".php";
            $controller_file = ucfirst($controller) . ".php";
        }
        $list_file = $list . ".php";
        $read_file = $read . ".php";
        $form_file = $form . ".php";

        require 'lib/createModel.php';
        require 'lib/createController.php';
        require 'lib/createViewForm.php';
        require 'lib/createViewRead.php';

        if ($jenistabel == 'regtable') {
            require 'lib/createViewList.php';
        } else {
            require 'lib/createViewListDatatables.php';
        }
        
        if ($paginationConfig == 'create') {
            require 'lib/createConfigPagination.php';
        }
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Codeigniter CRUD Generator</title>
        <link rel="stylesheet" href="lib/bootstrap.min.css"/>
        <style>
            body{
                padding: 15px;
            }
            p{
                margin-bottom: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-top: 10px">
            <div class="col-md-3">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input onkeyup="setname()" id="table" type="text" name="table" value="<?php echo isset($_POST['table']) ? $_POST['table'] : '' ?>" class="form-control" placeholder="Input Table Name" />
                    </div>
                    <hr style="margin-bottom: 5px; margin-top: 5px">
                    <div class="checkbox">
                        <?php $def_page = isset($_POST['paginationConfig']) ? $_POST['paginationConfig'] : ''; ?>
                        <label>
                            <input type="checkbox" name="paginationConfig" value="create" <?php echo $def_page == 'create' ? 'checked' : '' ?>>
                            Create ../application/config/pagination.php
                        </label>
                    </div>
                    <hr style="margin-bottom: 10px; margin-top: 10px">
                    <div class="form-group">
                        <label>Custom Controller Name</label>
                        <input type="text" id="controller" name="controller" value="<?php echo isset($_POST['controller']) ? $_POST['controller'] : '' ?>" class="form-control" placeholder="Controller Name" />
                    </div>
                    <div class="form-group">
                        <label>Custom Model Name</label>
                        <input type="text" id="model" name="model" value="<?php echo isset($_POST['model']) ? $_POST['model'] : '' ?>" class="form-control" placeholder="Controller Name" />
                    </div>

                    <div class="form-group">
                        <label>Rules</label>
                        <select name="rules" class="form-control" >
                            <option value="super_admin">Super Admin</option>
                            <option value="admin">Administrator</option>
                            <option value="registered_user">Registered User</option>
                        </select>
                    </div>


                    <input type="submit" value="Generate" name="generate" class="btn btn-primary" onclick="javascript: return confirm('This will overwrite the existing files. Continue ?')" />
                </form>
                <?php
                echo $table_error;
                echo $model_res;
                echo $controller_res;
                echo $list_res;
                echo $read_res;
                echo $form_res;
                echo $page_res;
                ?>
            </div>
            <div class="col-md-9">
                <h3 style="margin-top: 0px">Selamat Datang di <a target="_blank" href="http://warnai.co.id">Warnai Content Management</a></h3>
                <p><strong>About :</strong></p>
                <p>
                    Warnai Content Management, Merumakan Content Management System (CMS) Based On Codeigniter, Dengan Mengutamakan Development Environment Bagi Developer
                    Mempermudah dan Mempercepat Developer Membuat System Aplikasi Dengan Fokus Pada Alur Proses Data. dan Juga Sebagai Alat Prototype
                    Untuk Agile Method Development
                </p>
                <small>* Generator CRUD Ini Di Adaptasi Pada Generator <a target="_blank" href="http://harviacode.com"><b>harviacode.com</b></a> </small>
                <p><strong>Bagaimana Cara Bekerja CMS Ini :</strong></p>
                <ul>
                    <li>Ganti Database Setting Pada _crudgenerator/lib/config.php dan Pada Application/config/database.php.</li>
                    <li>Buka http://localhost/project_name/_crudgenerator.</li>
                    <li>Masukan Nama Table Sesuai dengan database yang anda buat.</li>
                    <li>Akan Secara Otomatis Generator Akan Membuat File - File Berikut :
                        <ul>
                            <li>../application/models/protected/tablename_model.php</li>
                            <li>../application/controllers/protected/tablename.php</li>
                            <li>../application/views/protected/tablename_list.php</li>
                            <li>../application/views/protected/tablename_form.php</li>
                            <li>../application/views/protected/tablename_read.php</li>
                            <li>../application/config/pagination.php</li>
                        </ul>
                    </li>
                </ul>
                <p><strong>Important :</strong></p>
                <ul>
                    <li>_crudgenerator ini mempermudah anda pada saat development.</li>
                    <li>Export Database Yang Tertera Pada Paket</li>
                    <li>Hapus folder _crudgenerator ini pada saat proses production.</li>
                    <li>Jangan Lupa Untuk Mengganti Settingan Database.</li>
                    <li>pada application/config/database.php, set <b>hostname</b>, <b>username</b>, <b>password</b> and <b>database</b>.</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>V.1.1 - 21 Juli 2015
                        <ul>
                            <li>Adapted dengan Coloradmin Admin Panel</li>
                            <li>Add client side datatables</li>
                        </ul>

                    </li>
                </ul>

                <p><strong>&COPY; 2015 <a target="_blank" href="http://warnai.co.id">Warnai Kreasi Indonesia</a></strong></p>
            </div>
        </div>
        <script type="text/javascript">
            function setname() {
                var table = document.getElementById('table').value.toLowerCase();
                document.getElementById('controller').value = table;
                document.getElementById('model').value = table + '_model';
            }
        </script>
    </body>
</html>


