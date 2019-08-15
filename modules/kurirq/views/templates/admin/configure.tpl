{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="row">
	<div class="col-md-6">
		<div class="panel" style="min-height:250px">
			<h3><i class="icon icon-info-circle"></i> {l s='KURIRQ' mod='kurirq'}</h3>
			<p>
				<strong>{l s='Hi, Thank you for purchasing KURIRQ!' mod='kurirq'}</strong><br />
				{l s='KURIRQ is an All in one Indonesian shipping module using carrier such as JNE, TIKI, WAHANA, POS, etc. Support domestic and international shipment. For module documentation, please read it here' mod='kurirq'} : <a href="http://kurirq.com/panduan" target="_blank">{l s='KURIRQ Documentation' mod='kurirq'}</a></
				p>
			<p>{l s='If you need support/assistance feel free to contact Prestanesia at' mod='kurirq'}:</p>	
			<ul>
				<li><strong>{l s='Email' mod='kurirq'}</strong>: <a href="mailto:prestanesia@gmail.com">prestanesia@gmail.com</a></li>
				<li><strong>{l s='Phone/SMS/Whatsapp' mod='kurirq'}</strong>: +6287823499375</li>
			</ul>	
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel" style="min-height:250px">
			<h3><i class="icon icon-key"></i> {if $installed == 0}{l s='API setting' mod='kurirq'}{else}{l s='Maintenance' mod='kurirq'}{/if}</h3>
			{if $installed == 0 && ($shopEnable == 0 || $oldPHPVersion == 1)}
			<div class="alert alert-danger">
				<p>{l s='Shop is in maintenance mode or you are using PHP version 5.3 or older. Please enable your shop or use PHP version 5.4 or newer to activate this module.' mod='kurirq'}</p>
			</div>
			{else}
			{if $installed == 0}
			<p>{l s='Please enter your valid API key. API key is required to authenticate communication to Prestanesia server for getting shipping fee.' mod='kurirq'}</p>
			{else}
			<div class="alert alert-success">{l s='API key has been validated.' mod='kurirq'}</div>
			{/if}
			<form class="form-inline" action="{$post_uri|escape:'htmlall'}" method="post" style="margin-bottom: 10px;">
				<div class="form-group">
					{if $installed == 0}
					<input type="text" class="form-control" name="apikey" id="apikey" value="{$apikey}">
					<button class="btn btn-primary" type="submit" name="submitCheckAPI">{l s='Activate' mod='kurirq'}</button>
					{/if}
					{if $installed == 1}
					<button class="btn btn-primary" type="submit" name="submitClearCache"><i class="icon icon-trash"></i> {l s='Clear delivery fee cache' mod='kurirq'}</button>
					<button class="btn btn-primary" type="submit" name="submitResetDistrict"><i class="icon icon-refresh"></i> {l s='Reset district data' mod='kurirq'}</button>
					{/if}
				</div>
			</form>	
			{/if}
			<p>{l s='Module information' mod='kurirq'}:</p>	
			<ul>
				<li><strong>Domain</strong>: {$domain}</li>
				<li><strong>City</strong>: {$city}</li>
				<li><strong>Paket</strong>: {$paket}</li>
			</ul>
		</div>
	</div>
</div>
