jQuery(document).ready(function(){

    

    jQuery.getJSON("/js/cct15.json", function(json) {
        //console.log(json); // this will show the info it in firebug console
        cct15 = json;


    });

    //console.log(cct15);
    
    jQuery('#cct').on('blur', function() {

        var cctfound = getCCT(jQuery(this).val());


        if( cctfound.length !== 0 ) {



            //var cctfound = getCCT('15EPR1639K');

            console.log(cctfound);

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

    $( "#existencia-promovidos-1" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
    $( "#existencia-promovidos-2" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
    $( "#migracion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
    $( "#migracion-other-country" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
    

});

let cct15;

function getCCT(cct) {
  return cct15.filter(
      function(cct15){ return cct15.clavecct == cct }
  );
}

