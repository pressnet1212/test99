
jQuery(document).ready(function($){
 
 $("#myTable").tablesorter({
 	

 	widgets:['zebra'],
 	//canselSelection:false
 	headers : {
 		0: {
 			sorter:false 
 		},
 		4: {
 			sorter:false 
 		},
 		5: {
 			sorter:false 
 		}
 		
 	},
 	widthFixed:true
    

 }).tablesorterPager({
      size:20,
      container:$('#pager'),
      positionFixed:false


 });

});