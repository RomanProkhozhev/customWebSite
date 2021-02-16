			<?php
			include_once 'config.php';
			$sql = "SELECT * FROM usercolors WHERE color_name = 'header';";
			$result = mysqli_query($conn, $sql); 
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
			//define variable with paragraph color code from database;
					$hColor = $row['color_code'];
				}
			}

			$sql = "SELECT * FROM usercolors WHERE color_name = 'itemListBackColor';";
			$result = mysqli_query($conn, $sql); 
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					//define variable with paragraph color code from database
					$itemListBackColor = $row['color_code'];
				}
			}
			$sql = "SELECT * FROM usercolors WHERE color_name = 'mainPageBackColor';";
			$result = mysqli_query($conn, $sql); 
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					//define variable with paragraph color code from database
					$mainPageBackColor = $row['color_code'];
				}
			}

			?>


		
		
		var itemListColor;
		var headerColor;
		var bodyColor;
		//default color is last saved to database color code.
		var headerDefaultColor = <?php echo json_encode($hColor); ?>;
		var itemListDefaultColor = <?php echo json_encode($itemListBackColor); ?>;
		var bodyDefaultColor = <?php echo json_encode($mainPageBackColor); ?>;

		window.addEventListener("load", startup, false);

		//set color to class "itemList"
   		var itemList = document.getElementsByClassName("itemList");
		itemList[0].style.backgroundColor = itemListDefaultColor;

		//set color to class "header"
		var header = document.getElementsByClassName("header");
		header[0].style.backgroundColor = headerDefaultColor;

		//set color to class pageBackground
   		var pageBackground = document.getElementsByClassName("pageBackground");
   		pageBackground[0].style.backgroundColor = bodyDefaultColor;





   		function startup() {
			//define variable with selector by id "#itemListColor
			itemListColor = document.querySelector("#itemListColor");
			//set to paraghraph colorselector default color from database 
			itemListColor.value = itemListDefaultColor;
			//add events to selector, each function description below 
			itemListColor.addEventListener("input", changeItemListBackColor, false);
			itemListColor.addEventListener("change", updateItemListBackColor, false);
			itemListColor.select();

			//define variable with selector by id "#headerColor"
			headerColor = document.querySelector("#headerColor");
			//set to header colorselector default color from database 
			headerColor.value = headerDefaultColor;
			//add events to selector, each function description below 
			headerColor.addEventListener("input", changeHeader, false);
			headerColor.addEventListener("change", updateHeader, false);
			headerColor.select();

			//define variable with selector by id "#headerColor"
			bodyColor = document.querySelector("#bodyColorID");
			//set to header colorselector default color from database 
			bodyColor.value = bodyDefaultColor;
			//add events to selector, each function description below 
			bodyColor.addEventListener("input", changeBody, false);
			bodyColor.addEventListener("change", updateBody, false);
			bodyColor.select();
		}

		
		function changeItemListBackColor(event) {
			//document.querySelector("here you can put any class or id or type you want apply changes to. In this case changes will affect only "paragraph" class.More info in net, "css selectors")
			var p = document.querySelector(".itemList");

			if (p) {
				p.style.backgroundColor = event.target.value;
			}
		}
		
		function updateItemListBackColor(event) {
			document.querySelector(".itemList").forEach(function(p) {
				p.style.backgroundColor = event.target.value;
			});
		}
		//document.querySelector("here you can put any class or id or type you want apply changes to. In this case changes will affect only "header" class. More info in net, "css selectors")
		function changeHeader(event) {
			var h = document.querySelector(".header");
			if (h) {
				h.style.backgroundColor = event.target.value;
			}
		}
		function updateHeader(event) {
			document.querySelectorAll(".header").forEach(function(h2) {
				h.style.backgroundColor = event.target.value;
			});
		}

		function changeBody(event) {
			var b = document.querySelector(".pageBackground");
			if (b) {
				b.style.backgroundColor  = event.target.value;
			}
		}
		function updateBody(event) {
			document.querySelectorAll(".pageBackground").forEach(function(h2) {
				b.style.backgroundColor  = event.target.value;
			});
		}
		//SEND INFORMATION TO DB



	
