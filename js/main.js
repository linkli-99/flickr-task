function isBlank(str) {
    //Check if the input is empty.
    return (!str || /^\s*$/.test(str));
}

$(document).ready(function() {
    $("#text-generate").click(function(){
        var inputText = $("#text-field").val();
        var radioButton_check = $("input[name='position']").is(':checked');
        //if input is empty, return error.
        if(isBlank(inputText)){
            alert("Please input a valid string!");
        }
        //if input is too long, return error.
        else if(inputText.length > 50){
            alert("Text is too long, please re-enter!");
        }
        //if no position has been selected, return error.
        else if(!radioButton_check){
            alert("Please select a position!");
        }
        else{
            var radioButton = $("input[name='position']:checked").val();
            if($(".text_position").length){
                //remove the text if previously exists.
                $(".text_position").remove();
            }
            //Insert the text block into the image.
            $("<div class='text_position' data-position='"+radioButton+"'>"+ inputText +"</div>").insertAfter(".image_full");
            
        } 
    }); 
});