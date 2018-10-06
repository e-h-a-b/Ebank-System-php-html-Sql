$(document).ready(function(){

	 
	$('.msg_head').click(function(){
		$('.msg_wrap').slideToggle('slow');
		 
	});
	
	 
	
	$('.user').click(function(){

		$('.msg_wrap').show();
		$('.msg_box').show();
	});
	
	$('textarea').keypress(
    function(e){
        if (e.keyCode == 13) {
            e.preventDefault();
            var msg = $(this).val();
			$(this).val('');
			if(msg!='')
			$('<div class="msg_b">'+msg+'</div>').insertBefore('.msg_push');
			
			$.ajax({ 
               type: "POST",
			   url:  "http://ebank.esy.es/support/add.php",
			   data: "idpers="+msg,
			   success: function(data){
				   $('data').html(data);
				   
			   }
			});
			$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
			
        }
    });
	
});