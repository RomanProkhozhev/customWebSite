
		//init variables
		var paragpaphColor;
		var headerColor;
		var bodyColor;
		//default color is last saved to database color code.
		var headerDefaultColor = <?php echo json_encode($hColor); ?>;
		var paragraphDefaultColor = <?php echo json_encode($pColor); ?>;
		var bodyDefaultColor = <?php echo json_encode($bColor); ?>;

		window.addEventListener("load", startup, false);
		//set color to class "header"
		var header = document.getElementsByClassName("header");
		header[0].style.color = headerDefaultColor;
   		//set color to class "paragraph"
   		var paragraph = document.getElementsByClassName("paragraph");
   		paragraph[0].style.color = paragraphDefaultColor;

   		var bodyColor = document.getElementsByClassName("pageBackground");
   		bodyColor[0].style.backgroundColor = bodyDefaultColor;


   		  function startup() {
			//define variable with selector by id "#paragraphColor
			paragraphColor = document.querySelector("#paragraphColor");
			//set to paraghraph colorselector default color from database 
			paragraphColor.value = paragraphDefaultColor;
			//add events to selector, each function description below 
			paragraphColor.addEventListener("input", changeParaghraph, false);
			paragraphColor.addEventListener("change", updateParagraph, false);
			paragraphColor.select();
			//define variable with selector by id "#headerColor"
			headerColor = document.querySelector("#headerColor");
			//set to header colorselector default color from database 
			headerColor.value = headerDefaultColor;
			//add events to selector, each function description below 
			headerColor.addEventListener("input", changeHeader, false);
			headerColor.addEventListener("change", updateHeader, false);
			headerColor.select();
			bodyColor = document.querySelector("#bodyColorID");
			//set to header colorselector default color from database 
			
			//add events to selector, each function description below 
			bodyColor.addEventListener("input", changeBody, false);
			bodyColor.addEventListener("change", updateBody, false);
			bodyColor.select();
		}

		
		function changeParaghraph(event) {
			//document.querySelector("here you can put any class or id or type you want apply changes to. In this case changes will affect only "paragraph" class.More info in net, "css selectors")
			var p = document.querySelector(".paragraph");

			if (p) {
				p.style.color = event.target.value;
			}
		}
		
		function updateParagraph(event) {
			document.querySelector(".paragraph").forEach(function(p) {
				p.style.color = event.target.value;
			});
		}
		//document.querySelector("here you can put any class or id or type you want apply changes to. In this case changes will affect only "header" class. More info in net, "css selectors")
		function changeHeader(event) {
			var h2 = document.querySelector(".header");
			if (h2) {
				h2.style.color = event.target.value;
			}
		}
		function updateHeader(event) {
			document.querySelectorAll(".header").forEach(function(h2) {
				h2.style.color = event.target.value;
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


