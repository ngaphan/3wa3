
document.addEventListener
(

	"DOMContentLoaded",
	function()
		{

		console.log("DOM1 fully loaded and parsed");

		installEventHandler
			(
				"#navi1",
				"click",
				showNewContactForm
				//met funct en param
			);


		installEventHandler
			(
				".valid",
				"click",				
				saveFormFieldValue
				//met funct en param
			);	

		initializeLocalStorage();
		
		
		}


);



