function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

$(document).ready(function() {
    $("#text-generate").click(function(){
        var inputText = $("#text-field").val();
        if(isBlank(inputText)){
            alert("Please input a valid string!");
        }
        else if(inputText.length > 50){
            alert("Text is too long, please re-enter!");
        }
        else{
            if($(".center").length){
                $(".center").remove();
            }
            $("<div class='center'>"+ inputText +"</div>").insertAfter(".image_full");
        } 
    }); 
});