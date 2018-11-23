<?php
require_once(DBAPI);
/** *  Retorna o nome da foto	 */
function nome_foto_usuario($id_usuario)
{
    return recupera_img('usuario', $id_usuario);
}


/** *  Retorna o nome do usuario	 */
function nome_usuario($id_usuario)
{
    return recupera_nome('usuario', $id_usuario);
}


