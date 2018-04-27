jQuery(document).ready(function(){
  jQuery.getJSON("/js/cct15.json", function(json) {
    cct15 = json;
  });

  jQuery('#cct').on('blur', function() {
    var cctfound = getCCT(jQuery(this).val());
    if( cctfound.length !== 0 ) {
      jQuery('#turn').val(cctfound[0].nturno);
      jQuery('#schoolname').val(cctfound[0].nombrecct);
      jQuery('#mainstreet').val(cctfound[0].domicilio);
      jQuery('#leftstreet').val(cctfound[0].entrecalle);
      jQuery('#rightstreet').val(cctfound[0].ycalle);
      jQuery('#extnum').val(cctfound[0].numext);
      jQuery('#postalcode').val(cctfound[0].codpost);
      jQuery('#state').val('MÉXICO');
      jQuery('#municipality').val('Ocuilan');
      jQuery('#location').val('Coyoltepec');
      jQuery('#sustenance').val(cctfound[0].nsostenimiento);
      jQuery('#level').val(cctfound[0].ntipo + ' / ' + cctfound[0].nnivel);
      jQuery('#characteristic').val(cctfound[0].ambito);
      /*jQuery('#principal').val('ARTURO ALARCON ARRATIA');
      jQuery('#curp').val('AAAA611215HMCLRR01');
      jQuery('#rfc').val('AAAA611215SU0');*/
      jQuery('#schoolzone').val('P228');
      jQuery('#abc').val('abc');
    } else {
      alert('CCT no encontrada');
    }
  });

  // ======= Totales =======================
  jQuery(':input[type="number"]').on('change', function() {
    var total = 0;
    jQuery(this).parents('.form-group').find('input[type=number]').each(function(){
      if(this.value !== ''){
        n = parseInt(this.value);
        total += n;
      }
    });
    jQuery(this).parents('.form-group').find('[id^="total"]').val(total);
  });

  // ======= Acordiones =======================
  $('#existencia-promovidos-1').accordion({
    collapsible: true,
    heightStyle: "content",
    beforeActivate: function(event, ui){
      getTotalAcordion(event, ui, '#existencia-promovidos-1');
    }
    /*beforeActivate: function(event, ui){
      if(ui.newHeader.text() === 'TOTALES'){
        jQuery('.existencia-promovidos-1-totales').find(':text').each(function(){
          jQuery(this).val(total);
          var idval = jQuery(this).attr('id');
          idval = idval.substring(0, idval.indexOf('-')+1);
          var total = 0;
          $('#existencia-promovidos-1').find('[id^="'+idval+'"]').each(function(){
            if(this.value !== ''){
              n = parseInt(this.value);
              total += n;
            }
          });
          jQuery(this).val(total);
        });
      }  
    }*/
  });
  $('#existencia-promovidos-2').accordion({
    collapsible: true,
    heightStyle: "content",
    beforeActivate: function(event, ui){
      getTotalAcordion(event, ui, '#existencia-promovidos-2');
    }
  });
  $('#migracion').accordion({
    collapsible: true,
    heightStyle: "content"
  });
  $('#migracion-other-country').accordion({
    collapsible: true,
    heightStyle: "content"
  });
  $('#info-general').accordion({
    collapsible: true,
    heightStyle: "content"
  });
  $('#total-alumnos').accordion({
    collapsible: true,
    heightStyle: "content"
  });
  $('#total-foreign').accordion({
    collapsible: true,
    heightStyle: "content"
  });
  $('#preescolar-prosedencia').accordion({
    collapsible: true,
    heightStyle: "content"
  });

});

let cct15;

function getTotalAcordion(event, ui, acordionId){
  console.log(acordionId);
  if(ui.newHeader.text() === 'TOTALES'){
    jQuery(acordionId+'-totales').find(':text').each(function(){
      jQuery(this).val(total);
      var idval = jQuery(this).attr('id');
      idval = idval.substring(0, idval.indexOf('-')+1);
      var total = 0;
      $(acordionId).find('[id^="'+idval+'"]').each(function(){
        if(this.value !== ''){
          n = parseInt(this.value);
          total += n;
        }
      });
      jQuery(this).val(total);
    });
  }
}

function getCCT(cct) {
  return cct15.filter(
    function(cct15){ return cct15.clavecct == cct }
  );
}
