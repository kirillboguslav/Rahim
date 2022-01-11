						<?php
                        $a = [
                            [
                                "img" => 'img/demo/authors/sunny.png',
                                "alt" => 'Sunny A.',
                                "title" => 'Sunny A. (UI/UX Expert)',
                                "job" => 'Lead Author',
                                "link" => 'https://twitter.com/@myplaneticket',
                                "mail" => '@myplaneticket',
                                "link2" => 'https://wrapbootstrap.com/user/myorange',
                                "title2" => 'Contact Sunny',
                                "ban" => '0'
                            ],
                            [
                                "img" => 'img/demo/authors/josh.png',
                                "alt" => 'Jos K.',
                                "title" => 'Jos K. (ASP.NET Developer)',
                                "job" => 'Partner &amp; Contributor',
                                "link" => 'https://twitter.com/@atlantez',
                                "mail" => '@atlantez',
                                "link2" => 'https://wrapbootstrap.com/user/Walapa',
                                "title2" => 'Contact Jos',
                                "ban" => '0'
                            ],
                            [
                                "img" => 'img/demo/authors/jovanni.png',
                                "alt" => 'Jovanni Lo',
                                "title" => 'Jovanni L. (PHP Developer)',
                                "job" => 'Partner &amp; Contributor',
                                "link" => 'https://twitter.com/@lodev09',
                                "mail" => '@lodev09',
                                "link2" => 'https://wrapbootstrap.com/user/lodev09',
                                "title2" => 'Contact Jovanni',
                                "ban" => '1'
                            ],
                            [
                                "img" => 'img/demo/authors/roberto.png',
                                "alt" => 'Jovanni Lo',
                                "title" => 'Roberto R. (Rails Developer)',
                                "job" => 'Partner &amp; Contributor',
                                "link" => 'https://twitter.com/@sildur',
                                "mail" => '@sildur',
                                "link2" => 'https://wrapbootstrap.com/user/sildur',
                                "title2" => 'Contact Roberto',
                                "ban" => '1'
                            ]
                        ];
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                    	<?php
                        foreach ($a as $k => $a) {
                        	echo '<div class="';
                        	echo ($a[ban] != 1) ? '' : 'banned ';
                            echo 'rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">';
                            echo '<img src="'.$a[img].'" alt="'.$a[alt].'" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">';
                            echo '<div class="ml-2 mr-3">';
                            echo '<h5 class="m-0">';
                            echo $a[title];
                            echo '<small class="m-0 fw-300">';
                            echo $a[job];
                            echo '</small></h5>';
                            echo '<a href="'.$a[link].'" class="text-info fs-sm" target="_blank">'.$a[mail].'</a> - ';
                            echo '<a href="'.$a[link2].'" class="text-info fs-sm" target="_blank" title="'.$a[title2].'"><i class="fal fa-envelope"></i></a>';
                            echo '</div></div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
