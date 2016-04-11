<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Reputation Upgrade SEO Tool</title>

    <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	  
	  
	  
	  <!-- Latest compiled and minified JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	  
	  <!-- Custom styles for this template -->
	  <link href="css/SEO-Style.css" rel="stylesheet">
	  
	  <!-- Google fonts -->
	  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	  
	  <style type="text/css">
		  #results-container{display:block;}
	  </style>
  </head>

  <body>
									    <?
										error_reporting(0);
										$json_array = file_get_contents("http://192.168.7.11:8048/api/Values/GetData?url=http://".$_POST['url']);

										$json_data=json_decode($json_array,true);
										?>
<!--
	  <header id="header">
		  <a class="logo" href="http://www.reputationupgrade.com">
			  <img alt="" src="http://www.reputationupgrade.com/wp-content/uploads/2015/06/OnlineReputation_Logo2.png">
		  </a>
		  
		  <nav id="navigation" role="navigation">
			  <ul data-breakpoint="800" id="menu-reputation-upgrade-menu" class="">
				  <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-255">
					  <a href="#home-section">Home</a>
				  </li>
				  <li id="menu-item-256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-256"><a href="#about-section">About Us</a></li>
				  <li id="menu-item-257" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-257"><a href="#team-section">Services</a></li>
				  <li id="menu-item-258" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-258"><a href="#testimonial-section">The Process</a></li>
				  <li id="menu-item-259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a href="#tables-section">Pricing</a></li>
				  <li id="menu-item-260" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-260"><a href="#contact-section">Contact</a></li>
			  </ul>
		  </nav>
		  <a href="javascript:void(0);" id="menu-link">
			  <span></span>
		  </a>
	  </header>
-->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reputation Upgrade</a>
        </div>
        <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="http://www.reputationupgrade.com/#about-section">About Us</a></li>
				<li><a href="http://www.reputationupgrade.com/#team-section">Services</a></li>
				<li><a href="http://www.reputationupgrade.com/#testimonial-section">The Process</a></li>
				<li><a href="http://www.reputationupgrade.com/#tables-section">Pricing</a></li>
				<li><a href="http://www.reputationupgrade.com/#contact">Contact</a></li>
				<li class="active"><a href="#results-container">Free SEO Tools</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-12 footer-column">
				<h1 class="text-center">Reputation Upgrade SEO Analyzer</h1>
				<form method="post">
					<input type="hidden" name="competitor-url" value="">
					<input type="hidden" name="analysis-type" value="footer">
					<select class="hidden" name="factor">
						<option value="result" selected="selected"></option>
					</select>
					
					<!-- start input -->
					<div class="col-md-9 no-left-padding">
						<div class="input-group">
							<label class="label-icon" for="select-url-footer"><span class="icon link2" aria-hidden="true"></span></label>
							<input name="url" type="text" class="form-control input-lg has-label-icon valid-url" id="select-url-footer" placeholder="Website URL">
						</div>
					</div>
					<!-- end input -->
					
					<!-- start cta -->
					<div class="col-md-3 no-left-padding">
						<!--<button type="button" class="btn cta btn-md submit-button" button-action="checkup">-->
                        <button type="submit" class="btn cta btn-md submit-button"  name="submit" value="checkup">
							Check
						</button>
					</div>
					<!-- end cta -->
				</form>
			</div>
		</div>
		
		<div id="results-container">
			<div class="category-container" data-section-name="Common SEO issues">
				<div class="row section-name first-child">
					<div class="col-md-12 column">
						<strong>Common SEO issues</strong>
					</div>
				</div>
				
				<div class="all_meta_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Title Tag</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="The <strong>title</strong> tag is required in all HTML documents and it defines the title of the document. This tag displays the page title in browsers toolbar and in the search-engine results (SERPs). 
 It also provides a title for the page when it is added to favorites. A descriptive <strong>title</strong> tag is important in helping search engines determine your web page&amp;#39;s relevancy for certain keywords.
"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								The meta title of your page has a length of <?
										print_r($json_data[TitleLength]);
										?> characters. Most search engines will truncate meta titles to 70 characters.
								<div class="tool-result-details">
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em><?
										print_r($json_data[Title]);
										?>
</em>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row results-line row-same-height subresult2">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult2-title">Meta Description</span>
							<span class="icon question4 subresult2-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="The meta description tag is meant to be a short and accurate summary of your page content. This description can affect your search engine rankings and can also show up directly in search engine results (and affect whether or not the user clicks through to your site)."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								The meta-description tag is missing from your page. You should include this tag in order to provide a brief description of your page which can be used by search engines or directories.
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>-->
								<!--<div class="fix-message hide" data-tool-title="Meta Description" data-fix-key="description_failed">
									In order to pass this test you must include a meta-description tag in your page header (<strong>&lt;head&gt;</strong> section):<br>
									<pre style="margin: 10px 0px;">
									&lt;head&gt;&lt;meta name="description" content="type_your_description_here"&gt;&lt;/head&gt;
									</pre>
									Note that in HTML the <strong>&lt;meta&gt;</strong> tag has no end tag but in XHTML this tag must be properly closed.<br>
									Meta description can have any length but a good practice is to keep this under 160 characters (search engines generally truncate snippets longer than this value).
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="google_preview">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Google Search Results Preview</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check how your page might look in the Google search results page (SERP&amp;#39;s). A Google search result uses your webpage title, URL, and meta-description in order to display relevant summarized information about your site. If these elements are too long, Google will truncate their content, so you are advised to set your webpage title under 70 characters and your webpage description under 160 characters in order to optimize readability.">
							</span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								<div class="google-preview">
									<div class="title">Aequor Technologies | We Listen. We Deliver.</div>
									<div class="final-url">http://aequor.com/</div>
									<div class="description"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--<div class="common_keyword">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Most Common Keywords Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check the most common keywords and their usage (number of times used) on your web page."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								There is likely no optimal keyword density (search engine algorithms have evolved beyond keyword density metrics as a significant ranking factor). It can be useful, however, to note which keywords appear most often on your page&nbsp;and if they reflect the intended topic of your page. More importantly, the keywords on your page should appear within natural sounding and grammatically correct copy.
								<div class="tool-result-details">
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>aequor - 27 times</em>
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>email - 20 times</em>
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>solutions - 15 times</em>
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>business - 13 times</em>
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>technologies - 12 times</em>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row results-line row-same-height subresult2">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult2-title">Keyword Usage</span>
							<span class="icon question4 subresult2-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This describes if your most common keywords are used in your page title and meta-description."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								Your most common keywords are not appearing in one or more of the meta-tags above. Your primary keywords should appear in your meta-tags to help identify the topic of your webpage to search engines.
								<div class="tool-result-details">
									<span class="icon checkmark3" aria-hidden="true"></span>
									<em>Keyword(s) included in Meta-Title Tag</em>
									<span class="icon cancel-circle2" aria-hidden="true"></span>
									<em>Keyword(s) not included in Meta-Description</em>
								</div>
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Keyword Usage" data-fix-key="usage_failed">First of all, you must make sure that your page is using the title and meta-description tags.
									<br>
									Second, you must adjust these tags content in order to include some of the primary keywords displayed above.
								</div>
							</div>
						</div>
					</div>
				</div>-->
				
				<!--
                <div class="keyword_cloud">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Keywords Cloud</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="The Keyword Cloud is a visual representation of keywords used on your website. This will show you which words are frequently used in the content of your webpage. Keywords having a higher density are presented in larger fonts and displayed in an alphabetic order."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								<span title="2" style="font-size: 16px;">acquires</span>
								<span title="27" style="font-size: 42px;">aequor</span>
								<span title="2" style="font-size: 16px;">angeles</span>
								<span title="2" style="font-size: 16px;">austin</span>
								<span title="2" style="font-size: 16px;">available</span>
								<span title="2" style="font-size: 16px;">awarded</span>
								<span title="4" style="font-size: 20px;">bangalore</span>
								<span title="2" style="font-size: 16px;">baseball</span>
								<span title="4" style="font-size: 20px;">basel</span>
								<span title="3" style="font-size: 18px;">best</span>
								<span title="5" style="font-size: 22px;">better</span>
								<span title="2" style="font-size: 16px;">brightest</span>
								<span title="13" style="font-size: 38px;">business</span>
								<span title="4" style="font-size: 20px;">career</span>
								<span title="2" style="font-size: 16px;">centre</span>
								<span title="2" style="font-size: 16px;">century</span>
								<span title="3" style="font-size: 18px;">certified</span>
								<span title="8" style="font-size: 28px;">city</span>
								<span title="4" style="font-size: 20px;">coast</span>
								<span title="2" style="font-size: 16px;">committed</span>
								<span title="7" style="font-size: 26px;">company</span>
								<span title="8" style="font-size: 28px;">consulting</span>
								<span title="2" style="font-size: 16px;">corporate</span>
								<span title="2" style="font-size: 16px;">cupertino</span>
								<span title="2" style="font-size: 16px;">east</span>
								<span title="2" style="font-size: 16px;">ehtp</span>
								<span title="20" style="font-size: 42px;">email</span>
								<span title="2" style="font-size: 16px;">europe</span>
								<span title="2" style="font-size: 16px;">exceptional</span>
								<span title="2" style="font-size: 16px;">experienced</span>
								<span title="2" style="font-size: 16px;">firm</span>
								<span title="9" style="font-size: 30px;">floor</span>
								<span title="4" style="font-size: 20px;">florida</span>
								<span title="4" style="font-size: 20px;">flushing</span>
								<span title="6" style="font-size: 24px;">york</span>
							</div>
						</div>
					</div>
				</div>
				-->
				<div class="h1_h2_heading_status">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">&lt;h1&gt; Headings Status</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This indicates if any H1 headings are used in your page. H1 headings are HTML tags than can help emphasize important topics and keywords within a page."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your page has <? 
								print_r($json_data[H1Count]); 
								?> H1 Tag
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								
								<div class="fix-message hide" data-tool-title="&amp;lt;h1&amp;gt; Headings Status" data-fix-key="h1_failed">
									In order to pass this test you must indentify the most important topics from your page and insert those topics between <code>&lt;h1&gt;...&lt;/h1&gt;</code> tags.<br>
<strong>Example:</strong><br>
									<pre style="margin: 10px 0px;">&lt;h1&gt;Important topic goes here&lt;/h1&gt;
									...
									&lt;h1&gt;Another topic&lt;/h1&gt;
									</pre>
								</div>-->
							</div>
						</div>
					</div>
					
					<div class="row results-line row-same-height subresult2">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult2-title">&lt;h2&gt; Headings Status</span>
							<span class="icon question4 subresult2-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This indicates if any H2 headings are used in your page. H2 headings can be helpful for describing the sub-topics of a page."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your page has <? print_r($json_data[H2Count]); ?> H2 Tag
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="&amp;lt;h2&amp;gt; Headings Status" data-fix-key="h2_failed">In order to pass this test you must indentify the most important sub-topics from your page and insert those sub-topics between <code>&lt;h2&gt;...&lt;/h2&gt;</code> tags.
									<br>
									<strong>Example:</strong><br>
									<pre style="margin: 10px 0px;">&lt;h2&gt;First sub-topic goes here&lt;/h2&gt;
									...
									&lt;h2&gt;Another sub-topic&lt;/h2&gt;
									</pre>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="robots">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Robots.txt Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your website is using a robots.txt file.&nbsp;Search engines send out tiny programs called spiders or robots to search your site and bring information back so that your pages can be indexed in the search results and found by web users. If there are files and directories you do not want indexed by search engines, you can use the &quot;robots.txt&quot; file to define where the robots should not go.<br />These files are very simple text files that are placed on the root folder of your website: www.yourwebsite.com/robots.txt.<br /> There are two important considerations when using &quot;robots.txt&quot;:<br /> - the &quot;robots.txt&quot; file is a publicly available file, so anyone can see what sections of your server you don&amp;#39;t want robots to use;<br /> - robots can ignore your &quot;robots.txt&quot;, especially malware robots that scan the web for security vulnerabilities;"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Your site uses <? print_r($json_data[RobotsTextFile]); ?> "robots.txt" file: 
								<a href="http://aequor.com/robots.txt" target="_blank">http://aequor.com/robots.txt</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sitemap">
					<div class="row results-line row-same-height subresult1" style="border-bottom:none;">
						<div class="col-md-2 column col-xs-height col-top">
							<span class="subresult1-title">Sitemap Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This test will check if your website is using a &quot;sitemap&quot; file: sitemap.<g class=&quot;gr_ gr_7 gr-alert gr_spell undefined ContextualSpelling ins-del multiReplace&quot; id=&quot;7&quot; data-gr-id=&quot;7&quot;>xml</g>, sitemap.xml.gz or <g class=&quot;gr_ gr_8 gr-alert gr_spell undefined ContextualSpelling ins-del multiReplace&quot; id=&quot;8&quot; data-gr-id=&quot;8&quot;>sitemapindex</g>.xml.<br />Sitemaps are an easy way for webmasters to inform search engines about pages on their sites that are available for crawling. In its simplest form, a sitemap is an XML file that lists URLs for a site along with additional metadata about each URL (when it was last updated, how often it usually changes, and how important it is, relative to other URLs <g class=&quot;gr_ gr_9 gr-alert gr_gramm undefined Grammar multiReplace&quot; id=&quot;9&quot; data-gr-id=&quot;9&quot;>in</g> the site) so that search engines can more intelligently crawl the site."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								We've found <? print_r($json_data[SiteMap]); ?> sitemap file for your website:
								<div class="tool-result-details">
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em><a href="<? print_r($json_data[SiteMapURL]); ?>" target="_blank"><? print_r($json_data[SiteMapURL]); ?></a></em>
								</div>
							</div>
						</div>
					</div>
					
					<!--<div class="row results-line row-same-height">
						<div class="col-md-2 column col-xs-height col-top"></div>
						<div class="col-md-10 column col-xs-height promo-module" style="padding: 10px 50px;font-size: 16px;color: #2b333f;line-height: 24px;background: none;">
							<h2 style="font-size: 16px;">Looking for a Sitemap Generator Tool?</h2>
							<p style="font-weight: 300">
								If you don't have a sitemap or the sitemap for your website is not up to date you can use our new 
								<a href="https://toolbox.seositecheckup.com/help-center/sitemap/sitemap-generator" target="_blank">Sitemap Generator</a> tool.
								Register for free, and start using today the 
								<a href="https://toolbox.seositecheckup.com/help-center/sitemap/sitemap-generator" target="_blank">Sitemap Generator</a> 
								from <a href="https://toolbox.seositecheckup.com" target="_blank">Seositecheckup Toolbox</a>.
								<br>
								<a href="#" class="btn inline-promo" data-toggle="modal" data-target="#toolbox-register-modal">
									Get it Now
								</a>
							</p>
						</div>
					</div>-->
				</div>
				
				<div class="broken_links">
					<div class="row results-line row-same-height subresult1" style="border-bottom:none;">
						<div class="col-md-2 column col-xs-height col-top">
							<span class="subresult1-title">Broken Links Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check your website for broken or dead links. This tool scans your website to locate internal and external broken links that are not only frustrating to your visitors, but damaging to your websites overall ranking with the major search engines. </span>"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								From <? print_r($json_data[BrokenLinksCount]); ?> distinct anchor links analyzed, none of them appear to be broken.
							</div>
						</div>
					</div>
					
					<!--<div class="row results-line row-same-height">
						<div class="col-md-2 column col-xs-height col-top"></div>
						<div class="col-md-10 column col-xs-height promo-module" style="padding: 10px 50px;font-size: 16px;color: #2b333f;line-height: 24px;background: none;">
							<h2 style="font-size: 16px;">Full website broken links checker</h2>
							<p style="font-weight: 300">
								Start using today the <a href="https://toolbox.seositecheckup.com/help-center/broken-links/broken-links" target="_blank">Full Website Broken Links Checker</a>.<br>
								Register for free and identify your broken links from your entire website.
								<br>
								<a href="#" class="btn inline-promo" data-toggle="modal" data-target="#toolbox-register-modal">
									Get it Now
								</a>
							</p>
						</div>
					</div>-->
				</div>
				
				<div class="underscores_in_links">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Underscores in Links Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check your URL&nbsp;internal links&nbsp;for underscore characters.&nbsp;<a href=&quot;https://support.google.com/webmasters/answer/76329&quot;>Google&amp;#39;s&nbsp;suggestions for&nbsp;URL structure</a>&nbsp;specify&nbsp;using hyphens or dashes (-) rather than underscores (_). Unlike underscores, Google treats hyphens as separators between words in a URL."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								We have found underscores in 17 links!
								<!--<a href="#" class="see-full-list" data-toggle="modal" data-target="#underscoresInLinksFullList1">See results list</a>-->
								<!--<div class="modal fade" id="underscoresInLinksFullList1" tabindex="-1" role="dialog" aria-labelledby="underscoresInLinksFullListLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="underscoresInLinksFullListLabel">
													Listing the first 5 of 17 URLs with underscores
												</h4>
											</div>
											<div class="modal-body">
												<a href="http://aequor.com/wp-content/uploads/2015/02/banking_slide213.jpg" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/uploads/2015/02/banking_slide213.jpg
												</a>
												
												<a href="http://aequor.com/wp-content/uploads/2015/02/energy_and_utilities_slide213.jpg" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/uploads/2015/02/energy_and_utilities_slide213.jpg
												</a>
												
												<a href="http://aequor.com/wp-content/uploads/2015/02/government_slide213.jpg" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/uploads/2015/02/government_slide213.jpg
												</a>
												
												<a href="http://aequor.com/wp-content/uploads/2015/02/healthcare_it_slide213.jpg" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/uploads/2015/02/healthcare_it_slide213.jpg
												</a>
												
												<a href="http://aequor.com/wp-content/uploads/2015/02/life_sciences_slide213.jpg" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/uploads/2015/02/life_sciences_slide213.jpg
												</a>
												
												<div class="clearfix"></div>
												
												<div class="promo-module">
													<h2>See the complete list</h2>
													<p>
														You need to have an active Toolbox account in order to see the complete results list and much more.
														<br>
														<a href="https://toolbox.seositecheckup.com/user/register" target="_blank" class="btn inline-promo">Register for FREE</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>-->
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Underscores in Links Test" data-fix-key="failed">
									If your website is new and is not indexed by search engines you can replace underscores with hyphens or redirect those links to URLs that use hyphens. BUT, if your website is ranked well by search engines you do not need to do this (probably you have other ranking factors working very well).<br>The general advice remains: build links that contain hyphens rather than underscores.
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="img_alt">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Image Alt Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check images on your webpage for required alt attributes. If an image cannot be displayed (wrong source, slow connection, etc), the alt attribute provides alternative information. Using keywords and human-readable captions in the alt attributes is a good SEO practice because search engines cannot really see the images. For images with a decorative role (bullets, round corners, etc) you are advised to use an empty alt or a CSS background image.</span>"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon notification2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="There are room for improvements"></span>
							<div class="tool-result-summary">
								Your webpage has <strong><?	print_r($json_data[ImageCount]); ?></strong> 'img' tags and <strong><? print_r($json_data[ImageCountWithoutAlt]); ?></strong> of them are missing&nbsp;the required 'alt' attribute.
								<!--<a href="#" class="see-full-list" data-toggle="modal" data-target="#imgAltFullList1">See results list</a>-->
								<!--<div class="modal fade" id="imgAltFullList1" tabindex="-1" role="dialog" aria-labelledby="imgAltFullListLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="imgAltFullListLabel">
													Listing the first 5 of 6 "img" tags without "alt" attribute
												</h4>
											</div>
											<div class="modal-body">
												<div class="result-modal-link">&lt;img src="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" alt="" data-lazyload="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_rev_300px.png"&gt;</div>
												<div class="result-modal-link">&lt;img src="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" alt="" data-lazyload="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_300px_Black1.png"&gt;</div>
												<div class="result-modal-link">&lt;img src="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" alt="" data-lazyload="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_300px_Black1.png"&gt;</div>
												<div class="result-modal-link">&lt;img src="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" alt="" data-lazyload="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_rev_300px.png"&gt;</div>
												<div class="result-modal-link">&lt;img src="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" alt="" data-lazyload="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_300px_Black1.png"&gt;</div>
												<div class="clearfix"></div>
												<div class="promo-module">
													<h2>See the complete list</h2>
													<p>
														You need to have an active Toolbox account in order to see the complete results list and much more.
														<br>
														<a href="https://toolbox.seositecheckup.com/user/register" target="_blank" class="btn inline-promo">Register for FREE</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>-->
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Image Alt Test" data-fix-key="warning">In order to pass this test you must add an <strong>alt</strong> attribute to every <strong>&lt;img&gt;</strong> tag used into your webpage.<br>
									An image with an alternate text specified is inserted using the following HTML line:
									<pre style="margin: 10px 0px;">&lt;img src="image.png" alt="text_to_describe_your_image"&gt;</pre>
									Remember that the point of alt text is to provide the same functional information that a visual user would see. Search engines, users who disabled images in their browsers and other agents who are unable to see the images on your webpage can read the alt attributes assigned to the image since they cannot view it.<br>
									Learn more about <a href="http://www.seositecheckup.com/articles/84" target="_blank">optimizing images for SEO</a>.
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="inline_css">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Inline CSS Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check your webpage HTML tags for inline CSS properties.&nbsp;An inline CSS property is added by using the style attribute for a specific tag. By mixing content with presentation you might lose some advantages of the style sheets. Is a good practice to move all the inlines CSS rules into an external file in order to make your page &quot;lighter&quot; in weight and decreasing the code to text ratio."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your webpage is using <strong>31</strong> inline CSS styles!
								<!--<a href="#" class="see-full-list" data-toggle="modal" data-target="#inlineCssFullList1">See results list</a>-->
								<!--<div class="modal fade" id="inlineCssFullList1" tabindex="-1" role="dialog" aria-labelledby="inlineCssFullListLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="inlineCssFullListLabel">
													Listing the first 5 of 31 elements with inline css style
												</h4>
											</div>
											<div class="modal-body">
												<div class="result-modal-link">
													&lt;div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#eee;padding:0px;"&gt;&lt;/div&gt;
												</div>
												<div class="result-modal-link">&lt;div id="rev_slider_11_1" class="rev_slider fullscreenbanner" style="display:none;"&gt;&lt;/div&gt;</div>
												<div class="result-modal-link">&lt;div class="tp-caption header_black lfb customout tp-resizeme rs-parallaxlevel-0" 			 data-x="210" 			 data-y="-5"  			 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 			data-speed="2000" 			data-start="0" 			data-easing="Power0.easeIn" 			data-splitin="none" 			data-splitout="none" 			data-elementdelay="0.1" 			data-endelementdelay="0.1" 			 data-endspeed="4000"  			style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"&gt;&lt;/div&gt;</div>
												<div class="result-modal-link">&lt;div class="tp-caption sub-header_white sfb customout tp-resizeme rs-parallaxlevel-0" 			 data-x="354" 			 data-y="421"  			 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 			data-speed="300" 			data-start="500" 			data-easing="Back.easeOut" 			data-splitin="none" 			data-splitout="none" 			data-elementdelay="0.1" 			data-endelementdelay="0.1" 			 data-end="-2000"  data-endspeed="6000"  			style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"&gt;&lt;/div&gt;</div>
												<div class="result-modal-link">&lt;div class="tp-caption customin customout rs-parallaxlevel-0" 			 data-x="413" 			 data-y="265"  			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 			 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 			data-speed="2000" 			data-start="500" 			data-easing="Power3.easeInOut" 			data-elementdelay="0.1" 			data-endelementdelay="0.1" 			 data-endspeed="4000"  			style="z-index: 4;"&gt;&lt;/div&gt;</div>
												
												<div class="clearfix"></div>
												<div class="promo-module">
													<h2>See the complete list</h2>
													<p>
														You need to have an active Toolbox account in order to see the complete results list and much more.
														<br>
														<a href="https://toolbox.seositecheckup.com/user/register" target="_blank" class="btn inline-promo">Register for FREE</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>-->
								<br>
								<!--<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Inline CSS Test" data-fix-key="failed">
									It is a good practice to move all the inline CSS rules into an external file in order to make your page "lighter" in weight and decrease the code to text ratio.<br>
									<ul>
										<li>check the HTML code of your page and identify all style attributes</li>
										<li>for each style attribute found you must properly move all declarations in the external CSS file and remove the style attribute</li>
									</ul>For example:<br>
									<pre style="margin: 10px 0px;">&lt;!--this HTML code with inline CSS rule:--&gt;
									&lt;p style="color:red; font-size: 12px"&gt;some text here&lt;/p&gt;
									&lt;!--would became:--&gt;
									&lt;p&gt;some text here&lt;/p&gt;
									&lt;!--and the rule added into your CSS file:--&gt;p{color:red; font-size: 12px}
									</pre>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="deprecated_html_tags">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Deprecated HTML Tags</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your webpage is using old, deprecated HTML tags. These tags will eventually lose browser support and your web pages will render differently. Check this <a href=&quot;http://www.w3schools.com/tags/default.asp&quot; target=&quot;_blank&quot;>list</a> with all HTML tags."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your page does not use HTML deprecated tags.
							</div>
						</div>
					</div>
				</div>
				<div class="analytics">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Google Analytics Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your page is connected with Google Analytics. Google Analytics is the most popular analytics package for websites, this tool provides you with great insights about your site visitors, demographics and very comprehensive metrics that help you analyze every aspect of your site. It is a good practice to use analytics in order to learn how your visitors behave and gain tips on how to continuously improve your website.">
							</span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
                            
                       
							<div class="tool-result-summary">
								<?
								if ($json_data[GoogleAnalyticsTest]==1)
								{
								echo "Website contains Google Analytics Code";
								 }
								else
 								{
 								echo "Website does not contains Google Analytics Code";
								 }
								?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="favicon">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Favicon Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your site is using and correctly implementing a favicon.&nbsp;Favicons are small icons that appear in your browser&amp;#39;s URL navigation bar. They are also saved next to your URL&amp;#39;s title when bookmarking that page and they can help <a href=&quot;http://www.seositecheckup.com/articles/86&quot; target=&quot;_blank&quot;>brand your site</a>, making it easy for users to navigate to your site among a list of bookmarks."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								<img src="https://d1r7943vfkqpts.cloudfront.net/4f40936023c15e21aeffbba61fa07311.png" alt="Favicon" style="max-width: 32px; max-height: 32px; width: 32px; height: 32px;">
								Congratulations! Your website appears to have a favicon.
							</div>
						</div>
					</div>
				</div>
				
				<div class="url_seo_friendly">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">SEO Friendly URL Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check if your website URL and&nbsp;internal URLs&nbsp;are SEO friendly. In order for links to be SEO friendly, they should be clearly named for what they are and contain no spaces, underscores or other characters.&nbsp;&nbsp;You should avoid the use of parameters when possible, as they are make URLs less&nbsp;inviting for&nbsp;users to click or share.&nbsp;</span>"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! This&nbsp;URL and all internal links on&nbsp;this page are SEO friendly.
							</div>
						</div>
					</div>
				</div>
				
				<div class="backlinks">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Backlinks Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check to see if your website has any backlinks. Backlinks are any links to your website, webpages or posts from an outside source. It is important to check backlink quality to avoid penalties from the search engines.</span>"></span>
						</div>
						<div class="col-md-10 promo-module pull-right col-xs-height" style="border-top: none;padding: 10px 50px;font-size: 16px;color: #2b333f;line-height: 24px;background: none;">
							<p style="font-weight: 300">
								Register for free on <a href="https://toolbox.seositecheckup.com" target="_blank">Seositecheckup Toolbox</a> in order to get access to our <a href="https://toolbox.seositecheckup.com/help-center/backlinks-checker/backlinks-checker" target="_blank">Backlinks Checker</a>.
							</p>
							<p style="font-weight: 300">
								Get all the links that are pointing to your website, see useful metrics and download the backlinks lists in useful formats: JSON, HTML &amp; PDF.
								<br>
								<a href="#" class="btn inline-promo" data-toggle="modal" data-target="#toolbox-register-modal">
									Get it Now
								</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="js_error_checker">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">JS Error Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check your source code for JavaScript errors. These errors&nbsp;may&nbsp;prevent users&nbsp;from&nbsp;properly viewing your&nbsp;pages and impact their user experience. Sites with poor user experience tend to rank poorly in search engines."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! There are no severe JavaScript errors on your web page.
							</div>
						</div>
					</div>
				</div>
				
				<div class="social_media">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Social Media Check</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your page is connected to at least one of the most important social networks.&nbsp;Social signals are getting increasing importance as ranking factors for search engines because it leverages the social intelligence (via our interactions) to determine more accurate relevancy for searches. That&amp;#39;s why connecting your website to a social network is a must nowadays to make sure your site is social enabled."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your website is connected successfully with social media using: <a href="https://facebook.com" target="_blank"> Facebook;</a> <a href="https://twitter.com" target="_blank"> Twitter;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="width: 728px;margin-left:auto;margin-right:auto;margin-top:30px; float: none; display: block; text-align:center;">
				<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8051682001896609" data-ad-slot="5358768633"></ins>
			</div>
			<!--<div class="category-container" data-section-name="Speed optimizations"><div class="row section-name first-child" style="margin-top: 30px;"><div class="col-md-12 column">
				<strong>Speed optimizations</strong>
				</div>
				</div>
				
				<div class="check_html_size">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">HTML Page Size Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check your page&amp;#39;s HTML size. HTML size is the size of all the HTML code on your web page - this size does not include images, external javascripts or external CSS files."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your HTML size is <strong>15.48 Kb</strong> and this is under the average web page size of <strong>33 Kb</strong>.<br>
								This leads to a faster page loading time than average.
							</div>
						</div>
					</div>
				</div>
				
				<div class="html_compression_status">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">HTML Compression/GZIP Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your page is correctly using HTML compression.&nbsp;Compression works by finding similar strings within a text file, and replacing those strings temporarily to make the overall file size smaller.&nbsp;This form of compression is particularly well-suited for the web because HTML and CSS files usually contain plenty of repeated strings, such as white spaces, tags, and style definitions."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your page is successfully compressed using <strong>gzip compression</strong> on your code.<br>
Your HTML is compressed from <strong>83.53 Kb</strong> to <strong>15.48 Kb</strong> (<strong>81 % size savings</strong>). This helps ensure a faster loading web page and improved user experience.
							</div>
						</div>
					</div>
				</div>
				
				<div class="loading_speed">
					<div class="row results-line row-same-height subresult1" style="border-bottom:none;">
						<div class="col-md-2 column col-xs-height col-top">
							<span class="subresult1-title">Site Loading Speed Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Test your website using real browsers to determine the loadtime speed. How fast your page loads is one of the most important factors in search engine rankings. Pages that take longer than 5 seconds to load can lose up to 50% users. Faster loading webpages offer higher traffic, better conversions and increased sales over slower loading pages. </span>"></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Your site loading time is around <strong>3.963 seconds</strong> and this is under the average loading speed which is <strong>5 seconds</strong>.
							</div>
						</div>
					</div>
					<div class="row results-line row-same-height">
						<div class="col-md-2 column col-xs-height col-top"></div>
						<div class="col-md-10 column col-xs-height promo-module" style="padding: 10px 50px;font-size: 16px;color: #2b333f;line-height: 24px;background: none;">
							<h2 style="font-size: 16px;">Accurate loading speed and website loading speed monitor</h2>
							<p style="font-weight: 300">
								Get detailed and accurate loading speed reports for your websites and see how your pages are being loaded over time.
								Register for free and use the <a href="https://toolbox.seositecheckup.com/help-center/loading_speed/loading-speed" target="_blank">Loading Speed Monitor</a> from 
								<a href="https://toolbox.seositecheckup.com" target="_blank">Seositecheckup Toolbox</a> 
								today and get valuable insights on how much time your customers need to wait until they see your page.
								<br>
								<a href="#" class="btn inline-promo" data-toggle="modal" data-target="#toolbox-register-modal">
									Get it Now
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="page_objects">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Page Objects</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if the full list of objects requested by your page can be retrieved. If your page contains objects that cannot be retrieved your page won&amp;#39;t be displayed correctly, this impacts the user experience and search engines will penalize you accordingly."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your page has more than 20 http requests, which can slow down page loading. You can try <a target="_blank" href="http://developer.yahoo.com/performance/rules.html">reducing http requests through various methods</a> such as using text instead of images, using css sprites, <a href="http://css-tricks.com/5970-data-uris/">using data URIs instead of images</a>, or combining several external files together into one.
							</div>
							<div class="tool-result-details">
								<div class="col-md-2">
									<div class="result-grid-column">
										<span class="icon grid3" aria-hidden="true"></span>
										<strong>131</strong>
										<em>Total Objects</em>
									</div>
								</div>
								
								<div class="col-md-2">
									<a href="#" class="result-grid-column" data-toggle="modal" data-target="#pageObjectsModal">
										<span class="icon embed2" aria-hidden="true"></span>
										<strong>2</strong>
										<em>HTML Pages</em>
									</a>
									
									<div class="hide page-objects-type-data" data-type="HTML Pages">
										<div class="page-object-type-title">HTML Pages (2)</div>
										<div class="page-object-type-files">
											<a href="http://aequor.com/" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/</a>
											<a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!5e0!3m2!1sen!2sin!4v1418710042134" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!5e0!3m2!1sen!2sin!4v1418710042134</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-2">
									<a href="#" class="result-grid-column" data-toggle="modal" data-target="#pageObjectsModal">
										<span class="icon file-css2" aria-hidden="true"></span>
										<strong>17</strong>
										<em>CSS Files</em>
									</a>
									<div class="hide page-objects-type-data" data-type="CSS Files">
										
										<div class="page-object-type-title">CSS Files (17)</div>
										
										<div class="page-object-type-files">
											
											<a href="http://aequor.com/wp-includes/css/dashicons.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/css/dashicons.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-includes/js/thickbox/thickbox.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/thickbox/thickbox.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/plugins/wp-comment-validation/css/jquery.validate.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/wp-comment-validation/css/jquery.validate.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/libs/bootstrap/css/bootstrap.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/libs/bootstrap/css/bootstrap.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/style.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/style.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/fonts/icomoon/iconmoon.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/fonts/icomoon/iconmoon.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/fonts/font-awesome/css/font-awesome.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/fonts/font-awesome/css/font-awesome.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/css/small.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/css/small.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/css/less.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/css/less.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://aequor.com/wp-content/uploads/js_composer/custom.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/js_composer/custom.css?ver=b5839a522002c29a0d39a00bb20edf6c</a>
											
											<a href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900</a>
											
											<a href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://fonts.googleapis.com/css?family=Roboto:300,400,500,700</a>
										
										</div>
									</div>
								</div>
								
								<div class="col-md-2">
									<a href="#" class="result-grid-column" data-toggle="modal" data-target="#pageObjectsModal">
										<span class="icon script" aria-hidden="true"></span>
										<strong>41</strong>
										<em>Scripts</em>
									</a>
									
									<div class="hide page-objects-type-data" data-type="Scripts">
										<div class="page-object-type-title">Scripts (41)</div>
										<div class="page-object-type-files">
											<a href="http://aequor.com/wp-includes/js/wp-emoji-release.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/wp-emoji-release.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-includes/js/jquery/jquery.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/jquery/jquery.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/plugins/wp-comment-validation/js/jquery.validate.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/wp-comment-validation/js/jquery.validate.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-includes/js/thickbox/thickbox.js?ver=b5839a522002c29a0d39a00bb20edf6c-20121105" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/thickbox/thickbox.js?ver=b5839a522002c29a0d39a00bb20edf6c-20121105</a>
                        
                            <a href="http://aequor.com/wp-includes/js/underscore.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/underscore.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-includes/js/shortcode.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/shortcode.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-admin/js/media-upload.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-admin/js/media-upload.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=b5839a522002c29a0d39a00bb20edf6c-2014.06.20" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=b5839a522002c29a0d39a00bb20edf6c-2014.06.20</a>
                        
                            <a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/libs/bootstrap/js/bootstrap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/libs/bootstrap/js/bootstrap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/plugins.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/plugins.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/jquery.cookie.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/jquery.cookie.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/backstretch.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/backstretch.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/parallax.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/parallax.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/custom.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/custom.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/jquery.gmap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/jquery.gmap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-content/themes/olida/js/modernizr.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/js/modernizr.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="http://aequor.com/wp-includes/js/comment-reply.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/comment-reply.min.js?ver=b5839a522002c29a0d39a00bb20edf6c</a>
                        
                            <a href="https://www.google-analytics.com/analytics.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google-analytics.com/analytics.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/geocoder.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/geocoder.js</a>
                        
                            <a href="https://maps.googleapis.com/maps/api/js?client=google-maps-embed&amp;paint_origin=&amp;libraries=geometry,search&amp;v=3.exp&amp;language=en_US&amp;region=in" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps/api/js?client=google-maps-embed&amp;paint_origin=&amp;libraries=geometry,search&amp;v=3.exp&amp;language=en_US&amp;region=in</a>
                        
                            <a href="https://maps.gstatic.com/maps-api-v3/embed/js/24/4/init_embed.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/maps-api-v3/embed/js/24/4/init_embed.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/map.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/map.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/overlay.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/overlay.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/onion.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/onion.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/search_impl.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/search_impl.js</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/stats.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/stats.js</a>
                        
                            <a href="https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.53325941899613&amp;2d-74.5052979020088&amp;2m2&amp;1d40.5560057675776&amp;2d-74.44146137534466&amp;2u16&amp;4sen-US&amp;5e0&amp;6sm%40342000000&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._scefbz&amp;token=72332" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.53325941899613&amp;2d-74.5052979020088&amp;2m2&amp;1d40.5560057675776&amp;2d-74.44146137534466&amp;2u16&amp;4sen-US&amp;5e0&amp;6sm%40342000000&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._scefbz&amp;token=72332</a>
                        
                            <a href="https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.52968195854725&amp;2d-74.49344043948923&amp;2m2&amp;1d40.560414802848285&amp;2d-74.45279377444592&amp;2u12&amp;4sen-US&amp;5e2&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._y284vf&amp;token=93878" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.52968195854725&amp;2d-74.49344043948923&amp;2m2&amp;1d40.560414802848285&amp;2d-74.45279377444592&amp;2u12&amp;4sen-US&amp;5e2&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._y284vf&amp;token=93878</a>
                        
                            <a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/controls.js" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps-api-v3/api/js/24/4/controls.js</a>
                        
                            <a href="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%3Fpb%3D!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%253A0x1cfee50c65b149d5!2sAequor%2BTechnologies%2BDevelopment%2BCenter!5e0!3m2!1sen!2sin!4v1418710042134&amp;2sgoogle-maps-embed&amp;callback=_xdc_._koqkbo&amp;token=80094" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%3Fpb%3D!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%253A0x1cfee50c65b149d5!2sAequor%2BTechnologies%2BDevelopment%2BCenter!5e0!3m2!1sen!2sin!4v1418710042134&amp;2sgoogle-maps-embed&amp;callback=_xdc_._koqkbo&amp;token=80094</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-2">
									<a href="#" class="result-grid-column" data-toggle="modal" data-target="#pageObjectsModal">
										<span class="icon images" aria-hidden="true"></span>
										<strong>71</strong>
										<em>Images</em>
									</a>
									
									<div class="hide page-objects-type-data" data-type="Images">
										<div class="page-object-type-title">Images (71)</div>
										<div class="page-object-type-files">
											
											<a href="http://aequor.com/wp-content/plugins/revslider/images/dummy.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/revslider/images/dummy.png</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/logo.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/logo.png</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/banking_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/banking_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/energy_and_utilities_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/energy_and_utilities_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/government_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/government_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/healthcare_it_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/healthcare_it_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/life_sciences_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/life_sciences_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/manufacturing_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/manufacturing_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/media-1_opt213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/media-1_opt213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/retail_industry_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/retail_industry_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/telecommunications_slide213.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/telecommunications_slide213.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/Managed-Infrastructure-asm_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/Managed-Infrastructure-asm_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/Business-Intelligence_warehousing_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/Business-Intelligence_warehousing_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/Application-support-asm_slide1.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/Application-support-asm_slide1.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/mobile_apps_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/mobile_apps_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/enterprise_resource_planning_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/enterprise_resource_planning_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/e_m_commerce_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/e_m_commerce_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/sales-force-aequor-partner.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/sales-force-aequor-partner.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/business_consulting_slide.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/business_consulting_slide.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/bpo_Business-Processing-.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/bpo_Business-Processing-.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/MyAequor-img.gif" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/MyAequor-img.gif</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/MyAequorOpen-img.gif" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/MyAequorOpen-img.gif</a>
											
											<a href="https://csi.gstatic.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;e=10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=main.22" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://csi.gstatic.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;e=10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=main.22</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/about-us_bg-new.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/about-us_bg-new.jpg</a>
											
											<a href="http://aequor.com.tw/wp-content/themes/liwo-child/i/b/prev_btn.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com.tw/wp-content/themes/liwo-child/i/b/prev_btn.png</a>
											
											<a href="http://aequor.com.tw/wp-content/themes/liwo-child/i/b/next_btn.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com.tw/wp-content/themes/liwo-child/i/b/next_btn.png</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/STAFFING-SOLUTIONS.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/STAFFING-SOLUTIONS.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/news-56568884.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/news-56568884.jpg</a>
											
											<a href="http://aequor.com/wp-content/themes/olida/img/preloaders/preloader_1.gif" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/themes/olida/img/preloaders/preloader_1.gif</a>
											
											<a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/assets/coloredbg.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/plugins/revslider/rs-plugin/assets/coloredbg.png</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/1-World-Class-IT-Solutions.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/1-World-Class-IT-Solutions.jpg</a>
											
											<a href="http://aequor.com/wp-includes/js/thickbox/loadingAnimation.gif" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-includes/js/thickbox/loadingAnimation.gif</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_rev_300px.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/Aequor_logo_rev_300px.png</a>
											
											<a href="https://www.google-analytics.com/r/collect?v=1&amp;_v=j41&amp;a=1929556387&amp;t=pageview&amp;_s=1&amp;dl=http%3A%2F%2Faequor.com%2F&amp;ul=en-us&amp;de=UTF-8&amp;dt=Aequor%20Technologies%20%7C%20We%20Listen.%20We%20Deliver.&amp;sd=24-bit&amp;sr=1024x768&amp;vp=989x687&amp;je=1&amp;fl=18.0%20r0&amp;_u=AEAAAEABI~&amp;jid=627646586&amp;cid=770399708.1459149408&amp;tid=UA-72858412-1&amp;_r=1&amp;z=1152532406" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google-analytics.com/r/collect?v=1&amp;_v=j41&amp;a=1929556387&amp;t=pageview&amp;_s=1&amp;dl=http%3A%2F%2Faequor.com%2F&amp;ul=en-us&amp;de=UTF-8&amp;dt=Aequor%20Technologies%20%7C%20We%20Listen.%20We%20Deliver.&amp;sd=24-bit&amp;sr=1024x768&amp;vp=989x687&amp;je=1&amp;fl=18.0%20r0&amp;_u=AEAAAEABI~&amp;jid=627646586&amp;cid=770399708.1459149408&amp;tid=UA-72858412-1&amp;_r=1&amp;z=1152532406</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=main.24" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=main.24</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/2-Global-Presence-thumbnail.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/2-Global-Presence-thumbnail.jpg</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/6-Managed-IT-thumbnail.jpg" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/6-Managed-IT-thumbnail.jpg</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firstmap.94" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=apiboot2&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firstmap.94</a>
											
											<a href="https://maps.gstatic.com/mapfiles/embed/images/google4.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/embed/images/google4.png</a>
											
											<a href="http://aequor.com/wp-content/uploads/2015/02/aequor_favicon1.ico" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>http://aequor.com/wp-content/uploads/2015/02/aequor_favicon1.ico</a>
											
											<a href="https://maps.gstatic.com/mapfiles/openhand_8_8.cur" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/openhand_8_8.cur</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visreq.370" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visreq.370</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visreq.289" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visreq.289</a>
											
											<a href="https://khms0.googleapis.com/kh?v=198&amp;hl=en-US&amp;gl=IN&amp;&amp;x=1200&amp;y=1542&amp;z=12" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://khms0.googleapis.com/kh?v=198&amp;hl=en-US&amp;gl=IN&amp;&amp;x=1200&amp;y=1542&amp;z=12</a>
											
											<a href="https://maps.google.com/maps/gen_204?target=api&amp;ev=api_viewport&amp;cad=host:www.google.com,v:24,r:1,mt:m,c:40.544859%2C-74.47332,sp:0.00734x0.02122,size:989x450,relsize:iframe,token:1jkk1vmp6w,client:google-maps-embed,src:apiv3,ts:bnvtyl" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.google.com/maps/gen_204?target=api&amp;ev=api_viewport&amp;cad=host:www.google.com,v:24,r:1,mt:m,c:40.544859%2C-74.47332,sp:0.00734x0.02122,size:989x450,relsize:iframe,token:1jkk1vmp6w,client:google-maps-embed,src:apiv3,ts:bnvtyl</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visres.461" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visres.461</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firsttile.476,firstpixel.476" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firsttile.476,firstpixel.476</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=tilesloaded.477,allpixels.477" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=false&amp;hdpi=false&amp;mob=false&amp;staticmap=true&amp;size=38x38&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=tilesloaded.477,allpixels.477</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visres.579" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=visres.579</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24680!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=106671" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24680!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=106671</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24680!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=80017" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24680!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=80017</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24679!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=56422" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24679!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=56422</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=42765" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19210!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=42765</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24680!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=18816" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24680!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=18816</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=16111" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=16111</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24679!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=29768" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19209!3i24679!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=29768</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24679!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=99638" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24679!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=99638</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=85912" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19211!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=85912</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24680!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=61963" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24680!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=61963</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24680!4i256!2m3!1e0!2sm!3i342009793!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=6313" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24680!4i256!2m3!1e0!2sm!3i342009793!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=6313</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24679!4i256!2m3!1e0!2sm!3i342009793!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=87135" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24679!4i256!2m3!1e0!2sm!3i342009793!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=87135</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24679!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=11714" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24679!4i256!2m3!1e0!2sm!3i342010094!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=11714</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=104035" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19208!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=104035</a>
											
											<a href="https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=129059" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://www.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19212!3i24681!4i256!2m3!1e0!2sm!3i342009685!2m18!1e2!2sspotlight!5i1!8m14!1m2!12m1!20e1!2m7!1s0x89c3c7604bfd537d%3A0x1cfee50c65b149d5!2sAequor+Technologies+Development+Center!4m2!3d40.5448587!4d-74.4733203!5e0!6b1!11e11!13m1!14b1!3m14!2sen-US!3sIN!5e289!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e52!2m2!1sentity_class!2s0!4e0&amp;token=129059</a>
											
											<a href="https://maps.gstatic.com/mapfiles/embed/images/entity11.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/embed/images/entity11.png</a>
											
											<a href="https://maps.gstatic.com/mapfiles/transparent.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/transparent.png</a>
											
											<a href="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png</a>
											
											<a href="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firsttile.886,firstpixel.886" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=firsttile.886,firstpixel.886</a>
											
											<a href="https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=tilesloaded.890,allpixels.890" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://gg.google.com/csi?v=2&amp;s=mapsapi3&amp;v3v=24.4&amp;action=map2&amp;firstmap=true&amp;hdpi=false&amp;mob=false&amp;staticmap=false&amp;size=989x450&amp;hadviewport=true&amp;libraries=geometry%2Csearch&amp;e=google-maps-embed,10_1_0,10_2_0,11_9_0,11_10_0,11_14_U&amp;rt=tilesloaded.890,allpixels.890</a>
											
											<a href="https://maps.google.com/maps/gen_204?target=api&amp;ev=api_maprft&amp;cad=host:www.google.com,v:24,r:1,client:google-maps-embed,t:503,Ee:1,src:apiv3,token:1jkk1vmp6w,ts:bnvucj" target="_blank" class="result-modal-link"><span class="icon arrow-right32" aria-hidden="true"></span>https://maps.google.com/maps/gen_204?target=api&amp;ev=api_maprft&amp;cad=host:www.google.com,v:24,r:1,client:google-maps-embed,t:503,Ee:1,src:apiv3,token:1jkk1vmp6w,ts:bnvucj</a>
										
										</div>
									</div>
								</div>
								
								<div class="col-md-2">
									<a href="#" class="result-grid-column" data-toggle="modal" data-target="#pageObjectsModal">
										<span class="icon file-video2" aria-hidden="true"></span>
										<strong>0</strong>
										<em>Flash Files</em>
									</a>
									
									<div class="hide page-objects-type-data" data-type="Flash Files">
										<div class="page-object-type-title">Flash Files (0)</div>
										<div class="page-object-type-files">
										</div>
									</div>
								</div>
								<div class="modal fade" id="pageObjectsModal" tabindex="-1" role="dialog" aria-labelledby="pageObjectsModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="pageObjectsModalLabel"></h4>
											</div>
											<div class="modal-body"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="x_cache_header">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Page Cache Test (Server Side Caching)</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your page is serving cached pages. A page cache is a mechanism for the temporary storage (caching) of web documents, such as HTML pages and images to reduce bandwidth usage, server load, and perceived lag. A web cache stores copies of documents passing through it; subsequent requests may be satisfied from the cache if certain conditions are met. Common caching methods are Quickcache and jpcache"></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								It does not appear that you are <a href="http://www.seositecheckup.com/articles/109" target="_blank">caching your pages</a>. Cached pages serve up static html and avoid potentially time consuming queries to your database. It also helps lower server load by up to 80%. Caching most visibly benefits high traffic pages that access a database, but whose content does not change on every page view. Common caching methods include <a target="_blank" href="http://us.php.net/apc">Alternative PHP Cache</a>, <a target="_blank" href="http://sourceforge.net/projects/quickcache">Quickcache</a>, and <a target="_blank" href="http://www.polarlava.com/projects/jpcache/">jpcache</a>. Caching mechanisms also typically compress HTML, further reducing page size and load time.
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Page Cache Test (Server Side Caching)" data-fix-key="failed">In order to pass this test you are advised to use a caching mechanism for your pages. There are three methods which can be used to caching your web pages:
									<ol style="margin-top: 10px;"> 
										<li><strong>Alternative PHP caching</strong><br>
- <a href="http://us.php.net/apc" target="_blank">Alternative PHP Cache</a> (APC) is an open source framework which caches data using intermediate PHP code. Most web programmers who are familiar with the PHP programming language can easily set up Alternative PHP Cache for your site.</li>
										<li><strong>Quickcache</strong><br>- 
											<a href="http://sourceforge.net/projects/quickcache/" target="_blank">Quickcache</a> is a lightweight page caching solution which was formerly known as 
											<a href="http://www.polarlava.com/projects/jpcache/" target="_blank">jpcache</a>.
											Quickcache caches the page output rather than compiling the PHP page, making it a superior version of page caching to the Alternative PHP caching. Quickcache can be quickly downloaded from their website and can reduce your page load time up to 80%.</li>
										<li><strong>WP Super Cache</strong><br>- If you have a Wordpress website, 
											<a href="http://wordpress.org/plugins/wp-super-cache/" target="_blank">WP Super Cache</a> 
											can be installed within seconds and without no programming knowledge.</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="flash">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Flash Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your page uses Flash.&nbsp;Flash is an outdated technology that was widely used in the past to deliver rich multimedia content. Nowadays this evolved to newer, more mature technologies and standards based on HTML 5, so it&amp;#39;s not considered a good practice to use it.&nbsp;Flash content does not work well on mobile devices, and it&amp;#39;s not Search Engine friendly."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations!&nbsp;Your website does not include flash objects (an outdated technology that was sometimes used&nbsp;to deliver rich multimedia content). Flash content does not work well on mobile devices, and is difficult for crawlers to interpret.
							</div>
						</div>
					</div>
				</div>
				
				<div class="image_expire_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Image Expires Tag Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Checks if your page is using an image expires tag, which specifies a future expiration date for your images. Browsers will see this tag and cache the image in the user&amp;#39;s browser until the specified date (so that it does not keep re-fetching the unchanged image from your server). This speeds up your site the next time that user visits your site and requires the same image.</span>"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your webpage use 'Expires' header for your images and the browsers will display these images from the cache.
							</div>
						</div>
					</div>
				</div>
				
				<div class="minified">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">JS Minification Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This checks if any of external javascript files used in your page is minified"></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon notification2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Some of your website's JavaScript files are not minified!
								<a href="#" class="see-full-list" data-toggle="modal" data-target="#minifiedJavaScriptFullList1">See full list of JavaScript files</a>
								<div class="modal fade" id="minifiedJavaScriptFullList1" tabindex="-1" role="dialog" aria-labelledby="minifiedJavaScriptFullListLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="minifiedJavaScriptFullListLabel">
													Full list of JavaScript files
												</h4>
											</div>
											<div class="modal-body">
												<div class="minified-title"><strong>Minified JavaScript Files:</strong></div>
												<a href="http://aequor.com/wp-includes/js/wp-emoji-release.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/wp-emoji-release.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/jquery/jquery.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/jquery/jquery.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/underscore.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/underscore.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/shortcode.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/shortcode.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-admin/js/media-upload.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-admin/js/media-upload.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=b5839a522002c29a0d39a00bb20edf6c-2014.06.20" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=b5839a522002c29a0d39a00bb20edf6c-2014.06.20
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/libs/bootstrap/js/bootstrap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/libs/bootstrap/js/bootstrap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/jquery.cookie.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/jquery.cookie.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/backstretch.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/backstretch.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/parallax.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/parallax.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/jquery.gmap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/jquery.gmap.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												<a href="http://aequor.com/wp-content/themes/olida/js/modernizr.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/modernizr.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/comment-reply.min.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/comment-reply.min.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="https://www.google-analytics.com/analytics.js" target="_blank" class="result-modal-link">
													- https://www.google-analytics.com/analytics.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/geocoder.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/geocoder.js
												</a>
												
												<a href="https://maps.googleapis.com/maps/api/js?client=google-maps-embed&amp;paint_origin=&amp;libraries=geometry,search&amp;v=3.exp&amp;language=en_US&amp;region=in" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps/api/js?client=google-maps-embed&amp;paint_origin=&amp;libraries=geometry,search&amp;v=3.exp&amp;language=en_US®ion=in
												</a>
												
												<a href="https://maps.gstatic.com/maps-api-v3/embed/js/24/4/init_embed.js" target="_blank" class="result-modal-link">
													- https://maps.gstatic.com/maps-api-v3/embed/js/24/4/init_embed.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/common.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/map.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/map.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/overlay.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/overlay.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/util.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/onion.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/onion.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/search_impl.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/search_impl.js
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/stats.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/stats.js
												</a>
												
												<a href="https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.53325941899613&amp;2d-74.5052979020088&amp;2m2&amp;1d40.5560057675776&amp;2d-74.44146137534466&amp;2u16&amp;4sen-US&amp;5e0&amp;6sm%40342000000&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._scefbz&amp;token=72332" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.53325941899613&amp;2d-74.5052979020088&amp;2m2&amp;1d40.5560057675776&amp;2d-74.44146137534466&amp;2u16&amp;4sen-US&amp;5e0&amp;6sm%40342000000&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._scefbz&amp;token=72332
												</a>
												
												<a href="https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.52968195854725&amp;2d-74.49344043948923&amp;2m2&amp;1d40.560414802848285&amp;2d-74.45279377444592&amp;2u12&amp;4sen-US&amp;5e2&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._y284vf&amp;token=93878" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.52968195854725&amp;2d-74.49344043948923&amp;2m2&amp;1d40.560414802848285&amp;2d-74.45279377444592&amp;2u12&amp;4sen-US&amp;5e2&amp;7b0&amp;8e0&amp;9b0&amp;11e289&amp;callback=_xdc_._y284vf&amp;token=93878
												</a>
												
												<a href="https://maps.googleapis.com/maps-api-v3/api/js/24/4/controls.js" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps-api-v3/api/js/24/4/controls.js
												</a>
												
												<a href="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%3Fpb%3D!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%253A0x1cfee50c65b149d5!2sAequor%2BTechnologies%2BDevelopment%2BCenter!5e0!3m2!1sen!2sin!4v1418710042134&amp;2sgoogle-maps-embed&amp;callback=_xdc_._koqkbo&amp;token=80094" target="_blank" class="result-modal-link">
													- https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fwww.google.com%2Fmaps%2Fembed%3Fpb%3D!1m14!1m8!1m3!1d3031.8519916627815!2d-74.47332!3d40.544858999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7604bfd537d%253A0x1cfee50c65b149d5!2sAequor%2BTechnologies%2BDevelopment%2BCenter!5e0!3m2!1sen!2sin!4v1418710042134&amp;2sgoogle-maps-embed&amp;callback=_xdc_._koqkbo&amp;token=80094
												</a>
												<div class="not-minified-title"><strong>Not Minified JavaScript Files:</strong></div>
												<a href="http://aequor.com/wp-content/plugins/wp-comment-validation/js/jquery.validate.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/wp-comment-validation/js/jquery.validate.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-includes/js/thickbox/thickbox.js?ver=b5839a522002c29a0d39a00bb20edf6c-20121105" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/thickbox/thickbox.js?ver=b5839a522002c29a0d39a00bb20edf6c-20121105
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/plugins.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/plugins.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/custom.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/custom.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/scripts.js?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
											</div>
										</div>
									</div>
								</div>
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="JS Minification Test" data-fix-key="js_failed">
									In order to pass this test you must minify all of your external JavaScript files. For this task you can use an online JS minifier like 
									<a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI Compressor</a>, 
									<a href="https://developers.google.com/closure/compiler/" target="_blank">Closure Compiler</a> or 
									<a href="http://www.crockford.com/javascript/jsmin.html" target="_blank">JSMin</a>.</div>
							</div>
						</div>
					</div>
					<div class="row results-line row-same-height subresult2">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult2-title">CSS Minification Test</span>
							<span class="icon question4 subresult2-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This checks if any of external css files used in your page is minified"></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon notification2" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Some of your website's CSS files are not minified!
								<a href="#" class="see-full-list" data-toggle="modal" data-target="#minifiedCSSFullList1">See full list of CSS files</a>
								<div class="modal fade" id="minifiedCSSFullList1" tabindex="-1" role="dialog" aria-labelledby="minifiedCSSFullListLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title" id="minifiedCSSFullListLabel">
													Full list of CSS files
												</h4>
											</div>
											<div class="modal-body">
												<div class="minified-title"><strong>Minified CSS Files:</strong></div>
												<a href="http://aequor.com/wp-includes/css/dashicons.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/css/dashicons.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												<a href="http://aequor.com/wp-content/themes/olida/libs/bootstrap/css/bootstrap.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/libs/bootstrap/css/bootstrap.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												<a href="http://aequor.com/wp-content/themes/olida/fonts/icomoon/iconmoon.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/fonts/icomoon/iconmoon.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/fonts/font-awesome/css/font-awesome.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/fonts/font-awesome/css/font-awesome.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												<a href="http://aequor.com/wp-content/themes/olida/css/small.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/css/small.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												<a href="http://aequor.com/wp-content/themes/olida/css/less.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/css/less.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/js/fancybox/jquery.fancybox.min.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<div class="not-minified-title"><strong>Not Minified CSS Files:</strong></div>
												<a href="http://aequor.com/wp-includes/js/thickbox/thickbox.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-includes/js/thickbox/thickbox.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.6.0&amp;ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/wp-comment-validation/css/jquery.validate.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/wp-comment-validation/css/jquery.validate.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/style.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/style.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://aequor.com/wp-content/themes/olida/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c" target="_blank" class="result-modal-link">
													- http://aequor.com/wp-content/themes/olida/css/styles.css?ver=b5839a522002c29a0d39a00bb20edf6c
												</a>
												
												<a href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" target="_blank" class="result-modal-link">
													- http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900
												</a>
												
												<a href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" target="_blank" class="result-modal-link">
													- https://fonts.googleapis.com/css?family=Roboto:300,400,500,700
												</a>
											</div>
										</div>
									</div>
								</div>
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="CSS Minification Test" data-fix-key="css_failed">In order to pass this test you must minify all of your external CSS files. For this task you can use an online CSS minifier like 
									<a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI Compressor</a> or <a href="http://www.phpied.com/cssmin-js/">cssmin.js</a>.
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="nested_tables">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Nested Tables Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your site is using nested tables, which can slow down page rendering in the user&amp;#39;s browser."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations, your page does not use nested tables. This speeds up page loading time and optimizes the user experience.
							</div>
						</div>
					</div>
				</div>
				
				<div class="frameset">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Frameset Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check to see if your website is using frames. The &quot;frameset&quot; tag is used to display multiple HTML documents in one page. When search engines use robots or spiders to get information from your page, they have to sort through a bunch or unrelated pages, making it difficult to index a single page. This can create a decrease in search engine page rankings.</span>"></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your webpage does not use frames.
							</div>
						</div>
					</div>
				</div>
				
				<div class="doctype">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Doctype Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check for doctype declaration. A document type declaration, or DOCTYPE, defines which version of (X)HTML your webpage is actually using and this is essential to a proper rendering and functioning of web documents in compliant browsers.">
							</span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your website has a doctype declaration:
								<div class="tool-result-details"><span class="icon arrow-right32" aria-hidden="true"></span><em>&lt;!DOCTYPE html&gt;</em></div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<!--<div class="category-container" data-section-name="Server and security">
				<div class="row section-name first-child" style="margin-top: 30px;">
					<div class="col-md-12 column"><strong>Server and security</strong></div>
				</div>
				<div class="url_canonicalization">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">URL Canonicalization Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Test your site for potential URL canonicalization issues. Canonicalization describes how a site can use slightly different URLs for the same page (for example, if http://www.example.com and http://example.com displays the same page but do not resolve to the same URL). If this happens, search engines may be unsure as to which URL is the correct one to index. <a href=&quot;http://www.mattcutts.com/blog/seo-advice-url-canonicalization/&quot; target=&quot;_blank&quot;>Learn more about canonicalization issues</a>."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								<a href="http://aequor.com" target="_blank">http://aequor.com</a> and <a href="http://www.aequor.com/" target="_blank">http://www.aequor.com/</a> resolve to the same URL.
							</div>
						</div>
					</div>
				</div>
				
				<div class="ip_canonicalization">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">IP Canonicalization Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Test your site for potential IP canonicalization issues. Canonicalization describes how a site can use slightly different URLs for the same page (for example, if your sites IP address and domain name display the same page but do not resolve to the same URL). If this happens, search engines may be unsure as to which URL is the correct one to index. <a href=&quot;http://www.mattcutts.com/blog/seo-advice-url-canonicalization/&quot; target=&quot;_blank&quot;>Learn more about canonicalization issues</a>."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your site's IP <a target="_blank" href="http://173.201.146.15">173.201.146.15</a> does not redirect to your site's domain name. This could cause duplicate content problems if a search engine indexes your site under both its IP and domain name.
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="IP Canonicalization Test" data-fix-key="failed">In order to pass this test you must consider using a 301 re-write rule in your
									<strong>.htaccess</strong> file so that your site's IP points to your domain name.<br>
									If your site is running on apache server, you could put these lines in your <strong>.htaccess</strong> after <strong>RewriteEngine on</strong> line:
									<pre style="margin: 10px 0px;">RewriteCond %{HTTP_HOST} ^XXX\.XXX\.XXX\.XXX
									RewriteRule (.*) http://www.yourdomain.com/$1 [R=301,L]
									</pre>
									Note that you must proper format the first line using your IP (replace X characters with proper digits from your IP) and the second line using your domain name.</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="https_checker">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">HTTPS Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your website is using a secure communication protocol over the Internet. Using an HTTPS URL indicates that an additional encryption/authentication layer was added between client and server. The data transferred is encrypted so that it cannot be read by anyone except the recipient. HTTPS must be&nbsp;used by any Web site that is collecting sensitive customer data such as banking information or purchasing information. If you are making a transaction online, you should make sure that it is done over HTTPS so that the data remains secure. Even for sites that do not collect sensitive customer information, search engines suggest that&nbsp;<a href=&quot;http://googlewebmastercentral.blogspot.com/2014/08/https-as-ranking-signal.html&quot; target=&quot;_blank&quot;>switching to https is an increasingly good idea and may help improve rankings</a>."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your website is not using https, a secure communication protocol. Even for sites that do not collect senstive customer information, search engines suggest that&nbsp;
								<a href="http://googlewebmastercentral.blogspot.com/2014/08/https-as-ranking-signal.html" target="_blank">switching to https is an increasingly good idea and may help improve rankings</a>. 
								Note:&nbsp;if your site relies primarily&nbsp;on adsense income, be aware that&nbsp;<a href="https://support.google.com/adsense/answer/10528?hl=en">using https may be detrimental to ad earnings</a>.
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="HTTPS Test" data-fix-key="failed">If your website needs a secured authentication or an encrypted transfer of data, you need to install an SSL certificate in order to provide a secure connection over HTTPS protocol. <a href="https://www.digitalocean.com/community/tutorials/how-to-install-an-ssl-certificate-from-a-commercial-certificate-authority" target="_blank">HERE</a> is a "step by step" guide to purchase and install an SSL certificate.</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="safe_browsing">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Safe Browsing Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your website is listed with malware or phishing activity.&nbsp;Any site containing malware or suspicious for phising activity is seen as a threat and risk to the online community and hence will get a a lower ranking.&nbsp;This test checks if the most relevant online databases that track malware and phishing list your website."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								This site is not currently listed as suspicious (no malware or phishing activity found).
							</div>
						</div>
					</div>
				</div>
				
				<div class="server_signature">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Server Signature Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your server&amp;#39;s signature is ON.&nbsp;A server signature is the public identity of your web server and contains sensitive information that could be used to exploit any known vulnerability, so it&amp;#39;s considered a good practice to turn it OFF as you don&amp;#39;t want to disclose what software versions you are running."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations, your server signature is off.
							</div>
						</div>
					</div>
				</div>
				<div class="directory_browsing">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Directory Browsing Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your server allows directory browsing. If directory browsing is disabled, visitors will not be able to browse your directory by accessing the directory directly (if there is no index.html file). This will protect your files from being exposed to the public. Apache web server allows directory browsing by default. Disabling directory browsing is generally a good idea from a security standpoint."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your server has disabled directory browsing.
							</div>
						</div>
					</div>
				</div>
				
				<div class="libwww_perl_access">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Libwww-perl Access Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your server allows access from User-agent Libwww-perl. Botnet scripts that automatically look for vulnerabilities in your software are sometimes identified as User-Agent libwww-perl. By blocking access from libwww-perl you can eliminate many simpler attacks."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your server appears to allow access from User-agent Libwww-perl.  Botnet scripts that automatically look for vulnerabilities in your software are sometimes identified as User-Agent libwww-perl. By blocking access from libwww-perl you can eliminate many simpler attacks. Read more on <a target="_blank" href="http://www.cyberciti.biz/tips/the-rise-of-bots-spammers-crack-attacks-and-libwww-perl.html">blocking Libwww-perl access</a> and <a target="_blank" href="http://www.seositecheckup.com/articles/87">improving your website's security</a>.
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Libwww-perl Access Test" data-fix-key="failed">In order to pass this test you must block the libwww-perl user-agent in your <strong>.htaccess</strong> file.<br>
									If your site is running on apache server, you could put these lines in your <strong>.htaccess</strong> after <strong>RewriteEngine on</strong> line:
									<pre style="margin: 10px 0px;">RewriteCond %{HTTP_USER_AGENT} libwww-perl.* 
									RewriteRule .* ? [F,L]
									</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="plaintext_emails">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Plaintext Emails Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check your webpage for plaintext email addresses. Any e-mail address posted in public is likely to be automatically collected by computer software used by bulk emailers (a process known as e-mail address harvesting). A spam harvester can read through the pages in your site and extract email addresses which are then added to bulk marketing databases and the result is more spam in your inbox."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This needs to be fixed">
							</span>
							<div class="tool-result-summary">
								We found 6 email addresses in your page code. We advise you <a href="http://csarven.ca/hiding-email-addresses" target="_blank">to protect email links</a> in a way that hides them from the spam harvesters.
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Plaintext Emails Test" data-fix-key="failed">In order to pass this test you must make your email addresses invisible to email spiders. Note that the best option is to replace your entire contact mechanism with a contact form and using the POST method while submitting the form. Other solutions are listed below:<br>
									<ul style="margin-top: 10px;">
										<li>replace the at (@) and dot (.) characters</li>
										<li>replace text with images</li>
										<li>use email obfuscators</li>
										<li>hide email addresses using JavaScript or CSS trick</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			
			<!--<div class="category-container" data-section-name="Mobile usability">
				<div class="row section-name first-child" style="margin-top: 30px;">
					<div class="col-md-12 column"><strong>Mobile usability</strong></div>
				</div>
				
				<div class="media_queries">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Media Query Responsive Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<span>Check if your page implements responsive design functionalities using media query techniques. </span><br /><span>The &amp;#39;@media&amp;#39; rule allows different style rules for different media in the same style sheet. Media query techniques allows different content to be optimized depending on the output device and this is a must nowadays to make sure your website looks good on ALL devices and platforms.</span>"></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations, your website uses media query technique, which is the base for responsive design functionalities.
							</div>
						</div>
					</div>
				</div>
				
				<div class="mobile_snapshot">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Mobile Snapshot</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check how your page renders on a mobile device by providing a snapshot for you to quickly check if it looks good.">
							</span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								You can see below how your website looks on the portrait view of a mobile device.
							</div>
							
							<div class="col-md-5">
								<div class="tool-result-details">
									Unable to take snapshot!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			
			<!--<div class="category-container" data-section-name="Advanced SEO">
				<div class="row section-name first-child" style="margin-top: 30px;">
					<div class="col-md-12 column"><strong>Advanced SEO</strong></div>
				</div>
				
				<div class="microdata">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Microdata Schema Test</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This test will check if your web page take the advantages of HTML Microdata specifications in order to markup structured data. By using microdata in your web pages, you can help search engines to better understand your content and to create rich snippets in search results."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your webpage doesn't take the advantages of HTML Microdata specifications in order to markup structured data. View Google's&nbsp;guide for&nbsp;
								<a href="https://developers.google.com/structured-data/schema-org?hl=en">getting started with&nbsp;microdata.</a>
								<br>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Microdata Schema Test" data-fix-key="failed">
									HTML5 Microdata is an easy way to add semantic markup to your web pages. Search engines rely on this markup to improve the display of search results, making it easier for people to find the right web pages.<br>
									Here is a simple example of how to use HTML5 microdata in your contact web page:
									<pre style="margin: 10px 0px;">&lt;div itemscope itemtype="http://schema.org/Person"&gt;
									&lt;span itemprop="name"&gt;Joe Doe&lt;/span&gt;
									&lt;span itemprop="company"&gt;The Example Company&lt;/span&gt;
									&lt;span itemprop="tel"&gt;604-555-1234&lt;/span&gt;
									&lt;a itemprop="email" href="mailto:joe.doe@example.com"&gt;joe.doe@example.com&lt;/a&gt;
									&lt;/div&gt;
									</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="noindex_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Noindex Tag Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your webpage is&nbsp;using the noindex meta tag. The usage of&nbsp;this&nbsp;tag instructs search engines not to show your page in search results."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Your webpage does not use the noindex meta tag.&nbsp;This means that your&nbsp;webpage will be read and indexed by search engines.
							</div>
						</div>
					</div>
				</div>
				
				<div class="canonical_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Canonical Tag Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your webpage is using the canonical link tag. This&nbsp;tag is used to nominate a primary page when you have several pages with duplicate content."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon cancel-circle2 medium-fix" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This needs to be fixed"></span>
							<div class="tool-result-summary">
								Your webpage is using the canonical link tag. This means that&nbsp;your webpage is not the&nbsp;preferred one to use in the search results.
								<div class="tool-result-details">
									<span class="icon arrow-right32" aria-hidden="true"></span>
									<em>&lt;link rel="canonical" href="http://aequor.com/" /&gt;</em>
								</div>
								<a href="#" class="how-to-fix" data-toggle="modal" data-target="#howToFixModal">How to Fix</a>
								<div class="fix-message hide" data-tool-title="Canonical Tag Checker" data-fix-key="failed">
									The Canonical Link Tag can be used when there are several pages with similar content and you want to tell the search engines which page you prefer to use in the search results. If your webpage does not have duplicate content and it has the preferred URL you must remove the canonical link tag.</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="nofollow_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Nofollow Tag Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if your webpage is using the nofollow meta tag. This tag will tell&nbsp;search engines not to crawl any outgoing links from your webpage."></span>
						</div>
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Your webpage does not use the nofollow meta tag. This means that search engins will&nbsp;crawl all links from your webpage.
							</div>
						</div>
					</div>
				</div>
				<div class="disallow_tag">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">Disallow Directive Checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check if the&nbsp;robots.txt file is excluding some parts of your website.&nbsp;Search engines will look for a robots.txt file in the root of your domain whenever they crawl your website. The Disallow directive is used when you want to advise a search engine not to crawl and index a file, page, or directory."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon info" style="color:#b6b6b6"></span>
							<div class="tool-result-summary">
								Your robots.txt file is using the&nbsp;disallow directive but it's empty.&nbsp;This means that the whole website can be crawled by search engines.
							</div>
						</div>
					</div>
				</div>
				<div class="spf_checker">
					<div class="row results-line row-same-height subresult1">
						<div class="col-md-2 column col-xs-height col-top" style="border-bottom:none;">
							<span class="subresult1-title">SPF records checker</span>
							<span class="icon question4 subresult1-description" aria-hidden="true" data-container="body" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This test will check if your DNS server has an SPF record. SPF (Sender Policy Framework) allows email systems to check if the sender of a message comes from a legitimate source&nbsp;and refuse an email if the source is not legitimate. SPF allows administrators to specify which hosts are allowed to send mail from a given domain by creating a specific SPF record or TXT record in the Domain Name System (DNS)."></span>
						</div>
						
						<div class="col-md-10 column col-xs-height" data-column="1">
							<span class="icon checkmark3" aria-hidden="true" data-toggle="tooltip" data-container="body" data-placement="bottom" title="" data-original-title="This check is passed"></span>
							<div class="tool-result-summary">
								Congratulations! Your DNS server is using an SPF record. This SPF record is listed below:
								<div class="tool-result-details"><span class="icon arrow-right32" aria-hidden="true"></span><em>v=spf1 include:outlook.com ~all </em></div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<div style="width: 728px;margin-left:auto;margin-right:auto;margin-top:30px; float: none; display: block; text-align:center;">
				<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8051682001896609" data-ad-slot="5358768633"></ins>
			</div>
		</div>
	  </div><!-- /.container -->
  </body>
</html>