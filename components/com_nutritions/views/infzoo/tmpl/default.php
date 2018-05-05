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
<form id="frmInfzoo" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmInfzoo" 
      oninput=" 
      ">
    <div class="container">
        <div>
            <fieldset>
                <legend>Acciones</legend>

                <input type="button" id="btngrabar" value="Grabar" onclick="validateFields_infzoo();"/>
                <label></label>
                <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                <label></label>
                <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                <label></label>
                <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction';
                        document.getElementById('frmInfzoo').submit();"/>
            </fieldset>
        </div>
        <div>&nbsp;</div>       
        <div class="elegant-aero">
            <input style="font-size: 12px;" placeholder="Personal de Salud" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->infzoo->encuestador_name; ?>" required autofocus/>
            <input type="hidden" name="nu_dni" id="nu_dni" value="<?php echo $this->infzoo->nu_dni; ?>" required autofocus/>
            <input style="font-size: 12px;" placeholder="Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->infzoo->establec_name; ?>" required autofocus/>
            <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->infzoo->cod_2000; ?>" required/>
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
                <label for="tab-1" class="tab-label-1">Rabia Urbana</label>

                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">Brucelosis</label>

                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">Ponzoñosos</label>

                <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
                <label for="tab-4" class="tab-label-4">Peste</label>

                <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
                <label for="tab-5" class="tab-label-5">Carbunco</label>

                <input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />
                <label for="tab-6" class="tab-label-6">Leptospirosis</label>

                <input id="tab-7" type="radio" name="radio-set" class="tab-selector-7" />
                <label for="tab-7" class="tab-label-7">Fascioliasis</label>

                <div class="clear-shadow"></div>

                <div class="content">
                    <div class="content-1">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">MORTALIDAD</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Casos de Rabia humana</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="G_001"></output></td>                                    
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001a" id="nu_001a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001b" id="nu_001b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001c" id="nu_001c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001d" id="nu_001d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001e" id="nu_001e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001f" id="nu_001f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001g" id="nu_001g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001h" id="nu_001h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001i" id="nu_001i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001j" id="nu_001j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_001k" id="nu_001k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_001k; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">PERSONAS MORDIDAS</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:center;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_002"></output></td>
                                    <td class="o"><output name="TA_002"></output></td>
                                    <td class="o"><output name="TB_002"></output></td>
                                    <td class="o"><output name="TC_002"></output></td>
                                    <td class="o"><output name="TD_002"></output></td>
                                    <td class="o"><output name="TE_002"></output></td>
                                    <td class="o"><output name="TGE_002"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_002"></output></td>
                                    <td class="o"><output name="TMA_002"></output></td>
                                    <td class="o"><output name="TMB_002"></output></td>
                                    <td class="o"><output name="TMC_002"></output></td>
                                    <td class="o"><output name="TMD_002"></output></td>
                                    <td class="o"><output name="TME_002"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_002"></output></td>
                                    <td class="o"><output name="TFA_002"></output></td>
                                    <td class="o"><output name="TFB_002"></output></td>
                                    <td class="o"><output name="TFC_002"></output></td>
                                    <td class="o"><output name="TFD_002"></output></td>
                                    <td class="o"><output name="TFE_002"></output></td>
                                    <td class="o"><output name="TFG_002"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Por can o gato conocido</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_002"></output></td>
                                    <td class="o"><output name="A_002"></output></td>
                                    <td class="o"><output name="B_002"></output></td>
                                    <td class="o"><output name="C_002"></output></td>
                                    <td class="o"><output name="D_002"></output></td>
                                    <td class="o"><output name="E_002"></output></td>
                                    <td class="o"><output name="G_002"></output></td>  
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_002"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002a" id="nu_002a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002b" id="nu_002b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002c" id="nu_002c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002d" id="nu_002d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002e" id="nu_002e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_002"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002f" id="nu_002f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002g" id="nu_002g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002h" id="nu_002h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002i" id="nu_002i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002j" id="nu_002j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_002k" id="nu_002k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_002k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Por can o gato desconocido</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_003"></output></td>
                                    <td class="o"><output name="A_003"></output></td>
                                    <td class="o"><output name="B_003"></output></td>
                                    <td class="o"><output name="C_003"></output></td>
                                    <td class="o"><output name="D_003"></output></td>
                                    <td class="o"><output name="E_003"></output></td>
                                    <td class="o"><output name="G_003"></output></td>  
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_003"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003a" id="nu_003a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003b" id="nu_003b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003c" id="nu_003c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003d" id="nu_003d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003e" id="nu_003e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_003"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003f" id="nu_003f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003g" id="nu_003g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003h" id="nu_003h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003i" id="nu_003i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003j" id="nu_003j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_003k" id="nu_003k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_003k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Por otros animales</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_004"></output></td>
                                    <td class="o"><output name="A_004"></output></td>
                                    <td class="o"><output name="B_004"></output></td>
                                    <td class="o"><output name="C_004"></output></td>
                                    <td class="o"><output name="D_004"></output></td>
                                    <td class="o"><output name="E_004"></output></td>
                                    <td class="o"><output name="G_004"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_004"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004a" id="nu_004a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004b" id="nu_004b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004c" id="nu_004c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004d" id="nu_004d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004e" id="nu_004e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_004"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004f" id="nu_004f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004g" id="nu_004g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004h" id="nu_004h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004i" id="nu_004i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004j" id="nu_004j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_004k" id="nu_004k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Por animal con diagnóstico positivo a rabia</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_004"></output></td>
                                    <td class="o"><output name="A_004"></output></td>
                                    <td class="o"><output name="B_004"></output></td>
                                    <td class="o"><output name="C_004"></output></td>
                                    <td class="o"><output name="D_004"></output></td>
                                    <td class="o"><output name="E_004"></output></td>
                                    <td class="o"><output name="G_004"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_004"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004l" id="nu_004l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004m" id="nu_004m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004n" id="nu_004n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004o" id="nu_004o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004p" id="nu_004p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004p; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_004"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004q" id="nu_004q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004r" id="nu_004r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004s" id="nu_004s"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004t" id="nu_004t"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004t; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004u" id="nu_004u"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004u; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_004v" id="nu_004v"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_004v; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">CONDICIÓN DE LA EXPOSICIÓN</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Con exposición leve</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_005"></output></td>
                                    <td class="o"><output name="A_005"></output></td>
                                    <td class="o"><output name="B_005"></output></td>
                                    <td class="o"><output name="C_005"></output></td>
                                    <td class="o"><output name="D_005"></output></td>
                                    <td class="o"><output name="E_005"></output></td>
                                    <td class="o"><output name="G_005"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_005"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005a" id="nu_005a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005b" id="nu_005b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005c" id="nu_005c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005d" id="nu_005d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005e" id="nu_005e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_005"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005f" id="nu_005f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005g" id="nu_005g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005h" id="nu_005h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005i" id="nu_005i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005j" id="nu_005j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_005k" id="nu_005k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_005k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Con exposición grave</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_006"></output></td>
                                    <td class="o"><output name="A_006"></output></td>
                                    <td class="o"><output name="B_006"></output></td>
                                    <td class="o"><output name="C_006"></output></td>
                                    <td class="o"><output name="D_006"></output></td>
                                    <td class="o"><output name="E_006"></output></td>
                                    <td class="o"><output name="G_006"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_006"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006a" id="nu_006a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006b" id="nu_006b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006c" id="nu_006c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006d" id="nu_006d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006e" id="nu_006e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_006"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006f" id="nu_006f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006g" id="nu_006g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006h" id="nu_006h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006i" id="nu_006i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006j" id="nu_006j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_006k" id="nu_006k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_006k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">CONTACTOS DE RABIA</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">N° de Contactos atendidos</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_007"></output></td>
                                    <td class="o"><output name="A_007"></output></td>
                                    <td class="o"><output name="B_007"></output></td>
                                    <td class="o"><output name="C_007"></output></td>
                                    <td class="o"><output name="D_007"></output></td>
                                    <td class="o"><output name="E_007"></output></td>
                                    <td class="o"><output name="G_007"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_007"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007a" id="nu_007a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007b" id="nu_007b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007c" id="nu_007c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007d" id="nu_007d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007e" id="nu_007e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_007"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007f" id="nu_007f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007g" id="nu_007g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007h" id="nu_007h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007i" id="nu_007i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007j" id="nu_007j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_007k" id="nu_007k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_007k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="9" style="text-align:center;">TRATAMIENTO</th>
                                </tr>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">INICIAN TRATAMIENTO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Inician tratamiento esquema reducido</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_009"></output></td>
                                    <td class="o"><output name="A_009"></output></td>
                                    <td class="o"><output name="B_009"></output></td>
                                    <td class="o"><output name="C_009"></output></td>
                                    <td class="o"><output name="D_009"></output></td>
                                    <td class="o"><output name="E_009"></output></td>
                                    <td class="o"><output name="G_009"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_009"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009a" id="nu_009a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009b" id="nu_009b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009c" id="nu_009c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009d" id="nu_009d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009e" id="nu_009e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_009"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009f" id="nu_009f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009g" id="nu_009g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009h" id="nu_009h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009i" id="nu_009i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_009j" id="nu_009j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_009k" id="nu_009k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_009k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">COMPLETAN TRATAMIENTO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Esquema Reducido</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_011"></output></td>
                                    <td class="o"><output name="A_011"></output></td>
                                    <td class="o"><output name="B_011"></output></td>
                                    <td class="o"><output name="C_011"></output></td>
                                    <td class="o"><output name="D_011"></output></td>
                                    <td class="o"><output name="E_011"></output></td>
                                    <td class="o"><output name="G_011"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_011"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011a" id="nu_011a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011b" id="nu_011b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011c" id="nu_011c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011d" id="nu_011d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011e" id="nu_011e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_011"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011f" id="nu_011f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011g" id="nu_011g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011h" id="nu_011h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011i" id="nu_011i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_011j" id="nu_011j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_011k" id="nu_011k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_011k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">TRATAMIENTOS INCOMPLETOS</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:center;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_012"></output></td>
                                    <td class="o"><output name="TA_012"></output></td>
                                    <td class="o"><output name="TB_012"></output></td>
                                    <td class="o"><output name="TC_012"></output></td>
                                    <td class="o"><output name="TD_012"></output></td>
                                    <td class="o"><output name="TE_012"></output></td>
                                    <td class="o"><output name="TGE_012"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_012"></output></td>
                                    <td class="o"><output name="TMA_012"></output></td>
                                    <td class="o"><output name="TMB_012"></output></td>
                                    <td class="o"><output name="TMC_012"></output></td>
                                    <td class="o"><output name="TMD_012"></output></td>
                                    <td class="o"><output name="TME_012"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_012"></output></td>
                                    <td class="o"><output name="TFA_012"></output></td>
                                    <td class="o"><output name="TFB_012"></output></td>
                                    <td class="o"><output name="TFC_012"></output></td>
                                    <td class="o"><output name="TFD_012"></output></td>
                                    <td class="o"><output name="TFE_012"></output></td>
                                    <td class="o"><output name="TFG_012"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Suspensión de tratamiento</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_012"></output></td>
                                    <td class="o"><output name="A_012"></output></td>
                                    <td class="o"><output name="B_012"></output></td>
                                    <td class="o"><output name="C_012"></output></td>
                                    <td class="o"><output name="D_012"></output></td>
                                    <td class="o"><output name="E_012"></output></td>
                                    <td class="o"><output name="G_012"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_012"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012a" id="nu_012a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012b" id="nu_012b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012c" id="nu_012c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012d" id="nu_012d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012e" id="nu_012e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_012"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012f" id="nu_012f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012g" id="nu_012g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012h" id="nu_012h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012i" id="nu_012i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012j" id="nu_012j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_012k" id="nu_012k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_012k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Abandono de tratamiento</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_013"></output></td>
                                    <td class="o"><output name="A_013"></output></td>
                                    <td class="o"><output name="B_013"></output></td>
                                    <td class="o"><output name="C_013"></output></td>
                                    <td class="o"><output name="D_013"></output></td>
                                    <td class="o"><output name="E_013"></output></td>
                                    <td class="o"><output name="G_013"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_013"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013a" id="nu_013a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013b" id="nu_013b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013c" id="nu_013c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013d" id="nu_013d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013e" id="nu_013e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_013"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013f" id="nu_013f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013g" id="nu_013g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013h" id="nu_013h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013i" id="nu_013i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013j" id="nu_013j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_013k" id="nu_013k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_013k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Transferido</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_014"></output></td>
                                    <td class="o"><output name="A_014"></output></td>
                                    <td class="o"><output name="B_014"></output></td>
                                    <td class="o"><output name="C_014"></output></td>
                                    <td class="o"><output name="D_014"></output></td>
                                    <td class="o"><output name="E_014"></output></td>
                                    <td class="o"><output name="G_014"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_014"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014a" id="nu_014a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014b" id="nu_014b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014c" id="nu_014c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014d" id="nu_014d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014e" id="nu_014e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_014"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014f" id="nu_014f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014g" id="nu_014g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014h" id="nu_014h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014i" id="nu_014i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014j" id="nu_014j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_014k" id="nu_014k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_014k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Transferido controlado</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_015"></output></td>
                                    <td class="o"><output name="A_015"></output></td>
                                    <td class="o"><output name="B_015"></output></td>
                                    <td class="o"><output name="C_015"></output></td>
                                    <td class="o"><output name="D_015"></output></td>
                                    <td class="o"><output name="E_015"></output></td>
                                    <td class="o"><output name="G_015"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_015"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015a" id="nu_015a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015b" id="nu_015b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015c" id="nu_015c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015d" id="nu_015d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015e" id="nu_015e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_015"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015f" id="nu_015f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015g" id="nu_015g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015h" id="nu_015h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015i" id="nu_015i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015j" id="nu_015j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_015k" id="nu_015k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_015k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:center; font-size: 1.1em;">TOTAL DE DOSIS APLICADAS</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_016"></output></td>
                                    <td class="o"><output name="A_016"></output></td>
                                    <td class="o"><output name="B_016"></output></td>
                                    <td class="o"><output name="C_016"></output></td>
                                    <td class="o"><output name="D_016"></output></td>
                                    <td class="o"><output name="E_016"></output></td>
                                    <td class="o"><output name="G_016"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_016"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016a" id="nu_016a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016b" id="nu_016b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016c" id="nu_016c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016d" id="nu_016d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016e" id="nu_016e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_016"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016f" id="nu_016f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016g" id="nu_016g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016h" id="nu_016h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016i" id="nu_016i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016j" id="nu_016j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_016k" id="nu_016k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_016k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">RABIA EN ANIMALES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2"  scope="col">&nbsp;&nbsp;Rabia Canina</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017a" id="nu_017a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017a; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Rabia en gatos</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_017b" id="nu_017b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017b; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Rabia en otras especies</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017c" id="nu_017c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017c; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">ANIMALES MORDEDORES</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">Total de animal mordedores</th>
                                    <th><output name="T2_017"></output></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Canes mordedores</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017d" id="nu_017d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017d; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Gatos mordedores</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_017e" id="nu_017e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017e; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1"colspan="2"  scope="col">&nbsp;&nbsp;Otros animales</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017f" id="nu_017f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017f; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">Total de animal mordedores conocidos</th>
                                    <th scope="col" colspan="1" style="text-align:center;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Canes mordedores conocidos</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_017g" id="nu_017g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017g; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Gatos mordedores conocidos</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_017h" id="nu_017h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017h; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Otros animales mordedores conocidos</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017_1a" id="nu_017_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017_1a; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">Total de animales mordedores observados</th>
                                    <th><output name="T4_017"></output></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Canes observados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017i" id="nu_017i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017i; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Gatos y otros domesticos observados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017j" id="nu_017j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017j; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Otros animales mordedores observados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_017_1b" id="nu_017_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_017_1b; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">ACTIVIDADES EN CANES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Canes Vacunados contra la rabia</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_018a" id="nu_018a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018a; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Canes Eliminados en control de foco</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_018b" id="nu_018b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018b; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Can muerto en observación</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_018c" id="nu_018c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018c; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">MUESTRAS</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">Total  N° de muestras remitidas</th>
                                    <th><output name="T6_017"></output></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;De can muerto en observación</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_018d" id="nu_018d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018d; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;De can por vigilancia</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_018e" id="nu_018e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018e; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Otras especies</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_018f" id="nu_018f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018f; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n0" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col" style="font-weight: bold;">&nbsp;&nbsp;Total  N° de muestras Procesadas</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_018g" id="nu_018g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018g; ?>"/></td>                                   
                                </tr>
                                <tr>
                                    <td class="n0" colspan="3">&nbsp;</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">ACTIVIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Focos Notificados</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_018h" id="nu_018h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018h; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Focos Investigados</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_018i" id="nu_018i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018i; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Focos Controlados</td>                                    
                                    <td><input class="textgris" maxlength="4" type="text" name="nu_018j" id="nu_018j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_018j; ?>"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-2">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">ATENDIDOS</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Pacientes atendidos por Sospecha de Brucelosis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_020"></output></td>
                                    <td class="o"><output name="A_020"></output></td>
                                    <td class="o"><output name="B_020"></output></td>
                                    <td class="o"><output name="C_020"></output></td>
                                    <td class="o"><output name="D_020"></output></td>
                                    <td class="o"><output name="E_020"></output></td>
                                    <td class="o"><output name="G_020"></output></td>                                    
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_020"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020a" id="nu_020a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020b" id="nu_020b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020c" id="nu_020c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020d" id="nu_020d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020e" id="nu_020e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_020"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020f" id="nu_020f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020g" id="nu_020g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020h" id="nu_020h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020i" id="nu_020i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020j" id="nu_020j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_020k" id="nu_020k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_020k; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO SEROLOGICO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis probable</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_021"></output></td>
                                    <td class="o"><output name="A_021"></output></td>
                                    <td class="o"><output name="B_021"></output></td>
                                    <td class="o"><output name="C_021"></output></td>
                                    <td class="o"><output name="D_021"></output></td>
                                    <td class="o"><output name="E_021"></output></td>
                                    <td class="o"><output name="G_021"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_021"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021a" id="nu_021a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021b" id="nu_021b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021c" id="nu_021c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021d" id="nu_021d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021e" id="nu_021e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_021"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021f" id="nu_021f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021g" id="nu_021g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021h" id="nu_021h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021i" id="nu_021i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021j" id="nu_021j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_021k" id="nu_021k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_021k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis confirmada </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_022"></output></td>
                                    <td class="o"><output name="A_022"></output></td>
                                    <td class="o"><output name="B_022"></output></td>
                                    <td class="o"><output name="C_022"></output></td>
                                    <td class="o"><output name="D_022"></output></td>
                                    <td class="o"><output name="E_022"></output></td>
                                    <td class="o"><output name="G_022"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_022"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022a" id="nu_022a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022b" id="nu_022b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022c" id="nu_022c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022d" id="nu_022d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022e" id="nu_022e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_022"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022f" id="nu_022f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022g" id="nu_022g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022h" id="nu_022h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022i" id="nu_022i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022j" id="nu_022j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_022k" id="nu_022k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_022k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO FINAL</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_023"></output></td>
                                    <td class="o"><output name="TA_023"></output></td>
                                    <td class="o"><output name="TB_023"></output></td>
                                    <td class="o"><output name="TC_023"></output></td>
                                    <td class="o"><output name="TD_023"></output></td>
                                    <td class="o"><output name="TE_023"></output></td>
                                    <td class="o"><output name="TGE_023"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_023"></output></td>
                                    <td class="o"><output name="TMA_023"></output></td>
                                    <td class="o"><output name="TMB_023"></output></td>
                                    <td class="o"><output name="TMC_023"></output></td>
                                    <td class="o"><output name="TMD_023"></output></td>
                                    <td class="o"><output name="TME_023"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_023"></output></td>
                                    <td class="o"><output name="TFA_023"></output></td>
                                    <td class="o"><output name="TFB_023"></output></td>
                                    <td class="o"><output name="TFC_023"></output></td>
                                    <td class="o"><output name="TFD_023"></output></td>
                                    <td class="o"><output name="TFE_023"></output></td>
                                    <td class="o"><output name="TFG_023"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis debida a Brucella melitensis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_023"></output></td>
                                    <td class="o"><output name="A_023"></output></td>
                                    <td class="o"><output name="B_023"></output></td>
                                    <td class="o"><output name="C_023"></output></td>
                                    <td class="o"><output name="D_023"></output></td>
                                    <td class="o"><output name="E_023"></output></td>
                                    <td class="o"><output name="G_023"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_023"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023a" id="nu_023a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023b" id="nu_023b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023c" id="nu_023c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023d" id="nu_023d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023e" id="nu_023e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_023"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023f" id="nu_023f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023g" id="nu_023g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023h" id="nu_023h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023i" id="nu_023i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023j" id="nu_023j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_023k" id="nu_023k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_023k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis debida a Brucella abortus</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_024"></output></td>
                                    <td class="o"><output name="A_024"></output></td>
                                    <td class="o"><output name="B_024"></output></td>
                                    <td class="o"><output name="C_024"></output></td>
                                    <td class="o"><output name="D_024"></output></td>
                                    <td class="o"><output name="E_024"></output></td>
                                    <td class="o"><output name="G_024"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_024"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024a" id="nu_024a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024b" id="nu_024b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024c" id="nu_024c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024d" id="nu_024d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024e" id="nu_024e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_024"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024f" id="nu_024f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024g" id="nu_024g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024h" id="nu_024h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024i" id="nu_024i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024j" id="nu_024j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_024k" id="nu_024k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_024k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis debida a Brucella suis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_025"></output></td>
                                    <td class="o"><output name="A_025"></output></td>
                                    <td class="o"><output name="B_025"></output></td>
                                    <td class="o"><output name="C_025"></output></td>
                                    <td class="o"><output name="D_025"></output></td>
                                    <td class="o"><output name="E_025"></output></td>
                                    <td class="o"><output name="G_025"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_025"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025a" id="nu_025a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025b" id="nu_025b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025c" id="nu_025c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025d" id="nu_025d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025e" id="nu_025e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_025"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025f" id="nu_025f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025g" id="nu_025g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025h" id="nu_025h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025i" id="nu_025i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025j" id="nu_025j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_025k" id="nu_025k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_025k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis debida a Brucella canis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_026"></output></td>
                                    <td class="o"><output name="A_026"></output></td>
                                    <td class="o"><output name="B_026"></output></td>
                                    <td class="o"><output name="C_026"></output></td>
                                    <td class="o"><output name="D_026"></output></td>
                                    <td class="o"><output name="E_026"></output></td>
                                    <td class="o"><output name="G_026"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_026"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026a" id="nu_026a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026b" id="nu_026b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026c" id="nu_026c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026d" id="nu_026d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026e" id="nu_026e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_026"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026f" id="nu_026f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026g" id="nu_026g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026h" id="nu_026h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026i" id="nu_026i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026j" id="nu_026j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_026k" id="nu_026k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_026k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Otras Brucelosis </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_027"></output></td>
                                    <td class="o"><output name="A_027"></output></td>
                                    <td class="o"><output name="B_027"></output></td>
                                    <td class="o"><output name="C_027"></output></td>
                                    <td class="o"><output name="D_027"></output></td>
                                    <td class="o"><output name="E_027"></output></td>
                                    <td class="o"><output name="G_027"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_027"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027a" id="nu_027a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027b" id="nu_027b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027c" id="nu_027c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027d" id="nu_027d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027e" id="nu_027e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_027"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027f" id="nu_027f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027g" id="nu_027g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027h" id="nu_027h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027i" id="nu_027i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027j" id="nu_027j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_027k" id="nu_027k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_027k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Brucelosis no especificada</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_028"></output></td>
                                    <td class="o"><output name="A_028"></output></td>
                                    <td class="o"><output name="B_028"></output></td>
                                    <td class="o"><output name="C_028"></output></td>
                                    <td class="o"><output name="D_028"></output></td>
                                    <td class="o"><output name="E_028"></output></td>
                                    <td class="o"><output name="G_028"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_028"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028a" id="nu_028a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028b" id="nu_028b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028c" id="nu_028c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028d" id="nu_028d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028e" id="nu_028e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_028"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028f" id="nu_028f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028g" id="nu_028g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028h" id="nu_028h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028i" id="nu_028i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028j" id="nu_028j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_028k" id="nu_028k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Recaída</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_029"></output></td>
                                    <td class="o"><output name="A_029"></output></td>
                                    <td class="o"><output name="B_029"></output></td>
                                    <td class="o"><output name="C_029"></output></td>
                                    <td class="o"><output name="D_029"></output></td>
                                    <td class="o"><output name="E_029"></output></td>
                                    <td class="o"><output name="G_029"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_029"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029a" id="nu_029a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029b" id="nu_029b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029c" id="nu_029c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029d" id="nu_029d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029e" id="nu_029e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_029"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029f" id="nu_029f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029g" id="nu_029g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029h" id="nu_029h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029i" id="nu_029i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029j" id="nu_029j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_029k" id="nu_029k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Recidiva</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_029"></output></td>
                                    <td class="o"><output name="A_029"></output></td>
                                    <td class="o"><output name="B_029"></output></td>
                                    <td class="o"><output name="C_029"></output></td>
                                    <td class="o"><output name="D_029"></output></td>
                                    <td class="o"><output name="E_029"></output></td>
                                    <td class="o"><output name="G_029"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_029"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029l" id="nu_029l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029m" id="nu_029m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029n" id="nu_029n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029o" id="nu_029o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029p" id="nu_029p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029p; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="M_029"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029q" id="nu_029q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029r" id="nu_029r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029s" id="nu_029s"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029t" id="nu_029t"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029t; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029u" id="nu_029u"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029v" id="nu_029v"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_029v; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">MORTALIDAD</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Personas fallecidas</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_029"></output></td>
                                    <td class="o"><output name="A_029"></output></td>
                                    <td class="o"><output name="B_029"></output></td>
                                    <td class="o"><output name="C_029"></output></td>
                                    <td class="o"><output name="D_029"></output></td>
                                    <td class="o"><output name="E_029"></output></td>
                                    <td class="o"><output name="G_029"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_028"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028l" id="nu_028l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028m" id="nu_028m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028n" id="nu_028n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028o" id="nu_028o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028p" id="nu_028p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028p; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th>  
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="T_030_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028q" id="nu_028q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028r" id="nu_028r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028s" id="nu_028s"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028t" id="nu_028t"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028t; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028u" id="nu_028u"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028v" id="nu_028v"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_028v; ?>"/></td>
                                </tr>
                            </tbody>                           
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">TRATAMIENTO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="T_030_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030a" id="nu_030a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030b" id="nu_030b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030c" id="nu_030c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030d" id="nu_030d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030e" id="nu_030e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030f" id="nu_030f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030f; ?>"/></td>

                                </tr>                            
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="T_030_2"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030g" id="nu_030g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030h" id="nu_030h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030i" id="nu_030i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030j" id="nu_030j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030k" id="nu_030k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030l" id="nu_030l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030l; ?>"/></td>                                   
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que abandonan tratamiento</td>
                                    <td class="o"><output name="T_030_2"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030m" id="nu_030m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030n" id="nu_030n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030o" id="nu_030o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030p" id="nu_030p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030p; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030q" id="nu_030q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030r" id="nu_030r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030r; ?>"/></td>                                   
                                </tr>                                                           
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">CONTROL DE BROTES</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">ACTIVIDAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2"  scope="col">&nbsp;&nbsp;Brotes Notificados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_030s" id="nu_030r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030r; ?>"/></td>                                   
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Investigados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_030t" id="nu_030t"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030t; ?>"/></td>                                   
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Controlados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_030u" id="nu_030u"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030u; ?>"/></td>                                   
                                </tr>
                            </tbody>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">AFECTADAS POR TIPO DE EXPOSICIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>	
                                    <td scope="col" colspan="2" style="text-align:left;">Alimentario</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030v" id="nu_030v"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030v; ?>"/></td>                                   
                                </tr>
                                <tr>	
                                    <td scope="col" colspan="2" style="text-align:left;">Ocupacional</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030w" id="nu_030w"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_030w; ?>"/></td>                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-3">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">MORBILIDAD</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_031"></output></td>
                                    <td class="o"><output name="TA_031"></output></td>
                                    <td class="o"><output name="TB_031"></output></td>
                                    <td class="o"><output name="TC_031"></output></td>
                                    <td class="o"><output name="TD_031"></output></td>
                                    <td class="o"><output name="TE_031"></output></td>
                                    <td class="o"><output name="TGE_031"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_031"></output></td>
                                    <td class="o"><output name="TMA_031"></output></td>
                                    <td class="o"><output name="TMB_031"></output></td>
                                    <td class="o"><output name="TMC_031"></output></td>
                                    <td class="o"><output name="TMD_031"></output></td>
                                    <td class="o"><output name="TME_031"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_031"></output></td>
                                    <td class="o"><output name="TFA_031"></output></td>
                                    <td class="o"><output name="TFB_031"></output></td>
                                    <td class="o"><output name="TFC_031"></output></td>
                                    <td class="o"><output name="TFD_031"></output></td>
                                    <td class="o"><output name="TFE_031"></output></td>
                                    <td class="o"><output name="TFG_031"></output></td>
                                </tr>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left; ">ACCIDENTES POR ANIMALES OFÍDICOS</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="1_TT_031"></output></td>
                                    <td class="o"><output name="1_TA_031"></output></td>
                                    <td class="o"><output name="1_TB_031"></output></td>
                                    <td class="o"><output name="1_TC_031"></output></td>
                                    <td class="o"><output name="1_TD_031"></output></td>
                                    <td class="o"><output name="1_TE_031"></output></td>
                                    <td class="o"><output name="1_TGE_031"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="1_TM_031"></output></td>
                                    <td class="o"><output name="1_TMA_031"></output></td>
                                    <td class="o"><output name="1_TMB_031"></output></td>
                                    <td class="o"><output name="1_TMC_031"></output></td>
                                    <td class="o"><output name="1_TMD_031"></output></td>
                                    <td class="o"><output name="1_TME_031"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="1_TF_031"></output></td>
                                    <td class="o"><output name="1_TFA_031"></output></td>
                                    <td class="o"><output name="1_TFB_031"></output></td>
                                    <td class="o"><output name="1_TFC_031"></output></td>
                                    <td class="o"><output name="1_TFD_031"></output></td>
                                    <td class="o"><output name="1_TFE_031"></output></td>
                                    <td class="o"><output name="1_TFG_031"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Bothroops (Jergon, Loro, Machaco)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_031"></output></td>
                                    <td class="o"><output name="A_031"></output></td>
                                    <td class="o"><output name="B_031"></output></td>
                                    <td class="o"><output name="C_031"></output></td>
                                    <td class="o"><output name="D_031"></output></td>
                                    <td class="o"><output name="E_031"></output></td>
                                    <td class="o"><output name="G_031"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_031"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031a" id="nu_031a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031b" id="nu_031b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031c" id="nu_031c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031d" id="nu_031d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031e" id="nu_031e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_031"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031f" id="nu_031f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031g" id="nu_031g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031h" id="nu_031h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031i" id="nu_031i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031j" id="nu_031j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_031k" id="nu_031k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_031k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Mordedura de Lachesis (Shushupe)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_032"></output></td>
                                    <td class="o"><output name="A_032"></output></td>
                                    <td class="o"><output name="B_032"></output></td>
                                    <td class="o"><output name="C_032"></output></td>
                                    <td class="o"><output name="D_032"></output></td>
                                    <td class="o"><output name="E_032"></output></td>
                                    <td class="o"><output name="G_032"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_032"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032a" id="nu_032a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032b" id="nu_032b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032c" id="nu_032c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032d" id="nu_032d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032e" id="nu_032e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_032"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032f" id="nu_032f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032g" id="nu_032g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032h" id="nu_032h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032i" id="nu_032i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032j" id="nu_032j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_032k" id="nu_032k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_032k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Crotalus </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_033"></output></td>
                                    <td class="o"><output name="A_033"></output></td>
                                    <td class="o"><output name="B_033"></output></td>
                                    <td class="o"><output name="C_033"></output></td>
                                    <td class="o"><output name="D_033"></output></td>
                                    <td class="o"><output name="E_033"></output></td>
                                    <td class="o"><output name="G_033"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_033"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033a" id="nu_033a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033b" id="nu_033b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033c" id="nu_033c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033d" id="nu_033d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033e" id="nu_033e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_033"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033f" id="nu_033f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033g" id="nu_033g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033h" id="nu_033h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033i" id="nu_033i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033j" id="nu_033j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_033k" id="nu_033k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_033k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Personas mordidas por otras especies (serpientes y lagartos venenosos)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_034"></output></td>
                                    <td class="o"><output name="A_034"></output></td>
                                    <td class="o"><output name="B_034"></output></td>
                                    <td class="o"><output name="C_034"></output></td>
                                    <td class="o"><output name="D_034"></output></td>
                                    <td class="o"><output name="E_034"></output></td>
                                    <td class="o"><output name="G_034"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_034"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034a" id="nu_034a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034b" id="nu_034b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034c" id="nu_034c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034d" id="nu_034d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034e" id="nu_034e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_034"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034f" id="nu_034f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034g" id="nu_034g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034h" id="nu_034h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034i" id="nu_034i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034j" id="nu_034j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_034k" id="nu_034k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_034k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Personas mordidas por ofidios sin identificación </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_035"></output></td>
                                    <td class="o"><output name="A_035"></output></td>
                                    <td class="o"><output name="B_035"></output></td>
                                    <td class="o"><output name="C_035"></output></td>
                                    <td class="o"><output name="D_035"></output></td>
                                    <td class="o"><output name="E_035"></output></td>
                                    <td class="o"><output name="G_035"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_035"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035a" id="nu_035a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035b" id="nu_035b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035c" id="nu_035c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035d" id="nu_035d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035e" id="nu_035e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_035"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035f" id="nu_035f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035g" id="nu_035g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035h" id="nu_035h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035i" id="nu_035i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035j" id="nu_035j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_035k" id="nu_035k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_035k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">ACCIDENTES POR ARÁCNIDOS</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="1_TT_036"></output></td>
                                    <td class="o"><output name="1_TA_036"></output></td>
                                    <td class="o"><output name="1_TB_036"></output></td>
                                    <td class="o"><output name="1_TC_036"></output></td>
                                    <td class="o"><output name="1_TD_036"></output></td>
                                    <td class="o"><output name="1_TE_036"></output></td>
                                    <td class="o"><output name="1_TGE_036"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="1_TM_036"></output></td>
                                    <td class="o"><output name="1_TMA_036"></output></td>
                                    <td class="o"><output name="1_TMB_036"></output></td>
                                    <td class="o"><output name="1_TMC_036"></output></td>
                                    <td class="o"><output name="1_TMD_036"></output></td>
                                    <td class="o"><output name="1_TME_036"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="1_TF_036"></output></td>
                                    <td class="o"><output name="1_TFA_036"></output></td>
                                    <td class="o"><output name="1_TFB_036"></output></td>
                                    <td class="o"><output name="1_TFC_036"></output></td>
                                    <td class="o"><output name="1_TFD_036"></output></td>
                                    <td class="o"><output name="1_TFE_036"></output></td>
                                    <td class="o"><output name="1_TFG_036"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Loxosceles (araña casera)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_036"></output></td>
                                    <td class="o"><output name="A_036"></output></td>
                                    <td class="o"><output name="B_036"></output></td>
                                    <td class="o"><output name="C_036"></output></td>
                                    <td class="o"><output name="D_036"></output></td>
                                    <td class="o"><output name="E_036"></output></td>
                                    <td class="o"><output name="G_036"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_036"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036a" id="nu_036a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036b" id="nu_036b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036c" id="nu_036c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036d" id="nu_036d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036e" id="nu_036e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_036"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036f" id="nu_036f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036g" id="nu_036g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036h" id="nu_036h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036i" id="nu_036i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_036j" id="nu_036j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_036k" id="nu_036k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_036k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Lacrodectus (araña silvestre o viuda negra)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_037"></output></td>
                                    <td class="o"><output name="A_037"></output></td>
                                    <td class="o"><output name="B_037"></output></td>
                                    <td class="o"><output name="C_037"></output></td>
                                    <td class="o"><output name="D_037"></output></td>
                                    <td class="o"><output name="E_037"></output></td>
                                    <td class="o"><output name="G_037"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_037"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037a" id="nu_037a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037b" id="nu_037b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037c" id="nu_037c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037d" id="nu_037d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037e" id="nu_037e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_037"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037f" id="nu_037f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037g" id="nu_037g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037h" id="nu_037h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037i" id="nu_037i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037j" id="nu_037j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_037k" id="nu_037k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037k; ?>"/></td> 
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Phoneutria (araña de platano o mercado de frutas)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                    <td class="o"></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_037"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037l" id="nu_037l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037m" id="nu_037m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037n" id="nu_037n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037o" id="nu_037o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037p" id="nu_037p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037p; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="M_037"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037q" id="nu_037q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037r" id="nu_037r"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037s" id="nu_037s"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037t" id="nu_037t"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037t; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037u" id="nu_037u"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037v" id="nu_037v"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_037v; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Escorpión o Alacrán</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_038"></output></td>
                                    <td class="o"><output name="A_038"></output></td>
                                    <td class="o"><output name="B_038"></output></td>
                                    <td class="o"><output name="C_038"></output></td>
                                    <td class="o"><output name="D_038"></output></td>
                                    <td class="o"><output name="E_038"></output></td>
                                    <td class="o"><output name="G_038"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_038"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038a" id="nu_038a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038b" id="nu_038b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038c" id="nu_038c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038d" id="nu_038d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038e" id="nu_038e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_038"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038f" id="nu_038f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038g" id="nu_038g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038h" id="nu_038h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038i" id="nu_038i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038j" id="nu_038j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_038k" id="nu_038k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_038k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Persona mordida por Otros arácnidos o no definidos</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_039"></output></td>
                                    <td class="o"><output name="A_039"></output></td>
                                    <td class="o"><output name="B_039"></output></td>
                                    <td class="o"><output name="C_039"></output></td>
                                    <td class="o"><output name="D_039"></output></td>
                                    <td class="o"><output name="E_039"></output></td>
                                    <td class="o"><output name="G_039"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_039"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039a" id="nu_039a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039b" id="nu_039b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039c" id="nu_039c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039d" id="nu_039d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039e" id="nu_039e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_039"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039f" id="nu_039f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039g" id="nu_039g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039h" id="nu_039h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039i" id="nu_039i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039j" id="nu_039j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_039k" id="nu_039k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_039k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">ACCIDENTES POR OTRAS ESPECIES</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="1_TT_040"></output></td>
                                    <td class="o"><output name="1_TA_040"></output></td>
                                    <td class="o"><output name="1_TB_040"></output></td>
                                    <td class="o"><output name="1_TC_040"></output></td>
                                    <td class="o"><output name="1_TD_040"></output></td>
                                    <td class="o"><output name="1_TE_040"></output></td>
                                    <td class="o"><output name="1_TGE_040"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="1_TM_040"></output></td>
                                    <td class="o"><output name="1_TMA_040"></output></td>
                                    <td class="o"><output name="1_TMB_040"></output></td>
                                    <td class="o"><output name="1_TMC_040"></output></td>
                                    <td class="o"><output name="1_TMD_040"></output></td>
                                    <td class="o"><output name="1_TME_040"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="1_TF_040"></output></td>
                                    <td class="o"><output name="1_TFA_040"></output></td>
                                    <td class="o"><output name="1_TFB_040"></output></td>
                                    <td class="o"><output name="1_TFC_040"></output></td>
                                    <td class="o"><output name="1_TFD_040"></output></td>
                                    <td class="o"><output name="1_TFE_040"></output></td>
                                    <td class="o"><output name="1_TFG_040"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Por especies larvarias (orugas, gusanos, etc)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_040"></output></td>
                                    <td class="o"><output name="A_040"></output></td>
                                    <td class="o"><output name="B_040"></output></td>
                                    <td class="o"><output name="C_040"></output></td>
                                    <td class="o"><output name="D_040"></output></td>
                                    <td class="o"><output name="E_040"></output></td>
                                    <td class="o"><output name="G_040"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_040"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040a" id="nu_040a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040b" id="nu_040b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040c" id="nu_040c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040d" id="nu_040d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040e" id="nu_040e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_040"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040f" id="nu_040f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040g" id="nu_040g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040h" id="nu_040h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040i" id="nu_040i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040j" id="nu_040j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_040k" id="nu_040k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_040k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Por Avispones, Avispas, Abejas</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_041"></output></td>
                                    <td class="o"><output name="A_041"></output></td>
                                    <td class="o"><output name="B_041"></output></td>
                                    <td class="o"><output name="C_041"></output></td>
                                    <td class="o"><output name="D_041"></output></td>
                                    <td class="o"><output name="E_041"></output></td>
                                    <td class="o"><output name="G_041"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_041"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041a" id="nu_041a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041b" id="nu_041b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041c" id="nu_041c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041d" id="nu_041d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041e" id="nu_041e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_041"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041f" id="nu_041f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041g" id="nu_041g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041h" id="nu_041h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041i" id="nu_041i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041j" id="nu_041j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_041k" id="nu_041k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_041k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Por otros artrópodos Venenosos (hormigas, etc)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_042"></output></td>
                                    <td class="o"><output name="A_042"></output></td>
                                    <td class="o"><output name="B_042"></output></td>
                                    <td class="o"><output name="C_042"></output></td>
                                    <td class="o"><output name="D_042"></output></td>
                                    <td class="o"><output name="E_042"></output></td>
                                    <td class="o"><output name="G_042"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_042"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042a" id="nu_042a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042b" id="nu_042b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042c" id="nu_042c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042d" id="nu_042d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042e" id="nu_042e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_042"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042f" id="nu_042f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042g" id="nu_042g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042h" id="nu_042h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042i" id="nu_042i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042j" id="nu_042j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_042k" id="nu_042k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_042k; ?>"/></td>            
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-4">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Casos sospechosos de Peste </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_043_1"></output></td>
                                    <td class="o"><output name="A_043_1"></output></td>
                                    <td class="o"><output name="B_043_1"></output></td>
                                    <td class="o"><output name="C_043_1"></output></td>
                                    <td class="o"><output name="D_043_1"></output></td>
                                    <td class="o"><output name="E_043_1"></output></td>
                                    <td class="o"><output name="G_043_1"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_043_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1a" id="nu_043_1a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1b" id="nu_043_1b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1c" id="nu_043_1c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1d" id="nu_043_1d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1e" id="nu_043_1e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_043_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1f" id="nu_043_1f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1g" id="nu_043_1g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1h" id="nu_043_1h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1i" id="nu_043_1i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1j" id="nu_043_1j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_043_1k" id="nu_043_1k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043_1k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Casos probables de Peste </td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_043"></output></td>
                                    <td class="o"><output name="A_043"></output></td>
                                    <td class="o"><output name="B_043"></output></td>
                                    <td class="o"><output name="C_043"></output></td>
                                    <td class="o"><output name="D_043"></output></td>
                                    <td class="o"><output name="E_043"></output></td>
                                    <td class="o"><output name="G_043"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_043"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043a" id="nu_043a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043b" id="nu_043b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043c" id="nu_043c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043d" id="nu_043d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043e" id="nu_043e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_043"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043f" id="nu_043f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043g" id="nu_043g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043h" id="nu_043h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043i" id="nu_043i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043j" id="nu_043j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_043k" id="nu_043k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_043k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Contactos atendidos</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_044"></output></td>
                                    <td class="o"><output name="A_044"></output></td>
                                    <td class="o"><output name="B_044"></output></td>
                                    <td class="o"><output name="C_044"></output></td>
                                    <td class="o"><output name="D_044"></output></td>
                                    <td class="o"><output name="E_044"></output></td>
                                    <td class="o"><output name="G_044"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_044"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044a" id="nu_044a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044b" id="nu_044b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044c" id="nu_044c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044d" id="nu_044d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044e" id="nu_044e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_044"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044f" id="nu_044f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044g" id="nu_044g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044h" id="nu_044h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044i" id="nu_044i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044j" id="nu_044j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_044k" id="nu_044k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_044k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">ADMINISTRACIÓN DE TRATAMIENTO EN CASOS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="2" style="text-align:center;">Tratamiento</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="1_T_045"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045a" id="nu_045a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045b" id="nu_045b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045c" id="nu_045c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045d" id="nu_045d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045e" id="nu_045e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045f" id="nu_045f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045f; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="2_T_045"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045g" id="nu_045g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045h" id="nu_045h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045i" id="nu_045i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045j" id="nu_045j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_045k" id="nu_045k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045k; ?>"/></td>            
                                    <td><input class="text" maxlength="4" type="text" name="nu_045l" id="nu_045l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_045l; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">ADMINISTRACIÓN DE TRATAMIENTO EN CONTACTOS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="2" style="text-align:center;">Tratamiento</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="1_T_046"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046a" id="nu_046a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046b" id="nu_046b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046c" id="nu_046c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046d" id="nu_046d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046e" id="nu_046e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046f" id="nu_046f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046f; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="2_T_046"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046g" id="nu_046g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046h" id="nu_046h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046i" id="nu_046i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046j" id="nu_046j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_046k" id="nu_046k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046k; ?>"/></td>            
                                    <td><input class="text" maxlength="4" type="text" name="nu_046l" id="nu_046l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_046l; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">MUESTRAS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center;">Tipo de muestra </th>
                                    <th scope="col" colspan="2" style="text-align:center;">Nº Muestras</th>
                                    <th scope="col" colspan="2" style="text-align:center;">RESULTADOS</th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="1" style="text-align:center;">Remitidas</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Procesadas</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Remitidas</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Procesadas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Humano</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047a" id="nu_047a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047b" id="nu_047b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047c" id="nu_047c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047d" id="nu_047d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Perro</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047e" id="nu_047e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047f" id="nu_047f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047g" id="nu_047g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047h" id="nu_047h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_047h; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Roedores</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048a" id="nu_048a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048b" id="nu_048b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048c" id="nu_048c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048d" id="nu_048d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Pulgas</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048e" id="nu_048e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048f" id="nu_048f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048g" id="nu_048g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048h" id="nu_048h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_048h; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">RESULTADOS A PRIMERA VISTA</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">Diagnósticos humanos</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_049"></output></td>
                                    <td class="o"><output name="TA_049"></output></td>
                                    <td class="o"><output name="TB_049"></output></td>
                                    <td class="o"><output name="TC_049"></output></td>
                                    <td class="o"><output name="TD_049"></output></td>
                                    <td class="o"><output name="TE_049"></output></td>
                                    <td class="o"><output name="TGE_049"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_049"></output></td>
                                    <td class="o"><output name="TMA_049"></output></td>
                                    <td class="o"><output name="TMB_049"></output></td>
                                    <td class="o"><output name="TMC_049"></output></td>
                                    <td class="o"><output name="TMD_049"></output></td>
                                    <td class="o"><output name="TME_049"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_049"></output></td>
                                    <td class="o"><output name="TFA_049"></output></td>
                                    <td class="o"><output name="TFB_049"></output></td>
                                    <td class="o"><output name="TFC_049"></output></td>
                                    <td class="o"><output name="TFD_049"></output></td>
                                    <td class="o"><output name="TFE_049"></output></td>
                                    <td class="o"><output name="TFG_049"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Diagnóstico positivo</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_049"></output></td>
                                    <td class="o"><output name="A_049"></output></td>
                                    <td class="o"><output name="B_049"></output></td>
                                    <td class="o"><output name="C_049"></output></td>
                                    <td class="o"><output name="D_049"></output></td>
                                    <td class="o"><output name="E_049"></output></td>
                                    <td class="o"><output name="G_049"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_049"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049a" id="nu_049a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049b" id="nu_049b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049c" id="nu_049c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049d" id="nu_049d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049e" id="nu_049e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_049"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049f" id="nu_049f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049g" id="nu_049g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049h" id="nu_049h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049i" id="nu_049i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049j" id="nu_049j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_049k" id="nu_049k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_049k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Diagnóstico negativo</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_050"></output></td>
                                    <td class="o"><output name="A_050"></output></td>
                                    <td class="o"><output name="B_050"></output></td>
                                    <td class="o"><output name="C_050"></output></td>
                                    <td class="o"><output name="D_050"></output></td>
                                    <td class="o"><output name="E_050"></output></td>
                                    <td class="o"><output name="G_050"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_050"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050a" id="nu_050a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050b" id="nu_050b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050c" id="nu_050c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050d" id="nu_050d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050e" id="nu_050e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_050"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050f" id="nu_050f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050g" id="nu_050g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050h" id="nu_050h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050i" id="nu_050i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050j" id="nu_050j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_050k" id="nu_050k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_050k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">CASOS CONFIRMADOS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">Diagnósticos humanos</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">Casos confirmados por laboratorio:</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_051"></output></td>
                                    <td class="o"><output name="TA_051"></output></td>
                                    <td class="o"><output name="TB_051"></output></td>
                                    <td class="o"><output name="TC_051"></output></td>
                                    <td class="o"><output name="TD_051"></output></td>
                                    <td class="o"><output name="TE_051"></output></td>
                                    <td class="o"><output name="TGE_051"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_051"></output></td>
                                    <td class="o"><output name="TMA_051"></output></td>
                                    <td class="o"><output name="TMB_051"></output></td>
                                    <td class="o"><output name="TMC_051"></output></td>
                                    <td class="o"><output name="TMD_051"></output></td>
                                    <td class="o"><output name="TME_051"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_051"></output></td>
                                    <td class="o"><output name="TFA_051"></output></td>
                                    <td class="o"><output name="TFB_051"></output></td>
                                    <td class="o"><output name="TFC_051"></output></td>
                                    <td class="o"><output name="TFD_051"></output></td>
                                    <td class="o"><output name="TFE_051"></output></td>
                                    <td class="o"><output name="TFG_051"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Positivos</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_051"></output></td>
                                    <td class="o"><output name="A_051"></output></td>
                                    <td class="o"><output name="B_051"></output></td>
                                    <td class="o"><output name="C_051"></output></td>
                                    <td class="o"><output name="D_051"></output></td>
                                    <td class="o"><output name="E_051"></output></td>
                                    <td class="o"><output name="G_051"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_051"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051a" id="nu_051a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051b" id="nu_051b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051c" id="nu_051c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051d" id="nu_051d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051e" id="nu_051e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_051"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051f" id="nu_051f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051g" id="nu_051g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051h" id="nu_051h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051i" id="nu_051i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051j" id="nu_051j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_051k" id="nu_051k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_051k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Negativos</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_052"></output></td>
                                    <td class="o"><output name="A_052"></output></td>
                                    <td class="o"><output name="B_052"></output></td>
                                    <td class="o"><output name="C_052"></output></td>
                                    <td class="o"><output name="D_052"></output></td>
                                    <td class="o"><output name="E_052"></output></td>
                                    <td class="o"><output name="G_052"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_052"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052a" id="nu_052a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052b" id="nu_052b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052c" id="nu_052c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052d" id="nu_052d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052e" id="nu_052e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_052"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052f" id="nu_052f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052g" id="nu_052g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052h" id="nu_052h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052i" id="nu_052i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052j" id="nu_052j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_052k" id="nu_052k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">VIVIENDAS TRATADAS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="3" style="text-align:center;">Actividad</th>
                                </tr>                              
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Viviendas tratadas</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052l" id="nu_052l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052l; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Población protegida</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052m" id="nu_052m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052m; ?>"/></td>                                    
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Localidades Atendidas</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052n" id="nu_052n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_052n; ?>"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-5">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO PRELIMINAR</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">Casos probables:</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_053"></output></td>
                                    <td class="o"><output name="TA_053"></output></td>
                                    <td class="o"><output name="TB_053"></output></td>
                                    <td class="o"><output name="TC_053"></output></td>
                                    <td class="o"><output name="TD_053"></output></td>
                                    <td class="o"><output name="TE_053"></output></td>
                                    <td class="o"><output name="TGE_053"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_053"></output></td>
                                    <td class="o"><output name="TMA_053"></output></td>
                                    <td class="o"><output name="TMB_053"></output></td>
                                    <td class="o"><output name="TMC_053"></output></td>
                                    <td class="o"><output name="TMD_053"></output></td>
                                    <td class="o"><output name="TME_053"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_053"></output></td>
                                    <td class="o"><output name="TFA_053"></output></td>
                                    <td class="o"><output name="TFB_053"></output></td>
                                    <td class="o"><output name="TFC_053"></output></td>
                                    <td class="o"><output name="TFD_053"></output></td>
                                    <td class="o"><output name="TFE_053"></output></td>
                                    <td class="o"><output name="TFG_053"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Con examen clínico</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_053"></output></td>
                                    <td class="o"><output name="A_053"></output></td>
                                    <td class="o"><output name="B_053"></output></td>
                                    <td class="o"><output name="C_053"></output></td>
                                    <td class="o"><output name="D_053"></output></td>
                                    <td class="o"><output name="E_053"></output></td>
                                    <td class="o"><output name="G_053"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_053"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053a" id="nu_053a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053b" id="nu_053b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053c" id="nu_053c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053d" id="nu_053d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053e" id="nu_053e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_053"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053f" id="nu_053f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053g" id="nu_053g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053h" id="nu_053h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053i" id="nu_053i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053j" id="nu_053j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_053k" id="nu_053k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_053k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Con Examen Clinico + GRAM</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_054"></output></td>
                                    <td class="o"><output name="A_054"></output></td>
                                    <td class="o"><output name="B_054"></output></td>
                                    <td class="o"><output name="C_054"></output></td>
                                    <td class="o"><output name="D_054"></output></td>
                                    <td class="o"><output name="E_054"></output></td>
                                    <td class="o"><output name="G_054"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_054"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054a" id="nu_054a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054b" id="nu_054b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054c" id="nu_054c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054d" id="nu_054d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054e" id="nu_054e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_054"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054f" id="nu_054f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054g" id="nu_054g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054h" id="nu_054h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054i" id="nu_054i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054j" id="nu_054j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_054k" id="nu_054k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_054k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">MORBILIDAD</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">Diagnóstico definitivo</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_055"></output></td>
                                    <td class="o"><output name="TA_055"></output></td>
                                    <td class="o"><output name="TB_055"></output></td>
                                    <td class="o"><output name="TC_055"></output></td>
                                    <td class="o"><output name="TD_055"></output></td>
                                    <td class="o"><output name="TE_055"></output></td>
                                    <td class="o"><output name="TGE_055"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_055"></output></td>
                                    <td class="o"><output name="TMA_055"></output></td>
                                    <td class="o"><output name="TMB_055"></output></td>
                                    <td class="o"><output name="TMC_055"></output></td>
                                    <td class="o"><output name="TMD_055"></output></td>
                                    <td class="o"><output name="TME_055"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_055"></output></td>
                                    <td class="o"><output name="TFA_055"></output></td>
                                    <td class="o"><output name="TFB_055"></output></td>
                                    <td class="o"><output name="TFC_055"></output></td>
                                    <td class="o"><output name="TFD_055"></output></td>
                                    <td class="o"><output name="TFE_055"></output></td>
                                    <td class="o"><output name="TFG_055"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Carbunco cutáneo (confirmados)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_055"></output></td>
                                    <td class="o"><output name="A_055"></output></td>
                                    <td class="o"><output name="B_055"></output></td>
                                    <td class="o"><output name="C_055"></output></td>
                                    <td class="o"><output name="D_055"></output></td>
                                    <td class="o"><output name="E_055"></output></td>
                                    <td class="o"><output name="G_055"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_055"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_055"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055g" id="nu_055g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055h" id="nu_055h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055i" id="nu_055i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055j" id="nu_055j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_055k" id="nu_055k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_055k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Carbunco pulmonar (confirmados)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_056"></output></td>
                                    <td class="o"><output name="A_056"></output></td>
                                    <td class="o"><output name="B_056"></output></td>
                                    <td class="o"><output name="C_056"></output></td>
                                    <td class="o"><output name="D_056"></output></td>
                                    <td class="o"><output name="E_056"></output></td>
                                    <td class="o"><output name="G_056"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_056"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_056"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056g" id="nu_056g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056h" id="nu_056h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056i" id="nu_056i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056j" id="nu_056j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_056k" id="nu_056k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_056k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Carbunco gastrointestinal (confirmados)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_057"></output></td>
                                    <td class="o"><output name="A_057"></output></td>
                                    <td class="o"><output name="B_057"></output></td>
                                    <td class="o"><output name="C_057"></output></td>
                                    <td class="o"><output name="D_057"></output></td>
                                    <td class="o"><output name="E_057"></output></td>
                                    <td class="o"><output name="G_057"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_057"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_057"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057g" id="nu_057g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057h" id="nu_057h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057i" id="nu_057i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057j" id="nu_057j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_057k" id="nu_057k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_057k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Carbunco septicémico (confirmados)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_058"></output></td>
                                    <td class="o"><output name="A_058"></output></td>
                                    <td class="o"><output name="B_058"></output></td>
                                    <td class="o"><output name="C_058"></output></td>
                                    <td class="o"><output name="D_058"></output></td>
                                    <td class="o"><output name="E_058"></output></td>
                                    <td class="o"><output name="G_058"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_058"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_058"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058g" id="nu_058g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058h" id="nu_058h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058i" id="nu_058i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058j" id="nu_058j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_058k" id="nu_058k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_058k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">TRATAMIENTO DE CASOS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="2" style="text-align:center;">Tratamiento</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="1_T_059"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059a" id="nu_059a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059b" id="nu_059b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059c" id="nu_059c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059d" id="nu_059d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059e" id="nu_059e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059f" id="nu_059f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059f; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="2_T_059"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059g" id="nu_059g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059h" id="nu_059h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059i" id="nu_059i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059j" id="nu_059j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_059k" id="nu_059k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059k; ?>"/></td>            
                                    <td><input class="text" maxlength="4" type="text" name="nu_059l" id="nu_059l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059l; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">CONTROL DE BROTES</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">ACTIVIDAD</th>
                                    <th scope="col" style="text-align:center;">N°</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2"  scope="col">&nbsp;&nbsp;Brotes Notificados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_059m" id="nu_059m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059m; ?>"/></td>            
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Investigados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_059n" id="nu_059n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059n; ?>"/></td>            
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Controlados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_059o" id="nu_059o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059o; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="3" style="text-align:center;">AFECTADAS POR TIPO DE EXPOSICIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>	
                                    <td scope="col" colspan="2" style="text-align:left;">Alimentario</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059p" id="nu_059p"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059p; ?>"/></td>            
                                </tr>
                                <tr>	
                                    <td scope="col" colspan="2" style="text-align:left;">Ocupacional</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059q" id="nu_059q"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_059q; ?>"/></td>                    
                                </tr>
                            </tbody>
                        </table>
                    </div>                    
                    <div class="content-6">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">ATENDIDOS</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Pacientes atendidos por sospecha clínica de Leptospirosis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_060"></output></td>
                                    <td class="o"><output name="A_060"></output></td>
                                    <td class="o"><output name="B_060"></output></td>
                                    <td class="o"><output name="C_060"></output></td>
                                    <td class="o"><output name="D_060"></output></td>
                                    <td class="o"><output name="E_060"></output></td>
                                    <td class="o"><output name="G_060"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_060"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060a" id="nu_060a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060b" id="nu_060b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060c" id="nu_060c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060d" id="nu_060d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060e" id="nu_060e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_060"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060f" id="nu_060f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060g" id="nu_060g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060h" id="nu_060h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060i" id="nu_060i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060j" id="nu_060j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_060k" id="nu_060k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_060k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Diagnóstico presuntivo</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_061"></output></td>
                                    <td class="o"><output name="A_061"></output></td>
                                    <td class="o"><output name="B_061"></output></td>
                                    <td class="o"><output name="C_061"></output></td>
                                    <td class="o"><output name="D_061"></output></td>
                                    <td class="o"><output name="E_061"></output></td>
                                    <td class="o"><output name="G_061"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_061"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061a" id="nu_061a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061b" id="nu_061b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061c" id="nu_061c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061d" id="nu_061d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061e" id="nu_061e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_061"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061f" id="nu_061f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061g" id="nu_061g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061h" id="nu_061h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061i" id="nu_061i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061j" id="nu_061j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_061k" id="nu_061k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_061k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Diagnóstico serologico (confirmado)</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_062"></output></td>
                                    <td class="o"><output name="A_062"></output></td>
                                    <td class="o"><output name="B_062"></output></td>
                                    <td class="o"><output name="C_062"></output></td>
                                    <td class="o"><output name="D_062"></output></td>
                                    <td class="o"><output name="E_062"></output></td>
                                    <td class="o"><output name="G_062"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_062"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062a" id="nu_062a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062b" id="nu_062b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062c" id="nu_062c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062d" id="nu_062d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062e" id="nu_062e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_062"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062f" id="nu_062f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062g" id="nu_062g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062h" id="nu_062h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062i" id="nu_062i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062j" id="nu_062j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_062k" id="nu_062k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_062k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">MORBILIDAD</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO FINAL</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" rowspan="3" style="text-align:left;">TOTAL</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="TT_063"></output></td>
                                    <td class="o"><output name="TA_063"></output></td>
                                    <td class="o"><output name="TB_063"></output></td>
                                    <td class="o"><output name="TC_063"></output></td>
                                    <td class="o"><output name="TD_063"></output></td>
                                    <td class="o"><output name="TE_063"></output></td>
                                    <td class="o"><output name="TGE_063"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="TM_063"></output></td>
                                    <td class="o"><output name="TMA_063"></output></td>
                                    <td class="o"><output name="TMB_063"></output></td>
                                    <td class="o"><output name="TMC_063"></output></td>
                                    <td class="o"><output name="TMD_063"></output></td>
                                    <td class="o"><output name="TME_063"></output></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="TF_063"></output></td>
                                    <td class="o"><output name="TFA_063"></output></td>
                                    <td class="o"><output name="TFB_063"></output></td>
                                    <td class="o"><output name="TFC_063"></output></td>
                                    <td class="o"><output name="TFD_063"></output></td>
                                    <td class="o"><output name="TFE_063"></output></td>
                                    <td class="o"><output name="TFG_063"></output></td>
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Leptospirosis icterohemorrágica</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_063"></output></td>
                                    <td class="o"><output name="A_063"></output></td>
                                    <td class="o"><output name="B_063"></output></td>
                                    <td class="o"><output name="C_063"></output></td>
                                    <td class="o"><output name="D_063"></output></td>
                                    <td class="o"><output name="E_063"></output></td>
                                    <td class="o"><output name="G_063"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_063"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063a" id="nu_063a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063b" id="nu_063b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063c" id="nu_063c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063d" id="nu_063d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063e" id="nu_063e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_063"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063f" id="nu_063f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063g" id="nu_063g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063h" id="nu_063h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063i" id="nu_063i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063j" id="nu_063j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_063k" id="nu_063k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_063k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Otras Leptospirosis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_064"></output></td>
                                    <td class="o"><output name="A_064"></output></td>
                                    <td class="o"><output name="B_064"></output></td>
                                    <td class="o"><output name="C_064"></output></td>
                                    <td class="o"><output name="D_064"></output></td>
                                    <td class="o"><output name="E_064"></output></td>
                                    <td class="o"><output name="G_064"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_064"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064a" id="nu_064a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064b" id="nu_064b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064d" id="nu_064d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064e" id="nu_064e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_064"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064f" id="nu_064f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064g" id="nu_064g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064h" id="nu_064h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064i" id="nu_064i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064j" id="nu_064j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_064k" id="nu_064k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_064k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:left;">Leptospirosis no especificada</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_065"></output></td>
                                    <td class="o"><output name="A_065"></output></td>
                                    <td class="o"><output name="B_065"></output></td>
                                    <td class="o"><output name="C_065"></output></td>
                                    <td class="o"><output name="D_065"></output></td>
                                    <td class="o"><output name="E_065"></output></td>
                                    <td class="o"><output name="G_065"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_065"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065a" id="nu_065a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065b" id="nu_065b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065c" id="nu_065c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065d" id="nu_065d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065e" id="nu_065e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_065"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065f" id="nu_065f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065g" id="nu_065g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065h" id="nu_065h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065i" id="nu_065i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065j" id="nu_065j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_065k" id="nu_065k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_065k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>                            
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">ADMINISTRACIÓN DE TRATAMIENTO EN CASOS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="2" style="text-align:center;">Tratamiento</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="1_T_066"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066a" id="nu_066a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066b" id="nu_066b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066c" id="nu_066c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066d" id="nu_066d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066e" id="nu_066e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066f" id="nu_066f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066f; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="2_T_066"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066g" id="nu_066g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066h" id="nu_066h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066i" id="nu_066i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066j" id="nu_066j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_066k" id="nu_066k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066k; ?>"/></td>            
                                    <td><input class="text" maxlength="4" type="text" name="nu_066l" id="nu_066l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_066l; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td class="n0"colspan="9">QUIMIOPROFILAXIS</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr> 	
                                    <th scope="col" colspan="2" style="text-align:center;">Tratamiento</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que inician tratamiento</td>
                                    <td class="o"><output name="1_T_067"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067a" id="nu_067a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067b" id="nu_067b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067c" id="nu_067c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067d" id="nu_067d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067e" id="nu_067e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067f" id="nu_067f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067f; ?>"/></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" colspan="2" style="text-align:left;">Personas que completan tratamiento</td>
                                    <td class="o"><output name="2_T_067"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067g" id="nu_067g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067h" id="nu_067h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067i" id="nu_067i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067j" id="nu_067j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_067k" id="nu_067k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067k; ?>"/></td>            
                                    <td><input class="text" maxlength="4" type="text" name="nu_067l" id="nu_067l"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067l; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="2" style="text-align:center;">ACTIVIDAD</th>
                                    <th scope="col" style="text-align:center;">N°</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                           
                                    <td class="n1" colspan="2"  scope="col">&nbsp;&nbsp;Brotes Notificados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_067m" id="nu_067m"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067m; ?>"/></td>            
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Investigados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_067n" id="nu_067n"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067n; ?>"/></td>            
                                </tr>
                                <tr>                                           
                                    <td class="n1" colspan="2" scope="col">&nbsp;&nbsp;Brotes Controlados</td>                                    
                                    <td><input class="text" maxlength="4" type="text" name="nu_067o" id="nu_067o"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_067o; ?>"/></td>            
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-7">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f4" summary="tabla_actividades">
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">ATENDIDOS</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Pacientes atendidos por Sospecha de Fascioliasis</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_001"></output></td>
                                    <td class="o"><output name="A_001"></output></td>
                                    <td class="o"><output name="B_001"></output></td>
                                    <td class="o"><output name="C_001"></output></td>
                                    <td class="o"><output name="D_001"></output></td>
                                    <td class="o"><output name="E_001"></output></td>
                                    <td class="o"><output name="G_001"></output></td>                                    
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_001"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068a" id="nu_068a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068b" id="nu_068b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068c" id="nu_068c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068d" id="nu_068d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068e" id="nu_068e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_068"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068f" id="nu_068f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068g" id="nu_068g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068h" id="nu_068h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068i" id="nu_068i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068j" id="nu_068j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_068k" id="nu_068k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_068k; ?>"/></td>            
                                </tr>                                
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">DIAGNOSTICO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Fascioliasis probable</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_005"></output></td>
                                    <td class="o"><output name="A_005"></output></td>
                                    <td class="o"><output name="B_005"></output></td>
                                    <td class="o"><output name="C_005"></output></td>
                                    <td class="o"><output name="D_005"></output></td>
                                    <td class="o"><output name="E_005"></output></td>
                                    <td class="o"><output name="G_005"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_005"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069a" id="nu_069a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069b" id="nu_069b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069c" id="nu_069c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069d" id="nu_069d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069e" id="nu_069e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_069"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069f" id="nu_069f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069g" id="nu_069g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069h" id="nu_069h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069i" id="nu_069i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_069j" id="nu_069j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_069k" id="nu_069k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_069k; ?>"/></td>            
                                </tr>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Fascioliasis confirmada</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_006"></output></td>
                                    <td class="o"><output name="A_006"></output></td>
                                    <td class="o"><output name="B_006"></output></td>
                                    <td class="o"><output name="C_006"></output></td>
                                    <td class="o"><output name="D_006"></output></td>
                                    <td class="o"><output name="E_006"></output></td>
                                    <td class="o"><output name="G_006"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_006"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070a" id="nu_070a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070b" id="nu_070b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070c" id="nu_070c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070d" id="nu_070d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070e" id="nu_070e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_070"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070f" id="nu_070f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070g" id="nu_070g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070h" id="nu_070h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070i" id="nu_070i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_070j" id="nu_070j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_070k" id="nu_070k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_070k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">TRATAMIENTO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Farmacológico</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_007"></output></td>
                                    <td class="o"><output name="A_007"></output></td>
                                    <td class="o"><output name="B_007"></output></td>
                                    <td class="o"><output name="C_007"></output></td>
                                    <td class="o"><output name="D_007"></output></td>
                                    <td class="o"><output name="E_007"></output></td>
                                    <td class="o"><output name="G_007"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_007"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071a" id="nu_071a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071b" id="nu_071b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071c" id="nu_071c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071d" id="nu_071d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071e" id="nu_071e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_071"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071f" id="nu_071f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071g" id="nu_071g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071h" id="nu_071h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071i" id="nu_071i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_071j" id="nu_071j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_071k" id="nu_071k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_071k; ?>"/></td>            
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td class="n0" colspan="9">&nbsp;</td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>	
                                    <th scope="col" colspan="1" style="text-align:center;">MORTALIDAD</th>
                                    <th scope="col" colspan="1" style="text-align:center;">SEXO</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="1" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="1" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="1" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="1" style="text-align:center;">Gestante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n1" scope="col" rowspan="3" style="text-align:center;">Personas fallecidas</td>
                                    <td class="n1" scope="col" style="text-align:center;">T</td>
                                    <td class="o"><output name="T_007"></output></td>
                                    <td class="o"><output name="A_007"></output></td>
                                    <td class="o"><output name="B_007"></output></td>
                                    <td class="o"><output name="C_007"></output></td>
                                    <td class="o"><output name="D_007"></output></td>
                                    <td class="o"><output name="E_007"></output></td>
                                    <td class="o"><output name="G_007"></output></td>
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">M</td>
                                    <td class="o"><output name="M_007"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072a" id="nu_072a"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072b" id="nu_072b"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072c" id="nu_072c"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072d" id="nu_072d"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072e" id="nu_072e"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072e; ?>"/></td>
                                    <th scope="col" style="text-align:center;"></th> 
                                </tr>
                                <tr>                                           
                                    <td class="n1" scope="col" style="text-align:center;">F</td>
                                    <td class="o"><output name="F_072"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072f" id="nu_072f"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072g" id="nu_072g"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072h" id="nu_072h"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072i" id="nu_072i"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_072j" id="nu_072j"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072j; ?>"/></td>                                           
                                    <td><input class="text" maxlength="4" type="text" name="nu_072k" id="nu_072k"  onKeypress="return validaNum(event)" value="<?php echo $this->infzoo->nu_072k; ?>"/></td>            
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
                callback: function(obj) {
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
                callback: function(obj) {
                    document.getElementById('cod_2000').value = obj.id;
                }
            };
            var as_json_es = new bsn.AutoSuggest('establec', options_es);
        </script> 

    </div>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->infzoo->id_zoo; ?>" />
    <input type="hidden" name="id_zoo" value="<?php echo $this->infzoo->id_zoo; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="infzoo" />
</form>
