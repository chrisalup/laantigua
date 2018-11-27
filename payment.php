
<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_ajax() ) {
	do_action('woocommerce_review_order_before_payment');
}
?>

<div id="payment" class="woocommerce-checkout-payment">
	<?php if ( WC()->cart->needs_payment() ) : ?>
		<ul class="wc_payment_methods payment_methods methods">
			<?php
				if ( ! empty( $available_gateways ) ) {
					foreach ( $available_gateways as $gateway ) {
						wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
					}
				} else {
					echo '<li>' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_country() ? __( 'Lo sentimos, parece que no existen medios de pagos disponibles para tu ubicación. Por facor contáctenos si necesita mas ayuda.', 'woocommerce' ) : __( 'Complete la información para ver los medios de pago disponibles..', 'woocommerce' ) ) . '</li>';
				}
			?>
		</ul>
	<?php endif; ?>
	<div class="form-row place-order">
		<noscript>
			<?php _e( 'Tu navegador no soporta JavaScript, o está deshabilitado, por favor haga click en el botón <em>Actualizar Totales</em> antes de confirmar la orden. Si usted no hace esto, el precio final podría ser mayor que el moestrado anteriormente.', 'woocommerce' ); ?>
			<br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>" />
		</noscript>
		
		<?php 
		wc_get_template( 'checkout/terms.php' ); ?>
		
		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>
		<script>
		  new WOW().init();
		</script>
		<?php 

			echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); 
		
		
		?>
<script>
    var geocoder = new google.maps.Geocoder();
	var state;
	
    function getUrquizaMapCoodinates()
    {
        var Trip=[
            new google.maps.LatLng(-34.57036577326544, -58.50934971123934),
            new google.maps.LatLng(-34.55204111566828, -58.47353685647249),
            new google.maps.LatLng(-34.566937937950875, -58.46252907067537),
            new google.maps.LatLng(-34.56893458085824, -58.465747721493244),
            new google.maps.LatLng(-34.57351077620322, -58.461713679134846),
            new google.maps.LatLng(-34.57510090094499, -58.4633444622159),
            new google.maps.LatLng(-34.58126676367984, -58.474223501980305),
            new google.maps.LatLng(-34.58909268711521, -58.484673388302326),
            new google.maps.LatLng(-34.58480000321406, -58.4887932613492),
            new google.maps.LatLng(-34.57351077620322, -58.50298382341862)
        ];
        
        return Trip;
    }

    function getAntiguaMapCoodinates()
    {
        var Trip=[
            new google.maps.LatLng(-34.604706999634935, -58.525421507656574),
            new google.maps.LatLng(-34.57003006367772, -58.50913513451815),
            new google.maps.LatLng(-34.57351077620322, -58.502955324947834),
            new google.maps.LatLng(-34.57946475367906, -58.49531639367342),
            new google.maps.LatLng(-34.58156709488159, -58.49252689629793),
            new google.maps.LatLng(-34.584164031183626, -58.48952282220125),
            new google.maps.LatLng(-34.5891280169268, -58.484716303646564),
            new google.maps.LatLng(-34.59032922158246, -58.481175787746906),
            new google.maps.LatLng(-34.59165405951875, -58.47636926919222),
            new google.maps.LatLng(-34.592572601419825, -58.476197607815266),
            new google.maps.LatLng(-34.599708619458355, -58.47883690148592),
            new google.maps.LatLng(-34.59785402026442, -58.483214266598225),
            new google.maps.LatLng(-34.59705917936172, -58.49289167672396),
            new google.maps.LatLng(-34.60172213740961, -58.48978031426668),
            new google.maps.LatLng(-34.60889269078858, -58.48351467400789),
            new google.maps.LatLng(-34.61014659094618, -58.48855722695589),
            new google.maps.LatLng(-34.613466685818565, -58.49312771111727),
            new google.maps.LatLng(-34.61316646993418, -58.493406660854816),
            new google.maps.LatLng(-34.62084812306072, -58.50771892815828),
            new google.maps.LatLng(-34.61835828578114, -58.51083029061556),
            new google.maps.LatLng(-34.617210463299976, -58.50877035409212),
            new google.maps.LatLng(-34.61389051815993, -58.51235378533602),
            new google.maps.LatLng(-34.60892801217898, -58.5168169811368),
            new google.maps.LatLng(-34.609917005009635, -58.51825464516878)
        ];
        
        return Trip;
    }

    function makeMap(myCenter, myElement, myMessage, myTrip)
    { 
        var marker;

        var mapData = {
            center:myCenter,
            zoom:13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
         };
      
        var map = new google.maps.Map(document.getElementById(myElement), mapData);

        var marker = new google.maps.Marker({
            position:myCenter,
            animation:google.maps.Animation.BOUNCE,
        });
      
        marker.setMap(map);
        
        var infowindow = new google.maps.InfoWindow({
            content:myMessage
         });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });

        var flightPath = new google.maps.Polygon({
            path:myTrip,
            strokeColor:"#0000FF",
            strokeOpacity:0.8,
            strokeWeight:2,
            fillColor:"#0000FF",
            fillOpacity:0.4
         });

        flightPath.setMap(map);
        
        return map;
    }

    function getUserCoordinates(address, callback) 
    {
        var coordinates;
        geocoder.geocode({ address: address}, function(results, status)
        {
            if (status === google.maps.GeocoderStatus.OK)
            {
                coordinates = results[0].geometry.location;
                callback(coordinates);
            }
            else{
                coordinates = new google.maps.LatLng(10.4929134, -66.879072),
                callback(coordinates);
            }
        });
        
    }
    
    function findInMap(coordinates, direction,callback)
    {
        direction += ',Ciudad Autónoma de Buenos Aires, Argentina';
        getUserCoordinates(direction, function(point)
        {   var Trip = new google.maps.Polygon({paths: coordinates});
            callback(google.maps.geometry.poly.containsLocation(point, Trip));
        });
    }
    
  
	document.body.innerHTML = document.body.innerHTML + '<div id="googleMap" style="width:500px;height:380px;" hidden></div><div id="googleMap2" style="width:500px;height:380px;" hidden></div>';
	
function checkadress()
	{	
	var valor=getCookie("state");

if(valor!="--"){

	var dir = valor;
        var urquizaTrip = getUrquizaMapCoodinates();
        var devotoTrip = getAntiguaMapCoodinates();
		
		if(document.getElementById("googleMap").value!=true)
		{
			var urquiza = new google.maps.LatLng(-34.5703139,-58.479382999999984);
			var urquizaMessage = "La Antigua de Urquiza.\nAv. Monroe 4446 - Villa Urquiza - Capital Federal.\nTel: 4547-0734 / 4547-0936";
			var devoto = new google.maps.LatLng(-34.5952007,-58.50374249999999);
			var devotoMessage = "La Antigua de Devoto.\nNueva York 3363- Villa Devoto - Capital Federal.\nTel: 4503-0063 / 4501-9610";
			makeMap(urquiza,"googleMap",urquizaMessage,urquizaTrip);
			makeMap(devoto,"googleMap2",devotoMessage,devotoTrip);
			document.getElementById("googleMap").value=true;
		}
		
        findInMap(devotoTrip,dir, function(result)
        {		
			if(result)
			{
			
				document.getElementById("billing_store").removeAttribute("value");
				document.getElementById("billing_store").setAttribute("value", "devoto");
				document.getElementById("place_order").removeAttribute("disabled");
			} else {
				
					findInMap(urquizaTrip,dir, function(result1)
					{
						
						if (result1)
						{
							document.getElementById("billing_store").removeAttribute("value");
							document.getElementById("billing_store").setAttribute("value", "urquiza");
							document.getElementById("place_order").removeAttribute("disabled"); 
				
						}else{
								document.getElementById("place_order").setAttribute("disabled", "disabled");	
							
								document.getElementById("billing_store").removeAttribute("value");
								document.getElementById("billing_store").setAttribute("value", "");
													
						}
					});
			}				
        });
		
	} 	
}

function setCookie(cname, cvalue, exdays)
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*3600));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue  + "; " + expires+ "; path=/;";
}
function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
checkadress();
if(getCookie("state")!="--"){

	document.getElementById("place_order").removeAttribute("disabled"); 
document.getElementById("place_order").removeAttribute("disabled"); 
}
</script>
		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

		<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>
	</div>
</div>

<?php
if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_after_payment' );
}
