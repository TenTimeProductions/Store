//the reason for the odd-looking selector is to listen for the click event
// on links that don't even exist yet - i.e. are loaded from the server.
$('.sidebar-menu').on('click','.item-menu a',function (e) {
    e.preventDefault();
    var url = $(this).attr("data-url");

    if (typeof url !== "undefined") {
        var pane = $(this), href = this.hash;

        // ajax load from data-url
        $(href).load("pages/"+url,function(result){      
            pane.tab('show');
        });
    } else {
        $(this).tab('show');
    }
});