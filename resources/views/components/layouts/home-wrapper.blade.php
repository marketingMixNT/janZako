@props(['home','apartments'])

<x-preloader :logo="$home->logo" />
<x-nav.navbar-home :home="$home" />

{{$slot}}

{!!$home->map!!}

<x-footer-home :home="$home" :apartments="$apartments" />



<script src="https://wis.upperbooking.com/63/booking-new?locale=pl" async></script>



<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
_smartsupp.key = '0db371734ad546492df7d446e2813a6ea5beff58';
_smartsupp.offsetY = 70;
window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>