
<div id="main-content" class="relative textCenter">
	<div class="box">
		$Content
	</div>
</div>
<% if $Muppet %>
	<% loop $Muppet %>
	<div id="featured" class="relative textCenter"<% if $BgColor %> style="background: #$BgColor;"<% end_if %>>
    	<div class="box">
	        <h2>$Title</h1>
		</div>
        <figure class="relative animateFast">
        	<img src="$Photo.Pad(400,400, FFFFFF, 100).URL" alt="$Title" class="inlineBlock" />
            <figcaption>
            	<div>$Content</div>
            </figcaption>
        </figure> 
	</div>
	<% end_loop %>
<% end_if %>
<div class="content-container unit size3of4 lastUnit">
		$Form
		$CommentsForm
</div>