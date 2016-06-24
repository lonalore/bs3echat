<?php

/**
 * BS3 eChat theme file.
 */

if (!defined('e107_INIT'))
{
	exit;
}

if (($library = e107::library('load', 'cdn.bootstrap')) && !empty($library['loaded']))
{
	define("BOOTSTRAP", 3);
}

if (($library = e107::library('load', 'cdn.fontawesome')) && !empty($library['loaded']))
{
	define("FONTAWESOME", 4);
}

define('VIEWPORT', "width=device-width, initial-scale=1.0");

/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data.
 */
function tablestyle($caption, $text, $id = '', $info = array())
{
	$style = $info['setStyle'];
	$html = '';

	switch ($style)
	{
		case 'no-caption':
			$html .= $text;
			break;

		case 'portfolio':
			$html .= '<h2>' . $caption . '</h2>';
			$html .= '<hr class="star-primary">';
			$html .= $text;
			break;

		case 'default':
		default:
			if (!empty($caption))
			{
				$html .= '<h2 class="caption">' . $caption . '</h2>';
			}
			break;
	}

	echo $html;

	return;
}

$LAYOUT['_header_'] = '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.5&appId=1677190279179002";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{SITEURL}">{SITENAME}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {NAVIGATION=main}
            {NAVIGATION_USER}
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
';

$LAYOUT['_footer_'] = '

';

$LAYOUT['home'] = '
{SETSTYLE=default}
<!-- Header. -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="intro-text">
                    <span class="name">eChat Website</span>
                    <hr class="star-light">
                    <span class="skills">Website used for developing eChat plugin.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="main-container">
    <div class="container">
	    {ALERTS}
		<div class="row">
   			<div class="col-xs-12">
				{---}
 			</div>
        </div>
    </div>
</div>
';
