
(function ($){
    jQuery.fn.addItem = function(addItem){
        $(document).ready(function() {
            $(addItem.btn).each(function (e){
                $(this).bind("click", addItems);
            });
        });
        function addItems(){
            var
            id = addItem.id,
            icon = addItem.icon,
            add = addItem.addClass,
            element = addItem.element,
            remove = addItem.removeClass;
            if(id === undefined){
                id = "div_";
            }
            if(icon === undefined){
                icon = "remove";
            }
            if(add === undefined){
                add = "btn-danger";
            }
            if(remove === undefined){
                remove = "btn-info";
            }
            var eventID = parseInt($(this).parent('div').parent('div').attr('id').replace(id,''));
            var newEvent = (eventID+1);
            $newClone = $('#'+id+eventID).clone(true);
            $newClone.attr("id",id+newEvent);
            $newClone.children('div').children("input").eq(0).attr("id",element+newEvent).val('');
            $newClone.children('div').children("input").eq(0).val('');
            $newClone.children('div').children("input").eq(1).val('');
            //$newClone.children('div').children("input").eq(2).attr("id",newEvent);
            $newClone.children('div').children("button").eq(0).attr("id",newEvent);
            $newClone.insertAfter($('#'+id+eventID));
            $("#"+eventID).html('<i class="glyphicon glyphicon-'+icon+'"></i>').removeClass(remove).addClass(add).unbind("click",addItems);
            $("#"+eventID).bind("click",delRow);
        };
        function delRow() {
            $(this).parent('div').parent('div').remove();
        };
    };
})(jQuery);