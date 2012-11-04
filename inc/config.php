<?php
//Google Maps Configuration
function GoogleMaps()
{
	//Make Sure To Insert Code In Between The ' ' of the echo. For An Example I Have Provided The Code For Apple Incorperated Located At 1 Infinite Loop, Cupertino, California.

echo '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Apple+Inc&amp;aq=&amp;sll=33.758922,-116.922311&amp;sspn=0.007778,0.008658&amp;g=4650+Berkley+Avenue,+Hemet,+CA&amp;ie=UTF8&amp;hq=Apple+Inc&amp;ll=37.331687,-122.030519&amp;spn=0.014878,0.017316&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=8557514115749774218&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Apple+Inc&amp;aq=&amp;sll=33.758922,-116.922311&amp;sspn=0.007778,0.008658&amp;g=4650+Berkley+Avenue,+Hemet,+CA&amp;ie=UTF8&amp;hq=Apple+Inc&amp;ll=37.331687,-122.030519&amp;spn=0.014878,0.017316&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=8557514115749774218" style="color:#0000FF;text-align:left">View Larger Map</a></small>';

}


//Logo Configuration
function Logo()
{
	//feel free to change the location of your image file, I just put it in the inc folder to make it more neat.
	//you can also place an image URL in the src=" ".
	echo '<img src="inc/img/Logo.png" alt="Logo" width="250" height="291">';
}


//Copyright Text Configuration
function Copyright()
{
	echo 'Apple Inc.';
	
	//Don't Worry About The Year, PHP Will Automatically Insert The Year
}
?>