<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Scientia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="scientiaenvironmental" />
<meta name="author" content="juan carlos" />
<!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<!-- =======================================================
    Theme Name: Groovin
    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<script src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript">
function revisarNumerico(elemento) {
	if (elemento.value!="") {
		var dato = elemento.value;
		if (isNaN(dato)) {
		elemento.value="";
		
			alert("This field only accepts numbers")
			
			
		} else {
			
		}
	}
}


function revisarEmail(elemento) {
	if (elemento.value!="") {
		var dato = elemento.value;
		
		var expresion = /^([a-z0-A-Z9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if (!expresion.test(dato)) {
             
			 alert("enter a valid email");
		     elemento.value="";
		
		} else {
		
		
		}
			
	}
	
}
function contar() { 
         var max = "400"; 
         var cadena = document.getElementById("textarea").value; 
         var longitud = cadena.length; 

             if(longitud <= max) { 
                  document.getElementById("contador").value = max-longitud; 
             }
			 else { 
                  document.getElementById("textArea").value = cadena.substr(0, max); 
             } 
}
</script>
</head>
<body>
<header>

<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  
	  <a href="index.php"><img src="assets/img/logo/logo.jpg" width="67" height="90" class="img-responsive"></a>
      <!--<a class="navbar-brand" href="index.php">LOGO</a>-->
    </div>

	<div class="navigation">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>
      <ul class="nav navbar-nav navbar-right">
        <li class="current"><a href="#intro">Home</a></li>
		<li><a href="#about">Services</a></li>
		<li><a href="#works">Profiles</a></li>
		<li><a href="#project">Clients & Projects </a></li>
		<li><a href="#contact">Contact</a></li>
      </ul></nav>
    </div><!-- /.navbar-collapse -->
	</div>

  </div>
</div>

</header>
<!-- section intro -->
<section id="intro">
			<ul id="slippry-slider">
			  <li>
				<a href=""><img src="assets/img/slide/img1.jpg" alt="Scientia Environmental"></a>
			  </li>
			   <li>
				<a href=""><img src="assets/img/slide/img3.jpg" alt="provides high quality environmental professional services to our clients"></a>
			  </li>
			  <li>
				<a href=""><img src="assets/img/slide/img.jpg"  alt="using expert knowledge, and years of experience"></a>
			  </li>
			  <li>
				<a href=""><img src="assets/img/slide/img2.jpg" alt="with both government and commercial clientele."></a>
			  </li>
			</ul>
</section>
<!-- end intro -->
<!-- Section services -->
<section id="about" class="section">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h3><span>Services</span></h3>
			</div>
			<div class="sub-heading">
				<p style="font-weight:bold">
					 Our services will aid the specificity of your business needs while incorporating the use of sophisticated technological tools.
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="team-box">
			<img src="assets/img/dummies/service1.jpg" alt="" class="img-responsive" />
			<div class="roles">
				<h5><strong>Environmental Professional services, and consulting</strong></h5>
				<ul class="social-profile">
					<button class="btn btn-success" data-toggle="modal" data-target="#service1">Read More</button>
					<button class="btn btn-success" data-toggle="modal" data-target="#chat1">Chat</button>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="team-box">
			<img src="assets/img/dummies/service2.jpg" alt="" class="img-responsive" />
			<div class="roles">
				<h5><strong>Geographic Information Systems, Maps and Drawings</strong></h5>
				<ul class="social-profile">
					<button class="btn btn-success" data-toggle="modal" data-target="#service2">Read More</button>
					<button class="btn btn-success" data-toggle="modal" data-target="#chat1">Chat</button>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="team-box">
			<img src="assets/img/dummies/service3.jpg" alt="" class="img-responsive" />
			<div class="roles">
				<h5><strong>Aquatic and Natural Areas Licensed Services</strong></h5>
				<ul class="social-profile">
					<button class="btn btn-success" data-toggle="modal" data-target="#service3">Read More</button>
					<button class="btn btn-success" data-toggle="modal" data-target="#chat1">Chat</button>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end section services -->
<!-- section profiles -->
<section id="works" class="section gray">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h3><span>Profiles</span></h3>
				<p style="font-weight:bold">
					Click on each image to see the information
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
						<ul class="grid effect" id="grid">
							<li>
								<a data-toggle="modal" data-target="#myModal1">
									<img src="assets/img/portfolio/profile1.jpg" alt="Master" />
								</a>						
							</li>
							<li><a data-toggle="modal" data-target="#myModal2"><img src="assets/img/portfolio/profile2.jpg"/></a></li>
							<li><a data-toggle="modal" data-target="#myModal3"><img src="assets/img/portfolio/profile3.png"  /></a></li>
							<li><a data-toggle="modal" data-target="#myModal4"><img src="assets/img/portfolio/profile4.jpg" /></a></li>
							<li><a data-toggle="modal" data-target="#myModal5"><img src="assets/img/portfolio/profile5.jpg"  /></a></li>
							<li><a data-toggle="modal" data-target="#myModal6"><img src="assets/img/portfolio/profile6.jpg"  /></a></li>
						</ul>
		</div>
	</div>
</div>
</section>
<!-- end section profiles -->
<!-- section project -->
<section id="project">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
			<div class="heading">
				<h3 style="font-weight:bold">
					Clients & Projects
				</h3>
			</div>
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header" style="color: #5cb85c;font-size: 27px;padding: 10px;">Log In</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i  style="font-size:32px;color:#5cb85c;" class="fa fa-user"></i></span>
                            <div class="col-md-8">
                                <input id="user" name="user" type="text" placeholder="username" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i style="font-size:32px;color:#5cb85c;" class="fa fa-key"></i></span>
                            <div class="col-md-8">
                                <input id="pass" name="pass" type="password" placeholder="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-success btn-lg" id="login">Log In</button>
			
							</div>
							
                        </div>
						<span id="result"></span>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- section contact -->
<section id="contact" class="section">
	<div class="container">
		<div>
			<center><h1>Contact</h1></center>
		</div>
		<section class="row">
			<article class="col-xs-12 col-sm-6 col-md-6  col-lg-6">
				<p class="bold">
					Scientia Environmental Services <br>
					21482 SW 91st Ave<br>
					Cutler Bay, Florida, 33189<br><br>
					<span style="color:red">24/7</span><br>
					Phone: 305-283-9683 <br>
					Fax: 786-752-3090<br>
					Email: <a>xxxx@scientiaenvironmental.com</a><br>
					Website: <a>www.scientiaenvironmental.com</a><br>
					
				</p>
			</article>
			<aside class="col-xs-12 col-sm6- col-md-6  col-lg-6" id="aside">
				<img src="assets/img/contact/Contacto.png" width="293" height="280"></img>
			</aside>

		</section>
	</div>
<br>
<div class="container"> 
	<p class="bold">Fields with (*) are required.</p>
	<form action="contacto.php" method="post">
	<div class="form-group">	
		<label for="nombre" class="bold">First Name*</labeL>
		<input type="text" class="form-control" id="nombre" placeholder="First Name" name="nombre1" required>
	</div>
	<div class="form-group">
		<label class="bold">Last Name*</labeL>
		<input type="text" class="form-control" placeholder="Last Name" id="last" name="nombre2" required>
	</div>
	<div class="form-group">
		<label class="bold">Company Name*</labeL>
		<input type="text" class="form-control" placeholder="Company Name" id="company" name="com" required>
	</div>
	<div class="form-group">
		<label class="bold">Phone*</labeL>
		<input type="text" class="form-control" id="phone" placeholder="Phone" name="tel" required>
	</div>
	<div class="form-group">
		<label class="bold">Email Address*</labeL>
		<input type="text" class="form-control" id="email" placeholder="Email" name="ema" required>
	</div>
	<div class="form-group">
		<label class="bold">Street Address*</labeL>
		<input type="text" class="form-control" id="street" placeholder="Street Address" name="adrees" required>
	</div>
	<div class="form-group">
		<label class="bold">Street Address 2</labeL>
		<input type="text" class="form-control" placeholder="Street Address 2" id="set2" name="s2">
	</div>
	<div class="form-group">
		<label class="bold">city*</labeL>
		<input type="text" class="form-control" placeholder="City" id="city" name="ciudad" required>
	</div>
	<div class="form-group">
		<label class="bold">State</label>
		<select name="state" class="form-control" id="estado">
		<option>AL</option>
		<option>AK</option>
		<option>AZ</option>
		<option>AR</option>
		<option>CA</option>
		<option>CO</option>
		<option>CT</option>
		<option>DE</option>
		<option>FL</option>
		<option>GA</option>
		<option>HI</option>
		<option>ID</option>
		<option>IL</option>
		<option>IN</option>
		<option>IA</option>
		<option>KS</option>
		<option>KY</option>
		<option>LA</option>
		<option>ME</option>
		<option>MD</option>
		<option>MA</option>
		<option>MI</option>
		<option>MN</option>
		<option>MS</option>
		<option>MO</option>
		<option>MT</option>
		<option>NE</option>
		<option>OTHER</option>
		</select>
	</div>
	<div class="form-group">
		<label class="bold">Zip Code*</labeL>
		<input type="text" class="form-control" placeholder="Zip Code" id="code" name="zip" required>
	</div>
	<div class="form-group">	
		<label class="bold">Job Role</labeL>
		<select name="role" class="form-control" id="estado">
		<option>Administrative</option>
		<option>Attorney</option>
		<option>Business Development</option>
		<option>Enforcement</option>
		<option>Environmental Affairs</option>
		<option>Environmental Engineer</option>
		<option>Executive</option>
		<option>Generak Manager</option>
		<option>legak</option>
		<option>Manager</option>
		<option>Plant Manager</option>
		<option>Project Manager</option>
		<option>Supervisot</option>
		<option>Other</option>
		</select>
	</div>
	<div class="form-group">
		<label class="bold">Interested In:</labeL>
		<select name="interes" class="form-control" id="estado">
		<option>Environmental Professional services, and consulting</option>
		<option>Geographic Information Systems, Maps and Drawings</option>
		<option>Aquatic and Natural Areas Licensed Services</option>
		</select>
	</div>
	<div class="form-group">
		<label class="bold">Comments*</labeL>
		<textarea class="form-control" name="comentario"></textarea>
	</div>
	<div class="form-group">	
		<label class="bold">Contact Me By:</labeL>
		<select name="contact" class="form-control" id="contacto">
		<option>Any</option>
		<option>Email</option>
		<option>Phone</option>
		</select>
	</div>
	<input class="btn btn-success" type="submit" value="SEND"></input>
	</form>
</div>
</section>
<!-- end section contact -->
<footer>
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter">
					<p>
						 &copy;ScientiaEnvironmental - All right reserved
					</p>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin
                        -->
                        <i class="fa fa-envelope" aria-hidden="true"></i><a> xxxx@scientiaenvironmental.com</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>

<!--ventas modales-->
<!--modal 1-->
<div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Master in Environmental Sciences</h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			M.S.: Environmental Science and Environmental Management Specialistt with more than 20 years combined experience in environmental management in both private and public sectors. Skilled team player, capable of professionally addressing and completing any field or office assignment with respect to complex environmental projects, plans and actions concerning natural resources management; harnessing vision, technology , and legal knowledge to meet specific environmental organizational objectives within the challenges imposed by the external agencies, the specific sector, and the society itself. Skills include:
		</p>
		<p style="font-weight:bold;">*Environmental Assessments: Environmental evaluations.</p>
		<p style="font-weight:bold;">*Environment Audits and Environmental Inspections.</p>
		<p style="font-weight:bold;">* Environmental Management Systems: ISO 14000 life cycle and product analysis, waste reduction and line base for resources optimization.</p>
		<p style="font-weight:bold;">*Environmental Sampling; Ground water, surface water, waste water, soil and industrial waste. Environmental Monitoring and compliance and pollution control.</p>
		<p style="font-weight:bold;">* HazMat- Hazwoper, DOT and hazardous waste generators.</p>
		<h5 style="font-weight:bold;">Professional experience in both private and public sectors:</h5>
		<p style="font-weight:bold;">*Consistently praise for efficient handling of administrative and technical duties maintaining environmental records that allow the Turkey Point Site to be in compliance with Local, State, and Federal Environmental Regulations and Site procedures.</p>
		<p style="font-weight:bold;">* Demonstrate proficiency in surveillance for environmental monitoring programs: Waste Water, Industrial Waste, Ground Water, Meteorological Monitoring, and Endangered Species.</p>
		<p style="font-weight:bold;">* Ensure environmental reporting and field actions within Environmental permits are performed in diligent and timely manner.</p>
		<p style="font-weight:bold;">*Performed field measurements for ground water and waste water programs. Efforts ensured compliance with DERM, DEP, NRC and OSHA regulations.</p>
		<p style="font-weight:bold;">* Prepare official reports and perform activities to keep the Turkey Point Plant Nuclear Site within Environmental Compliance; Title V Air; Tier II Reports; Air Emissions annual fees and reporting; SPCC reviews and other environmental activities from the sites to keep their compliance with EPA (Federal); FDEP Florida Department of Environmental Protection, and Local Environmental agencies.</p>
		<p style="font-weight:bold;">* Conduct site inspections; identified present or potential pollutants or environmental concerns; conducted sampling as warranted; prepared both standardized and narrative reports; responded to citizen complaints; interpreted sample results with respect to local and federal regulation guidelines, and recommended subsequent enforcement action(s) as necessary.</p>
		<p style="font-weight:bold;">* Manage educational and environmental projects with emphasis on 'clean production' and water resources protection for both agricultural and industrial activities and environmental sustainability.</p>
		<p style="font-weight:bold;">* Coordinate field actions for natural resources protection, specifically use and conservation of water for electrical energy production.</p>
		<p style="font-weight:bold;">* Implemented pilot cases of clean production with farming communities to empower them to decrease their impact to their natural resources and improve their life style.</p>
		<h5 style="font-weight:bold;">Additional Training, Certifications, and skills</h5>
		<p style="font-weight:bold;">*National Registry of Environmental Professionals. CESCO 133324 Certified Environmental and Safety Compliance Officer. 01/15/2016.</p>
		<p style="font-weight:bold;">* 40-hour Health & Safety Training for Hazardous Waste per CFR 1910.120. 09/2007. 8-hour (yearly) 01/2015-01/2016.</p>
		<p style="font-weight:bold;">* DOT Hazmat 49 CRF 172.704. 10/2013-10/2015.</p>
		<p style="font-weight:bold;">* Florida.DEP for surface & groundwater sampling.</p>
		<p style="font-weight:bold;">*Florida.DEP for Storm Water Erosion and Sedimentation Control.</p>

	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal2-->
<div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Biochemist</h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			Biochemist with experience in chemical, physical, and biological properties analysis, reviewing them systematically within the environmental protection field specifically for water and wildlife conservation programs; as well as food chain availability in tropical ecosystems. Analysis of laboratory results, preparing technical reports after collecting samples, analyzing and summarizing the information and presenting trends found as part of comprehensive plans, projects and policies. Skilled team player, capable of professionally addressing and completing any field or office assignment with respect to complex bio-chemistry projects, for ecological and environmental purposes. Harnessing vision in the use of all technological tools available in the specific field. Knowledge and experience in the use of data base software’s as Geographic Information System, access, excel, as well as the legal requirements to meet specific organizational objectives within the challenges imposed by specific sector, and the society itself.
		</p>
		<p style="font-weight:bold;">— Bio-chemical analysis applied to different industries.</p>
		<p style="font-weight:bold;">— Surface water, and biomass sampling and analysis.</p>
		<p style="font-weight:bold;">— Best Management practices and Industrial Safety.</p>
		<p style="font-weight:bold;">— Technical reports preparation.</p>
		<p style="font-weight:bold;">— Technical Guide’s design.</p>
		<p style="font-weight:bold;">— Community outreach.</p>
		<h5 style="font-weight:bold;">Education</h5>
		<p style="font-weight:bold;">Licentiate in Biology and Chemistry:(University of Antioquia- Colombia. 1993-1999)</p>
		<p style="font-weight:bold;">Hydrology and natural resources specialist:(National Learning service –SENA- 2003-2004)</p>
		<p style="font-weight:bold;">Geo-informatics and environmental specialist:(University of Antioquia- Colombia. 2005-2007)</p>
		<h5 style="font-weight:bold;">Professional Experience</h5>
		<p style="font-weight:bold;">Serve as a key member of the Corporation team for field, and laboratory analysis. Managing of an interdisciplinary team of professionals; as well as leader in preparation of comprehensive reports for water protection, and wildlife conservation which are impacting (17) communities in the North Region of Antioquia.</p>
		<h5 style="font-weight:bold">Key Results:</h5>
		<p style="font-weight:bold;">* Planning and conducting research when developing new guides for water and wildlife conservation projects, updating existing water characteristics and food chain within the tropical forests and analyzing said products. </p>
		<p style="font-weight:bold;">*Researching and developing bio-statistics and biology models for pollution control and environmental conservation in the North Region of Antioquia.</p>
		<p style="font-weight:bold;">* Team work using scientific analysis, selection, data sheets, calculation, equipment, materials, processes, laboratory guides, and field, instrumentation required for natural resources, protection, conservation, and environmental projects while using biology, ecology and chemistry concepts as transversal to the proposed goals.</p>
		<p style="font-weight:bold;">* Managing educational and environmental projects with emphasis in water quality, water management, and wildlife conservation using scientific data and biochemistry analysis. Expanded production and environmental programs for 14 municipalities within the North Region of Antioquia and neighboring communities.</p>
		<p style="font-weight:bold;">*Taught of Biology and Chemistry fields to high school students as part of preparation to enter colleges and universities with specific applications to food industry, pharmaceutical industry, chemical industry among others; ecology and environmental fields. Field, laboratory and lectures.</p>
		<h5 style="font-weight:bold;">Additional Training, Certifications, and skills</h5>
		<p style="font-weight:bold;">* Extensive computer skills and software applications knowledge: Microsoft Office Word, Excel, Access, power point, etc.</p>
		<p style="font-weight:bold;">* Virtual teaching training. Easter Catholic University.2010.</p>
		<p style="font-weight:bold;">* Environmental management training. National University. 2010.</p>
		<p style="font-weight:bold;">* Regional projects development training. Easter Catholic University.2000.</p>
		<p style="font-weight:bold;">* ISO 14000 standards training; Universidad de Antioquia; 2008.</p>
		<p style="font-weight:bold;">* Laboratory Analisys for Biological and chemical applications.</p>
		<p style="font-weight:bold;">* Health & Industrial Safety.</p>
		<p style="font-weight:bold;">* Bilingual: English-moderate and Spanish.</p>

	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--modal3-->
<div class="modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">GIS</h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			Geographic Information Analyst -Spatial Analyst Bachelor of Science: Geography with knowledge in GIS for Hydrology and Remote Sensing.
		</p>
		<p style="font-weight:bold;">Skills include:</p>
		<p style="font-weight:bold;">— Field GPS & Field Geographic data collection.</p>
		<p style="font-weight:bold;">— Maps creation</p>
		<p style="font-weight:bold;">— Geographic representations.</p>
		<p style="font-weight:bold;">— Arc Maps</p>
		<p style="font-weight:bold;">— Geo-analysis-Geo processing.</p>
		<p style="font-weight:bold;">— Georeferenced.</p>
		<h5 style="font-weight:bold;">Experience</h5>
		<h5 style="font-weight:bold;">City of Coral Gables, Florida IT GIS Analyst, 2006–2007</h5>
		<p style="font-weight:bold;">* Increased production of City maps and associated geographic information databases for the City of Coral Gables as support to Building and Zoning, Public Works, Police, and Fire Departments. Supported spatial information services for City management and development purposes, including special projects using ARC-view and ARC-Map.</p>
		<h5 style="font-weight:bold">Additional Training, Certifications, and skills.</h5>
		<p style="font-weight:bold;">* Extensive computer skills and software applications knowledge: Microsoft Office Word, Excel, Access, and PowerPoint; ARC-view, ARC-Map; LISA photo interpretation; and Macromedia Dream Weaver.</p>
		<p style="font-weight:bold;">* Geographic Information Systems; 220 hours certification. 2001 and 2011.</p>
		<p style="font-weight:bold;">* National and International Professional Forums. Mexico: 9th meeting of Geographers from Latin – America 2003. Several Colombian Geographers Association meetings: Cali 2000, Pasto 2002.</p>
		<p style="font-weight:bold;">* Bilingual: English and Spanish..</p>

	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--modal4-->
<div class="modal" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Agro- environmental Technician</h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			Technical work in socio - development projects including all aspects of agro-economy and environmental sustainability; with high emphasis in planning, execution, supervision and environmental consulting and auditing process.
		</p>
		<p style="font-weight:bold;">Skills include:</p>
		<p style="font-weight:bold;">*Experience in socio- environmental projects designs and community engagement in rural and urban sustainability and environmental projects.</p>
		<p style="font-weight:bold;">*Multiple skills regarding educational and community work in promotion, communication for environmental work and community knowledge and engagement in environmental projects.</p>
		<p style="font-weight:bold;">*Communal activities to engage communities in natural disasters preventions and management specifically in flooding, basic public sanitation and water and waste, water, and solid wastes management during unpredictable event.</p>
		<h5 style="font-weight:bold;">Education</h5>
		<h5 style="font-weight:bold;">Graduated in Agro- Environmental Technology</h5>
		<p style="font-weight:bold;">Graduated in Education with Emphasis in Social Health</p>
		<h5 style="font-weight:bold">Additional Training, Certifications, and skills.</h5>
		<p style="font-weight:bold;">* AutoCAD Drawings and Designing.</p>
		<p style="font-weight:bold;">* Agro – ecology and rural development.</p>
		<p style="font-weight:bold;">* Designing, performance and evaluation of environmental sustainability projects.</p>
		<p style="font-weight:bold;">* Integral management of solid waste.</p>

	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--modal5-->
<div class="modal" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Environmental Engineer</h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			Experience in environmental management, specifically in preparation and modeling of hydrogeological systems; environmental assessments for groundwater uses, aquifer’s structures, and wetlands delineation.
		</p>
		<p style="font-weight:bold;">Consulting and auditing for sanitation and management of shedding plans, dumping and solid waste management, water and waste water</p>
		<p style="font-weight:bold;">Education</p>
		<p style="font-weight:bold;">Environmental Engineer</p>
		<h5 style="font-weight:bold;">Education</h5>
		<p style="font-weight:bold;">Environmental Engineer</p>
		<p style="font-weight:bold;">Graduated in Education with Emphasis in Social Health</p>
		<h5 style="font-weight:bold">Additional Training, Certifications, and skills.</h5>
		<p style="font-weight:bold;">* AutoCAD drawings and designs.</p>
		<p style="font-weight:bold;">* Engineer modeling.</p>
		<p style="font-weight:bold;">* Environmental Management systems.</p>
		<p style="font-weight:bold;">* Water and Waste water Operations and maintenance.</p>
		<p style="font-weight:bold;">* Solid waste management.</p>

	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--modal6-->
<div class="modal" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Mechanical/ Design Engineer   </h3>
      </div>
      <div class="modal-body">
		<p style="font-weight:bold;">
			Mechanical Engineer with Specialization in Design Engineer and extensive experience in the use of design software’s for structural designs in different fields: construction, industry, commercial and public utilities. 
		</p>
		<p style="font-weight:bold;">Extensive knowledge  and experience in AutoCAD, Solid Works, Inventor and other computational tools and applications; as well as  ESRI Enterprise products and in accordance with Windows,  Linux, Local infrastructure, on cloud-based platforms, or as an ESRI Managed Cloud Service base platforms for multiple local, global and specific applications.</p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal para servicios -->
<!--service1-->
<div class="modal" id="service1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Environmental Professional services, and consulting</h3>
      </div>
      <div class="modal-body">
				<img src="assets/img/services/collage1.png" class="img-responsive"/>
				<br>
				<ul class="servicios" style="font-weight:bold">
					<li>Environmental Independent Professional Services.</li>
					<li>Environmental Technical Support.</li>
					<li>Your own Environmental specific program and needs.</li>
					<li>Environmental Inspections.</li>
					<li>Environmental Compliance.</li>
					<li>Environmental investigations and assessments.</li>
					<li>Field testing, monitoring, and analytical results.</li>
					<li>Environmental Technical Reports.</li>
					<li>Guidance and tools to control environmental impacts using ISO 1400.</li>
					<li>Environmental auditing.</li>
					<li>Environmental Management Systems.</li>
					<li>Environmental Consulting.</li>
					<li>Environmental Social Programs set up and guidance: Recycling initiatives waste reduction etc.</li>
				</ul>
				<div class="alert alert-success" role="alert">
					<h2 style="color:green">Need Information?</h2>
					<h3>
						Call us or complete this form and get free information on how to turn your need into our service.
					</h3>
				</div>
				<div class="alert alert-warning" role="alert">Fields with (*) are required.</div>
				<form action="consultin-pro.php" method="POST" id="formulario">
					<div class="form-group">
						<label for="exampleInputEmail1">Name*</label>
						<input type="text" class="form-control" name="nombre" required>
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Organization</label>
						<input type="text" class="form-control" name="organizacion">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Type of business</label>
						<input type="text" class="form-control" name="trabajo">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">City-State</label>
						<input type="text" class="form-control" name="ciudad">
					 </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address*</label>
						<input type="email" class="form-control" placeholder="user@mydomain.com"  name="correo" required autocomplete="off">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Phone number*</label>
						<input type="text" class="form-control" name="telefono" required  autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Preferred way of communication</label>
						<input type="text" class="form-control" name="comuni">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1"> Mobile Phone number*</label>
						<input type="text" class="form-control" name="cel" autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label class="bold">message*</labeL>
						<textarea class="form-control" placeholder="message" name="mensaje" required  id="textarea" rows="5" onKeyDown="contar()" onKeyUp="contar()"></textarea>
						</div>
					  <button type="submit" class="btn btn-success">Send</button>
				</form>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--service2-->
<div class="modal" id="service2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Geographic Information Systems, Maps and Drawings</h3>
      </div>
      <div class="modal-body">
				<img src="assets/img/services/maps.png" class="img-responsive"/>
				<br>
				<p style="font-weight:bold">Abroad services of Geographic Information Systems GIS developed to solve real world problems, and spatial analysis for businesses, marketing strategies as well as government and academia projects, plans or other many diverse applications:</p>
				
				<ul class="servicios" style="font-weight:bold">
					<li>Geographic Information Systems -GIS services.</li>
					<li>Field data collection; data manipulation; interpretation; spatial analysis.</li>
					<li>GIS mapping and drawings generation.</li>
					<li>Geographical based drawings</li>
					<li>Spatial information custom needed basic and thematic maps.</li>
					<li>Spatial data capture, manipulation, analysis and geographically 
					referenced data..</li>
					<li>Spatial data analysis: areas, ;linear, territorial, ecological significance,
					ecological functions, corridor analysis, buffer zones , historical, agricultural,
					land use, multivariable, geo-links, and other GIS analysis.</li>
				</ul>
				<div class="alert alert-success" role="alert">
					<h2 style="color:green">Need Information?</h2>
					<h3>
						Call us or complete this form and get free information on how to turn your need into our service.
					</h3>
				</div>
				<div class="alert alert-warning" role="alert">Fields with (*) are required.</div>
				<form action="consultin-pro.php" method="POST" id="formulario">
					<div class="form-group">
						<label for="exampleInputEmail1">Name*</label>
						<input type="text" class="form-control" name="nombre" required>
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Organization</label>
						<input type="text" class="form-control" name="organizacion">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Type of business</label>
						<input type="text" class="form-control" name="trabajo">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">City-State</label>
						<input type="text" class="form-control" name="ciudad">
					 </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address*</label>
						<input type="email" class="form-control" placeholder="user@mydomain.com"  name="correo" required autocomplete="off">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Phone number*</label>
						<input type="text" class="form-control" name="telefono" required  autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Preferred way of communication</label>
						<input type="text" class="form-control" name="comuni">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1"> Mobile Phone number*</label>
						<input type="text" class="form-control" name="cel" autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label class="bold">message*</labeL>
						<textarea class="form-control" placeholder="message" name="mensaje" required  id="textarea" rows="5" onKeyDown="contar()" onKeyUp="contar()"></textarea>
						</div>
					  <button type="submit" class="btn btn-success">Send</button>
				</form>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--service3-->
<div class="modal" id="service3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Aquatic and Natural Areas Licensed Services</h3>
      </div>
      <div class="modal-body">
				<img src="assets/img/services/sermaps.png" class="img-responsive"/>
				<br>
				<p style="font-weight:bold">Integrated Pest Management integrates biological, chemical control cultural, physical for pest management for conservation, preservation, mitigation and restoration projects</p>
				<h4>Licensed Natural Areas Pesticide Applicator (As Florida Statutes, Chapter 487)</h4>
			
				<ul class="servicios" style="font-weight:bold">
					<li>Pest plants control in natural communities; chemical and mechanical control measures to control unwanted weeds in natural areas.</li>
					<li>Special techniques and proper herbicide selection to effectively control unwanted speciesand minimize adverse effects to the natural communities.</li>
					<li><h4>Licensed Aquatic Pesticide Applicator</h4></li>
					<li>Aquatic Plant Management and control for weed and unwanted plants, using chemical, mechanical measurements.</li>
					<li>Review, monitoring, and control of non-native aquatic plants by experienced personnel.</li>
	
				</ul>
				<div class="alert alert-success" role="alert">
					<h2 style="color:green">Need Information?</h2>
					<h3>
						Call us or complete this form and get free information on how to turn your need into our service.
					</h3>
				</div>
				<div class="alert alert-warning" role="alert">Fields with (*) are required.</div>
				<form action="consultin-pro.php" method="POST" id="formulario">
					<div class="form-group">
						<label for="exampleInputEmail1">Name*</label>
						<input type="text" class="form-control" name="nombre" required>
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Organization</label>
						<input type="text" class="form-control" name="organizacion">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">Type of business</label>
						<input type="text" class="form-control" name="trabajo">
					 </div>
					 <div class="form-group">
						<label for="exampleInputEmail1">City-State</label>
						<input type="text" class="form-control" name="ciudad">
					 </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address*</label>
						<input type="email" class="form-control" placeholder="user@mydomain.com"  name="correo" required autocomplete="off">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Phone number*</label>
						<input type="text" class="form-control" name="telefono" required  autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Preferred way of communication</label>
						<input type="text" class="form-control" name="comuni">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1"> Mobile Phone number*</label>
						<input type="text" class="form-control" name="cel" autocomplete="off" required onkeyup="revisarNumerico(this)">
					  </div>
					  <div class="form-group">
						<label class="bold">message*</labeL>
						<textarea class="form-control" placeholder="message" name="mensaje" required  id="textarea" rows="5" onKeyDown="contar()" onKeyUp="contar()"></textarea>
						</div>
					  <button type="submit" class="btn btn-success">Send</button>
				</form>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--chat1-->
<div class="modal" id="chat1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h3 class="modal-title" id="myModalLabel" style="color:green">Chat</h3>
      </div>
      <div class="modal-body">
			<div id="disqus_thread"></div>
					<script>

					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					/*
					var disqus_config = function () {
					this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://scientiaenvironmental.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--service2-->
<!-- javascript -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/slippry.min.js"></script>
<script src="assets/js/nagging-menu.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/jquery.fancybox-media.js"></script> 
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/AnimOnScroll.js"></script>
    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );
    </script>
<script>
	$(document).ready(function(){
	  $('#slippry-slider').slippry(
		defaults = {
			transition: 'vertical',
			useCSS: true,
			speed: 5000,
			pause: 3000,
			initSingle: false,
			auto: true,
			preload: 'visible',
			pager: false,		
		} 
	  
	  )
	$('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
		  data:{user:user, pass:pass},
          url:"login.php",
          method:"post",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','document.php');
            } else {
				
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'></button><strong>¡Error!</strong> The username or password you entered is invalid</div>");
            }
          }
        });
      };
    });
	  
	});
</script>

<script src="assets/js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<script id="dsq-count-scr" src="//scientiaenvironmental.disqus.com/count.js" async></script>
</body>
</html>