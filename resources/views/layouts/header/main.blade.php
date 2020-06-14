<div class="container c-cont">

	<div class="jumbotron bg-info border-bottom border-warning jumbotron-cnina">
		<div class="row">
			<div class="col-sm-11 shop-title">{{ shop_name }}</div>

			<div class="col-sm-1 text-right lang">
				<a class="dropdown-toggle" href="#" role="button" id="langDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ locale_name|trans|capitalize }}</a>

				<div class="dropdown-menu" aria-labelledby="langDropdownMenu">
					<a class="dropdown-item" lang="en" href="#">{{ 'langs.en'|trans|capitalize }}</a>
					<a class="dropdown-item" lang="uk" href="#">{{ 'langs.uk'|trans|capitalize }}</a>
					<a class="dropdown-item" lang="ru" href="#">{{ 'langs.ru'|trans|capitalize }}</a>
				</div>
			</div>
		</div>
	</div>

</div>