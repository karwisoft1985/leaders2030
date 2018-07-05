/************************Affichage liste des factures***************************/
$(document).ready(function () {
    $.getJSON("php/list_inscri.php",
        function (donnees) {

            var contenuHtml = '';
		
			contenuHtml +='<table id="dynamic-table" class="table table-striped table-bordered table-hover">';
			
			  if (donnees.leaders[0].id_leader != 0) {
			  	        contenuHtml +=' <thead>';
					contenuHtml +='  <tr>';
				     contenuHtml += '<th >Nom & prénom</th>';
				     contenuHtml += '<th class="hidden-480">Date de naissance </th>';
				     contenuHtml += '<th >Ville </th>';
				    contenuHtml += '<th >Ecole</th>';
					//contenuHtml += '<th></th>';
				    contenuHtml += '</tr>';
				    contenuHtml += '</thead>';

				    contenuHtml +=  '<tbody >';
					for (var i = 0; i < donnees.leaders.length; i++) {
					contenuHtml += '<tr>';
					contenuHtml += '<td>' + donnees.leaders[i].prenom + ' '+donnees.leaders[i].nom+'</td>';
					contenuHtml += '<td class="hidden-480">' + donnees.leaders[i].date_naissance + '</td>';
					contenuHtml += '<td>' + donnees.leaders[i].ville+ '</td>';
				  	contenuHtml += '<td>' + donnees.leaders[i].ecole + '</td>';
					/*contenuHtml += '<td>';
					contenuHtml += '<div class="hidden-sm hidden-xs action-buttons">';
					contenuHtml += '<a href="modif_leader.php?id='+donnees.leaders[i].id_leader+'" ><span class="purple"><i class="ace-icon fa fa-pencil bigger-130"></i></span></a>';				
					contenuHtml += '<a class="red" href="#modal-table' + donnees.leaders[i].id_leader+ '" role="button" data-toggle="modal" ><i class="ace-icon fa fa-trash-o bigger-130"></i></a>';	
					contenuHtml += '</div>';
					contenuHtml += '<div class="hidden-md hidden-lg">';
					contenuHtml += '<div class="inline pos-rel">';
					contenuHtml += '<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto"><i class="ace-icon fa fa-caret-down icon-only bigger-120"></i></button>';
					contenuHtml += '<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">	';					
					contenuHtml += '<li><a href="modif_leader.php?id='+donnees.leaders[i].id_leader+'" ><span class="purple"><i class="ace-icon fa fa-pencil bigger-130"></i></span></a></li>';
					contenuHtml += '<li><a href="#modal-table' + donnees.leaders[i].id_leader+ '" role="button" data-toggle="modal" ><span class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></span></a></li>';				
					contenuHtml += '</ul>';
					contenuHtml += '</div>';
					contenuHtml += '</div>';
					contenuHtml += '</td>';*/					
					contenuHtml += '</tr>';
					/************Modal Suppression******************/
					contenuHtml += '<div id="modal-table' + donnees.leaders[i].id_leader+ '" class="modal fade" tabindex="-1">';
					contenuHtml += '<div class="modal-dialog">';
					contenuHtml += '<div class="modal-content">';
					contenuHtml += '<div class="modal-header no-padding">';
					contenuHtml += '<div class="table-header">';
					contenuHtml += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="white">&times;</span></button>';
					contenuHtml += 'Supprimer facture';
					contenuHtml += '</div>';
					contenuHtml += '</div>';
					contenuHtml += '<div class="modal-body no-padding">';
					contenuHtml += '<br><center>Voulez vous vraiment supprimer '+donnees.leaders[i].prenom+' '+donnees.leaders[i].nom+'?</center><br>';
					
					 contenuHtml += '<center><button class="btn btn-sm btn-danger " style="margin-right:5%" data-dismiss="modal">Non</button>';
                    contenuHtml += '<a href="javascript:suppression(' + donnees.leaders[i].id_leader + ')"><div class="btn btn-sm btn-success">Oui</div></a></center>';
                    contenuHtml += '<br></div>';
					contenuHtml += '<div class="modal-footer no-margin-top">';
					contenuHtml += '</div>';
					contenuHtml += '</div><!-- /.modal-content -->';
					contenuHtml += '</div><!-- /.modal-dialog -->';
					contenuHtml += '</div>';
					/************Fin modal suppression*************/
	}
					
					 contenuHtml +=  '</tbody >';

}
                else {
                   
                    contenuHtml += 'Aucune inscription';
                }
           contenuHtml += '	</table>';
           
            document.getElementById("list_inscri").innerHTML = contenuHtml;	
      $("#dynamic-table").dataTable();
	 });
		
});
/*********************Suppression facture**********************/
function suppression(id_leader) {
   var id_leader = id_leader;
	var dataString = 'id=' + id_leader;
       $.getJSON("php/suppression_inscri.php", dataString,
        function (donnees) {
            location.reload();
        });
}
