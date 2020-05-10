function kontrol() {
    var username, name, mail,kkadin, erkekk, yazi, text ; 
    
    
    username= document.getElementById("soyad").value.length;
    name= document.getElementById("ad").value.length;
    mail= document.getElementById("email").value.length;
    yazi= document.getElementById("mesaj").value.length;
    kkadin = document.getElementById("kadin").checked;
    erkekk = document.getElementById("erkek").checked;


    if (username == 0 || name == 0 || mail == 0 || yazi == 0) { 
    text= "Boş alanları lütfen doldurunuz !";
    }
    else{
        text="Gönderildi";
    }

    var mail = document.getElementById("email").value;
	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (regex.test(mail)!==true)
	{
        text = "Hata geçersiz mail adresi girdiniz!";
    }
	

     document.getElementById("result").innerHTML = text;
     
    
   }
