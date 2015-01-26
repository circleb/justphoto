var $container = jQuery('#masonry-container');

$container.imagesLoaded(function () {
    $container.masonry({
        itemSelector: '.hentry',
        columnWidth: '.hentry',
    });
});

$container.infinitescroll({
	debug        : true,
    navSelector  : "ul.pager",            
    nextSelector : "li.previous a",
    animate      : true,
    itemSelector : "#masonry-container article.hentry"
},
// trigger Masonry as a callback
    function( newElements ) {
        var $newElems = jQuery( newElements ).css({ opacity: 0 });
        $newElems.imagesLoaded(function(){
            $newElems.animate({ opacity: 1 });
            $container.masonry( 'appended', $newElems, true ); 
        });
    }
);