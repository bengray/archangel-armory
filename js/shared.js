$(document).ready(function() {
   $('.index-logo').fadeIn(1000);

   let currentPage = window.location.pathname;

   $('#navbarResponsive ul li').each(function() {
    if (currentPage.indexOf(link.href) >= 0) {
                $(this).addClass('active');
            }
   });
   
});
