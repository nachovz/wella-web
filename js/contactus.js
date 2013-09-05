$(document).ready(function(){
    $(".checkBox,.checkBoxClear").click(function(srcc)
    {
		var chk = $(this).attr("id");
		chk = "chk_" + chk;
		
        if ($(this).hasClass("checkBox"))
        {
            $(this).removeClass("checkBox");
            $(this).addClass("checkBoxClear");
			
			$('#'+chk).attr('checked', true);

			
        }
        else
        {
            $(this).removeClass("checkBoxClear");
            $(this).addClass("checkBox");
			$('#'+chk).attr('checked', false);

        }
    });	
});