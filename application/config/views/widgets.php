<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Dodaj Event</div>
            <div class="panel-body">
                <div class="span7">   
                    <div class="widget stacked widget-table action-table">
                        
                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Formularz Eventów</h3>
                        </div> <!-- /widget-header -->
                        
                        <div class="widget-content">
                            <div id="tableID">
                                <form action="" method="post" enctype="multipart/form-data"  name="form">
                                    <table class="table table-hover" id="worked">
                                        <thead>
                                            <tr>
                                                <th>Tytuł Eventu</th>
                                                <th>Data rozpoczęcia</th>
                                                <th>Data zakończenia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class="form-control" type="text" name="title"></td>
                                                <td>
                                                    <input class="form-control" type="datetime-local" name="start" required></td>
                                                <td>
                                                    <input class="form-control" type="datetime-local" name="end" required></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td style='border:none;'><input value="Wyślij plik" type="submit" name="submit" /></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    
                                </form>
                            </div>
                        </div> <!-- /widget-content -->
                        
                    </div> <!-- /widget -->
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Eventy</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Usuń Event</div>
            <div class="panel-body">
                <div class="span7">   
                    <div class="widget stacked widget-table action-table">
                        
                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Tabela Eventów</h3>
                        </div> <!-- /widget-header -->
                        
                        <div class="widget-content">
                            <div id="tableID">
                                <table class="table-list" data-currentpage="1">
                                    <thead>
                                    <th><button type="button" class="sort" data-sort="sortID">#<i class="caret"></i></button></th>
                                    <th><button type="button" class="sort" data-sort="sortDesc">Event<i class="caret"></i></button></th>
                                    <th><button type="button" class="sort" data-sort="sortTotal">Data rozpoczęcia<i class="caret"></i></button></th>
                                    <th><button type="button" class="sort" data-sort="sortTotalTwo">Data zakończenia<i class="caret"></i></button></th>
                                    <th></th>
                                    </thead>
                                    <!-- IMPORTANT, class="list" must be on tbody -->
                                    <tbody class="list">
                                    <?php  global $CMS; $CMS->Content->displayEventToFilter();?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="table-footer">
                                                <div class="table-pagination">
                                                    <button type="button" class="btn-tablepage jTablePagePrev">&laquo;</button>
                                                    <ul class="pagination"></ul>
                                                    <button type="button" class="btn-tablepage jTablePageNext">&raquo;</button>
                                                </div>
                                                <div class="table-filter ">
                                                    <input class="search " placeholder="Search ">
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div> <!-- /widget-content -->
                        
                    </div> <!-- /widget -->
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->



