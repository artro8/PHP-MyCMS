<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="panel panel-default">
            <div class="panel-heading">Add new Image</div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data"  name="form">
                    <p align="center">Wysyłanie plików na serwer. </p>
                    <table class="table table-bordered">
                        <tr>
                            <th width="444" scope="row"><input name="plik" type="file" size="50"/>
                                <input name="max_file_size" type="hidden" value="1048576" /></th>
                        </tr>
                        <tr>
                        <div class="dropdown">
                            <h4>Filter</h4>
                            <select class="dropdown-select-version select" name="options">
                                <option name="products" value="products">Our product </option>
                                <option name="marking" value="marking">Marking</option>
                                <option name="identification" value="identification">Identification</option>
                            </select>
                        </div>
                        </tr>
                        <tr>
                            <th scope="row"><input value="Wyślij plik" type="submit" name="submit" /> </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="panel panel-default">
            <div class="panel-heading">List</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                        <tr >
                            <th class="text-center">
                                Image Preivew
                            </th>
                            <th class="text-center">
                                Name  
                            </th>
                            <th class="text-center">
                                Type filter
                            </th>
                            <th class="text-center">
                                Edit/Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody style="height: 50px;">
                        <?php 
                                        global $CMS;
                                        $CMS->Content->displayImage(); 
                                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




