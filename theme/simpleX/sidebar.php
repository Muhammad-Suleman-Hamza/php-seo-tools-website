<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));
/*
 * @author Balaji
 * @name: Rainbow PHP Framework
 * @Theme: Default Style
 * @copyright © 2017 ProThemes.Biz
 *
 */
?>
<style type="text/css">
.headText {
    width: 100%;
    display: inline-block;
}

.headText h2 {
    color: #27ae60;
    margin-top: 0px;
    margin-bottom: 0px;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
}

.mostPopular .headText h3 {
    font-weight: 700;
    margin: 0;
    padding-bottom: 17px;
    font-size: 17px;
    width: auto;
    float: left;
    margin-right: 10px;
    max-width: 275px;
    color: #27ae60;
}

.headLine {
    border-radius: 0px 0px 20px 20px;
    width: auto;
    height: 0px;
    overflow: hidden;
    background: #eee;
    -moz-box-shadow: 0 -1px 0 #83b755, 0 -2px 0 #4b8424;
    background: none;
    border-top: none;
    border-bottom: 6px solid #27ae60;
    position: relative;
    top: 10px;
    margin-bottom: 15px;
}

.mostPopular #pop {
    font-size: 100%;
    position: relative;
    top: -15px;
}

.mostPopular p {
    font-family: franklin-gothic-urw-cond, 'Helvetica Condensed Bold', Helvetica, Arial, sans-serif !important;
    border-bottom: 3px solid #929292;
    color: #768696;
    padding: 12px 0 10px;
    margin-bottom: 0;
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
}

.mostPopular li {
    border-bottom: 1px solid #ddd;
    -webkit-box-shadow: 0 1px 0 #fff;
    -moz-box-shadow: 0 1px 0 #fff;
    box-shadow: 0 1px 0 #fff;
    padding: 7px 0;
    position: relative;
}

.mostPopular li .index {
    color: #4e5daf;
    display: block;
    font-size: 14px;
    float: left;
    line-height: 18px;
    width: 25px;
    font-family: franklin-gothic-urw-cond, "Helvetica Condensed Bold", Helvetica, Arial, sans-serif;
    font-weight: 700;
}

.mostPopular li a {
    text-align: left;
    color: #505d69;
    font-family: franklin-gothic-urw-cond, 'Helvetica Condensed Bold', Helvetica, Arial, sans-serif !important;
    font-size: 13px;
    font-weight: 700;
    display: block;
    line-height: 18px;
    width: 235px;
}
.mostPopular li .count {
    width: 40px;
    color: #4e5daf;
    display: block;
    float: right;
    font-size: 14px;
    font-weight: 700;
    line-height: 25px;
    font-family: franklin-gothic-urw-cond, "Helvetica Condensed Bold", Helvetica, Arial, sans-serif;
}

.thumbnaidl {
    border-bottom: 3px solid #27ae60;
    background: #232c3b !important;
    margin-top: -25.7px;
    padding: 2px;
}

.t11img {
    width: 25px;
}

a.seeMore {
    margin-bottom: 0px;
    /*float: left;*/
    color: #27ae60;
    text-decoration: none;
    cursor: pointer;
    margin-top: 10px;
    padding-left: 2px;
    white-space: nowrap;
    font-weight: bold;
}

</style>
<div class="col-md-4" id="rightCol">       	
    <div class="well">  
    
        <?php if(isSelected($themeOptions['general']['sSearch'])){ ?>   
        <div id="sidebarSc" class="col-md-12">
            <div class="form-group">
                <div class="input-group green shadow">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        <input type="text" class="form-control" placeholder="<?php echo $lang['AS39']; ?>" autocomplete="off" id="sidebarsearch" />
                    </div>
               	</div>
            <div class="search-results" id="sidebar-results"></div>
        </div>
        <?php } ?>
        
        <div class="sideXd">
            <div class="panel panel-default">
                        <div class="panel-heading text-center" style="font-size:16px; padding:5px; color: #333;background-color: #fff;">
                            FOLLOW US
                        </div>
                        <div class="panel-body" style="padding:10px 0;">
                            <a href="" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="" target="_blank" class="btn btn-danger btn-xs"><i class="fa fa-google"></i> Google+</a>
                        </div>
                    </div>
        </div>
                
        <div class="sideXd">
            <div class="panel panel-default">
<div class="mostPopular">
                        <div class="headText"><h3 class="">Most Popular Free SEO Tools</h3><div class="headLine"></div></div>
        <div id="pop">
            <p class="dlLastWeek">SEO Tool Station</p>
            <ul style="padding: 0; margin: 0; list-style: none;">
                                                        <li class="">
                        <span class="index">1.</span>
                        <a class="storyTitle" href="http://localhost:8080/Clients/Muqeem/atoz-seo-tools-v2.9/atoz-seo-tools-v2.9/Upload/article-rewriter">
                            <span class="OneLinkNoTx">Article Rewriter Pro</span>
                        </a>
                        <span class="count"><div style="background: #f39c12;" class="thumbnaidl"><img alt="Article Rewriter Pro" src="https://seotoolstation.com/theme/simpleX/icons/article_rewriter_pro.png" class="t11img">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">2.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/free-online-article-spinner">
                            <span class="OneLinkNoTx">Article Spinner</span>
                        </a>
                        <span class="count"><div style="background: #FF5722;" class="thumbnaidl">
                                <img alt="Article Spinner" src="https://seotoolstation.com/theme/simpleX/icons/free-online-article-spinner.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">3.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/plagiarism-checker">
                            <span class="OneLinkNoTx">Plagiarism Checker</span>
                        </a>
                        <span class="count"><div style="background: #4CAF50;" class="thumbnaidl">
                                <img alt="Plagiarism Checker" src="https://seotoolstation.com/theme/simpleX/icons/plagiarism_checker.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">4.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/youtube-video-keyword-ranker">
                            <span class="OneLinkNoTx">Youtube Video Ranker</span>
                        </a>
                        <span class="count"><div style="background: #03A9F4;" class="thumbnaidl">
                                <img alt="Youtube Video Ranker" src="https://seotoolstation.com/theme/simpleX/icons/Youtube-Video-Keyword-Ranker.png" class="t11img">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">5.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/related-keywords-finder">
                            <span class="OneLinkNoTx">Related keywords Finder</span>
                        </a>
                        <span class="count"><div style="background: #ff6666;" class="thumbnaidl">
                                <img alt="Related keywords Finder" src="https://seotoolstation.com/theme/simpleX/icons/Related-keywords-Finder.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">6.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/instant-backlink-indexer">
                            <span class="OneLinkNoTx">Instant Backlink Indexer</span>
                        </a>
                        <span class="count"><div style="background: #8070ff;" class="thumbnaidl">
                                <img alt="Instant Backlink Indexer" src="https://seotoolstation.com/theme/simpleX/icons/instant-backlink-indexer.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">7.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/seo-keyword-competition-analysis">
                            <span class="OneLinkNoTx">Keyword Competition Analysis</span>
                        </a>
                        <span class="count"><div style="background: #ffc070;" class="thumbnaidl">
                                <img alt="Keyword Competition Analysis" src="https://seotoolstation.com/theme/simpleX/icons/seo-keyword-competition-analysis.png" class="t11img">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">8.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/expired-domains-tool">
                            <span class="OneLinkNoTx">Expired Domains Tool</span>
                        </a>
                        <span class="count"><div style="background: #65dc95;" class="thumbnaidl">
                                <img alt="Expired Domains Tool" src="https://seotoolstation.com/theme/simpleX/icons/expired-domains-tool.png" class="t11img">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">9.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/text-to-speech-converter">
                            <span class="OneLinkNoTx">Text To Speech Converter</span>
                        </a>
                        <span class="count"><div style="background: #ff6666;" class="thumbnaidl">
                                <img alt="Text To Speech Converter" src="https://seotoolstation.com/theme/simpleX/icons/text-to-speech-converter.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">10.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/speech-to-text">
                            <span class="OneLinkNoTx">Voice To Text Online</span>
                        </a>
                        <span class="count"><div style="background: #795548;" class="thumbnaidl">
                                <img alt="Voice To Text Online" src="https://seotoolstation.com/theme/simpleX/icons/speech-to-text.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">11.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/article-generator">
                            <span class="OneLinkNoTx">Article Generator Tool</span>
                        </a>
                        <span class="count"><div style="background: #af4e4e;" class="thumbnaidl">
                                <img alt="Article Generator Tool" src="https://seotoolstation.com/theme/simpleX/icons/article-generator.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">12.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/keyword-position-checker">
                            <span class="OneLinkNoTx">Keyword Position Checker</span>
                        </a>
                        <span class="count"><div style="background: #a1cf7f;" class="thumbnaidl">
                                <img alt="Keyword Position Checker" src="https://seotoolstation.com/theme/simpleX/icons/keyword_position_checker.png" class="t11img">
                            </div></span>
                                                        </li><li>
                        <span class="index">13.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/merge-words-online-tool">
                            <span class="OneLinkNoTx">Merge Words Tool</span>
                        </a>
                        <span class="count"><div style="background: #FFDC70;" class="thumbnaidl">
                                <img alt="Merge Words Tool" src="https://seotoolstation.com/theme/simpleX/icons/merge-words-online-tool.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">14.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/article-scraper">
                            <span class="OneLinkNoTx">Article Scraper Tool</span>
                        </a>
                        <span class="count"><div style="background: #3F51B5;" class="thumbnaidl">
                                <img alt="Article Scraper Tool" src="https://seotoolstation.com/theme/simpleX/icons/article-scraper.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">15.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/qr-code-generator">
                            <span class="OneLinkNoTx">QR Code Generator</span>
                        </a>
                        <span class="count"><div style="background: #03A9F4;" class="thumbnaidl">
                                <img alt="QR Code Generator" src="https://seotoolstation.com/theme/simpleX/icons/qr-code-generator.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">16.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/urdu-typing-tool">
                            <span class="OneLinkNoTx">Urdu Typing Tool</span>
                        </a>
                        <span class="count"><div style="background: #57b78b;" class="thumbnaidl">
                                <img alt="Urdu Typing Tool" src="https://seotoolstation.com/theme/simpleX/icons/urdu-typing-tool.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">17.</span>
                        <a class="storyTitle" href="https://seotoolstation.com/google-pagespeed-insights-checker">
                            <span class="OneLinkNoTx">Google Pagespeed Checker</span>
                        </a>
                        <span class="count"><div style="background: #9dca7c;" class="thumbnaidl">
                                <img alt="Google Pagespeed Checker" src="https://seotoolstation.com/theme/simpleX/icons/google-pagespeed-insights-checker.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">18.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/internet-connection-speed-test-tool">
                            <span class="OneLinkNoTx">Internet Speed Test</span>
                        </a>
                        <span class="count"><div style="background: #2fbbff;" class="thumbnaidl">
                                <img alt="Internet Speed Test" src="https://seotoolstation.com/theme/simpleX/icons/internet-connection-speed-test-tool.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        <li>
                        <span class="index">19.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/mobile-friendly-test">
                            <span class="OneLinkNoTx">Mobile Friendly Test</span>
                        </a>
                        <span class="count"><div style="background: #F94E42;" class="thumbnaidl">
                                <img alt="Mobile Friendly Test" src="https://seotoolstation.com/theme/simpleX/icons/mobile_friendly_test.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
                                                        
<li>
                        <span class="index">20.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/favicon-generator-tool">
                            <span class="OneLinkNoTx">Favicon Generator Tool</span>
                        </a>
                        <span class="count"><div style="background: #65dc95;" class="thumbnaidl">
                                <img alt="Favicon Generator Tool" src="https://seotoolstation.com/theme/simpleX/icons/favicon-generator-tool.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li><li>
                        <span class="index">21.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/bulk-allintitle-competition-checker/">
                            <span class="OneLinkNoTx">Allintitle Competition Checker</span>
                        </a>
                        <span class="count"><div style="background: #795548;" class="thumbnaidl">
                                <img alt="Allintitle Competition Checker" src="https://seotoolstation.com/theme/simpleX/icons/bulk-allintitle-competition-checker.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li><li>
                        <span class="index">22.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/free-online-skype-resolver">
                            <span class="OneLinkNoTx">Advanced Skype Resolver</span>
                        </a>
                        <span class="count"><div style="background: #ffdc70;" class="thumbnaidl">
                                <img alt="Advanced Skype Resolver" src="https://seotoolstation.com/theme/simpleX/icons/free-online-skype-resolver.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>
<li>
                        <span class="index">23.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/social-stats-checker">
                            <span class="OneLinkNoTx">Social Stats Checker</span>
                        </a>
                        <span class="count"><div style="background: #8296ff;" class="thumbnaidl">
                                <img alt="Social Stats Checker" src="https://seotoolstation.com/theme/simpleX/icons/social_stats.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>

<li>
                        <span class="index">24.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/keyword-density-checker">
                            <span class="OneLinkNoTx">Keyword Density Checker</span>
                        </a>
                        <span class="count"><div style="background: #97d274;" class="thumbnaidl">
                                <img alt="Keyword Density Checker" src="https://seotoolstation.com/theme/simpleX/icons/keyword_density_checker.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li><li>
                        <span class="index">25.</span>
                        <a class="storyTitle" href="http://seotoolstation.com/domain-authority-checker">
                            <span class="OneLinkNoTx">Domain Authority Checker</span>
                        </a>
                        <span class="count"><div style="background: #f56954;" class="thumbnaidl">
                                <img alt="Domain Authority Checker" src="https://seotoolstation.com/theme/simpleX/icons/domain_authority.png" class="t11img" data-pin-nopin="true">
                            </div></span>
                    </li>

                            </ul>
                        <a href="http://seotoolstation.com/" class="seeMore">See all most popular Tools »</a>
        </div>
    </div>
                        </div>
        </div>
        
    </div>
</div>