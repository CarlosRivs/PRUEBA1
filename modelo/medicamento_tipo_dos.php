<?php
include 'menu2.php';
?>

 <section class="form">
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fa0303">ADVERTENCIA</h5>
        <button type="button" class="btn-close" aria-label="Close"  onclick="cerrarmodal()">X</button>
      </div>
      <div class="modal-body">
        <h4>No es recomendable el uso de estos medicamentos.<br>
        Consulte a su médico.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="cerrarmodal()">Close</button>
      </div>
    </div>
  </div>
</div>

</section>
</br>
<div class="container">
<div class="table-responsive " >
<table class="table table-info">
  <thead>

    <tr class="table-light">
      <th scope="col">Principio Activo</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Efectos adversos</th>
    </tr>
   </thead>
  <tbody>
    <tr> 
      <td>Acarbosa.</td>
      <td>Indefinido.</td>
      <td>Flatulencia, borborigmos, dolor abdominal, diarrea, reacciones alérgicas, hipoglucemia y síndrome de absorción intestinal deficiente.</td>
    </tr>
    <tr> 
      <td>Glibenclamida.</td>
      <td>Indefinido.</td>
      <td>Hipoglucemia, urticaria, fatiga, debilidad, cafalea, náuseas, diarrea, hepatitis reactiva, anemia hemolítica e hipoplasia medular.</td>
    </tr>
    <tr> 
      <td>Insulina humana.</td>
      <td>Indefinido.</td>
      <td>Hipoglucemia, ansiedad, sudoración, confusión, palidez, fatiga, inestabilidad emocional, lipodistrofia, hipersensibilidad inmediata.</td>
    </tr>
    <tr> 
      <td>Insulina lispro, lispro protamina.</td>
      <td>Indefinido.</td>
      <td>Reacciones alérgicas, lipodistrofia, hipokalemia e hipoglucemia.</td>
    </tr>
    <tr> 
      <td>Metformina.</td>
      <td>Indefinido.</td>
      <td>Intolerancia gastrointestinal, cafalea, alérgias cutáneas transitorias, sabor metálico y acidosis láctica.</td>
    </tr>
    <tr> 
      <td>Pioglitazona.</td>
      <td>Indefinido.</td>
      <td>Infección del tracto respiratorio, cafalea, sinusitis, mialgias, alteraciones dentales, faringitis, anemia y edema.</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<script type="text/javascript">
 

    if (document.addEventListener){
      $('#myModal').modal('show')
    }
  function cerrarmodal(){
  

  $('#myModal').modal('hide');
  my
}
</script>