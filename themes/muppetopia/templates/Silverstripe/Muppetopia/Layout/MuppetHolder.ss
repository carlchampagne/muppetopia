<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
	</article>
	<div id="muppets" class="textCenter section">
		<ul class="listing">
		<% loop $Children %>
			<li class="inlineBlock vAlignTop">
				<a href="$Link" data-segment="$URLSegment" class="block animateFast">
					<img src="$Photo.Pad(250,250, FFFFFF, 100).URL" alt="$Title" class="block marginBottom10" />
					<h2 class="muppetName fontSize18 marginBottom10">$Title</h2>
					<p class="fontSize14 fontLight colorBlack description">As seen in: <strong>$Type</strong></p>
				</a>
			</li>
		<% end_loop %>
		</ul>
	</div>
	
		$Form
		$CommentsForm
</div>