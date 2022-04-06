$( document ).ready(function(){
	  $( ".panel1" ).on("click", function(){
	    $( ".courses_panel2, .courses_panel3, .courses_panel4, .courses_panel5" ).css({"opacity": "0"}); // задаем функцию при нажатиии на элемент с классом show
	    $( ".courses_panel1" ).animate({opacity: 1}, 500); // отображаем все элементы <p>
	  });
	  $( ".panel2" ).on("click", function(){
	    $( ".courses_panel1, .courses_panel3, .courses_panel4, .courses_panel5" ).css({"opacity": "0"});  // задаем функцию при нажатиии на элемент с классом show
	    $( ".courses_panel2" ).animate({opacity: 1}, 500); // отображаем все элементы <p>
	  });
	  $( ".panel3" ).on("click", function(){
	    $( ".courses_panel1, .courses_panel2, .courses_panel4, .courses_panel5" ).css({"opacity": "0"});  // задаем функцию при нажатиии на элемент с классом show
	    $( ".courses_panel3" ).animate({opacity: 1}, 500); // отображаем все элементы <p>
	  });
	  $( ".panel4" ).on("click", function(){
	    $( ".courses_panel1, .courses_panel2, .courses_panel3, .courses_panel5" ).css({"opacity": "0"});  // задаем функцию при нажатиии на элемент с классом show
	    $( ".courses_panel4" ).animate({opacity: 1}, 500); // отображаем все элементы <p>
	  });
	  $( ".panel5" ).on("click", function(){
	    $( ".courses_panel1, .courses_panel2, .courses_panel3, .courses_panel4" ).css({"opacity": "0"});  // задаем функцию при нажатиии на элемент с классом show
	    $( ".courses_panel5" ).animate({opacity: 1}, 500); // отображаем все элементы <p>
	  });
	});