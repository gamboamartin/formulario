<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use html\fr_tipo_pregunta_html;
use models\fr_pregunta;
use PDO;
use stdClass;

class controlador_fr_pregunta extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new fr_pregunta(link: $link);
        $html = new fr_tipo_pregunta_html();
        $obj_link = new links_menu($this->registro_id);

        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Empresas';

    }




}
