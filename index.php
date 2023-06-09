<?php
//echo 'HOLA';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Envelope + Letter (Open/Close on Click)</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="envelope-wrapper" id="carta">
            <div class="envelope" id="buzon">
                <div class="letter" id="invitate">
                    <div class="text">
                        <h1 class="subtitulo">PAULA & BLAS</h1>
                        <div class="box_img"><img src="img.jpg" class="img"></div>
                        <h2 class="titulo">
                            Nuestra boda 
                        </h2>
                        <div id="countdown">
                        	<div id="clock" class="personalColorTitutlo"></div>
                    	</div>
                    </div>
                </div>
            </div>
            <div class="heart" id="cora"></div>
            <div class="invitado">VARGAS</div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.countdown.js"></script>
    <script src="jquery.countdown.min.js"></script>
    <script type="text/javascript">
    	const envelope = document.getElementById("carta");
    	const buzon = document.getElementById("buzon");
    	const invitate = document.getElementById("invitate");
    	setTimeout(() => {
    		envelope.classList.toggle('flap');
    	}, 1500);

    	setTimeout(() => {
    		envelope.classList.toggle('desplazo');
    	}, 1000);

    	setTimeout(() => {
    		invitate.classList.toggle('subo');
    	}, 3000);

    	setTimeout(() => {
    		invitate.classList.toggle('agrando');
    	}, 3500);

    	/*setTimeout(() => {
    		envelope.classList.toggle('desplazo');
    	}, 2000);*/
	        
        /*envelope.addEventListener('click', () => {
        });*/

        $(document).ready(function() { 
	        $('#clock').countdown('2024/03/16').on('update.countdown', function(event) {
			    var $this = $(this).html(event.strftime('' + '<span class="wraper-clock"><div class="value">%D</div><div class="value-label">Days</div></span><span class="sep">:</span>' + '<span class="wraper-clock"><div class="value">%H</div><div class="value-label">Hours</div></span><span class="sep">:</span>' + '<span class="wraper-clock"><div class="value">%M</div><div class="value-label">Minutes</div></span><span class="sep">:</span>' + '<span class="wraper-clock"><div class="value">%S</div><div class="value-label">Seconds</div></span>'));
			});
		});
    </script>
</body>
</html>