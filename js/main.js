function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

$(document).ready(function() {
    $("#text-generate").click(function(){
        var inputText = $("#text-field").val();
        var radioButton_check = $("input[name='position']").is(':checked');
        if(isBlank(inputText)){
            alert("Please input a valid string!");
        }
        else if(inputText.length > 50){
            alert("Text is too long, please re-enter!");
        }
        else if(!radioButton_check){
            alert("Please select a position!");
        }
        else{
            var radioButton = $("input[name='position']:checked").val();
            if($(".text_position").length){
                $(".text_position").remove();
            }
            
            $("<div class='text_position' data-position='"+radioButton+"'>"+ inputText +"</div>").insertAfter(".image_full");
            
        } 
    }); 
});