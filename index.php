ction="display_discount.php" method="post">
	<div id="data">
		<label>Product Description:</label>
			<input type="text" name="product_description"><br>
				<label>List Price:</label>
					<input type="text" name="list_price"><br>
						<label>Discount Percent:</label>
							<input type="text" name="discount_percent"><span>%</span><br>							</div>																		
																						<div id="buttons">
																						<label>&nbsp;</label>
																							<input type="submit" value="Calculate Discount"><br>
																																						</div>	
																																						</form>
																																																				
																																																				<?php
																																																				$product_discription
																																																				=
																																																				filter_input(INPUT_POST,'product_description');
																																																				$list_price
																																																				=
																																																				filter_imput(INPUT_POST,
																																																				'list_price');								
																																																				$discount_percent
																																																				=
																																																				filter_input(INPUT_POST,
																																																				'discount_percent');						
																																																				$discount
																																																				=
																																																				$list_price*$discount_percent*.01;	
																																																				$discount_price
																																																				=
																																																				$list_price
																																																				-
																																																				$discount;
																																																				$list_price_f
																																																				=
																																																				"$".number_format($list_price,
																																																				2); 
																																																				$discount_percent_f
																																																				=
																																																				$discount_percent."%";									
																																																				$discount_f
																																																				=
																																																				"$".number_format($discount,
																																																				2);									
																																																				$discount_price_f
																																																				=
																																																				"$".number_format($discount_price,2);
																																																				?>
																																																																																
																																																																																<!DOCTYPE
																																																																																html>													
																																																																																<html>
																																																																																<head>														
																																																																																<title>Product
																																																																																Discount
																																																																																Calculator</title>
																																																																																<link
																																																																																rel="stylesheet"
																																																																																type="text/css"
																																																																																href="main.css">							
																																																																																</head>														
																																																																																<body>														
																																																																																<main>
																																																																																<h1>Product
																																																																																Discount
																																																																																Calculator</h1>

																																																																																<label>Product
																																																																																Description:</label>
																																																																																<span><?php
																																																																																echo
																																																																																htmlspecialchars($product_discription);?></span><br>
																																																																																<label>List
																																																																																Price:</label>
																																																																																<span><?php
																																																																																echo
																																																																																htmlspecialchars($list_price_f);
																																																																																?></span><br>
																																																																																<label>Standard
																																																																																Discount:</label>
																																																																																<span><?php
																																																																																echo
																																																																																htmlspecialchars($discount_percent_f);?></span><br>
																																																																																<label>Discount
																																																																																Amount:</label> 
																																																																																<span><?php
																																																																																echo
																																																																																$discount_f;
																																																																																?></span><br> 									
																																																																																<label>Discount
																																																																																Price:</label>
																																																																																<span><?php
																																																																																echo
																																																																																$discount_price_f;
																																																																																?></span><br> 
																																																																																</main>
																																																																																</body>																																											
																																																																																</html>
