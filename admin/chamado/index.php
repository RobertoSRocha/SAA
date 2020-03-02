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
            <a class="btn btn-default" href="<?php echo BASEURL; ?>index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <div class="col-xs-12">
        <div class="row">


        <style>            
            .chamado-box-head-yellow{
                background-color: #f39c12;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 3%;
            }
            .chamado-box-head-red{
                background-color: #dd4b39;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 3%;
            }
            .chamado-box-head-blue{
                background-color: #00c0ef ;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 3%;
            }
           
            .chamado-box-user{
                margin: 0 0 0 0;
                font-size: 25px;
                color: #ffffff;
            }
            .chamado-box-setor{ 
                margin: 0 0 0 0;
                font-size: 17px;
                color: #ffffff;
            }

            .chamado-box-body{
                background-color: #ffffff;
                color: #000000;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 3%;
                padding-right: 3%;
                height: 140px;
            }


        </style>

            <div class="col-md-3">
            
                <div class="chamado-box">

                    <div class="chamado-box-head-blue">                                                
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
</section>
<!-- /.content -->







<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>