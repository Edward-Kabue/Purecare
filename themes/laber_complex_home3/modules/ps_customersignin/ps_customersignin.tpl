<div id="_desktop_user_info">
  <div class="user-info laber-user-info">
	
    {if $logged}
      <a class="logout"
        href="{$logout_url}"
        rel="nofollow">
        <i class="fa fa-user"></i>
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
      <a class="account"
        href="{$my_account_url}"
        title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}"
        rel="nofollow">
        {$customerName}
      </a>
    {else}

		<a href="{$my_account_url}"
		title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}"
		rel="nofollow">
			<i class="fa fa-user"></i>
			{l s='Sign in' d='Shop.Theme.Actions'}
		</a>
		<a class="register" href="{$urls.pages.register}">
			<span>{l s='Or' d='Shop.Theme.Actions'}</span> {l s='Register' d='Shop.Theme.Actions'}
		</a>
    {/if}
  </div>
</div>