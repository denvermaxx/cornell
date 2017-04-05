$(document).ready(function() { //Initialize code once page loads
  $(".hamburger").on("click", function() {//when you click on the hamburger div, do a function
    $(".nav-items-container").slideToggle(350);//when hamburger is clicked, perform a slide toggle on the container holding the nav items
  });

  $(".side_nav_mobile").on("click", function() {//when you click on the hamburger div, do a function
    $("#side_navigation").slideToggle(350);//when hamburger is clicked, perform a slide toggle on the container holding the nav items
  });
});
