<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once ACHADOS_E_PERDIDOS;
    indexAchados_e_Perdidos();
?>
<?php
    require_once SETOR;
    indexSetor();
?>
<?php
    require_once LOCAL;
    indexLocal();
?>

<?php include(HEADER_TEMPLATE); ?>





<!-- Main conteudoCentral -->

<section class="content-header">
    <div class="row">
        <div class="col-sm-6 text-left">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="fa fa-edit"></i>

                    <small> Listagem dos Formulários</small>
                </li>
            </ol>
        </div>
        <div class="breadcrumb text-right">
            <a class="btn btn-primary" href="./novo-chamado.php"><i class="fa fa-plus">
                </i> &nbsp Criar Chamado </a>
        </div>
    </div>
</section>

<section class="content">
    <div class="col-xs-12">

        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-lefth ui-sortable-handle">

                <li class="">
                    <a href="#chamado_novos" data-toggle="tab" aria-expanded="false">Novos Chamados
                        <span>
                            <i class="fa  fa-exclamation"
                                style="background-color: red; width: 15px; padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px; color:#ffffff; border-radius: 3px">
                            </i>
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="#chamado_aberto" data-toggle="tab" aria-expanded="true">Em Aberto</a>
                </li>
                <li class=""><a href="#chamado_concluido" data-toggle="tab" aria-expanded="false">Concluidos</a></li>
                <li class=""><a href="#chamado_pedido" data-toggle="tab" aria-expanded="false">Enviados</a></li>


            </ul>
            <div class="tab-content no-padding">

                <div class="chart tab-pane" id="chamado_novos"
                    style="padding-top:25px; position: relative; height: 300px;">
                    <div class="row">

                        <div class=col-md-12>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Usuario Solicitante</p>
                                        <p class="chamado-box-setor">Setor solicitante</p>
                                    </div>

                                    <div class="chamado-box-body">
                                        <p> Detalhes do chamado: <br />
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="chamado-box">
                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>
                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="chamado-box">
                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>
                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="chart tab-pane active" id="chamado_aberto"
                    style="padding-top:25px; position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                    <div class="row">

                        <div class=col-md-12>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-blue">
                                        <p class="chamado-box-user">Usuario Solicitante</p>
                                        <p class="chamado-box-setor">Setor solicitante</p>
                                    </div>

                                    <div class="chamado-box-body">
                                        <p> Detalhes do chamado: <br />
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-yellow">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-red">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-red">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="chart tab-pane" id="chamado_concluido"
                    style="padding-top:25px; position: relative; height: 300px;">
                    <div class="row">

                        <div class=col-md-12>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-green">
                                        <p class="chamado-box-user">Usuario Solicitante</p>
                                        <p class="chamado-box-setor">Setor solicitante</p>
                                    </div>

                                    <div class="chamado-box-body">
                                        <p> Detalhes do chamado: <br />
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-green">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-green">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-green">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="chart tab-pane" id="chamado_pedido"
                    style="padding-top:25px; position: relative; height: 300px;">
                    <div class="row">

                        <div class=col-md-12>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Usuario Solicitante</p>
                                        <p class="chamado-box-setor">Setor solicitante</p>
                                    </div>

                                    <div class="chamado-box-body">
                                        <p> Detalhes do chamado: <br />
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="chamado-box">

                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>

                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="chamado-box">
                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>
                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="chamado-box">
                                    <div class="chamado-box-head-neutro">
                                        <p class="chamado-box-user">Nadia Carmichael</p>
                                        <p class="chamado-box-setor">Nadia Carmichael</p>
                                    </div>
                                    <div class="chamado-box-body">
                                        <p>
                                            sdfasdfasdf
                                            asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                                            fasdf
                                            asdfasdfasdfasdfas
                                            dfasdfasdfasdf asdf asd ftp_allocdf addslashesfsad ftp_allocasdf
                                            asdfa spl_autoload_functionsasdfasdf
                                            asdfasdfasdfasdfasasd
                                            asdfasdfasdfasdfas
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>




    </div>
</section>
<!-- /.content -->

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>