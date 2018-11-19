(function ($) {
    // USE STRICT
    "use strict";

    $('#diet').parent().append('<ul class="list-item" id="newdiet" name="diet"></ul>');
    $('#diet option').each(function(){
        $('#newdiet').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#diet').remove();
    $('#newdiet').attr('id', 'diet');
    $('#diet li').first().addClass('init');
    $("#diet").on("click", ".init", function() {
        $(this).closest("#diet").children('li:not(.init)').toggle();
    });

    var FoodOptions = $("#diet").children('li:not(.init)');
    $("#diet").on("click", "li:not(.init)", function() {
        FoodOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#diet").children('.init').html($(this).html());
        FoodOptions.toggle();
    });
})(jQuery);
