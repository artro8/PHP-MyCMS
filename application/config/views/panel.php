
<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php global $CMS; $CMS->Counter->sumCount(); ?></div>
                    <div class="text-muted">Odwiedziny</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-blue panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php global $CMS; $CMS->Counter->sumCountReal(); ?></div>
                    <div class="text-muted">Realne wizyty</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php global $CMS; $CMS->Content->displayNoReadContact(); ?></div>
                    <div class="text-muted">Czekających</div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Liczba odwiedzin</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas id="barChart" height="250" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Lista osób czekających na kontakt</div>
            <div class="panel-body">
                <div class="span7">   
                    <div class="widget stacked widget-table action-table">
                        
                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Tabela kontaktów</h3>
                        </div> <!-- /widget-header -->
                        
                        <div class="widget-content" id="contact">
                            <div id="tableID">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>
                                            <th><button type="button" class="sort" data-sort="sortDesc">Email<i class="caret"></i></button></th>
                                            <th><button type="button" class="sort" data-sort="sortTotal">Numer Telefonu<i class="caret"></i></button></th>
                                            <th><button type="button" class="sort" data-sort="sortTotalTwo">Data<i class="caret"></i></button></th>
                                            <th class="td-actions">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                    <?php global $CMS; $CMS->Content->displayContact(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
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




