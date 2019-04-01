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


    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-violet"><i class="icon-user"></i></div>
                        <div class="title"><span>Total<br>Clientes</span>
                            <div class="progress">
                                <div role="progressbar" style="width: <?php echo "100%"?>; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo find_customers()?></strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-red"><i class="icon-padnote"></i></div>
                        <div class="title" ><span>Despesas<br>Vencidas</span>
                            <div class="progress">
                                <div role="progressbar" style="width: <?php $result = find_expenses_overdue() / (find_expenses_overdue() + find_expenses()) * 100; echo $result?>%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo find_expenses_overdue()?></strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-green"><i class="icon-bill"></i></div>
                        <div class="title"><span>Créditos<br>à Receber</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 0%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                        <div class="number"><strong>0</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-orange"><i class="icon-check"></i></div>
                        <div class="title"><span>Despesas<br>à Vencer</span>
                            <div class="progress">
                                <div role="progressbar" style="width: <?php $result2 = (find_expenses()/(find_expenses() + find_expenses_overdue()) * 100); echo $result2 ?>%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo find_expenses()?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Header Section    -->
    <section class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                        <div class="text"><strong><?php echo find_products()?></strong><br><small> PRODUTOS CADASTRADOS</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                        <div class="text"><strong><?php echo find_products_active()?></strong><br><small> PRODUTOS ATIVOS</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-orange"><i class="fa fa-pie-chart"></i></div>
                        <div class="text"><strong><?php echo find_products_inactive()?></strong><br><small> PRODUTOS INATIVOS</small></div>
                    </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-3 col-12">
                    <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                        <canvas id="lineCahrt"></canvas>
                    </div>
                </div>
                <div class="chart col-lg-3 col-12">
                    <!-- Bar Chart   -->
                    <div class="bar-chart has-shadow bg-white">
                        <div class="title"><strong class="text-violet">0</strong><br><small>Execução no prazo</small></div>
                        <canvas id="barChartHome"></canvas>
                    </div>
                    <!-- Numbers-->
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                        <div class="text"><strong>0</strong><br><small>ïndice de Sucesso</small></div>
                    </div>
                </div>
                <div class="statistics col-lg-3 col-12">
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                        <div class="text"><strong>0</strong><br><small> ORÇAMENTOS ABERTO</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                        <div class="text"><strong>0</strong><br><small> VENDAS CONCRETIZADAS</small></div>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-orange"><i class="fa fa fa-pie-chart"></i></div>
                        <div class="text"><strong>0</strong><br><small> ORÇAMENTOS EM ANDAMENTO</small></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section-->
    <section class="projects no-padding-top">
        <div class="container-fluid">
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Boat 28Ft Fishing</h3><small>Etapa 1</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Boat 28Ft Fishing</h3><small>Etapa 3</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Boat 28Ft Fishing</h3><small>Finalizado</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-4.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Boat 23Ft Cabin</h3><small>Etapa 2</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section-->
    <section class="client no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Work Amount  -->
                <div class="col-lg-4">
                    <div class="work-amount card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Contador de Horas</h3><small>Horas trabalhadas.</small>
                            <div class="chart text-center">
                                <div class="text"><strong>90</strong><br><span>Hours</span></div>
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Profile -->
                <div class="col-lg-4">
                    <div class="client card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                                <div class="status bg-green"></div>
                            </div>
                            <div class="client-title">
                                <h3>Cleber Westembergue</h3><span>Web Developer</span><a href="#">Follow</a>
                            </div>
                            <div class="client-info">
                                <div class="row">
                                    <div class="col-4"><strong>20</strong><br><small>Photos</small></div>
                                    <div class="col-4"><strong>54</strong><br><small>Videos</small></div>
                                    <div class="col-4"><strong>235</strong><br><small>Tasks</small></div>
                                </div>
                            </div>
                            <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- Total Overdue             -->
                <div class="col-lg-4">
                    <div class="overdue card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Meta Comercial</h3><small>Venda Anual</small>
                            <div class="number text-center">$ 4.800.000,00</div>
                            <div class="chart">
                                <canvas id="lineChart1">                               </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feeds Section-->
    <section class="feeds no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-6">
                    <div class="articles card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h3">Artigos Postados   </h2>
                            <div class="badge badge-rounded bg-green">4 New       </div>
                        </div>
                        <div class="card-body no-padding">
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text"><a href="#">
                                        <h3 class="h5">Administrador</h3></a><small>Posted on 5th June 2017 by Aria Smith.   </small></div>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text"><a href="#">
                                        <h3 class="h5">Web Developer</h3></a><small>Posted on 5th June 2017 by Frank Williams.   </small></div>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text"><a href="#">
                                        <h3 class="h5">Comercial</h3></a><small>Posted on 5th June 2017 by Ashley Wood.   </small></div>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="img/avatar-4.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text"><a href="#">
                                        <h3 class="h5">Financeiro</h3></a><small>Posted on 5th June 2017 by Jason Doe.   </small></div>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="img/avatar-5.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="text"><a href="#">
                                        <h3 class="h5">Marketing</h3></a><small>Posted on 5th June 2017 by Sam Martinez.   </small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Check List -->
                <div class="col-lg-6">
                    <div class="checklist card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div  class="card-header d-flex align-items-center">
                            <h2 id="tarefas" class="h3">Lista de Tarefas </h2>
                        </div>
                        <div class="card-body no-padding">
                            <div class="item d-flex">
                                <input type="checkbox" id="input-1" name="input-1" class="checkbox-template">
                                <label for="input-1">Inserir valores nas planilhas.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-2" name="input-2" class="checkbox-template">
                                <label for="input-2">Comprar material Projeto 00125.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                                <label for="input-3">Tirar fotos e disponibilizar site projeto 00126</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                                <label for="input-4">Enviar e-mail com orçamentos finais projeto 00128.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                                <label for="input-5">Entrega das chaves agendadas.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                                <label for="input-6">Pagar salários funcionários</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                                <label for="input-6">Atualizar mídias sociais</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Updates Section                                                -->
    <section class="updates no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Recent Updates-->
                <div class="col-lg-4">
                    <div class="recent-updates card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard6" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 id="feriados" class="h4">Feriados</h3>
                        </div>
                        <div class="card-body no-padding">
                            <!-- Item-->
                            <?php if ($holidays) : ?>
                                <?php foreach ($holidays as $holiday) : ?>
                                    <div class="item d-flex justify-content-between">
                                        <div class="info d-flex">
                                            <div class="icon"><i class="icon-rss-feed"></i></div>
                                            <div class="title">
                                                <h5><?php echo $holiday['desc_hol']?></h5>
                                                <p>Terça-feira</p>
                                            </div>
                                        </div>
                                        <div class="date text-right"><strong>01</strong><span>Jan</span></div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="12">Nenhum registro encontrado.</td>
                                </tr>
                            <?php endif; ?>
                            <!-- Item-->
                            <div class="item d-flex justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="icon-rss-feed"></i></div>
                                    <div class="title">
                                        <h5>Carnaval</h5>
                                        <p>Segunda-feira</p>
                                    </div>
                                </div>
                                <div class="date text-right"><strong>4</strong><span>Mar</span></div>
                            </div>
                            <!-- Item        -->
                            <div class="item d-flex justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="icon-rss-feed"></i></div>
                                    <div class="title">
                                        <h5>Carnaval</h5>
                                        <p>Terça=feira</p>
                                    </div>
                                </div>
                                <div class="date text-right"><strong>5</strong><span>Mar</span></div>
                            </div>
                            <!-- Item-->
                            <div class="item d-flex justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="icon-rss-feed"></i></div>
                                    <div class="title">
                                        <h5>Paixão de Cristo</h5>
                                        <p>Sexta-feira</p>
                                    </div>
                                </div>
                                <div class="date text-right"><strong>19</strong><span>Abr</span></div>
                            </div>
                            <!-- Item-->
                            <div class="item d-flex justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="icon-rss-feed"></i></div>
                                    <div class="title">
                                        <h5>Tiradentes</h5>
                                        <p>Domingo</p>
                                    </div>
                                </div>
                                <div class="date text-right"><strong>21</strong><span>Abr</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Daily Feeds -->
                <div class="col-lg-4">
                    <div class="daily-feeds card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="h4">Feeds Diários</h3>
                        </div>
                        <div class="card-body no-padding">
                            <!-- Item-->
                            <div class="item">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-5.jpg" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Aria Smith</h5><span>Posted a new blog </span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>5min ago</small></div>
                                </div>
                            </div>
                            <!-- Item-->
                            <div class="item">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-2.jpg" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Frank Williams</h5><span>Posted a new blog </span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                                            <div class="CTAs"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-heart"> </i>Love    </a></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>5min ago</small></div>
                                </div>
                            </div style="back">
                            <!-- Item-->
                            <div class="item clearfix">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-3.jpg" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Ashley Wood</h5><span>Posted a new blog </span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>5min ago</small></div>
                                </div>
                                <div class="quote has-shadow"> <small>Implementação software</small></div>
                                <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Activities -->
                <div class="col-lg-4">
                    <div class="recent-activities card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard8" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div  class="card-header">
                            <h3 id="agenda" class="h4">Agenda Empresarial</h3>
                        </div>
                        <div class="card-body no-padding">
                            <div class="item">
                                <div class="row">
                                    <div class="col-4 date-holder text-right">
                                        <div class="icon"><i class="icon-clock"></i></div>
                                        <div class="date"> <span>01 maio</span><br><span class="text-info">6 hours ago</span></div>
                                    </div>
                                    <div class="col-8 content">
                                        <h5>Cliente - Entrega</h5>
                                        <p>Entrega e checklist Florianópolis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-4 date-holder text-right">
                                        <div class="icon"><i class="icon-clock"></i></div>
                                        <div class="date"> <span>10 Abril</span><br><span class="text-info">2 hours ago</span></div>
                                    </div>
                                    <div class="col-8 content">
                                        <h5>Feiras - Eventos Shows</h5>
                                        <p>Feira Náutica - Boat Show EUA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-4 date-holder text-right">
                                        <div class="icon"><i class="icon-clock"></i></div>
                                        <div class="date"> <span>6:00 am</span><br><span class="text-info">6 hours ago</span></div>
                                    </div>
                                    <div class="col-8 content">
                                        <h5>Cliente - Visita Onsite</h5>
                                        <p>Não existe nenhuma visita agendada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Arquivo Javascript utilizado para os charts index -->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/charts-home.js" type="text/javascript"></script>

<?php include(FOOTER_TEMPLATE); ?>