{addJsDefL name=District}{l s='District' mod='kurirq'}{/addJsDefL}
{addJsDefL name=SubDistrict}{l s='Sub District' mod='kurirq'}{/addJsDefL}
{addJsDef kurirq_ajax_url=$kurirq_ajax_url}
{addJsDef kurirq_token=$kurirq_token}
{if $page_name == 'address' && isset($district_list)}
<script type="text/javascript">
$(document).ready(function(){
	$('#id_district').append('{$district_list}');
	$('#id_subdistrict').append('{$subdistrict_list}');
});
</script>
{/if}