/* Fonctions javascript pour l'ouverture des animation */

function ouvre_chat(adresse) {
     width=600;
     height=450;
     x = (640 - width)/2, y = (480 - height)/2;

     if (screen) {
         y = (screen.availHeight - height)/2;
         x = (screen.availWidth - width)/2;
     }

     window.open(adresse,'chat','resizable=yes,width='+width+',height='+height+',screenX='+x+',screenY='+y+',top='+y+',left='+x);
	
 }


function ouvre_forum(adresse){

	width=600;
    	height=600;
     x = (640 - width)/2, y = (480 - height)/2;

     if (screen) {
         y = (screen.availHeight - height)/2;
         x = (screen.availWidth - width)/2;
     }

     window.open(adresse,'forum','resizable=yes,width='+width+',height='+height+',screenX='+x+',screenY='+y+',top='+y+',left='+x);
}


function ouvre_sondage(adresse){

window.open(adresse,"sondage",'menubar=no, toolbar=no, scrollbars=no,location=no,status=no, resizable=yes, width=210,height=325,top=0,left=0');

}

function ouvre_newsletter(adresse){

window.open(adresse,"newsletter",'menubar=no, toolbar=no, scrollbars=no,location=no,status=no, resizable=yes, width=610,height=150,top=0,left=0');

}



