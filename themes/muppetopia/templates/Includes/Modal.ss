<div id="$URLSegment" class="lightbox fixed textCenter cursorPointer none typography" role="dialog">
	<div class="container inlineBlock relative textLeft cursorText round8 modalGlow ajaxForm"<% if $BgColor %> style="background: #$BgColor; background: -moz-linear-gradient(top, #$BgColor 0%, #ededed 100%); background: -webkit-linear-gradient(top, #$BgColor 0%,#ededed 100%); background: linear-gradient(to bottom, #$BgColor 0%,#ededed 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#$BgColor', endColorstr='#ededed',GradientType=0 );"<% end_if %>>
		<img src="$Photo.Pad(250,250, FFFFFF, 100).URL" alt="$Title" class="col1" />
		<div class="col2">
			<h2 class="fontSize30 strong marginBottom20">$Title</h2>
			<div class="fontSize16">$Content</div>
		</div>
		<a href='#;' class='absolute close bgCenter bgContain repeatN ir' title='Close' aria-label='Close'>Close</a>
    </div>
</div>