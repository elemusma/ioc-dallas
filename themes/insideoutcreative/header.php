<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(get_field('header', 'options')) { the_field('header', 'options'); } ?>
<?php if(get_field('custom_css')) { ?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }

echo '<div class="secondary-nav text-white position-relative pt-2 pb-2" style="z-index:3;">';

echo '<div class="bg-black position-absolute w-100 h-100 z-2" style="top:0;left:0;"></div>';


echo '<div class="container z-3 position-relative">';
echo '<div class="row align-items-center justify-content-between">';

echo '<div class="col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-white"></div>';
echo '<div class="line-2 bg-white"></div>';
echo '<div class="line-3 bg-white"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-6 text-center d-flex align-items-center justify-content-lg-start justify-content-center">';
echo '<div class="pr-4">';
echo get_template_part('partials/si');
echo '</div>';

echo '<div class="mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));
echo '</div>';

echo '</div>';

echo '<div class="col-md-3 text-center">';
echo '<div style="margin-bottom:-1rem;">';
echo get_field('website_message','options');
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';


echo '</div>';

echo '<div class="blank-space"></div>';

echo '<header class="position-relative w-100" style="top:0;left:0;z-index:3;">';

$globalPlaceholderImg = get_field('global_placeholder_image','options');


if(is_page()){
if(has_post_thumbnail()){

echo '<div class="position-absolute w-100 h-100 bg-attachment" style="background:url(' . get_the_post_thumbnail_url() . ');background-size:cover;background-attachment:fixed;top:0;left:0;"></div>';

// the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
}
} elseif(!is_front_page()) {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
} 


echo '<div class="position-absolute w-100 h-100 bg-black z-1" style="pointer-events:none;mix-blend-mode:multiply;opacity:.5;top:0;left:0;"></div>';
$logoSecondary = get_field('logo_secondary','options');

echo '<div class="position-absolute triangle z-1"></div>';

echo wp_get_attachment_image($logoSecondary['id'],'full','',['class'=>'position-absolute z-1','style'=>'height:150px;right:20px;top:20px;width:150px;']);
?>

<div class="nav pt-3 pb-3 z-1 position-relative">
<div class="container">
<div class="row align-items-center" style="padding-bottom:105px;">
<div class="col-md-6 col-5">
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
echo '</a>';

// wp_nav_menu(array(
//     'menu' => 'primary',
//     'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
//     ));

echo '</div>';
// echo '<div class="col-md-9 mobile-hidden">';

// wp_nav_menu(array(
// 'menu' => 'primary',
// 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
// ));

// echo '</div>';


echo '</div>';
echo '</div>';
echo '</div>';




echo '<section class="hero position-relative z-2">';



if(!is_page(55)) {
echo '<div class="hero-content-inner text-white" style="padding:115px 0 50px;">';
// echo '<div class="position-relative">';
// echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
// echo '<div class="position-relative">';
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-md-10">';
if(get_field('pretitle')):
echo '<h2 class="mb-0 aspira-black h3 pretitle">' . get_field('pretitle') . '</h2>';
endif;
echo '<h1 class="aspira-black" style="font-size: 70px; line-height: 1;">' . get_the_title() . '</h1>';
echo '<div class="bg-accent mb-4" style="height: 4px; width: 200px;"></div>';

if(get_field('subtext')):
echo '<div class="col-lg-8 col-md-10 pl-0">';
echo get_field('subtext');
echo '</div>';
endif;

$link = get_field('button');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


echo '<div class="col-lg-8 col-md-10 pl-0 pt-3">';
echo '<a class="btn btn-main" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
echo '</div>';
echo '</div>';
endif;

// echo '<div class="col-md-6">';
// echo '<h1 class="mb-0 text-shadow" id="home-title" style="line-height:1;">' . get_the_title() . '</h1>';
// echo '<h2 class="mb-0 text-shadow" id="home-subtext" style="line-height:1;">' . get_field('subtext') . '</h2>';
// echo '<div class="divider mb-3"></div>';
// echo '<div class="text-shadow">';
// echo '<strong>';
// echo get_field('subtitle');
// echo '</strong>';
// echo '</div>';
// echo '</div>';
echo '</div>';
echo '</div>';
// echo '</div>';
// echo '</div>';
echo '</div>';
}



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . get_single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

echo '</section>';

if(is_page(55)){
    echo '<section class="z-1 position-relative" style="padding:0 0 200px;">';
    echo '<div class="container">';
    echo '<div class="row">';

    echo '<div class="col-lg-5 col-md-9 pt-5 pb-5 p-4 position-relative">';
    echo '<div class="content">';
    echo '<div class="position-absolute bg-white w-100 h-100" style="opacity: 0.75; top: 0px; left: 0px;"></div>';
    echo '<div class="position-relative">';
    
    echo '<h1>Send your questions!</h1>';

    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '' ){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            // submit the form
            $userEmail = $_POST['email'];
            $firstName = $_POST['firstName'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            // $math = $_POST['math'];
            // $messageSubject = $_POST['subject'];
            // $message = $_POST['message'];


$to = "rick@rickdodd.net";
            
$headers = "From: info@dallasjib.com \r\n";
$headers .= "Reply-To: " . $userEmail . " \r\n";
// $headers .= "CC: garrett@insideoutfocus.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$body = '<table style="background-color: #f7f7f7; width: 100%;">';
$body .= '<tbody>';
$body .= '<tr>';
$body .= '<td>';

// start of table for logo
$body .= '<table style="padding-top:20px;padding-bottom: 20px;margin:auto;">';
$body .= '<tbody>';
$body .= '<tr>';
$body .= '<td style="text-align: center;"><img src="https://dallasjib.com/wp-content/uploads/2022/08/DallasJib-Logo.png" alt="Logo" width="200px" height="auto"/></td>';
$body .= '</tr>';
$body .= '</tbody>';
$body .= '</table>';
// end of table for logo

// start of body
$body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;background-color:white;">';
$body .= '<tbody>';

$body .= '<tr>';
$body .= '<td><p style="padding-left:10px;">Email: <br>' . $userEmail . '</p></td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td><p style="padding-left:10px;">From: <br>' . $firstName . '</p></td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td><p style="padding-left:10px;">Phone: <br>' . $phone . '</p></td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td><p style="padding-left:10px;">Message: <br>' . $message . '</p></td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td>';
$body .= '<h4 style="padding-top:25px;padding-left:10px;margin-bottom:0;">Congrats on your new website lead!</h4>';
$body .= '</td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td>';
$body .= '<p style="padding-left:10px;margin-top:0;">Have questions about the form submission or the website?
Reach out to your web support at <a href="mailto:garrett@insideoutfocus.com">garrett@insideoutfocus.com</a></p>';
$body .= '</td>';
$body .= '</tr>';




$body .= '</tbody>';
$body .= '</table>';
// end of body


// necessary so the table below does get styled
$body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;text-align:center;">';
$body .= '<tbody>';
$body .= '<tr>';
$body .= '<td>';
$body .= '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '</tr>';
$body .= '</tbody>';
$body .= '</table>';
// necessary so the table below does get styled

// start of footer
$body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;text-align:center;">';
$body .= '<tbody>';
$body .= '<tr>';
$body .= '<td>';

$body .= '</td>';
$body .= '</tr>';


$body .= '</tbody>';
$body .= '</table>';
// end of footer

$body .= '</td>';
$body .= '</tr>';
$body .= '</tbody>';
$body .= '</table>';



            mail($to,'Website Lead!!! ' . $firstName .'', $body, $headers);

            $message_sent = true;


            
        }
    }

    if($message_sent){
        // echo '<section class="pt-5 pb-5">';
        // echo '<div class="container">';
        // echo '<div class="row">';
        // echo '<div class="col-12">';

        echo '<h2 class="h3">Thank you for getting in touch, ' . $firstName . '</h2>';
        echo '<p>The form has been successfully submitted. We\'ll respond shortly.</p>';
        echo '<a href="/" class="bg-accent btn text-white"><- Go Back Home</a>';
        
        // echo '</div>';
        // echo '</div>';
        // echo '</div>';
        // echo '</section>';
    } else {
        
echo '<form id="contact-form" class="" action="' . home_url() . '/contact/" method="POST">';

// echo '<div class="container">';
// echo '<div class="row">';

// echo '<div class="col-12">';
// echo '<label for="firstName">First Name</label><br>';
echo '<input type="text" name="firstName" placeholder="Name" style="" required>';
// echo '</div>';

// echo '<div class="col-12">';
// echo '<label for="email">Email</label><br>';
echo '<input type="email" name="email" placeholder="Email" style="" required>';
// echo '</div>';

// echo '<div class="col-12">          ';
// echo '<label for="phone">Phone Number</label><br>';
echo '<input type="tel" name="phone" placeholder="Phone Number" style="" required>';
echo '<input type="tel" name="company" placeholder="Company Name" style="" required>';
// echo '</div>';

// echo '<div class="col-12">          ';
// echo '<label for="message">Message</label><br>';
echo '<textarea name="message" id="" placeholder="Message" cols="30" rows="3"></textarea>';
// echo '</div>';

// echo '<div class="col-12 pt-4">';
echo '<button style="" type="submit">Send Message</button>';
// echo '</div>';

// echo '</div>';
// echo '</div>';
              
echo '</form>';


    }

    echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
    }

echo '</header>';



?>

<div id="navMenuOverlay" class="position-fixed" style="z-index:4;"></div>
<div class="col-9 nav-items bg-black desktop-hidden" id="navItems" style="">
<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1 text-white">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:125px;']);
}
?>
</a>
</div>
<?php 
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
));
?>
</div>