jQuery(document).ready(function($) {


// store tab controls in a variable ($tabs)
// we will use .tab('show') on their containing links when slider arrows are clicked
    var $tabs = $('.timeline-block > div >.nav-tabs>li');


    var firstitem = $('.timeline-block .dropdown-menu a:first-child');
    $('#dropdownMenuButton').html( firstitem.html());
    $('.timeline-block .dropdown-menu a').click(function(){
        $('#dropdownMenuButton').html($(this).html());
        var selected = $(this).attr('href');


        $('.timeline-block ul.nav .nav-item a').removeClass('active show');
        $('.timeline-block ul.nav .nav-item a[href='+selected+']').addClass('active show');
    });

    $('.timeline-block ul.nav .nav-item a').click(function() {
        $('#dropdownMenuButton').html($(this).html());
    });

// when data-slide="next" is clicked
    $('[data-slide="next"]').on('click', function() {

        // if there is a $tabs after the class="active" one
        if ($tabs.find('a').filter('.active').parent().next('li.nav-item').length) {
            // .tab('show') its link
            var next = $tabs.find('a.nav-link').filter('.active').parent().next('li')
            $('#dropdownMenuButton').html(next.find('a').html());
            next.find('a[data-toggle="tab"]').tab('show');


        } else {

            // else .tab('show') first $tabs link
            $tabs.eq(0).find('a[data-toggle="tab"]').tab('show');
        }
    });

// when data-slide="prev" is clicked
    $('[data-slide="prev"]').on('click', function() {

        // if there is a $tabs before the class="active" one
        if ($tabs.find('a').filter('.active').parent().prev('li.nav-item').length) {

            // .tab('show') its link
            $('#dropdownMenuButton').html($tabs.find('a').filter('.active').parent().prev('li').find('a').html());
            $tabs.find('a').filter('.active').parent().prev('li').find('a[data-toggle="tab"]').tab('show');

        } else {

            // else .tab('show') last $tabs link
            $tabs.eq($tabs.length - 1).find('a[data-toggle="tab"]').tab('show');
        }
    });

});