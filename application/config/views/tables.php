<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Home</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Treść</th>
                            <th>Edycja</th>
                        </tr>
                            <?php 
                                global $CMS;
                                $CMS->Content->displayContentForAdmin(); 
                            ?>
                    </table>
                </div>
        </div>
    </div>
</div>

                    
                    
                    
</div>
            