<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php';?>
<?php require_once 'inc/functions.php';?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <img id='logo' src="img/logo.png" alt="" width="10%" />
            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right" src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
            <div class="container-fluid">
                <h2 id='logo' style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 0.8em" class="no-margin-bottom"></h2>
            </div>
        </div>
    </header>
    <div class="worko-tabs">

    <input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
    <input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
    <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
    <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" />
    <input class="state" type="radio" title="tab-five" name="tabs-state" id="tab-five" />

    <div class="tabs flex-tabs">
        <label for="tab-one" id="tab-one-label" class="tab"><i style="font-size: 1.2em" class="fas fa-cog"></i> Gerais</label>
        <label for="tab-two" id="tab-two-label" class="tab"><i style="font-size: 1.2em" class="icon-list"></i> Tarefas</label>
        <label for="tab-three" id="tab-three-label" class="tab"><i style="font-size: 1.2em" class="far fa-calendar-check"></i> Agenda</label>
        <label for="tab-four" id="tab-four-label" class="tab"><i style="font-size: 1.2em" class="fas fa-plane-departure"></i> Feriados</label>
        <label for="tab-five" id="tab-five-label" class="tab"><i style="font-size: 1.2em" class="fas fa-users-cog"></i> Usuários</label>


        <div id="tab-one-panel" class="panel active">

        </div>
        <div id="tab-two-panel" class="panel">
            Tab two content
        </div>
        <div id="tab-three-panel" class="panel">
            Tab three content
        </div>
        <div id="tab-four-panel" class="panel">
            <div class="card">
                <div class="card-close">
                    <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a
                                    href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        </div>
                    </div>
                </div>
                <form method="POST" action="input_prd.php" enctype="multipart/form-data"
                      accept-charset="utf-8">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-1">
                                    <label for="name">ID Feriado</label>
                                    <input type="text" class="form-control" name="product['id_prd']" placeholder="00<?php echo last_prd() + 1?>" disabled>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="">Descrição</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-keyboard"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="product['desc_prd']" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Data</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-keyboard"></i></div>
                                        </div>
                                        <input id="birthday" type="text" class="form-control" name="product['desc_prd']" required>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-9">
                                    <a href="report_prd.php" class="btn btn-secondary" role="button">Cancel</a>
                                    <button id="save" type="submit" class="btn btn-primary" ><span
                                                id="button"> Cadastrar</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
        <div id="tab-five-panel" class="panel">
            <div class="card">
                <div class="card-close">
                    <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a
                                    href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        </div>
                    </div>
                </div>
                <form method="POST" action="input_prd.php" enctype="multipart/form-data"
                      accept-charset="utf-8">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-1">
                                    <label for="name">ID Usuário</label>
                                    <input type="text" class="form-control" name="user['id_user']" placeholder="00<?php echo last_prd() + 1?>" disabled>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="">Nome</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-keyboard"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="user['name_user']" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Usuário</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user-check"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="user['nick_user']" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Grupo</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="user['type_user']" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Status</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-keyboard"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="user['status_user']" required>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-9">
                                    <a href="" class="btn btn-secondary" role="button">Cancel</a>
                                    <button id="save" type="submit" class="btn btn-primary" ><span
                                                id="button"> Cadastrar</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>