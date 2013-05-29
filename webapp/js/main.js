(function($){

  //set comment vars
  var tip_0 = 'Beer time!';
  var tip_1 = 'Enjoy a beer.';
  var tip_2 = 'Enjoy a second.';
  var tip_3 = 'Remeber to sit down and be quiet.';
  var tip_4 = 'Okay, have a glass of water after this one.';
  var tip_5 = 'This is your last one. Drink only water after this!';
  var tip_6 = 'Stop drinking dude!';
  var tip_7 = 'Really man, stop drinking!';

  // check if any data is in local storage
	function init() {

    if (localStorage.beerAmount) {
      count = localStorage.beerAmount;
    } else {
      count = 0;
    }

    if (localStorage.theComment) {
      tip = localStorage.theComment;
    } else {
      tip = tip_0;
    }
	}
	init();
	//console.log(localStorage.beerAmount);

  // set the default output
	$('#beerCount').html(count);
	$('#comment').html(tip);
	if (count <= 0) {
		$('#sub').css('opacity','0.2');
		$('#reset').css('opacity','0.2');
	}


  // add beer amount and comments
	$('#add').on({'touchstart':function() {
		count++;
		$('#beerCount').html(count);
		localStorage.beerAmount = count;

		if (count > 0) {
			$('#sub').css('opacity','1');
			$('#reset').css('opacity','1');
		}

    // set tip/comment
    if (count == 0) {
			$('#comment').text(tip_0); localStorage.theComment = tip_0;
		}
		if (count == 1) {
			$('#comment').text(tip_1); localStorage.theComment = tip_1;
		}
		if (count == 2) {
			$('#comment').text(tip_2); localStorage.theComment = tip_2;
		}
		if (count == 3) {
			$('#comment').text(tip_3); localStorage.theComment = tip_3;
		}
		if (count == 4) {
			$('#comment').text(tip_4); localStorage.theComment = tip_4;
		}
		if (count == 5) {
			$('#comment').text(tip_5); localStorage.theComment = tip_5;
		}
		if (count == 6) {
			$('#comment').text(tip_6); localStorage.theComment = tip_6;
		}
		if (count >= 7) {
			$('#comment').text(tip_7); localStorage.theComment = tip_7;
		}

    //
		console.log(count);
		}
	});

  // subtract beer amount and comments
  $('#sub').on({'touchstart':function() {
		count--;
		$('#beerCount').html(count);
		localStorage.beerAmount = count;

		if (count <= 0) {
		  count = 0;
			$('#beerCount').html('0');
			localStorage.beerAmount = 0;
			$(this).css('opacity','0.2');
			$('#reset').css('opacity','0.2');
		}

    // set tip/comment
    if (count == 0) {
			$('#comment').text(tip_0); localStorage.theComment = tip_0;
		}
		if (count == 1) {
			$('#comment').text(tip_1); localStorage.theComment = tip_1;
		}
		if (count == 2) {
			$('#comment').text(tip_2); localStorage.theComment = tip_2;
		}
		if (count == 3) {
			$('#comment').text(tip_3); localStorage.theComment = tip_3;
		}
		if (count == 4) {
			$('#comment').text(tip_4); localStorage.theComment = tip_4;
		}
		if (count == 5) {
			$('#comment').text(tip_5); localStorage.theComment = tip_5;
		}
		if (count == 6) {
			$('#comment').text(tip_6); localStorage.theComment = tip_6;
		}

		//
		console.log(count);
		}
	});

	$('#reset').on({'touchstart':function() {
		count = 0;
		tip = 'Beer time!';
		$('#beerCount').html(count);
		localStorage.beerAmount = count;
		$('#comment').text(tip);
		localStorage.theComment = tip;
		$('#sub').css('opacity','0.2');
    $('#reset').css('opacity','0.2');

		//
		console.log(count);
		}
	});

})(window.jQuery);
