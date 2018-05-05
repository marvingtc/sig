<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class EmpresasModelLeyenda extends JModel {

    var $_id;
    var $_data;

    function __construct() {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
    }

    function setId($id) {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {
        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT LEY.*, CPE.cpe_serie, CPE.cpe_numero
FROM tfact_ley LEY INNER JOIN tfact_cpe CPE ON (LEY.cpe_id_cpe=CPE.cpe_id_cpe)
WHERE LEY.ley_id_ley = " . $this->_id;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->ley_id_ley = 0;
            $this->_data->ley_codLeyenda = null;
            $this->_data->ley_desLeyendaPers = null;

            $this->_data->cpe_id_cpe = JRequest::getVar('cpeId', NULL);
            $this->_data->cpe_mtoImpVenta = JRequest::getVar('cpe_mtoImpVenta', NULL);

            $this->_data->ley_fecCreacion = null;
            $this->_data->ley_usuCreacion = null;
            $this->_data->ley_fecModificacion = null;
            $this->_data->ley_usuModificacion = null;
        }
        return $this->_data;
    }

    public function getDetalleCatalogo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo AS value, DG.detg_descripcion AS text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function store($data) {
        $user = & JFactory::getUser();
        $usuario = $user->username;

        if (!$data['ley_id_ley']) {
            $data['ley_fecCreacion'] = date('Y-m-d H:m:s');
            $data['ley_usuCreacion'] = $usuario;
        } else {
            $data['ley_fecModificacion'] = date('Y-m-d H:m:s');
            $data['ley_usuModificacion'] = $usuario;
        }

        $row = & $this->getTable('ley', '');
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }

        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }
        return $row->ley_id_ley;
    }

    public function removeLey($leyId) {
        $query = "DELETE FROM tfact_ley WHERE ley_id_ley = '$leyId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function obtenerDescLey($ley_codLeyenda) {
        $query = "SELECT DG.detg_descripcion AS ley_desLeyendaPers FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='15' AND DG.detg_codigo = '$ley_codLeyenda' ";
        $this->_db->setQuery($query);
//        print_r($query);
//        die();
        $dato = $this->_db->loadObject();
//        print_r($dato);
        echo $dato->ley_desLeyendaPers;
        die();
    }

    public function numero_mtoLetras($cpe_id_cpe) {
        $query = "SELECT CPE.cpe_mtoImpVenta FROM tfact_cpe CPE WHERE CPE.cpe_id_cpe = '$cpe_id_cpe' ";
        $this->_db->setQuery($query);
//        print_r($query);
//        die();
        $dato = $this->_db->loadObject();
//        print_r($dato);
        echo $dato->cpe_mtoImpVenta;
        die();
    }


    public function numeroLetras($cpe_mtoImpVenta, $moneda = 'PESO', $subfijo = 'M.N.')
    {
        $xarray = array(
            0 => 'Cero'
            , 1 => 'UN', 'DOS', 'TRES', 'CUATRO', 'CINCO', 'SEIS', 'SIETE', 'OCHO', 'NUEVE'
            , 'DIEZ', 'ONCE', 'DOCE', 'TRECE', 'CATORCE', 'QUINCE', 'DIECISEIS', 'DIECISIETE', 'DIECIOCHO', 'DIECINUEVE'
            , 'VEINTI', 30 => 'TREINTA', 40 => 'CUARENTA', 50 => 'CINCUENTA'
            , 60 => 'SESENTA', 70 => 'SETENTA', 80 => 'OCHENTA', 90 => 'NOVENTA'
            , 100 => 'CIENTO', 200 => 'DOSCIENTOS', 300 => 'TRESCIENTOS', 400 => 'CUATROCIENTOS', 500 => 'QUINIENTOS'
            , 600 => 'SEISCIENTOS', 700 => 'SETECIENTOS', 800 => 'OCHOCIENTOS', 900 => 'NOVECIENTOS'
        );
        $numero = trim($cpe_mtoImpVenta);
        $xpos_punto = strpos($numero, '.');
        $xaux_int = $numero;
        $xdecimales = '00';
        if (!($xpos_punto === false)) {
            if ($xpos_punto == 0) {
                $numero = '0' . $numero;
                $xpos_punto = strpos($numero, '.');
            }
            $xaux_int = substr($numero, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
            $xdecimales = substr($numero . '00', $xpos_punto + 1, 2); // obtengo los valores decimales
        }
 
        $XAUX = str_pad($xaux_int, 18, ' ', STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
        $xcadena = '';
        for ($xz = 0; $xz < 3; $xz++) {
            $xaux = substr($XAUX, $xz * 6, 6);
            $xi = 0;
            $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
            $xexit = true; // bandera para controlar el ciclo del While
            while ($xexit) {
                if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                    break; // termina el ciclo
                }
 
                $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
                $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
                for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                    switch ($xy) {
                        case 1: // checa las centenas
                            $key = (int) substr($xaux, 0, 3);
                            if (100 > $key) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
                                /* do nothing */
                            } else {
                                if (TRUE === array_key_exists($key, $xarray)) {  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                    $xseek = $xarray[$key];
                                    $xsub = $this->_subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
                                    if (100 == $key) {
                                        $xcadena = ' ' . $xcadena . ' CIEN ' . $xsub;
                                    } else {
                                        $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                                    }
                                    $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                                } else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                    $key = (int) substr($xaux, 0, 1) * 100;
                                    $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                    $xcadena = ' ' . $xcadena . ' ' . $xseek;
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 0, 3) < 100)
                            break;
                        case 2: // checa las decenas (con la misma lógica que las centenas)
                            $key = (int) substr($xaux, 1, 2);
                            if (10 > $key) {
                                /* do nothing */
                            } else {
                                if (TRUE === array_key_exists($key, $xarray)) {
                                    $xseek = $xarray[$key];
                                    $xsub = $this->_subfijo($xaux);
                                    if (20 == $key) {
                                        $xcadena = ' ' . $xcadena . ' VEINTE ' . $xsub;
                                    } else {
                                        $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                                    }
                                    $xy = 3;
                                } else {
                                    $key = (int) substr($xaux, 1, 1) * 10;
                                    $xseek = $xarray[$key];
                                    if (20 == $key)
                                        $xcadena = ' ' . $xcadena . ' ' . $xseek;
                                    else
                                        $xcadena = ' ' . $xcadena . ' ' . $xseek . ' Y ';
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 1, 2) < 10)
                            break;
                        case 3: // checa las unidades
                            $key = (int) substr($xaux, 2, 1);
                            if (1 > $key) { // si la unidad es cero, ya no hace nada
                                /* do nothing */
                            } else {
                                $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                                $xsub = $this->_subfijo($xaux);
                                $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                            } // ENDIF (substr($xaux, 2, 1) < 1)
                            break;
                    } // END SWITCH
                } // END FOR
                $xi = $xi + 3;
            } // ENDDO
            # si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
            if ('ILLON' == substr(trim($xcadena), -5, 5)) {
                $xcadena.= ' DE';
            }
 
            # si la cadena obtenida en MILLONES o BILLONES, entonces le agrega al final la conjuncion DE
            if ('ILLONES' == substr(trim($xcadena), -7, 7)) {
                $xcadena.= ' DE';
            }
 
            # depurar leyendas finales
            if ('' != trim($xaux)) {
                switch ($xz) {
                    case 0:
                        if ('1' == trim(substr($XAUX, $xz * 6, 6))) {
                            $xcadena.= 'UN BILLON ';
                        } else {
                            $xcadena.= ' BILLONES ';
                        }
                        break;
                    case 1:
                        if ('1' == trim(substr($XAUX, $xz * 6, 6))) {
                            $xcadena.= 'UN MILLON ';
                        } else {
                            $xcadena.= ' MILLONES ';
                        }
                        break;
                    case 2:
                        if (1 > $numero) {
                            $xcadena = "CERO {$moneda}S {$xdecimales}/100 {$subfijo}";
                        }
                        if ($numero >= 1 && $numero < 2) {
                            $xcadena = "UN {$moneda} {$xdecimales}/100 {$subfijo}";
                        }
                        if ($numero >= 2) {
                            $xcadena.= " {$moneda}S {$xdecimales}/100 {$subfijo}"; //
                        }
                        break;
                } // endswitch ($xz)
            } // ENDIF (trim($xaux) != "")
 
            $xcadena = str_replace('VEINTI ', 'VEINTI', $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
            $xcadena = str_replace('  ', ' ', $xcadena); // quito espacios dobles
            $xcadena = str_replace('UN UN', 'UN', $xcadena); // quito la duplicidad
            $xcadena = str_replace('  ', ' ', $xcadena); // quito espacios dobles
            $xcadena = str_replace('BILLON DE MILLONES', 'BILLON DE', $xcadena); // corrigo la leyenda
            $xcadena = str_replace('BILLONES DE MILLONES', 'BILLONES DE', $xcadena); // corrigo la leyenda
            $xcadena = str_replace('DE UN', 'UN', $xcadena); // corrigo la leyenda
        } // ENDFOR ($xz)
        return trim($xcadena);
    }
 
    /**
     * Esta función regresa un subfijo para la cifra
     * 
     * @author Ultiminio Ramos Galán <contacto@ultiminioramos.com>
     * @param string $cifras La cifra a medir su longitud
     */
    private function _subfijo($cifras)
    {
        $cifras = trim($cifras);
        $strlen = strlen($cifras);
        $_sub = '';
        if (4 <= $strlen && 6 >= $strlen) {
            $_sub = 'MIL';
        }
 
        return $_sub;
    }

}

?>
