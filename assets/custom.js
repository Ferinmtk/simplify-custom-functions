jQuery(document).ready(function($) {
    // Highlights fields when user interacts
    $('input, textarea, select').on('focus', function(){
        $(this).css('background', '#fff6a1');
    }).on('blur', function(){
        $(this).css('background', '');
    });

    console.log("Simplify Custom Plugin JS Loaded and Running");
    console.log("Plugin updated via GitHub Actions");

});
