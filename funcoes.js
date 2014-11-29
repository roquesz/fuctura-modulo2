
	// alert("Texto");
	// var a = 2;
	// var b = 4;

	// alert(a + b);

	//document.getElementById("texto").innerHTML = "Texto via javascript";
	//document.getElementById("texto").style.display = 'none';
	//document.getElementById("texto").innerHTML = document.body.offsetWidth;
	document.getElementsByTagName("div")[1].innerHTML = "Texto via javascript";
	document.getElementById("nome").getAttibutes
	//confirm('Texto');
	function alerta()
	{
		alert('texto');
		document.getElementById("texto").innerHTML = "Texto via javascript";
	}
	document.getElementById("teste").value = 5;


	$("#teste").val(5).css("background", "blue").width("400px");

	$("#texto").html("Texto via jQuery");

$( "#animate" ).click(function() {
  $( "#scroll" ).animate({
    opacity: 0.25,
    left: "+=50",
    height: "toggle"
  }, 5000, function() {
    // Animation complete.
  });
});

jQuery("#soma").click(
	function()
	{
		$.ajax({
			url: "soma.php",
			type: "POST",
			data: {a: $("#a").val(), b: $("#b").val()}
		}).done(
			function(resposta)
			{
				$("#resultado").html(resposta);
			}
		)
	}
)