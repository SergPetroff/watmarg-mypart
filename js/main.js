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
			$('.img_input').on('change', _saveFile)
		},

		_saveFile = function(event){
				event.preventDefault();
		if (!this.files[0]) {
            console.log("Не выбран файл для загрузки");
            return;
        };

			var inptfile = this,
				imgID = this.dataset['img'], // id изображения
				fakeinputID = this.dataset['fakeinput'], //fakeinput
				fd = new FormData;

				
			fd.append(0, this.files[0]);
			//fd.append('img', $inptfile.prop('files')[0]);

				$.ajax({
					url:"../php/uploadimg.php",
					type:"POST",
					dataType: 'json',
					data:fd,
					processData: false, // не обрабатывать файлы
        			contentType: false // не отправлять стрингреквест
				})
				.done(function(answer){
					console.log(answer);
					console.log("выполнено");
				})
				.fail(function(answer){

					console.log(answer);
					console.log("ошибка");
				});


		};
		return{
			init:init
		}

})();

$(document).ready(function(){
	Setwatermark.init();
	Saveimg.init();
});