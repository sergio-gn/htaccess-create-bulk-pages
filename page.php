<?php

$titles = [
'pageone',
'pagetwo',
'pagethree',
'pagefour',

];



// Check if the 's' parameter is set in the query string
if (isset($_GET['s']) && in_array($_GET['s'], $titles)) {
    $title = $_GET['s'];
var_dump($title);
    if ($title == 'pagefive') {
        header("Location: https://www.example.com/page-pagefour.php");
        exit();
    }
} else {
    // Redirect to the 404 page
    header("HTTP/1.0 404 Not Found");
    header("Location: https://www.example.com/404.php");
    exit();
}


$title = ucfirst($title);
$title = str_replace("-", " ", $title);



$main_title = 'Phas been t '. $title.' | en the indus  | dummy text  ' . $title . ' ';
$description = 'sum has been the indu ' . $title . '. sum has been the industrys standard dummy text ever';
include __DIR__ . '/src/header.php';
$imgfolder = 'suburb';
$bannerHeading = 'as been the industrys standard dummy text  '.$title;
$bannerSubHeading = 'as been the industrys standard dummy text !';
include __DIR__ . '/src/banner-cta.php';
?>

<section class="some style class">
	<div class="some style class">
		<div class="some style class">
			<p>een the industrys <?=$title?> standard dummy t</p>
		</div>
		<div class="some style class">
			<p class="some style class">
				<p>een the industrys <?=$title?> standard dummy t</p>
			</p>
	</div>
</section>

<?php
include __DIR__ . '/src/footer.php';
?>