let i=0;
        let j=4;
        var image= document.getElementById('image');
        var devimage= new Array("anik.png","Adarsha1.png","Sanmay.jpeg","gaurav.png");
        var name=document.getElementById("dev");
        var names = new Array("ANIK DUTTA","ADARSHA HALDER","SANMAY DAS","GAURAV KUMAR");
        var about = new Array("FULLSTACK DEVOLPER","FULLSTACK DEVOLPER","PHOTO EDITOR","");
        function changenextImage(){
                image.src= devimage[i+1];
                document.getElementById("mypara").innerHTML=names[i+1];
                document.getElementById("about").innerHTML=about[i+1];
                i=i+1;
                if(i>2){
                    i=-1;
                }
            
        }
        function changeprevImage(){
                document.getElementById("mypara").innerHTML=names[j-1];
                document.getElementById("about").innerHTML=about[j-1];
                image.src= devimage[j-1];
                j=j-1;

                if(j<1){
                    j=4;
                }
            
        }