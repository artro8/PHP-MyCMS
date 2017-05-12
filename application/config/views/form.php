                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <h3>Dodaj plik pdf</h3>
                        <form action="" method="post" enctype="multipart/form-data"  name="form">
                            <p align="center">Wysyłanie plików na serwer. </p>
                            <table class="table table-bordered">
                              <tr>
                                <th width="444" scope="row"><input name="plik" type="file" size="50"/>
                                  <input name="max_file_size" type="hidden" value="1048576" /></th>
                              </tr>
                              <tr>
                                <th scope="row"><input value="Wyślij plik" type="submit" name="submit" /> </th>
                              </tr>
                            </table>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Nazwa pliku</th>
                                <th>Nazwa pliku w bazie</th>
                                <th>Data dodania</th>
                                <th>Usuń</th>
                            </tr>
                            
                                    <?php 
                                        global $CMS;
                                        $CMS->Content->displayPdf(); 
                                    ?>
                            
                        </table>
                    </div>
                </div>
