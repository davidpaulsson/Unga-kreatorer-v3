// Set up our baby-bear breakpoint
var jRes = jRespond([{
    label: 'baby-bear',
    enter: 0,
    exit: 800
}]);

jQuery(document).ready(function ($) {

    // Fitvids
    $("div.entry-content").fitVids();

    // Fittext
    $("h1.widget-title").fitText();


    // Stuff to do inside baby-bear
    jRes.addFunc({
        breakpoint: 'baby-bear',
        enter: function () {
        
            // Fittext
            $("h1.site-title,h1.entry-title").fitText();
        
        }
    });


});