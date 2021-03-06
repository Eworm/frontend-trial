<?php
$apiData = (object) ['name' => '<HNK> Hoofddorp', 'rating' => 8.1, 'review_count' => 50, 'url' => 'https://www.deskbookers.com/nl-nl/hoofddorp/hnk-hoofddorp'];
function safe($value, $doubleEncode = true) { return htmlspecialchars( (string) $value, ENT_QUOTES, 'utf-8', $doubleEncode); }

$x = round($apiData->rating)/2
?>
<!DOCTYPE html>
<html lang="nl">
    
	<head>
		<meta charset="utf-8">
		<title>
		    Wat andere mensen van&nbsp;<?php echo safe($apiData->name) ?>&nbsp; vinden - Deskbookers
		</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Microsoft. Delete if not required -->
		<meta http-equiv="cleartype" content="on">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!-- Removing the highlight for mobile IE10. Stupid to make this a meta tag instead of a css property -->
        <meta name="msapplication-tap-highlight" content="no">
        
        <!-- smoosh -->
        <link rel="stylesheet" href="../css/style.css" media="screen">
        <!-- endsmoosh -->
        
	</head>
	
	<body itemscope itemtype="http://schema.org/Place">
    	
    	<div class="dbreview-container" itemprop="review" itemscope itemtype="http://schema.org/Review">
        	
            <meta itemprop="author" content="Deskbookers">
        	
            <header>
                
            	<h1 class="dbreview-title">
                	<?php echo safe($apiData->name) ?>
            	</h1>
            	
            </header>
            
            <main>
    	
            	<div class="dbreview-rating">
                    
                    <div class="dbreview-rating-stars" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        
                        <meta itemprop="bestRating" content="5">
                        <meta itemprop="worstRating" content="0">
                        <meta itemprop="ratingValue" content="<?php echo $x ?>">
                        <meta itemprop="reviewCount" content="<?php echo $apiData->review_count ?>">
                        
                    	<svg class="dvreview-icon" version="1.1" id="DB" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 width="117.688px" height="117.521px" viewBox="0 0 117.688 117.521" enable-background="new 0 0 117.688 117.521"
                        	 xml:space="preserve">
                        	 <title>Deskbookers</title>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0.2979" y1="58.7573" x2="117.4082" y2="58.7573">
                            	<stop  offset="0" style="stop-color:#464291"/>
                            	<stop  offset="0.5393" style="stop-color:#393A73"/>
                            	<stop  offset="1" style="stop-color:#0B001A"/>
                            </linearGradient>
                            <circle fill="url(#SVGID_1_)" cx="58.853" cy="58.757" r="58.555"/>
                            <path fill="#FFFFFF" d="M87.783,63.944c0-3.703-0.77-6.582-2.313-8.641c-1.543-2.16-3.652-3.238-6.328-3.238
                            	c-2.879,0-5.09,1.027-6.633,3.086c-1.543,2.16-2.316,5.09-2.316,8.793c0,4.32,0.719,7.461,2.16,9.414
                            	c1.543,2.16,3.703,3.238,6.481,3.238c2.878,0,5.093-1.078,6.636-3.238S87.783,68.061,87.783,63.944z M70.193,36.788v12.343
                            	c1.133-1.953,2.777-3.547,4.937-4.781c1.852-1.027,4.114-1.543,6.789-1.543c4.836,0,8.797,2.004,11.883,6.016
                            	c3.086,4.011,4.629,9.207,4.629,15.585s-1.543,11.57-4.629,15.582c-1.543,1.953-3.625,3.371-6.25,4.242
                            	c-2.625,0.875-5.222,1.312-7.793,1.312c-4.937,0-9.515-1.285-13.73-3.855c-4.219-2.57-6.328-7.508-6.328-14.812V31.541h5.246
                            	c1.441,0,2.676,0.516,3.703,1.543C69.677,34.116,70.193,35.35,70.193,36.788z"/>
                            <path fill="#FFFFFF" d="M31.326,73.569c1.543,2.16,3.754,3.242,6.633,3.242c2.777,0,4.937-1.082,6.48-3.242
                            	c1.441-1.953,2.16-5.09,2.16-9.41c0-3.703-0.769-6.633-2.312-8.792c-1.543-2.059-3.754-3.086-6.637-3.086
                            	c-2.672,0-4.781,1.078-6.324,3.238c-1.543,2.059-2.317,4.938-2.317,8.641C29.013,68.272,29.783,71.409,31.326,73.569z
                            	 M48.142,33.299c1.031-1.027,2.266-1.543,3.703-1.543h5.246v35.333c0,7.305-2.105,12.242-6.324,14.812
                            	c-4.219,2.574-8.797,3.859-13.734,3.859c-2.571,0-5.168-0.438-7.789-1.312c-2.625-0.875-4.707-2.289-6.25-4.242
                            	c-3.086-4.012-4.629-9.207-4.629-15.586c0-6.375,1.543-11.571,4.629-15.582c3.086-4.012,7.047-6.016,11.879-6.016
                            	c2.675,0,4.937,0.516,6.789,1.543c2.16,1.234,3.808,2.828,4.937,4.781V37.002C46.603,35.565,47.115,34.331,48.142,33.299z"/>
                        </svg>
                        
                        <?php for($a = 0; $a < 5; $a++) { ?>
                        
                            <?php if ($a < $x) { ?>
                        
                                <svg class="dbreview-rating-star" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="37.82px" height="35.969px" viewBox="0 0 37.82 35.969" enable-background="new 0 0 37.82 35.969" xml:space="preserve">
                                    <title>Gevulde ster</title>
                                    <polygon fill="#FFB400" points="18.91,0 24.753,11.84 37.82,13.738 28.364,22.956 30.597,35.969 18.91,29.825 7.223,35.969 9.455,22.956 0,13.738 13.066,11.84 "/>
                                </svg>
                            
                            <?php } else { ?>
                                
                                <svg class="dbreview-rating-star" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="37.82px" height="35.969px" viewBox="0 0 37.82 35.969" enable-background="new 0 0 37.82 35.969" xml:space="preserve">
                                    <title>Lege ster</title>
                                    <polygon fill="#ffffff" stroke="#FFB400" points="18.91,0 24.753,11.84 37.82,13.738 28.364,22.956 30.597,35.969 18.91,29.825 7.223,35.969 9.455,22.956 0,13.738 13.066,11.84 "/>
                                </svg>
                            
                            <?php } ?>
                            
                            <?php if ($a == 1) { ?>
                            
                                <br>
                            
                            <?php } ?>
                        
                        <?php } ?>
    
                    </div>
                    
                    <div class="dbreview-rating-reviews">
                	    Op basis van&nbsp;<?php echo $apiData->review_count ?>&nbsp;reviews
                	</div>
        
                </div>
                
            </main>
            	
        	<footer>
        	
            	<a href="<?php echo $apiData->url ?>" title="Bekijk alle reviews van <?php echo safe($apiData->name) ?> op deskbookers" class="dbreview-footer">
                    Bekijk reviews op
                    
                    <svg class="dbreviews-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    	 width="246.089px" height="31.789px" viewBox="0 0 246.089 31.789" enable-background="new 0 0 246.089 31.789"
                    	 xml:space="preserve">
                    	 <title>Deskbookers</title>
                		<path fill="#BCBBBB" d="M108.957,6.629c-1.577,0-2.91,0.304-4.002,0.908c-1.273,0.727-2.244,1.667-2.91,2.814V3.085
                			c0-0.846-0.303-1.572-0.908-2.177C100.528,0.303,99.8,0,98.953,0h-3.092v20.798c0,4.3,1.241,7.206,3.728,8.72
                			c2.486,1.513,5.185,2.271,8.095,2.271c1.515,0,3.046-0.26,4.593-0.772c1.545-0.516,2.772-1.348,3.681-2.499
                			c1.819-2.359,2.729-5.418,2.729-9.173s-0.909-6.813-2.729-9.175C114.138,7.811,111.804,6.629,108.957,6.629z M111.046,24.612
                			c-0.909,1.271-2.213,1.909-3.908,1.909c-1.638,0-2.91-0.638-3.82-1.909c-0.85-1.149-1.273-2.998-1.273-5.539
                			c0-2.182,0.454-3.907,1.363-5.178c0.91-1.21,2.213-1.817,3.912-1.817c1.576,0,2.817,0.637,3.727,1.906
                			c0.91,1.213,1.365,2.909,1.365,5.089C112.412,21.495,111.958,23.341,111.046,24.612z M134.873,7.355
                			c-2.001-0.727-4.243-0.922-6.729-0.592c-2.486,0.334-4.517,1.41-6.092,3.227c-0.972,1.09-1.683,2.451-2.139,4.086
                			c-0.454,1.636-0.682,3.271-0.682,4.905c0,1.998,0.274,3.923,0.819,5.77c0.546,1.846,1.455,3.313,2.729,4.403
                			c1.211,1.09,2.834,1.862,4.864,2.315c2.028,0.455,4.048,0.408,6.048-0.136c2.24-0.485,4.091-1.725,5.546-3.724
                			c0.666-0.97,1.211-2.149,1.637-3.543c0.424-1.394,0.638-3.058,0.638-4.994c0-2.665-0.518-4.997-1.547-6.995
                			C138.874,9.839,137.174,8.264,134.873,7.355z M134.147,24.431c-0.728,1.09-1.563,1.773-2.503,2.045
                			c-0.938,0.273-1.862,0.241-2.771-0.09c-0.909-0.334-1.547-0.743-1.911-1.229c-0.909-1.09-1.425-3.012-1.545-5.767
                			c-0.124-2.755,0.454-4.828,1.728-6.223c0.423-0.422,1.091-0.771,2-1.046c0.909-0.271,1.819-0.255,2.729,0.046
                			c0.909,0.305,1.71,1,2.41,2.09c0.695,1.09,1.045,2.726,1.045,4.905C135.266,21.587,134.875,23.341,134.147,24.431z M157.607,7.355
                			c-2.001-0.727-4.243-0.922-6.728-0.592c-2.488,0.334-4.52,1.41-6.094,3.227c-0.972,1.09-1.684,2.451-2.137,4.086
                			c-0.456,1.636-0.682,3.271-0.682,4.905c0,1.998,0.272,3.923,0.817,5.77c0.546,1.846,1.455,3.313,2.729,4.403
                			c1.211,1.09,2.831,1.862,4.864,2.315c2.03,0.455,4.047,0.408,6.048-0.136c2.24-0.485,4.091-1.725,5.546-3.724
                			c0.666-0.97,1.211-2.149,1.637-3.543c0.424-1.394,0.638-3.058,0.638-4.994c0-2.665-0.516-4.997-1.547-6.995
                			C161.608,9.839,159.909,8.264,157.607,7.355z M156.879,24.431c-0.728,1.09-1.562,1.773-2.501,2.045
                			c-0.941,0.273-1.864,0.243-2.773-0.09c-0.91-0.334-1.545-0.743-1.909-1.229c-0.909-1.09-1.427-3.012-1.547-5.767
                			c-0.122-2.755,0.456-4.828,1.729-6.223c0.423-0.422,1.091-0.771,2-1.046c0.909-0.271,1.819-0.255,2.729,0.046
                			c0.909,0.305,1.71,1,2.41,2.09c0.695,1.09,1.045,2.726,1.045,4.905C158,21.587,157.607,23.341,156.879,24.431z M186.98,7.174
                			h-7.639l-7.73,8.9v-8.9h0.002V3.088c0-0.787-0.306-1.483-0.909-2.09c-0.607-0.605-1.335-0.908-2.183-0.908h-3.273v31.244h6.365
                			v-9.173c0-0.484,0.332-0.848,0.999-1.09c0.666-0.241,1.455,0.453,2.365,2.088l4.457,8.175h7.636l-8.728-14.896L186.98,7.174z
                			 M198.528,6.629c-3.455,0-6.153,1.122-8.092,3.361c-1.881,2.18-2.82,5.207-2.82,9.083c0,4.057,0.97,7.175,2.91,9.354
                			c1.938,2.241,4.639,3.361,8.095,3.361c2.848,0,5.212-0.696,7.093-2.09c1.879-1.332,3.149-3.27,3.819-5.813h-4.547
                			c-0.728,0-1.291,0.152-1.683,0.453c-0.396,0.304-0.622,0.545-0.682,0.727c-0.182,0.182-0.35,0.35-0.5,0.502
                			c-0.154,0.151-0.319,0.257-0.502,0.316c-0.728,0.424-1.606,0.638-2.636,0.638c-1.577,0-2.76-0.485-3.548-1.453
                			c-0.85-0.909-1.305-2.302-1.362-4.179h15.73c0.061-0.122,0.092-0.333,0.092-0.638v-0.997c0-3.999-0.974-7.114-2.909-9.356
                			C204.984,7.719,202.166,6.629,198.528,6.629z M194.074,16.802c0.058-1.573,0.513-2.784,1.362-3.634
                			c0.848-0.846,1.938-1.271,3.274-1.271c1.455,0,2.576,0.426,3.365,1.271c0.728,0.787,1.149,1.998,1.273,3.634H194.074z
                			 M218.852,7.811c-1.545,0.424-2.896,1.088-4.045,1.996c-1.216,0.971-2.169,2.258-2.866,3.861c-0.697,1.604-1.045,3.589-1.045,5.95
                			v11.716h6.365V18.89c0-1.814,0.424-3.148,1.273-3.997c0.847-0.846,2.15-1.271,3.911-1.271h2.091V7.174h-0.91
                			C221.99,7.174,220.399,7.388,218.852,7.811z M244.361,19.255c-1.214-1.03-3.363-1.938-6.456-2.727c-0.243,0-0.502-0.03-0.773-0.09
                			c-0.273-0.061-0.592-0.149-0.955-0.271c-3.154-0.667-4.729-1.483-4.729-2.454c0-0.726,0.273-1.271,0.819-1.635
                			c0.604-0.363,1.513-0.545,2.729-0.545c1.272,0,2.271,0.271,2.999,0.816c0.242,0.244,0.483,0.485,0.728,0.727
                			c0.605,1.03,1.485,1.545,2.639,1.545h3.909c-0.122-2.421-1.062-4.389-2.818-5.904c-1.881-1.391-4.396-2.088-7.549-2.088
                			c-2.91,0-5.274,0.697-7.093,2.088c-1.759,1.516-2.639,3.422-2.639,5.723c0,1.816,0.605,3.271,1.819,4.36
                			c1.091,1.09,3.243,2.028,6.457,2.816c0.546,0.182,1.363,0.363,2.454,0.545c2.547,0.545,3.82,1.361,3.82,2.451
                			c0,0.727-0.362,1.302-1.09,1.728c-0.789,0.423-1.729,0.635-2.82,0.635c-1.517,0-2.728-0.304-3.637-0.909
                			c-0.85-0.604-1.306-1.513-1.365-2.725h-6.182v0.271c0,2.665,0.877,4.693,2.636,6.087c1.697,1.394,4.275,2.09,7.731,2.09
                			c3.637,0,6.365-0.667,8.184-1.998c1.938-1.453,2.91-3.514,2.91-6.176C246.089,21.796,245.511,20.343,244.361,19.255z"/>
                		<path fill="#393A73" d="M12.283,0.146H3.276c-0.91,0-1.684,0.316-2.322,0.953C0.318,1.731,0,2.502,0,3.409v27.928h10.552
                			c2.974,0,5.188-0.214,6.644-0.636c1.516-0.423,2.941-1.148,4.277-2.177c1.575-1.209,2.85-2.961,3.821-5.259
                			c0.848-2.235,1.274-4.744,1.274-7.526c0-5.196-1.185-9.126-3.55-11.786C20.653,1.415,17.074,0.146,12.283,0.146z M18.016,23.355
                			c-1.396,1.572-3.58,2.357-6.552,2.357H6.277V5.585h6.005c2.669,0,4.608,0.814,5.823,2.447c1.273,1.632,1.912,4.203,1.912,7.707
                			C20.018,19.366,19.349,21.905,18.016,23.355z M38.215,6.673c-3.458,0-6.158,1.12-8.1,3.355c-1.88,2.176-2.82,5.197-2.82,9.067
                			c0,4.049,0.971,7.161,2.912,9.337c1.939,2.238,4.64,3.356,8.097,3.356c2.852,0,5.218-0.695,7.098-2.087
                			c1.88-1.329,3.153-3.264,3.821-5.803h-4.55c-0.728,0-1.29,0.151-1.683,0.452c-0.395,0.303-0.623,0.544-0.684,0.726
                			c-0.182,0.182-0.35,0.349-0.499,0.5c-0.151,0.151-0.32,0.258-0.502,0.317c-0.728,0.422-1.605,0.636-2.638,0.636
                			c-1.578,0-2.762-0.484-3.55-1.451c-0.847-0.906-1.304-2.297-1.363-4.17h15.741c0.061-0.123,0.09-0.333,0.09-0.637v-0.996
                			c0-3.991-0.969-7.102-2.911-9.339C44.673,7.761,41.854,6.673,38.215,6.673z M33.755,16.828c0.06-1.571,0.517-2.78,1.366-3.628
                			c0.848-0.844,1.939-1.269,3.275-1.269c1.455,0,2.577,0.425,3.365,1.269c0.728,0.785,1.151,1.996,1.273,3.628H33.755z
                			 M63.325,16.555c-0.242,0-0.5-0.03-0.771-0.09c-0.274-0.06-0.592-0.149-0.956-0.271c-3.153-0.666-4.731-1.48-4.731-2.449
                			c0-0.725,0.271-1.27,0.818-1.632c0.605-0.362,1.516-0.544,2.729-0.544c1.274,0,2.276,0.271,3.004,0.814
                			c0.242,0.243,0.486,0.484,0.729,0.726c0.605,1.028,1.485,1.542,2.637,1.542h3.914c-0.122-2.416-1.062-4.381-2.822-5.895
                			c-1.879-1.389-4.396-2.084-7.551-2.084c-2.911,0-5.277,0.695-7.096,2.084c-1.761,1.514-2.641,3.416-2.641,5.713
                			c0,1.813,0.605,3.265,1.82,4.353c1.092,1.088,3.245,2.024,6.461,2.812c0.546,0.181,1.363,0.363,2.455,0.544
                			c2.548,0.545,3.822,1.359,3.822,2.447c0,0.726-0.365,1.299-1.092,1.724c-0.789,0.423-1.729,0.634-2.82,0.634
                			c-1.516,0-2.729-0.303-3.639-0.907c-0.851-0.604-1.307-1.51-1.367-2.72h-6.187v0.271c0,2.66,0.88,4.685,2.64,6.075
                			c1.697,1.392,4.275,2.087,7.732,2.087c3.641,0,6.369-0.666,8.189-1.995c1.941-1.45,2.912-3.507,2.912-6.165
                			c0-1.815-0.576-3.267-1.729-4.353C68.572,18.248,66.418,17.342,63.325,16.555z M85.618,16.465l8.643-9.247h-7.643l-7.732,8.885
                			V3.138c0-0.785-0.305-1.48-0.91-2.086c-0.606-0.604-1.334-0.906-2.184-0.906h-3.275v31.188h6.369v-9.156
                			c0-0.484,0.334-0.847,1.002-1.088c0.665-0.241,1.455,0.452,2.365,2.084l4.457,8.16h7.643L85.618,16.465z"/>                    
                    </svg>
        
                </a>
                
            </footer>
            
        </div>
    	
	</body>
	
</html>
