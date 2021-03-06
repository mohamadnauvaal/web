<div class="supercheckout-checkout-content"></div>
<ul>
    <li>
        <p class="supercheckout-numbers supercheckout-numbers-ship">{l s='Delivery Address' mod='supercheckout'}</p>
    </li>
</ul>
{if !isset($guest_information)}
    {if $customer.addresses}
        <div class="supercheckout-extra-wrap">
            <input type="radio" name="shipping_address_value" value="0" id="shipping-address-existing" checked="checked" />
            <label for="shipping-address-existing">{l s='Use Existing Address' mod='supercheckout'}</label>
        </div>
        <div id="shipping-existing" class="styled-select">
            <select name="shipping_address_id" style="width: 92%; margin-bottom: 15px;">
                {foreach from=$customer.addresses item='shipping_addr'}                                
                    <option value="{$shipping_addr['id']}" {if $shipping_addr['id'] == $id_address_delivery} selected="selected"{/if}>{$shipping_addr['alias']}</option>
                {/foreach}
            </select>
            <div id="delivery_address_detail" class="supercheckout_address_detail"></div>
        </div>
        <div class="supercheckout-extra-wrap">
            <p>
                <input type="radio" name="shipping_address_value" value="1" id="shipping-address-new" />
                <label for="shipping-address-new">{l s='Use New Address' mod='supercheckout'}</label>
            </p>
        </div>
    {/if}
{/if}
<div id="shipping-new" style="display: {if isset($guest_information)}block{else if $customer.addresses}none{else}block{/if};">
    <table class="supercheckout-form" id="shipping_address_table">
        {assign var='display_row' value=''}
        {assign var='google_region_type' value=''}
        {foreach from=$settings['shipping_address'] key='p_address_key' item='p_address_field'}
            {$display_row = ''}
            {$google_region_type = ''}
            {if $settings['shipping_address'][$p_address_key][$user_type]['display'] eq 1 || (isset($settings['shipping_address'][$p_address_key]['conditional']) && $settings['shipping_address'][$p_address_key]['conditional'] eq 1)}
                {if $p_address_key eq 'dni' && !$need_dni}
                    {$display_row = 'display:none;'}
                {else if $p_address_key eq 'dni' && $settings['shipping_address'][$p_address_key][$user_type]['display'] == 0}
                    {$display_row = 'display:none;'}
                {/if}
                {if $p_address_key eq 'vat_number' && $settings['shipping_address'][$p_address_key][$user_type]['display'] == 0}
                    {$display_row = 'display:none;'}
                {/if}
                {if ($p_address_key eq 'postcode' || $p_address_key eq 'id_country' || $p_address_key eq 'id_state' || $p_address_key eq 'alias') && !$settings['shipping_address'][$p_address_key][$user_type]['require'] && !$settings['shipping_address'][$p_address_key][$user_type]['display']}
                    {$display_row = 'display:none;'}
                {/if}
                {if $p_address_key eq 'postcode'}
                    {$google_region_type='postal_code'}
                {else if $p_address_key eq 'address1'}
                    {$google_region_type='street_number'}
                {else if $p_address_key eq 'address2'}
                    {$google_region_type='route'}
                {else if $p_address_key eq 'city'}
                    {$google_region_type='locality'}
                {else if $p_address_key eq 'id_country'}
                    {$google_region_type='country'}
                {else if $p_address_key eq 'id_state'}
                    {$google_region_type='administrative_area_level_1'}
                {/if}
                {if $p_address_key eq 'id_state'}
                    <script>var show_shipping_state = {$settings['shipping_address'][$p_address_key][$user_type]['display']};</script>
                {/if}
                {if $p_address_key eq 'postcode'}
                    <script>var show_shipping_postcode = {$settings['shipping_address'][$p_address_key][$user_type]['display']};</script>
                    
                {/if}
                
                
                {if $settings['shipping_address'][$p_address_key]['html_format'] == 1}
                    {if $p_address_key eq 'postcode'}
                        <tr class="sort_data" id="shipping_post_code" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                        {else}
                        <tr class="sort_data" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                    {/if}
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        {l s={$settings['shipping_address'][$p_address_key]['title']} mod='supercheckout'}:
                                        {if $p_address_key eq 'vat_number'}
                                            <span style="display:{if $need_vat}inline{else}none{/if};" class="supercheckout-required">*</span>
                                        {else}
                                            <span style="display:{if $settings['shipping_address'][$p_address_key][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span>
                                        {/if}
                                        {if $p_address_key eq 'id_country' || $p_address_key eq 'id_state'}
                                            <input type='hidden' class="{$google_region_type|escape:'htmlall':'UTF-8'}"/>
                                            <select name="shipping_address[{$p_address_key}]" class="supercheckout-large-field" {if $p_address_key eq 'id_country'} onchange="restrictAutofillbyCountry(this)" {/if}>
                                                {if $p_address_key eq 'id_country'}
                                                    <option value="0">--</option>
                                                    {foreach from=$countries item='country'}
                                                        <option value="{$country['id_country']}"  id='{$country['iso_code']}' {if $country['id_country'] == $default_country} selected="selected"{/if}>{$country['name']}</option>                                        
                                                    {/foreach}
                                                {else}
                                                    <option value="0">{l s='Select State' mod='supercheckout'}</option>
                                                {/if}                            
                                            </select>
                                        {else if  $p_address_key eq 'other'}
                                            <textarea name="shipping_address[{$p_address_key}]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                                        {else}
                
                                            {if $settings['google_auto_address']['enable'] eq 1}
                                                <input autocomplete="off" type="text"  {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'} placeholder="{l s='Enter a location' mod='supercheckout'}" id='shipping_address_{$p_address_key|escape:'htmlall':'UTF-8'}'onFocus="geolocate()"{/if} name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field {$google_region_type|escape:'htmlall':'UTF-8'} {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'}autocomplete{/if}" />
                                                {else}
                                                <input autocomplete="off" type="text" name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field" />
                                            {/if}
                                        {/if}
                                    </td>
                    
                {elseif $settings['shipping_address'][$p_address_key]['html_format'] == 2}
                     {*{if $p_address_key eq 'postcode'}
                        <tr class="sort_data" id="shipping_post_code" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                        {else}
                        <tr class="sort_data" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                    {/if}*}
                        <td>{l s={$settings['shipping_address'][$p_address_key]['title']} mod='supercheckout'}:
                            {if $p_address_key eq 'vat_number'}
                                <span style="display:{if $need_vat}inline{else}none{/if};" class="supercheckout-required">*</span>
                            {else}
                                <span style="display:{if $settings['shipping_address'][$p_address_key][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span>
                            {/if}
                            {if $p_address_key eq 'id_country' || $p_address_key eq 'id_state'}
                                <input type='hidden' class="{$google_region_type|escape:'htmlall':'UTF-8'}"/>
                                <select name="shipping_address[{$p_address_key}]" class="supercheckout-large-field" {if $p_address_key eq 'id_country'} onchange="restrictAutofillbyCountry(this)" {/if}>
                                    {if $p_address_key eq 'id_country'}
                                        <option value="0">--</option>
                                        {foreach from=$countries item='country'}
                                            <option value="{$country['id_country']}"  id='{$country['iso_code']}' {if $country['id_country'] == $default_country} selected="selected"{/if}>{$country['name']}</option>                                        
                                        {/foreach}
                                    {else}
                                        <option value="0">{l s='Select State' mod='supercheckout'}</option>
                                    {/if}                            
                                </select>
                            {else if  $p_address_key eq 'other'}
                                <textarea name="shipping_address[{$p_address_key}]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                            {else}
    
                                {if $settings['google_auto_address']['enable'] eq 1}
                                    <input autocomplete="off" type="text"  {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'} placeholder="{l s='Enter a location' mod='supercheckout'}" id='shipping_address_{$p_address_key|escape:'htmlall':'UTF-8'}'onFocus="geolocate()"{/if} name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field {$google_region_type|escape:'htmlall':'UTF-8'} {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'}autocomplete{/if}" />
                                    {else}
                                    <input autocomplete="off" type="text" name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field" />
                                {/if}
                            {/if}
                        </td>
                </tr>
                            </table>
                    </tr>
                        {else}
                    {if $p_address_key eq 'postcode'}
                        <tr class="sort_data" id="shipping_post_code" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                        {else}
                        <tr class="sort_data" data-percentage="{$settings['shipping_address'][$p_address_key]['sort_order']}" style="{$display_row}" >
                    {/if}
                        <td>{l s={$settings['shipping_address'][$p_address_key]['title']} mod='supercheckout'}:
                            {if $p_address_key eq 'vat_number'}
                                <span style="display:{if $need_vat}inline{else}none{/if};" class="supercheckout-required">*</span>
                            {else}
                                <span style="display:{if $settings['shipping_address'][$p_address_key][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span>
                            {/if}
                            {if $p_address_key eq 'id_country' || $p_address_key eq 'id_state'}
                                <input type='hidden' class="{$google_region_type|escape:'htmlall':'UTF-8'}"/>
                                <select name="shipping_address[{$p_address_key}]" class="supercheckout-large-field" {if $p_address_key eq 'id_country'} onchange="restrictAutofillbyCountry(this)" {/if}>
                                    {if $p_address_key eq 'id_country'}
                                        <option value="0">--</option>
                                        {foreach from=$countries item='country'}
                                            <option value="{$country['id_country']}"  id='{$country['iso_code']}' {if $country['id_country'] == $default_country} selected="selected"{/if}>{$country['name']}</option>                                        
                                        {/foreach}
                                    {else}
                                        <option value="0">{l s='Select State' mod='supercheckout'}</option>
                                    {/if}                            
                                </select>
                            {else if  $p_address_key eq 'other'}
                                <textarea name="shipping_address[{$p_address_key}]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                            {else}
    {*                            <input type="text" name="shipping_address[{$p_address_key}]" value="" class="supercheckout-large-field" />*}
                                {if $settings['google_auto_address']['enable'] eq 1}
                                    <input autocomplete="off" type="text"  {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'} placeholder="{l s='Enter a location' mod='supercheckout'}" id='shipping_address_{$p_address_key|escape:'htmlall':'UTF-8'}'onFocus="geolocate()"{/if} name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field {$google_region_type|escape:'htmlall':'UTF-8'} {if $p_address_key eq 'address1'|| $p_address_key eq 'address2'}autocomplete{/if}" />
                                    {else}
                                    <input autocomplete="off" type="text" name="shipping_address[{$p_address_key|escape:'htmlall':'UTF-8'}]" value="" class="supercheckout-large-field" />
                                {/if}
                            {/if}

                        </td>
                    </tr>
                {/if}
            {/if}
        {/foreach}    
    </table>
</div>

<!-- INSERT INTO #SHIPPING ADDRESS FORM -->
<!-- Start - Code to insert custom fields in shipping address form block -->
<div class="div_custom_fields">
{foreach from=$array_fields item=field}
    {if $field['position'] eq 'shipping_address_form'}
    <div class="supercheckout-blocks">
        {if $field['type'] eq "textbox"}
            <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
            <input type="text" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field['default_value']}" class="supercheckout-large-field width_100">
            <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
        {/if}

        {if $field['type'] eq "textarea"}
            <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
            <textarea name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100" style="width: 100%; height: 100px;">{$field['default_value']}</textarea>
            <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
        {/if}

        {if $field['type'] eq "selectbox"}
            <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
            <select name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100">
            {foreach from=$field['options'] item=field_options}
                <option {if $field_options['default_value'] eq $field_options['option_value']}selected{/if} value="{$field_options['option_value']}">{$field_options['option_label']}</option>
            {/foreach}
            </select>
            <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
        {/if}

        {if $field['type'] eq "radio"}
            <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
            {assign var=radio_counter value=1}
            {foreach from=$field['options'] item=field_options}
                <div class="supercheckout-extra-wrap">
                    <p>
                        <div class="radio" id="uniform-field_{$field['id_velsof_supercheckout_custom_fields']}"><span>
                                <input type="radio" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field_options['option_value']}" {if $field_options['default_value'] eq $field_options['option_value']}checked{/if}>
                            </span></div>
                        <label for="field_{$field['id_velsof_supercheckout_custom_fields']}">{$field_options['option_label']}</label>
                    </p>
                </div>
            {assign var=radio_counter value=$radio_counter+1}
            {/foreach}
            <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
        {/if}

        {if $field['type'] eq "checkbox"}
        <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
        {foreach from=$field['options'] item=field_options}
            <div class="input-box input-field_{$field['id_velsof_supercheckout_custom_fields']}">
                <div class="checker" id="uniform-field_{$field['id_velsof_supercheckout_custom_fields']}">
                    <span class="checked">
                        <input {if $field_options['default_value'] eq $field_options['option_value']}checked{/if} type="checkbox" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}][]" value="{$field_options['option_value']}">
                    </span>
                </div>
                <label for="field_{$field['id_velsof_supercheckout_custom_fields']}"><b>{$field_options['option_label']}</b></label>
            </div>
        {/foreach}
        <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
    {/if}
    </div>
    {/if}
{/foreach}
</div>
<!-- End - Code to insert custom fields in shipping address form block -->
    
<ul>
    <li>
        <div class="input-box input-different-shipping" {if !$settings['show_use_delivery_for_payment_add'][$user_type]} style="display:none;" {/if}>
            <input type="checkbox" name="use_for_invoice" id="use_for_invoice" 
                   {if $settings['use_delivery_for_payment_add'][$user_type]}checked="checked"{/if}
                   >
            <label for="use_for_invoice"><b>{l s='Same invoice address' mod='supercheckout'}</b></label>
        </div>
    </li>
</ul>
            
<div style="display: none;">
    <label>{l s='First Name' mod='supercheckout'}</label>
    <label>{l s='Last Name' mod='supercheckout'}</label>
    <label>{l s='Company' mod='supercheckout'}</label>
    <label>{l s='Vat Number' mod='supercheckout'}</label>
    <label>{l s='Address Line 1' mod='supercheckout'}</label>
    <label>{l s='Address Line 2' mod='supercheckout'}</label>
    <label>{l s='Zip/Postal Code' mod='supercheckout'}</label>
    <label>{l s='City' mod='supercheckout'}</label>
    <label>{l s='Country' mod='supercheckout'}</label>
    <label>{l s='State' mod='supercheckout'}</label>
    <label>{l s='Identification Number' mod='supercheckout'}</label>
    <label>{l s='Home Phone' mod='supercheckout'}</label>
    <label>{l s='Mobile Phone' mod='supercheckout'}</label>
    <label>{l s='Address Title' mod='supercheckout'}</label>
    <label>{l s='Other Information' mod='supercheckout'}</label>                
</div>
{*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer tohttp://www.prestashop.com for more information.
* We offer the best and most useful modules PrestaShop and modifications for your online store.
*
* @category  PrestaShop Module
* @author    knowband.com <support@knowband.com>
* @copyright 2016 Knowband
*}