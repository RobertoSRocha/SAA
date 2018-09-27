<?php

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if (!defined('BASEURL')){
    define('BASEURL', '/SAA/');
}


/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');

define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

/** caminho do arquivo de banco de dados **/
/*if (!defined('DBAPI')){
    define('DBAPI', ABSPATH . 'Model/conectionBD.php');
}*/

/** caminho para visualizar as informações dos usuários
if (!defined('DVAPI')){
    define('DVAPI', ABSPATH . 'Model/User/viewUser.php');
}
**/

