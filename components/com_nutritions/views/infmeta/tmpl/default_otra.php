<?php defined('_JEXEC') or die('Restricted access'); ?>

<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="frmInfmeta" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmInfmeta" 
      oninput=" 
      ">
    <div class="container">
        <div>
            <fieldset>
                <legend>Acciones</legend>

                <input type="button" id="btngrabar" value="Grabar" onclick="validateFields_infmeta();"/>
                <label></label>
                <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                <label></label>
                <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                <label></label>
                <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction';
                        document.getElementById('frmInfmeta').submit();"/>
            </fieldset>
        </div>
        <div>&nbsp;</div>       
        <div class="elegant-aero">
            <input style="font-size: 12px;" placeholder="Personal de Salud" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->infmeta->encuestador_name; ?>" required autofocus/>
            <input type="hidden" name="nu_dni" id="nu_dni" value="<?php echo $this->infmeta->nu_dni; ?>" required autofocus/>
            <input style="font-size: 12px;" placeholder="Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->infmeta->establec_name; ?>" required autofocus/>
            <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->infmeta->cod_2000; ?>" required/>
            <div id="informe">
                <table>                
                    <tr>
                        <td style="font-size: 12px;"><?php echo $this->lists['resultado_anho']; ?></td>
                        <td style="font-size: 12px;"><?php echo $this->lists['resultado_mes']; ?></td>
                    </tr>                
                </table>
            </div>
        </div>
        <div>
            <section class="tabs">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                <label for="tab-1" class="tab-label-1">Malaria 1</label>

                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">Malaria 2</label>

                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">Bartonelosis</label>

                <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
                <label for="tab-4" class="tab-label-4">Leishmaniosis</label>
                
                <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
                <label for="tab-5" class="tab-label-5">Dengue</label>

                <input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />
                <label for="tab-6" class="tab-label-6">Otras Metaxénicas</label>

                <div class="clear-shadow"></div>

                <div class="content">
                    <div class="content-1">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades">
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombre" colspan="3"></th>                                  
                                    <th class="hd" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="hd" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="hd" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="hd" colspan="1" style="text-align:center;">%</th>
                                </tr>
                                <tr>
                                    <th class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">POBLACION TOTAL DE LA JURISDICION</th>                                  
                                    <th class="o"><output name="A_001"></output></th>
                                    <th class="o"><output name="B_001"></output></th>
                                    <th class="o"><output name="C_001"></output></th>
                                    <th class="o"><output name="D_001"></output></th>
                                    <th class="o"><output name="E_001"></output></th>
                                    <th class="o"><output name="F_001"></output></th>                                      
                                    <th class="o"><output name="T_001"></output></th> 
                                    <th class="o"><output name="P_001"></output></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombre" scope="col" colspan="3" style="text-align:left;">1. POBLACION RESIDENTE EN AREAS EN RTM:</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1. Muy Alto Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001a" id="nu_001a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001b" id="nu_001b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001c" id="nu_001c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001d" id="nu_001d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001e" id="nu_001e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001f" id="nu_001f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_001f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2. Alto Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002a" id="nu_002a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002b" id="nu_002b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002c" id="nu_002c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002d" id="nu_002d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002e" id="nu_002e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002f" id="nu_002f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_002f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3. Mediano Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003a" id="nu_003a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003b" id="nu_003b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003c" id="nu_003c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003d" id="nu_003d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003e" id="nu_003e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003f" id="nu_003f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_003f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4. Bajo Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004a" id="nu_004a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004b" id="nu_004b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004c" id="nu_004c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004d" id="nu_004d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004e" id="nu_004e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004f" id="nu_004f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_004f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">2. POBLACION RESIDENTE EN AREAS SIN RTM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005a" id="nu_005a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005b" id="nu_005b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005c" id="nu_005c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005d" id="nu_005d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005e" id="nu_005e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005f" id="nu_005f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_005f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">3. Nª DE MEF PROGRAMADAS  PARA EL AÑO</td>
                                    <td class="nombretext" colspan="2"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006a" id="nu_006a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_006a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006b" id="nu_006b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_006b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006c" id="nu_006c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_006c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006d" id="nu_006d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_006d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">4. Nª DE GEST, PROGRAMADAS PARA EL AÑO</td>
                                    <td class="nombretext" colspan="2"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007a" id="nu_007a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_007a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007b" id="nu_007b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_007b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007c" id="nu_007c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_007c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007d" id="nu_007d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_007d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">PROGRAMACION ANUAL</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_008a" id="nu_008a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_008a; ?>"/></td>
                                    <td class="nombretext" colspan="3"></td>
                                    <td class="nombre" colspan="2">TERRITORIO Km2:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_008b" id="nu_008b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_008b; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">CONSULTANTES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_008c" id="nu_008c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_008c; ?>"/></td>
                                    <td class="nombretext" colspan="3"></td>
                                    <td class="nombre" colspan="2">TERRITORIO Km2 EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_008d" id="nu_008d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_008d; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> I. 	 LOCALIZACION DE CASOS</td>
                                    <td colspan="2"></td>
                                    <td class="nombre" colspan="4" style="text-align:left; width: 30%; font-weight: bold;">III.     DIAGNOSTICOS DE CASOS</td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Febriles Esperados (Ex30,25,15,10 ó 5)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009a" id="nu_009a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">1. Examen de Diagnostico Esperados (Ex30,25,15,10 ó 5)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011a" id="nu_011a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Febriles Identificados</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009b" id="nu_009b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">2. Total de Examenes de DX.)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Febriles Examinados</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;2.1 Lamina de GG de Dx.)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011b" id="nu_011b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 Febriles Examinados con Gota Gruesa</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009c" id="nu_009c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;2.2 Tiras Reactivas de Dx</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011c" id="nu_011c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2 Febriles Examinados con Tira Reactiva</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009d" id="nu_009d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">3. Total de examenes de DX (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Febriles Examinados (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;3.1 Laminas de GG de Dx. (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011d" id="nu_011d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 Febriles Examinados con Gota Gruesa (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009e" id="nu_009e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;3.2 Tiras Reactivas de Dx. (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011e" id="nu_011e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 Febriles Examinados con Tira Reactiva (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_009f" id="nu_009f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_009f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">4. Total de GG. De Control)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>
                                    <td class="nombretext" colspan="5"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;4.1 GG de Control   a Casos Confirmados</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011f" id="nu_011f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> II. 	 CONTROL DE COLATERALES</td>
                                    <td class="nombretext" colspan="2"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;4.2 GG de Control   a Casos Probables</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011g" id="nu_011g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Colaterales Esperados (Ex5)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010a" id="nu_010a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">5. Total de GG de control (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Colaterales Censados</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010b" id="nu_010b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;5.1 GG de Control  a Casos Confirmados (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011h" id="nu_011h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011h; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Colaterales Con Anamnesis y Ex. Fisico</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010c" id="nu_010c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;5.2 GG de Control a Casos Probables (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_011i" id="nu_011i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_011i; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Colaterales Catalogados como Febriles</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010d" id="nu_010d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="1"></td>
                                    <td class="nombre" colspan="4">6. Total Muestras Realizadas</td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. Colaterales Febriles Examinados</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1 Colateral Febril Examinado con GG</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010e" id="nu_010e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.2 Colateral Febril Examinados con TR</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010f" id="nu_010f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp; 6. Colateral Febril Examinado (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td colspan="2"></td>
                                    <td class="nombre" colspan="3">CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_010_1a" id="nu_010_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010_1a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1 Colateral Febril Examinado con GG (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010g" id="nu_010g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td colspan="2"></td>
                                    <td class="nombre" colspan="3">CASOS IMPORTADOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_010_1b" id="nu_010_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010_1b; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2 Colateral Febril Examinado con TR (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_010h" id="nu_010h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_010h; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="nombretext" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> IV. INFORME DE CASOS</td>
                                    <td class="nombretext" colspan="8"></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombre" colspan="3"></th>                                  
                                    <th class="hd" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="hd" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="hd" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="hd" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="hd" colspan="1" style="text-align:center;">%</th>
                                </tr>
                                <tr>
                                    <th class="nombre" colspan="3" style="text-align:left;">1. Total de Casos de Malaria</th>                                  
                                    <th class="o"><output name="A_001"></output></th>
                                    <th class="o"><output name="B_001"></output></th>
                                    <th class="o"><output name="C_001"></output></th>
                                    <th class="o"><output name="D_001"></output></th>
                                    <th class="o"><output name="E_001"></output></th>
                                    <th class="o"><output name="F_001"></output></th>                                      
                                    <th class="o"><output name="T_001"></output></th> 
                                    <th class="o"><output name="P_001"></output></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombre" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1 Total de Casos Confirmados</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmodium Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012a" id="nu_012a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012b" id="nu_012b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012c" id="nu_012c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012d" id="nu_012d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012e" id="nu_012e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012f" id="nu_012f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_012f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmodium Falciparum </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013a" id="nu_013a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013b" id="nu_013b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013c" id="nu_013c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013d" id="nu_013d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013e" id="nu_013e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013f" id="nu_013f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_013f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Plasmodium Malariae</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014a" id="nu_014a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014b" id="nu_014b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014c" id="nu_014c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014d" id="nu_014d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014e" id="nu_014e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014f" id="nu_014f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_014f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Mixto</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015a" id="nu_015a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015b" id="nu_015b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015c" id="nu_015c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015d" id="nu_015d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015e" id="nu_015e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015f" id="nu_015f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_015f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 Casos Probables</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016a" id="nu_016a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016b" id="nu_016b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016c" id="nu_016c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016d" id="nu_016d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016e" id="nu_016e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016f" id="nu_016f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_016f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombre" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3 Total de casos Conf. En Gestantes</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmodium Vivax</td>
                                    <td></td>
                                    <td></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017a" id="nu_017a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_017a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017b" id="nu_017b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_017b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017c" id="nu_017c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_017c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017d" id="nu_017d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_017d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmodium Falciparum</td>
                                    <td></td>
                                    <td></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018a" id="nu_018a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_018a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018b" id="nu_018b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_018b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018c" id="nu_018c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_018c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018d" id="nu_018d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_018d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombre" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.4 Casos de Malaria Grave - Complicada</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmodium Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019a" id="nu_019a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019b" id="nu_019b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019c" id="nu_019c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019d" id="nu_019d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019e" id="nu_019e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019f" id="nu_019f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_019f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmodium Falciparum </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020a" id="nu_020a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020b" id="nu_020b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020c" id="nu_020c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020d" id="nu_020d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020e" id="nu_020e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020f" id="nu_020f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_020f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">V. TOTAL DE FALLECIDOS:</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Fallecidos por MGC a Plamodium Vivax 	</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021a" id="nu_021a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021b" id="nu_021b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021c" id="nu_021c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021d" id="nu_021d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021e" id="nu_021e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021f" id="nu_021f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_021f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombretext" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Fallecidos por MGC a Plamodium Falciparum</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022a" id="nu_022a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022b" id="nu_022b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022c" id="nu_022c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022d" id="nu_022d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022e" id="nu_022e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022f" id="nu_022f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_022f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td> 	</tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">V. RAM </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023a" id="nu_023a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023b" id="nu_023b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023c" id="nu_023c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023d" id="nu_023d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023e" id="nu_023e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023f" id="nu_023f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_023f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;font-weight: bold;">VII. TRATAMIENTOS</td>
                                    <td class="nombre" colspan="2" style="text-align:center;font-weight: bold; border: 1px solid #000;">ADMINISTRADOS</td>
                                    <td class="nombre" colspan="1" style="text-align:center;font-weight: bold; border: 1px solid #000;">RECIBIDOS</td>
                                    <td></td>
                                    <td class="nombre" colspan="5" style="text-align:left; font-weight: bold;">VIII. QUIMIOPROFILAXIS</td>
                                </tr> 					  										
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Total de Tratamientos</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Total Quimioprofilaxis Iniciadas</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Ttos. Para Casos Confirmados</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2.  Quimioprofilaxis Malaria P. Vivaxs</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026a" id="nu_026a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 Tratamiento Malaria P. Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024a" id="nu_024a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025a" id="nu_025a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025a; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;3. Quimioprofilaxis Malaria P. Falciparum</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 Tratamiento Malaria P. Falciparum</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 Cloroquina - Primaquina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026b" id="nu_026b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Cloroquina - Primaquina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024b" id="nu_024b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025b" id="nu_025b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025b; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2 Mefloquina - Primaquina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026c" id="nu_026c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Sulfadoxina - Pirimetamina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024c" id="nu_024c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025c" id="nu_025c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025c; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.3 Cloroquina- Progunanil/Primaqina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026d" id="nu_026d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Mefloquina - Artemeter</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024d" id="nu_024d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025d" id="nu_025d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025d; ?>"/></td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Quinina - Clindamicina</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024e" id="nu_024e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025e" id="nu_025e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025e; ?>"/></td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Ttos. Para Casos Probables</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024f" id="nu_024f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_024f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025f" id="nu_025f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_025f; ?>"/></td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> IX. SALDO MEDICAMENTOS</td>
                                    <td class="nombretext" colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Cloroquina x 250 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026e" id="nu_026e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026e; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;6. Clindamicina x 300 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026j" id="nu_026j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026j; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Primaquina x 15 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026f" id="nu_026f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026f; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;7. Quinina x 300 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026k" id="nu_026k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026k; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Primaquina x 7.5 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026g" id="nu_026g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026g; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;8. Mefloquina x 250 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026l" id="nu_026l"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026l; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Primaquina x 5 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026h" id="nu_026h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026h; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;9. Artemeter x 50 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026m" id="nu_026m"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026m; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. Sulfadoxina/Primetamina x 210/25 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026i" id="nu_026i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_026i; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> X. OBSERVACIONES</td>
                                    <td class="nombretext" colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <textarea name="tx_obs_malaria" id="tx_obs_malaria" cols="25" rows="10"><?php echo $this->infmeta->tx_obs_malaria; ?></textarea>
                                    </td>                            
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-2">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades" style="background: #FFFFCC;">
                            <thead>                                
                                <tr>                                           
                                    <th class="nombrea" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> X. COLABORADORES VOLUNTARIOS O PROMOTORES DE SALUD</th>
                                    <th class="nombrea" colspan="8"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombrea" colspan="5" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Nº de Colaboradores Voluntarios de la Red</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027_1a" id="nu_027_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1a; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" colspan="5" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Nº de Colaboradores Voluntarios de la Red Activos</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1b" id="nu_027_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1b; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td class="nombrea"colspan="5" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Nº de Colaboradores Voluntarios de la Red Activos que Informan al PCM  de Establecimiento</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1c" id="nu_027_1c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1c; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td class="nombrea"colspan="1" style="text-align:right; font-size: 1.2em;">Instituciones del Sector:</td>
                                    <td></td>
                                    <td class="nombrea"colspan="1" style="text-align:right;">MINSA</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1d" id="nu_027_1d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1d; ?>"/></td>
                                    <td class="nombrea"colspan="1" style="text-align:right;">IGLESIA</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1e" id="nu_027_1e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1e; ?>"/></td>
                                    <td class="nombrea"colspan="1" style="text-align:right;">MUNICIPIO</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1f" id="nu_027_1f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1f; ?>"/></td>
                                    <td class="nombrea"colspan="1" style="text-align:right;">Otros</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_027_1g" id="nu_027_1g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027_1g; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">XI. 	 LOCALIZACION DE CASOS</td>
                                    <td colspan="2"></td>
                                    <td class="nombrea" colspan="4" style="text-align:left; width: 30%; font-weight: bold;">XII.     CONTROL DE COLATERALES</td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Febriles Esperados (Ex20,10 ó 5)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027a" id="nu_027a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">1. Colaterales Esperados (Ex5)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028a" id="nu_028a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Febriles Identificados</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027b" id="nu_027b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">2. Colaterales Censados</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028b" id="nu_028b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Febriles Examinados</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;3. Colaterales Con Anamnesis y Ex. Fisico</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028c" id="nu_028c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 Febriles Examinados con Gota Gruesa</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027c" id="nu_027c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;4. Colaterales Catalogados como Febriles</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028d" id="nu_028d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2 Febriles Examinados con Tira Reactiva</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027d" id="nu_027d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">5. Colaterales Febriles Examinados)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Febriles Examinados (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp; 5.1 Colateral Febril Examinado con GG</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028e" id="nu_028e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 Febriles Examinados con Gota Gruesa (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027e" id="nu_027e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027e; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;5.2 Colateral Febril Examinados con TR</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028f" id="nu_028f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 Febriles Examinados con Tira Reactiva (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_027f" id="nu_027f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_027f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td></td>
                                    <td class="nombrea" colspan="4">6. Colateral Febril Examinado (+)</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>
                                    <td colspan="5"></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;6.1 Colateral Febril Examinado con GG (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028g" id="nu_028g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>
                                    <td colspan="5"></td>
                                    <td class="nombrea" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;6.2 Colateral Febril Examinado con TR (+)</td>
                                    <td><input class="texti" maxlength="4" type="text" name="nu_028h" id="nu_028h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_028h; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombrea" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> XIII. INFORME DE CASOS</th>
                                    <th class="nombrea" colspan="8"></th>
                                </tr>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombrea" colspan="3"></th>                                  
                                    <th class="nombrea" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombrea" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombrea" colspan="1" style="text-align:center;">%</th>
                                </tr>
                                <tr>
                                    <th class="nombrea" colspan="3" style="text-align:left;">1. Total de Casos de Malaria</th>                                  
                                    <th class="o"><output name="A_001"></output></th>
                                    <th class="o"><output name="B_001"></output></th>
                                    <th class="o"><output name="C_001"></output></th>
                                    <th class="o"><output name="D_001"></output></th>
                                    <th class="o"><output name="E_001"></output></th>
                                    <th class="o"><output name="F_001"></output></th>                                      
                                    <th class="o"><output name="T_001"></output></th> 
                                    <th class="o"><output name="P_001"></output></th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombrea" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1.1 Total de Casos Confirmados</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmosium Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029a" id="nu_029a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029b" id="nu_029b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029c" id="nu_029c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029d" id="nu_029d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029e" id="nu_029e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029f" id="nu_029f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_029f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmosium Falciparum </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030a" id="nu_030a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030b" id="nu_030b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030c" id="nu_030c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030d" id="nu_030d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030e" id="nu_030e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030f" id="nu_030f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_030f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Plasmosium Malariae</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031a" id="nu_031a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031b" id="nu_031b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031c" id="nu_031c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031d" id="nu_031d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031e" id="nu_031e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031f" id="nu_031f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_031f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Mixto </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032a" id="nu_032a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032b" id="nu_032b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032c" id="nu_032c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032d" id="nu_032d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032e" id="nu_032e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032f" id="nu_032f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_032f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1.2 Casos Probables</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033a" id="nu_033a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033b" id="nu_033b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033c" id="nu_033c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033d" id="nu_033d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033e" id="nu_033e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033f" id="nu_033f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_033f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1.3 Total de casos Conf. En Gestantes</td>
                                    <td colspan="2"></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmosium Vivax</td>
                                    <td colspan="2"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034a" id="nu_034a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_034a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034b" id="nu_034b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_034b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034c" id="nu_034c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_034c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034d" id="nu_034d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_034d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmosium Falciparum</td>
                                    <td colspan="2"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035a" id="nu_035a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_035a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035b" id="nu_035b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_035b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035c" id="nu_035c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_035c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035d" id="nu_035d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_035d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" scope="col" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1.4 Casos de Malaria Grave - Complicada</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Plasmosium Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036a" id="nu_036a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036b" id="nu_036b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036c" id="nu_036c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036d" id="nu_036d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036e" id="nu_036e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036f" id="nu_036f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_036f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Plasmosium Falciparum </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037a" id="nu_037a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037b" id="nu_037b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037c" id="nu_037c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037d" id="nu_037d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037e" id="nu_037e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037f" id="nu_037f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_037f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" scope="col" colspan="3" style="text-align:left; font-weight: bold;">XIV. TOTAL DE FALLECIDOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Fallecidos por MGC a Plamodium Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038a" id="nu_038a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038b" id="nu_038b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038c" id="nu_038c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038d" id="nu_038d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038e" id="nu_038e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038f" id="nu_038f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_038f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2. Fallecidos por MGC a Plamodium Falciparum</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039a" id="nu_039a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039b" id="nu_039b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039c" id="nu_039c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039d" id="nu_039d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039e" id="nu_039e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039f" id="nu_039f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_039f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>
                                    <td class="nombrea" scope="col" colspan="3" style="text-align:left; font-weight: bold;">XV. RAM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040a" id="nu_040a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040b" id="nu_040b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040c" id="nu_040c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040d" id="nu_040d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040e" id="nu_040e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040f" id="nu_040f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_040f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td class="o"><output name="P_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;font-weight: bold;">XV. TRATAMIENTOS</td>
                                    <td class="nombrea" colspan="2" style="text-align:center; border: 1px solid #000;">ADMINISTRADOS</td>
                                    <td span="2"></td>
                                    <td class="nombrea" colspan="5" style="text-align:left; font-weight: bold;">XVI. QUIMIOPROFILAXIS</td>
                                </tr> 
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Total deTtratamientos</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td span="2"></td>
                                    <td class="nombrea" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Total Quimioprofilaxis Iniciadas</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Ttos. Para Casos Confirmados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041a" id="nu_041a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_041a; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td span="2"></td>
                                    <td class="nombrea" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2.  Quimioprofilaxis Malaria P. Vivax</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041c" id="nu_041c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_041c; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Ttos. Para Casos Probables</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041b" id="nu_041b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_041b; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td span="2"></td>
                                    <td class="nombrea" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;3. Quimioprofilaxis Malaria P. Falciparum</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041d" id="nu_041d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_041d; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> XVIII. SALDO MEDICAMENTOS</td>
                                    <td class="nombrea" colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Cloroquina x 250 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042a" id="nu_042a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042a; ?>"/></td>
                                    <td></td>
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;6. Clindamicina x 300 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042f" id="nu_042f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042f; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Primaquina x 15 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042b" id="nu_042b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042b; ?>"/></td>
                                    <td></td>
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;7. Quinina x 300 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042g" id="nu_042g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042g; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Primaquina x 7.5 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042c" id="nu_042c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042c; ?>"/></td>
                                    <td></td>
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;8. Mefloquina x 250 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042h" id="nu_042h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042h; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Primaquina x 5 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042d" id="nu_042d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042d; ?>"/></td>
                                    <td></td>
                                    <td class="nombrea" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;9. Artemeter x 50 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042i" id="nu_042i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042i; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombrea" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. Sulfadoxina/Primetamina x 210/25 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042e" id="nu_042e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_042e; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-3">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades">
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="2" style="text-align:right;">POBLACION:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_043a" id="nu_043a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043a; ?>"/></td>
                                    <td class="nombren"colspan="2" style="text-align:right;">PROGRAMACION ANUAL:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_043b" id="nu_043b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043b; ?>"/></td>
                                    <td class="nombren"colspan="2" style="text-align:right;">CONSULTANTES:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_043c" id="nu_043c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043c; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">I. LOCALIZACION DE CASOS:</td>
                                    <td class="nombre" colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Nº Febriles Anémicos Agudos/Verrucosos esperados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043d" id="nu_043d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043d; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;6. Nº Verrucosos Examinados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043e" id="nu_043e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043e; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Nº Febriles Anémicos Agudos Identificados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043f" id="nu_043f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043f; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;7. Nº Verrucosos Frotis (+)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043g" id="nu_043g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043g; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Nº Febriles Anémicos Agudos Examinados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043h" id="nu_043h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043h; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;8. Nº Total Láminas de Diagnóstico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043i" id="nu_043i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043i; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Nº Febriles Anémicos Agudos Frotis (+)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043j" id="nu_043j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043j; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;9. Nº Láminas de Diagnóstico (+)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043k" id="nu_043k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043k; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. Nº Verrucosos Identificados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043l" id="nu_043l"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043l; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;10. Nº Láminas de Control</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043m" id="nu_043m"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_043m; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombren" colspan="3" style="font-weight:bold;">II. INFORME DE CASOS:</th>                                  
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombren" colspan="1" style="text-align:center;"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Total de Casos</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2. Casos Confirmados:</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1. B. Aguda</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044a" id="nu_044a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044b" id="nu_044b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044c" id="nu_044c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044d" id="nu_044d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044e" id="nu_044e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044f" id="nu_044f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_044f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2. B. Verrucosa o Crónica</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045a" id="nu_045a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045b" id="nu_045b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045c" id="nu_045c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045d" id="nu_045d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045e" id="nu_045e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045f" id="nu_045f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_045f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.3. B. Grave Complicada</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046a" id="nu_046a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046b" id="nu_046b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046c" id="nu_046c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046d" id="nu_046d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046e" id="nu_046e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046f" id="nu_046f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_046f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;3. Casos Probables</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047a" id="nu_047a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047b" id="nu_047b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047c" id="nu_047c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047d" id="nu_047d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047e" id="nu_047e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047f" id="nu_047f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_047f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">III. FALLECIDOS</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048a" id="nu_048a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048b" id="nu_048b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048c" id="nu_048c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048d" id="nu_048d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048e" id="nu_048e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_048f" id="nu_048f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">IV. RAM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048g" id="nu_048g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048g; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">V. CONTROL DE COLATERALES</td>
                                    <td class="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;1. Colaterales Censados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048h" id="nu_048h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048h; ?>"/></td>
                                    <td colspan="3"></td>
                                    <td class="nombre" colspan="2">CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048_1a" id="nu_048_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048_1a; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;2. Colaterales Examinados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048i" id="nu_048i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048i; ?>"/></td>
                                    <td colspan="3"></td>
                                    <td class="nombre" colspan="2">CASOS IMPORTADOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048_1b" id="nu_048_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048_1b; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;3. Colaterales Examinados Frotis +</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048j" id="nu_048j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048j; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">VI. TRATAMIENTO UTILIZADOS</td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;1. Bartonellosis Aguda</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048k" id="nu_048k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048k; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;2. Bartonellosis Grave-Complicada</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048l" id="nu_048l"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048l; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;3. Bartonellosis Verrucosa-Crónica</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048m" id="nu_048m"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_048m; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">VII. SALDO DE MEDICAMENTOS</td>
                                    <td class="nombre" colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. CAF Fco. X 250 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1a" id="nu_049_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1a; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;7. Ciprofloxacino x 1 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1b" id="nu_049_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1b; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. CAF Cap. X 250 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049g" id="nu_049g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049g; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;8. Ciproxina x 250 mgs.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049j" id="nu_049j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049j; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. CAF Cap. X 500 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1c" id="nu_049_1c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1c; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;9. Ciprofloxacino x 500mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1d" id="nu_049_1d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1d; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. CAF Fco. X 1 gr.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049c" id="nu_049c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049c; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;10. Amoxicilina/ acido clavulanico.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1e" id="nu_049_1e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1e; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. PGNa x 1000,000</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049d" id="nu_049d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049d; ?>"/></td>
                                    <td colspan="7"></td>                                    
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;6. STM Cap. X 800/160 gr.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049_1f" id="nu_049_1f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049_1f; ?>"/></td>
                                    <td colspan="7"></td>                                    
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">VII. OTROS MEDICAMENTOS</td>
                                    <td class="nombre" colspan="8"></td>
                                </tr>
                                <tr>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CAF Cap. X 21 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049a" id="nu_049a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049a; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;STM Fco. X 1 gr.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049f" id="nu_049f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049f; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                                
                                <tr> 
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;REP. Cap. X 300 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049b" id="nu_049b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049b; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CAF. Fco. X125 mg.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049e" id="nu_049e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049e; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                                
                                <tr>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;Norfloxacina x 400 mgs</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049h" id="nu_049h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049h; ?>"/></td>                                    
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;Ciproxina x 21 mgs.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049i" id="nu_049i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_049i; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-4">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades">
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" style="border: 0px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION TOTAL:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_050a" id="nu_050a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050a; ?>"/></td>
                                    <td></td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN AREA ENDEMICA :</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_050b" id="nu_050b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050b; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="nombren"colspan="3" style="text-align:right;">PROGRAMACION ANUAL:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_050c" id="nu_050c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050c; ?>"/></td>
                                    <td></td>
                                    <td class="nombren"colspan="3" style="text-align:right;">CONSULTANTES:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_050d" id="nu_050d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050d; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" colspan="3" style="text-align:left; width: 30%;">I. LOCALIZACION DE CASOS:</td>
                                    <td class="nombren" style="text-align:center;">NRO</td>
                                    <td class="nombren" style="text-align:center;">%</td>
                                    <td colspan="4"></td>
                                    <td class="nombren" style="text-align:center;">NRO</td>
                                    <td class="nombren" style="text-align:center;">%</td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;1. NRO. DE PERSONAS CON LESIONES</td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOSPECHOSAS DE LESHMANIASIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050e" id="nu_050e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050e; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">4. NRO. DE MUESTRA P/ DIAGNOSTICO</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;2. NRO. DE PERSONAS EXAMINADAS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4.1.          FROTIS            +</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050f" id="nu_050f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050f; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1. NRO. EX/FROTIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050g" id="nu_050g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050g; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CULTIVO          +</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050h" id="nu_050h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050h; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2. NRO. EX/LEISHMANIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050i" id="nu_050i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050i; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEROLOGIA    +</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050j" id="nu_050j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050j; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.3. NRO. EX/SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050k" id="nu_050k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050k; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">5. NRO. DE MUESTRA P/ CONTROL DE TTO.</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.4. NRO. EX/CULTIVO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050l" id="nu_050l"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050l; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5.1. FROTIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050m" id="nu_050m"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050m; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;3. NRO. DE PERSONAS EXAMINADAS RP (+)</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CULTIVO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050n" id="nu_050n"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050n; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESULTADOS +A     FROTIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050o" id="nu_050o"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050o; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050p" id="nu_050p"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050p; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CULTIVO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050q" id="nu_050q"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050q; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td colspan="6" ></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050r" id="nu_050r"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_050r; ?>"/></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td colspan="6" ></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombren" colspan="3" rowspan="2" style="font-weight:bold;">II. INFORME DE CASOS:</th>                                  
                                    <th class="nombre" colspan="8"></th>
                                </tr> 
                                <tr>  		  		  		  		  		  		  		                                   
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">A. LEISHMANIASIS TOTAL</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;A.1. LEISHMANIASIS CUTANEA</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. CONF. FROTIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051a" id="nu_051a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051b" id="nu_051b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051c" id="nu_051c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051d" id="nu_051d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051e" id="nu_051e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051f" id="nu_051f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.CONF. BIOPSIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052a" id="nu_052a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052b" id="nu_052b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052c" id="nu_052c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052d" id="nu_052d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052e" id="nu_052e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052f" id="nu_052f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.CONF. CULTIVO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053a" id="nu_053a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053b" id="nu_053b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053c" id="nu_053c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053d" id="nu_053d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053e" id="nu_053e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053f" id="nu_053f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_053f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.CONF. SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054a" id="nu_054a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054b" id="nu_054b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054c" id="nu_054c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054d" id="nu_054d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054e" id="nu_054e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054f" id="nu_054f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_054f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">A. LEISHMANIASIS TOTAL</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;A.2. LEISHMANIASIS  MUCOCUTANEA</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. CONF. FROTIS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.CONF. BIOPSIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.CONF. CULTIVO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.CONF. SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;A.3. LEISHMANIASIS VISCERAL</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEISH. VISCERAL CONF.SEROLOGIA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059a" id="nu_059a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059b" id="nu_059b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059c" id="nu_059c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059d" id="nu_059d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059e" id="nu_059e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059f" id="nu_059f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;A.4. LEISHMANIASIS SIN CONFIRMACION</td> 
                                    <td colspan="8"></td>
                                </tr>     
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARASITOLOGICA</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. LEISHMANINA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060a" id="nu_060a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060b" id="nu_060b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060c" id="nu_060c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060d" id="nu_060d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060e" id="nu_060e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060f" id="nu_060f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_060f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                    
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. SIN EXAMEN DE LABORATORIO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061a" id="nu_061a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061b" id="nu_061b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061c" id="nu_061c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061d" id="nu_061d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061e" id="nu_061e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061f" id="nu_061f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_061f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. CON RESULTADO DE LABORATORIO (-)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062a" id="nu_062a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062b" id="nu_062b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062c" id="nu_062c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062d" id="nu_062d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062e" id="nu_062e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062f" id="nu_062f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_062f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombren" colspan="3" rowspan="2" style="font-weight:bold;">III. TRATAMIENTO:</th>                                  
                                    <th class="nombre" colspan="8"></th>
                                </tr> 
                                <tr>  		  		  		  		  		  		  		                                   
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">3.1 TRATAMIENTO SISTEMICO</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;PRIMER CICLO</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Tratamiento Completo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083a" id="nu_083a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083b" id="nu_083b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083c" id="nu_083c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083d" id="nu_083d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083e" id="nu_083e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083f" id="nu_083f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Curado</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084a" id="nu_084a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084b" id="nu_084b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084c" id="nu_084c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084d" id="nu_084d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084e" id="nu_084e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084f" id="nu_084f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Abandono</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085a" id="nu_085a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085b" id="nu_085b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085c" id="nu_085c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085d" id="nu_085d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085e" id="nu_085e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085f" id="nu_085f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Fracaso</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086a" id="nu_086a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086b" id="nu_086b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086c" id="nu_086c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086d" id="nu_086d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086e" id="nu_086e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_086f" id="nu_086f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_086f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDO CICLO</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Tratamiento Completo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087a" id="nu_087a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087b" id="nu_087b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087c" id="nu_087c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087d" id="nu_087d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087e" id="nu_087e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087f" id="nu_087f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Curado</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088a" id="nu_088a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088b" id="nu_088b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088c" id="nu_088c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088d" id="nu_088d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088e" id="nu_088e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_088f" id="nu_088f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_088f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Abandono</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089a" id="nu_089a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089b" id="nu_089b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089c" id="nu_089c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089d" id="nu_089d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089e" id="nu_089e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_089f" id="nu_089f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_089f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Fracaso</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090a" id="nu_090a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090b" id="nu_090b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090c" id="nu_090c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090d" id="nu_090d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090e" id="nu_090e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_090f" id="nu_090f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_090f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">3.2 TRATAMIENTO PERILESIONAL</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Tratamiento Completo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091a" id="nu_091a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091b" id="nu_091b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091c" id="nu_091c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091d" id="nu_091d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091e" id="nu_091e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_091f" id="nu_091f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_091f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Curado</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092a" id="nu_092a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092b" id="nu_092b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092c" id="nu_092c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092d" id="nu_092d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092e" id="nu_092e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_092f" id="nu_092f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_092f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Abandono</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093a" id="nu_093a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093b" id="nu_093b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093c" id="nu_093c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093d" id="nu_093d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093e" id="nu_093e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_093f" id="nu_093f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_093f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Fracaso</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094a" id="nu_094a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094b" id="nu_094b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094c" id="nu_094c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094d" id="nu_094d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094e" id="nu_094e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_094f" id="nu_094f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_094f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">3.3  LEISHMANIASIS PARA ANFOTERECIN "B"</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. LEISHMANIASIS CUTANEA</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095a" id="nu_095a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095b" id="nu_095b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095c" id="nu_095c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095d" id="nu_095d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095e" id="nu_095e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_095f" id="nu_095f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_095f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. LEISHMANIASIS MUCOSO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096a" id="nu_096a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096b" id="nu_096b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096c" id="nu_096c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096d" id="nu_096d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096e" id="nu_096e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_096f" id="nu_096f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_096f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                            </tbody>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">IV. FALLECIDOS</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3a" id="nu_063_3a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3b" id="nu_063_3b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3c" id="nu_063_3c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3d" id="nu_063_3d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3e" id="nu_063_3e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_063_3f" id="nu_063_3f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_063_3f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">IV. RAM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064a" id="nu_064a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064a; ?>"/></td>
                                    <td class="1"></td>
                                    <td class="nombren" style="text-align:right;" scope="col">%</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064b" id="nu_064b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064b; ?>"/></td>
                                    <td class="5"></td>
                                </tr>

                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">V. NRO. DE TRATAMIENTO UTILIZADOS    : </td>
                                    <td class="nombre" colspan="2"></td>
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">SALDO DE MEDICAMENTOS</td>
                                    <td class="nombre" colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;NRO. DE AMPOLLAS X TRATAMIENTO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;_Amp. X 1.5 grs. A.M  </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064d" id="nu_064d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064d; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;ABANDONOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064e" id="nu_064e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064e; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;_Amp. X 1.5 grs. SNa </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064f" id="nu_064f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064f; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td colspan="5"></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;_Amp. X 30 mgs. Aph. .</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064g" id="nu_064g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064g; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">VI. ACTIVIDADES DE CONTROL VECTORIAL</td>
                                    <td class="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;6.1. SANEAMIETO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064h" id="nu_064h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064h; ?>"/></td>
                                    <td colspan="2"></td>
                                    <td class="nombre" colspan="2">CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064_1a" id="nu_064_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064_1a; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;6.2. RESIDUALES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064i" id="nu_064i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064i; ?>"/></td>
                                    <td colspan="2"></td>
                                    <td class="nombre" colspan="2">CASOS IMPORTADOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064_1b" id="nu_064_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064_1b; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;6.3. U.L.V.</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064j" id="nu_064j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064j; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombren" scope="col" colspan="3">VII. SALDO DE INSECTICIDA   :</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064k" id="nu_064k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064k; ?>"/></td>
                                    <td class="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;ESPECIFICAR PRODUCTO : </td>                                    
                                    <td class="7"></td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <textarea name="tx_especi_prod" id="tx_especi_prod" cols="25" rows="3"><?php echo $this->infmeta->tx_especi_prod; ?></textarea>
                                    </td>                            
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> X. OBSERVACIONES</td>
                                    <td class="nombretext" colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <textarea name="tx_obs_leshma" id="tx_obs_leshma" cols="25" rows="10"><?php echo $this->infmeta->tx_obs_leshma; ?></textarea>
                                    </td>                            
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-5">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades">
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" style="border: 0px;"></th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>  		  		  		  		  		  		  		  
                                    <th class="nombren" colspan="4" rowspan="2" style="font-weight:bold;">I. LOCALIZACION DE CASOS:</th>                                  
                                    <th class="nombre" colspan="8"></th>
                                </tr> 
                                <tr>  		  		  		  		  		  		  		                                   
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. N° Febril Esperados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051a" id="nu_051a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051b" id="nu_051b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051c" id="nu_051c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051d" id="nu_051d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051e" id="nu_051e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051f" id="nu_051f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_051f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Total de Febriles Identificados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052a" id="nu_052a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052b" id="nu_052b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052c" id="nu_052c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052d" id="nu_052d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052e" id="nu_052e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052f" id="nu_052f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_052f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;3. Total de Febriles Exam. (Laboratorio - Serología)</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) NS1</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) lgG</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) lgM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Otro</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">II. INFORME DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;1. TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1. CASOS CONFIRMADOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Dengue Sin Señales de Alarma</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Dengue Con Señales de Alarma</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Dengue Grave</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Gestantes</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e) Comorbilidad y/o Factores de Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2. CASOS PROBABLES</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Dengue Sin Señales de Alarma</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_055f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Dengue Con Señales de Alarma</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_056f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Dengue Grave</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_057f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Gestantes</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e) Comorbilidad y/o Factores de Riesgo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_058f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">III. DESCARTADOS</td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;3.1. Descartados</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059a" id="nu_059a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059b" id="nu_059b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059c" id="nu_059c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059d" id="nu_059d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059e" id="nu_059e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059f" id="nu_059f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_059f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">IV. FALLECIDOS CONFIRMADOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;4.1. Serología</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) NS1</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083a" id="nu_083a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083b" id="nu_083b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083c" id="nu_083c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083d" id="nu_083d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083e" id="nu_083e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_083f" id="nu_083f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_083f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) lgG</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084a" id="nu_084a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084b" id="nu_084b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084c" id="nu_084c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084d" id="nu_084d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084e" id="nu_084e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_084f" id="nu_084f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_084f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) lgM</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085a" id="nu_085a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085b" id="nu_085b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085c" id="nu_085c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085d" id="nu_085d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085e" id="nu_085e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_085f" id="nu_085f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_085f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td class="nombren" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;4.2. Post Mortem</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Muestra anatomopatológica</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087a" id="nu_087a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087b" id="nu_087b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087c" id="nu_087c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087d" id="nu_087d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087e" id="nu_087e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_087f" id="nu_087f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_087f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">V. UNIDAD DE VIGILANCIA CLINICA</td>
                                    <td class="nombre" colspan="1" style="font-weight: bold;">N° </td>
                                    <td></td>
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">PROCEDENCIA</td>
                                    <td class="nombre" colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Implementada:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AUTOCTONOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064d" id="nu_064d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064d; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Implementada y operativa</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064e" id="nu_064e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064e; ?>"/></td>
                                    <td></td>
                                    <td class="nombre" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS IMPORTADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064f" id="nu_064f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064f; ?>"/></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">VI. TOTAL DE CASOS IMPORTADOS: </td>
                                    <td class="nombre" colspan="1" style="font-weight: bold;">N° </td>
                                    <td class="nombre" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Laboratorio:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Nexo Epidemiológico:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">VII. PERSONAL CAPACITADO EN DENGUE</td>
                                    <td class="nombre" colspan="1" style="font-weight: bold;">N° </td>
                                    <td class="nombre" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Médico:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Enfermero(a):</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Obstetra:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Otros:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;">VIII. Saldo de Medicamentos</td>
                                    <td class="nombre" colspan="1" style="font-weight: bold;">N° </td>
                                    <td class="nombre" colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;1. Cloruro de Sodio al 9%</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;2. Paracetamol Tb 500 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;3. Paracetamol Jrb. 120 mg:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;4. Paracetamol gotas 100/ml</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;5. SRO</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;6. Equipo de venoclisis</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;7. Catéter Endovenoso (N° 18)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catéter Endovenoso (N° 20)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catéter Endovenoso (N° 22)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catéter Endovenoso (N° 24)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;8. Poligelina con Electrolitos 500 mg</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_064c; ?>"/></td>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" colspan="3" style="text-align:left; width: 30%; font-weight: bold;"> IX. OBSERVACIONES</td>
                                    <td class="nombretext" colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <textarea name="tx_obs_leshma" id="tx_obs_leshma" cols="25" rows="10"><?php echo $this->infmeta->tx_obs_leshma; ?></textarea>
                                    </td>                            
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-6">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f5" summary="tabla_actividades">
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" style="border: 0px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombre" style="text-align:left;">POBLACION TOTAL:</td>              
                                    <td><input class="text" maxlength="4" type="text" name="nu_065a" id="nu_065a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065a; ?>"/></td>
                                    <td colspan="9"></td>
                                </tr>
                                <tr>
                                    <td colspan="11">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">I. DENGUE:</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065b" id="nu_065b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065b; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065c" id="nu_065c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065d" id="nu_065d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065e" id="nu_065e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065f" id="nu_065f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065f; ?>"/></td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_065g" id="nu_065g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065g; ?>"/></td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_065h" id="nu_065h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_065h; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066a" id="nu_066a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066b" id="nu_066b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066c" id="nu_066c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066d" id="nu_066d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066e" id="nu_066e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066f" id="nu_066f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_066f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEFUNCIONES</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067a" id="nu_067a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067b" id="nu_067b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067c" id="nu_067c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067d" id="nu_067d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067e" id="nu_067e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_067f" id="nu_067f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_067f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" rowspan="3" style="border: 0px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">II.  FIEBRE AMARILLA:</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068a" id="nu_068a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_068b" id="nu_068b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068c" id="nu_068c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068d" id="nu_068d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068e" id="nu_068e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068f" id="nu_068f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068f; ?>"/></td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_068g" id="nu_068g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_068g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069a" id="nu_069a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069b" id="nu_069b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069c" id="nu_069c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069d" id="nu_069d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069e" id="nu_069e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069f" id="nu_069f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_069f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;;DEFUNCIONES</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070a" id="nu_070a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070b" id="nu_070b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070c" id="nu_070c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070d" id="nu_070d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070e" id="nu_070e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_070f" id="nu_070f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="nombren"colspan="2" style="text-align:left;">Nº CASOS CON VACUNACION:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070g" id="nu_070g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070g; ?>"/></td>
                                    <td class="nombren"colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nº CASOS SIN VACUNACION:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070h" id="nu_070h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070h; ?>"/></td>
                                    <td class="nombren"colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AUTOCTONOS</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070i" id="nu_070i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="nombren"colspan="2" style="text-align:left;">FIEBRE AMARILLA SELVATICA::</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070j" id="nu_070j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070j; ?>"/></td>
                                    <td class="nombren"colspan="3" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIEBRE AMARILLA URBANA:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070k" id="nu_070k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070k; ?>"/></td>
                                    <td class="nombren"colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS IMPORTADOS:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_070l" id="nu_070l"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_070l; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" rowspan="3" style="border: 0px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">III.  BARTONELLOSIS O VERRUGA PERUANA:</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071a" id="nu_071a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071b" id="nu_071b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071c" id="nu_071c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071d" id="nu_071d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071e" id="nu_071e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071f" id="nu_071f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071f; ?>"/></td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_071g" id="nu_071g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_071g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072a" id="nu_072a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072b" id="nu_072b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072c" id="nu_072c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072d" id="nu_072d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072e" id="nu_072e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072f" id="nu_072f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_072f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEFUNCIONES</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073a" id="nu_073a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073b" id="nu_073b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073c" id="nu_073c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073d" id="nu_073d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073e" id="nu_073e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_073f" id="nu_073f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" colspan="2" style="text-align:left;">CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_073g" id="nu_073g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073g; ?>"/></td>
                                    <td class="nombren" colspan="2" style="text-align:right;">CASO FASE I:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_073h" id="nu_073h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073h; ?>"/></td>
                                    <td class="nombren" colspan="2" style="text-align:right;">CASO FASE II:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_073i" id="nu_073i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073i; ?>"/></td>
                                    <td class="nombren" colspan="2" style="text-align:right;">CASO FASE III:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_073j" id="nu_073j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="nombren" colspan="2" style="text-align:left;">CASOS IMPORTADOS</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_073k" id="nu_073k"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_073k; ?>"/></td>
                                    <td  colspan="8"></td>
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" rowspan="3" style="border: 0px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td  colspan="11" class="nombren" style="text-align:left;">IV.  LEISHMANIASIS</td>
                                </tr>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;LEISHMANIASIS CUTANEA O UTA</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074a" id="nu_074a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074b" id="nu_074b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074c" id="nu_074c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074d" id="nu_074d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074e" id="nu_074e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074f" id="nu_074f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_074g" id="nu_074g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_074g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075a" id="nu_075a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075b" id="nu_075b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075c" id="nu_075c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075d" id="nu_075d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075e" id="nu_075e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_075f" id="nu_075f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_075f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_076a" id="nu_076a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_076a; ?>"/></td>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:right;">CASOS IMPORTADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_076b" id="nu_076b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_076b; ?>"/></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" rowspan="3" style="border: 0px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;LEISHMANIASIS MUCOCUTANEA,MUCOSA O ESPUNDIA</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077a" id="nu_077a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077b" id="nu_077b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077c" id="nu_077c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077d" id="nu_077d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077e" id="nu_077e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077f" id="nu_077f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_077g" id="nu_077g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_077g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078a" id="nu_078a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078b" id="nu_078b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078c" id="nu_078c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078d" id="nu_078d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078e" id="nu_078e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_078f" id="nu_078f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_078f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_079a" id="nu_079a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_079a; ?>"/></td>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:right;">CASOS IMPORTADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_079b" id="nu_079b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_079b; ?>"/></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <thead>                                
                                <tr>                                           
                                    <th class="nombre" colspan="11" rowspan="3" style="border: 0px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="nombren"colspan="5" style="text-align:left;">V.  ENFERMEDAD DE CHAGAS:</td>
                                    <td class="nombren"colspan="3" style="text-align:right;">POBLACION EN RIESGO:</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080a" id="nu_080a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080a; ?>"/></td>
                                    <td colspan="2"></td>
                                </tr>                               
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="nombren" colspan="3" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;GRUPO ETAREO/CASOS</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">Menor 1a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">1-11a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">12-17a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">18-29a</th>                                    
                                    <th class="nombren" colspan="1" style="text-align:center;">30-59a</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">60 a y +</th>
                                    <th class="nombren" colspan="1" style="text-align:center;">TOTAL</th>
                                    <th class="nombre"></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS CONFIRMADOS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080b" id="nu_080b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080c" id="nu_080c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080d" id="nu_080d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080e" id="nu_080e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080f" id="nu_080f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_080g" id="nu_080g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_080g; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS PROBABLES</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081a" id="nu_081a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081b" id="nu_081b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081c" id="nu_081c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081d" id="nu_081d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081e" id="nu_081e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_081f" id="nu_081f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_081f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>                                           
                                    <td class="nombre" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEFUNCIONES</td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082a" id="nu_082a"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082a; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082b" id="nu_082b"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082b; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082c" id="nu_082c"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082c; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082d" id="nu_082d"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082d; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082e" id="nu_082e"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082e; ?>"/></td>
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_082f" id="nu_082f"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082f; ?>"/></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="nombren" scope="col" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;TOTAL DE CASOS</td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td class="o"><output name="T_001"></output></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AUTOCTONOS:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_082g" id="nu_082g"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082g; ?>"/></td>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">CASOS IMPORTADOS</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_082h" id="nu_082h"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082h; ?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;CASOS AGUDOS:</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_082i" id="nu_082i"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082i; ?>"/></td>
                                    <td  colspan="2"></td>
                                    <td class="nombren" colspan="2" style="text-align:left;">CASOS CRONICOS</td>
                                    <td><input class="text" maxlengtd="4" type="text" name="nu_082j" id="nu_082j"  onKeypress="return validaNum(event)" value="<?php echo $this->infmeta->nu_082j; ?>"/></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>        
        <script type="text/javascript">
            var options = {
                script: "index.php?option=com_nutritions&controller=person&task=getEncuestador&",
                varname: "encuestadorName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function (obj) {
                    document.getElementById('nu_dni').value = obj.id;
                }
            };
            var as_json = new bsn.AutoSuggest('encuestador', options);
        </script>

        <script type="text/javascript">
            var options_es = {
                script: "index.php?option=com_nutritions&controller=establec&task=getEstablec&",
                varname: "establecName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function (obj) {
                    document.getElementById('cod_2000').value = obj.id;
                }
            };
            var as_json_es = new bsn.AutoSuggest('establec', options_es);
        </script> 

    </div>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->infmeta->id_meta; ?>" />
    <input type="hidden" name="id_meta" value="<?php echo $this->infmeta->id_meta; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="infmeta" />
</form>
