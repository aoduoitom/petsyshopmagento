/**
 * Created by XUANTUNG on 07/04/2017.
 */
$j(document).ready(function() {

    $j(".btn-submenu").click(function() {
        $j(this).toggleClass('active');
        $j(this).next().slideToggle();

    });

});

function animatedIcon(x) {
    x.classList.toggle("change");
    $j(".nav-primary").slideToggle();
}
