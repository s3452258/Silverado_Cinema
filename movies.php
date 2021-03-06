<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="referrer" content="always">
<title>Movies</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/menu.css"/>
<script src="jquery-2.1.3.min.js"></script>
<script src="script.js"></script>

<style type="text/css">

div.mydivs
{
	height: 50px;
	overflow:hidden;
}

div.seeMore{height: 15px;}
#moviehead{display: inline-block;}
.rating { float: right}
h4{ float: left;}

</style>

</head>

<body id="moviesPage">
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Silverado<span>Cinema</span></a></h1> </div>

    <!-- Top Navigation -->
    <?php include_once('menu.php') ?>
    <!-- / Top Navigation -->
  </div>
  <!-- / Header -->

  <!-- Main -->
  <div id="main">
      <!-- Content -->
      <div id="movies">
        <div class="block">
          <div class="head">
            <div class="head-cnt">
              <h3>Movies</h3>
            </div>
          </div>
          
          <div class="films">
            <div class="film">
              <!-- Original image below sourced for educational purposes: http://movieszonefree.blogspot.com.au/2015/03/download-cinderella-2015-full-movie.html -->
              <div class="image"> <img src="Images/cinderella_landscape.png"/> </div>
              <div class="cnt">
			  
		
				<div id="moviehead">
					<div class="rating"><img src="Images/g.png" height="25px" width="25px"/></div>
					&nbsp;&nbsp;
                	<h4><a href="#" onclick="return false" onmousedown="expand('see1','div1')">Cinderella</a></h4>
				</div>

				<div id="div1" class="mydivs">
				    <p>After her father unexpectedly dies, young Ella (Lily James) finds herself at the mercy of her cruel stepmother (Cate Blanchett) and stepsisters, who reduce her to scullery maid. Despite her circumstances, she refuses to despair. An invitation to a palace ball gives Ella hope that she might reunite with the dashing stranger (Richard Madden) she met in the woods, but her stepmother prevents her from going. Help arrives in the form of a kindly beggar woman who has a magic touch for ordinary things. </p>
					<br>
					
					<div class="contact">
				  		<div class="head">
	              			<h3>Table of tickets and display price:</h3>
	          			</div>

						 <form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php">
					          <input type="hidden" name="film" value="CH">
					          <input type="hidden" name="price" value="0">

					          <table border="2" style="width:100%">	
								  <tr>
								  <th colspan="2">Session Day  </th>
								  <td>
									<select class="day" name="day" onchange="fillTime(this);dayChanged(this);" required="required">
										<option value="" style="display:none;"></option>
										<option value="Mon">Monday</option>
										<option value="Tues">Tuesday</option>
										<option value="Wed">Wednesday</option>
										<option value="Thurs">Thursday</option>
										<option value="Fri">Friday</option>
										<option value="Sat">Saturday</option>
										<option value="Sun">Sunday</option>
									</select>
							      </td>
								  </tr>
								  <tr>
								  <th colspan="2">Session Time  </th>
								  <td>
									<select name="time" required="required"> </select>
							      </td>
								  </tr>
						            
						          <tr>
						          	<td> Ticket Type </td>
						          	<td> Quantity </td>
						            <td> Subtotal Price </td>
						          </tr>
									
						            <tr>
						              <td> Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Concession </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SP" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>          
						          </tr>
									<tr>
						              <td> Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 1 Person </td>
									  <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B1" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 2 Person </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B2" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 3 Children </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B3" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td class="total" colspan="2"> Total Price </td>
						              <td> <span class="total"></span> </td>
						            </tr>
						            <tr>
						            	<td colspan="3">
						            		<input type="submit" value="Buy now" />
						            	</td>
						            </tr>
						      </table>
				          </form>
					</div>
	  				
	  				<br>
					
					<p><a href="#" onclick="return false" onmousedown="retract('see1','div1')">(Show Less)</a></p>
				
				</div>

				<div id="see1" class="seeMore">
					<h5><a href="#" onclick="" onmousedown="expand('see1','div1')"> Show More</a></h5>
				</div>

			  </div>
			</div>





			
			
            <div class="film">
              <!-- Original image below sourced for educational purposes: http://www.lionheartv.net/2015/03/star-cinema-tfcthemovies-bring-crazy-beautiful-australia-new-zealand-march/ -->
              <div class="image"><img src="Images/crazy_beautiful_you_landscape.jpg"> </div>
              <div class="cnt">
			  
			  				<div id="moviehead">
				<div class="rating"><img src="Images/pg.png" height="25px" width="25px"/></div>
                <h4><a href="#" onclick="return false" onmousedown="expand('see2',div2')">Crazy Beautiful You</a></h4>&nbsp;&nbsp;
				</div>
                <div id="div2" class="mydivs">
				    <p>Sometimes, though we don't expect to find love, it's the one that finds us. In "Crazy Beautiful You," we are introduced to Jackie (Kathryn Bernardo), whose rebellious spirit forces her mother (Lorna Tolentino) to take her in a medical mission in Tarlac in hopes that she'd turn for the better. There, Jackie meets a jolly lad named Kiko (Daniel Padilla), who will make sure she gets all her tasks done. In the middle of his mission, he and Jackie will discover something crazy... and beautiful. </p>
					<br>

					<div class="contact">
				  	<div class="head">
	              		<h3>Table of tickets and display price:</h3>
	          		</div>
			 
			 <form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php">
		          <input type="hidden" name="film" value="AF">
		          <input type="hidden" name="price" value="0">

		          <table border="2" style="width:100%">
					
				  <tr>
				  
				  <th colspan="2">Session Day  </th>
				  <td>
					<select class="day" name="day" onchange="fillTime(this);dayChanged(this);" required="required">
						<option value="" style="display:none;"></option>
						<option value="Mon">Monday</option>
						<option value="Tues">Tuesday</option>
						<option value="Wed" disabled="true">Wednesday</option>
						<option value="Thurs" disabled="true">Thursday</option>
						<option value="Fri" disabled="true">Friday</option>
						<option value="Sat">Saturday</option>
						<option value="Sun">Sunday</option>
					</select>
			      </td>
				  
				  </tr>
				  <tr>
				  <th colspan="2">Session Time  </th>
				  <td>
					<select name="time" required="required"> </select>
			      </td>
				  </tr>
		            
		            <tr>
		              <td> Ticket Type </td>
		              <td> Quantity </td>
		              <td> Subtotal Price </td>
		            </tr>
					
		           <tr>
		              <td> Adult </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SA" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> Concession </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SP" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>          
		          </tr>
					<tr>
		              <td> Child </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SC" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> First Class Adult </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FA" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> First Class Child </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FC" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> Beanbag - 1 Person </td>
					  <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B1" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> Beanbag - 2 Person </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B2" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td> Beanbag - 3 Children </td>
		              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B3" disabled="true"> </td>
		              <td> <span class = "subTotal"></span> </td>
		            </tr>
					<tr>
		              <td class="total" colspan="2"> Total Price </td>
		              <td> <span class ="total"></span> </td>
		            </tr>
		            <tr>
		            	<td colspan="3">
		            		<input type="submit" value="Buy now" onmousedown="submit()">
		            	</td>
		            </tr>
		          </table>
	          </form>
				</div>
	  				<br>
					
					<p><a href="#" onclick="return false" onmousedown="retract('see2','div2')">(Show Less)</a></p>
				</div>

				<div id="see2" class="seeMore">
					<h5><a href="#" onclick="" onmousedown="expand('see2','div2')"> Show More</a></h5>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>


		<div class="cl">&nbsp;</div>


            <div class="film">
              <div class="cl">&nbsp;</div>
              <!-- Original image below sourced for educational purposes: http://www.latino-review.com/news/green-red-band-trailer-for-judd-apatows-trainwreck-->
              <div class="image"><img src="Images/trainwreck_landscape.jpg"></div>
              <div class="cnt">
			  
			  <div id="moviehead">
				<div class="rating"><img src="Images/ma.png" height="25px" width="25px"/></div>
                <h4><a href="#" onclick="return false" onmousedown="expand('see3','div3')">Trainwreck</a></h4>
                	&nbsp;&nbsp;</div>
				<div id="div3" class="mydivs">
				    <p>Ever since her father drilled into her head that monogamy isn't realistic, magazine writer Amy (Amy Schumer) has made promiscuity her credo. As much as she enjoys an uninhibited life free of commitment, Amy is really in a rut. While writing a profile about charming and successful sports doctor Aaron Conners (Bill Hader), she finds herself actually falling in love for the first time -- and what's more, Aaron seems to like her too. Amy starts to wonder if it's time to clean up her act.</p>
					<br>

					<div class="contact">
				  		<div class="head">
	              			<h3>Table of tickets and display price:</h3>
	          			</div>

						 <form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php">
					          <input type="hidden" name="film" value="RC">
					          <input type="hidden" name="price" value="0">

					          <table border="2" style="width:100%">	
								  <tr>
								  <th colspan="2">Session Day  </th>
								  <td>
									<select class="day" name="day" onchange="fillTime(this);dayChanged(this);" required="required">
										<option value="" style="display:none;"></option>
										<option value="Mon">Monday</option>
										<option value="Tues">Tuesday</option>
										<option value="Wed">Wednesday</option>
										<option value="Thurs">Thursday</option>
										<option value="Fri">Friday</option>
										<option value="Sat">Saturday</option>
										<option value="Sun">Sunday</option>
									</select>
							      </td>
								  </tr>
								  <tr>
								  <th colspan="2">Session Time  </th>
								  <td>
									<select name="time" required="required"> </select>
							      </td>
								  </tr>
						            
						          <tr>
						          	<td> Ticket Type </td>
						          	<td> Quantity </td>
						            <td> Subtotal Price </td>
						          </tr>
									
						            <tr>
						              <td> Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Concession </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SP" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>          
						          </tr>
									<tr>
						              <td> Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 1 Person </td>
									  <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B1" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 2 Person </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B2" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 3 Children </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B3" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td class="total" colspan="2"> Total Price </td>
						              <td> <span class ="total"></span> </td>
						            </tr>
						            <tr>
						            	<td colspan="3">
						            		<input type="submit" value="Buy now" />
						            	</td>
						            </tr>
						      </table>
				          </form>
					</div>
	  				
	  				<br>
					
					<p><a href="#" onclick="return false" onmousedown="retract('see3','div3')">(Show Less)</a></p>			
				</div>
				<div id="see3" class="seeMore">
					<h5><a href="#" onclick="" onmousedown="expand('see3','div3')"> Show More</a></h5>
				</div>

			  </div>
			</div>






            <div class="film">
              <div class="cl">&nbsp;</div>
              <!-- Original image below sourced for educational purposes: http://static.underthegunreview.net/uploads/2014/11/Chappie.jpg-->
              <div class="image"><img src="Images/chappie_landscape.jpg"></div>
              <div class="cnt">
			  
			 <div id="moviehead">
				<div class="rating"><img src="Images/m.png" height="25px" width="25px"/></div>
                <h4><a href="#" onclick="return false" onmousedown="expand('see4','div4')">Chappie</a></h4>&nbsp;&nbsp;
                </div>
				<div id="div4" class="mydivs">
				    <p>In the near future, a mechanized police force patrols the streets and deals with lawbreakers -- but now, the people are fighting back. When one police droid is stolen and given new programming, he acquires the ability to feel and think for himself. While the robot, dubbed "Chappie (Sharlto Copley)," puzzles out human behavior, the authorities begin to see him as a danger to mankind and order; they will stop at nothing to ensure that Chappie is the last of his kind.</p>
					<br>
					<div class="contact">
				  		<div class="head">
	              			<h3>Table of tickets and display price:</h3>
	          			</div>

						 <form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php">
					          <input type="hidden" name="film" value="AC">
					          <input type="hidden" name="price" value="0">

					          <table border="2" style="width:100%">	
								  <tr>
								  <th colspan="2">Session Day  </th>
								  <td>
									<select class="day" name="day" onchange="fillTime(this);dayChanged(this);" required="required">
										<option value="" style="display:none;"></option>
										<option value="Mon" disabled="true">Monday</option>
										<option value="Tues" disabled="true">Tuesday</option>
										<option value="Wed">Wednesday</option>
										<option value="Thurs">Thursday</option>
										<option value="Fri">Friday</option>
										<option value="Sat">Saturday</option>
										<option value="Sun">Sunday</option>
									</select>
							      </td>
								  </tr>
								  <tr>
								  <th colspan="2">Session Time  </th>
								  <td>
									<select name="time" required="required"> </select>
							      </td>
								  </tr>
						            
						          <tr>
						          	<td> Ticket Type </td>
						          	<td> Quantity </td>
						            <td> Subtotal Price </td>
						          </tr>
									
						            <tr>
						              <td> Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Concession </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SP" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>          
						          </tr>
									<tr>
						              <td> Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="SC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Adult </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FA" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> First Class Child </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="FC" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 1 Person </td>
									  <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B1" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 2 Person </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B2" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td> Beanbag - 3 Children </td>
						              <td><input type="number" min="0" max="20" value="0" onchange="updatePrice(this)" name="B3" disabled="true"> </td>
						              <td> <span class = "subTotal"></span> </td>
						            </tr>
									<tr>
						              <td class="total" colspan="2"> Total Price </td>
						              <td> <span class ="total"></span> </td>
						            </tr>
						            <tr>
						            	<td colspan="3">
						            		<input type="submit" value="Buy now" />
						            	</td>
						            </tr>
						      </table>
				          </form>
					</div>
	  				
	  				<br>
					
					<p><a href="#" onclick="return false" onmousedown="retract('see4','div4')">(Show Less)</a></p>
				
				</div>

				<div id="see4" class="seeMore">
					<h5><a href="#" onclick="" onmousedown="expand('see4','div4')"> Show More</a></h5>
				</div>

			  </div>
			</div>
			
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    <!-- / Content -->
  </div>

<!-- / Main -->

<!-- Footer -->
<?php include_once('footer.php'); ?>
<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
