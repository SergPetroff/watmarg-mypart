var Setwatermark = (function(){

	
	var init = function(){
		_setUplisteners();
	},
		_setUplisteners = function(){
			$('.btn-send').on('click', _sendAJAX);
		},

		_sendAJAX = function(event){
				event.preventDefault();
				console.log('отправка перехвачена');

				$.ajax({
				  url: "../php/watermark.php",
				  type: "POST",
				  data: {
				  	'posx':'10',
				  	'posy':'50',
				  	'margx':'10',
				  	'margy':'10',
				  	'opacity':'0.2',
				  	'mode':'tile'
				  }
				})
				.done(function(){
					console.log("выполнено");
					$('.imgbox').attr('src','img/result.png');
				})
				.fail(function(){
					console.log("ошибка");
				});


		};

	return{
		init:init
	}
})();

var Saveimg = (function(){
	var init = function(){
		_setUplisteners();
	},
		_setUplisteners = function(){
			$('.save-btn').on('click', _saveFile)
		},
		_saveFile = function(event){
				event.preventDefault();

				$.ajax({
					url:"../php/uploadimg.php",
					type:"POST",
					data:{

						
					}
				})


		};
		return{
			init:init
		}

})();

$(document).ready(function(){
	Setwatermark.init();
	Saveimg.init();
});