<?
//Include Important Files
include('inc/MySQL.inc.php');
include('inc/config.php');
include('inc/meta.php');

//Echo Page Title Using MySQL Database
echo '<title>'; echo $row['title']; echo '</title>';
echo $row['title'];

//Echo The Sidebar, Using CSS
echo '<div class="container">
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Quick Info:</a></li>
    </ul>
    <p>Phone Number:</p>
    <p>'; 
	
	//End Echo To Insert Phone Number
	echo $row['phone'];	

	//Start Echo To Continue Sidebar Information
	echo '</p>
    <p>&nbsp; </p>
    <p>Email:</p>
    <p><acronym title="';
	
	//End Echo To Insert Email Address Into Acronym
	echo $row['email'];
	
	//Continue Echo To Continue Sidebar And Email Link
	echo '"><a href="mailto:';
	
	//End Echo to Insert Email Into Email Link
	echo $row['email'];
	
	//Continue Echo To Continue Sidebar
	echo '">Email Us Here</a></acronym><!-- end .sidebar1 --></p>
    <p><font color="#FF0000" size="2">You can hover over the link to view our email address.</font></p>
    <p>&nbsp;</p>
	<p>Address:</p>
    <p>'; 
	
	//End Echo To Insert Address
	echo $row['address'];
	
	//Start Echo to Finish Up Sidebar And Start Main Site Body
	echo '</p>
  	</div>
  	<div class="content">
    <h1>';
	
	//End Echo To Insert Page Title
	echo $row['header'];
	
	//Start Echo To End <h1>
	echo '</h1><p>';
	
	//Start Echo, And Insert Sub Header
	echo $row['subheader'];
	
	//Start Echo To Finish Up Paragraph And Start A New Paragraph
	echo'</p><p>';
	
	//End Echo To Insert Image/Logo.
	
	//NOTE: LOGO MUST BE IN THE INC/IMG FOLDER, NAMED LOGO.PNG. IF YOU HAVE A DIFFERENT EXTENTION, CHANGE THE .PNG TO THE EXTENTION YOUR IMAGE IS BELOW.
		Logo(); 	echo'</p><p>';
	
	//End Echo To Insert Site Description/Site Body
	echo $row['description'];
	
	//Start Echo To Insert Google Maps Code
	echo '</p>';
	//Google Maps Code Gets Injected Here. Make Sure You Have It In The Config.php File Located At Inc/Config.php.
    	GoogleMaps();
		
	//Start Echo To Start Copyright Footer
    echo '<p>&copy; ';
					echo date("Y ");
									Copyright(); 
												echo '</p>';
	?>
    
    <!--End PHP To Use Dreamweaver's Auto Date Feature That Changes The Date And Time On Every Save -->
    <p>Page Last Updated:
    
    <!--If Using Dreamweaver, Upon Every Save, Date And Time Will Be Updated -->
    
    <!-- #BeginDate format:Am1a -->November 3, 2012 8:21 PM<!-- #EndDate --></p>
  </div>
  </div>

