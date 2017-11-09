<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>JQuery- HTML to PDF - https://scotch.io/@nagasaiaytha/generate-pdf-from-html-using-jquery-and-jspdf</title>
  
  
  
      <link rel="stylesheet" href="assets/css/style.css">

  
<style>

table, th, td {	
	font-size: 10px;
    border: 1px solid black;
    border-collapse: collapse;
	
}
body{
	font-size:11px;
	style="font-family: Arial";
}

</style>
</head>

<body>
  <div id="content">
    <h3>Sample h3 tag</h3>
    <p>Sample pararaph</p>
	<center><strong>CENTRO ESTATAL DE CUIDADOS CRITICOS</strong></center>
<center><strong>UNIDAD DE CUIDADOS INTENSIVOS</strong></center>
<center><strong>MOVIMIENTO DIARIO DE PACIENTES EN </strong></center>
FECHA:
TURNO:
<table >
	
		<thead><tr><tr><th>CAMA</th></tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td></td><td>NOMBRE <input type="text" name="nombre"id="nombre"onkeyup="saltar(event,'edad')"onkeypress="return pulsar(event)"/></td><td>TA<input type="text" size="1"name="ta1"id="ta1"onkeyup="saltar(event,'ta2')"onkeypress="return pulsar(event)"/> <input type="text" size="1px"name="ta2"id="ta2"onkeyup="saltar(event,'pam')"onkeypress="return pulsar(event)"/></td><td>GLASGOW <input type="text"size="2"name="glasgow"id="glasgow"onkeyup="saltar(event,'rass')"onkeypress="return pulsar(event)"/></td><td>VM <input type="text"size="4"name="vm"id="vm"onkeyup="saltar(event,'mv')"onkeypress="return pulsar(event)"/></td><td>LSPS<input type="text"size="6"name="lsps"id="lsps"onkeyup="saltar(event,'aminas')"onkeypress="return pulsar(event)"/></td><td>BH <input type="checkbox" name="bh" value="1" id="bh"onkeyup="saltar(event,'qs')"onkeypress="return pulsar(event)"/></td><td><input type="checkbox" name="rx" value="9"id="rx"onkeyup="saltar(event,'pg1')"onkeypress="return pulsar(event)"/></td><td>
		
		<!-- Tabla de hemoderivados -->
		<table>
		<tr><th>CEEC</th><th>&nbsp;&nbsp;HGS</th>
		</table></td><td><!--Conclusiones --> 
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"></textarea></td></tr>
		<tr><td></td><td>EDAD <input type="text"name="edad"id="edad"onkeyup="saltar(event,'sexo')" onkeypress="return pulsar(event)" size="1"/></td><td>PAM <input type="text" size="2"id="pam"name="pam"onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)"/></td><td>RASS <input type="text"size="2" name="rass" id="rass"onkeyup="saltar(event,'ramsay')"onkeypress="return pulsar(event)"/></td><td>MV <select name="mv"><option value="pn">PN</option><option value="tf">TF</option><option value="ner">NEB</option><option value="pizt">PIZ T</option><option name="masu">MAS U</option><option name="cpap">CPAP</option><option name="psimv">P/SIMV</option><option name="pac">P/AC</option><option name="prucb">PRUC B</option><option name="ps">PS</option></select></td><td>AMINAS<input type="text" size="6"name="aminas"id="aminas"onkeyup="saltar(event,'sedacion')"onkeypress="return pulsar(event)"/></td><td>QS <input type="checkbox" name="qs" value="2"id="qs"onkeyup="saltar(event,'elts')"onkeypress="return pulsar(event)"/></td><td></td><td><table><tr><th>PG</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG</th></tr></table></td></tr>
		<tr><td></td><td>SEXO <select name="sexo"><option value="hombre">HOMBRE</option><option value="mujer">MUJER</option></select></td><td>FC <input type="text" size="2"name="fc"id="fc"onkeyup="saltar(event,'so2')"onkeypress="return pulsar(event)"/></td><td>RAMSAY <input type="text"size="2" name="ramsay" id="ramsay"onkeyup="saltar(event,'braden')"onkeypress="return pulsar(event)"/></td><td>FiO2% <input type="text"size="4"name="fio2"id="fio2"onkeyup="saltar(event,'so2vo')"onkeypress="return pulsar(event)"/></td><td>SEDACION<input type="text" size="6"name="sedacion"id="sedacion"onkeyup="saltar(event,'sv')"onkeypress="return pulsar(event)"/></td><td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)"/></td><td></td><td><table><tr><td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)"/></td></tr></table></td></tr>
		<tr><td></td><td>DIAGNÓSTICO <textarea name="diagnostico"id="diagnostico"onkeyup="saltar(event,'lreferencia')"onkeypress="return pulsar(event)"></textarea></td><td>SO2 <input type="text"size="2"name="so2"id="so2"  onkeyup="copiar2()"onkeypress="return pulsar(event)"/></td><td>BRADEN <input type="text"size="2" name="braden" id="braden"onkeyup="saltar(event,'crichton')"onkeypress="return pulsar(event)"/></td><td>SO2 <input type="text"size="4" name="so2vo" id="so2vo"onkeyup="saltar(event,'antb1')"onkeypress="return pulsar(event)"/></td><td><table><th>S/D</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F.I.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC</th></table></td><td>TP&nbsp;&nbsp;<input type="checkbox" name="tp" value="4"id="tp"onkeyup="saltar(event,'tpt')"onkeypress="return pulsar(event)"/></td><td></td><td><table><th>PFC</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PFC</th></table></td></tr>
		<tr><td></td><td>L. REFERENCIA <input type="text"name="lreferencia"id="lreferencia"onkeyup="saltar(event,'ingreso')"onkeypress="return pulsar(event)"/></td><td>FR <input type="text"size="2"name="fr"id="fr"onkeyup="saltar(event,'tem')"onkeypress="return pulsar(event)"/></td><td>CRICHTON <input type="text"size="2"name="crichton"id="crichton"onkeyup="saltar(event,'tiss')"onkeypress="return pulsar(event)"/></td>
		<!-- Tabla antibióticos -->
		<td>
		<table>
		<tr><th>ANTIBIÓTICOS</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DÍAS</th></tr>
		</table>
		<td><table><td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)"/></td></table></td><td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td></tr>
		<tr><td></td><td>FECHA DE INGRESO <input type="date"name="ingreso"id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)"/></td><td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)"/></td><td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)"/></td></table></td><td>CPK<input type="checkbox" name="cpk" value="6"id="cpk"onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)"/><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td></td><td>DÍA DEL EVENTO <input type="date"name="evento"id="evento"onkeyup="saltar(event,'fnacimiento')"onkeypress="return pulsar(event)"/></td><td>PVC <input type="text"size="2" name="pvc" id="pvc"onkeyup="saltar(event,'iu')"onkeypress="return pulsar(event)"/></td><td>CLASE <input type="text"size="2"name="clase"id="clase"onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)"/></td></table></td><td>EGO<input type="checkbox" name="ego" value="7"id="ego"onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td></tr>
		<tr><td></td><td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento"id="fnacimiento"onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)"/></td><td>UI <input type="text"size="2" name="iu" id="iu"onkeyup="saltar(event,'dx')"onkeypress="return pulsar(event)"/></td><td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb3"id="antb3"onkeyup="saltar(event,'dia3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia3" id="dia3"onkeyup="saltar(event,'antb4')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)"/></td></table></td><td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td><td>NO. EXPEDIENTE <input type="text"name="noexpediente"id="noexpediente"onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"/></td><td>DX <input type="text"size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)"/></td><td>DIETA <textarea type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)"></textarea></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb4"id="antb4"onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia4" id="dia4"onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1"/></td><td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)"/></td></table></td><td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td><td>NO. SPP <input type="text"name="nospp"id="nospp"onkeyup="saltar(event,'ta1')"onkeypress="return pulsar(event)"/></td><td>PIA <input type="text"size="2" name="pia" id="pia"onkeyup="saltar(event,'glasgow')"onkeypress="return pulsar(event)"/></td><td>AYUNO <input type="text"name="ayuno" id="ayuno"onkeyup="saltar(event,'vm')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb5"id="antb5"onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia5" id="dia5"onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)"/></table><td><table><td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)"/></td></table></td><td></td>
		</tbody>
		
		</td></tr>
		</tbody>
		</table>
</div>
<div id="editor"></div>
<button id="cmd">Generate PDF</button>
<!--Add External Libraries - JQuery and jspdf 
check out url - https://scotch.io/@nagasaiaytha/generate-pdf-from-html-using-jquery-and-jspdf
-->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  
    <script  src="js/index.js"></script>

</body>
</html>