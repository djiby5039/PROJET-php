I = 0;
Imax = document.images.length -1;
setTimeout(suivante, 2000) ;

function suivante(){
     document.images[I].style.display = "none" ;
     if ( I < Imax )
          I++;
     else
          I=0;     
          document.images[I].style.display = "block";
     setTimeout(suivante, 2000) ;
}