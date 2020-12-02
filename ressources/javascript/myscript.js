    var side_toggler = $('#admin #sidebar_toggler');
    var arrow_span = $('#admin #sidebar_toggler span');
    var sidebar = $('#admin #sidebar');

side_toggler.on('click' , function(){
    sidebar.toggleClass('negative_margin')
    arrow_span.toggleClass('arrow_rotate')
})