{if Hook::exec('displayPosition1')}
<div class="displayPosition displayPosition1">
	<div class="container">
		<div class="row">
			{hook h="displayPosition1"}
		</div>
	</div>
</div>
{/if}
{if Hook::exec('displayPosition2')}
<div class="displayPosition displayPosition2">
	<div class="container">
	<div class="row">
		{hook h="displayPosition2"}
	</div>
	</div>
</div>
{/if}
{if Hook::exec('displayPosition3')}
<div class="displayPosition displayPosition3">
	
		<div class="container">
			<div class="row">
				{hook h="displayPosition3"}
			</div>
		</div>
</div>
{/if}