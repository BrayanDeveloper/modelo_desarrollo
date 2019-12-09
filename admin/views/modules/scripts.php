<!--  SCRIPTS  -->
<!-- JQuery -->
<script type="text/javascript" src="views/assets/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="views/assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="views/assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="views/assets/js/mdb.min.js"></script>

<script type="text/javascript" src="views/assets/js/sweetalert2.js"></script>

<script src="views/assets/js/fileinput.js" type="text/javascript"></script>

<script src="views/assets/js/es.js" type="text/javascript"></script>

<script src="views/assets/js/theme.js" type="text/javascript"></script>

<!-- Initializations -->
<script>
    // SideNav Initialization
    /*$(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });*/

    // SideNav Button Initialization
    $(".button-collapse").sideNav({
        breakpoint: 1200
    });
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);

    $(function() {
        $('#dark-mode').on('click', function(e) {

            e.preventDefault();

            $('footer, .card').toggleClass('dark-card-admin');
            $('body, .navbar').toggleClass('white-skin navy-blue-skin');
            $(this).toggleClass('white text-dark btn-outline-black');
            $('body').toggleClass('dark-bg-admin');
            $('h6, .card, p, td, th, i, li a, h4, input, label').not('#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
            $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
            $('.gradient-card-header').toggleClass('white black lighten-4');
            $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

        });
    });
</script>
