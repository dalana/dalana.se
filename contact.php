<?php
    include 'header.php';
?>    
<script type="text/javascript">
    document.getElementById("kontakt").className = "current";
</script>
    	<h2>Kontakta Oss</h2>
        <div class="kontakt float_l">
          
            <p>Efter som det kan finnas yngre på våra Lan så som förälder kanske du vill veta någon viktig information. Eller om du bara undrar något så har vi kontakt uppgifter här, känn dig fri att ställa viken fråga som helst.<strong>.</strong></p>
            
          <div class="cleaner h30"></div>
            
            <div id="map">
                <h4>Karta</h4>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=37.06250000000001,-95.67706800000002&amp;sspn=63.711931989894445,82.81398049239472&amp;t=m&amp;q=S%C3%B6dra+Bergv%C3%A4gen+34,+Orsa,+Sweden&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%B6dra+Bergv%C3%A4gen+34,+794+32+Orsa,+Sweden&amp;ll=61.13151,14.638767&amp;spn=0.014504,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=37.06250000000001,-95.67706800000002&amp;sspn=63.711931989894445,82.81398049239472&amp;t=m&amp;q=S%C3%B6dra+Bergv%C3%A4gen+34,+Orsa,+Sweden&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%B6dra+Bergv%C3%A4gen+34,+794+32+Orsa,+Sweden&amp;ll=61.13151,14.638767&amp;spn=0.014504,0.036478&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>
            
            <div class="cleaner h30"></div>
            
                <h4>Vart finns vi?</h4>
                
                	<h6>Adress</h6>
                   	  	<p>SödraBerg vägen 34 </p>
                   	  	<p>Orsa 79432<br />
                		<br />
                     	Tel: 0738499435</p>
                   	  	<p>Email: rassarasse@hotmail.com<br />
   	  	  </p>
   	  	  <div class="cleaner"></div>
        </div>
        
        <div class="kontakt float_r">
            <div id="contact_form">
        
                <h4>Snabb Kontakt</h4>
                
                	<form method="post" name="send" action="send.php">
                    
                            <label for="author">Namn:</label> <input name="author" type="text" class="input_field" id="author" maxlength="50" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="email">Email:</label> <input name="email" type="text" class="input_field" id="email" maxlength="50" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="subject">Ämne:</label> <input name="subject" type="text" class="input_field" id="subject" maxlength="50" />
                            <div class="cleaner_h10"></div>

                            <label for="text">Meddelande:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner_h10"></div>
                            
                            <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Skicka" />
                            <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Rensa" />
                        
                   </form>

            </div> 
        </div>
        
        <div class="cleaner"></div>
<?php
    include 'footer.php';
?>
